<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GenericMasterFixture
 */
class GenericMasterFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'generic_master';
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
                'generic_name' => 'Lorem ipsum dolor sit amet',
                'std_kg_qty' => 1.5,
                'specific_gr_limit' => 'Lorem ipsum dolor sit a',
                'std_kg_qty_uom' => 1,
            ],
        ];
        parent::init();
    }
}
