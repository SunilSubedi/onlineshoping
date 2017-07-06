
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/frontend/jquery.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/frontend/cbpViewModeSwitch.js')}}"></script>
     <script src="{{ asset('js/frontend/classie.js')}}"></script>
      <script src="{{ asset('js/frontend/imagezoom.js')}}"></script>
       <script src="{{ asset('js/frontend/jquery.flexisel.js')}}"></script>
       <script src="{{ asset('js/frontend/jquery.flexslider.js')}}"></script>
       <script src="{{ asset('js/frontend/responsiveslides.min.js')}}"></script>
       <script src="{{ asset('js/frontend/simpleCart.min.js')}}"></script>
            <script type="text/javascript">
                     $(window).load(function() {
                        $("#flexiselDemo3").flexisel({
                            visibleItems: 4,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,            
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: { 
                                portrait: { 
                                    changePoint:480,
                                    visibleItems: 1
                                }, 
                                landscape: { 
                                    changePoint:640,
                                    visibleItems: 2
                                },
                                tablet: { 
                                    changePoint:768,
                                    visibleItems: 3
                                }
                            }
                        });
                        
                    });
                   </script>
       

   
</body>
</html>
