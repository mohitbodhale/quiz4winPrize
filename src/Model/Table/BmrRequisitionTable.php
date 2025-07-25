<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BmrRequisition Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\BmrRequisition newEmptyEntity()
 * @method \App\Model\Entity\BmrRequisition newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BmrRequisition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BmrRequisition get($primaryKey, $options = [])
 * @method \App\Model\Entity\BmrRequisition findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BmrRequisition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BmrRequisition[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BmrRequisition|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BmrRequisition saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BmrRequisition[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BmrRequisition[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BmrRequisition[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BmrRequisition[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BmrRequisitionTable extends Table
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

        $this->setTable('bmr_requisition');
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
            ->nonNegativeInteger('customer_id')
            ->allowEmptyString('customer_id');

        $validator
            ->nonNegativeInteger('customer_location_id')
            ->allowEmptyString('customer_location_id');

        $validator
            ->integer('generic_master_id')
            ->allowEmptyString('generic_master_id');

        $validator
            ->integer('product_id')
            ->allowEmptyString('product_id');

        $validator
            ->integer('batchsheet_master_id')
            ->requirePresence('batchsheet_master_id', 'create')
            ->notEmptyString('batchsheet_master_id');

        $validator
            ->integer('order_product_id')
            ->allowEmptyString('order_product_id');

        $validator
            ->scalar('batch_no')
            ->maxLength('batch_no', 50)
            ->allowEmptyString('batch_no');

        $validator
            ->scalar('packsize')
            ->maxLength('packsize', 100)
            ->allowEmptyString('packsize');

        $validator
            ->integer('packsize_uom')
            ->allowEmptyString('packsize_uom');

        $validator
            ->scalar('mfg_expiry_date_format')
            ->maxLength('mfg_expiry_date_format', 100)
            ->allowEmptyString('mfg_expiry_date_format');

        $validator
            ->date('mfg_date')
            ->allowEmptyDate('mfg_date');

        $validator
            ->date('expiry_date')
            ->allowEmptyDate('expiry_date');

        $validator
            ->date('bmr_date')
            ->allowEmptyDate('bmr_date');

        $validator
            ->scalar('bmr_time')
            ->maxLength('bmr_time', 50)
            ->allowEmptyString('bmr_time');

        $validator
            ->integer('approve_status')
            ->allowEmptyString('approve_status');

        $validator
            ->integer('bmr_master_id')
            ->allowEmptyString('bmr_master_id');

        $validator
            ->integer('batchsize')
            ->allowEmptyString('batchsize');

        $validator
            ->integer('batchsize_uom')
            ->allowEmptyString('batchsize_uom');

        $validator
            ->integer('produced_qty')
            ->allowEmptyString('produced_qty');

        $validator
            ->integer('produced_uom')
            ->allowEmptyString('produced_uom');

        $validator
            ->integer('packed_qty')
            ->allowEmptyString('packed_qty');

        $validator
            ->integer('packed_uom')
            ->allowEmptyString('packed_uom');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->integer('received_by')
            ->allowEmptyString('received_by');

        $validator
            ->date('received_date')
            ->allowEmptyDate('received_date');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        $validator
            ->scalar('coa_files')
            ->maxLength('coa_files', 200)
            ->allowEmptyFile('coa_files');

        $validator
            ->scalar('internal_batch_number')
            ->maxLength('internal_batch_number', 45)
            ->allowEmptyString('internal_batch_number');

        $validator
            ->scalar('brand_name')
            ->maxLength('brand_name', 45)
            ->allowEmptyString('brand_name');

        $validator
            ->scalar('product_type')
            ->maxLength('product_type', 45)
            ->allowEmptyString('product_type');

        $validator
            ->scalar('flavor')
            ->maxLength('flavor', 45)
            ->allowEmptyString('flavor');

        $validator
            ->scalar('product_color')
            ->maxLength('product_color', 45)
            ->allowEmptyString('product_color');

        $validator
            ->scalar('comments')
            ->allowEmptyString('comments');

        $validator
            ->scalar('bmr_attachment')
            ->maxLength('bmr_attachment', 255)
            ->allowEmptyString('bmr_attachment');

        $validator
            ->nonNegativeInteger('force_close_created_by')
            ->allowEmptyString('force_close_created_by');

        $validator
            ->nonNegativeInteger('force_close_updated_by')
            ->allowEmptyString('force_close_updated_by');

        $validator
            ->integer('modified_by')
            ->allowEmptyString('modified_by');

        $validator
            ->integer('process_validation')
            ->allowEmptyString('process_validation');

        $validator
            ->scalar('remark')
            ->maxLength('remark', 255)
            ->allowEmptyString('remark');

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
