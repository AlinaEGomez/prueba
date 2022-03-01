<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Compra Model
 *
 * @method \App\Model\Entity\Compra newEmptyEntity()
 * @method \App\Model\Entity\Compra newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Compra[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Compra get($primaryKey, $options = [])
 * @method \App\Model\Entity\Compra findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Compra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Compra[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Compra|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Compra saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Compra[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Compra[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Compra[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Compra[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CompraTable extends Table
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

        $this->setTable('compra');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->date('Fecha')
            ->requirePresence('Fecha', 'create')
            ->notEmptyDate('Fecha');

        $validator
            ->scalar('Nombre')
            ->requirePresence('Nombre', 'create')
            ->notEmptyString('Nombre');

        $validator
            ->requirePresence('Dni', 'create')
            ->notEmptyString('Dni');

        $validator
            ->scalar('Correo')
            ->maxLength('Correo', 50)
            ->requirePresence('Correo', 'create')
            ->notEmptyString('Correo');

        return $validator;
    }
}
