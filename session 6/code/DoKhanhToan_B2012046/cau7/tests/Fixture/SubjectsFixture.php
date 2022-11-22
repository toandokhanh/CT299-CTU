<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubjectsFixture
 */
class SubjectsFixture extends TestFixture
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
                'subject_name' => 'Lorem ipsum dolor sit amet',
                'so_tin_chi' => 1,
                'diem_tich_luy' => 1,
            ],
        ];
        parent::init();
    }
}
