/*=============================================
/*=============================================
/*=============================================
/*=============================================
LOGIN
=============================================*/

const signin        = document.getElementById("signin");
const usernameLogin = document.getElementById("usernameLogin");
const passLogin     = document.getElementById("passLogin");
const rememberme    = document.getElementById("rememberme");

/*=============================================
CAMBIAR DE COLOR LOS INPUTS
=============================================*/

const cambiarColor = (caja, cadena)=>{

	/*Atrapar el color*/

	/*rojo  =  rgb(255, 0, 0)
	  verde = rgb(0, 128, 0)

	*/

	if (caja == "username") {

		const style = window.getComputedStyle(usernameLogin);
		const color = style.getPropertyValue('border-color');

		//cambiar de rojo a verde
		if (color == "rgb(255, 0, 0)") {

			usernameLogin.style.borderColor = 'green';

		//pasar de verde a rojo
		}else if (color == "rgb(0, 128, 0)" && cadena.length <=0 ) {

			usernameLogin.style.borderColor = 'red';

		}

	}else if (caja == "password") {

		const style = window.getComputedStyle(passLogin);
		const color = style.getPropertyValue('border-color');

		//cambiar de rojo a verde
		if (color == "rgb(255, 0, 0)") {

			passLogin.style.borderColor = 'green';

		//pasar de verde a rojo
		}else if (color == "rgb(0, 128, 0)" && cadena.length <=0 ) {

			passLogin.style.borderColor = 'red';

		}

	}

}

/*se hace este if para cuando el sistema n oeste en el formularuio
de lo gin no arroje un error y permita corteer el demas codigo JS*/

if (usernameLogin != null && passLogin != null) {

	usernameLogin.addEventListener("keyup", ()=>{

	let key    = usernameLogin.value;
	const caja = "username";

	cambiarColor(caja, key);

	})

	passLogin.addEventListener("keyup", ()=>{

   let   key  = passLogin.value;
   const caja = "password";

   cambiarColor(caja, key);

	})

}


/*=============================================
LOGIN
=============================================*/

const login = async (username, password, remember)=>{

	let datos = new FormData();

	datos.append("username", username);
	datos.append("password", password);
	datos.append("remember", remember);
	datos.append("logear", "si");

	const result = await fetch("ajax/usuarios.ajax.php",{

		method: "post",
		body: datos

	})

	const data = await result.text();

	// console.log("data", data);

	if (data == "ok"){

		 window.location = "inicio";

	}else{

		//error
		// swal("ERROR AL INTENTAR INICIAR SESIÓN!", "Los datos no cooinsiden, intentelo de nuevo!", "error");

		Swal.fire({
			  icon: 'error',
			  title: 'ERROR AL INTENTAR INICIAR SESIÓN!',
			  text: 'Los datos no cooinsiden, intentelo de nuevo!'

		})

		usernameLogin.style.borderColor = 'red';
		passLogin.style.borderColor = 'red';


	}

}

/*se hace este if para cuando el sistema n oeste en el formularuio
de lo gin no arroje un error y permita corteer el demas codigo JS*/

if (signin !=null) {

	signin.addEventListener("click", ()=>{

		const username = usernameLogin.value;
		const password = passLogin.value;
		const check    = rememberme.checked;

		if (username.length < 1) {

			Swal.fire({
				  icon: 'warning',
				  title: 'CAMPO VACIO!',
				  text: 'El campo username está vacio!'

			})

			usernameLogin.style.borderColor = 'red';

			const caja = "username";
		    cambiarColor(caja, username);

			return false;

		}else if (password.length < 1) {

			Swal.fire({
				  icon: 'warning',
				  title: 'CAMPO VACIO!',
				  text: 'El campo password está vacio!'

			})

			passLogin.style.borderColor = 'red';

			const caja = "password";
		    cambiarColor(caja, username);

			return false;

		}else{

			login (username, password, check);

		}

	})

} //end if signin

/*=============================================
SELECCION DE COLONIAS POR CODIGO POSTAL
=============================================*/

