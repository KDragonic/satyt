let validate =
{
	validate(_this)
	{
		_this.preventDefault;
		let errors = true;
		let input = document.querySelectorAll('input[required]')
		for(let val of input)
		{
			if(val.value === '')
			{
				console.log("Error: " + val.getAttribute("name") + " null")
				errors = false;
			}				
		}

		let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		let email = document.querySelector('.email');
		if(reg.test(email.value) === false)
		{
			console.log("Invalid mail format");
			errors = false;
		}

		return errors;
	},
	send(_this, event)
	{
		event.preventDefault();
		if(this.validate(_this))
		{
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
		}

		// $('input').text('');
		// $('input').attr("value", '');
		$('input').val('');
	}
}