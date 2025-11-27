<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TestAttempt Entity
 *
 * @property int $id
 * @property int $users_id
 * @property int $tests_id
 * @property string $status
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Test $test
 */
class TestAttempt extends Entity
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
        'users_id' => true,
        'tests_id' => true,
        'status' => true,
        'start_time' => true,
        'end_time' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'test' => true,
    ];
}
