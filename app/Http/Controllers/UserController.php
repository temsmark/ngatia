<?php

namespace App\Http\Controllers;

use App\User;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();

        $user->assignRole($request->role);
        $user->givePermissionTo($request->permission);

        Session::flash('success',ucfirst($request->name).' Created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {  $data['roles']=Role::all();
        $data['permissions']=Permission::all();
        $data['user']=$user;
        return  view('update',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $name=$request->get('name');
        $email=$request->get('email');
        $password=$request->get('password');
        $status=$request->get('status');
        $roles=$request->get('role');
        $permissions=$request->get('permissions');
        ($status==1)?$value=date('d-m-y:h:i:s'):$value=null;
        $user->update([
            'name'=>$name,
            'email'=>$email,
            'password'=>bcrypt($password),
            'is_banned'=>$value
        ]);
        $user->syncPermissions($permissions);
        $user->syncRoles($roles);
        Session::flash('success',ucfirst($request->name).' updated');

        return  redirect('home');
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        Session::flash('danger',$user->name . 'Delete Successfully');
        return  back();
    }
    public function acl()
    {
        $data['roles']=Role::all()->sortByDesc('id');
        $data['permissions']=Permission::all()->sortByDesc('id');
        return view('acl',['data'=>$data]);
    }
    public function role(Request $request)
    {
        Role::create($request->all());
        Session::flash('success',ucfirst($request->name).' updated');

        return back();
    }
    public function permission(Request $request)
    {
        Permission::create($request->all());
        Session::flash('success',ucfirst($request->name).' updated');

        return back();

    }
}
