
$( document ).ready(function(){


	$(".btn_quest").click(function(e) {
		e.preventDefault();
  		$(".popup").fadeIn(600);
  		$('html').addClass('no-scroll');
	});


	$(".close-popup").click(function(e) {
  		$(".popup").fadeOut(600);
  		$('html').removeClass('no-scroll');
	});





/*    $('.dropdown-menu').change(function() {
       if $('.dropdown-menu').val() == "users"{
         $('#users').show(); 
       }
   });*/

/*   $("#form").submit(function() {
      $.ajax({
         type: "POST",
         url: "http://test.site/php/mail.php",
         data: $(this).serialize()
      }).done(function() {
         alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
         $("#form").trigger("reset");
      });
      return false;
   });*/

});




















