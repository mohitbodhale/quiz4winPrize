<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tests

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('List'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('test_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('slots_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('quizs_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tests as $test): ?>
                <tr>
                  <td><?= $this->Number->format($test->id) ?></td>
                  <td><?= h($test->test_name) ?></td>
                  <td><?= h($test->slot->slots_name) ?></td>
                  <td><?= h($test->quiz->quiz_name) ?></td>
                  <td>
                    <span id="date-start-time">
                      <?php echo $test->date_start_from; ?>
                    </span>
                  </td>
                  <td>
                    <span id="end-date-time">
                    <?php echo $test->date_valid_till; ?>  
                    </span>
                  </td>
                  <td><?= $this->Number->format($test->status) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $test->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $test->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
                  <td>
                  <?php 
                  $match_count = 0;
                  foreach($tests_results as $tests_resultsv){
                    if($tests_resultsv['tests_id'] == $test->id){  
                      $match_count = 1;
                      $tests_results_status = $tests_resultsv['status'] ;
                    }
                  } 
                  //debug($tests_results_status);  
                  if($match_count && $tests_results_status==1){ ?>
                  <?= $this->Form->postLink(__('Resume'), ['action' => 'resume', $test->id], ['confirm' => __('Are you sure you want to resume {0}?', $test->test_name), 'class'=>'btn btn-danger btn-xs']); ?>
                  <?php } 
                  elseif($match_count && $tests_results_status==2){ ?>
                  <?= $this->Form->postLink(__('Show Result'), ['controller'=>'users','action' => 'dashboard'],['class'=>'btn btn-success btn-xs']); ?>
                  <?php } 
                  else { ?>
                  <?= $this->Form->postLink(__('Start'), ['action' => 'start', $test->id], ['confirm' => __('Are you sure you want to start {0}?', $test->test_name), 'class'=>'btn btn-danger btn-xs']); ?>
                  <?php } ?>
                </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

<script>


</script>