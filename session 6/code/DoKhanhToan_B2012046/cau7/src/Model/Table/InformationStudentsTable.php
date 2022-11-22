<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InformationStudents Model
 *
 * @method \App\Model\Entity\InformationStudent newEmptyEntity()
 * @method \App\Model\Entity\InformationStudent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\InformationStudent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InformationStudent get($primaryKey, $options = [])
 * @method \App\Model\Entity\InformationStudent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\InformationStudent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InformationStudent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InformationStudent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InformationStudent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InformationStudent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InformationStudent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\InformationStudent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\InformationStudent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InformationStudentsTable extends Table
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

        $this->setTable('information_students');
        $this->setDisplayField('mssv');
        $this->setPrimaryKey('mssv');
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
            ->integer('mssv')
            ->notEmptyString('mssv');

        $validator
            ->scalar('ho_ten')
            ->maxLength('ho_ten', 50)
            ->requirePresence('ho_ten', 'create')
            ->notEmptyString('ho_ten');

        $validator
            ->numeric('diem_tich_luy')
            ->requirePresence('diem_tich_luy', 'create')
            ->notEmptyString('diem_tich_luy');

        $validator
            ->notEmptyString('somonhoc');

        $validator
            ->notEmptyString('somontichluy');

        $validator
            ->decimal('tongsotinchidatichluy')
            ->allowEmptyString('tongsotinchidatichluy');

        return $validator;
    }
}
