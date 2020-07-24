<?php
class CategoryController extends BaseController
{
	public function index()
	{
		$pageTitle = 'Danh sach san pham theo danh muc: Laptop';
		$categories = [
			[
				'id' => 1,
				'name' => 'Laptop'
			],
			[
				'id' => 2,
				'name' => 'Mobile'
			],
			[
				'id' => 3,
				'name' => 'Desktop'
			],
			[
				'id' => 4,
				'name' => 'Tablet'
			],
			[
				'id' => 5,
				'name' => 'Printer'
			]
		];
		return $this->view('frontend.categories.index',[
			"categories" =>$categories,
			"pageTitle" => $pageTitle
		]);
	}
	public function show()
	{
		echo __METHOD__;
	}
}
