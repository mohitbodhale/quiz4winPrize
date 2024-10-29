<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        // Load Format helper for the index action
        
        // Check if user is already logged in
        if ($this->Auth->user()) {
            $loginuser = $this->Auth->user();
            //debug($loginuser['id']);
            $userData = $this->Users->get($loginuser['id']); // Assuming 'id' is the primary key
            // If you want to pass this data to a view, use the following:
            $this->set('userData', $userData);
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $query = $this->Users->find(); // Start with a basic query

        if ($this->request->is('post')) {
            $username_search = $this->request->getData('username_search');

            if (!empty($username_search)) {
                // Add condition to the query
                $query->where(['Users.username LIKE' => '%' . $username_search . '%']);
            }
        }
        
        $users = $this->paginate($query);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login()
    {
        // Check if user is already logged in
        if ($this->Auth->user()) {
            $loginusername = $this->Auth->user('username');
            $this->Flash->info(__('You are already logged in as {0}.', $loginusername));
            return $this->redirect(['action' => 'dashboard']);
        }
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function register()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }

    public function dashboard()
    {
        $this->loadModel('TestsResults');
        $this->loadModel('Tests');
        // Fetch test results grouped by users
        $testsResults = $this->TestsResults->find()
            ->contain(['Users', 'Tests'])
            ->order(['Tests.id'])
            //->group('Users.id')
            ->toArray();
        $tests = $this->Tests->find('all')->toArray();
        // Pass the grouped results to the view
        $this->set(compact('testsResults','tests'));
    }

    public function profile($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
           if(!$user->getErrors){
                $profile_icon_image = $this->request->getData('profile_icon') ;
                $profile_icon_image_name = $profile_icon_image->getClientFilename();
                
                if(!is_dir(WWW_ROOT . 'img' . DS . 'profile_icon')){
                    mkdir(WWW_ROOT . 'img' . DS . 'profile_icon', 0775 ) ;
                }    
                    $targetPath = WWW_ROOT.'img'. DS . 'profile_icon' . DS .$profile_icon_image_name ;

                if($profile_icon_image_name){
                    $profile_icon_image->moveTo($targetPath);
                }
            }
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->profile_icon_name = $profile_icon_image_name;
            
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function userWallet(){
        
    }
}
