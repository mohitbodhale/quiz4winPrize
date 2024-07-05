<!-- Content Header (Page header) -->
<section class="content-header">
  <h4>
    <?php 
    echo ucfirst($test->test_name);//'test_name'
    ?> 
    <div class="pull-right">
    <!-- <button id="start" type="button" class="btn btn-primary" onclick="startCountdown()">Start</button>
<button id="stop" type="button" class="btn btn-danger" onclick="stopCountdown()">Stop</button>
<button id="reset" type="button" class="btn btn-success" onclick="resetCountdown()">Reset</button> -->
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
              <p> Ending in <span id="pageBeginCountdownText">600 </span> seconds</p>
            </div>
          </div>
          </div>

          <div class="box-tools">
            <!-- <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
              </div>
            </form> -->
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead></thead>
            <tbody>
            <?= $this->Form->create(null, ['url' => ['controller' => 'Tests', 'action' => 'end_test',$test->id],'type'=>'POST']); ?>
            You have <span id=”timer”><?php echo $timeTilEnd; ?></span> seconds left
            <?php 
              echo $this->Form->control('other_data[tests_time]',['id'=>'tests_time','type'=>'text']);
              // debug($authUser['id']);
              echo $this->Form->hidden('other_data[user_id]',[ 'value'=>$authUser['id'],'type'=>'text']);

              $t_cnt = count($test->tests_details);  
              $cnt = 1;
              foreach ($test->tests_details as $test):
                ?>
              <tr>
              <td>  
                <tr class="">
                  <td class="" style="color:white;background-color:#222d32"><?php echo $cnt;?></td>  
                  <td class="" style="color:white;background-color:#222d32">
                    <?php 
                        echo $test->quetion->tittle;
                    ?>
                  </td>
                </tr>
                <tr>  
                  <td class="col-md-6" colspan="2">
                    <?php
                        $available_options_value_desc = array();
                        foreach($test->quetion->quetions_details as $quetions_details_k=>$quetions_details_v){
                          //debug($quetions_details_v->available_options_values_id);
                          $available_options_value_desc[$quetions_details_v->available_options_values_id] = $quetions_details_v->available_options_value->description;
                        }
                        echo $this->Form->radio($quetions_details_v->quetions_id.'['."selected".']', 
                            $available_options_value_desc,['legend' => 'Choose an option']
                        );
                    ?>
                  </td>
                </tr>
              </td>
              </tr>
              <?php 
              $cnt++;
              endforeach; 
            ?>
            </tbody>
          </table>
          <!-- <button class="btn btn-info btn-flat" type="submit"><?= __('End Test') ?></button> -->
          <?php echo $this->Form->submit(__('End Test')); ?>

          <?php $this->Form->end();?>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>  
</section>



<script>
$( function() {
  $( "#accordion" ).accordion({
    collapsible: true
  });
} );
</script>
<script type="text/javascript">
let countdownTimer; // Variable to hold the timer interval
let remainingSeconds = 600; // Default initial seconds (10 minutes)

// Function to start or resume the countdown
function startCountdown() {
    clearInterval(countdownTimer); // Clear any existing timer
    ProgressCountdown(remainingSeconds, 'pageBeginCountdown', 'pageBeginCountdownText').then(() => {
        alert('Countdown finished.'); // You can customize what happens when the countdown finishes
    });
}

// Function to stop the countdown
function stopCountdown() {
    clearInterval(countdownTimer); // Clear the interval to stop the countdown
}

// Function to reset the countdown
function resetCountdown() {
    clearInterval(countdownTimer); // Clear any existing timer
    remainingSeconds = 600; // Reset remaining seconds
    document.getElementById('pageBeginCountdown').value = remainingSeconds;
    document.getElementById('pageBeginCountdownText').textContent = remainingSeconds;
}

// Countdown function
function ProgressCountdown(timeleft, bar, text) {
    return new Promise((resolve, reject) => {
        countdownTimer = setInterval(() => {
            timeleft--;
            remainingSeconds = timeleft; // Store remaining seconds
            document.getElementById(bar).value = timeleft;
            document.getElementById(text).textContent = timeleft;

            // Update tests_time input field with remaining seconds
            document.getElementById('tests_time').value = timeleft;

            if (timeleft <= 0) {
                clearInterval(countdownTimer);
                resolve(true);
            }
        }, 1000);
    });
}

// Initial start when the page loads
startCountdown();
</script>
