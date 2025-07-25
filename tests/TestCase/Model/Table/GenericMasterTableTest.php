<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GenericMasterTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GenericMasterTable Test Case
 */
class GenericMasterTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GenericMasterTable
     */
    protected $GenericMaster;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.GenericMaster',
        'app.BmrRequisition',
        'app.ErpApiRawdata',
        'app.ProductsMaster',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('GenericMaster') ? [] : ['className' => GenericMasterTable::class];
        $this->GenericMaster = $this->getTableLocator()->get('GenericMaster', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->GenericMaster);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GenericMasterTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
