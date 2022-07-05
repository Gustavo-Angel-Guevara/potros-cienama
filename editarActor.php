<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	    <title>Nuevo Actor</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/estiloActores.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
    </head>
    <body>
    <?php
			$idActor = $_GET['id'];

			$conexion = new mysqli("localhost","root","","peliculas");
			$consulta = "Select * from actor where idActor=".$idActor;

			$resultado = $conexion->query($consulta);
		
			while($row = $resultado->fetch_assoc())
			{			
		?>
        
        <div class="container">
          <hr>
        <div class="cuadrado"><h1><center>Editar Registro Actor</center> </h1></div>
           <style> .cuadrado{
           padding:5px;
           margin:5px;
           background-color: #a62424;
           box-shadow: 0px 0px 60px red;
           color: white; }
           </style>
		      	<br>

        <form data-form='true' action="guardarActor.php" method="post">
            <label for="nombre" style="color:white"><h3>Nombre Completo</h3></label><span style="color: red !important; display: inline; float: none;">*</span>
            <input data-validation='required maxLength-50' class="form-control" name="nombre" type="text" value="<?php echo $row['nombre'];?>" required>
            
            <label for="pais" style="color:white"> <h3>Nacionalidad</h3></label><span style="color: red !important; display: inline; float: none;">*</span>      
            <select name="pais">
                <option value="Afganistán" <?php if($row['nacionalidad']=="Afganistán") echo 'selected="selected"'; ?>id="AF">Afganistán</option>
                <option value="Albania" <?php if($row['nacionalidad']=="Albania") echo 'selected="selected"'; ?>id="AL">Albania</option>
                <option value="Alemania" <?php if($row['nacionalidad']=="Alemania") echo 'selected="selected"'; ?>id="DE">Alemania</option>
                <option value="Andorra" <?php if($row['nacionalidad']=="Andorra") echo 'selected="selected"'; ?>id="AD">Andorra</option>
                <option value="Angola" <?php if($row['nacionalidad']=="Angola") echo 'selected="selected"'; ?>id="AO">Angola</option>
                <option value="Anguila" <?php if($row['nacionalidad']=="Anguila") echo 'selected="selected"'; ?>id="AI">Anguila</option>
                <option value="Antártida" <?php if($row['nacionalidad']=="Antártida") echo 'selected="selected"'; ?>id="AQ">Antártida</option>
                <option value="Antigua y Barbuda" <?php if($row['nacionalidad']=="Antigua y Barbuda") echo 'selected="selected"'; ?>id="AG">Antigua y Barbuda</option>
                <option value="Antillas holandesas" <?php if($row['nacionalidad']=="Antillas holandesas") echo 'selected="selected"'; ?>id="AN">Antillas holandesas</option>
                <option value="Arabia Saudí" <?php if($row['nacionalidad']=="Argelia") echo 'selected="selected"'; ?>id="SA">Arabia Saudí</option>
                <option value="Argelia" <?php if($row['nacionalidad']=="Argelia") echo 'selected="selected"'; ?>id="DZ">Argelia</option>
                <option value="Argentina" <?php if($row['nacionalidad']=="Argentina") echo 'selected="selected"'; ?>id="AR">Argentina</option>
                <option value="Armenia" <?php if($row['nacionalidad']=="Armenia") echo 'selected="selected"'; ?>id="AM">Armenia</option>
                <option value="Aruba" <?php if($row['nacionalidad']=="Aruba") echo 'selected="selected"'; ?>id="AW">Aruba</option>
                <option value="Australia" <?php if($row['nacionalidad']=="Australia" ) echo 'selected="selected"'; ?>id="AU">Australia</option>
                <option value="Austria" <?php if($row['nacionalidad']=="Austria") echo 'selected="selected"'; ?>id="AT">Austria</option>
                <option value="Azerbaiyán" <?php if($row['nacionalidad']=="Azerbaiyán") echo 'selected="selected"'; ?>id="AZ">Azerbaiyán</option>
                <option value="Bahamas" <?php if($row['nacionalidad']=="Bahamas") echo 'selected="selected"'; ?>id="BS">Bahamas</option>
                <option value="Bahrein" <?php if($row['nacionalidad']=="Bahrein") echo 'selected="selected"'; ?>id="BH">Bahrein</option>
                <option value="Bangladesh" <?php if($row['nacionalidad']=="Bangladesh") echo 'selected="selected"'; ?>id="BD">Bangladesh</option>
                <option value="Barbados" <?php if($row['nacionalidad']=="Barbados") echo 'selected="selected"'; ?>id="BB">Barbados</option>
                <option value="Bélgica" <?php if($row['nacionalidad']=="Bélgica") echo 'selected="selected"'; ?>id="BE">Bélgica</option>
                <option value="Belice" <?php if($row['nacionalidad']=="Belice") echo 'selected="selected"'; ?>id="BZ">Belice</option>
                <option value="Benín" <?php if($row['nacionalidad']=="Benín") echo 'selected="selected"'; ?>id="BJ">Benín</option>
                <option value="Bermudas" <?php if($row['nacionalidad']=="Bermudas") echo 'selected="selected"'; ?>id="BM">Bermudas</option>
                <option value="Bhután" <?php if($row['nacionalidad']=="Bhután") echo 'selected="selected"'; ?>id="BT">Bhután</option>
                <option value="Bielorrusia" <?php if($row['nacionalidad']=="Bielorrusia") echo 'selected="selected"'; ?>id="BY">Bielorrusia</option>
                <option value="Birmania" <?php if($row['nacionalidad']=="Birmania") echo 'selected="selected"'; ?>id="MM">Birmania</option>
                <option value="Bolivia" <?php if($row['nacionalidad']=="Bolivia") echo 'selected="selected"'; ?>id="BO">Bolivia</option>
                <option value="Bosnia y Herzegovina" <?php if($row['nacionalidad']=="Bosnia y Herzegovina") echo 'selected="selected"'; ?>id="BA">Bosnia y Herzegovina</option>
                <option value="Botsuana" <?php if($row['nacionalidad']=="Botsuana") echo 'selected="selected"'; ?>id="BW">Botsuana</option>
                <option value="Brasil" <?php if($row['nacionalidad']=="Brasil") echo 'selected="selected"'; ?>id="BR">Brasil</option>
                <option value="Brunei" <?php if($row['nacionalidad']=="Brunei") echo 'selected="selected"'; ?>id="BN">Brunei</option>
                <option value="Bulgaria" <?php if($row['nacionalidad']=="Bulgaria") echo 'selected="selected"'; ?>id="BG">Bulgaria</option>
                <option value="Burkina Faso" <?php if($row['nacionalidad']=="Burkina Faso") echo 'selected="selected"'; ?>id="BF">Burkina Faso</option>
                <option value="Burundi" <?php if($row['nacionalidad']=="Burundi") echo 'selected="selected"'; ?>id="BI">Burundi</option>
                <option value="Cabo Verde" <?php if($row['nacionalidad']=="Cabo Verde") echo 'selected="selected"'; ?>id="CV">Cabo Verde</option>
                <option value="Camboya" <?php if($row['nacionalidad']=="Camboya") echo 'selected="selected"'; ?>id="KH">Camboya</option>
                <option value="Camerún" <?php if($row['nacionalidad']=="Camerún") echo 'selected="selected"'; ?>id="CM">Camerún</option>
                <option value="Canadá" <?php if($row['nacionalidad']=="Canadá") echo 'selected="selected"'; ?>id="CA">Canadá</option>
                <option value="Chad" <?php if($row['nacionalidad']=="Chad") echo 'selected="selected"'; ?>id="TD">Chad</option>
                <option value="Chile" <?php if($row['nacionalidad']=="Chile") echo 'selected="selected"'; ?>id="CL">Chile</option>
                <option value="China" <?php if($row['nacionalidad']=="China") echo 'selected="selected"'; ?>id="CN">China</option>
                <option value="Chipre" <?php if($row['nacionalidad']=="Chipre") echo 'selected="selected"'; ?>id="CY">Chipre</option>
                <option value="Ciudad estado del Vaticano" <?php if($row['nacionalidad']=="Ciudad estado del Vaticano") echo 'selected="selected"'; ?>id="VA">Ciudad estado del Vaticano</option>
                <option value="Colombia" <?php if($row['nacionalidad']=="Colombia") echo 'selected="selected"'; ?>id="CO">Colombia</option>
                <option value="Comores" <?php if($row['nacionalidad']=="Comores") echo 'selected="selected"'; ?>id="KM">Comores</option>
                <option value="Congo" <?php if($row['nacionalidad']=="Congo") echo 'selected="selected"'; ?>id="CG">Congo</option>
                <option value="Corea" <?php if($row['nacionalidad']=="Corea") echo 'selected="selected"'; ?>id="KR">Corea</option>
                <option value="Corea del Norte" <?php if($row['nacionalidad']=="Corea del Norte") echo 'selected="selected"'; ?>id="KP">Corea del Norte</option>
                <option value="Costa del Marfíl" <?php if($row['nacionalidad']=="Costa del Marfíl") echo 'selected="selected"'; ?>id="CI">Costa del Marfíl</option>
                <option value="Costa Rica" <?php if($row['nacionalidad']=="Costa Rica") echo 'selected="selected"'; ?>id="CR">Costa Rica</option>
                <option value="Croacia" <?php if($row['nacionalidad']=="Croacia") echo 'selected="selected"'; ?>id="HR">Croacia</option>
                <option value="Cuba" <?php if($row['nacionalidad']=="Cuba") echo 'selected="selected"'; ?>id="CU">Cuba</option>
                <option value="Dinamarca" <?php if($row['nacionalidad']=="Dinamarca") echo 'selected="selected"'; ?>id="DK">Dinamarca</option>
                <option value="Djibouri" <?php if($row['nacionalidad']=="Djibouri") echo 'selected="selected"'; ?>id="DJ">Djibouri</option>
                <option value="Dominica" <?php if($row['nacionalidad']=="Dominica") echo 'selected="selected"'; ?>id="DM">Dominica</option>
                <option value="Ecuador" <?php if($row['nacionalidad']=="Ecuador") echo 'selected="selected"'; ?>id="EC">Ecuador</option>
                <option value="Egipto" <?php if($row['nacionalidad']=="Egipto") echo 'selected="selected"'; ?>id="EG">Egipto</option>
                <option value="El Salvador" <?php if($row['nacionalidad']=="El Salvador") echo 'selected="selected"'; ?>id="SV">El Salvador</option>
                <option value="Emiratos Arabes Unidos" <?php if($row['nacionalidad']=="Emiratos Arabes Unidos") echo 'selected="selected"'; ?>id="AE">Emiratos Arabes Unidos</option>
                <option value="Eritrea" <?php if($row['nacionalidad']=="Eritrea") echo 'selected="selected"'; ?>id="ER">Eritrea</option>
                <option value="Eslovaquia" <?php if($row['nacionalidad']=="Eslovaquia") echo 'selected="selected"'; ?>id="SK">Eslovaquia</option>
                <option value="Eslovenia" <?php if($row['nacionalidad']=="Eslovenia") echo 'selected="selected"'; ?>id="SI">Eslovenia</option>
                <option value="España" <?php if($row['nacionalidad']=="España") echo 'selected="selected"'; ?>id="ES">España</option>
                <option value="Estados Unidos" <?php if($row['nacionalidad']=="Estados Unidos") echo 'selected="selected"'; ?>id="US">Estados Unidos</option>
                <option value="Estonia" <?php if($row['nacionalidad']=="Estonia") echo 'selected="selected"'; ?>id="EE">Estonia</option>
                <option value="Etiopia" <?php if($row['nacionalidad']=="Etiopia") echo 'selected="selected"'; ?>id="ET">Etiopía</option>
                <option value="Ex-República Yugoslava de Macedonia" <?php if($row['nacionalidad']=="Ex-República Yugoslava de Macedonia") echo 'selected="selected"'; ?>id="MK">Ex-República Yugoslava de Macedonia</option>
                <option value="Filipinas" <?php if($row['nacionalidad']=="Filipinas") echo 'selected="selected"'; ?>id="PH">Filipinas</option>
                <option value="Finlandia" <?php if($row['nacionalidad']=="Finlandia") echo 'selected="selected"'; ?>id="FI">Finlandia</option>
                <option value="Francia" <?php if($row['nacionalidad']=="Francia") echo 'selected="selected"'; ?>id="FR">Francia</option>
                <option value="Gabón" <?php if($row['nacionalidad']=="Gabón") echo 'selected="selected"'; ?>id="GA">Gabón</option>
                <option value="Gambia" <?php if($row['nacionalidad']=="Gambia") echo 'selected="selected"'; ?>id="GM">Gambia</option>
                <option value="Georgia" <?php if($row['nacionalidad']=="Georgia") echo 'selected="selected"'; ?>id="GE">Georgia</option>
                <option value="Georgia del Sur y las islas Sandwich del Sur" <?php if($row['nacionalidad']=="Georgia del Sur y las islas Sandwich del Sur") echo 'selected="selected"'; ?>id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                <option value="Ghana" <?php if($row['nacionalidad']=="Ghana") echo 'selected="selected"'; ?>id="GH">Ghana</option>
                <option value="Gibraltar" <?php if($row['nacionalidad']=="Gibraltar") echo 'selected="selected"'; ?>id="GI">Gibraltar</option>
                <option value="Granada" <?php if($row['nacionalidad']=="Granada") echo 'selected="selected"'; ?>id="GD">Granada</option>
                <option value="Grecia" <?php if($row['nacionalidad']=="Grecia") echo 'selected="selected"'; ?>id="GR">Grecia</option>
                <option value="Groenlandia" <?php if($row['nacionalidad']=="Groenlandia") echo 'selected="selected"'; ?>id="GL">Groenlandia</option>
                <option value="Guadalupe" <?php if($row['nacionalidad']=="Guadalupe") echo 'selected="selected"'; ?>id="GP">Guadalupe</option>
                <option value="Guam" <?php if($row['nacionalidad']=="Guam") echo 'selected="selected"'; ?>id="GU">Guam</option>
                <option value="Guatemala" <?php if($row['nacionalidad']=="Guatemala") echo 'selected="selected"'; ?>id="GT">Guatemala</option>
                <option value="Guayana" <?php if($row['nacionalidad']=="Guayana") echo 'selected="selected"'; ?>id="GY">Guayana</option>
                <option value="Guayana francesa" <?php if($row['nacionalidad']=="Guayana francesa") echo 'selected="selected"'; ?>id="GF">Guayana francesa</option>
                <option value="Guinea" <?php if($row['nacionalidad']=="Guinea") echo 'selected="selected"'; ?>id="GN">Guinea</option>
                <option value="Guinea Ecuatorial" <?php if($row['nacionalidad']=="Guinea Ecuatorial") echo 'selected="selected"'; ?>id="GQ">Guinea Ecuatorial</option>
                <option value="Guinea-Bissau" <?php if($row['nacionalidad']=="Guinea-Bissau") echo 'selected="selected"'; ?>id="GW">Guinea-Bissau</option>
                <option value="Haití" <?php if($row['nacionalidad']=="Haití") echo 'selected="selected"'; ?>id="HT">Haití</option>
                <option value="Holanda" <?php if($row['nacionalidad']=="Holanda") echo 'selected="selected"'; ?>id="NL">Holanda</option>
                <option value="Honduras" <?php if($row['nacionalidad']=="Honduras") echo 'selected="selected"'; ?>id="HN">Honduras</option>
                <option value="Hong Kong R. A. E" <?php if($row['nacionalidad']=="Hong Kong R. A. E") echo 'selected="selected"'; ?>id="HK">Hong Kong R. A. E</option>
                <option value="Hungría" <?php if($row['nacionalidad']=="Hungría") echo 'selected="selected"'; ?>id="HU">Hungría</option>
                <option value="India" <?php if($row['nacionalidad']=="India") echo 'selected="selected"'; ?>id="IN">India</option>
                <option value="Indonesia" <?php if($row['nacionalidad']=="Indonesia") echo 'selected="selected"'; ?>id="ID">Indonesia</option>
                <option value="Irak" <?php if($row['nacionalidad']=="Irak") echo 'selected="selected"'; ?>id="IQ">Irak</option>
                <option value="Irán" <?php if($row['nacionalidad']=="Irán") echo 'selected="selected"'; ?>id="IR">Irán</option>
                <option value="Irlanda" <?php if($row['nacionalidad']=="Irlanda") echo 'selected="selected"'; ?>id="IE">Irlanda</option>
                <option value="Isla Bouvet" <?php if($row['nacionalidad']=="Isla Bouvet") echo 'selected="selected"'; ?>id="BV">Isla Bouvet</option>
                <option value="Isla Christmas" <?php if($row['nacionalidad']=="Isla Christmas") echo 'selected="selected"'; ?>id="CX">Isla Christmas</option>
                <option value="Isla Heard e Islas McDonald" <?php if($row['nacionalidad']=="Isla Heard e Islas McDonald") echo 'selected="selected"'; ?>id="HM">Isla Heard e Islas McDonald</option>
                <option value="Islandia" <?php if($row['nacionalidad']=="Islandia") echo 'selected="selected"'; ?>id="IS">Islandia</option>
                <option value="Islas Caimán" <?php if($row['nacionalidad']=="Islas Caimán") echo 'selected="selected"'; ?>id="KY">Islas Caimán</option>
                <option value="Islas Cook" <?php if($row['nacionalidad']=="Islas Cook") echo 'selected="selected"'; ?>id="CK">Islas Cook</option>
                <option value="Islas de Cocos o Keeling" <?php if($row['nacionalidad']=="Islas de Cocos o Keeling") echo 'selected="selected"'; ?>id="CC">Islas de Cocos o Keeling</option>
                <option value="Islas Faroe" <?php if($row['nacionalidad']=="Islas Faroe") echo 'selected="selected"'; ?>id="FO">Islas Faroe</option>
                <option value="Islas Fiyi" <?php if($row['nacionalidad']=="Islas Fiyi") echo 'selected="selected"'; ?>id="FJ">Islas Fiyi</option>
                <option value="Islas Malvinas Islas Falkland" <?php if($row['nacionalidad']=="Islas Malvinas Islas Falkland") echo 'selected="selected"'; ?>id="FK">Islas Malvinas Islas Falkland</option>
                <option value="Islas Marianas del norte" <?php if($row['nacionalidad']=="Islas Marianas del norte") echo 'selected="selected"'; ?>id="MP">Islas Marianas del norte</option>
                <option value="Islas Marshall" <?php if($row['nacionalidad']=="Islas Marshall") echo 'selected="selected"'; ?>id="MH">Islas Marshall</option>
                <option value="Islas menores de Estados Unidos" <?php if($row['nacionalidad']=="Islas menores de Estados Unidos") echo 'selected="selected"'; ?>id="UM">Islas menores de Estados Unidos</option>
                <option value="Islas Palau" <?php if($row['nacionalidad']=="Islas Palau") echo 'selected="selected"'; ?>id="PW">Islas Palau</option>
                <option value="Islas Salomón" <?php if($row['nacionalidad']=="Islas Salomón")echo 'selected="selected"'; ?>id="SB">Islas Salomón</option>
                <option value="Islas Tokelau" <?php if($row['nacionalidad']=="Islas Tokelau") echo 'selected="selected"'; ?>id="TK">Islas Tokelau</option>
                <option value="Islas Turks y Caicos" <?php if($row['nacionalidad']=="Islas Turks y Caicos") echo 'selected="selected"'; ?>id="TC">Islas Turks y Caicos</option>
                <option value="Islas Vírgenes EE.UU." <?php if($row['nacionalidad']=="Islas Vírgenes EE.UU.") echo 'selected="selected"'; ?>id="VI">Islas Vírgenes EE.UU.</option>
                <option value="Islas Vírgenes Reino Unido" <?php if($row['nacionalidad']=="Islas Vírgenes Reino Unido") echo 'selected="selected"'; ?>id="VG">Islas Vírgenes Reino Unido</option>
                <option value="Israel" <?php if($row['nacionalidad']=="Israel") echo 'selected="selected"'; ?>id="IL">Israel</option>
                <option value="Italia" <?php if($row['nacionalidad']=="Italia") echo 'selected="selected"'; ?>id="IT">Italia</option>
                <option value="Jamaica" <?php if($row['nacionalidad']=="Jamaica") echo 'selected="selected"'; ?>id="JM">Jamaica</option>
                <option value="Japón" <?php if($row['nacionalidad']=="Japón") echo 'selected="selected"'; ?>id="JP">Japón</option>
                <option value="Jordania" <?php if($row['nacionalidad']=="Jordania") echo 'selected="selected"'; ?>id="JO">Jordania</option>
                <option value="Kazajistán" <?php if($row['nacionalidad']=="Kazajistán") echo 'selected="selected"'; ?>id="KZ">Kazajistán</option>
                <option value="Kenia" <?php if($row['nacionalidad']=="Kenia") echo 'selected="selected"'; ?>id="KE">Kenia</option>
                <option value="Kirguizistán" <?php if($row['nacionalidad']=="Kirguizistán") echo 'selected="selected"'; ?>id="KG">Kirguizistán</option>
                <option value="Kiribati" <?php if($row['nacionalidad']=="Kiribati") echo 'selected="selected"'; ?>id="KI">Kiribati</option>
                <option value="Kuwait" <?php if($row['nacionalidad']=="Kuwait") echo 'selected="selected"'; ?>id="KW">Kuwait</option>
                <option value="Laos" <?php if($row['nacionalidad']=="Laos") echo 'selected="selected"'; ?>id="LA">Laos</option>
                <option value="Lesoto" <?php if($row['nacionalidad']=="Lesoto") echo 'selected="selected"'; ?>id="LS">Lesoto</option>
                <option value="Letonia" <?php if($row['nacionalidad']=="Letonia") echo 'selected="selected"'; ?>id="LV">Letonia</option>
                <option value="Líbano" <?php if($row['nacionalidad']=="Líbano") echo 'selected="selected"'; ?>id="LB">Líbano</option>
                <option value="Liberia" <?php if($row['nacionalidad']=="Liberia") echo 'selected="selected"'; ?>id="LR">Liberia</option>
                <option value="Libia" <?php if($row['nacionalidad']=="Libia") echo 'selected="selected"'; ?>id="LY">Libia</option>
                <option value="Liechtenstein" <?php if($row['nacionalidad']=="Liechtenstein") echo 'selected="selected"'; ?>id="LI">Liechtenstein</option>
                <option value="Lituania" <?php if($row['nacionalidad']=="Lituania") echo 'selected="selected"'; ?>id="LT">Lituania</option>
                <option value="Luxemburgo" <?php if($row['nacionalidad']=="Luxemburgo") echo 'selected="selected"'; ?>id="LU">Luxemburgo</option>
                <option value="Macao R. A. E" <?php if($row['nacionalidad']=="Macao R. A. E") echo 'selected="selected"'; ?>id="MO">Macao R. A. E</option>
                <option value="Madagascar" <?php if($row['nacionalidad']=="Madagascar") echo 'selected="selected"'; ?>id="MG">Madagascar</option>
                <option value="Malasia" <?php if($row['nacionalidad']=="Malasia") echo 'selected="selected"'; ?>id="MY">Malasia</option>
                <option value="Malawi" <?php if($row['nacionalidad']=="Malawi") echo 'selected="selected"'; ?>id="MW">Malawi</option>
                <option value="Maldivas" <?php if($row['nacionalidad']=="Maldivas") echo 'selected="selected"'; ?>id="MV">Maldivas</option>
                <option value="Malí" <?php if($row['nacionalidad']=="Malí") echo 'selected="selected"'; ?>id="ML">Malí</option>
                <option value="Malta" <?php if($row['nacionalidad']=="Malta") echo 'selected="selected"'; ?>id="MT">Malta</option>
                <option value="Marruecos" <?php if($row['nacionalidad']=="Marruecos") echo 'selected="selected"'; ?>id="MA">Marruecos</option>
                <option value="Martinica" <?php if($row['nacionalidad']=="Martinica") echo 'selected="selected"'; ?>id="MQ">Martinica</option>
                <option value="Mauricio" <?php if($row['nacionalidad']=="Mauricio") echo 'selected="selected"'; ?>id="MU">Mauricio</option>
                <option value="Mauritania" <?php if($row['nacionalidad']=="Mauritania") echo 'selected="selected"'; ?>id="MR">Mauritania</option>
                <option value="Mayotte" <?php if($row['nacionalidad']=="Mayotte") echo 'selected="selected"'; ?>id="YT">Mayotte</option>
                <option value="México" <?php if($row['nacionalidad']=="México") echo 'selected="selected"'; ?>id="MX">México</option>
                <option value="Micronesia" <?php if($row['nacionalidad']=="Micronesia") echo 'selected="selected"'; ?>id="FM">Micronesia</option>
                <option value="Moldavia" <?php if($row['nacionalidad']=="Moldavia") echo 'selected="selected"'; ?>id="MD">Moldavia</option>
                <option value="Mónaco" <?php if($row['nacionalidad']=="Mónaco") echo 'selected="selected"'; ?>id="MC">Mónaco</option>
                <option value="Mongolia" <?php if($row['nacionalidad']=="Mongolia") echo 'selected="selected"'; ?>id="MN">Mongolia</option>
                <option value="Montserrat" <?php if($row['nacionalidad']=="Montserrat") echo 'selected="selected"'; ?>id="MS">Montserrat</option>
                <option value="Mozambique" <?php if($row['nacionalidad']=="Mozambique") echo 'selected="selected"'; ?>id="MZ">Mozambique</option>
                <option value="Namibia" <?php if($row['nacionalidad']=="Namibia") echo 'selected="selected"'; ?>id="NA">Namibia</option>
                <option value="Nauru" <?php if($row['nacionalidad']=="Nauru") echo 'selected="selected"'; ?>id="NR">Nauru</option>
                <option value="Nepal" <?php if($row['nacionalidad']=="Nepal") echo 'selected="selected"'; ?>id="NP">Nepal</option>
                <option value="Nicaragua" <?php if($row['nacionalidad']=="Nicaragua") echo 'selected="selected"'; ?>id="NI">Nicaragua</option>
                <option value="Níger" <?php if($row['nacionalidad']=="Níger") echo 'selected="selected"'; ?>id="NE">Níger</option>
                <option value="Nigeria" <?php if($row['nacionalidad']=="Nigeria") echo 'selected="selected"'; ?>id="NG">Nigeria</option>
                <option value="Niue" <?php if($row['nacionalidad']=="Niue") echo 'selected="selected"'; ?>id="NU">Niue</option>
                <option value="Norfolk" <?php if($row['nacionalidad']=="Norfolk") echo 'selected="selected"'; ?>id="NF">Norfolk</option>
                <option value="Noruega" <?php if($row['nacionalidad']=="Noruega") echo 'selected="selected"'; ?>id="NO">Noruega</option>
                <option value="Nueva Caledonia" <?php if($row['nacionalidad']=="Nueva Caledonia") echo 'selected="selected"'; ?>id="NC">Nueva Caledonia</option>
                <option value="Nueva Zelanda" <?php if($row['nacionalidad']=="Nueva Zelanda") echo 'selected="selected"'; ?>id="NZ">Nueva Zelanda</option>
                <option value="Omán" <?php if($row['nacionalidad']=="Omán") echo 'selected="selected"'; ?>id="OM">Omán</option>
                <option value="Panamá" <?php if($row['nacionalidad']=="Panamá") echo 'selected="selected"'; ?>id="PA">Panamá</option>
                <option value="Papua Nueva Guinea" <?php if($row['nacionalidad']=="Papua Nueva Guinea") echo 'selected="selected"'; ?>id="PG">Papua Nueva Guinea</option>
                <option value="Paquistán" <?php if($row['nacionalidad']=="Paquistán") echo 'selected="selected"'; ?>id="PK">Paquistán</option>
                <option value="Paraguay" <?php if($row['nacionalidad']=="Paraguay") echo 'selected="selected"'; ?>id="PY">Paraguay</option>
                <option value="Perú" <?php if($row['nacionalidad']=="Perú") echo 'selected="selected"'; ?>id="PE">Perú</option>
                <option value="Pitcairn" <?php if($row['nacionalidad']=="Pitcairn") echo 'selected="selected"'; ?>id="PN">Pitcairn</option>
                <option value="Polinesia francesa" <?php if($row['nacionalidad']=="Polinesia francesa") echo 'selected="selected"'; ?>id="PF">Polinesia francesa</option>
                <option value="Polonia" <?php if($row['nacionalidad']=="Polonia") echo 'selected="selected"'; ?>id="PL">Polonia</option>
                <option value="Portugal" <?php if($row['nacionalidad']=="Portugal") echo 'selected="selected"'; ?>id="PT">Portugal</option>
                <option value="Puerto Rico" <?php if($row['nacionalidad']=="Puerto Rico") echo 'selected="selected"'; ?>id="PR">Puerto Rico</option>
                <option value="Qatar" <?php if($row['nacionalidad']=="Qatar") echo 'selected="selected"'; ?>id="QA">Qatar</option>
                <option value="Reino Unido" <?php if($row['nacionalidad']=="Reino Unido") echo 'selected="selected"'; ?>id="UK">Reino Unido</option>
                <option value="República Centroafricana" <?php if($row['nacionalidad']=="República Centroafricana") echo 'selected="selected"'; ?>id="CF">República Centroafricana</option>
                <option value="República Checa" <?php if($row['nacionalidad']=="República Checa") echo 'selected="selected"'; ?>id="CZ">República Checa</option>
                <option value="República de Sudáfrica" <?php if($row['nacionalidad']=="República de Sudáfrica") echo 'selected="selected"'; ?>id="ZA">República de Sudáfrica</option>
                <option value="República Democrática del Congo Zaire" <?php if($row['nacionalidad']=="República Democrática del Congo Zaire") echo 'selected="selected"'; ?>id="CD">República Democrática del Congo Zaire</option>
                <option value="República Dominicana" <?php if($row['nacionalidad']=="República Dominicana") echo 'selected="selected"'; ?>id="DO">República Dominicana</option>
                <option value="Reunión" <?php if($row['nacionalidad']=="Reunión") echo 'selected="selected"'; ?>id="RE">Reunión</option>
                <option value="Ruanda" <?php if($row['nacionalidad']=="Ruanda") echo 'selected="selected"'; ?>id="RW">Ruanda</option>
                <option value="Rumania" <?php if($row['nacionalidad']=="Rumania") echo 'selected="selected"'; ?>id="RO">Rumania</option>
                <option value="Rusia" <?php if($row['nacionalidad']=="Rusia") echo 'selected="selected"'; ?>id="RU">Rusia</option>
                <option value="Samoa" <?php if($row['nacionalidad']=="Samoa") echo 'selected="selected"'; ?>id="WS">Samoa</option>
                <option value="Samoa occidental" <?php if($row['nacionalidad']=="Samoa occidental") echo 'selected="selected"'; ?>id="AS">Samoa occidental</option>
                <option value="San Kitts y Nevis" <?php if($row['nacionalidad']=="San Kitts y Nevis") echo 'selected="selected"'; ?>id="KN">San Kitts y Nevis</option>
                <option value="San Marino" <?php if($row['nacionalidad']=="San Marino") echo 'selected="selected"'; ?>id="SM">San Marino</option>
                <option value="San Pierre y Miquelon" <?php if($row['nacionalidad']=="San Pierre y Miquelon") echo 'selected="selected"'; ?>id="PM">San Pierre y Miquelon</option>
                <option value="San Vicente e Islas Granadinas" <?php if($row['nacionalidad']=="San Vicente e Islas Granadinas") echo 'selected="selected"'; ?>id="VC">San Vicente e Islas Granadinas</option>
                <option value="Santa Helena" <?php if($row['nacionalidad']=="Santa Helena") echo 'selected="selected"'; ?>id="SH">Santa Helena</option>
                <option value="Santa Lucía" <?php if($row['nacionalidad']=="Santa Lucía") echo 'selected="selected"'; ?>id="LC">Santa Lucía</option>
                <option value="Santo Tomé y Príncipe" <?php if($row['nacionalidad']=="Santo Tomé y Príncipe") echo 'selected="selected"'; ?>id="ST">Santo Tomé y Príncipe</option>
                <option value="Senegal" <?php if($row['nacionalidad']=="Senegal") echo 'selected="selected"'; ?>id="SN">Senegal</option>
                <option value="Serbia y Montenegro" <?php if($row['nacionalidad']=="Serbia y Montenegro") echo 'selected="selected"'; ?>id="YU">Serbia y Montenegro</option>
                <option value="Sychelles" <?php if($row['nacionalidad']=="Sychelles") echo 'selected="selected"'; ?>id="SC">Seychelles</option>
                <option value="Sierra Leona" <?php if($row['nacionalidad']=="Sierra Leona") echo 'selected="selected"'; ?>id="SL">Sierra Leona</option>
                <option value="Singapur" <?php if($row['nacionalidad']=="Singapur") echo 'selected="selected"'; ?>id="SG">Singapur</option>
                <option value="Siria" <?php if($row['nacionalidad']=="Siria") echo 'selected="selected"'; ?>id="SY">Siria</option>
                <option value="Somalia" <?php if($row['nacionalidad']=="Somalia") echo 'selected="selected"'; ?>id="SO">Somalia</option>
                <option value="Sri Lanka" <?php if($row['nacionalidad']=="Sri Lanka") echo 'selected="selected"'; ?>id="LK">Sri Lanka</option>
                <option value="Suazilandia" <?php if($row['nacionalidad']=="Suazilandia") echo 'selected="selected"'; ?>id="SZ">Suazilandia</option>
                <option value="Sudán" <?php if($row['nacionalidad']=="Sudán") echo 'selected="selected"'; ?>id="SD">Sudán</option>
                <option value="Suecia" <?php if($row['nacionalidad']=="Suecia") echo 'selected="selected"'; ?>id="SE">Suecia</option>
                <option value="Suiza" <?php if($row['nacionalidad']=="Suiza") echo 'selected="selected"'; ?>id="CH">Suiza</option>
                <option value="Surinam" <?php if($row['nacionalidad']=="Surinam") echo 'selected="selected"'; ?>id="SR">Surinam</option>
                <option value="Svalbard" <?php if($row['nacionalidad']=="Svalbard") echo 'selected="selected"'; ?>id="SJ">Svalbard</option>
                <option value="Tailandia" <?php if($row['nacionalidad']=="Tailandia") echo 'selected="selected"'; ?>id="TH">Tailandia</option>
                <option value="Taiwán" <?php if($row['nacionalidad']=="Taiwán") echo 'selected="selected"'; ?>id="TW">Taiwán</option>
                <option value="Tanzania" <?php if($row['nacionalidad']=="Tanzania") echo 'selected="selected"'; ?>id="TZ">Tanzania</option>
                <option value="Tayikistán" <?php if($row['nacionalidad']=="Tayikistán") echo 'selected="selected"'; ?>id="TJ">Tayikistán</option>
                <option value="Territorios británicos del océano Indico" <?php if($row['nacionalidad']=="Territorios británicos del océano Indico") echo 'selected="selected"'; ?>id="IO">Territorios británicos del océano Indico</option>
                <option value="Territorios franceses del sur" <?php if($row['nacionalidad']=="Territorios franceses del sur") echo 'selected="selected"'; ?>id="TF">Territorios franceses del sur</option>
                <option value="Timor Oriental" <?php if($row['nacionalidad']=="Timor Oriental") echo 'selected="selected"'; ?>id="TP">Timor Oriental</option>
                <option value="Togo" <?php if($row['nacionalidad']=="Togo") echo 'selected="selected"'; ?>id="TG">Togo</option>
                <option value="Tonga" <?php if($row['nacionalidad']=="Tonga") echo 'selected="selected"'; ?>id="TO">Tonga</option>
                <option value="Trinidad y Tobago" <?php if($row['nacionalidad']=="Trinidad y Tobago") echo 'selected="selected"'; ?>id="TT">Trinidad y Tobago</option>
                <option value="Túnez" <?php if($row['nacionalidad']=="Túnez") echo 'selected="selected"'; ?>id="TN">Túnez</option>
                <option value="Turkmenistán" <?php if($row['nacionalidad']=="Turkmenistán") echo 'selected="selected"'; ?>id="TM">Turkmenistán</option>
                <option value="Turquía" <?php if($row['nacionalidad']=="Turquía") echo 'selected="selected"'; ?>id="TR">Turquía</option>
                <option value="Tuvalu" <?php if($row['nacionalidad']=="Tuvalu") echo 'selected="selected"'; ?>id="TV">Tuvalu</option>
                <option value="Ucrania" <?php if($row['nacionalidad']=="Ucrania") echo 'selected="selected"'; ?>id="UA">Ucrania</option>
                <option value="Uganda" <?php if($row['nacionalidad']=="Uganda") echo 'selected="selected"'; ?>id="UG">Uganda</option>
                <option value="Uruguay" <?php if($row['nacionalidad']=="Uruguay") echo 'selected="selected"'; ?>id="UY">Uruguay</option>
                <option value="Uzbekistán" <?php if($row['nacionalidad']=="Uzbekistán") echo 'selected="selected"'; ?>id="UZ">Uzbekistán</option>
                <option value="Vanuatu" <?php if($row['nacionalidad']=="Vanuatu") echo 'selected="selected"'; ?>id="VU">Vanuatu</option>
                <option value="Venezuela" <?php if($row['nacionalidad']=="Venezuela") echo 'selected="selected"'; ?>id="VE">Venezuela</option>
                <option value="Vietnam" <?php if($row['nacionalidad']=="Vietnam") echo 'selected="selected"'; ?>id="VN">Vietnam</option>
                <option value="Wallis y Futuna" <?php if($row['nacionalidad']=="Wallis y Futuna") echo 'selected="selected"'; ?>id="WF">Wallis y Futuna</option>
                <option value="Yemen" <?php if($row['nacionalidad']=="Yemen") echo 'selected="selected"'; ?>id="YE">Yemen</option>
                <option value="Zambia" <?php if($row['nacionalidad']=="Zambia") echo 'selected="selected"'; ?>id="ZM">Zambia</option>
                <option value="Zimbabue" <?php if($row['nacionalidad']=="Zimbabue") echo 'selected="selected"'; ?>id="ZW">Zimbabue</option>
            </select>
            <br><br>
            </span><center> <label style="color:white"><h3>Campos Obligatorio</h3></label></center></h3>
            <br><br>
            <center>
            <button type="button" data-bs-toggle="modal" data-bs-target="#modalNuevoActor"><h3>Actualizar</h3></button>
            <br>
            <br>
            <button onclick="location.href='actores.php'" type="button"><h3>Regresar</h3></button>
           </center>
            <div class="modal fade" id="modalNuevoActor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Edición de Registro de Actor</h5>
                    </div>
                    <div class="modal-body">
                      El registro de <?php echo $row['nombre']; ?> será editado permanentemente
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-outline-success">Entendido</button>
                    </div>
                  </div>
                </div>
            </div>
        </form>
        <?php }?> 
    </body>
</html>