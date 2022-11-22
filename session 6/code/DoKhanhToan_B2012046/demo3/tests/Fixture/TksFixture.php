<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TksFixture
 */
class TksFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'major_id' => 1,
                'name_major' => 'Lorem ipsum dolor sit amet',
                'num_students' => 1,
            ],
        ];
        parent::init();
    }
}
