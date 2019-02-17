var clues_json=jsonstr;
$(document).ready(function(){
	var $input = $("#autocomplete").typeahead({
	  source: clues_json,
	  autoSelect: true,
 		displayText: function(item){ return item.clue_text;}
	});

	$input.change(function() {

	  var current = $input.typeahead("getActive");
	  if (current) {
	    if (current.clue_text == $input.val()) {
	    	var clueIndex = clues_json.map(function(x) {return x.clue_text; }).indexOf(current.clue_text);
	    	window.location.href = '/clue/?id=' + clueIndex;
	    }
	  }
	});
		
});