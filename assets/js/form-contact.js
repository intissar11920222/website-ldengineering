
// JavaScript contact form Document
$(document).ready(function() {
	$('form#contact-form').submit(function() {
	$('form#contact-form .error').remove();
	var hasError = false;
	$('.requiredField').each(function() {
	if(jQuery.trim($(this).val()) == '') {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<span class="error">Vous avez oublié d entrer votre '+labelText+'</span>');
    $(this).addClass('inputError');
    hasError = true;
    } else if($(this).hasClass('email')) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!emailReg.test(jQuery.trim($(this).val()))) {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<span class="error">Vous avez entré un invalide '+labelText+'</span>');
    $(this).addClass('inputError');
    hasError = true;
    }
    }
    });
    if(!hasError) {
    $('form#contact-form input.submit').fadeOut('normal', function() {
    $(this).parent().append('');
    });
	$formdatax = new FormData(this) ;
	
    $formdatax.append('captcha', grecaptcha.getResponse());
     $("#loader").show();
        $.ajax({
            url: "contact.php",
            type: "POST",
            data: $formdatax ,
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){
				$("#loader").show() ;
				if ($.trim(data) === "ok" ){
			  $('form#contact-form').slideUp("fast", function() {
			 $(this).before('<div class="success" style:"color:green;">Merci. Votre email a été envoyé avec succès.</div>');
			  $("#loader").hide();
			  })
				}else{
			$('form#contact-form').slideUp("fast", function() {
			 $(this).before('<div class="success">Erreur  : Captcha Invalide !!</div>');
			  $("#loader").hide();
			  })
				}
            }           
       });
	   
	   return false;
    }
 
   });
});