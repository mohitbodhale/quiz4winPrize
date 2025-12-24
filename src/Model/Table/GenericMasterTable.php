<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GenericMaster Model
 *
 * @property \App\Model\Table\BmrRequisitionTable&\Cake\ORM\Association\HasMany $BmrRequisition
 * @property \App\Model\Table\ErpApiRawdataTable&\Cake\ORM\Association\HasMany $ErpApiRawdata
 * @property \App\Model\Table\ProductsMasterTable&\Cake\ORM\Association\HasMany $ProductsMaster
 *
 * @method \App\Model\Entity\GenericMaster newEmptyEntity()
 * @method \App\Model\Entity\GenericMaster newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\GenericMaster[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GenericMaster get($primaryKey, $options = [])
 * @method \App\Model\Entity\GenericMaster findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\GenericMaster patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GenericMaster[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\GenericMaster|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GenericMaster saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GenericMaster[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GenericMaster[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\GenericMaster[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\GenericMaster[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GenericMasterTable extends Table
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

        $this->setTable('generic_master');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('BmrRequisition', [
            'foreignKey' => 'generic_master_id',
        ]);
        $this->hasMany('ErpApiRawdata', [
            'foreignKey' => 'generic_master_id',
        ]);
        $this->hasMany('ProductsMaster', [
            'foreignKey' => 'generic_master_id',
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
            ->scalar('generic_name')
            ->maxLength('generic_name', 255)
            ->allowEmptyString('generic_name');

        $validator
            ->decimal('std_kg_qty')
            ->allowEmptyString('std_kg_qty');

        $validator
            ->scalar('specific_gr_limit')
            ->maxLength('specific_gr_limit', 25)
            ->allowEmptyString('specific_gr_limit');

        $validator
            ->integer('std_kg_qty_uom')
            ->allowEmptyString('std_kg_qty_uom');

        return $validator;
    }
}
