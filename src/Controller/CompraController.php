<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Compra Controller
 *
 * @property \App\Model\Table\CompraTable $Compra
 * @method \App\Model\Entity\Compra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompraController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $compra = $this->paginate($this->Compra);

        $this->set(compact('compra'));
    }

    /**
     * View method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compra = $this->Compra->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('compra'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compra = $this->Compra->newEmptyEntity();
        if ($this->request->is('post')) {
            $compra = $this->Compra->patchEntity($compra, $this->request->getData());
            if ($this->Compra->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra could not be saved. Please, try again.'));
        }
        $this->set(compact('compra'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compra = $this->Compra->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compra = $this->Compra->patchEntity($compra, $this->request->getData());
            if ($this->Compra->save($compra)) {
                $this->Flash->success(__('The compra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra could not be saved. Please, try again.'));
        }
        $this->set(compact('compra'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compra = $this->Compra->get($id);
        if ($this->Compra->delete($compra)) {
            $this->Flash->success(__('The compra has been deleted.'));
        } else {
            $this->Flash->error(__('The compra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
