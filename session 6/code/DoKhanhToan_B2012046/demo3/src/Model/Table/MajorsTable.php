<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Majors Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\HasMany $Students
 *
 * @method \App\Model\Entity\Major newEmptyEntity()
 * @method \App\Model\Entity\Major newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Major[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Major get($primaryKey, $options = [])
 * @method \App\Model\Entity\Major findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Major patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Major[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Major|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Major saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Major[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Major[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Major[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Major[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MajorsTable extends Table
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

        $this->setTable('majors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Students', [
            'foreignKey' => 'major_id',
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
            ->scalar('name_major')
            ->maxLength('name_major', 30)
            ->requirePresence('name_major', 'create')
            ->notEmptyString('name_major');

        return $validator;
    }
}
