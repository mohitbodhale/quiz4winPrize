<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsMasterTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsMasterTable Test Case
 */
class ProductsMasterTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsMasterTable
     */
    protected $ProductsMaster;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ProductsMaster',
        'app.Customers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ProductsMaster') ? [] : ['className' => ProductsMasterTable::class];
        $this->ProductsMaster = $this->getTableLocator()->get('ProductsMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ProductsMaster);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductsMasterTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProductsMasterTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
