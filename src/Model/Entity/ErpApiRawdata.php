<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ErpApiRawdata Entity
 *
 * @property int $id
 * @property string $data_model
 * @property int $request_type
 * @property string $user_input_form_data
 * @property int|null $user_id_request_by
 * @property string $user_name_request_by
 * @property int|null $customer_id
 * @property int|null $customer_location_id
 * @property int|null $generic_master_id
 * @property int|null $product_id
 * @property string|null $batch_no
 * @property string|null $packsize
 * @property string|null $packsize_uom
 * @property int|null $packsize_uom_id
 * @property int|null $batchsize
 * @property string|null $batchsize_uom
 * @property int|null $batchsize_uom_id
 * @property int|null $packed_qty
 * @property string|null $packed_uom
 * @property int|null $packed_uom_id
 * @property string|null $internal_batch_number
 * @property string|null $comments
 * @property string|null $remark
 * @property \Cake\I18n\FrozenDate|null $created
 * @property \Cake\I18n\FrozenDate|null $modified
 * @property \Cake\I18n\FrozenDate|null $received_date
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Product $product
 */
class ErpApiRawdata extends Entity
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
        'data_model' => true,
        'request_type' => true,
        'user_input_form_data' => true,
        'user_id_request_by' => true,
        'user_name_request_by' => true,
        'customer_id' => true,
        'customer_location_id' => true,
        'generic_master_id' => true,
        'product_id' => true,
        'batch_no' => true,
        'packsize' => true,
        'packsize_uom' => true,
        'packsize_uom_id' => true,
        'batchsize' => true,
        'batchsize_uom' => true,
        'batchsize_uom_id' => true,
        'packed_qty' => true,
        'packed_uom' => true,
        'packed_uom_id' => true,
        'internal_batch_number' => true,
        'comments' => true,
        'remark' => true,
        'created' => true,
        'modified' => true,
        'received_date' => true,
        'customer' => true,
        'product' => true,
    ];
}
