<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProveedor extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('proveedor');
        $table->addColumn('nombre', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('apellido', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('dni', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('direccion', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('correo', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('telefono', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
