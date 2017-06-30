@extends('backend.template.admin-main')
@section('content')
<div>
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
 <a href="{{route('category.index')}}" class="btn btn-info">View Category</a> 
  <div class="row">
  	<div class="col-md-4">
{{ Form::open(['route' => ['category.update',$category->id],'method'=>'PUT']) }}
   {{ Form::label('name', 'Name') }}
   {{ Form::text('name',$category->name,array('class'=>'form-control'))}}
   </br>
   {{Form::submit('Update',array('class'=>'btn btn-success btn-lg btn-block'))}}
{{  Form::close() }}
</div>
</div>
</div>

@endsection