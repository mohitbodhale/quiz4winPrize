<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsMaster Controller
 *
 * @property \App\Model\Table\ProductsMasterTable $ProductsMaster
 * @method \App\Model\Entity\ProductsMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsMasterController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            //'contain' => ['Customers'],
        ];
        $productsMaster = $this->paginate($this->ProductsMaster);

        $this->set(compact('productsMaster'));
    }

    /**
     * View method
     *
     * @param string|null $id Products Master id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsMaster = $this->ProductsMaster->get($id, [
            //'contain' => ['Customers'],
        ]);

        $this->set(compact('productsMaster'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsMaster = $this->ProductsMaster->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsMaster = $this->ProductsMaster->patchEntity($productsMaster, $this->request->getData());
            if ($this->ProductsMaster->save($productsMaster)) {
                $this->Flash->success(__('The {0} has been saved.', 'Products Master'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Products Master'));
        }
        $customers = $this->ProductsMaster->Customers->find('list', ['limit' => 200]);
        $this->set(compact('productsMaster', 'customers'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Products Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsMaster = $this->ProductsMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsMaster = $this->ProductsMaster->patchEntity($productsMaster, $this->request->getData());
            if ($this->ProductsMaster->save($productsMaster)) {
                $this->Flash->success(__('The {0} has been saved.', 'Products Master'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Products Master'));
        }
        $customers = $this->ProductsMaster->Customers->find('list', ['limit' => 200]);
        $this->set(compact('productsMaster', 'customers'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Products Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsMaster = $this->ProductsMaster->get($id);
        if ($this->ProductsMaster->delete($productsMaster)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Products Master'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Products Master'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
