<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * InformationStudents Controller
 *
 * @property \App\Model\Table\InformationStudentsTable $InformationStudents
 * @method \App\Model\Entity\InfoStudent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InformationStudentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'order' => ['InformationStudents.diem_tich_luy' => 'desc'],
        ];
        $informationStudents = $this->paginate($this->InformationStudents);

        $this->set(compact('informationStudents'));
    }

    /**
     * View method
     *
     * @param string|null $id Info Student id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $informationStudent = $this->InformationStudents->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('informationStudent'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $informationStudent = $this->InformationStudents->newEmptyEntity();
        if ($this->request->is('post')) {
            $informationStudent = $this->InformationStudents->patchEntity($informationStudent, $this->request->getData());
            if ($this->InformationStudents->save($informationStudent)) {
                $this->Flash->success(__('The info student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The info student could not be saved. Please, try again.'));
        }
        $this->set(compact('informationStudent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Info Student id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $informationStudent = $this->InformationStudents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $informationStudent = $this->InformationStudents->patchEntity($informationStudent, $this->request->getData());
            if ($this->InformationStudents->save($informationStudent)) {
                $this->Flash->success(__('The info student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The info student could not be saved. Please, try again.'));
        }
        $this->set(compact('informationStudent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Info Student id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $informationStudent = $this->InformationStudents->get($id);
        if ($this->InformationStudents->delete($informationStudent)) {
            $this->Flash->success(__('The info student has been deleted.'));
        } else {
            $this->Flash->error(__('The info student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
