<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TestsResults Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TestsTable&\Cake\ORM\Association\BelongsTo $Tests
 *
 * @method \App\Model\Entity\TestsResult newEmptyEntity()
 * @method \App\Model\Entity\TestsResult newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TestsResult[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TestsResult get($primaryKey, $options = [])
 * @method \App\Model\Entity\TestsResult findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TestsResult patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TestsResult[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TestsResult|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TestsResult saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TestsResult[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TestsResult[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TestsResult[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TestsResult[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TestsResultsTable extends Table
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

        $this->setTable('tests_results');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Tests', [
            'foreignKey' => 'tests_id', // Adjust this according to your database schema
            'joinType' => 'INNER', // Optionally specify join type
        ]);
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
            ->integer('users_id')
            ->notEmptyString('users_id');

        $validator
            ->integer('tests_id')
            ->notEmptyString('tests_id');

        $validator
            ->scalar('comparisons')
            ->allowEmptyString('comparisons');

        $validator
            ->integer('score')
            ->requirePresence('score', 'create')
            ->notEmptyString('score');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('users_id', 'Users'), ['errorField' => 'users_id']);
        $rules->add($rules->existsIn('tests_id', 'Tests'), ['errorField' => 'tests_id']);

        return $rules;
    }
}
