$(document).ready(function() {

	$('#form').validate({
		rules: {
			name: {
				required: true,
				minlength: 2,
				maxlength: 10,
			},

			email: {
				email: true,
				required: true,
			},
		},
	});

});




