<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GenericMaster Controller
 *
 * @property \App\Model\Table\GenericMasterTable $GenericMaster
 * @method \App\Model\Entity\GenericMaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GenericMasterController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $genericMaster = $this->paginate($this->GenericMaster);

        $this->set(compact('genericMaster'));
    }

    /**
     * View method
     *
     * @param string|null $id Generic Master id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $genericMaster = $this->GenericMaster->get($id, [
            'contain' => ['BmrRequisition', 'ErpApiRawdata', 'ProductsMaster'],
        ]);

        $this->set(compact('genericMaster'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $genericMaster = $this->GenericMaster->newEmptyEntity();
        if ($this->request->is('post')) {
            $genericMaster = $this->GenericMaster->patchEntity($genericMaster, $this->request->getData());
            if ($this->GenericMaster->save($genericMaster)) {
                $this->Flash->success(__('The {0} has been saved.', 'Generic Master'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Generic Master'));
        }
        $this->set(compact('genericMaster'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Generic Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $genericMaster = $this->GenericMaster->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $genericMaster = $this->GenericMaster->patchEntity($genericMaster, $this->request->getData());
            if ($this->GenericMaster->save($genericMaster)) {
                $this->Flash->success(__('The {0} has been saved.', 'Generic Master'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Generic Master'));
        }
        $this->set(compact('genericMaster'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Generic Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $genericMaster = $this->GenericMaster->get($id);
        if ($this->GenericMaster->delete($genericMaster)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Generic Master'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Generic Master'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
