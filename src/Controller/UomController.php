<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Uom Controller
 *
 * @property \App\Model\Table\UomTable $Uom
 * @method \App\Model\Entity\Uom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UomController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $uom = $this->paginate($this->Uom);

        $this->set(compact('uom'));
    }

    /**
     * View method
     *
     * @param string|null $id Uom id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $uom = $this->Uom->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('uom'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uom = $this->Uom->newEmptyEntity();
        if ($this->request->is('post')) {
            $uom = $this->Uom->patchEntity($uom, $this->request->getData());
            if ($this->Uom->save($uom)) {
                $this->Flash->success(__('The {0} has been saved.', 'Uom'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Uom'));
        }
        $this->set(compact('uom'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Uom id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $uom = $this->Uom->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $uom = $this->Uom->patchEntity($uom, $this->request->getData());
            if ($this->Uom->save($uom)) {
                $this->Flash->success(__('The {0} has been saved.', 'Uom'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Uom'));
        }
        $this->set(compact('uom'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Uom id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $uom = $this->Uom->get($id);
        if ($this->Uom->delete($uom)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Uom'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Uom'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
