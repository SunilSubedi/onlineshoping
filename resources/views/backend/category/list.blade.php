@extends('backend.template.admin-main')
@section('content')
<div>
 <h3> Welcome</h3>
 <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Category List</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{ route('category.create')}}" class="btn btn-sm btn-primary btn-create">Create New</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    
                    </tr> 
                  </thead>
                  <tbody>
                   @foreach($category as $cat)
    
  
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <button type="button" class="btn btn-danger" id="dele" data-id="{{$cat->id}}">
                              <em class="fa fa-trash"></em>
                             </button>
                            </td>
                            <td>{{$cat->id }}</td>
                            <td>{{ $cat->name }}</td>
                            <td> {{ $cat->created_at }} </td>
                            <td> {{ $cat->updated_at }} </td>
                          </tr>
                      @endforeach
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
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