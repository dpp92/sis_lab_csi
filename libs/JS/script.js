window.addEventListener('load', function () {
	 /* body... */ 
	 //console.log("Se ha cargado la pagina,");

	 	
	 	var boton = document.getElementById('submit');

	 	submit.addEventListener('click',function () {
	 		usr = document.getElementById('usrname').value;
	 		pwd = document.getElementById('pwd').value;

	 		var datosLogin = {
	 			"usuario" : usr,
	 			"password" : pwd
	 		};

	 		$.ajax ({
	 		data : datosLogin,
	 		type : 'post',
	 		contentType : $( this ).attr('enctype'), 
	 		url : '/digilab/php/controllers/login.php',
	 		success : function (resp){
	 			console.log(resp);
	 			
	 				//alert("Serás redirigido");
	 				window.location="/digilab/views/layoutUsrRecep/index.php";
	 			
	 		},
	 	});
	 	})//fin submit

	 	

})