const getColonia = async(cp, estado, municipio, colonia) =>{

	let datos = new FormData();

	datos.append("cp", cp);
	datos.append("consultarCpCol", "si");

	const result = await fetch("ajax/usuarios.ajax.php",{

		method: "post",
		body: datos

	})

	const data = await result.json();


	// console.log("data", data);

	if (data["estado"] == "Sin Resultados"){

		document.getElementById(estado).value=data["estado"];
		document.getElementById(municipio).value=data["municipio"];



	}else{

		document.getElementById(estado).value=data["estado"];
		document.getElementById(municipio).value=data["municipio"];

		// console.log("estado", data.length);

		let colonias = `<option value="sn">Elige una Opción</option>`;

		// console.log("co", response["colonias"].length);

		for(let i = 0;  i< data["colonias"].length; i ++){

			// console.log("col", response["colonias"][i]);

			colonias += `<option value="${data["colonias"][i]}">${data["colonias"][i]}</option>`;

		}

		document.getElementById(colonia).innerHTML=`${colonias}`;

	}

}


// const cpAgregar = document.getElementById("cpAgregar");

/*if (cpAgregar != null) {

	cpAgregar.addEventListener("change", ()=>{

		const cp = cpAgregar.value;

		const municipio = "municipioAgregar";
		const estado 	= "estadoAgregar";
		const colonia 	= "coloniaAgregar";

		getColonia(cp, estado, municipio, colonia);


	})

}*/

/*=============================================
/*=============================================
/*=============================================
/*=============================================
BOTONES DE SIGUIENTE EN AGREGAR USUARIO
=============================================*/

let checkNombre   = false;
let checkApellido = false;
let checkFechaNac = false;
let checkCurp     = false;
let checkClaveIne = false;
let checkRfc      = false;
let checkCel 	  = false;
let checkTel      = false;
let checkMail     = false;

/*=============================================
CAMPO NOMBRE
=============================================*/

const nombreAgregar = document.getElementById("nombreAgregar");

if (nombreAgregar != null) {

	nombreAgregar.addEventListener("keyup", ()=>{

		const nombre = nombreAgregar.value;
		let icoOkNombre  = document.getElementById("icoOkNombre");


		// checkNombre(nombre);


		if (nombre.length <= 3){

			checkNombre = false;

			// console.log('es menor');
			// console.log("checkNombre", checkNombre);

			icoOkNombre.classList.remove("fa-check");
			icoOkNombre.classList.remove("text-success");

			icoOkNombre.classList.add("fa-times");
			icoOkNombre.classList.add("text-danger");

			nombreAgregar.style.borderColor = 'red';

			document.getElementById("layValNombre").innerHTML="El nombre es demasiado corto ";


		}else if (/\d/.test(nombre.trim())) {

			checkNombre = false;

			// console.log("tiene un numero");
			// console.log("checkNombre", checkNombre);


			icoOkNombre.classList.remove("fa-check");
			icoOkNombre.classList.remove("text-success");

			icoOkNombre.classList.add("fa-times");
			icoOkNombre.classList.add("text-danger");

			nombreAgregar.style.borderColor = 'red';

			document.getElementById("layValNombre").innerHTML="No se permiten numeros ";

		}else{

			checkNombre = true;

			icoOkNombre.classList.remove("fa-times");
			icoOkNombre.classList.remove("text-danger");

			icoOkNombre.classList.add("fa-check");
			icoOkNombre.classList.add("text-success");

			nombreAgregar.style.borderColor = 'green';

			document.getElementById("layValNombre").innerHTML="";

			// console.log("checkNombre", checkNombre);

		}

		// checkInputPersonal();

	})

}



/*=============================================
CAMPO APELLIDO
=============================================*/

const apellidoAgregar = document.getElementById("apellidoAgregar");

