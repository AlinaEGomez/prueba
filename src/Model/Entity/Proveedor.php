<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proveedor Entity
 *
 * 
 * @property string $Nombre
 * @property string $Apellido
 * @property int $Dni
 * @property string $Direccion
 * @property bigint $Telefono
 */
class Proveedor extends Entity
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
        'Nombre' => true,
        'Apellido' => true,
        'Dni' => true,
        'Direccion' => true,
        'Telefono' => true,
    ];
}
