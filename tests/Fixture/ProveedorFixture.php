<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedorFixture
 */
class ProveedorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proveedor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Id' => 1,
                'Nombre' => 'Lorem ipsum dolor sit amet',
                'Apellido' => 'Lorem ipsum dolor sit amet',
                'Dni' => 1,
                'Direccion' => 'Lorem ipsum dolor sit amet',
                'Correo' => 'Lorem ipsum dolor sit amet',
                'Telefono' => 1,
            ],
        ];
        parent::init();
    }
}
