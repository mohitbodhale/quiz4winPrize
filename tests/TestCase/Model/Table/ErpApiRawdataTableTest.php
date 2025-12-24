<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ErpApiRawdataTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ErpApiRawdataTable Test Case
 */
class ErpApiRawdataTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ErpApiRawdataTable
     */
    protected $ErpApiRawdata;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ErpApiRawdata',
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
        $config = $this->getTableLocator()->exists('ErpApiRawdata') ? [] : ['className' => ErpApiRawdataTable::class];
        $this->ErpApiRawdata = $this->getTableLocator()->get('ErpApiRawdata', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ErpApiRawdata);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ErpApiRawdataTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ErpApiRawdataTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
