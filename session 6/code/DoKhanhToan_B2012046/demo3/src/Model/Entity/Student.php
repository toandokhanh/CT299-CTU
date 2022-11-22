<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $fullname
 * @property string|null $email
 * @property \Cake\I18n\FrozenDate|null $Birthday
 * @property \Cake\I18n\FrozenTime $reg_date
 * @property int $major_id
 * @property string $password
 *
 * @property \App\Model\Entity\Major $major
 */
class Student extends Entity
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
        'fullname' => true,
        'email' => true,
        'Birthday' => true,
        'reg_date' => true,
        'major_id' => true,
        'password' => true,
        'major' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
