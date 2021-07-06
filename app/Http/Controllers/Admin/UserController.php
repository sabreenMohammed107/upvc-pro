<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
    
        // $this->middleware('auth');

    }//end of constructor
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
        $user = User::whereRoleIs('admin')->get();
        return view("admin.user.index")->with("user",$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);
        $request_data = $request->except(['password', 'password_confirmation', 'permissions']);
        $request_data['password'] = bcrypt($request->password);


        $user = User::create($request_data);
        $user->attachRole('admin');
        $permissions = [$request->permissions];
        foreach ($permissions as $p) {
            // code
            $user->permissions()->sync($p);
            }
        

        session()->flash('success', 'User Added Succsessfuly');
        // return redirect()->action('AdminUserController@index');/
        return redirect('/AdminUser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user =User::find($id);
         return view("admin.user.edit")->with("user",$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);
        $request_data = $request->except(['permissions']);
        // $user = User::whereId($id)->update($request_data);
        $user =User::find($id);
        $user->update($request_data);


        $permissions = [$request->permissions];
        foreach ($permissions as $p) {
            // code
            $user->permissions()->sync($p);
            }
        session()->flash('success', 'User Updated Succsessfuly');
        return redirect('/AdminUser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user =user::find($id);
        $user->delete();
        session()->flash('success', 'User Deleted Successfully');
        return redirect('/AdminUser');

    }
}
