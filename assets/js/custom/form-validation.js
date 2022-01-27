jQuery(document).ready(function($){

	var contactForm = $('#contact-form');

	contactForm.validate({
		errorPlacement: function() {
			return
		},
		ignore: [],
		submitHandler: function(form) {
			
			var submitBtn = contactForm.find('input[type="submit"]');
			var defaultText = submitBtn.val();
			submitBtn.val('Sending').prop('disabled', true);

			$.post(contactForm.attr('action'), contactForm.serialize(), function(data) {

				contactForm.fadeOut(500, function() {

					$('#thanks').fadeIn();

				});
				
			});

			submitBtn.val(defaultText).prop('disabled', false);

			return false;
		},
		highlight: function(element,errorClass) {
	        
	        $(element).addClass(errorClass);
	        $(element).parent().addClass(errorClass);

	    },
	    unhighlight: function(element,errorClass) {
	        
	        $(element).removeClass(errorClass);
	        $(element).parent().removeClass(errorClass);

	    }
	});

	$('#contact-form select').change(function(){
		contactForm.valid();
	});


});