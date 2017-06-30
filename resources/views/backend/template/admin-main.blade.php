@include('backend.template.pageparts.header')
    <!-- TOPBAR NAVIGATION -->
   @include('backend.template.pageparts.topbar')
   <div class="row">
   <div class="col-md-2">
   @include('backend.template.pageparts.sidebar')
    </div>  
    
    <!-- SIDEBAR NAVIGATION -->
    <div class="col-md-10">
    @include('backend.template.pageparts.session_message')
    @yield('content')
   
    </div>

 
    @include('backend.template.pageparts.footer')

    <!-- /view -->
   