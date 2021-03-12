@extends('backend.layouts.includes')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add Menu Category</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                   <form action="/menu-category/insert" method="post" enctype="multipart/form-data">
                       {{@csrf_field()}}
                      
                       <div class="col-md-12 pl-0">
                <label for="categorytitle" class="label">Category Title</label>
                <input type="text" class="form-control" id="categorytitle" name="category_title" placeholder="Enter category title" value="{{old('category_title')}}">
                       </div>
                       
                       <div class="form-row py-2">
                           <button class="btn theme-blue-background theme-white-color" type="submit">Add Category</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@stop()