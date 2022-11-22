<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
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
                'ho_ten' => 'Lorem ipsum dolor sit amet',
                'ngay_sinh' => '2022-10-24',
                'email' => 'Lorem ipsum dolor sit amet',
                'gioi_tinh' => 'Lorem ipsum dolor sit amet',
                'so_dien_thoai' => 1,
                'mat_khau' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
