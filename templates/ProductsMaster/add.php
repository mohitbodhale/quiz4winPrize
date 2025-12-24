<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsMaster $productsMaster
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Products Master
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
          <?php echo $this->Form->create($productsMaster, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('customer_id');
                echo $this->Form->control('customer_location_id');
                echo $this->Form->control('product_name');
                echo $this->Form->control('brand_name_master_id');
                echo $this->Form->control('item_code');
                echo $this->Form->control('product_information');
                echo $this->Form->control('grade_name');
                echo $this->Form->control('trad_manu');
                echo $this->Form->control('lead_time');
                echo $this->Form->control('production_time');
                echo $this->Form->control('shelf_life');
                echo $this->Form->control('shelf_life_uom');
                echo $this->Form->control('prod_qty');
                echo $this->Form->control('prod_qty_uom');
                echo $this->Form->control('well_known_grade_name');
                echo $this->Form->control('acronym');
                echo $this->Form->control('cas_no');
                echo $this->Form->control('einecs_no');
                echo $this->Form->control('hs_code');
                echo $this->Form->control('ritc_code');
                echo $this->Form->control('molecular_formula');
                echo $this->Form->control('molecular_weight');
                echo $this->Form->control('td_status');
                echo $this->Form->control('td_created_by');
                echo $this->Form->control('td_modified_by');
                echo $this->Form->control('msds_status');
                echo $this->Form->control('msds_created_by');
                echo $this->Form->control('msds_modified_by');
                echo $this->Form->control('coa_status');
                echo $this->Form->control('coa_created_by');
                echo $this->Form->control('coa_modified_by');
                echo $this->Form->control('modified_timestamp', ['empty' => true]);
                echo $this->Form->control('solubility_at');
                echo $this->Form->control('dosage');
                echo $this->Form->control('is_compound');
                echo $this->Form->control('has_techds_pdf');
                echo $this->Form->control('has_msds_pdf');
                echo $this->Form->control('status');
                echo $this->Form->control('msds_attachment');
                echo $this->Form->control('coa_attachment');
                echo $this->Form->control('tds_attachment');
                echo $this->Form->control('product_details');
                echo $this->Form->control('reorder_level');
                echo $this->Form->control('reorder_qty');
                echo $this->Form->control('created_by');
                echo $this->Form->control('modified_by');
                echo $this->Form->control('deleted');
                echo $this->Form->control('product_type');
                echo $this->Form->control('gst_end_use_code');
                echo $this->Form->control('del_status');
                echo $this->Form->control('end_use');
                echo $this->Form->control('is_haz_non_haz');
                echo $this->Form->control('product_category');
                echo $this->Form->control('mrp');
                echo $this->Form->control('currency_id');
                echo $this->Form->control('mrp_effect_from', ['empty' => true]);
                echo $this->Form->control('art_work_file');
                echo $this->Form->control('art_work_effect_from', ['empty' => true]);
                echo $this->Form->control('company_id');
                echo $this->Form->control('generic_master_id');
                echo $this->Form->control('pack_size_master_id');
                echo $this->Form->control('is_assay_cal');
                echo $this->Form->control('composition');
                echo $this->Form->control('nafdac_reg_no');
                echo $this->Form->control('finish_product_type_id');
                echo $this->Form->control('avg_content_per');
                echo $this->Form->control('product_sub_types_id');
                echo $this->Form->control('manufacturing_license_no');
                echo $this->Form->control('batchsize');
                echo $this->Form->control('type_id');
              ?>
            </div>
            <!-- /.box-body -->

          <?php echo $this->Form->submit(__('Submit')); ?>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>

