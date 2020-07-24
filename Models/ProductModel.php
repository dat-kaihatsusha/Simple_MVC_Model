<h1>Product Model Loaded</h1>
<?php
class ProductModel
{
    const TABLE = 'products';

    public function getAll()
    {
        return __METHOD__;
    }
    public function findById($id)
    {
        return [
            'id' => 12,
            'name'=>'Iphone 12'
        ];
    }
    public function delete()
    {
        return __METHOD__;
    }
}
