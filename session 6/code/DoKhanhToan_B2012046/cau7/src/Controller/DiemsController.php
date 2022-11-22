<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Diems Controller
 *
 * @property \App\Model\Table\DiemsTable $Diems
 * @method \App\Model\Entity\Diem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'LopMons'],
        ];
        $diems = $this->paginate($this->Diems);

        $this->set(compact('diems'));
    }

    /**
     * View method
     *
     * @param string|null $id Diem id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diem = $this->Diems->get($id, [
            'contain' => ['Students', 'LopMons'],
        ]);

        $this->set(compact('diem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diem = $this->Diems->newEmptyEntity();
        if ($this->request->is('post')) {
            $diem = $this->Diems->patchEntity($diem, $this->request->getData());
            if ($this->Diems->save($diem)) {
                $this->Flash->success(__('The diem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diem could not be saved. Please, try again.'));
        }
        $students = $this->Diems->Students->find('list', ['limit' => 200])->all();
        $lopMons = $this->Diems->LopMons->find('list', ['limit' => 200])->all();
        $this->set(compact('diem', 'students', 'lopMons'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Diem id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diem = $this->Diems->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diem = $this->Diems->patchEntity($diem, $this->request->getData());
            if ($this->Diems->save($diem)) {
                $this->Flash->success(__('The diem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diem could not be saved. Please, try again.'));
        }
        $students = $this->Diems->Students->find('list', ['limit' => 200])->all();
        $lopMons = $this->Diems->LopMons->find('list', ['limit' => 200])->all();
        $this->set(compact('diem', 'students', 'lopMons'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Diem id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diem = $this->Diems->get($id);
        if ($this->Diems->delete($diem)) {
            $this->Flash->success(__('The diem has been deleted.'));
        } else {
            $this->Flash->error(__('The diem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
