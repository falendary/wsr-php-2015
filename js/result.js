$(document).ready(function(){
	'use strict';

	$('.close').on("click", function(e){
		e.preventDefault();
		$('.overlay').removeClass('active');
		$('.modal-auth').removeClass('active');
	})
})