if (apellidoAgregar != null){

	apellidoAgregar.addEventListener("keyup", ()=>{

		const apellido = apellidoAgregar.value;
		let icoOkApeliido  = document.getElementById("icoOkApeliido");

		if (apellido.length <= 3){

			checkApellido = false;

			// console.log('es menor');
			// console.log("checkApellido", checkApellido);

			icoOkApellido.classList.remove("fa-check");
			icoOkApellido.classList.remove("text-success");

			icoOkApellido.classList.add("fa-times");
			icoOkApellido.classList.add("text-danger");

			apellidoAgregar.style.borderColor = 'red';

			document.getElementById("layValApellido").innerHTML="El nombre es demasiado corto";


		}else if (/\d/.test(apellido.trim())) {

			checkApellido = false;

			// console.log("tiene un numero");
			// console.log("checkApellido", checkApellido);


			icoOkApellido.classList.remove("fa-check");
			icoOkApellido.classList.remove("text-success");

			icoOkApellido.classList.add("fa-times");
			icoOkApellido.classList.add("text-danger");

			apellidoAgregar.style.borderColor = 'red';

			document.getElementById("layValApellido").innerHTML="No se permiten numeros";

		}else{

			checkApellido = true;

			icoOkApellido.classList.remove("fa-times");
			icoOkApellido.classList.remove("text-danger");

			icoOkApellido.classList.add("fa-check");
			icoOkApellido.classList.add("text-success");

			apellidoAgregar.style.borderColor = 'green';

			document.getElementById("layValApellido").innerHTML="";

			console.log("checkApellido", checkApellido);

		}

		// checkInputPersonal();

	})


}



/*=============================================
CAMPO FECHA DE NACIMIENTO
=============================================*/

const validarFormatoFecha = (campo) =>{

	const RegExPattern = /^\d{2,4}\/\d{1,2}\/\d{1,2}$/;

	campo = campo.replace("-", "/").replace("-", "/");


    if ((campo.match(RegExPattern)) && (campo!='')) {

    		const today = new Date();
			const year = today.getFullYear();

			const minYear = Number(year) - 80;

			let myYear = Number(campo.substr(0, 4));



			if (myYear <= minYear){

				return false;

			}else{

				return true;

			}

      } else {

            return false;

    }

}

const fechaNacAgregar = document.getElementById("fechaNacAgregar");

	if (fechaNacAgregar != null) {

	fechaNacAgregar.addEventListener("change", ()=>{

		let icoOkFechaNac  = document.getElementById("icoOkFechaNac");

		// console.log('validarFormatoFecha', validarFormatoFecha(fechaNacAgregar.value));

		// console.log("fechaNacAgregar", fechaNacAgregar.value);



		if (!validarFormatoFecha(fechaNacAgregar.value)){

			checkFechaNac = false;


			icoOkFechaNac.classList.remove("fa-check");
			icoOkFechaNac.classList.remove("text-success");

			icoOkFechaNac.classList.add("fa-times");
			icoOkFechaNac.classList.add("text-danger");

			fechaNacAgregar.style.borderColor = 'red';

			document.getElementById("layValFechaNac").innerHTML="Formato de fecha invalido";

		}else{

			checkFechaNac = true;

			icoOkFechaNac.classList.remove("fa-times");
			icoOkFechaNac.classList.remove("text-danger");

			icoOkFechaNac.classList.add("fa-check");
			icoOkFechaNac.classList.add("text-success");

			fechaNacAgregar.style.borderColor = 'green';

			document.getElementById("layValFechaNac").innerHTML="";

		}

		// checkInputPersonal();

	})


}

/*=============================================
CAMPO PARA VALIDAR CURP
=============================================*/

const validarCurp = (curp) =>{

		let re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

        if (!validado)  //Coincide con el formato general?
    	return false;

    	//Validar que coincida el dígito verificador

    	const digitoVerificador = (curp17) =>{

    		//Fuente https://consultas.curp.gob.mx/CurpSP/
	        let diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
	            lngSuma      = 0.0,
	            lngDigito    = 0.0;

	        for(let i=0; i<17; i++)
	            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
	        lngDigito = 10 - lngSuma % 10;
	        if (lngDigito == 10) return 0;
	        return lngDigito;

    	}

    	if (validado[2] != digitoVerificador(validado[1]))
    	return false;

    	return true; //Validado

}

