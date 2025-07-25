<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BmrRequisition Controller
 *
 * @property \App\Model\Table\BmrRequisitionTable $BmrRequisition
 * @method \App\Model\Entity\BmrRequisition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BmrRequisitionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Products'],
        ];
        $bmrRequisition = $this->paginate($this->BmrRequisition);

        $this->set(compact('bmrRequisition'));
    }

    /**
     * View method
     *
     * @param string|null $id Bmr Requisition id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bmrRequisition = $this->BmrRequisition->get($id, [
            'contain' => ['Customers', 'Products'],
        ]);

        $this->set(compact('bmrRequisition'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bmrRequisition = $this->BmrRequisition->newEmptyEntity();
        if ($this->request->is('post')) {
            $bmrRequisition = $this->BmrRequisition->patchEntity($bmrRequisition, $this->request->getData());
            if ($this->BmrRequisition->save($bmrRequisition)) {
                $this->Flash->success(__('The {0} has been saved.', 'Bmr Requisition'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Bmr Requisition'));
        }
        $customers = $this->BmrRequisition->Customers->find('list', ['limit' => 200]);
        $products = $this->BmrRequisition->Products->find('list', ['limit' => 200]);
        $this->set(compact('bmrRequisition', 'customers', 'products'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Bmr Requisition id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bmrRequisition = $this->BmrRequisition->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bmrRequisition = $this->BmrRequisition->patchEntity($bmrRequisition, $this->request->getData());
            if ($this->BmrRequisition->save($bmrRequisition)) {
                $this->Flash->success(__('The {0} has been saved.', 'Bmr Requisition'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Bmr Requisition'));
        }
        $customers = $this->BmrRequisition->Customers->find('list', ['limit' => 200]);
        $products = $this->BmrRequisition->Products->find('list', ['limit' => 200]);
        $this->set(compact('bmrRequisition', 'customers', 'products'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Bmr Requisition id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bmrRequisition = $this->BmrRequisition->get($id);
        if ($this->BmrRequisition->delete($bmrRequisition)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Bmr Requisition'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Bmr Requisition'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
