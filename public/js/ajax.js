
   $('#dele').click(function(){
   	alert('hello');
   	var id =$(this).attr("data-id");
     $.ajax({
       url:'category/'+id,
       type:'Delete',

       success:function(response)
       {
           
       }

     });

   });     