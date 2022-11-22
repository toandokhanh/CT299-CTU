<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LopMons Controller
 *
 * @property \App\Model\Table\LopMonsTable $LopMons
 * @method \App\Model\Entity\LopMon[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LopMonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subjects'],
        ];
        $lopMons = $this->paginate($this->LopMons);

        $this->set(compact('lopMons'));
    }

    /**
     * View method
     *
     * @param string|null $id Lop Mon id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lopMon = $this->LopMons->get($id, [
            'contain' => ['Subjects', 'Diems'],
        ]);

        $this->set(compact('lopMon'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lopMon = $this->LopMons->newEmptyEntity();
        if ($this->request->is('post')) {
            $lopMon = $this->LopMons->patchEntity($lopMon, $this->request->getData());
            if ($this->LopMons->save($lopMon)) {
                $this->Flash->success(__('The lop mon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lop mon could not be saved. Please, try again.'));
        }
        $subjects = $this->LopMons->Subjects->find('list', ['limit' => 200])->all();
        $this->set(compact('lopMon', 'subjects'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lop Mon id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lopMon = $this->LopMons->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lopMon = $this->LopMons->patchEntity($lopMon, $this->request->getData());
            if ($this->LopMons->save($lopMon)) {
                $this->Flash->success(__('The lop mon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lop mon could not be saved. Please, try again.'));
        }
        $subjects = $this->LopMons->Subjects->find('list', ['limit' => 200])->all();
        $this->set(compact('lopMon', 'subjects'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lop Mon id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lopMon = $this->LopMons->get($id);
        if ($this->LopMons->delete($lopMon)) {
            $this->Flash->success(__('The lop mon has been deleted.'));
        } else {
            $this->Flash->error(__('The lop mon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
