$ = jQuery;

$(function(){

	$('ol.breadcrumb li').each(function(index, value){
		if( $.trim($(value).html()).length == 0 )
			$(value).remove();
	});

	
})




$(function(){

	$("#edit-field-state-color-0-value").prop('readonly', true);
	
	$( "#edit-field-state" ).change(function() {
		var $option = $(this).find('option:selected');
		var $colorval = $( "#edit-field-state-color-0-value" );
	
		//Added with the EDIT
		var value = $option.val(); //returns the value of the selected option.
		var text = $option.text(); //returns the text of the selected option.
		console.log(value+' ' +text);
		
		//$colorval.val("White");
	
		if (text == "New"){
			$colorval.val("Red");
		}else if (text == "Sale"){
			$colorval.val("Green");
		} else if ( text == "Most Popular"){
			$colorval.val("Blue");
		} else {
			$colorval.val("White");
		}

		
	});

	
})