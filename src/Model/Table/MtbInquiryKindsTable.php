<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbInquiryKinds Model
 *
 * @property |\Cake\ORM\Association\HasMany $DtbInquiryContents
 *
 * @method \App\Model\Entity\MtbInquiryKind get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbInquiryKind newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbInquiryKind[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbInquiryKind|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbInquiryKind|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbInquiryKind patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbInquiryKind[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbInquiryKind findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MtbInquiryKindsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mtb_inquiry_kinds');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('DtbInquiryContents', [
            'foreignKey' => 'mtb_inquiry_kind_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('kind_name')
            ->maxLength('kind_name', 255)
            ->requirePresence('kind_name', 'create')
            ->notEmpty('kind_name');

        return $validator;
    }

    /**
     * get name infomations.
     *
     * @return Cake\ORM\ResultSet
     */
    public function getKindNameInfos($id = false)
    {
        return $this->find()
               ->applyOptions(['fields' => ['id', 'kind_name']])
               ->order(['id' => 'ASC'])
               ->all();
    }

    /**
     * get name infomation by id.
     *
     * @param $id MtbInquiryKindsTable.id
     * @return Cake\ORM\ResultSet
     */
    public function getKindNameInfoById($id)
    {
        return $this->find()
               ->select(['id', 'kind_name'])
               ->where(['id' => $id])
               ->first();
    }
}
