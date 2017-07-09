var app = new Vue(
{
    el: '#app1',
    data:
     {
      name:'sunil',
      users:[''],
      visiblee:false,
      
      },
    methods:
    {
    	loadUser: function()
    	{
    		
    		axios.get('/getUser').then(function(response)
    		{  
                 this.users = response.data;
                 this.visiblee=true;
    			   
    		});
    		
    	}
    	
    },
    
})