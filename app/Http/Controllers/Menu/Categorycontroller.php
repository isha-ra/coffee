<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\MenuModel\Category;
use App\Models\MenuModel\Menu;


use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::get();
        return view('backend.menu.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menu.category.create');
        
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
            'category_title' => 'required|unique:categories',
        ]);

        $category = new Category();
        $category->category_title = $request->category_title;

        if($category->save()){
            $request->session()->flash('sucess_msg','New category created sucessfully');
            return redirect()->back();

        }else{
            $request->session()->flash('error_msg','Oops! Error occured');
            return redirect()->back();
        }
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
    public function edit($id)
    {
        $category=Category::find($id);
        return view ('backend.menu.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'category_title' => 'required|unique:categories',
        ]);

        $category=Category::find($id);
        $category->category_title=$request->category_title;
        if($category->save())
        {
            return redirect()->action(
                'Menu\Categorycontroller@index'
            );
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $category=Category::find($id);
        // if($category->delete())
        // {
        //     session()->flash('sucess_msg','Delete sucessful');
        //     return redirect()->back();

        // }else{
        //     session()->flash('error_msg','Oops...');
        //     return redirect()->back();
        // }

         $category = Category::find($id);
        $menu = Menu::where('category_id',$id)->get();
        if(count($menu)>0)
        {
            session()->flash('error_msg','menu are assigned to this type. So, This  cant be deleted');
            return redirect()->back();
        }elseif($category->delete())
        {
            session()->flash('success_msg',' Deleted Successfully');
            return redirect()->back();
        }else{
            session()->flash('error_msg','Oops! Error Occured..');
            return redirect()->back();
        }










    }
}
