<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductsMaster Model
 *
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 *
 * @method \App\Model\Entity\ProductsMaster newEmptyEntity()
 * @method \App\Model\Entity\ProductsMaster newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductsMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductsMaster findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductsMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsMaster[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductsMaster|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsMaster saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductsMaster[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsMaster[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsMaster[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductsMaster[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsMasterTable extends Table
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

        $this->setTable('products_master');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
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
            ->integer('customer_id')
            ->allowEmptyString('customer_id');

        $validator
            ->integer('customer_location_id')
            ->allowEmptyString('customer_location_id');

        $validator
            ->scalar('product_name')
            ->maxLength('product_name', 150)
            ->allowEmptyString('product_name');

        $validator
            ->integer('brand_name_master_id')
            ->allowEmptyString('brand_name_master_id');

        $validator
            ->scalar('item_code')
            ->maxLength('item_code', 25)
            ->allowEmptyString('item_code');

        $validator
            ->scalar('product_information')
            ->maxLength('product_information', 500)
            ->allowEmptyString('product_information');

        $validator
            ->scalar('grade_name')
            ->maxLength('grade_name', 255)
            ->allowEmptyString('grade_name');

        $validator
            ->scalar('trad_manu')
            ->maxLength('trad_manu', 11)
            ->allowEmptyString('trad_manu');

        $validator
            ->integer('lead_time')
            ->allowEmptyString('lead_time');

        $validator
            ->integer('production_time')
            ->allowEmptyString('production_time');

        $validator
            ->integer('shelf_life')
            ->allowEmptyString('shelf_life');

        $validator
            ->integer('shelf_life_uom')
            ->allowEmptyString('shelf_life_uom');

        $validator
            ->integer('prod_qty')
            ->allowEmptyString('prod_qty');

        $validator
            ->integer('prod_qty_uom')
            ->allowEmptyString('prod_qty_uom');

        $validator
            ->scalar('well_known_grade_name')
            ->maxLength('well_known_grade_name', 45)
            ->allowEmptyString('well_known_grade_name');

        $validator
            ->scalar('acronym')
            ->maxLength('acronym', 45)
            ->allowEmptyString('acronym');

        $validator
            ->scalar('cas_no')
            ->maxLength('cas_no', 60)
            ->allowEmptyString('cas_no');

        $validator
            ->scalar('einecs_no')
            ->maxLength('einecs_no', 45)
            ->allowEmptyString('einecs_no');

        $validator
            ->scalar('hs_code')
            ->maxLength('hs_code', 45)
            ->allowEmptyString('hs_code');

        $validator
            ->scalar('ritc_code')
            ->maxLength('ritc_code', 45)
            ->allowEmptyString('ritc_code');

        $validator
            ->scalar('molecular_formula')
            ->maxLength('molecular_formula', 70)
            ->allowEmptyString('molecular_formula');

        $validator
            ->scalar('molecular_weight')
            ->maxLength('molecular_weight', 45)
            ->allowEmptyString('molecular_weight');

        $validator
            ->scalar('td_status')
            ->maxLength('td_status', 1)
            ->allowEmptyString('td_status');

        $validator
            ->scalar('td_created_by')
            ->maxLength('td_created_by', 60)
            ->allowEmptyString('td_created_by');

        $validator
            ->scalar('td_modified_by')
            ->maxLength('td_modified_by', 60)
            ->allowEmptyString('td_modified_by');

        $validator
            ->scalar('msds_status')
            ->maxLength('msds_status', 1)
            ->allowEmptyString('msds_status');

        $validator
            ->scalar('msds_created_by')
            ->maxLength('msds_created_by', 60)
            ->allowEmptyString('msds_created_by');

        $validator
            ->scalar('msds_modified_by')
            ->maxLength('msds_modified_by', 60)
            ->allowEmptyString('msds_modified_by');

        $validator
            ->scalar('coa_status')
            ->maxLength('coa_status', 1)
            ->allowEmptyString('coa_status');

        $validator
            ->scalar('coa_created_by')
            ->maxLength('coa_created_by', 60)
            ->allowEmptyString('coa_created_by');

        $validator
            ->scalar('coa_modified_by')
            ->maxLength('coa_modified_by', 60)
            ->allowEmptyString('coa_modified_by');

        $validator
            ->dateTime('modified_timestamp')
            ->allowEmptyDateTime('modified_timestamp');

        $validator
            ->scalar('solubility_at')
            ->maxLength('solubility_at', 10)
            ->allowEmptyString('solubility_at');

        $validator
            ->scalar('dosage')
            ->maxLength('dosage', 500)
            ->allowEmptyString('dosage');

        $validator
            ->scalar('is_compound')
            ->maxLength('is_compound', 1)
            ->allowEmptyString('is_compound');

        $validator
            ->allowEmptyString('has_techds_pdf');

        $validator
            ->allowEmptyString('has_msds_pdf');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        $validator
            ->scalar('msds_attachment')
            ->maxLength('msds_attachment', 500)
            ->allowEmptyString('msds_attachment');

        $validator
            ->scalar('coa_attachment')
            ->maxLength('coa_attachment', 500)
            ->allowEmptyString('coa_attachment');

        $validator
            ->scalar('tds_attachment')
            ->maxLength('tds_attachment', 500)
            ->allowEmptyString('tds_attachment');

        $validator
            ->scalar('product_details')
            ->allowEmptyString('product_details');

        $validator
            ->decimal('reorder_level')
            ->allowEmptyString('reorder_level');

        $validator
            ->decimal('reorder_qty')
            ->allowEmptyString('reorder_qty');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->integer('modified_by')
            ->allowEmptyString('modified_by');

        $validator
            ->allowEmptyString('deleted');

        $validator
            ->allowEmptyString('product_type');

        $validator
            ->scalar('gst_end_use_code')
            ->maxLength('gst_end_use_code', 25)
            ->allowEmptyString('gst_end_use_code');

        $validator
            ->integer('del_status')
            ->allowEmptyString('del_status');

        $validator
            ->scalar('end_use')
            ->maxLength('end_use', 255)
            ->allowEmptyString('end_use');

        $validator
            ->allowEmptyString('is_haz_non_haz');

        $validator
            ->scalar('product_category')
            ->maxLength('product_category', 15)
            ->allowEmptyString('product_category');

        $validator
            ->decimal('mrp')
            ->allowEmptyString('mrp');

        $validator
            ->integer('currency_id')
            ->allowEmptyString('currency_id');

        $validator
            ->date('mrp_effect_from')
            ->allowEmptyDate('mrp_effect_from');

        $validator
            ->scalar('art_work_file')
            ->maxLength('art_work_file', 55)
            ->allowEmptyFile('art_work_file');

        $validator
            ->date('art_work_effect_from')
            ->allowEmptyDate('art_work_effect_from');

        $validator
            ->integer('company_id')
            ->allowEmptyString('company_id');

        $validator
            ->integer('generic_master_id')
            ->allowEmptyString('generic_master_id');

        $validator
            ->integer('pack_size_master_id')
            ->allowEmptyString('pack_size_master_id');

        $validator
            ->boolean('is_assay_cal')
            ->allowEmptyString('is_assay_cal');

        $validator
            ->scalar('composition')
            ->allowEmptyString('composition');

        $validator
            ->scalar('nafdac_reg_no')
            ->maxLength('nafdac_reg_no', 100)
            ->allowEmptyString('nafdac_reg_no');

        $validator
            ->integer('finish_product_type_id')
            ->allowEmptyString('finish_product_type_id');

        $validator
            ->scalar('avg_content_per')
            ->maxLength('avg_content_per', 100)
            ->allowEmptyString('avg_content_per');

        $validator
            ->integer('product_sub_types_id')
            ->allowEmptyString('product_sub_types_id');

        $validator
            ->scalar('manufacturing_license_no')
            ->maxLength('manufacturing_license_no', 100)
            ->allowEmptyString('manufacturing_license_no');

        $validator
            ->scalar('batchsize')
            ->maxLength('batchsize', 100)
            ->allowEmptyString('batchsize');

        $validator
            ->integer('type_id')
            ->allowEmptyString('type_id');

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

        return $rules;
    }
}
