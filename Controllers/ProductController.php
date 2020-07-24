<?php
class ProductController extends BaseController
{
	private $productModel;
	public function __construct()
	{
		$this->loadModel('ProductModel');
		$this->productModel = new ProductModel;
	}

	public function index()
	{
		// $this->loadModel('ProductModel');
		// $productModel = new ProductModel;
		


		return $this->view('frontend.products.index', [
			'pageTitle' => 'Trang danh sách sản phẩm!'
		]);
	}

	public function show()
	{
		// $this->loadModel('ProductModel');
		// $productModel = new ProductModel;
		$product = $this->productModel->findById(1);
		return $this->view('frontend.products.show', [
			'product' => $product
		]);
	}
}
