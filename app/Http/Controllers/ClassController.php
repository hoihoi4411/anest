<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = DB::table('class')->get();
        $active = "active";
        return view('class', ['classes' => $classes, 'active_class' => $active]);
    }

    public function indexAdmin()
    {
        $classes = DB::table('class')->get();
        return view('admin.adminClass', ['classes' => $classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminAddNewClass');
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
            'name' => 'required|max:255|unique:class',
            'editor1' => 'required|min:6',
            'price' => 'required|numeric',
            'photo' => 'required|image',
        ]);
        if (count($errors) <= 0) {
            $photo = $request->file('photo');
            $destinationPath = base_path() . '/public/uploads/images/';
            $photo->move($destinationPath, $photo->getClientOriginalName());
            var_dump($photo->getClientOriginalName());
            Classes::create([
                'name' => $request['name'],
                'text' => $request['editor1'],
                'img' => $photo->getClientOriginalName(),
                'price' => $request['price']
            ]);
            return redirect('/admincp/khoa-hoc/addnew')->with('statu', 'Thêm Khóa h?c thành công');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = DB::table('class')->where('id', $id)->first();
        return view('admin.adminAddNewClass', ['class' => $class]);
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
        if ($request['name'] != null) {
            $errors = $this->validate($request, [
                'name' => 'required|max:255|unique:class',
                'editor1' => 'required|min:6',
                'price' => 'required|numeric',
            ]);
        } else {
            $errors = $this->validate($request, [
                'editor1' => 'required|min:6',
                'price' => 'required|numeric',
            ]);
        }

        if (count($errors) <= 0) {
            DB::table('class')
                ->where('id', $id)
                ->update(['name' => $request['name'],
                    'text' => $request['editor1'],
                    'price' => $request['price']
                ]);
            if ($request['photo'] != null) {
                $photo = $request->file('photo');
                $destinationPath = base_path() . '/public/uploads/images/';
                $photo->move($destinationPath, $photo->getClientOriginalName());
                DB::table('class')
                    ->where('id', $id)
                    ->update(['img' => $photo->getClientOriginalName()
                    ]);
            }
            return redirect('/admincp/khoa-hoc/edit/'.$id)->with('status', 'Thêm Khóa h?c thành công');
        }
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
            return redirect('/admincp/khoa-hoc');
        }else{
            DB::table('class')->where('id', '=', $id)->delete();
            return redirect('/admincp/khoa-hoc')->with('status', 'Xóa Khóa h?c thành công');
        }
    }
    public function delete($id)
    {
        $class = DB::table('class')->where('id', $id)->first();
        return view ('admin.deleteClass', ['class' => $class]);
    }
}
