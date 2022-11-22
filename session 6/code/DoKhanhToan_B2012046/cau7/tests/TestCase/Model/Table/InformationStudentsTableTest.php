<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InformationStudentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InformationStudentsTable Test Case
 */
class InformationStudentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InformationStudentsTable
     */
    protected $InformationStudents;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.InformationStudents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('InformationStudents') ? [] : ['className' => InformationStudentsTable::class];
        $this->InformationStudents = $this->getTableLocator()->get('InformationStudents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->InformationStudents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InformationStudentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
