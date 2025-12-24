<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Uom Model
 *
 * @method \App\Model\Entity\Uom newEmptyEntity()
 * @method \App\Model\Entity\Uom newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Uom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Uom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Uom findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Uom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Uom[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Uom|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Uom saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Uom[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Uom[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Uom[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Uom[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UomTable extends Table
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

        $this->setTable('uom');
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
            ->scalar('unit_name')
            ->maxLength('unit_name', 45)
            ->requirePresence('unit_name', 'create')
            ->notEmptyString('unit_name');

        $validator
            ->scalar('unit_symbol')
            ->maxLength('unit_symbol', 10)
            ->allowEmptyString('unit_symbol');

        $validator
            ->scalar('unit_type')
            ->maxLength('unit_type', 15)
            ->allowEmptyString('unit_type');

        $validator
            ->decimal('convertor')
            ->allowEmptyString('convertor');

        return $validator;
    }
}
