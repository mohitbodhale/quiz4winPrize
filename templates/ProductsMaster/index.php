<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Products Master

    <div class="pull-right"><?php echo $this->Html->link(__('New'), ['controller'=>'Products','action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
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
                  <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('customer_location_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('product_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('brand_name_master_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('item_code') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('product_information') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('grade_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('trad_manu') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('lead_time') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('production_time') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('shelf_life') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('shelf_life_uom') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('prod_qty') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('prod_qty_uom') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('well_known_grade_name') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('acronym') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('cas_no') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('einecs_no') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('hs_code') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('ritc_code') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('molecular_formula') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('molecular_weight') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('td_status') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('td_created_by') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('td_modified_by') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('msds_status') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('msds_created_by') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('msds_modified_by') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('coa_status') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('coa_created_by') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('coa_modified_by') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified_timestamp') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('solubility_at') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('dosage') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('is_compound') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('has_techds_pdf') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('has_msds_pdf') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('msds_attachment') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('coa_attachment') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('tds_attachment') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('reorder_level') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('reorder_qty') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('product_type') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('gst_end_use_code') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('del_status') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('end_use') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('is_haz_non_haz') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('product_category') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('mrp') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('currency_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('mrp_effect_from') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('art_work_file') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('art_work_effect_from') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('generic_master_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('pack_size_master_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('is_assay_cal') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('nafdac_reg_no') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('finish_product_type_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('avg_content_per') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('product_sub_types_id') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('manufacturing_license_no') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('batchsize') ?></th>
                  <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($productsMaster as $productsMaster): ?>
                <tr>
                  <td><?= $this->Number->format($productsMaster->id) ?></td>
                  <td><?= $this->Number->format($productsMaster->customer_id) ?></td>
                  <td><?= $this->Number->format($productsMaster->customer_location_id) ?></td>
                  <td><?= h($productsMaster->product_name) ?></td>
                  <td><?= $this->Number->format($productsMaster->brand_name_master_id) ?></td>
                  <td><?= h($productsMaster->item_code) ?></td>
                  <td><?= h($productsMaster->product_information) ?></td>
                  <td><?= h($productsMaster->grade_name) ?></td>
                  <td><?= h($productsMaster->trad_manu) ?></td>
                  <td><?= $this->Number->format($productsMaster->lead_time) ?></td>
                  <td><?= $this->Number->format($productsMaster->production_time) ?></td>
                  <td><?= $this->Number->format($productsMaster->shelf_life) ?></td>
                  <td><?= $this->Number->format($productsMaster->shelf_life_uom) ?></td>
                  <td><?= $this->Number->format($productsMaster->prod_qty) ?></td>
                  <td><?= $this->Number->format($productsMaster->prod_qty_uom) ?></td>
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
                  <td><?= $this->Number->format($productsMaster->has_techds_pdf) ?></td>
                  <td><?= $this->Number->format($productsMaster->has_msds_pdf) ?></td>
                  <td><?= $this->Number->format($productsMaster->status) ?></td>
                  <td><?= h($productsMaster->msds_attachment) ?></td>
                  <td><?= h($productsMaster->coa_attachment) ?></td>
                  <td><?= h($productsMaster->tds_attachment) ?></td>
                  <td><?= $this->Number->format($productsMaster->reorder_level) ?></td>
                  <td><?= $this->Number->format($productsMaster->reorder_qty) ?></td>
                  <td><?= h($productsMaster->created) ?></td>
                  <td><?= $this->Number->format($productsMaster->created_by) ?></td>
                  <td><?= h($productsMaster->modified) ?></td>
                  <td><?= $this->Number->format($productsMaster->modified_by) ?></td>
                  <td><?= $this->Number->format($productsMaster->deleted) ?></td>
                  <td><?= $this->Number->format($productsMaster->product_type) ?></td>
                  <td><?= h($productsMaster->gst_end_use_code) ?></td>
                  <td><?= $this->Number->format($productsMaster->del_status) ?></td>
                  <td><?= h($productsMaster->end_use) ?></td>
                  <td><?= $this->Number->format($productsMaster->is_haz_non_haz) ?></td>
                  <td><?= h($productsMaster->product_category) ?></td>
                  <td><?= $this->Number->format($productsMaster->mrp) ?></td>
                  <td><?= $this->Number->format($productsMaster->currency_id) ?></td>
                  <td><?= h($productsMaster->mrp_effect_from) ?></td>
                  <td><?= h($productsMaster->art_work_file) ?></td>
                  <td><?= h($productsMaster->art_work_effect_from) ?></td>
                  <td><?= $this->Number->format($productsMaster->company_id) ?></td>
                  <td><?= $this->Number->format($productsMaster->generic_master_id) ?></td>
                  <td><?= $this->Number->format($productsMaster->pack_size_master_id) ?></td>
                  <td><?= h($productsMaster->is_assay_cal) ?></td>
                  <td><?= h($productsMaster->nafdac_reg_no) ?></td>
                  <td><?= $this->Number->format($productsMaster->finish_product_type_id) ?></td>
                  <td><?= h($productsMaster->avg_content_per) ?></td>
                  <td><?= $this->Number->format($productsMaster->product_sub_types_id) ?></td>
                  <td><?= h($productsMaster->manufacturing_license_no) ?></td>
                  <td><?= h($productsMaster->batchsize) ?></td>
                  <td><?= $this->Number->format($productsMaster->type_id) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $productsMaster->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsMaster->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsMaster->id), 'class'=>'btn btn-danger btn-xs']) ?>
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