<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Compra Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $Fecha
 * @property string $Nombre
 * @property int $Dni
 * @property string $Correo
 */
class Compra extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Fecha' => true,
        'Nombre' => true,
        'Dni' => true,
        'Correo' => true,
    ];
}
