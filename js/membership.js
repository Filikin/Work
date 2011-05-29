$(function() {
  $('.error').hide();
  $('input.text-input').css({backgroundColor:"#FFFFFF"});
  $('input.text-input').focus(function(){
    $(this).css({backgroundColor:"#FFDDAA"});
  });
  $('input.text-input').blur(function(){
    $(this).css({backgroundColor:"#FFFFFF"});
  });

  $("input#create").click(function() 
	{
	// validate and process form
	// first hide any error messages
	  $('.error').hide();
		
	  var name = $("input#name").val();
	  if (name == "") 
	  {
		  $("label#name_error").show();
		  $("input#name").focus();
		  return false;
	  }
		
	  var email = $("input#email").val();
	  if (email == "") 
	  {
		  $("label#email_error").show();
		  $("input#email").focus();
		  return false;
	  }
	  
	  var phone = $("input#phone").val();
	  if (phone == "") 
	  {
		  $("label#phone_error").show();
		  $("input#phone").focus();
		  return false;
	  }
		
	  var organisation = $("input#organisation").val();
	  if (organisation == "") 
	  {
		  $("label#organisation_error").show();
		  $("input#organisation").focus();
		  return false;
	  }

	  var dataString = $("input").serialize();
		
		$.ajax({
      type: "POST",
      url: "bin/membership.php",
      data: dataString,
      success: function(data) {
        $('#contact_form').html("<div id='message'></div>");
        $('#message').html(data)
        	.hide()
        	.fadeIn(1500, function() 
        	{
        		$('#message');
        	});
         $("input#pay").click(function() 
   		{
        	 window.location='..\bin\paynow.php';
       		 return false;
   		});
      }
     });
    return false;
	});
});
runOnLoad(function(){
  $("input#name").select().focus();
});

//if (data.substr(4,5) != "Error")
//{
	
//}
