@extends('backend.template.admin-main')
@section('content')
  <div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-9">
     <div id="postlist"> 
        <div class="panel">
                <div class="panel-heading">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-9">
                                <h3 class="pull-left">{{$product->title}}</h3>
                            </div>
                            <div class="col-sm-3">
                                <h4 class="pull-right">
                                <small><em>{{$product->created_at}}</em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="panel-body">
                <a href="#" class="thumbnail">
                    <img alt="Image" src="{{ asset('images/'.$product->image)}}">
                </a>
               {{ $product->description }}
                <a href="#">Read more</a>
            </div>
            
            <div class="panel-footer">
                <span class="label label-default">Price:{{ $product->price}}</span> <span class="label label-default">Category: {{ $product->category->name}}</span> <span class="label label-default">{{$product->sub_category}}</span>
            </div>
        </div>
    </div>
    </div>

  </div>  



@endsection