@extends('backend.layouts.includes')
@section('content')
    <div class="container">
        <div class="row"><h3 class="mx-auto mt-3">Add Menu</h3></div>
        <div class="container">
            <div class="row mx-5 pb-5">
                <div class="col-md-9 mx-auto shadow p-5">
                   <form action="/menu/insert" method="post" enctype="multipart/form-data">
                       {{@csrf_field()}}
                      



  <div class="form-row py-2">
                            <div class="col-md-6">
                                <label>Select Menu Category</label>
                                 <select class="form-control"  name="category_id" >
                                @foreach($category as $row)
                                    <option value="{{$row->id}}"> {{$row->category_title}}</option>
                                @endforeach
                            </select>
                             
                            </div>



                            <div class="col-md-6">
                                 <label for="title" class="label">Title</label>
                            <input type="text" class="form-control" id="name" name="title" placeholder="Enter title" value="{{old('title')}}">
                                
                            </div>
                        </div>

                 
                       

                        <div class="form-row py-2">
                            <div class="col-md-6 my-auto">
                                <input type="file" id="gallery-photo-add"  name="image" class="hide" onchange="readURL(this);" />
                                <label for="gallery-photo-add" id="lable_file" class="btn theme-blue-background theme-white-color">Browse Photo</label>
                            </div>
                            <div class="col-md-6">
                                <label for="title" class="label">price</label>
                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value="{{old('price')}}">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="gallery"></div>
                        </div>

 <div class="col-md-12 pl-0">
                           <label for="description" class="label">Description</label>
                           <textarea id="editor" name="description" class="form-control"   ></textarea>
                       </div>








                       <div class="form-row py-2">
                           <button class="btn theme-blue-background theme-white-color" type="submit">Add Menu</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@stop()