const curpAgregar = document.getElementById("curpAgregar");

if (curpAgregar != null) {

	curpAgregar.addEventListener("keyup", ()=>{

		let icoOkCurp  = document.getElementById("icoOkCurp");

		const curp = curpAgregar.value;

		/*console.log("curp", curp);

		console.log("validarCurp", validarCurp(curp));*/

		if (!validarCurp(curp)) {

			checkCurp = false;

			icoOkCurp.classList.remove("fa-check");
			icoOkCurp.classList.remove("text-success");

			icoOkCurp.classList.add("fa-times");
			icoOkCurp.classList.add("text-danger");

			curpAgregar.style.borderColor = 'red';

			document.getElementById("layValCurp").innerHTML="No se permiten numeros";

		}else{

			checkCurp = true;

			icoOkCurp.classList.remove("fa-times");
			icoOkCurp.classList.remove("text-danger");

			icoOkCurp.classList.add("fa-check");
			icoOkCurp.classList.add("text-success");

			curpAgregar.style.borderColor = 'green';

			document.getElementById("layValCurp").innerHTML="";

		}

		// checkInputPersonal();

	})

}



/*=============================================
CAMPO PARA VALIDAR CLAVE INE
=============================================*/

const claveIneAgregar = document.getElementById("claveIneAgregar");

if (claveIneAgregar != null){

	claveIneAgregar.addEventListener("keyup", ()=>{


	const icoOkClaveIne = document.getElementById("icoOkClaveIne");

		const clave     = claveIneAgregar.value;
		const expresion = "^[0-9]+$";

		if (clave.match(expresion) == null){

			checkClaveIne = false;

			icoOkClaveIne.classList.remove("fa-check");
			icoOkClaveIne.classList.remove("text-success");

			icoOkClaveIne.classList.add("fa-times");
			icoOkClaveIne.classList.add("text-danger");

			claveIneAgregar.style.borderColor = 'red';

			document.getElementById("layValClaveIne").innerHTML="Solo se permiten números";

		}else if (clave.length < 10) {

			checkClaveIne = false;

			icoOkClaveIne.classList.remove("fa-check");
			icoOkClaveIne.classList.remove("text-success");

			icoOkClaveIne.classList.add("fa-times");
			icoOkClaveIne.classList.add("text-danger");

			claveIneAgregar.style.borderColor = 'red';

			document.getElementById("layValClaveIne").innerHTML="clave muy pequeña";

		}else if (clave.length > 10) {

			checkClaveIne = false;

			icoOkClaveIne.classList.remove("fa-check");
			icoOkClaveIne.classList.remove("text-success");

			icoOkClaveIne.classList.add("fa-times");
			icoOkClaveIne.classList.add("text-danger");

			claveIneAgregar.style.borderColor = 'red';

			document.getElementById("layValClaveIne").innerHTML="solo se permiten 10 dígitos";

		}else{

			checkClaveIne = true;

			icoOkClaveIne.classList.remove("fa-times");
			icoOkClaveIne.classList.remove("text-danger");

			icoOkClaveIne.classList.add("fa-check");
			icoOkClaveIne.classList.add("text-success");

			claveIneAgregar.style.borderColor = 'green';

			document.getElementById("layValClaveIne").innerHTML="";

		}

		// checkInputPersonal();

	})

}


/*=============================================
CAMPO PARA VALIDAR RFC
=============================================*/

