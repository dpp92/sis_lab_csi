<style type="text/css" media="screen">
	 #listasUsuarios{
        width: 60%;
        position: absolute;
        top: 5%; 
        left: 20%;
    }
	#listasUsuarios th,#listasUsuarios td{
	  width: 380px;
	  border-bottom: 0.5px solid #000;
      border-color: #066;
	  border-collapse: collapse;
	  text-align: center;
}
	li {
		list-style: none;
	}
	#algovaapasar {
		width: 200px;
	 	margin: auto;
	 	left: 30px;
	}
	.active{
	  background: #EE1B1B;
	  background-image: -webkit-linear-gradient(top, #6aadd9, #21a8fc);
	  background-image: -moz-linear-gradient(top, #6aadd9, #21a8fc);
	  background-image: -ms-linear-gradient(top, #6aadd9, #21a8fc);
	  background-image: -o-linear-gradient(top, #6aadd9, #21a8fc);
	  background-image: linear-gradient(to bottom, #6aadd9, #21a8fc);
	  -webkit-border-radius: 7;
	  -moz-border-radius: 7;
	  border-radius: 7px;
	  font-family: Arial;
	  color: #ffffff;
	  font-size: 20px;
	  padding: 10px 20px 10px 20px;
	  text-decoration: line-through;
	}

	#algovaapasar li a:hover{
		background: #3cb0fd;
	  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
	  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
	  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
	  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
	  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
	  text-decoration: none;
	}
	 #algovaapasar li a{
	  margin-left: 2px;
	  cursor: pointer;
	  background: #3498db;	
	  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
	  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
	  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
	  background-image: -o-linear-gradient(top, #3498db, #2980b9);
	  background-image: linear-gradient(to bottom, #3498db, #2980b9);
	  -webkit-border-radius: 28;
	  -moz-border-radius: 28;
	  border-radius: 6px;
	  font-family: Arial;
	  color: #ffffff;
	  font-size: 14px;
	  padding: 2px 2px 2px 2px;
	  text-decoration: none;
	  float: left;
	}

     #tablelistaUser td{
     	width: 60%;
        empty-cells: hide;
    }
	#editar{
		background: #1bcf51;
		background-image: -webkit-linear-gradient(top, #1bcf51, #2bb840);
		background-image: -moz-linear-gradient(top, #1bcf51, #2bb840);
		background-image: -ms-linear-gradient(top, #1bcf51, #2bb840);
		background-image: -o-linear-gradient(top, #1bcf51, #2bb840);
		background-image: linear-gradient(to bottom, #1bcf51, #2bb840);
		-webkit-border-radius: 6;
		-moz-border-radius: 6;
		border-radius: 6px;
		font-family: Arial;
		color: #ffffff;
		font-size: 14px;
		padding: 4px 2px 4px 2px;
		text-decoration: none;
	}

	#editar:hover {
		background: #30f247;
		background-image: -webkit-linear-gradient(top, #30f247, #178a1f);
		background-image: -moz-linear-gradient(top, #30f247, #178a1f);
		background-image: -ms-linear-gradient(top, #30f247, #178a1f);
		background-image: -o-linear-gradient(top, #30f247, #178a1f);
		background-image: linear-gradient(to bottom, #30f247, #178a1f);
		text-decoration: none;
	}

	#eliminar{
		background: #eb0909;
		background-image: -webkit-linear-gradient(top, #eb0909, #991414);
		background-image: -moz-linear-gradient(top, #eb0909, #991414);
		background-image: -ms-linear-gradient(top, #eb0909, #991414);
		background-image: -o-linear-gradient(top, #eb0909, #991414);
		background-image: linear-gradient(to bottom, #eb0909, #991414);
		-webkit-border-radius: 6;
		-moz-border-radius: 6;
		border-radius: 6px;
		font-family: Arial;
		color: #ffffff;
		font-size: 14px;
		padding: 4px 2px 4px 2px;
		text-decoration: none;
	}
	#eliminar:hover{
		background: #e0392d;
		background-image: -webkit-linear-gradient(top, #e0392d, #ba1c1c);
		background-image: -moz-linear-gradient(top, #e0392d, #ba1c1c);
		background-image: -ms-linear-gradient(top, #e0392d, #ba1c1c);
		background-image: -o-linear-gradient(top, #e0392d, #ba1c1c);
		background-image: linear-gradient(to bottom, #e0392d, #ba1c1c);
		text-decoration: none;
	}
</style>
	<script type="text/javascript" src="../../libs/JS/jquery-2.1.0.min.js"></script>

<script src="js/listas.js" type="text/javascript" charset="utf-8"></script>

<div id="listasUsuarios">

	<table id="tablelistaUser">
	
			<tr>
				<th >Nombres Apellidos</th>
				<th>Usuario</th>
				<th>Grupo</th>
				<th>Telefóno</th>
				<th>Correo</th>
			</tr>
	
	</table>
	<div >
		<center id="algovaapasar"></center>
	</div >
</div>
