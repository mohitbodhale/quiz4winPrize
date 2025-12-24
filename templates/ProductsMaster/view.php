<section class="content-header">
  <h1>
    Products Master
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Product Name') ?></dt>
            <dd><?= h($productsMaster->product_name) ?></dd>
            <dt scope="row"><?= __('Item Code') ?></dt>
            <dd><?= h($productsMaster->item_code) ?></dd>
            <dt scope="row"><?= __('Product Information') ?></dt>
            <dd><?= h($productsMaster->product_information) ?></dd>
            <dt scope="row"><?= __('Grade Name') ?></dt>
            <dd><?= h($productsMaster->grade_name) ?></dd>
            <dt scope="row"><?= __('Trad Manu') ?></dt>
            <dd><?= h($productsMaster->trad_manu) ?></dd>
            <dt scope="row"><?= __('Well Known Grade Name') ?></dt>
            <dd><?= h($productsMaster->well_known_grade_name) ?></dd>
            <dt scope="row"><?= __('Acronym') ?></dt>
            <dd><?= h($productsMaster->acronym) ?></dd>
            <dt scope="row"><?= __('Cas No') ?></dt>
            <dd><?= h($productsMaster->cas_no) ?></dd>
            <dt scope="row"><?= __('Einecs No') ?></dt>
            <dd><?= h($productsMaster->einecs_no) ?></dd>
            <dt scope="row"><?= __('Hs Code') ?></dt>
            <dd><?= h($productsMaster->hs_code) ?></dd>
            <dt scope="row"><?= __('Ritc Code') ?></dt>
            <dd><?= h($productsMaster->ritc_code) ?></dd>
            <dt scope="row"><?= __('Molecular Formula') ?></dt>
            <dd><?= h($productsMaster->molecular_formula) ?></dd>
            <dt scope="row"><?= __('Molecular Weight') ?></dt>
            <dd><?= h($productsMaster->molecular_weight) ?></dd>
            <dt scope="row"><?= __('Td Status') ?></dt>
            <dd><?= h($productsMaster->td_status) ?></dd>
            <dt scope="row"><?= __('Td Created By') ?></dt>
            <dd><?= h($productsMaster->td_created_by) ?></dd>
            <dt scope="row"><?= __('Td Modified By') ?></dt>
            <dd><?= h($productsMaster->td_modified_by) ?></dd>
            <dt scope="row"><?= __('Msds Status') ?></dt>
            <dd><?= h($productsMaster->msds_status) ?></dd>
            <dt scope="row"><?= __('Msds Created By') ?></dt>
            <dd><?= h($productsMaster->msds_created_by) ?></dd>
            <dt scope="row"><?= __('Msds Modified By') ?></dt>
            <dd><?= h($productsMaster->msds_modified_by) ?></dd>
            <dt scope="row"><?= __('Coa Status') ?></dt>
            <dd><?= h($productsMaster->coa_status) ?></dd>
            <dt scope="row"><?= __('Coa Created By') ?></dt>
            <dd><?= h($productsMaster->coa_created_by) ?></dd>
            <dt scope="row"><?= __('Coa Modified By') ?></dt>
            <dd><?= h($productsMaster->coa_modified_by) ?></dd>
            <dt scope="row"><?= __('Solubility At') ?></dt>
            <dd><?= h($productsMaster->solubility_at) ?></dd>
            <dt scope="row"><?= __('Dosage') ?></dt>
            <dd><?= h($productsMaster->dosage) ?></dd>
            <dt scope="row"><?= __('Is Compound') ?></dt>
            <dd><?= h($productsMaster->is_compound) ?></dd>
            <dt scope="row"><?= __('Msds Attachment') ?></dt>
            <dd><?= h($productsMaster->msds_attachment) ?></dd>
            <dt scope="row"><?= __('Coa Attachment') ?></dt>
            <dd><?= h($productsMaster->coa_attachment) ?></dd>
            <dt scope="row"><?= __('Tds Attachment') ?></dt>
            <dd><?= h($productsMaster->tds_attachment) ?></dd>
            <dt scope="row"><?= __('Gst End Use Code') ?></dt>
            <dd><?= h($productsMaster->gst_end_use_code) ?></dd>
            <dt scope="row"><?= __('End Use') ?></dt>
            <dd><?= h($productsMaster->end_use) ?></dd>
            <dt scope="row"><?= __('Product Category') ?></dt>
            <dd><?= h($productsMaster->product_category) ?></dd>
            <dt scope="row"><?= __('Art Work File') ?></dt>
            <dd><?= h($productsMaster->art_work_file) ?></dd>
            <dt scope="row"><?= __('Nafdac Reg No') ?></dt>
            <dd><?= h($productsMaster->nafdac_reg_no) ?></dd>
            <dt scope="row"><?= __('Avg Content Per') ?></dt>
            <dd><?= h($productsMaster->avg_content_per) ?></dd>
            <dt scope="row"><?= __('Manufacturing License No') ?></dt>
            <dd><?= h($productsMaster->manufacturing_license_no) ?></dd>
            <dt scope="row"><?= __('Batchsize') ?></dt>
            <dd><?= h($productsMaster->batchsize) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->id) ?></dd>
            <dt scope="row"><?= __('Customer Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->customer_id) ?></dd>
            <dt scope="row"><?= __('Customer Location Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->customer_location_id) ?></dd>
            <dt scope="row"><?= __('Brand Name Master Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->brand_name_master_id) ?></dd>
            <dt scope="row"><?= __('Lead Time') ?></dt>
            <dd><?= $this->Number->format($productsMaster->lead_time) ?></dd>
            <dt scope="row"><?= __('Production Time') ?></dt>
            <dd><?= $this->Number->format($productsMaster->production_time) ?></dd>
            <dt scope="row"><?= __('Shelf Life') ?></dt>
            <dd><?= $this->Number->format($productsMaster->shelf_life) ?></dd>
            <dt scope="row"><?= __('Shelf Life Uom') ?></dt>
            <dd><?= $this->Number->format($productsMaster->shelf_life_uom) ?></dd>
            <dt scope="row"><?= __('Prod Qty') ?></dt>
            <dd><?= $this->Number->format($productsMaster->prod_qty) ?></dd>
            <dt scope="row"><?= __('Prod Qty Uom') ?></dt>
            <dd><?= $this->Number->format($productsMaster->prod_qty_uom) ?></dd>
            <dt scope="row"><?= __('Has Techds Pdf') ?></dt>
            <dd><?= $this->Number->format($productsMaster->has_techds_pdf) ?></dd>
            <dt scope="row"><?= __('Has Msds Pdf') ?></dt>
            <dd><?= $this->Number->format($productsMaster->has_msds_pdf) ?></dd>
            <dt scope="row"><?= __('Status') ?></dt>
            <dd><?= $this->Number->format($productsMaster->status) ?></dd>
            <dt scope="row"><?= __('Reorder Level') ?></dt>
            <dd><?= $this->Number->format($productsMaster->reorder_level) ?></dd>
            <dt scope="row"><?= __('Reorder Qty') ?></dt>
            <dd><?= $this->Number->format($productsMaster->reorder_qty) ?></dd>
            <dt scope="row"><?= __('Created By') ?></dt>
            <dd><?= $this->Number->format($productsMaster->created_by) ?></dd>
            <dt scope="row"><?= __('Modified By') ?></dt>
            <dd><?= $this->Number->format($productsMaster->modified_by) ?></dd>
            <dt scope="row"><?= __('Deleted') ?></dt>
            <dd><?= $this->Number->format($productsMaster->deleted) ?></dd>
            <dt scope="row"><?= __('Product Type') ?></dt>
            <dd><?= $this->Number->format($productsMaster->product_type) ?></dd>
            <dt scope="row"><?= __('Del Status') ?></dt>
            <dd><?= $this->Number->format($productsMaster->del_status) ?></dd>
            <dt scope="row"><?= __('Is Haz Non Haz') ?></dt>
            <dd><?= $this->Number->format($productsMaster->is_haz_non_haz) ?></dd>
            <dt scope="row"><?= __('Mrp') ?></dt>
            <dd><?= $this->Number->format($productsMaster->mrp) ?></dd>
            <dt scope="row"><?= __('Currency Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->currency_id) ?></dd>
            <dt scope="row"><?= __('Company Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->company_id) ?></dd>
            <dt scope="row"><?= __('Generic Master Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->generic_master_id) ?></dd>
            <dt scope="row"><?= __('Pack Size Master Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->pack_size_master_id) ?></dd>
            <dt scope="row"><?= __('Finish Product Type Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->finish_product_type_id) ?></dd>
            <dt scope="row"><?= __('Product Sub Types Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->product_sub_types_id) ?></dd>
            <dt scope="row"><?= __('Type Id') ?></dt>
            <dd><?= $this->Number->format($productsMaster->type_id) ?></dd>
            <dt scope="row"><?= __('Modified Timestamp') ?></dt>
            <dd><?= h($productsMaster->modified_timestamp) ?></dd>
            <dt scope="row"><?= __('Created') ?></dt>
            <dd><?= h($productsMaster->created) ?></dd>
            <dt scope="row"><?= __('Modified') ?></dt>
            <dd><?= h($productsMaster->modified) ?></dd>
            <dt scope="row"><?= __('Mrp Effect From') ?></dt>
            <dd><?= h($productsMaster->mrp_effect_from) ?></dd>
            <dt scope="row"><?= __('Art Work Effect From') ?></dt>
            <dd><?= h($productsMaster->art_work_effect_from) ?></dd>
            <dt scope="row"><?= __('Is Assay Cal') ?></dt>
            <dd><?= $productsMaster->is_assay_cal ? __('Yes') : __('No'); ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Product Details') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($productsMaster->product_details); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-text-width"></i>
          <h3 class="box-title"><?= __('Composition') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->Text->autoParagraph($productsMaster->composition); ?>
        </div>
      </div>
    </div>
  </div>
</section>
