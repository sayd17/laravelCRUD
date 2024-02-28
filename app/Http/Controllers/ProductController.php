<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Product;   
// use App\Repository\Eloquent\UserRepository;
use App\Repository\UserRepositoryInterface;


class ProductController extends Controller
{
    // public function __construct(
    //     protected UserRepository $products,
    // ){}
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {   
        
        $this->userRepository = $userRepository;
        
    }

    public function index()
    {
        $products = $this->userRepository->all();

        return view('products.index', [
            'products' => $products
        ]);
    }

    // public function index(){
    //     $products = Product::all();
        // $products = $this->products->all();
    //     return view('products.index', ['products' => $products]);
    // }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){

        // dd($request);
        $data = $request->validate([
            'user_id' => 'nullable',
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        // dd($request);

        $newProduct = Product::create($data);
        // $newProduct = $this->products->create($data);
        return redirect(route('product.index'));
        // // return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        // return view('products.edit', ['product' => $product]);

        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);
        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');

    }

    public function destroy(Product $product){
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully');
    }

}
