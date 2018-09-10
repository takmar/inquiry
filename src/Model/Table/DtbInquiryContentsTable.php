<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbInquiryContents Model
 *
 * @property \App\Model\Table\MtbInquiryKindsTable|\Cake\ORM\Association\BelongsTo $MtbInquiryKinds
 *
 * @method \App\Model\Entity\DtbInquiryContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbInquiryContent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbInquiryContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbInquiryContent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbInquiryContent|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbInquiryContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbInquiryContent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbInquiryContent findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DtbInquiryContentsTable extends Table
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

        $this->setTable('dtb_inquiry_contents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('MtbInquiryKinds', [
            'foreignKey' => 'mtb_inquiry_kind_id',
            'joinType' => 'INNER'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('mail_address')
            ->maxLength('mail_address', 255)
            ->requirePresence('mail_address', 'create')
            ->notEmpty('mail_address')
            ->add('mail_address', 'validFormat', [
                'rule' => 'email',
            ]);

        $validator
            ->scalar('content')
            ->requirePresence('content', 'create')
            ->notEmpty('content');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['mtb_inquiry_kind_id'], 'MtbInquiryKinds'));

        return $rules;
    }

    /**
     * create data.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return bool
     */
    public function createData($data)
    {
        $result = false;

        $inquiryContent = $this->newEntity($data);
        if (!$inquiryContent->getErrors()) {
            $result = $this->save($inquiryContent);
        }

        return $result;
    }
}
