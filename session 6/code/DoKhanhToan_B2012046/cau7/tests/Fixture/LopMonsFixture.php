<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LopMonsFixture
 */
class LopMonsFixture extends TestFixture
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
                'subject_id' => 1,
                'nien_khoa' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
