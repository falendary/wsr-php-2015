$(document).ready(function(){
	'use strict';

	$('.close').on("click", function(e){
		e.preventDefault();
		$('.overlay').removeClass('active');
		$('.modal-auth').removeClass('active');
		$('.modal-detail').removeClass('active');
	});

	$('.user-item').on('click', function(e){
		e.preventDefault();
		$('.overlay').addClass('active');
		$('.modal-detail').addClass('active');
		$('.td-name').html($(this).attr('data-user-name'));
		$('.td-lastname').html($(this).attr('data-user-lastname'));
		$('.td-middlename').html($(this).attr('data-user-middlename'));
		$('.td-nickname').html($(this).attr('data-user-nickname'));
		$('.td-email').html($(this).attr('data-user-email'));
		$('.td-phone').html($(this).attr('data-user-phone'));
		$('.td-education').html($(this).attr('data-user-education'));
		$('.td-status').html($(this).attr('data-user-status'));
	})

	
	$('.button-submit').on('click', function()
	{
		var user_email = $('#userLogin').val();
		var user_password = $('#userPassword').val();

		console.log('user_email', user_email);
		console.log('user_password', user_password);		

		$.ajax({
			url: 'auth.php',
			method: "POST",
			data: {email: user_email, password: user_password},
			success: function(data){
				var result = JSON.parse(data);
				if(result.user_status === 'authed')
				{
					$('.overlay').removeClass('active');
					$('.modal-auth').removeClass('active');
					$('.emptyness').removeClass('active');
					$('.workrea').addClass('authed');
				}
			}
		});
	})
})