<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LopMonsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LopMonsTable Test Case
 */
class LopMonsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LopMonsTable
     */
    protected $LopMons;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LopMons',
        'app.Subjects',
        'app.Diems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LopMons') ? [] : ['className' => LopMonsTable::class];
        $this->LopMons = $this->getTableLocator()->get('LopMons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LopMons);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LopMonsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\LopMonsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
