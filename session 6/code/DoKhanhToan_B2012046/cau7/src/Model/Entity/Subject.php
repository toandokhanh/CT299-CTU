<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subject Entity
 *
 * @property int $id
 * @property string $subject_name
 * @property int $so_tin_chi
 * @property float $diem_tich_luy
 *
 * @property \App\Model\Entity\LopMon[] $lop_mons
 */
class Subject extends Entity
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
        'subject_name' => true,
        'so_tin_chi' => true,
        'diem_tich_luy' => true,
        'lop_mons' => true,
    ];
}
