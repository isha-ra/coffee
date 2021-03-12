@extends('backend.layouts.includes')
@section('content')
    <div class="container">
        

        <a href="/menu/create" class="btn btn-outline-primary my-1"><i class="fa fa-plus"></i>
                            </a>


        <div class="container">
            <table class="table table-hover">
                <tr>
                    <th>S.N</th>
                    <th>Category</th>
                    <th>Image</th>


                    <th>Title</th>
                    <th>Description</th>
                    <th>price</th>


                    
                    <th>Action</th>
                </tr>
                @php $i=1; @endphp
                @foreach($menu as $row)
                    <tr>
                        <td href="/single-staff" >{{$i++}}</td>
                        <td>{{$row->category->category_title}}</td>
                        <td><img src="{{asset('images/MenuImage').'/'.$row->image}}" style="height: 90px; width:auto"> </td>
               
                        <td>{{$row->title}}</td>
                        <td>{!! substr($row->description,0,250) !!}</td>
                        <td>Rs. {{$row->price}}</td>



                        

                        <td>

                           edit
                           


                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection