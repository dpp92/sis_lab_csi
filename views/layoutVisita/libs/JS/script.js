window.addEventListener('load', function () {
	 /* body... */ 

	 	var pagina="../../views/layoutUsrRecep/index.html";
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
	 		url : '/digilabweb/php/controllers/login.php',
	 		success : function (resp){
	 			console.log(resp);
	 			if (resp=="bien") {
	 				
	 			}
	 		},
	 	});
	 	})//fin submit

	 	

})