<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $products = $this->paginate($this->Products);
        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('product'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The {0} has been saved.', 'Product'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Product'));
        }
        $this->set(compact('product'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Product'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Product'));
        }

        return $this->redirect(['action' => 'index']);
    }

    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        $responseMessage = ''; // Variable to store the cURL response
        $location_list = ["Saudi Pharmaceutical Industries - Riyad","Saudi Pharmaceutical Industries - Sudair"];
        $this->loadModel('Uom');
        $uom_list = $this->Uom->find('list', [
            'keyField' => 'id','valueField' => 'unit_symbol',
        ])->toArray();
        $product_type_list = ["Raw Material","Finish Product","Packing Material","Maintenance"];
        $new_or_Updated_record_flag = ["1"=>"New","2"=>"Updated"];
        $this->loadModel('GenericMaster');
        $generic_master = $this->GenericMaster->find('list', [
            'keyField' => 'id','valueField' => 'generic_name',
        ])->toArray();
        $product_category_list = ["AP-PM"=>"AP-PM","AP-FM"=>"AP-FM"];
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://localhost/quiz4winPrize/products/postRawDataProductsMaster',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_VERBOSE => true, // Enable verbose output
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($data), // Use json_encode for better handling
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Cookie: PHPSESSID=hserilperibkeejq6q468f9kta'
                ),
                CURLOPT_SSL_VERIFYPEER => false, // Disable SSL verification for localhost
                CURLOPT_SSL_VERIFYHOST => false, // Disable SSL host verification for localhost
            ));
            $response = curl_exec($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $curlError = curl_error($curl);
            $response = json_decode($response,true) ;
            curl_close($curl);
            if( $response['status'] == 'success'){
                $this->Flash->success(__('The {0} has been saved.', 'Product'));
            }
        }
        // Pass the response and product to the view
        $this->set(compact('product','responseMessage','location_list','uom_list',"product_type_list",'new_or_Updated_record_flag','generic_master','product_category_list'));
    }

    public function postRawDataProductsMaster()
    {
        $this->autoRender = false;
        $data = $this->request->getData();
        $databypostman = [
            "customer_location_id" => $data['Customer Location Id'] ?? $data['Location_Id'] ?? null,
            "item_code" => $data['Unique Id'] ?? $data['Unique_Id'] ?? null,
            "product_name" => $data['Product Name'] ?? $data['Product_Name'] ?? null,
            "product_information" => $data['Description'] ?? $data['Description'] ?? null,
            "shelf_life" => $data['Shelf life'] ?? $data['Shelf_life'] ?? null,
            "shelf_life_uom" => $data['Shelf life Uom'] ?? $data['Shelf_life_Uom'] ?? null,
            "product_type" => $data['Product Category'] ?? $data['Product_Category'] ?? null,
            "generic_master_id" => $data['Generic Master'] ?? $data['Generic_Master'] ?? null, 
            "product_category" => $data['Type'] ?? $data['Material_Type'] ?? null,
            "Storage conditions" => $data['Storage conditions'] ?? $data['Storage_conditions'] ?? null,
            "created" => $data['Created timestamp'] ?? $data['Created_timestamp'] ?? null,
            "modified" =>  $data['Modified timestamp'] ?? null,
            "status" =>  $data['New or Updated record flag'] ?? $data['New_or_Updated_record_flag'] ?? null,
            "created_by" => "100"
        ];

        // Define required fields as display name => field name
        $required_fields = [
            "Customer Location Id" => 'customer_location_id',
            "Unique Id" => 'item_code',
            "Product Name" => 'product_name'
        ];

        // Check for missing required fields
        $missing_fields = [];
        foreach ($required_fields as $displayName => $field) {
            if (empty($databypostman[$field])) {
                $missing_fields[] = $displayName;
            }
        }

        if (!empty($missing_fields)) {
            return $this->response->withStringBody(json_encode([
                'status' => 'error',
                'message' => 'Missing required fields: ' . implode(', ', $missing_fields),
                'data' => $data
            ]))->withType('application/json');
        }

        $this->loadModel('ProductsMaster');

        if ($this->request->is('post')) {
            $productsMaster = $this->ProductsMaster->newEmptyEntity();
            $productsMaster = $this->ProductsMaster->patchEntity($productsMaster, $databypostman);

            if ($this->ProductsMaster->save($productsMaster)) {
                return $this->response->withStringBody(json_encode([
                    'status' => 'success',
                    'message' => 'Data saved successfully.',
                    'data' => $data
                ]))->withType('application/json');
            }
            return $this->response->withStringBody(json_encode([
                'status' => 'error',
                'message' => 'Data Storage Failed.',
                'data' => $data
            ]))->withType('application/json');
        }

        return $this->response->withStringBody(json_encode([
            'status' => 'error',
            'message' => 'Invalid request.',
            'data' => $data
        ]))->withType('application/json');
    }



}
