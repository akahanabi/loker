<?php
	use yii\helpers\Html;
?>
<!-- Scripts
================================================== -->
<?=
	Html::jsFile('@web/themes/js/jquery-3.3.1.min.js');
	Html::jsFile('@web/themes/js/jquery-migrate-3.0.0.min.js');
	Html::jsFile('@web/themes/js/mmenu.min.js');
	Html::jsFile('@web/themes/js/tippy.all.min.js');
	Html::jsFile('@web/themes/js/simplebar.min.js');
	Html::jsFile('@web/themes/js/bootstrap-slider.min.js');
	Html::jsFile('@web/themes/js/bootstrap-select.min.js');
	Html::jsFile('@web/themes/js/snackbar.js');
	Html::jsFile('@web/themes/js/clipboard.min.js');
	Html::jsFile('@web/themes/js/counterup.min.js');
	Html::jsFile('@web/themes/js/magnific-popup.min.js');
	Html::jsFile('@web/themes/js/slick.min.js');
	Html::jsFile('@web/themes/js/custom.js');
?>
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){ 
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g&libraries=places&callback=initAutocomplete"></script>