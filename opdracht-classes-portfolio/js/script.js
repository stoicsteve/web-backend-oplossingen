$(document).ready(function() {

	

	$('.teal').addClass("tealcurrent");

$('#flip-container').quickFlip();
		
		$('#flip-navigation li a').each(function(){
			$(this).click(function(){
				$('#flip-navigation li').each(function(){
					$(this).removeClass('selected');
				});
				$(this).parent().addClass('selected');
				var flipid=$(this).attr('id').substr(4);
				$('#flip-container').quickFlipper({ }, flipid, 1);
				
				return false;
			});
		});

});



$(function() {

		   

		   	$('.teal').click(function() {

									   

									   $('#site-content').stop().animate({"left" : "0px"}, {"duration" : "slow" , "easing": "easeOutBack"});

								

								$('#navmain ul li a').removeClass("tealcurrent orangecurrent redcurrent bluecurrent purplecurrent");

								$(this).addClass("tealcurrent");

									   });

			



			$('.orange').click(function() {

									   

									    $('#site-content').stop().animate({"left" : "-918px"}, {"duration" : "slow" , "easing": "easeOutBack"});

								$('#navmain ul li a').removeClass("tealcurrent orangecurrent redcurrent bluecurrent purplecurrent");

								$(this).addClass("orangecurrent");

								

									   });





		   	$('.red').click(function() {

									  

									   $('#site-content').stop().animate({"left" : "-1836px"}, {"duration" : "slow" , "easing": "easeOutBack"});

									  $('#navmain ul li a').removeClass("tealcurrent orangecurrent redcurrent bluecurrent purplecurrent");

								$(this).addClass("redcurrent");

									  

									   });





//		   	$('.blue').click(function() {
//
//									   
//
//									   $('#site-content').stop().animate({"left" : '-2754px'}, {"duration" : "slow" , "easing": "easeOutBack"});
//
//									   $('#navmain ul li a').removeClass("tealcurrent orangecurrent redcurrent bluecurrent purplecurrent");
//
//								$(this).addClass("bluecurrent");
//
//									   });

									   

									    	$('.purple').click(function() {

									   

									   $('#site-content').stop().animate({"left" : '-2754px'}, {"duration" : "slow" , "easing": "easeOutBack"});

									 $('#navmain ul li a').removeClass("tealcurrent orangecurrent redcurrent bluecurrent purplecurrent");

								$(this).addClass("purplecurrent");

									   });



			

			

		   

		   });
























$(document).ready(function(){
	/* The following code is executed once the DOM is loaded */

	$('.sponsorFlip').bind("click",function(){

		// $(this) point to the clicked .sponsorFlip element (caching it in elem for speed):

		var elem = $(this);

		// data('flipped') is a flag we set when we flip the element:

		if(elem.data('flipped'))
		{
			// If the element has already been flipped, use the revertFlip method
			// defined by the plug-in to revert to the default state automatically:

			elem.revertFlip();

			// Unsetting the flag:
			elem.data('flipped',false)
		}
		else
		{
			// Using the flip method defined by the plugin:

			elem.flip({
				direction:'lr',
				speed: 350,
				onBefore: function(){
					// Insert the contents of the .sponsorData div (hidden
					// from view with display:none) into the clicked
					// .sponsorFlip div before the flipping animation starts:

					elem.html(elem.siblings('.sponsorData').html());
				}
			});

			// Setting the flag:
			elem.data('flipped',true);
		}
	});

});




	

			$(document).ready(
				function (){
					$("#pikame").PikaChoose({transition:[-1]});
				});












