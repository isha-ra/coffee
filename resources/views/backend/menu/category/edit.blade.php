


@extends('backend.layouts.includes')
@section('content')

<div class="container ">
    <div class="row"><h3 class="mx-auto mt-3">Update Menu Category</h3></div>
    <div class="container">
        <div class="row mx-5 pb-5">
            <div class="col-md-9 mx-auto shadow p-5">
                <form method="post" action="/menu-category/{{$category->id}}">

                    {{@csrf_field()}}
                    <div class="form-row py-2">
                        <label for="category_title" class="label">Category Title</label>
                        <input type="text" name="category_title" class="form-control"  id="category_title" value="{{$category->category_title}}">
                    </div>


                    

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update Menu Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection