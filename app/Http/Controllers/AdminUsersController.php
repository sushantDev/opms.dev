<?php

namespace App\Http\Controllers;

use App\photo;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests;
use App\User;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::lists('name', 'id')->all();
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
//        return $request->all();
        if (trim($request->password) == ''){

            $input = $request->except ('password');

        }else{
            $input = $request->all();
        }


        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file-> move('images', $name);

            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo -> id;
        }

        $input ['password'] = bcrypt($request -> password);

        User::create($input);


        return redirect('/admin/users');
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
        return view('admin.user.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        $roles = Role::lists('name','id')->all();

        return view('admin.user.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        //
//        return $request->all();



        $user = User::findOrFail($id);

        if (trim($request->password) == ''){

            $input = $request->except ('password');

        }else{
            $input = $request->all();
        }

        if($file = $request -> file ('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);
            $photo = Photo::create(['file'=> $name]);

            $input['photo_id'] = $photo -> id;
        }
        $input ['password'] = bcrypt($request -> password);


        $user -> update($input);

        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
//        return "Destroy";
        $user = User::findOrFail($id);
        unlink (public_path() . $user->photo->file);
        $user -> delete();

        return redirect('admin/users');
    }
}
