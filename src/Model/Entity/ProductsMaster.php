<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsMaster Entity
 *
 * @property int $id
 * @property int|null $customer_id
 * @property int|null $customer_location_id
 * @property string|null $product_name
 * @property int|null $brand_name_master_id
 * @property string|null $item_code
 * @property string|null $product_information
 * @property string|null $grade_name
 * @property string|null $trad_manu
 * @property int|null $lead_time
 * @property int|null $production_time
 * @property int|null $shelf_life
 * @property int|null $shelf_life_uom
 * @property int|null $prod_qty
 * @property int|null $prod_qty_uom
 * @property string|null $well_known_grade_name
 * @property string|null $acronym
 * @property string|null $cas_no
 * @property string|null $einecs_no
 * @property string|null $hs_code
 * @property string|null $ritc_code
 * @property string|null $molecular_formula
 * @property string|null $molecular_weight
 * @property string|null $td_status
 * @property string|null $td_created_by
 * @property string|null $td_modified_by
 * @property string|null $msds_status
 * @property string|null $msds_created_by
 * @property string|null $msds_modified_by
 * @property string|null $coa_status
 * @property string|null $coa_created_by
 * @property string|null $coa_modified_by
 * @property \Cake\I18n\FrozenTime|null $modified_timestamp
 * @property string|null $solubility_at
 * @property string|null $dosage
 * @property string|null $is_compound
 * @property int|null $has_techds_pdf
 * @property int|null $has_msds_pdf
 * @property int $status
 * @property string|null $msds_attachment
 * @property string|null $coa_attachment
 * @property string|null $tds_attachment
 * @property string|null $product_details
 * @property string|null $reorder_level
 * @property string|null $reorder_qty
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $created_by
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $modified_by
 * @property int|null $deleted
 * @property int|null $product_type
 * @property string|null $gst_end_use_code
 * @property int|null $del_status
 * @property string|null $end_use
 * @property int|null $is_haz_non_haz
 * @property string|null $product_category
 * @property string|null $mrp
 * @property int|null $currency_id
 * @property \Cake\I18n\FrozenDate|null $mrp_effect_from
 * @property string|null $art_work_file
 * @property \Cake\I18n\FrozenDate|null $art_work_effect_from
 * @property int|null $company_id
 * @property int|null $generic_master_id
 * @property int|null $pack_size_master_id
 * @property bool|null $is_assay_cal
 * @property string|null $composition
 * @property string|null $nafdac_reg_no
 * @property int|null $finish_product_type_id
 * @property string|null $avg_content_per
 * @property int|null $product_sub_types_id
 * @property string|null $manufacturing_license_no
 * @property string|null $batchsize
 * @property int|null $type_id
 *
 * @property \App\Model\Entity\Customer $customer
 */
class ProductsMaster extends Entity
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
        'product_name' => true,
        'brand_name_master_id' => true,
        'item_code' => true,
        'product_information' => true,
        'grade_name' => true,
        'trad_manu' => true,
        'lead_time' => true,
        'production_time' => true,
        'shelf_life' => true,
        'shelf_life_uom' => true,
        'prod_qty' => true,
        'prod_qty_uom' => true,
        'well_known_grade_name' => true,
        'acronym' => true,
        'cas_no' => true,
        'einecs_no' => true,
        'hs_code' => true,
        'ritc_code' => true,
        'molecular_formula' => true,
        'molecular_weight' => true,
        'td_status' => true,
        'td_created_by' => true,
        'td_modified_by' => true,
        'msds_status' => true,
        'msds_created_by' => true,
        'msds_modified_by' => true,
        'coa_status' => true,
        'coa_created_by' => true,
        'coa_modified_by' => true,
        'modified_timestamp' => true,
        'solubility_at' => true,
        'dosage' => true,
        'is_compound' => true,
        'has_techds_pdf' => true,
        'has_msds_pdf' => true,
        'status' => true,
        'msds_attachment' => true,
        'coa_attachment' => true,
        'tds_attachment' => true,
        'product_details' => true,
        'reorder_level' => true,
        'reorder_qty' => true,
        'created' => true,
        'created_by' => true,
        'modified' => true,
        'modified_by' => true,
        'deleted' => true,
        'product_type' => true,
        'gst_end_use_code' => true,
        'del_status' => true,
        'end_use' => true,
        'is_haz_non_haz' => true,
        'product_category' => true,
        'mrp' => true,
        'currency_id' => true,
        'mrp_effect_from' => true,
        'art_work_file' => true,
        'art_work_effect_from' => true,
        'company_id' => true,
        'generic_master_id' => true,
        'pack_size_master_id' => true,
        'is_assay_cal' => true,
        'composition' => true,
        'nafdac_reg_no' => true,
        'finish_product_type_id' => true,
        'avg_content_per' => true,
        'product_sub_types_id' => true,
        'manufacturing_license_no' => true,
        'batchsize' => true,
        'type_id' => true,
        'customer' => true,
    ];
}
