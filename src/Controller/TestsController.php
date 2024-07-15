<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tests Controller
 *
 * @property \App\Model\Table\TestsTable $Tests
 * @method \App\Model\Entity\Test[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $loginuser = $this->Auth->user();
        $this->paginate = [
            'contain' => ['Slots','Quizs'],
        ];
        $tests = $this->paginate($this->Tests);

        $this->loadModel('TestsResults');
        $tests_results = $this->TestsResults->find('all',[
            'conditions'=>['users_id'=>$loginuser['id']]
        ])->toArray();
        
        $this->set(compact('tests','tests_results'));
    }

    /**
     * View method
     *
     * @param string|null $id Test id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $test = $this->Tests->get($id, [
            'contain' => ['Slots','Quizs'],
        ]);

        $this->set(compact('test'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $test = $this->Tests->newEmptyEntity();
        if ($this->request->is('post')) {
            $test = $this->Tests->patchEntity($test, $this->request->getData());
            if ($this->Tests->save($test)) {
                $this->Flash->success(__('The {0} has been saved.', 'Test'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Test'));
        }
        $this->loadModel('Quizs');
        $this->loadModel('Slots');
        $slots = $this->Slots->find('list',['keyField'=>'id','valueField'=>'slots_name']);
        $quizs = $this->Quizs->find('list',['keyField'=>'id','valueField'=>'quiz_name']);
        $this->set(compact('test', 'slots', 'quizs'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $test = $this->Tests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $test = $this->Tests->patchEntity($test, $this->request->getData());
            if ($this->Tests->save($test)) {
                $this->Flash->success(__('The {0} has been saved.', 'Test'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Test'));
        }
        $this->loadModel('Quizs');
        $this->loadModel('Slots');
        $slots = $this->Slots->find('list',['keyField'=>'id','valueField'=>'slots_name']);
        $quizs = $this->Quizs->find('list',['keyField'=>'id','valueField'=>'quiz_name']);
        $this->set(compact('test', 'slots', 'quizs'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $test = $this->Tests->get($id);
        if ($this->Tests->delete($test)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Test'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Test'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function start($id = null){
        $test = $this->Tests->get($id, [
            'contain' => [
                'TestsDetails'=>['Quetions'=>['QuetionsDetails'=>['AvailableOptionsValues']]],
            ],
        ]);
        // Extract the TestsDetails collection
        $testsDetails = $test->tests_details;
        // Convert to array and shuffle to randomize
        $randomTestsDetails = $testsDetails;
        shuffle($randomTestsDetails);
        // Assign the randomized TestsDetails back to the Test entity
        $test->tests_details = $randomTestsDetails;
        if ($this->request->is(['patch', 'post', 'put'])) {    
            //echo $this->request->getSession()->read('remainingSeconds');
        }
        $this->set(compact('test'));
    }

    public function endTest($id = null){
        $test = $this->Tests->get($id, [
            'contain' => [
                'Quizs',
                'TestsDetails',
            ],
        ])->toArray();

        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug($this->request->getData());die;
            $user_answers = $this->request->getData();
            $other_data = $this->request->getData('other_data');
            //echo"<pre>";print_r($user_answers);
            unset($user_answers['other_data']);
        }    
        $this->loadModel('TestsDetails');
        $answers = $this->TestsDetails->find('list', [
            'keyField' => 'quetions_id', // The field to use as keys
            'valueField' => 'available_options_values_id', // The field to use as values
        ])->toArray();
        
        // $commonKeys will contain the common keys between the 'answers' and 'user_answers' arrays
        $commonKeys = array_intersect_key($answers, $user_answers);
        //print_r($commonKeys);
        $comparisons = [];
        $countNotAttempt=$countAttempt=$comparisons['right_answer']=0;$comparisons['wrong_answer']=0;
        foreach ($commonKeys as $key => $value) {
            if (empty($user_answers[$key]['selected'])) {
                $countNotAttempt++;
                
            }else{
                $countAttempt++;
                if ($answers[$key] ===  (int)$user_answers[$key]['selected']) {
                    // Values match for the current key
                    $comparisons['countMatch'][$key] = 1;
                    $comparisons['right_answer'] = (int)$comparisons['right_answer']+1 ;
                }else {
                    // Values don't match for the current key
                    $comparisons['countNotMatch'][$key] = 0;
                    $comparisons['wrong_answer'] = (int)$comparisons['wrong_answer']+1;
                }
            }
        }
        $comparisons['countNotAttempt'] = $countNotAttempt;
        $comparisons['countAttempt'] = $countAttempt;
        
        $this->loadModel('TestsResults');
        if($other_data){
            //echo "add test result detail in db";
            // debug($test['id']);
            $testsResultsData['users_id'] = $other_data['user_id'];
            $testsResultsData['tests_id'] = $test['id'];
            $testsResultsData['comparisons'] = json_encode($user_answers);
            $testsResultsData['score']  = $comparisons['right_answer'];
            $testsResultsData['status'] = 1;
            $testsResultsData['time_taken'] = $other_data['tests_time'];
            
            $TestsResults = $this->TestsResults->newEmptyEntity();
            $TestsResults = $this->TestsResults->patchEntity( $TestsResults, $testsResultsData );
            //debug($TestsResults);
            if($this->TestsResults->save($TestsResults)) {
                $this->Flash->success(__('The Final {0} will be Announce After test time interval complete.', 'Results'));
            }

        }

        $this->set(compact('answers','user_answers','comparisons','test'));
    }

    
}
