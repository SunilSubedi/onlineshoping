var app = new Vue(
{
    el: '#app1',
    data:
     {
       users:[{}],
       visiblee:false,
   

      
      },
    mounted:function()
    {
    	//alert('hello');
    		axios.get('/getUser').then(response =>this.users = response.data);
    		
    		
               // this.name=response.data.name;
               // this.age=response.data.age;     
    	
    },


    
})