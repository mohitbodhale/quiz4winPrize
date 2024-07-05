<!-- Content Header (Page header) -->
<section class="content-header"></section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Leader board'); ?></h3>
          <div class="box-tools"></div>
        </div>
        <!-- /.box-header -->
        <div class="box-header">
            <?php
            foreach($tests as $testsk=>$testsv){ ?>
                <div class="col-md-6">
                <h4><?php echo "Test Name : <b>".ucwords($testsv['test_name'])."</b>";?></h4>    
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th style="max-width:50px">Sr.No.</th>  
                        <th>User</th>
                        <th>Score</th>
                        <th>Completion Time</th>
                        <th>Rank</th>
                        <!-- <th scope="col" class="actions text-center" style="min-width:150px"><?= __('Actions') ?></th> -->
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($testsResults as $testsResultsk=>$testsResultsv){
                        if($testsResultsv['tests_id'] == $testsv['id']){ ?>
                        <tr>
                            <td><?php echo $testsResultsk+1;?></td>     
                            <td><?php echo $testsResultsv['user']['username'];?></td>
                            <td><?php echo $testsResultsv['score'];?></td>   
                            <td style="display: flex; justify-content: space-between; align-items: center;">
                                <?php 
                                echo $this->Format->secondsToHMS($testsResultsv['time_taken']); 
                                ?>
                                <i class="fa fa-clock-o" style="color:#3c8dbc"></i>
                            </td>
                            <td></td>
                            <!-- <td class="actions text-right" style="min-width: 150px;"> -->
                                <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $test->id], ['class'=>'btn btn-info btn-xs']) ?> -->
                                <!-- <?= $this->Html->link(__('Edit'), ['action' => 'edit', $test->id], ['class'=>'btn btn-warning btn-xs']) ?> -->
                                <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'class'=>'btn btn-danger btn-xs']) ?> -->
                            <!-- </td> -->
                        </tr>
                        <?php
                        } 
                    }?>    
                    </tbody>
                </table>
                </div>
            <?php 
            }?>
           
        <div class="box-header">
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>  
</section>

