<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProductController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $products = \App\Product::with('marque')->get();

    if ($products != null)
        return view('productindex', compact ('products'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
     return view('product-create');


  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
       $newproduct = \App\Product::create([
           'name'=>$request['name'],
           'reference' => str_random(16),
           'media' => null,
           'unitprice' =>$request['price'],
           'stock'=> $request['stock'],
           'promotion' => $request['promotion'],
           'marqueid' => 1,]);
      if ($newproduct == true)
          return route('product.index');

  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>