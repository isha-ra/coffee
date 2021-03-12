<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\MenuModel\Category;

use App\Models\MenuModel\Menu;


use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $menu = Menu::with('category')->get();     
        return view('backend.menu.menu.index',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.menu.menu.create');
        $category = Category::get();     
        return view('backend.menu.menu.create',compact('category'));
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
            'title' => 'required|unique:menus',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',


        ]);

        $menu = new Menu();
        $menu->title = $request->title;
        $randVal = rand(1111,9999);
        $img = $request->file('image');
        $menu->image= $randVal.time().$img->getClientOriginalName();
        $img->move(public_path().'/images/'.'MenuImage',$menu->image);
        $menu->description =$request->description;
        $menu->price=$request->price;
       
        $menu->category_id=$request->category_id;




        if ($menu->save()) {

            $request->session()->flash('success_msg', 'menu Created Successfully');
            return redirect()->back();
        } else {

            $request->session()->flash('error_msg', 'Oops! Error Occured');
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
        //
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
        //
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
    }
}
