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
    		if(axios.get('https://graph.facebook.com/v2.9/me?fields=about%2Ceducation%2Cemail&access_token=EAACEdEose0cBAAxZBmd7dRoVsYnwpY8oItNiZCcSHNqinaZA8yhEn8q5dZBNXvrc19MRHUvv8dvTdvmbJg4N00EmiqYUZA9MqGJoBslF0bBp3q7y0mhH1Y2HIII6Lvha1EATy0KckV7nEJuSZA8rZBNW4QeRZBvxBqNe1HPT9iHX4hd0oq46lhzOLitRwAYBtBcZD%22').then(response =>this.users = response));
    		
    },


    
});