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
          <h3 class="box-title"><?php echo __('List'); ?></h3>
          <div class="pull-right">
            <div class="row begin-countdown">
              <div class="col-md-12 text-center">
                <progress value="10" max="10" id="pageBeginCountdown"></progress>
                <p> Ending in <span id="pageBeginCountdownText">600</span> seconds</p>
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
              echo $this->Form->hidden('other_data[tests_time]', ['id' => 'tests_time', 'type' => 'text']);
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
  let remainingSeconds = parseInt(document.getElementById('tests_time').value) || 600; // Retrieve initial value from hidden input or default to 600
  function startCountdown() {
    clearInterval(countdownTimer);
    ProgressCountdown(remainingSeconds, 'pageBeginCountdown', 'pageBeginCountdownText').then(() => {
      alert('Countdown finished.');
    });
  }

  function stopCountdown() {
    clearInterval(countdownTimer);
  }

  function resetCountdown() {
    clearInterval(countdownTimer);
    remainingSeconds = 600; // Reset to initial value
    document.getElementById('pageBeginCountdown').value = remainingSeconds;
    document.getElementById('pageBeginCountdownText').textContent = remainingSeconds;
    document.getElementById('tests_time').value = remainingSeconds; // Update hidden input value
  }
  function ProgressCountdown(timeleft, bar, text) {
  return new Promise((resolve, reject) => {
    countdownTimer = setInterval(() => {
      timeleft--;
      console.log(timeleft);
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

</script>
