<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GenericMaster Entity
 *
 * @property int $id
 * @property string|null $generic_name
 * @property string|null $std_kg_qty
 * @property string|null $specific_gr_limit
 * @property int|null $std_kg_qty_uom
 *
 * @property \App\Model\Entity\BmrRequisition[] $bmr_requisition
 * @property \App\Model\Entity\ErpApiRawdata[] $erp_api_rawdata
 * @property \App\Model\Entity\ProductsMaster[] $products_master
 */
class GenericMaster extends Entity
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
        'generic_name' => true,
        'std_kg_qty' => true,
        'specific_gr_limit' => true,
        'std_kg_qty_uom' => true,
        'bmr_requisition' => true,
        'erp_api_rawdata' => true,
        'products_master' => true,
    ];
}
