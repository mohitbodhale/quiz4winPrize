<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestAttemptsFixture
 */
class TestAttemptsFixture extends TestFixture
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
                'users_id' => 1,
                'tests_id' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'start_time' => '2025-11-27 12:25:33',
                'end_time' => '2025-11-27 12:25:33',
                'created' => '2025-11-27 12:25:33',
                'modified' => '2025-11-27 12:25:33',
            ],
        ];
        parent::init();
    }
}
