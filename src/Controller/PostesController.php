<?php
declare(strict_types=1);

namespace App\Controller;


class PostesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Postes->find()
            ->contain(['Users']);
        $postes = $this->paginate($query);

        $this->set(compact('postes'));
    }

    /**
     * View method
     *
     * @param string|null $id Poste id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $poste = $this->Postes->get($id, contain: ['Users']);
        $this->set(compact('poste'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $poste = $this->Postes->newEmptyEntity();
        if ($this->request->is('post')) { 
            $poste = $this->Postes->patchEntity($poste, $this->request->getData());
            if ($this->Postes->save($poste)) {
                $this->Flash->success(__('The poste has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poste could not be saved. Please, try again.'));
        }
        $users = $this->Postes->Users->find('list', limit: 200)->all();
        $this->set(compact('poste', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Poste id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $poste = $this->Postes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $poste = $this->Postes->patchEntity($poste, $this->request->getData());
            if ($this->Postes->save($poste)) {
                $this->Flash->success(__('The poste has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poste could not be saved. Please, try again.'));
        }
        $users = $this->Postes->Users->find('list', limit: 200)->all();
        $this->set(compact('poste', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Poste id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $poste = $this->Postes->get($id);
        if ($this->Postes->delete($poste)) {
            $this->Flash->success(__('The poste has been deleted.'));
        } else {
            $this->Flash->error(__('The poste could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
