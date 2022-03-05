let send =
{
	validate(form)
	{
		let errors = true;
		let inputs = $(form > "input[required]");
		for(let input of inputs)
		{
			if(input.val === '')
			{
				$(input).select();
				errors = false;
			}
		}

		let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		let email = $(form > ".email");
		if(reg.test(email.val) === false)
		{
			errors = false;
		}

		return errors;
	},
	send(form)
	{
		if(!this.validate(form)) return false;
		$.ajax({
			url: './form.php',
			method: 'POST',
			dataType: 'html',
			data: $("form").serialize(),
			success: function(responce)
			{
				responce = JSON.parse(responce);
				console.log(responce);
			}
		});
		$(form > 'input').val('');
	}
}