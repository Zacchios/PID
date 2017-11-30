<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LaptopController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $laptops = \App\Laptop::with(['type','product'])->get();


      if ($laptops != null)
          return view('laptopindex', compact ('laptops'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
      $listemarque = \App\Marque::orderby('id')->pluck('name','id');
      $listtype = \App\Type::orderby('id')->pluck('name','id');
      return view('laptop-create',compact(['listemarque','listtype']));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            'name'=> 'bail|required|max:100',
            'price' => 'bail|required|numeric',
            'stock'=> 'bail|required|numeric',
            'promotion'=> 'bail|required|numeric',
            'marque'=> 'bail|required|',
            'type' => 'bail|required',
            'processor'=> 'bail|required|string',
            'graphiccard'=> 'bail|required|string',
            'thumbscreen'=> 'bail|required|numeric',
            'weight'=> 'bail|required|numeric',
        ]);
        //dd($request);

        $newproduct = \App\Product::create([
            //'id' => ($request['id']+1),
            'name'=>$request['name'],
            'reference' => str_random(16),
            'media' => null,
            'unitprice' =>$request['price'],
            'stock'=> $request['stock'],
            'promotion' => $request['promotion'],
            'marqueid' => $request['marque'],]);
        if ($newproduct == true )
        {
            $newlaptop = \App\Laptop::create([
                'laptopid' => $newproduct->id,
                'typeid' => $request['type'],
                'processor' => $request['processor'],
                'graphiccard' => $request['graphiccard'],
                'thumbscreen' => $request['thumbscreen'],
                'weight' => $request['weight'],]);
        }


        if ($newlaptop == true)
            return redirect('desktop');
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