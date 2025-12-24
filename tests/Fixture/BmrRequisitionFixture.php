<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BmrRequisitionFixture
 */
class BmrRequisitionFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bmr_requisition';
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
                'generic_master_id' => 1,
                'product_id' => 1,
                'batchsheet_master_id' => 1,
                'order_product_id' => 1,
                'batch_no' => 'Lorem ipsum dolor sit amet',
                'packsize' => 'Lorem ipsum dolor sit amet',
                'packsize_uom' => 1,
                'mfg_expiry_date_format' => 'Lorem ipsum dolor sit amet',
                'mfg_date' => '2025-07-25',
                'expiry_date' => '2025-07-25',
                'bmr_date' => '2025-07-25',
                'bmr_time' => 'Lorem ipsum dolor sit amet',
                'approve_status' => 1,
                'bmr_master_id' => 1,
                'batchsize' => 1,
                'batchsize_uom' => 1,
                'produced_qty' => 1,
                'produced_uom' => 1,
                'packed_qty' => 1,
                'packed_uom' => 1,
                'created_by' => 1,
                'created' => '2025-07-25',
                'received_by' => 1,
                'received_date' => '2025-07-25',
                'status' => 1,
                'coa_files' => 'Lorem ipsum dolor sit amet',
                'internal_batch_number' => 'Lorem ipsum dolor sit amet',
                'brand_name' => 'Lorem ipsum dolor sit amet',
                'product_type' => 'Lorem ipsum dolor sit amet',
                'flavor' => 'Lorem ipsum dolor sit amet',
                'product_color' => 'Lorem ipsum dolor sit amet',
                'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'bmr_attachment' => 'Lorem ipsum dolor sit amet',
                'force_close_created_by' => 1,
                'force_close_updated_by' => 1,
                'modified' => '2025-07-25 05:50:15',
                'modified_by' => 1,
                'process_validation' => 1,
                'remark' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
