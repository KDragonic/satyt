function validate(form) {
		let errors = false;
		let inputs = $(form).find("input");
		for (let input of inputs) if (input.hasAttribute('required')) {
			if (input.val == "")
			{
				$(input).select();
				errors = true;
			}
		}

		let patternEmail = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
		let patternPhone = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
		if ($("#email").val().search(patternEmail) !== 0) {
			errors = true;
			$("#email").select();
		}

		if ($("#phone").val().search(patternPhone) !== 0) {
			errors = true;
			$("#phone").select();
		}

		if ($("#phone2").val() !== "") {
			if ($("#phone2").val().search(patternPhone) !== 0) {
				errors = true;
				$("#phone2").select();
			}
		}

		return !errors;
};

$(document).ready(function(){
	$("#profileForm").on("submit", function(event) {
		event.preventDefault();
		if (validate(this)) {
			$.ajax({
				url: '/form.php',
				method: 'post',
				dataType: 'json',
				data: $(this).serialize(),
				success: function(result) {
					alert(result.message)
				}
			});
		}
	});
});