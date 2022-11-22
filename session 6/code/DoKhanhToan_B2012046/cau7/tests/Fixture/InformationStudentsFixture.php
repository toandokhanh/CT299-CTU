<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InformationStudentsFixture
 */
class InformationStudentsFixture extends TestFixture
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
                'mssv' => 1,
                'ho_ten' => 'Lorem ipsum dolor sit amet',
                'diem_tich_luy' => 1,
                'somonhoc' => 1,
                'somontichluy' => 1,
                'tongsotinchidatichluy' => 1.5,
            ],
        ];
        parent::init();
    }
}
