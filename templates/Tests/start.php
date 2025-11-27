<?php
// Place this PHP block at the top of your view file, before any HTML output.
// This handles insertion on first load and calculation/update on refresh.
// Adjust model/table names if needed. Assumes CakePHP ORM.

use Cake\ORM\TableRegistry;
use Cake\I18n\FrozenTime; // For proper datetime handling if needed

$TestAttempts = TableRegistry::getTableLocator()->get('TestAttempts');

// Get current user and test (assuming $authUser and $test are available from controller)
$users_id = $authUser['id'];
$tests_id = $test->id;
$now = date('Y-m-d H:i:s');

// Parse test duration to total seconds (assuming format HH:MM:SS)
$duration_parts = explode(':', $test->test_duration_time);
$total_sec = ((int)$duration_parts[0] * 3600) + ((int)$duration_parts[1] * 60) + ((int)$duration_parts[2]);

// Find existing active attempt (latest started one)
$attempt = $TestAttempts->find()
    ->where([
        'users_id' => $users_id,
        'tests_id' => $tests_id,
        'status' => 'started'
    ])
    ->order(['created' => 'DESC'])
    ->first();

$remaining_sec = 0; // Default to 0 if expired
if ($attempt) {
    // Calculate elapsed time
    $start_timestamp = strtotime($attempt->start_time);
    $elapsed = strtotime($now) - $start_timestamp;
    $remaining_sec = max(0, $total_sec - $elapsed);

    if ($remaining_sec <= 0) {
        // Test expired: Update status and end_time
        $attempt->status = 'expired';
        $attempt->end_time = $now;
        $attempt->modified = $now;
        $TestAttempts->save($attempt);
        // Optional: Redirect or show message (e.g., $this->Flash->error('Test time expired.');)
        // For now, just set remaining to 0 and let JS alert on load
    } else {
        // Update modified timestamp on refresh
        $attempt->modified = $now;
        $TestAttempts->save($attempt);
    }
} else {
    // First load: Create new attempt
    $start_time = $now;
    $end_time = date('Y-m-d H:i:s', strtotime($now . ' + ' . $total_sec . ' seconds'));

    $attempt_data = [
        'users_id' => $users_id,
        'tests_id' => $tests_id,
        'status' => 'started',
        'start_time' => $start_time,
        'end_time' => $end_time,
        'created' => $now,
        'modified' => $now
    ];

    $new_attempt = $TestAttempts->newEntity($attempt_data);
    $TestAttempts->save($new_attempt);
    $remaining_sec = $total_sec;
}