const validarRfc = (rfc)=>{

	const re     = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
    let validado = rfc.match(re);

    const aceptarGenerico = true;

    if (!validado)  //Coincide con el formato general del regex?
        return false;

    //Separar el dígito verificador del resto del RFC
    const digitoVerificador = validado.pop();
    const rfcSinDigito      = validado.slice(1).join('');
    const len               = rfcSinDigito.length;

    //Obtener el digito esperado
    const diccionario       = "0123456789ABCDEFGHIJKLMN&OPQRSTUVWXYZ Ñ";
    const indice            = len + 1;
    let   suma,
          digitoEsperado;

    if (len == 12) suma = 0
    else suma = 481; //Ajuste para persona moral

	 for(var i=0; i<len; i++)
        suma += diccionario.indexOf(rfcSinDigito.charAt(i)) * (indice - i);
    digitoEsperado = 11 - suma % 11;
    if (digitoEsperado == 11) digitoEsperado = 0;
    else if (digitoEsperado == 10) digitoEsperado = "A";

    //El dígito verificador coincide con el esperado?
    // o es un RFC Genérico (ventas a público general)?
    if ((digitoVerificador != digitoEsperado)
     && (!aceptarGenerico || rfcSinDigito + digitoVerificador != "XAXX010101000"))
        return false;
    else if (!aceptarGenerico && rfcSinDigito + digitoVerificador == "XEXX010101000")
        return false;
    // return rfcSinDigito + digitoVerificador;
    return true;


}

const rfcAgregar = document.getElementById("rfcAgregar");

if (rfcAgregar != null) {

	rfcAgregar.addEventListener("keyup", ()=>{

		const rfc      = rfcAgregar.value;
		const icoOkRfc = document.getElementById("icoOkRfc");

		if (!validarRfc(rfc)) {

			checkRfc = false;

			icoOkRfc.classList.remove("fa-check");
			icoOkRfc.classList.remove("text-success");

			icoOkRfc.classList.add("fa-times");
			icoOkRfc.classList.add("text-danger");

			rfcAgregar.style.borderColor = 'red';

			document.getElementById("layValRfc").innerHTML="RFC invalido";

		}else{

			checkRfc = true;

			icoOkRfc.classList.remove("fa-times");
			icoOkRfc.classList.remove("text-danger");

			icoOkRfc.classList.add("fa-check");
			icoOkRfc.classList.add("text-success");

			rfcAgregar.style.borderColor = 'green';

			document.getElementById("layValRfc").innerHTML="";

		}

		// checkInputPersonal();

	})

}


/*=============================================
CAMPO PARA VALIDAR TELEFONOS
=============================================*/

/*validarTel(valor=valor del campo, icoTel= icono de check o times, input= caja de texto, layVal=
el label delmensaje de error*/
const validarTel = (valor, icoOkTel, input, layVal) =>{

	const icoOk = document.getElementById(icoOkTel);

	const box = document.getElementById(input);

	let cadena = valor.split("-");

	for (let i = 0; i <=4; i++) {

		if (isNaN(cadena[i])){

			// console.log("cadena");

			icoOk.classList.remove("fa-check");
			icoOk.classList.remove("text-success");

			icoOk.classList.add("fa-times");
			icoOk.classList.add("text-danger");

			box.style.borderColor = 'red';

			document.getElementById(layVal).innerHTML="Formato invalido";

			if (input == "celularAgregar") {

				checkCel = false;

			}else if (input == "telefonoAgregar") {

				checkTel = false;

			}


		}else{

			// console.log("aaray", cadena[i]);

			icoOk.classList.remove("fa-times");
			icoOk.classList.remove("text-danger");

			icoOk.classList.add("fa-check");
			icoOk.classList.add("text-success");

			box.style.borderColor = 'green';
			document.getElementById(layVal).innerHTML="";

			if (input == "celularAgregar") {

				checkCel = true;

			}else if (input == "telefonoAgregar") {

				checkTel = true;

			}

		}

	}

}

const celularAgregar = document.getElementById("celularAgregar");

if (celularAgregar != null) {

	celularAgregar.addEventListener("keyup", ()=>{

		const valor    = celularAgregar.value;
		const icoOkTel = "icoOkTelcel";
		const input    = "celularAgregar";
		const layVal   = "layValTelcel";

		validarTel(valor, icoOkTel, input, layVal);
		// checkInputPersonal();

	})

}

const telefonoAgregar = document.getElementById("telefonoAgregar");

