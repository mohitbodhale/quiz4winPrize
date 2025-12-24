<section class="content-header">
  <h1>
    Generic Master
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
            <dt scope="row"><?= __('Generic Name') ?></dt>
            <dd><?= h($genericMaster->generic_name) ?></dd>
            <dt scope="row"><?= __('Specific Gr Limit') ?></dt>
            <dd><?= h($genericMaster->specific_gr_limit) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($genericMaster->id) ?></dd>
            <dt scope="row"><?= __('Std Kg Qty') ?></dt>
            <dd><?= $this->Number->format($genericMaster->std_kg_qty) ?></dd>
            <dt scope="row"><?= __('Std Kg Qty Uom') ?></dt>
            <dd><?= $this->Number->format($genericMaster->std_kg_qty_uom) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Bmr Requisition') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($genericMaster->bmr_requisition)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Customer Id') ?></th>
                    <th scope="col"><?= __('Customer Location Id') ?></th>
                    <th scope="col"><?= __('Generic Master Id') ?></th>
                    <th scope="col"><?= __('Product Id') ?></th>
                    <th scope="col"><?= __('Batchsheet Master Id') ?></th>
                    <th scope="col"><?= __('Order Product Id') ?></th>
                    <th scope="col"><?= __('Batch No') ?></th>
                    <th scope="col"><?= __('Packsize') ?></th>
                    <th scope="col"><?= __('Packsize Uom') ?></th>
                    <th scope="col"><?= __('Mfg Expiry Date Format') ?></th>
                    <th scope="col"><?= __('Mfg Date') ?></th>
                    <th scope="col"><?= __('Expiry Date') ?></th>
                    <th scope="col"><?= __('Bmr Date') ?></th>
                    <th scope="col"><?= __('Bmr Time') ?></th>
                    <th scope="col"><?= __('Approve Status') ?></th>
                    <th scope="col"><?= __('Bmr Master Id') ?></th>
                    <th scope="col"><?= __('Batchsize') ?></th>
                    <th scope="col"><?= __('Batchsize Uom') ?></th>
                    <th scope="col"><?= __('Produced Qty') ?></th>
                    <th scope="col"><?= __('Produced Uom') ?></th>
                    <th scope="col"><?= __('Packed Qty') ?></th>
                    <th scope="col"><?= __('Packed Uom') ?></th>
                    <th scope="col"><?= __('Created By') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Received By') ?></th>
                    <th scope="col"><?= __('Received Date') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Coa Files') ?></th>
                    <th scope="col"><?= __('Internal Batch Number') ?></th>
                    <th scope="col"><?= __('Brand Name') ?></th>
                    <th scope="col"><?= __('Product Type') ?></th>
                    <th scope="col"><?= __('Flavor') ?></th>
                    <th scope="col"><?= __('Product Color') ?></th>
                    <th scope="col"><?= __('Comments') ?></th>
                    <th scope="col"><?= __('Bmr Attachment') ?></th>
                    <th scope="col"><?= __('Force Close Created By') ?></th>
                    <th scope="col"><?= __('Force Close Updated By') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Modified By') ?></th>
                    <th scope="col"><?= __('Process Validation') ?></th>
                    <th scope="col"><?= __('Remark') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($genericMaster->bmr_requisition as $bmrRequisition): ?>
              <tr>
                    <td><?= h($bmrRequisition->id) ?></td>
                    <td><?= h($bmrRequisition->customer_id) ?></td>
                    <td><?= h($bmrRequisition->customer_location_id) ?></td>
                    <td><?= h($bmrRequisition->generic_master_id) ?></td>
                    <td><?= h($bmrRequisition->product_id) ?></td>
                    <td><?= h($bmrRequisition->batchsheet_master_id) ?></td>
                    <td><?= h($bmrRequisition->order_product_id) ?></td>
                    <td><?= h($bmrRequisition->batch_no) ?></td>
                    <td><?= h($bmrRequisition->packsize) ?></td>
                    <td><?= h($bmrRequisition->packsize_uom) ?></td>
                    <td><?= h($bmrRequisition->mfg_expiry_date_format) ?></td>
                    <td><?= h($bmrRequisition->mfg_date) ?></td>
                    <td><?= h($bmrRequisition->expiry_date) ?></td>
                    <td><?= h($bmrRequisition->bmr_date) ?></td>
                    <td><?= h($bmrRequisition->bmr_time) ?></td>
                    <td><?= h($bmrRequisition->approve_status) ?></td>
                    <td><?= h($bmrRequisition->bmr_master_id) ?></td>
                    <td><?= h($bmrRequisition->batchsize) ?></td>
                    <td><?= h($bmrRequisition->batchsize_uom) ?></td>
                    <td><?= h($bmrRequisition->produced_qty) ?></td>
                    <td><?= h($bmrRequisition->produced_uom) ?></td>
                    <td><?= h($bmrRequisition->packed_qty) ?></td>
                    <td><?= h($bmrRequisition->packed_uom) ?></td>
                    <td><?= h($bmrRequisition->created_by) ?></td>
                    <td><?= h($bmrRequisition->created) ?></td>
                    <td><?= h($bmrRequisition->received_by) ?></td>
                    <td><?= h($bmrRequisition->received_date) ?></td>
                    <td><?= h($bmrRequisition->status) ?></td>
                    <td><?= h($bmrRequisition->coa_files) ?></td>
                    <td><?= h($bmrRequisition->internal_batch_number) ?></td>
                    <td><?= h($bmrRequisition->brand_name) ?></td>
                    <td><?= h($bmrRequisition->product_type) ?></td>
                    <td><?= h($bmrRequisition->flavor) ?></td>
                    <td><?= h($bmrRequisition->product_color) ?></td>
                    <td><?= h($bmrRequisition->comments) ?></td>
                    <td><?= h($bmrRequisition->bmr_attachment) ?></td>
                    <td><?= h($bmrRequisition->force_close_created_by) ?></td>
                    <td><?= h($bmrRequisition->force_close_updated_by) ?></td>
                    <td><?= h($bmrRequisition->modified) ?></td>
                    <td><?= h($bmrRequisition->modified_by) ?></td>
                    <td><?= h($bmrRequisition->process_validation) ?></td>
                    <td><?= h($bmrRequisition->remark) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'BmrRequisition', 'action' => 'view', $bmrRequisition->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'BmrRequisition', 'action' => 'edit', $bmrRequisition->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'BmrRequisition', 'action' => 'delete', $bmrRequisition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bmrRequisition->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Erp Api Rawdata') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($genericMaster->erp_api_rawdata)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Data Model') ?></th>
                    <th scope="col"><?= __('Request Type') ?></th>
                    <th scope="col"><?= __('User Input Form Data') ?></th>
                    <th scope="col"><?= __('User Id Request By') ?></th>
                    <th scope="col"><?= __('User Name Request By') ?></th>
                    <th scope="col"><?= __('Customer Id') ?></th>
                    <th scope="col"><?= __('Customer Location Id') ?></th>
                    <th scope="col"><?= __('Generic Master Id') ?></th>
                    <th scope="col"><?= __('Product Id') ?></th>
                    <th scope="col"><?= __('Batch No') ?></th>
                    <th scope="col"><?= __('Packsize') ?></th>
                    <th scope="col"><?= __('Packsize Uom') ?></th>
                    <th scope="col"><?= __('Packsize Uom Id') ?></th>
                    <th scope="col"><?= __('Batchsize') ?></th>
                    <th scope="col"><?= __('Batchsize Uom') ?></th>
                    <th scope="col"><?= __('Batchsize Uom Id') ?></th>
                    <th scope="col"><?= __('Packed Qty') ?></th>
                    <th scope="col"><?= __('Packed Uom') ?></th>
                    <th scope="col"><?= __('Packed Uom Id') ?></th>
                    <th scope="col"><?= __('Internal Batch Number') ?></th>
                    <th scope="col"><?= __('Comments') ?></th>
                    <th scope="col"><?= __('Remark') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Received Date') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($genericMaster->erp_api_rawdata as $erpApiRawdata): ?>
              <tr>
                    <td><?= h($erpApiRawdata->id) ?></td>
                    <td><?= h($erpApiRawdata->data_model) ?></td>
                    <td><?= h($erpApiRawdata->request_type) ?></td>
                    <td><?= h($erpApiRawdata->user_input_form_data) ?></td>
                    <td><?= h($erpApiRawdata->user_id_request_by) ?></td>
                    <td><?= h($erpApiRawdata->user_name_request_by) ?></td>
                    <td><?= h($erpApiRawdata->customer_id) ?></td>
                    <td><?= h($erpApiRawdata->customer_location_id) ?></td>
                    <td><?= h($erpApiRawdata->generic_master_id) ?></td>
                    <td><?= h($erpApiRawdata->product_id) ?></td>
                    <td><?= h($erpApiRawdata->batch_no) ?></td>
                    <td><?= h($erpApiRawdata->packsize) ?></td>
                    <td><?= h($erpApiRawdata->packsize_uom) ?></td>
                    <td><?= h($erpApiRawdata->packsize_uom_id) ?></td>
                    <td><?= h($erpApiRawdata->batchsize) ?></td>
                    <td><?= h($erpApiRawdata->batchsize_uom) ?></td>
                    <td><?= h($erpApiRawdata->batchsize_uom_id) ?></td>
                    <td><?= h($erpApiRawdata->packed_qty) ?></td>
                    <td><?= h($erpApiRawdata->packed_uom) ?></td>
                    <td><?= h($erpApiRawdata->packed_uom_id) ?></td>
                    <td><?= h($erpApiRawdata->internal_batch_number) ?></td>
                    <td><?= h($erpApiRawdata->comments) ?></td>
                    <td><?= h($erpApiRawdata->remark) ?></td>
                    <td><?= h($erpApiRawdata->created) ?></td>
                    <td><?= h($erpApiRawdata->modified) ?></td>
                    <td><?= h($erpApiRawdata->received_date) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'ErpApiRawdata', 'action' => 'view', $erpApiRawdata->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'ErpApiRawdata', 'action' => 'edit', $erpApiRawdata->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'ErpApiRawdata', 'action' => 'delete', $erpApiRawdata->id], ['confirm' => __('Are you sure you want to delete # {0}?', $erpApiRawdata->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Products Master') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($genericMaster->products_master)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Customer Id') ?></th>
                    <th scope="col"><?= __('Customer Location Id') ?></th>
                    <th scope="col"><?= __('Product Name') ?></th>
                    <th scope="col"><?= __('Brand Name Master Id') ?></th>
                    <th scope="col"><?= __('Item Code') ?></th>
                    <th scope="col"><?= __('Product Information') ?></th>
                    <th scope="col"><?= __('Grade Name') ?></th>
                    <th scope="col"><?= __('Trad Manu') ?></th>
                    <th scope="col"><?= __('Lead Time') ?></th>
                    <th scope="col"><?= __('Production Time') ?></th>
                    <th scope="col"><?= __('Shelf Life') ?></th>
                    <th scope="col"><?= __('Shelf Life Uom') ?></th>
                    <th scope="col"><?= __('Prod Qty') ?></th>
                    <th scope="col"><?= __('Prod Qty Uom') ?></th>
                    <th scope="col"><?= __('Well Known Grade Name') ?></th>
                    <th scope="col"><?= __('Acronym') ?></th>
                    <th scope="col"><?= __('Cas No') ?></th>
                    <th scope="col"><?= __('Einecs No') ?></th>
                    <th scope="col"><?= __('Hs Code') ?></th>
                    <th scope="col"><?= __('Ritc Code') ?></th>
                    <th scope="col"><?= __('Molecular Formula') ?></th>
                    <th scope="col"><?= __('Molecular Weight') ?></th>
                    <th scope="col"><?= __('Td Status') ?></th>
                    <th scope="col"><?= __('Td Created By') ?></th>
                    <th scope="col"><?= __('Td Modified By') ?></th>
                    <th scope="col"><?= __('Msds Status') ?></th>
                    <th scope="col"><?= __('Msds Created By') ?></th>
                    <th scope="col"><?= __('Msds Modified By') ?></th>
                    <th scope="col"><?= __('Coa Status') ?></th>
                    <th scope="col"><?= __('Coa Created By') ?></th>
                    <th scope="col"><?= __('Coa Modified By') ?></th>
                    <th scope="col"><?= __('Modified Timestamp') ?></th>
                    <th scope="col"><?= __('Solubility At') ?></th>
                    <th scope="col"><?= __('Dosage') ?></th>
                    <th scope="col"><?= __('Is Compound') ?></th>
                    <th scope="col"><?= __('Has Techds Pdf') ?></th>
                    <th scope="col"><?= __('Has Msds Pdf') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Msds Attachment') ?></th>
                    <th scope="col"><?= __('Coa Attachment') ?></th>
                    <th scope="col"><?= __('Tds Attachment') ?></th>
                    <th scope="col"><?= __('Product Details') ?></th>
                    <th scope="col"><?= __('Reorder Level') ?></th>
                    <th scope="col"><?= __('Reorder Qty') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Created By') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Modified By') ?></th>
                    <th scope="col"><?= __('Deleted') ?></th>
                    <th scope="col"><?= __('Product Type') ?></th>
                    <th scope="col"><?= __('Gst End Use Code') ?></th>
                    <th scope="col"><?= __('Del Status') ?></th>
                    <th scope="col"><?= __('End Use') ?></th>
                    <th scope="col"><?= __('Is Haz Non Haz') ?></th>
                    <th scope="col"><?= __('Product Category') ?></th>
                    <th scope="col"><?= __('Mrp') ?></th>
                    <th scope="col"><?= __('Currency Id') ?></th>
                    <th scope="col"><?= __('Mrp Effect From') ?></th>
                    <th scope="col"><?= __('Art Work File') ?></th>
                    <th scope="col"><?= __('Art Work Effect From') ?></th>
                    <th scope="col"><?= __('Company Id') ?></th>
                    <th scope="col"><?= __('Generic Master Id') ?></th>
                    <th scope="col"><?= __('Pack Size Master Id') ?></th>
                    <th scope="col"><?= __('Is Assay Cal') ?></th>
                    <th scope="col"><?= __('Composition') ?></th>
                    <th scope="col"><?= __('Nafdac Reg No') ?></th>
                    <th scope="col"><?= __('Finish Product Type Id') ?></th>
                    <th scope="col"><?= __('Avg Content Per') ?></th>
                    <th scope="col"><?= __('Product Sub Types Id') ?></th>
                    <th scope="col"><?= __('Manufacturing License No') ?></th>
                    <th scope="col"><?= __('Batchsize') ?></th>
                    <th scope="col"><?= __('Type Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($genericMaster->products_master as $productsMaster): ?>
              <tr>
                    <td><?= h($productsMaster->id) ?></td>
                    <td><?= h($productsMaster->customer_id) ?></td>
                    <td><?= h($productsMaster->customer_location_id) ?></td>
                    <td><?= h($productsMaster->product_name) ?></td>
                    <td><?= h($productsMaster->brand_name_master_id) ?></td>
                    <td><?= h($productsMaster->item_code) ?></td>
                    <td><?= h($productsMaster->product_information) ?></td>
                    <td><?= h($productsMaster->grade_name) ?></td>
                    <td><?= h($productsMaster->trad_manu) ?></td>
                    <td><?= h($productsMaster->lead_time) ?></td>
                    <td><?= h($productsMaster->production_time) ?></td>
                    <td><?= h($productsMaster->shelf_life) ?></td>
                    <td><?= h($productsMaster->shelf_life_uom) ?></td>
                    <td><?= h($productsMaster->prod_qty) ?></td>
                    <td><?= h($productsMaster->prod_qty_uom) ?></td>
                    <td><?= h($productsMaster->well_known_grade_name) ?></td>
                    <td><?= h($productsMaster->acronym) ?></td>
                    <td><?= h($productsMaster->cas_no) ?></td>
                    <td><?= h($productsMaster->einecs_no) ?></td>
                    <td><?= h($productsMaster->hs_code) ?></td>
                    <td><?= h($productsMaster->ritc_code) ?></td>
                    <td><?= h($productsMaster->molecular_formula) ?></td>
                    <td><?= h($productsMaster->molecular_weight) ?></td>
                    <td><?= h($productsMaster->td_status) ?></td>
                    <td><?= h($productsMaster->td_created_by) ?></td>
                    <td><?= h($productsMaster->td_modified_by) ?></td>
                    <td><?= h($productsMaster->msds_status) ?></td>
                    <td><?= h($productsMaster->msds_created_by) ?></td>
                    <td><?= h($productsMaster->msds_modified_by) ?></td>
                    <td><?= h($productsMaster->coa_status) ?></td>
                    <td><?= h($productsMaster->coa_created_by) ?></td>
                    <td><?= h($productsMaster->coa_modified_by) ?></td>
                    <td><?= h($productsMaster->modified_timestamp) ?></td>
                    <td><?= h($productsMaster->solubility_at) ?></td>
                    <td><?= h($productsMaster->dosage) ?></td>
                    <td><?= h($productsMaster->is_compound) ?></td>
                    <td><?= h($productsMaster->has_techds_pdf) ?></td>
                    <td><?= h($productsMaster->has_msds_pdf) ?></td>
                    <td><?= h($productsMaster->status) ?></td>
                    <td><?= h($productsMaster->msds_attachment) ?></td>
                    <td><?= h($productsMaster->coa_attachment) ?></td>
                    <td><?= h($productsMaster->tds_attachment) ?></td>
                    <td><?= h($productsMaster->product_details) ?></td>
                    <td><?= h($productsMaster->reorder_level) ?></td>
                    <td><?= h($productsMaster->reorder_qty) ?></td>
                    <td><?= h($productsMaster->created) ?></td>
                    <td><?= h($productsMaster->created_by) ?></td>
                    <td><?= h($productsMaster->modified) ?></td>
                    <td><?= h($productsMaster->modified_by) ?></td>
                    <td><?= h($productsMaster->deleted) ?></td>
                    <td><?= h($productsMaster->product_type) ?></td>
                    <td><?= h($productsMaster->gst_end_use_code) ?></td>
                    <td><?= h($productsMaster->del_status) ?></td>
                    <td><?= h($productsMaster->end_use) ?></td>
                    <td><?= h($productsMaster->is_haz_non_haz) ?></td>
                    <td><?= h($productsMaster->product_category) ?></td>
                    <td><?= h($productsMaster->mrp) ?></td>
                    <td><?= h($productsMaster->currency_id) ?></td>
                    <td><?= h($productsMaster->mrp_effect_from) ?></td>
                    <td><?= h($productsMaster->art_work_file) ?></td>
                    <td><?= h($productsMaster->art_work_effect_from) ?></td>
                    <td><?= h($productsMaster->company_id) ?></td>
                    <td><?= h($productsMaster->generic_master_id) ?></td>
                    <td><?= h($productsMaster->pack_size_master_id) ?></td>
                    <td><?= h($productsMaster->is_assay_cal) ?></td>
                    <td><?= h($productsMaster->composition) ?></td>
                    <td><?= h($productsMaster->nafdac_reg_no) ?></td>
                    <td><?= h($productsMaster->finish_product_type_id) ?></td>
                    <td><?= h($productsMaster->avg_content_per) ?></td>
                    <td><?= h($productsMaster->product_sub_types_id) ?></td>
                    <td><?= h($productsMaster->manufacturing_license_no) ?></td>
                    <td><?= h($productsMaster->batchsize) ?></td>
                    <td><?= h($productsMaster->type_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'ProductsMaster', 'action' => 'view', $productsMaster->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'ProductsMaster', 'action' => 'edit', $productsMaster->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductsMaster', 'action' => 'delete', $productsMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsMaster->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
