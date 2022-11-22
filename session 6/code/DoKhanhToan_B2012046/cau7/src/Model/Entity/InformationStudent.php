<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InformationStudent Entity
 *
 * @property int $mssv
 * @property string $ho_ten
 * @property float $diem_tich_luy
 * @property int $somonhoc
 * @property int $somontichluy
 * @property string|null $tongsotinchidatichluy
 */
class InformationStudent extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'mssv' => true,
        'ho_ten' => true,
        'diem_tich_luy' => true,
        'somonhoc' => true,
        'somontichluy' => true,
        'tongsotinchidatichluy' => true,
    ];
}
