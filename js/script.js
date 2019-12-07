$( document ).ready(function() {
	//boton responsive
	$('.button-collapse').sideNav({
		edge: 'left',
		closeOnClick: true
  });

	//click para mostrar tarjetas
	$('#iniciar').click(function() {
		//console.log("click enlace");

		//llama a la funcion ocultar
		ocultar();
		$.ajax({
			type: 'GET',
			url: 'tarjetas.php',
			success: function(data) {
				$('#tarjetas').html(data);
				//flexslider
				$('.control').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					itemWidth: 1,
					asNavFor: '#slider',
				});
				$('#slider').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					customDirectionNav: $(".custom-navigation .flechas"),
					sync: "#menu"
				});

				//llama a la funcion iniciar
				iniciar();
			},
			error: function( xhr, ajaxOptions, thrownError) {
				alert(xhr.status);
				alert(thrownError);
			}
		});
	});

	$('.enlace').click(function() {
		console.log("click enlace");
		
		//llama a la funcion ocultar
		ocultar();
		//guarda valor
		//
		var id = $(this).attr('data-id');
		//console.log(id);

		$.ajax({
			type: 'GET',
			url: 'tarjetas.php',
			success: function(data) {
				$('#tarjetas').html(data);
				//flexslider
				$('.control').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					itemWidth: 1,
					asNavFor: '#slider',
				});
				$('#slider').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					customDirectionNav: $(".custom-navigation .flechas"),
					sync: "#menu",
					start: function(slider) {
						for (var x= 0; x <= id; x++){
							if (id == x) {
								slider.flexAnimate(x, true);
								//flexslider activo
								$(".slides li ").removeClass('activo');
								$(".control .flex-active-slide").addClass('activo');
							}
						}
						console.log(id+ " --- "  +x)
					}
				});

				//llama a la funcion iniciar
				iniciar();
			},
			error: function( xhr, ajaxOptions, thrownError) {
				alert(xhr.status);
				alert(thrownError);
			}
		});
	});
});

function ocultar() {
	$("#inicio").addClass('ocultar');
	$("#tarjetas").removeClass('ocultar');
	$("#tarjetas").html('<div class="center"><img src="img/loading.gif" class="load"></div>');
}

function iniciar() {
//regresar a pagina principal
	$('.home').click(function() {
		console.log("click alergias");
		$("#inicio").removeClass('ocultar');
		$("#tarjetas").addClass('ocultar');
	});

	//tabs materialize solo mobile
	$('ul.tabs').tabs();

	//flexslider activo
  $('.control .slides li').click(function(){
	console.log('click en li')
	$(".slides li ").removeClass('activo');
	$(".control .flex-active-slide").addClass('activo');
  });
  $('.custom-navigation .flechas ').click(function(){
	console.log('click en li a');
	$(".slides li").removeClass('activo');
	$(".control .flex-active-slide").addClass('activo');
  });
}