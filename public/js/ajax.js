
   $('.dele').click(function(){
   //alert('hello');
   if(confirm('Do you really want to delete ?'))
   {
   	var id =$(this).attr("data-id");
   	alert(id);
     $.ajax({
       url:'category',
       type:'delete',
       data:{"id":id},

       success:function(response)
       {
           $("#task"+id).remove();
       }

     });
 }

   });     
