<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BmrRequisitionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BmrRequisitionTable Test Case
 */
class BmrRequisitionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BmrRequisitionTable
     */
    protected $BmrRequisition;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BmrRequisition',
        'app.Customers',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BmrRequisition') ? [] : ['className' => BmrRequisitionTable::class];
        $this->BmrRequisition = $this->getTableLocator()->get('BmrRequisition', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BmrRequisition);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BmrRequisitionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BmrRequisitionTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
