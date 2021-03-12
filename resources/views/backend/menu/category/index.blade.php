@extends('backend.layouts.includes')
@section('content')
    <div class="container">
        

         <a href="/menu-category/create" class="btn btn-outline-primary my-1"><i class="fa fa-plus"></i>
                            </a>


        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Category Title</th>
                    
                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($category as $cat)
                    <tr>
                        <td href="/single-staff" >{{$i++}}</td>
                        <td>{{$cat->category_title}}</td>
                        

                        <td>

                            <a href="/menu-category/{{$cat->id}}/edit" class="btn btn-outline-primary my-1"><i class="fa fa-edit"></i>
                            </a>

                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#del{{$cat->id}}">
                                Delete
                            </button>

                            <div class="modal fade" id="del{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation?</h5>
                                           
                                        </div>
                                        <form method="post" action="/menu-category-delete/{{$cat->id}}">
                                            {{@csrf_field()}}
                                        <div class="modal-body">
                                            Are you sure you want to Delete this data?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                           


                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection