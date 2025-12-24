<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BmrRequisition Entity
 *
 * @property int $id
 * @property int|null $customer_id
 * @property int|null $customer_location_id
 * @property int|null $generic_master_id
 * @property int|null $product_id
 * @property int $batchsheet_master_id
 * @property int|null $order_product_id
 * @property string|null $batch_no
 * @property string|null $packsize
 * @property int|null $packsize_uom
 * @property string|null $mfg_expiry_date_format
 * @property \Cake\I18n\FrozenDate|null $mfg_date
 * @property \Cake\I18n\FrozenDate|null $expiry_date
 * @property \Cake\I18n\FrozenDate|null $bmr_date
 * @property string|null $bmr_time
 * @property int|null $approve_status
 * @property int|null $bmr_master_id
 * @property int|null $batchsize
 * @property int|null $batchsize_uom
 * @property int|null $produced_qty
 * @property int|null $produced_uom
 * @property int|null $packed_qty
 * @property int|null $packed_uom
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenDate|null $created
 * @property int|null $received_by
 * @property \Cake\I18n\FrozenDate|null $received_date
 * @property int $status
 * @property string|null $coa_files
 * @property string|null $internal_batch_number
 * @property string|null $brand_name
 * @property string|null $product_type
 * @property string|null $flavor
 * @property string|null $product_color
 * @property string|null $comments
 * @property string|null $bmr_attachment
 * @property int|null $force_close_created_by
 * @property int|null $force_close_updated_by
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $modified_by
 * @property int|null $process_validation
 * @property string|null $remark
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Product $product
 */
class BmrRequisition extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'customer_id' => true,
        'customer_location_id' => true,
        'generic_master_id' => true,
        'product_id' => true,
        'batchsheet_master_id' => true,
        'order_product_id' => true,
        'batch_no' => true,
        'packsize' => true,
        'packsize_uom' => true,
        'mfg_expiry_date_format' => true,
        'mfg_date' => true,
        'expiry_date' => true,
        'bmr_date' => true,
        'bmr_time' => true,
        'approve_status' => true,
        'bmr_master_id' => true,
        'batchsize' => true,
        'batchsize_uom' => true,
        'produced_qty' => true,
        'produced_uom' => true,
        'packed_qty' => true,
        'packed_uom' => true,
        'created_by' => true,
        'created' => true,
        'received_by' => true,
        'received_date' => true,
        'status' => true,
        'coa_files' => true,
        'internal_batch_number' => true,
        'brand_name' => true,
        'product_type' => true,
        'flavor' => true,
        'product_color' => true,
        'comments' => true,
        'bmr_attachment' => true,
        'force_close_created_by' => true,
        'force_close_updated_by' => true,
        'modified' => true,
        'modified_by' => true,
        'process_validation' => true,
        'remark' => true,
        'customer' => true,
        'product' => true,
    ];
}
