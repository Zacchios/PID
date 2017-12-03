<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DesktopController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $desktops = \App\Desktop::with(['type','product'])->get();


      if ($desktops != null)
          return view('Admin.desktop', compact ('desktops'));
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
      return view('admin.desktop-create',compact(['listemarque','listtype']));
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
      $filename = $request->file->getClientOriginalName();

      $newproduct = \App\Product::create([
          //'id' => ($request['id']+1),
          'name'=>$request['name'],
          'reference' => str_random(16),
          'media' => $request['file']->storeAs('storage',$filename),
          'unitprice' =>$request['price'],
          'stock'=> $request['stock'],
          'promotion' => $request['promotion'],
          'marqueid' => $request['marque'],]);
          if ($newproduct == true )
          {
              $newdesktop = \App\Desktop::create([
                  'desktopid' => $newproduct->id,
                  'typeid' => $request['type'],
                  'processor' => $request['processor'],
                  'graphiccard' => $request['graphiccard'],
                  'thumbscreen' => $request['thumbscreen'],
                  'weight' => $request['weight'],]);
          }


      if ($newdesktop == true)
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
    return $id;
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(\App\Desktop $desktop)
  {
      $listemarque = \App\Marque::orderby('id')->pluck('name','id');
      $listtype = \App\Type::orderby('id')->pluck('name','id');
      return view('admin/desktop-edit',compact(['desktop','listemarque','listtype']));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request)
  {
    //dd($request);
      $this->validate($request,[
          'name'=> 'bail|max:100',
          'price' => 'bail|numeric',
          'stock'=> 'bail|numeric',
          'promotion'=> 'bail|numeric',
          'marque'=> 'bail',
          'type' => 'bail',
          'processor'=> 'bail|string',
          'graphiccard'=> 'bail|string',
          'thumbscreen'=> 'bail|numeric',
          'weight'=> 'bail|numeric',
      ]);
      //dd($request);
      $id = $request->id;
      if($request->hasFile('file')){
      $filename = $request->file->getClientOriginalName();

      $editproduct = \App\Product::whereid($id)->update([
          'name'=>$request['name'],
          'media' => $request['file']->storeAs('storage',$filename),
          'unitprice' =>$request['price'],
          'stock'=> $request['stock'],
          'promotion' => $request['promotion'],
          'marqueid' => $request['marque'],]);
      if ($editproduct == true )
      {
          $editdesktop = \App\Desktop::whereid($id)->update([
              'typeid' => $request['type'],
              'processor' => $request['processor'],
              'graphiccard' => $request['graphiccard'],
              'thumbscreen' => $request['thumbscreen'],
              'weight' => $request['weight'],]);
      }
          if ($editdesktop == true)
              return redirect('desktop');}
      else
      {
          $editproduct = \App\Product::whereid($id)->update([
              'name'=>$request['name'],
              'unitprice' =>$request['price'],
              'stock'=> $request['stock'],
              'promotion' => $request['promotion'],
              'marqueid' => $request['marque'],]);
          if ($editproduct == true )
          {
              $editdesktop = \App\Desktop::whereid($id)->update([
                  'typeid' => $request['type'],
                  'processor' => $request['processor'],
                  'graphiccard' => $request['graphiccard'],
                  'thumbscreen' => $request['thumbscreen'],
                  'weight' => $request['weight'],]);
          }
          if ($editdesktop == true)
              return redirect('desktop');
      }



  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(\App\Desktop $desktop)
  {
      //dd($desktop);
      $id = $desktop->id;
      //dd($id);

      $products = \App\Product::find($id);
      //dd($products);
      //$desktop->delete();
      if ($desktop->delete() == true )
      {
          $products->delete();
          return $this->index();
      }

  }
  public function destroyform (\App\Desktop $desktop){
     // $products = \App\Product::find($desktop);

      return view('admin/desktop-destroy',compact('desktop'));
  }
  
}

?>