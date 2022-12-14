<?php namespace App\Controllers;
use App\Models\ProductModel;
class HalamanAdmin extends BaseController
{
    
    protected $productModel;
	public function __construct()
	{
		
	}
	public function index()
	{
        $product = $this->productModel->findAll();
        $data = [
		  'product' => $product

        ];
		return view('admin/admin',$data);
	
	}

    public function create()
    {
        $data = [

        ];

        return view('admin/create');
    }
    
    public function save()
    {
        $product = $this->productModel->findAll();
        $this->productModel->save([
            'nama_barang'=>$this->request->getVar('nama_barang'),
            'data_gambar'=>$this->request->getVar('data_gambar'),
            'deskripsi'=>$this->request->getVar('deskripsi'),
            'harga'=>$this->request->getVar('harga')

        ]);

        return redirect() ->to('/admin');
    }
	//--------------------------------------------------------------------

}