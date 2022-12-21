$(document).ready(function() {

  function watch_the_click_and_take_the_parameters(){

    $('button').on('click', function(e){

      e.preventDefault();

      if ($(this).hasClass('click_input_h')) {

        let value = $(this).data('input');
        $('#'+value).click();
        
      }

    })

  }watch_the_click_and_take_the_parameters();

});
