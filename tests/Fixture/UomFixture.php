<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UomFixture
 */
class UomFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'uom';
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
                'unit_name' => 'Lorem ipsum dolor sit amet',
                'unit_symbol' => 'Lorem ip',
                'unit_type' => 'Lorem ipsum d',
                'convertor' => 1.5,
            ],
        ];
        parent::init();
    }
}
