$().ready(function(){
    
    $("#post_property_form").validate({
        alert('hello');

        rules:{
            Bedrooms:{
                        
                        required: true
            }
           // agree:"required"
        },
        message:{
            
            Bedrooms: "plse select"
            
        }
  });
    
});
