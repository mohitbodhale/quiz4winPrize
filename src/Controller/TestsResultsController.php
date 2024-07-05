<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TestsResults Controller
 *
 * @property \App\Model\Table\TestsResultsTable $TestsResults
 * @method \App\Model\Entity\TestsResult[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestsResultsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tests'],
        ];
        $testsResults = $this->paginate($this->TestsResults);

        $this->set(compact('testsResults'));
    }

    /**
     * View method
     *
     * @param string|null $id Tests Result id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testsResult = $this->TestsResults->get($id, [
            'contain' => ['Users', 'Tests'],
        ]);

        $this->set(compact('testsResult'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testsResult = $this->TestsResults->newEmptyEntity();
        if ($this->request->is('post')) {
            $testsResult = $this->TestsResults->patchEntity($testsResult, $this->request->getData());
            if ($this->TestsResults->save($testsResult)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tests Result'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tests Result'));
        }
        $users = $this->TestsResults->Users->find('list', ['limit' => 200]);
        $tests = $this->TestsResults->Tests->find('list', ['limit' => 200]);
        $this->set(compact('testsResult', 'users', 'tests'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Tests Result id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testsResult = $this->TestsResults->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testsResult = $this->TestsResults->patchEntity($testsResult, $this->request->getData());
            if ($this->TestsResults->save($testsResult)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tests Result'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tests Result'));
        }
        $users = $this->TestsResults->Users->find('list', ['limit' => 200]);
        $tests = $this->TestsResults->Tests->find('list', ['limit' => 200]);
        $this->set(compact('testsResult', 'users', 'tests'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Tests Result id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testsResult = $this->TestsResults->get($id);
        if ($this->TestsResults->delete($testsResult)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Tests Result'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Tests Result'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
