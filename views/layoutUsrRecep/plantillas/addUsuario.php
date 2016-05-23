<style>
    #boxForm{
        float: left;
        width: 800px;
        margin: auto;
        border-radius: 20px 20px 20px 20px;
        -moz-border-radius: 20px 20px 20px 20px;
        -webkit-border-radius: 20px 20px 20px 20px;
        border: 0.1px solid #000000;
    }
    #boxForm div label {
        float: left;
        
    }
    
   /*Inicia diseño de tabs */


   /*fin diseño tabs*/
    
    #fotos{
        text-align: center;
        width: 40%;
        float: left;
    }
    #fotos img{
        width: 150px;
        clear: both;
    }
    #formulario{
        margin: 5px;
        width: 50%;
        float: left;
        clear: both;
    }
    #formulario label{
        width: 40%;
    }
</style>
<?php include 'header.php';?>
<?php  include 'sideBar.php'; ?>
<br>
<br>
<div id="boxForm">

    <form id="formAddUser" method="post" enctype="application/x-www-form-urlencoded">
        <center class="msgResp"><div >Llene el Formulario Completo</div></center>
    <div id="formulario">
        <div><label for="nombre">Nombre</label><input type="text" id="nombre"></div>
        <div><label for="apellidos">Apellidos</label><input type="text" id="apellidos"></div>
        <div><label for="fechaIng">Fecha Ingreso</label><input type="date" id="fechaIng"></div>
        <div><label for="cedula">Cédula</label><input type="text" id="cedula"></div>
        <div><label for="sueldo">Sueldo</label><input class="add" type="number" id="sueldo"></div>
        <div><label for="dirección">Dirección</label><input type="text" id="direccion"></div>
        <div><label for="telefono">Teléfono</label><input type="phone" id="telefono"></div>
        <div><label for="fecNac">Fecha Nacimiento</label><input type="date" id="fecNac"></div>
        <div><label for="desc">Descuento a aplicar</label><input type="number" id="desc"></div>
        <div><label for="contrasena">Contraseña</label><input type="password" id="contrasena"></div>
        <div>    <label for="select">Grupo  </label><select id="tipos">
                    <option>Administrador</option>
                    <option>Recepcionista</option>
                    <option>Químico</option>
                    <option>Laboratorista</option>
                </select>
         </div>
         
    </div>
    <!--Inicia foto y firma-->
        <div id="fotos">
           <div id=fotoUsuario> <img src="img/logo.jpg" alt=""></div>
            
           <div id="firmaUsuario"><img src="img/LogoDigilab.jpg" alt=""></div>
        </div>
    <!--Fin foto y firma-->
        <!-- Script para add Usuario-->
         <script >
             $(document).ready(function() {
            $('.msgResp').hide();
             var numInputCurso = 1;
             var numInputCosa  = 1;

                function eliminar(cont,obj){
                    fi = document.getElementById(cont);
                    fi.removeChild(document.getElementById(obj));
                }

                function crearElementos(array) {

                    for (i=0; i< array.length; i++){
                        $("#" + array[i][0]).append(
                            "<p  id=\"" + array[i][2] + "\">" +
                            "<input type=\"text\" class=\"" + array[i][1] + "\" id=\"" + array[i][2] + "\">" +
                            "</p>"
                        );
                    }
                }

                $('.add-icon').click(function(e) {
                  var idElem = $(this).attr('id');
                    if (idElem == "addCursos") {

                        arCurso = new Array(
                            new Array(
                             "tab-content1",
                            "inputCurso",
                            "inputCurso"+numInputCurso
                            )
                        );

                        crearElementos(arCurso);
                        numInputCurso++;
                    }
                    if (idElem == "addCosa"){
                        arCurso = new Array(
                            new Array(
                                "tab-content2",
                                "inputCosa",
                                "inputCosa"+numInputCosa
                            )
                        );
                        crearElementos(arCurso);
                        numInputCosa++;
                    }

                });
                $('.btnDism').click(function(a){
                  var idElem = $(this).attr('id');
                  if(idElem == "dismCurso"){
                      if (numInputCurso != 0) { $('#inputCurso' + numInputCurso).remove(); numInputCurso = numInputCurso - 1; }
                  }
                  if(idElem=="dismCosa"){
                      if (numInputCosa != 0) { $('#inputCosa' + numInputCosa).remove(); numInputCosa = numInputCosa - 1; }
                  }
                });

                 var divValue, values = '',array = [];

                 $('#formAddUser').submit(function () {
                     $(divValue).empty();
                     $(divValue).remove(); values = '';
                     $('input').each(function() {
                         divValue = $(document.createElement('div')).css({
                             padding:'5px', width:'200px'
                         });

                         if(this.value == ""){
                             $(".msgResp").show();
                         }else{
                             var values= this;
                             //alert("values.id="+ values.id + ", values.value=" + values.value);
                             array[values.id] = values.value;
                             $(divValue).append('<p><b>Tus valores añadidos</b></p>');
                         }


                     });
                     console.log(array);
                     $(divValue).append(array.toString());
                     $('#submit').append(divValue);
                     return false;
                 })

             /* Cada vez que el usuario escriba algo en uno de los input con la clase
                clonable_text_input, llamamos a la funcion handle_keypress, esto incluye
                a los nuevos text input que generemos porque ellos tambien van a ser de
                la clase clonable_text_input
                $('#clonable_text_input').on('keypress', handle_keypress)
                })

                num = 0;
                /* Esta funcion es llamada cuando el usuario escribe algo en uno de los input
                con la clase clonable_text_input
                function handle_keypress(event) {
                // Si la tecla que apreto fue Enter
                if (event.keyCode == 13)
                {

                var nombre = 'clonable_text_input';
                var nuevoId = nombre + '_' + num++;
                var new_input = '<input type="text" class="'+ nombre +'" id="'+ nuevoId +'" name="'+ nuevoId +'"/>';

                }

                // Y lo colocamos en el div correspondiente que definimos en el HTML
                $('#tab-content1').append(new_input)*/
             })
        </script>
        <style>
            .tabs{
                margin: 10px 5px;
            }
            #tab1{
                margin:0px 5px 0px 0px;
                float: left;
                clear: both;
                
            }
            #tab2{
                float: left;
            }
            .add-icon {
                cursor: pointer;
                background: -webkit-linear-gradient(top, #3498db, #2980b9);
                background: -moz-linear-gradient(top, #3498db, #2980b9);
                background: -o-linear-gradient(top, #3498db, #2980b9);
                background: -ms-linear-gradient(top, #3498db, #2980b9);
                background: linear-gradient(top, #3498db, #2980b9);
                width: 15px;
                text-align: center;
                margin-right: 2px;
            }
            .btnDism {
                cursor: pointer;
                background: -webkit-linear-gradient(top, #e67e22, #d35400);
                background: -moz-linear-gradient(top, #e67e22, #d35400);
                background: -o-linear-gradient(top, #e67e22, #d35400);
                background: -ms-linear-gradient(top, #e67e22, #d35400);
                background: linear-gradient(top, #e67e22, #d35400);
                width: 15px;
                display: inline-block;
                text-align: center;
            }

            #submit{
                width:660px;
                float:right;
                margin:auto;
                text-align: right;
                padding:5px;
            }
            .boton_envio{
                background: #38c2b7;
                background-image: -webkit-linear-gradient(top, #38c2b7, #2196de);
                background-image: -moz-linear-gradient(top, #38c2b7, #2196de);
                background-image: -ms-linear-gradient(top, #38c2b7, #2196de);
                background-image: -o-linear-gradient(top, #38c2b7, #2196de);
                background-image: linear-gradient(to bottom, #38c2b7, #2196de);
                -webkit-border-radius: 12;
                -moz-border-radius: 12;
                border-radius: 12px;
                font-family: Georgia;
                color: #383838;
                font-size: 15px;
                padding: 6px 10px 6px 10px;
                text-decoration: none;
            }
            .boton_envio:hover{
                background: #3ad5e6;
                background-image: -webkit-linear-gradient(top, #3ad5e6, #19c2b1);
                background-image: -moz-linear-gradient(top, #3ad5e6, #19c2b1);
                background-image: -ms-linear-gradient(top, #3ad5e6, #19c2b1);
                background-image: -o-linear-gradient(top, #3ad5e6, #19c2b1);
                background-image: linear-gradient(to bottom, #3ad5e6, #19c2b1);
                text-decoration: none;
            }

            

        </style>
 <!--Inicia div tabs-->

        <div class="tabs">
             <div id="tab1">
                <label >
                    <span>Cursos</span><span class="add-icon" id="addCursos">+</span><span class="btnDism" id="dismCurso">-</span>
                </label>
                 <div id="tab-content1" class="tab-content"></div>
             </div>
             <div id="tab2">
                <label >
                    <span>Cosas</span><span class="add-icon" id="addCosa">+</span><span class="btnDism" id="dismCosa">-</span>
                </label>
                 <div id="tab-content2" class="tab-content"></div>
             </div>
        </div>
        <div id="submit">
            <button class="boton_envio">Guardar Datos</button>
        </div>

        
    </form>
</div>
