(function(){

	'use strict';

	window.onload = function()
	{
		var btn = document.getElementById('submitForm');
		var license = document.getElementById('formAgreeLicence');
		var selectBox = document.getElementById('formEducation');

		license.addEventListener('click', function() {
			license.checked ? btn.classList.add('active') : btn.classList.remove('active');
		})

		selectBox.addEventListener('change', function() {
			var questionsList;
			switch(selectBox.value) {
				case 'intermediate':
					$.ajax({
						URL: 'ajax/intermediate.json'
					})
					.done(function(data) {
						questionsList = data;
					});
					break;
				case 'upperIntermediate':
					$.ajax({
						URL: 'ajax/upperIntermediate.json'
					})
					.done(function(data) {
						questionsList = data;
					});
					break;
				case 'high':
					$.ajax({
						URL: 'ajax/high.json'
					})
					.done(function(data) {
						questionsList = data;
					});
					break;
			}
		})
	}

}());