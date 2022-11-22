<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MajorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MajorsTable Test Case
 */
class MajorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MajorsTable
     */
    protected $Majors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Majors',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Majors') ? [] : ['className' => MajorsTable::class];
        $this->Majors = $this->getTableLocator()->get('Majors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Majors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MajorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
