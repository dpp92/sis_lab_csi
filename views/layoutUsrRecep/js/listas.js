$(document).ready(ajaxCall(1));
 $(function(){
  tablita = document.getElementById("tablelistaUser");
});                      
   

function hello(){
      alert("Hola");
    }
    
    function ajaxCall(partida){
      var datosLista = {
        "dato" : "lista",
        "partida" : partida
      };
            $.ajax ({
            data : datosLista,
            type : 'post',
            contentType : $( this ).attr('enctype'), 
            url : 'php/showList.php',
            success : function (resp){
                if (resp!="nodatos") {
                  var array = typeof objArray != 'object' ? JSON.parse(resp) : objArray;
                  crearLista(array);
                }
            }
            });
    }

   function crearLista (array) {
    tablita.innerHTML="";
    //titulos
    trh = document.createElement("tr");
      thNombre = document.createElement("th");
      thNombre.innerHTML= "Nombre";
      thUser = document.createElement("th");
      thUser.innerHTML= "Usuario";
      thGrupo = document.createElement("th");
      thGrupo.innerHTML= "Grupo";
      thTelefono = document.createElement("th");
      thTelefono.innerHTML= "Telefono";
      thCorreo = document.createElement("th");
      thCorreo.innerHTML= "Correo";
      trh.appendChild(thNombre);
      trh.appendChild(thUser);
      trh.appendChild(thGrupo);
      trh.appendChild(thTelefono);
      trh.appendChild(thCorreo);
      tablita.appendChild(trh);

        for (var i in array ) {
          for(var x in array[i]){
            for(var z in array[i][x]){
           if (x=="tabla") {

            //contenido
           tr = document.createElement("tr");
           tdnom= document.createElement("td");
           tdnom.innerHTML=array[i][x][z].nombres;
           tdusuario = document.createElement("td");
           tdusuario.innerHTML=array[i][x][z].usuario;
           tdGrupo = document.createElement("td");
           tdGrupo.innerHTML=array[i][x][z].grupo;
           tdTelefono = document.createElement("td");
           tdTelefono.innerHTML=array[i][x][z].telefono;
           tdCorreo = document.createElement("td");
           tdCorreo.innerHTML=array[i][x][z].correo;
           tdEditar = document.createElement("a");
           tdEditar.innerHTML="Editar";
           tdEditar.setAttribute("onclick","alert('Se esta creando mi formulario de edicion, disculpa :(');");
           tdEliminar = document.createElement("a");
           tdEliminar.innerHTML="Eliminar";
           tdEliminar.setAttribute("onclick","alert('Todavia no puedo eliminar');");

           tr.appendChild(tdnom);
           tr.appendChild(tdusuario);
           tr.appendChild(tdGrupo);
           tr.appendChild(tdTelefono);
           tr.appendChild(tdCorreo);
           tr.appendChild(tdEditar);
           tr.appendChild(tdEliminar);
           
           tablita.appendChild(tr);
          }//fin if
          
          else if(x=="lista"){
            console.log(array[i][x]);
            $('#algovaapasar').html(array[i][x]);
          }

        }//fin tercer foreach
        }//fin segundo foreach
        }
       
   }

function hello(){
    alert("Hola");
  }