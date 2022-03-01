<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proveedor Model
 *
 * @method \App\Model\Entity\Proveedor newEmptyEntity()
 * @method \App\Model\Entity\Proveedor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proveedor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Proveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProveedorTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('proveedor');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Nombre')
            ->maxLength('Nombre', 250)
            ->requirePresence('Nombre', 'create')
            ->notEmptyString('Nombre');

        $validator
            ->scalar('Apellido')
            ->maxLength('Apellido', 250)
            ->requirePresence('Apellido', 'create')
            ->notEmptyString('Apellido');

        $validator
            ->integer('Dni')
            ->requirePresence('Dni', 'create')
            ->notEmptyString('Dni');

        $validator
            ->scalar('Direccion')
            ->maxLength('Direccion', 70)
            ->requirePresence('Direccion', 'create')
            ->notEmptyString('Direccion');

        $validator
            ->integer('Telefono')
            ->requirePresence('Telefono', 'create')
            ->notEmptyString('Telefono');

        return $validator;
    }
}
