<?php //$this->Html->addCrumb('Master'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>Master<small>Control panel</small></h1>
</section>

<section class="content">
<div class="col-lg-2 col-xs-6">
<!-- small box -->
    <div class="small-box bg-aqua">
        <a href="<?php echo $this->Url->build(array('controller'=>'ProductsMaster','action' => 'index')); ?>" class="small-box-footer">
        <div class="inner">
            <h3><i class="fa fa-th-list" aria-hidden="true"></i></h3>
            <p>Products Master</p>
        </div></a>
    </div>
</div>
</section>