if (telefonoAgregar != null) {

	telefonoAgregar.addEventListener("keyup", ()=>{

		const valor    = telefonoAgregar.value;
		const icoOkTel = "icoOkTel";
		const input    = "telefonoAgregar";
		const layVal   = "layValTel";

		validarTel(valor, icoOkTel, input, layVal);
		// checkInputPersonal();

	})


}


/*=============================================
CAMPO PARA VALIDAR CORREO
=============================================*/
/*validarTel(valor=valor del campo, icoMail= icono de check o times, input= caja de texto, layVal=
el label delmensaje de error*/

const validarMail = (valor, icoOkMail, input, layVal) =>{

	const re     = "[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}";
    let validado = valor.match(re);
    const icoOk  = document.getElementById(icoOkMail);
	const box    = document.getElementById(input);

    if (!validado){

    		icoOk.classList.remove("fa-check");
			icoOk.classList.remove("text-success");

			icoOk.classList.add("fa-times");
			icoOk.classList.add("text-danger");

			box.style.borderColor = 'red';

			document.getElementById(layVal).innerHTML="Formato invalido";

			if (input == "correoAgregar"){

				checkMail = false;

			}

    }else{

    		icoOk.classList.remove("fa-times");
			icoOk.classList.remove("text-danger");

			icoOk.classList.add("fa-check");
			icoOk.classList.add("text-success");

			box.style.borderColor = 'green';
			document.getElementById(layVal).innerHTML="";

			if (input == "correoAgregar"){

				checkMail = true;

			}

    }

}

const correoAgregar = document.getElementById("correoAgregar");

if (correoAgregar != null) {

	correoAgregar.addEventListener("keyup", ()=>{

		const correo    = correoAgregar.value;
		const icoOkMail = "icoOkMail";
		const input     = "correoAgregar";
		const layVal    = "layValMail";

		validarMail(correo, icoOkMail, input, layVal);

		// checkInputPersonal();

	})

}


/*=============================================
BOTON DE SIGUIENTE PERSONAL
=============================================*/

const checkInputPersonal = () =>{

 	/*const nombreAgregar = document.getElementById("nombreAgregar").value;
 	const apellidoAgregar = document.getElementById("apellidoAgregar").value;
 	const fechaNacAgregar = document.getElementById("fechaNacAgregar").value;
 	const curpAgregar = document.getElementById("curpAgregar").value;
 	const claveIneAgregar = document.getElementById("claveIneAgregar").value;
 	const rfcAgregar = document.getElementById("rfcAgregar").value;
 	const celularAgregar = document.getElementById("celularAgregar").value;
 	const telefonoAgregar = document.getElementById("telefonoAgregar").value;
 	const correoAgregar = document.getElementById("correoAgregar").value;*/

 	if (checkNombre && checkApellido && checkFechaNac && checkCurp && checkClaveIne && checkRfc && checkCel &&
		checkTel && checkMail) {

 		const sigPersonalAgregar = document.getElementById("sigPersonalAgregar");

 		sigPersonalAgregar.classList.remove("btn-default");
 		sigPersonalAgregar.classList.remove("disabled");

 		sigPersonalAgregar.classList.add("btn-primary");

 		sigPersonalAgregar.setAttribute("onclick", "stepper.next()");



 	}else{

 		sigPersonalAgregar.classList.remove("btn-primary");

 		sigPersonalAgregar.classList.add("btn-default");
 		sigPersonalAgregar.classList.add("disabled");


 		sigPersonalAgregar.removeAttribute("onclick");

 	}

}


/*=============================================
/*=============================================
/*=============================================
/*=============================================
BOTONES DE SIGUIENTE EN AGREGAR DIRECCION
=============================================*/

let checkCp      = false;
let checkEstado  = false;
let checkMun     = false;
let checkColonia = false;
let checkCalle   = false;
let checkNumExt  = false;
let checkNumInt  = false;

/*=============================================
CAMPO CP
=============================================*/

