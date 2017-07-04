 <div align="center">
 <?php $categ[0]='Please Select'; ?>
 @foreach($category as $cat)
    <?php 
    $categ[]=$cat->name;
    ?>
    @endforeach
@extends('backend.template.admin-main')
@section('content')

 <h3>Add New Category</h3>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <a href="{{route('product.index',$product->id)}}" class="btn btn-info">List Product</a> 
  <div class="row">
    <div class="col-md-4">
{{ Form::open(['route' => ['product.update',$product->id],'method'=>'PUT','files'=>true]) }}
   {{ Form::label('title', 'Title') }}
   {{ Form::text('title',$product->title,array('class'=>'form-control'))}}
   {{ Form::label('category_id','Category Name')}}
   {{ Form::select('category_id',$categ,null,['class'=>'form-control'])}}
   {{ Form::label('sub_category','Sub Category')}}
   {{ Form::text('sub_category',$product->sub_category,array('class'=>'form-control'))}}
   {{ Form::label('description','Description') }}
   {{ Form::textarea('description',$product->description,['class'=>'ckeditor'])}}   
   {{ Form::label('price','Price') }}
   {{ Form::text('price',$product->price,array('class'=>'form-control'))}}
   {{ Form::label('quantity','Quantity')}}
   {{ Form::text('quantity',$product->quantity,array('class'=>'form-control'))}}
   {{ Form::label('image','Image')}}
   {{ Form::file('image',['class'=>'form-control','value'=>$product->image])}}
   {{ Form::label('status','Status')}}
   {{ Form::radio('status','active','true')}} Active
   {{ Form::radio('status','Inactive')}} Inactive
   </br>
   {{ Form::submit('Update',array('class'=>'btn btn-success btn-lg btn-block'))}}
  {{ Form::close() }}
</div>
</div>
</div>
@endsection
</div>