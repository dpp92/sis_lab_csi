window.addEventListener('load',function(){

	var closeSession = document.getElementById("closeSession");
	closeSession.addEventListener('click',function(){
		$.ajax ({

			 		url : '../../../csi_lab/php/controllers/logout.php',
			 		success : function (resp){
			 			console.log(resp);
			 			if (resp=="salir") {
			 				//alert("Serás redirigido");
			 				//window.location="../../../csi_lab/index.html";
			 			}
			 		},
			 	});

	})
})