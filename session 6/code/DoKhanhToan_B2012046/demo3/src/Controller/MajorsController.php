<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Majors Controller
 *
 * @property \App\Model\Table\MajorsTable $Majors
 * @method \App\Model\Entity\Major[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MajorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $majors = $this->paginate($this->Majors);

        $this->set(compact('majors'));
    }

    /**
     * View method
     *
     * @param string|null $id Major id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $major = $this->Majors->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('major'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $major = $this->Majors->newEmptyEntity();
        if ($this->request->is('post')) {
            $major = $this->Majors->patchEntity($major, $this->request->getData());
            if ($this->Majors->save($major)) {
                $this->Flash->success(__('The major has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The major could not be saved. Please, try again.'));
        }
        $this->set(compact('major'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Major id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $major = $this->Majors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $major = $this->Majors->patchEntity($major, $this->request->getData());
            if ($this->Majors->save($major)) {
                $this->Flash->success(__('The major has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The major could not be saved. Please, try again.'));
        }
        $this->set(compact('major'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Major id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $major = $this->Majors->get($id);
        if ($this->Majors->delete($major)) {
            $this->Flash->success(__('The major has been deleted.'));
        } else {
            $this->Flash->error(__('The major could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
