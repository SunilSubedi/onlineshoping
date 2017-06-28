@include('backend.template.pageparts.header')
    <!-- TOPBAR NAVIGATION -->
   @include('backend.template.pageparts.topbar')
   <div class="row">
   <div class="col-md-2">
   @include('backend.template.pageparts.sidebar')
    </div>  
    
    <!-- SIDEBAR NAVIGATION -->
    <div class="col-md-10">
    
    @yield('content')
   
    </div>

 
    @include('backend.template.pageparts.footer')

    <!-- /view -->
   