// Optional: If expired, you can add here: echo $this->element('expired_message'); or similar
?>
<style>
.q_srno{
border-style: outset;border-radius: 50%;padding-right:4px;padding-left:4px;background-color: white;color: #0a0a0a;
}
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h4>
    <?php echo ucfirst($test->test_name); ?>
    <div class="pull-right">
      <!-- Buttons commented out for brevity -->
    </div>
  </h4>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            <div class="row begin-countdown">
              <div class="col-md-12 text-right">
                <div class="row col-md-2 text-left">
                  <p><b>Today : </b>
                  <span id="current-date-time"></span></p>
                </div>  
                <div class="col-md-3">
                <p><b>Start Time : </b>
                  <span id="date-start-time"><?php echo $test->date_start_from; ?></span></p>
                </div>
                <div class="col-md-3">
                  <p><b>End Time : </b>
                  <span id="date-valid-till"><?php echo $test->date_valid_till; ?></span></p>
                </div>
                <div class="col-md-2">
                  <p><b>Duration : </b>
                  <span id="test_duration_time">
                    <?php
                      $duration_in_hms = explode(":",$test->test_duration_time); 
                      echo $duration_in_hms[1]." Min , " .$duration_in_hms[2]." Sec." ; 
                    ?></span></p>
                </div>
                <div class="col-md-2">
                  <p><b>Remaining Time : </b><span id="pageBeginCountdownText"><?php echo $remaining_sec; ?></span> sec.
                  <progress value="<?php echo $remaining_sec; ?>" max="<?php echo $total_sec; ?>" id="pageBeginCountdown"></progress></p>
                </div>
              </div>
            </div>
          
          <div class="box-tools">
            <!-- Form commented out for brevity -->
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead></thead>
            <tbody>
              <?= $this->Form->create(null, ['url' => ['controller' => 'Tests', 'action' => 'end_test', $test->id], 'type' => 'POST']); ?>
              <?php
              echo $this->Form->hidden('other_data[tests_time]', ['id' => 'tests_time', 'type' => 'text', 'value' => $remaining_sec]);
              echo $this->Form->hidden('other_data[user_id]', ['value' => $authUser['id'], 'type' => 'text']);

              $questions = $test->tests_details; // Assuming $test->tests_details contains your questions
              $cnt = 1;
              $t_cnt = count($questions);
              for ($i = 0; $i < $t_cnt; $i += 2) {
                $question1 = isset($questions[$i]) ? $questions[$i] : null;
                $question2 = isset($questions[$i + 1]) ? $questions[$i + 1] : null;
              ?>
                <tr>
                  <td style="color:white;background-color:#222d32" class="col-md-6">
                    <?php if ($question1) 
                    echo "<span class='q_srno'>".$cnt++."</span> ".$question1->quetion->tittle; ?>
                  </td>
                    <?php if ($question2) : ?>
                  <td style="color:white;background-color:#222d32" class="col-md-6">
                    <?php if ($question2) 
                    echo "<span class='q_srno'>".$cnt++."</span> ".$question2->quetion->tittle; ?>
                  </td>
                    <?php endif; ?>
                </tr>
                <tr>
                  <td>
                    <?php if ($question1) : ?>
                      <?php
                      $available_options_value_desc = [];
                      foreach ($question1->quetion->quetions_details as $quetions_details_v) {
                        $available_options_value_desc[$quetions_details_v->available_options_values_id] = $quetions_details_v->available_options_value->description;
                      }
                      echo $this->Form->radio($quetions_details_v->quetions_id . '[selected]', $available_options_value_desc, ['legend' => 'Choose an option']);
                      ?>
                    <?php endif; ?>
                  </td>
                  <?php if ($question2) : ?>
                    <td>
                      <?php
                      $available_options_value_desc = [];
                      foreach ($question2->quetion->quetions_details as $quetions_details_v) {
                        $available_options_value_desc[$quetions_details_v->available_options_values_id] = $quetions_details_v->available_options_value->description;
                      }
                      echo $this->Form->radio($quetions_details_v->quetions_id . '[selected]', $available_options_value_desc, ['legend' => 'Choose an option']);
                      ?>
                    </td>
                  <?php endif; ?>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
          <?php echo $this->Form->submit(__('End Test')); ?>
          <?php $this->Form->end(); ?>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

<script>
  // $(function() {
  //   $("#accordion").accordion({
  //     collapsible: true
  //   });
  // });
</script>
<script type="text/javascript">
  let countdownTimer;
  let remainingSeconds = parseInt(document.getElementById('tests_time').value) || <?php echo $total_sec; ?>; // Use dynamic total_sec as fallback
  function startCountdown() {
    clearInterval(countdownTimer);
    if (remainingSeconds <= 0) {
      alert('Test time expired or finished.');
      return; // Don't start countdown if already 0
    }
    ProgressCountdown(remainingSeconds, 'pageBeginCountdown', 'pageBeginCountdownText').then(() => {
      alert('Countdown finished.');
      // Optional: Auto-submit form or redirect on timeout
      // document.querySelector('form').submit();
    });
  }

  function stopCountdown() {
    clearInterval(countdownTimer);
  }

  function resetCountdown() {
    clearInterval(countdownTimer);
    remainingSeconds = <?php echo $total_sec; ?>; // Reset to total duration (but typically not used on refresh)
    document.getElementById('pageBeginCountdown').value = remainingSeconds;
    document.getElementById('pageBeginCountdownText').textContent = remainingSeconds;
    document.getElementById('tests_time').value = remainingSeconds; // Update hidden input value
  }
  function ProgressCountdown(timeleft, bar, text) {
  return new Promise((resolve, reject) => {
    countdownTimer = setInterval(() => {
      timeleft--;
      //console.log(timeleft);
      remainingSeconds = timeleft;
      document.getElementById('pageBeginCountdown').value = remainingSeconds;
      document.getElementById('pageBeginCountdownText').textContent = remainingSeconds;
      document.getElementById('tests_time').value = remainingSeconds; // Update hidden input value
      
      if (timeleft <= 0) {
        clearInterval(countdownTimer);
        resolve(true);
      }
    }, 1000);
  });
}
startCountdown();
// JavaScript code to display date and time
document.addEventListener('DOMContentLoaded', function() {
    function updateDateTime() {
        var dateTimeElement = document.getElementById('current-date-time');
        if (dateTimeElement) {
            // Update the element with the current date and time in 24-hour format
            dateTimeElement.innerText = moment().format('MMMM Do YYYY, HH:mm:ss');
        }
        //console.log(moment().format('MMMM Do YYYY, HH:mm:ss'));
    }

    // Initial call to display the date and time immediately
    updateDateTime();

    // Update the date and time every second
    setInterval(updateDateTime, 1000);
});

document.addEventListener('DOMContentLoaded', function() {
    var dateStartFromElement = document.getElementById('date-start-time');
    if (dateStartFromElement) {
        var dateStartFrom = moment(dateStartFromElement.innerText.trim(), 'M/D/YY, h:mm A');
        dateStartFromElement.innerText = dateStartFrom.format('MMMM Do YYYY, HH:mm:ss');
    }

    var dateEndToElement = document.getElementById('date-valid-till');
    if (dateEndToElement) {
        var dateEndTo = moment(dateEndToElement.innerText.trim(), 'M/D/YY, h:mm A');
        dateEndToElement.innerText = dateEndTo.format('MMMM Do YYYY, HH:mm:ss');
    }
});
</script>