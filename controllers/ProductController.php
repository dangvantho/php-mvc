<?php 
class ProductController extends BaseController
{
    private $productionModel;
    public function __construct()
    {
        $this->loadModel("ProductionModel");
        $this->productionModel = new ProductModel;
    }
    public function index() 
    {
        $products = $this->productionModel->getAll(["id", "name", "decription"], ["id" => "desc"]);
        $this->view('frontend.products.index', [
            "products" => $products,
            "titlePage" => "Product"
        ]);
    }
}