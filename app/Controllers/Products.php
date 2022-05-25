<?php namespace App\Controllers;
use App\Libraries\GroceryCrud;
use App\Models\ProductsModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Products extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
    public function productsManagement()
	{
        
	    $crud = new GroceryCrud();
        
        $crud->setTable('products');
		$crud->setSubject('Productos');
		  
        

		$output = $crud->render();
		$data['title']='Productos';
		 
		$output->data = $data;

		return $this->_exampleOutput($output);
	}

	public function getProducts()
	{
		$request = service('request');
		if ($this->request->isAJAX())
        { 
		   $productId=$request->getPost('productId');
		   $products = new ProductsModel();
		   $product = $products->find($productId);
		   
		   echo json_encode(array("status" => 'ok',"realPrice"=>$product->realPrice));
		}   
		else
		{
			//show error message
		}
		
		
	}



    private function _exampleOutput($output = null) {
        return view('productsView', (array)$output);
    }
}
