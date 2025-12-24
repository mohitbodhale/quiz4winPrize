<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Cake\Log\Log;

class AppController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
        // Load multiple helpers
        $this->viewBuilder()->setHelpers(['Time', 'Format']);
    
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'authError' => 'You are not authorized to access that location.',
            'storage' => 'Session',
            'unauthorizedRedirect' => $this->referer()
        ]);

        // Check if user is already logged in
        $this->loadModel('Users');
        if ($this->Auth->user()) {
            $loginuser = $this->Auth->user();
            //debug($loginuser['id']);
            $userData = $this->Users->get($loginuser['id']); // Assuming 'id' is the primary key
            // If you want to pass this data to a view, use the following:
            $this->set('userData', $userData);
        }
        $this->Auth->allow(['login', 'register', 'add','dashboard','postRawDataProductsMaster']);
    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // Get the current controller name
        $controllerName = $this->getName();
        // Transform the controller name to a model name
        $modelName = \Cake\Utility\Inflector::singularize($controllerName);
    }


    public function beforeRender(EventInterface $event)
    {
        // Pass auth user data to view
        $this->set('authUser', $this->Auth->user());
        $this->viewBuilder()->setTheme('AdminLTE');
    }
    
}
