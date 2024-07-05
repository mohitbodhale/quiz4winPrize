<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestsResultsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestsResultsTable Test Case
 */
class TestsResultsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TestsResultsTable
     */
    protected $TestsResults;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.TestsResults',
        'app.Users',
        'app.Tests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TestsResults') ? [] : ['className' => TestsResultsTable::class];
        $this->TestsResults = $this->getTableLocator()->get('TestsResults', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->TestsResults);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TestsResultsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\TestsResultsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
