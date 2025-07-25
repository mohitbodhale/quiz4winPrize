<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsMasterFixture
 */
class ProductsMasterFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'products_master';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'customer_id' => 1,
                'customer_location_id' => 1,
                'product_name' => 'Lorem ipsum dolor sit amet',
                'brand_name_master_id' => 1,
                'item_code' => 'Lorem ipsum dolor sit a',
                'product_information' => 'Lorem ipsum dolor sit amet',
                'grade_name' => 'Lorem ipsum dolor sit amet',
                'trad_manu' => 'Lorem ips',
                'lead_time' => 1,
                'production_time' => 1,
                'shelf_life' => 1,
                'shelf_life_uom' => 1,
                'prod_qty' => 1,
                'prod_qty_uom' => 1,
                'well_known_grade_name' => 'Lorem ipsum dolor sit amet',
                'acronym' => 'Lorem ipsum dolor sit amet',
                'cas_no' => 'Lorem ipsum dolor sit amet',
                'einecs_no' => 'Lorem ipsum dolor sit amet',
                'hs_code' => 'Lorem ipsum dolor sit amet',
                'ritc_code' => 'Lorem ipsum dolor sit amet',
                'molecular_formula' => 'Lorem ipsum dolor sit amet',
                'molecular_weight' => 'Lorem ipsum dolor sit amet',
                'td_status' => '',
                'td_created_by' => 'Lorem ipsum dolor sit amet',
                'td_modified_by' => 'Lorem ipsum dolor sit amet',
                'msds_status' => '',
                'msds_created_by' => 'Lorem ipsum dolor sit amet',
                'msds_modified_by' => 'Lorem ipsum dolor sit amet',
                'coa_status' => '',
                'coa_created_by' => 'Lorem ipsum dolor sit amet',
                'coa_modified_by' => 'Lorem ipsum dolor sit amet',
                'modified_timestamp' => '2025-07-25 05:51:15',
                'solubility_at' => 'Lorem ip',
                'dosage' => 'Lorem ipsum dolor sit amet',
                'is_compound' => '',
                'has_techds_pdf' => 1,
                'has_msds_pdf' => 1,
                'status' => 1,
                'msds_attachment' => 'Lorem ipsum dolor sit amet',
                'coa_attachment' => 'Lorem ipsum dolor sit amet',
                'tds_attachment' => 'Lorem ipsum dolor sit amet',
                'product_details' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'reorder_level' => 1.5,
                'reorder_qty' => 1.5,
                'created' => '2025-07-25 05:51:15',
                'created_by' => 1,
                'modified' => '2025-07-25 05:51:15',
                'modified_by' => 1,
                'deleted' => 1,
                'product_type' => 1,
                'gst_end_use_code' => 'Lorem ipsum dolor sit a',
                'del_status' => 1,
                'end_use' => 'Lorem ipsum dolor sit amet',
                'is_haz_non_haz' => 1,
                'product_category' => 'Lorem ipsum d',
                'mrp' => 1.5,
                'currency_id' => 1,
                'mrp_effect_from' => '2025-07-25',
                'art_work_file' => 'Lorem ipsum dolor sit amet',
                'art_work_effect_from' => '2025-07-25',
                'company_id' => 1,
                'generic_master_id' => 1,
                'pack_size_master_id' => 1,
                'is_assay_cal' => 1,
                'composition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'nafdac_reg_no' => 'Lorem ipsum dolor sit amet',
                'finish_product_type_id' => 1,
                'avg_content_per' => 'Lorem ipsum dolor sit amet',
                'product_sub_types_id' => 1,
                'manufacturing_license_no' => 'Lorem ipsum dolor sit amet',
                'batchsize' => 'Lorem ipsum dolor sit amet',
                'type_id' => 1,
            ],
        ];
        parent::init();
    }
}
