
@extends('backend.template.admin-main')
@section('content')
<div>
 <h3> Welcome</h3>
 <div class="col-md-11 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-10">
                    <h3 class="panel-title">Product List</h3>
                  </div>
                  <div class="col col-xs-10 text-right">
                    <a href="{{ route('product.create')}}" class="btn btn-sm btn-primary btn-create">Create New</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    
                    </tr> 
                  </thead>
                  <tbody>
                   @foreach($product as $pro)
                 
      
                          <tr>
                            <td align="center">
                              <a class="btn btn-default" href="{{route('product.edit',$pro->id)}}"><em class="fa fa-pencil"></em></a>
                              </td>
                             <td>
                                 {{Form::open(['route'=>['product.destroy',$pro->id],'method'=>'DELETE'])}}
                                 {!! Form::submit('Delete',['class'=>' btn btn-danger fa-trash-o'])!!}
                                 {{Form::close()}}
                               

                              </td>                           
                                                      
                                                        </td>
                            <td>{{ $pro->id }}</td>
                            <td>{{ $pro->title }}</td>
                            <td>{{ $pro->description}}</td>
                            <td><img src="{{asset('images/'.$pro->image)}}" height="50px" width="50px"></td>
                             <td>{{ $pro->category->name }}</td>
                            <td>{{$pro->sub_category}}</td>
                            <td>{{$pro->price}}</td>
                            <td>{{ $pro->quantity}}</td>
                            <td>{{ $pro->status}}</td>
                            <td> {{ $pro->created_at }} </td>
                            <td> {{ $pro->updated_at }} </td>
                          </tr>
                         
                      @endforeach
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page {{$product->currentPage()}} of {{$product->total()}}
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                              {!! $product->links() !!}
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div>
 

@endsection
