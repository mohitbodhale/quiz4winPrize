<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ErpApiRawdataFixture
 */
class ErpApiRawdataFixture extends TestFixture
{
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
                'data_model' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'request_type' => 1,
                'user_input_form_data' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'user_id_request_by' => 1,
                'user_name_request_by' => 'Lorem ipsum dolor sit amet',
                'customer_id' => 1,
                'customer_location_id' => 1,
                'generic_master_id' => 1,
                'product_id' => 1,
                'batch_no' => 'Lorem ipsum dolor sit amet',
                'packsize' => 'Lorem ipsum dolor sit amet',
                'packsize_uom' => 'Lorem ipsum dolor sit amet',
                'packsize_uom_id' => 1,
                'batchsize' => 1,
                'batchsize_uom' => 'Lorem ipsum dolor sit amet',
                'batchsize_uom_id' => 1,
                'packed_qty' => 1,
                'packed_uom' => 'Lorem ipsum dolor sit amet',
                'packed_uom_id' => 1,
                'internal_batch_number' => 'Lorem ipsum dolor sit amet',
                'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'remark' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2025-07-25',
                'modified' => '2025-07-25',
                'received_date' => '2025-07-25',
            ],
        ];
        parent::init();
    }
}
