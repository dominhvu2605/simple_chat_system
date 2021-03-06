<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeedsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeedsTable Test Case
 */
class FeedsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FeedsTable
     */
    protected $Feeds;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Feeds',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Feeds') ? [] : ['className' => FeedsTable::class];
        $this->Feeds = TableRegistry::getTableLocator()->get('Feeds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Feeds);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
