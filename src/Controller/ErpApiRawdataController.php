<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ErpApiRawdata Controller
 *
 * @property \App\Model\Table\ErpApiRawdataTable $ErpApiRawdata
 * @method \App\Model\Entity\ErpApiRawdata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ErpApiRawdataController extends AppController
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
        $erpApiRawdata = $this->paginate($this->ErpApiRawdata);

        $this->set(compact('erpApiRawdata'));
    }

    /**
     * View method
     *
     * @param string|null $id Erp Api Rawdata id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $erpApiRawdata = $this->ErpApiRawdata->get($id, [
            'contain' => ['Customers', 'Products'],
        ]);

        $this->set(compact('erpApiRawdata'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $erpApiRawdata = $this->ErpApiRawdata->newEmptyEntity();
        if ($this->request->is('post')) {
            $erpApiRawdata = $this->ErpApiRawdata->patchEntity($erpApiRawdata, $this->request->getData());
            if ($this->ErpApiRawdata->save($erpApiRawdata)) {
                $this->Flash->success(__('The {0} has been saved.', 'Erp Api Rawdata'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Erp Api Rawdata'));
        }
        $customers = $this->ErpApiRawdata->Customers->find('list', ['limit' => 200]);
        $products = $this->ErpApiRawdata->Products->find('list', ['limit' => 200]);
        $this->set(compact('erpApiRawdata', 'customers', 'products'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Erp Api Rawdata id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $erpApiRawdata = $this->ErpApiRawdata->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $erpApiRawdata = $this->ErpApiRawdata->patchEntity($erpApiRawdata, $this->request->getData());
            if ($this->ErpApiRawdata->save($erpApiRawdata)) {
                $this->Flash->success(__('The {0} has been saved.', 'Erp Api Rawdata'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Erp Api Rawdata'));
        }
        $customers = $this->ErpApiRawdata->Customers->find('list', ['limit' => 200]);
        $products = $this->ErpApiRawdata->Products->find('list', ['limit' => 200]);
        $this->set(compact('erpApiRawdata', 'customers', 'products'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Erp Api Rawdata id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $erpApiRawdata = $this->ErpApiRawdata->get($id);
        if ($this->ErpApiRawdata->delete($erpApiRawdata)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Erp Api Rawdata'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Erp Api Rawdata'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
