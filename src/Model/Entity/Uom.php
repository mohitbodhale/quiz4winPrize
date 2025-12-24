<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Uom Entity
 *
 * @property int $id
 * @property string $unit_name
 * @property string|null $unit_symbol
 * @property string|null $unit_type
 * @property string|null $convertor
 */
class Uom extends Entity
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
        'unit_name' => true,
        'unit_symbol' => true,
        'unit_type' => true,
        'convertor' => true,
    ];
}
