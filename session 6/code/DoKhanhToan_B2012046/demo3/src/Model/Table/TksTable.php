<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tks Model
 *
 * @property \App\Model\Table\MajorsTable&\Cake\ORM\Association\BelongsTo $Majors
 *
 * @method \App\Model\Entity\Tk newEmptyEntity()
 * @method \App\Model\Entity\Tk newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Tk[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tk get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tk findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Tk patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tk[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tk|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tk saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tk[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tk[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tk[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Tk[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TksTable extends Table
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

        $this->setTable('tks');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Majors', [
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
            ->integer('id')
            ->allowEmptyString('id');

        $validator
            ->integer('major_id')
            ->allowEmptyString('major_id');

        $validator
            ->scalar('name_major')
            ->maxLength('name_major', 30)
            ->allowEmptyString('name_major');

        $validator
            ->notEmptyString('num_students');

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
        $rules->add($rules->existsIn('major_id', 'Majors'), ['errorField' => 'major_id']);

        return $rules;
    }
}