$(document).ready(function() { //perform actions when DOM is ready
  var z = 0; //for setting the initial z-index's
  var inAnimation = false; //flag for testing if we are in a animation

  $('#pictures img').each(function() { //set the initial z-index's
    z++; //at the end we have the highest z-index value stored in the z variable
    $(this).css('z-index', z); //apply increased z-index to <img>
  });

  function swapFirstLast(isFirst) {
    if(inAnimation) return false; //if already swapping pictures just return
    else inAnimation = true; //set the flag that we process a image

    var processZindex, direction, newZindex, inDeCrease; //change for previous or next image

    if(isFirst) { processZindex = z; direction = '-'; newZindex = 1; inDeCrease = 1; } //set variables for "next" action
    else { processZindex = 1; direction = ''; newZindex = z; inDeCrease = -1; } //set variables for "previous" action

    $('#pictures img').each(function() { //process each image
      if($(this).css('z-index') == processZindex) { //if its the image we need to process
        $(this).animate({ 'top' : direction + $(this).height() + 'px' }, 'slow', function() { //animate the img above/under the gallery (assuming all pictures are equal height)
          $(this).css('z-index', newZindex) //set new z-index
            .animate({ 'top' : '0' }, 'slow', function() { //animate the image back to its original position
              inAnimation = false; //reset the flag
            });
        });
      } else { //not the image we need to process, only in/de-crease z-index
        $(this).animate({ 'top' : '0' }, 'slow', function() { //make sure to wait swapping the z-index when image is above/under the gallery
          $(this).css('z-index', parseInt($(this).css('z-index')) + inDeCrease); //in/de-crease the z-index by one
        });
      }
    });

    return false; //don't follow the clicked link
  }

  $('#next a').click(function() {
    return swapFirstLast(true); //swap first image to last position
  });

  $('#prev a').click(function() {
    return swapFirstLast(false); //swap last image to first position
  });
});


/************************************************************\
* Validation function for contact form
\************************************************************/
function on_submit(){
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var message = document.getElementById('message');
    var success = true;
    if(notEmpty(name, "Please enter your name")){
        if(name_check(name, "Only characters are allowed in name")){
            if(notEmpty(email, "Please enter your Email")){
                if(emailValidator(email, "Please enter a Valid Email")){
                        if(notEmpty(message, "Please Enter your Message")){								
							$('#errorMsg').hide('fast');
							var data = name.value + "," + email.value + "," + message.value;							
									//remove all the class add the messagebox classes and start fading
									$("#errorMsg").removeClass().addClass('messagebox').text('Sending...').fadeIn("slow");
									//check the username exists or not from ajax
									$.post("ajax/form_submit.php",{ user_name:data } ,function(data)
									{
									  if(data=='no') //if username not avaiable
									  {
										  $("#errorMsg").fadeTo(200,0.1,function() //start fading the messagebox
										{
										  //add message and change the class of the box and start fading
										  $(this).html('Your Message can not be sent').addClass('failure_msg').fadeTo(900,1);
										});       
									  }
									
									  else 
									  {
										  $("#errorMsg").fadeTo(200,0.1,function()  //start fading the messagebox
										{
										  //add message and change the class of the box and start fading
										  $(this).html('Your Message has been sent').addClass('success_msg').fadeTo(900,1); 
										  $("#errorMsg").removeClass('messagebox');
										    $("#name").val('');
										  $("#email").val('');
										  $("#message").val('');
										});
									  }
										   
									});
						
                            return true;
                        }
                }
            }
        }
    }
    return false;
}
/************************************************************\
* Validation for not empty fields
\************************************************************/
function notEmpty(elem, helperMsg){
    if(elem.value.length == 0){
        $('#errorMsg').addClass('wrong').html(helperMsg);
        elem.focus(); // set the focus to this input
        return false;
    }
    return true;
}
/************************************************************\
* Validation for alpha numeric value field
\************************************************************/
function name_check(elem, helperMsg){
    var alphaExp = /^[a-zA-Z\s]+$/;
    if(elem.value.match(alphaExp)){
        return true;
    }
    else{
        //alert(helperMsg);
        $('#errorMsg').addClass('wrong').html(helperMsg);
        elem.focus();
        return false;
    }
}
/************************************************************\
* Validation for email
\************************************************************/
function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		$('#errorMsg').addClass('wrong').html(helperMsg);
		elem.focus();
		return false;
	}
}
/************************************************************\
* Clear input field
\************************************************************/

