

//Event handler! Makes call to ajax, success or failure.
$('#submit').click( function (e) {
	 e.preventDefault();
	 $('#contactForm').remove();
    $('#thankYouDiv').append('<div id="thankYouMessage"><h3>Message Sent! <br> So nice to hear from you!</h3><p id="thanksP">Thank you for your message. I\'ll get back to you as soon as possible.</p></div>');
  
});
