

  function MostrarEsconderDiv(id) {
    
		if ($('#' + id).css('display') == 'block') {
		
			$('#' + id).css('display','none')
			
		} else {
		
			$('#' + id).css('display','block')
			
		}
	
  }
  
  function MostrarEsconderDivModal(id) {
    
		if ($('#' + id).css('display') == 'block') {
		
			$('#' + id).removeClass("modal fade");

			$('#' + id).addClass("modal fade in");
			
			
			
		} else {
			
			
			$('#' + id).removeClass("modal fade in");

			$('#' + id).addClass("modal fade");
		}
	
  }
  