const validarCp = (valor, icoOkCp, input, layVal) =>{

	const icoOk  = document.getElementById(icoOkCp);
	const box    = document.getElementById(input);

	if (isNaN(valor)) {

		// console.log("cadena");

		icoOk.classList.remove("fa-check");
		icoOk.classList.remove("text-success");

		icoOk.classList.add("fa-times");
		icoOk.classList.add("text-danger");

		box.style.borderColor = 'red';

		document.getElementById(layVal).innerHTML="Formato invalido";

		checkCp      = false;
		checkEstado  = false;
		checkMun     = false;
		checkColonia = false;

		return false;

	}else if (valor.length < 5) {

		// console.log("tamaño no valido");

		icoOk.classList.remove("fa-check");
		icoOk.classList.remove("text-success");

		icoOk.classList.add("fa-times");
		icoOk.classList.add("text-danger");

		box.style.borderColor = 'red';

		document.getElementById(layVal).innerHTML=" Código postal muy corto";

		checkCp      = false;
		checkEstado  = false;
		checkMun     = false;
		checkColonia = false;

		return false;

	}else if (valor.length > 5) {

		// console.log("tamaño no valido");

		icoOk.classList.remove("fa-check");
		icoOk.classList.remove("text-success");

		icoOk.classList.add("fa-times");
		icoOk.classList.add("text-danger");

		box.style.borderColor = 'red';

		document.getElementById(layVal).innerHTML=" Código postal no debe tener más 5 caracteres";

		checkCp      = false;
		checkEstado  = false;
		checkMun     = false;
		checkColonia = false;

		return false;

	}

	else if (!isNaN(valor) && valor.length == 5) {



		icoOk.classList.remove("fa-times");
		icoOk.classList.remove("text-danger");

		icoOk.classList.add("fa-check");
		icoOk.classList.add("text-success");

		box.style.borderColor = 'green';
		document.getElementById(layVal).innerHTML="";

		checkCp      = true;
		checkEstado  = true;
		checkMun     = true;
		// checkColonia = true;

		return true;

	}

}

const cpAgregarKeyup = document.getElementById("cpAgregar");

if (cpAgregarKeyup != null) {

	cpAgregarKeyup.addEventListener("keyup", ()=>{

			const cp      = cpAgregarKeyup.value;
		    const icoOkCp = "icoOkCp";
			const input   = "cpAgregar";
			const layVal  = "layValCp";

			if (validarCp(cp, icoOkCp, input, layVal)) {

				const municipio = "municipioAgregar";
				const estado 	= "estadoAgregar";
				const colonia 	= "coloniaAgregar";

				getColonia(cp, estado, municipio, colonia);


			}else{

				const municipio = "municipioAgregar";
				const estado 	= "estadoAgregar";
				const colonia 	= "coloniaAgregar";

				document.getElementById(municipio).value="";
				document.getElementById(estado).value="";
				document.getElementById(colonia).innerHTML=`<option value="sn">-----------</option>`;


			}

			checkInputDireccion();

	})

}

/*=============================================
CAMPO COLONIA
=============================================*/

const validarColonia = (valor, icoOkCol, input, layVal) =>{

	const icoOk  = document.getElementById(icoOkCol);
	const box    = document.getElementById(input);


	if (valor == "sn"){

		icoOk.classList.remove("fa-check");
		icoOk.classList.remove("text-success");

		icoOk.classList.add("fa-times");
		icoOk.classList.add("text-danger");

		box.style.borderColor = 'red';

		document.getElementById(layVal).innerHTML="Elije una Opción";

		checkColonia = false;

	}else{

		icoOk.classList.remove("fa-times");
		icoOk.classList.remove("text-danger");

		icoOk.classList.add("fa-check");
		icoOk.classList.add("text-success");

		box.style.borderColor = 'green';
		document.getElementById(layVal).innerHTML="";
		checkColonia = true;

	}

}

const coloniaAgregar = document.getElementById("coloniaAgregar");

if (coloniaAgregar != null){

	coloniaAgregar.addEventListener("change", ()=>{

		const valor    = document.getElementById("coloniaAgregar").value;
        const icoOkCol = "icoOkCol";
        const input    = "coloniaAgregar";
        const layVal   = "layValCol";

		validarColonia(valor, icoOkCol, input, layVal);

		checkInputDireccion();

	})

}

