<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = \App\User::with('role')->get();
        /*select('id','name','firstname','email','birthdate','deliveryadress','bilingadress')->get();*/

        $listrole = \App\Role::all();

        if($users != null and $listrole != null )
        {return view('user-index',compact(['users','listrole']));
        }
        else
            return view('user-indexempty');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

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
     * @param Request $request
     * @return Response
     * @internal param int $id
     */

    public function upDateRole(Request $request)
    {

        $id=$request->input('id');
        $user = \App\User::with('role')->findOrFail($id);
        if ($request->input('rolename') != $user->role->name)
        {
            $rolename = $request->input('rolename');
            $roleiduser = \App\Role::select('id')->wherename($rolename)->get();
            $user->roleid=$roleiduser[0]->id;
        $user->save();}


        /*$rolename=$request->input('rolename');

        $roleidrole = \App\Role::select('id')->wherename($rolename);
        $roleiduser = $user->roleid;
        /*if ($roleidrole <> $roleiduser)
        {    $user->roleid = $roleidrole;
            $user->save();}
        else
        {$user->save();}*/

        return response($user);
    }
    public function destroy(\App\User $user)
    {
        $user->delete();
        /*if ($response == true )*/
        return $this->index();
    }

    /**
     * @param \App\User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroyForm(\App\User $user)
    {

        return view('user-destroy',compact('user'));

    }

}

?>