<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('admin.adminAddNewUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|max:255',
            'permission' => 'required',
        ]);
        $sucess = "fail";
        if (count($errors) <= 0) {
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'permission' => $request['permission'],
            ]);
            $sucess = 'sucess';
        }
        return view('admin.adminAddNewUser', ['successful' => $sucess]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.adminAddNewUser', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $user = DB::table('users')->where('id', $id)->first();
        if ($user != null) {
            $arrayValidation = array();
            if ($request['email'] != $user->email) {
                array_merge($arrayValidation, ['email' => 'required|email|max:255|unique:users']);
            }
            if ($request['password'] != null) {
                array_merge($arrayValidation, ['password' => 'required|max:255']);
            }
            $errors = $this->validate($request, $arrayValidation);
            if (count($errors) <= 0) {
                DB::table('users')
                    ->where('id', $id)
                    ->update(['email' => $request['email'], 'name' => $request['name'], 'permission' => $request['permission']]);
                if ($request['password'] != null) {
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['password' => bcrypt($request['password'])]);
                }
                $user = DB::table('users')->where('id', $id)->first();
                return view('admin.adminAddNewUser', ['user' => $user, 'sucesss' => 'Ch?nh s?a thành công']);
            }
            return view('admin.adminAddNewUser', ['user' => $user, 'error' => 'Không th? Ch?nh s?a thành viên này']);

        }
    }

    public function showDelete($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        if($user->id == 1){
            return redirect('/admincp/user');
        }
        return view('admin.deleteUser', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if($request['cancel'] != null){
            return redirect('/admincp/user');
        }else{
            DB::table('users')->where('id', '=', $id)->delete();
            return redirect('/admincp/user')->with('status', 'Xóa thành viên thành công');
        }
    }
}
