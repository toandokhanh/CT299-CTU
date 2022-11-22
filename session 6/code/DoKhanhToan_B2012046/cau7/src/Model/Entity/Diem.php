<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Diem Entity
 *
 * @property int $student_id
 * @property int $lop_mon_id
 * @property float $diem
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\LopMon $lop_mon
 */
class Diem extends Entity
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
        'diem' => true,
        'student' => true,
        'lop_mon' => true,
    ];
}
