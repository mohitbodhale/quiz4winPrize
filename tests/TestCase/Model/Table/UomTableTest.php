<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UomTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UomTable Test Case
 */
class UomTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UomTable
     */
    protected $Uom;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Uom',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Uom') ? [] : ['className' => UomTable::class];
        $this->Uom = $this->getTableLocator()->get('Uom', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Uom);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UomTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
