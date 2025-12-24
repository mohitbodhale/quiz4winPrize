<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ErpApiRawdata Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\ErpApiRawdata newEmptyEntity()
 * @method \App\Model\Entity\ErpApiRawdata newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ErpApiRawdata[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ErpApiRawdata get($primaryKey, $options = [])
 * @method \App\Model\Entity\ErpApiRawdata findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ErpApiRawdata patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ErpApiRawdata[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ErpApiRawdata|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ErpApiRawdata saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ErpApiRawdata[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ErpApiRawdata[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ErpApiRawdata[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ErpApiRawdata[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ErpApiRawdataTable extends Table
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

        $this->setTable('erp_api_rawdata');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
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
            ->scalar('data_model')
            ->requirePresence('data_model', 'create')
            ->notEmptyString('data_model');

        $validator
            ->integer('request_type')
            ->requirePresence('request_type', 'create')
            ->notEmptyString('request_type');

        $validator
            ->scalar('user_input_form_data')
            ->requirePresence('user_input_form_data', 'create')
            ->notEmptyString('user_input_form_data');

        $validator
            ->integer('user_id_request_by')
            ->allowEmptyString('user_id_request_by');

        $validator
            ->scalar('user_name_request_by')
            ->maxLength('user_name_request_by', 255)
            ->requirePresence('user_name_request_by', 'create')
            ->notEmptyString('user_name_request_by');

        $validator
            ->integer('customer_id')
            ->allowEmptyString('customer_id');

        $validator
            ->integer('customer_location_id')
            ->allowEmptyString('customer_location_id');

        $validator
            ->integer('generic_master_id')
            ->allowEmptyString('generic_master_id');

        $validator
            ->integer('product_id')
            ->allowEmptyString('product_id');

        $validator
            ->scalar('batch_no')
            ->maxLength('batch_no', 255)
            ->allowEmptyString('batch_no');

        $validator
            ->scalar('packsize')
            ->maxLength('packsize', 100)
            ->allowEmptyString('packsize');

        $validator
            ->scalar('packsize_uom')
            ->maxLength('packsize_uom', 255)
            ->allowEmptyString('packsize_uom');

        $validator
            ->integer('packsize_uom_id')
            ->allowEmptyString('packsize_uom_id');

        $validator
            ->integer('batchsize')
            ->allowEmptyString('batchsize');

        $validator
            ->scalar('batchsize_uom')
            ->maxLength('batchsize_uom', 255)
            ->allowEmptyString('batchsize_uom');

        $validator
            ->integer('batchsize_uom_id')
            ->allowEmptyString('batchsize_uom_id');

        $validator
            ->integer('packed_qty')
            ->allowEmptyString('packed_qty');

        $validator
            ->scalar('packed_uom')
            ->maxLength('packed_uom', 255)
            ->allowEmptyString('packed_uom');

        $validator
            ->integer('packed_uom_id')
            ->allowEmptyString('packed_uom_id');

        $validator
            ->scalar('internal_batch_number')
            ->maxLength('internal_batch_number', 255)
            ->allowEmptyString('internal_batch_number');

        $validator
            ->scalar('comments')
            ->allowEmptyString('comments');

        $validator
            ->scalar('remark')
            ->allowEmptyString('remark');

        $validator
            ->date('received_date')
            ->allowEmptyDate('received_date');

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
        $rules->add($rules->existsIn('customer_id', 'Customers'), ['errorField' => 'customer_id']);
        $rules->add($rules->existsIn('product_id', 'Products'), ['errorField' => 'product_id']);

        return $rules;
    }
}
