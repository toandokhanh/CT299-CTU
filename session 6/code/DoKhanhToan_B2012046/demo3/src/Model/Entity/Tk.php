<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tk Entity
 *
 * @property int|null $id
 * @property int|null $major_id
 * @property string|null $name_major
 * @property int $num_students
 *
 * @property \App\Model\Entity\Major $major
 */
class Tk extends Entity
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
        'id' => true,
        'major_id' => true,
        'name_major' => true,
        'num_students' => true,
        'major' => true,
    ];
}
