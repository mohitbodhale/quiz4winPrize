<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Product
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($product, ['role' => 'form']); ?>
            <div class="box-body">
              <div class="col-md-4">
              <?php echo $this->Form->control('Product Name', ['name' => 'Product Name', 'label' => 'Product Name','required'=>true]); ?>
              </div>
               <div class="col-md-4">
              <?php echo $this->Form->control('Unique Id',['required'=>true]); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Generic Master', ['name' => 'Generic Master', 'label' => 'Generic Master','options'=>$generic_master]); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Location Id',['options'=>$location_list]); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Description'); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Shelf life'); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Shelf life Uom',['options'=>$uom_list]); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Material Type',['options'=>$product_type_list]); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Product Category',['options'=>$product_category_list]); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Storage conditions'); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('Created timestamp'); ?>
              </div>
              <div class="col-md-4">
              <?php echo $this->Form->control('New or Updated record flag',['options'=>$new_or_Updated_record_flag]); ?>
              </div>
              
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Send To BMR')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

