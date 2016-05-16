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
    .tabs {
    max-width: 100%;
    float: none;
    list-style: none;
    padding: 0;
    margin: 20px auto;
    clear: both;
    }

    .tabs:after {
        content: '';
        display: table;
        clear: both;
    }

    .tabs input[type=radio] {
        display:none;
    }

    .tabs label {
        display: block;
        float: left;
        width: 20%;

        text-align: center;
        line-height: 2;
        cursor: pointer;
        box-shadow: inset 0 2px #ccc;

        -webkit-transition: all 0.5s; /* Safari 3.1 to 6.0 */
        transition: all 0.5s;
    }

    .tabs label i {
        padding: 5px;
        margin-right: 0;
    }
    .tab-content {
        display: none;
        width: 100%;
        float: left;
        padding: 15px;
        box-sizing: border-box;
    }

    .tab-content * {

        -webkit-animation: scale 0.7s ease-in-out;
        -moz-animation: scale 0.7s ease-in-out;
        animation: scale 0.7s ease-in-out;
    }

   .tabs [id^="tab"]:checked + label {
    background-color: darkgray;
    
    }

    #tab1:checked ~ #tab-content1,
    #tab2:checked ~ #tab-content2{
        display: block;
    }
    
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

    <form action="" id="formAddUser" method="post" enctype="application/x-www-form-urlencoded">
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
        <script>
            
            $(function() {
                /* Cada vez que el usuario escriba algo en uno de los input con la clase
                clonable_text_input, llamamos a la funcion handle_keypress, esto incluye
                a los nuevos text input que generemos porque ellos tambien van a ser de
                la clase clonable_text_input */
                $('input.clonable_text_input').on('keypress', handle_keypress)
                })

                num = 0;
                /* Esta funcion es llamada cuando el usuario escribe algo en uno de los input
                con la clase clonable_text_input */
                function handle_keypress(event) {
                // Si la tecla que apreto fue Enter
                if (event.keyCode == 13)
                {

                var nombre = 'clonable_text_input';
                var nuevoId = nombre + '_' + num++;
                var new_input = '<input type="text" class="'+ nombre +'" id="'+ nuevoId +'" name="'+ nuevoId +'"/>';

                }

                // Y lo colocamos en el div correspondiente que definimos en el HTML
                $('#tab-content1').append(new_input)
                }
        
        </script>
         <!--Inicia tabs -->
         <div class="tabs">
	    <input type="radio" name="tabs" id="tab1" checked >
	    <label for="tab1">
	        <i class="fa fa-html5"></i><span>Cursos</span>
	    </label>

	    <input type="radio" name="tabs" id="tab2">
	    <label for="tab2">
	        <i class="fa fa-css3"></i><span>Cosas</span>
	    </label>

	    <div id="tab-content1" class="tab-content">
	      <input class="clonable_text_input" type="text">
	    </div> <!-- #tab-content1 -->

	    <div id="tab-content2" class="tab-content">
	      <input class="add" type="text">
	    </div> <!-- #tab-content2 -->
	    </div>
    </form>
</div>
