
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard
    <small>Tests Results</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>
<?php
foreach($tests as $testsk=>$testsv){ ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo "Test Name : <b>".ucwords($testsv['test_name'])."</b>";?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped example">
                <thead>
                <tr>
                  <th>Sr.</th>
                  <th>User Name</th>
                  <th>Score</th>
                  <th>Completion Time</th>
                  <th>Rank</th>
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
                    <td>X</td>
                  </tr>
                <?php }
                } ?>
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php } ?>


<!-- DataTables -->
<?php echo $this->Html->css('AdminLTE./bower_components/datatables.net-bs/css/dataTables.bootstrap.min', ['block' => 'css']); ?>

<!-- DataTables -->
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net/js/jquery.dataTables.min', ['block' => 'script']); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/datatables.net-bs/js/dataTables.bootstrap.min', ['block' => 'script']); ?>

<?php $this->start('scriptBottom'); ?>
<script>
  $(function () {
    $('.example1').DataTable()
    $('.example').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<?php $this->end(); ?>