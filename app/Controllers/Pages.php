<?php namespace App\Controllers;

use App\Models\ProductModel;

class Pages extends BaseController
{
	protected $productModel;
	public function __construct()
	{
		
	}
	
	public function index()
	{
		$product = $this->productModel->findAll();
        $data = [
          'title' => 'BELANJAMUDAH' ,
		  'product' => $product

        ];
		return view('pages/home',$data);
	}

    
	public function product()
	{		
		$product = $this->productModel->findAll();
		

        $data = [
          'title' => 'PRODUCT',
		  'product' => $product,
        ];

		// $productModel = new \App\Models\ProductModel();
		// dd($usersModel);
		
		return view('pages/product',$data);
	}

	public function contact()
	{
        $data = [
          'title' => 'Contact'  
        ];
		return view('pages/contact',$data);
	}

	public function login()
	{
		$data = [
			'title' => 'Login'  
		];
		return view('login',$data);
	}


}