/*=============================================
CAMPO CALLE
=============================================*/

const validarCalleNumExtInt = (valor, ico, input, layVal, tipo) =>{

	const icoOk  = document.getElementById(ico);
	const box    = document.getElementById(input);

	let size = 0;

	if (tipo == "calle"){
		 size = 6;
	}else if (tipo == "ext") {
		 size = 3;
	}else if (tipo == "int") {
		 size = 2;
	}


	if (valor.length < size){

		icoOk.classList.remove("fa-check");
		icoOk.classList.remove("text-success");

		icoOk.classList.add("fa-times");
		icoOk.classList.add("text-danger");

		box.style.borderColor = 'red';

		document.getElementById(layVal).innerHTML="La calle es muy corta";

		if (tipo == "calle"){
			checkCalle = false;
		}else if (tipo == "ext") {
			checkNumExt = false;
		}else if (tipo == "int") {
			checkNumInt = false;
		}



	}else{

		icoOk.classList.remove("fa-times");
		icoOk.classList.remove("text-danger");

		icoOk.classList.add("fa-check");
		icoOk.classList.add("text-success");

		box.style.borderColor = 'green';
		document.getElementById(layVal).innerHTML="";

		if (tipo == "calle"){
			checkCalle = true;
		}else if (tipo == "ext") {
			checkNumExt = true;
		}else if (tipo == "int") {
			checkNumInt = true;
		}

	}

}
const calleAgregar = document.getElementById("calleAgregar");

if (calleAgregar != null){

	calleAgregar.addEventListener("keyup", ()=>{

		const calle = document.getElementById("calleAgregar").value;

		const icoOkCalle = "icoOkCalle";
		const input      = "calleAgregar";
		const layVal     = "layValCalle";

		validarCalleNumExtInt(calle, icoOkCalle, input, layVal, "calle");

		checkInputDireccion();

	})

}

/*=============================================
CAMPO NUM EXT
=============================================*/

const numExtAgregar = document.getElementById("numExtAgregar");

if (numExtAgregar != null) {

	numExtAgregar.addEventListener("keyup", ()=>{

		const valor = document.getElementById("numExtAgregar").value;

		const icoOkNumExt = "icoOkNumExt";
		const input      = "numExtAgregar";
		const layVal     = "layValNumExt";

		validarCalleNumExtInt(valor, icoOkNumExt, input, layVal, "ext");

		checkInputDireccion();

	})

}

/*=============================================
CAMPO NUM INT
=============================================*/

const numIntAgregar = document.getElementById("numIntAgregar");

if (numIntAgregar != null) {

	numIntAgregar.addEventListener("keyup", ()=>{

		const valor = document.getElementById("numIntAgregar").value;

		const icoOkNumInt = "icoOkNumInt";
		const input      = "numIntAgregar";
		const layVal     = "layValNumInt";

		validarCalleNumExtInt(valor, icoOkNumInt, input, layVal, "int");

		checkInputDireccion();

	})

}


/*=============================================
BOTON DE SIGUIENTE DIRECCION
=============================================*/

const checkInputDireccion = () =>{


 	if (checkCp && checkEstado && checkMun && checkColonia && checkCalle && checkNumExt && checkNumInt) {

 		const sigDireccionAgregar = document.getElementById("sigDireccionAgregar");

 		sigDireccionAgregar.classList.remove("btn-default");
 		sigDireccionAgregar.classList.remove("disabled");

 		sigDireccionAgregar.classList.add("btn-primary");

 		sigDireccionAgregar.setAttribute("onclick", "stepper.next()");



 	}else{

 		sigDireccionAgregar.classList.remove("btn-primary");

 		sigDireccionAgregar.classList.add("btn-default");
 		sigDireccionAgregar.classList.add("disabled");


 		sigDireccionAgregar.removeAttribute("onclick");

 	}

}