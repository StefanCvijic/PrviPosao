
src="https://code.jquery.com/jquery-3.5.1.js";

$(document).on('click','ul li a',function(){
    $(this).addClass('active').siblings.removeClass('active')
    })
  
  