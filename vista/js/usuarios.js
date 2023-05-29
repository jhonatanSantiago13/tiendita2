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

	console.log("data", data);

	document.getElementById(estado).value=data["estado"];
	document.getElementById(municipio).value=data["municipio"];

	let colonias = `<option value="sn">Elige una Opción</option>`;

	// console.log("co", response["colonias"].length);

	for(let i = 0;  i< data["colonias"].length; i ++){

		// console.log("col", response["colonias"][i]);

		colonias += `<option value="${data["colonias"][i]}">${data["colonias"][i]}</option>`;

	}

	document.getElementById(colonia).innerHTML=`${colonias}`;

}


const cpAgregar = document.getElementById("cpAgregar");

if (cpAgregar != null) {

	cpAgregar.addEventListener("change", ()=>{

		const cp = cpAgregar.value;

		const municipio = "municipioAgregar";
		const estado 	= "estadoAgregar";
		const colonia 	= "coloniaAgregar";

		getColonia(cp, estado, municipio, colonia);

	})

}

/*=============================================
/*=============================================
/*=============================================
/*=============================================
BOTONES DE SIGUIENTE EN AGREGAR USUARIO
=============================================*/

let checkNombre   = false;
let checkApellido = false;
let checkFechaNac = false;

/*=============================================
CAMPO NOMBRE
=============================================*/

const nombreAgregar = document.getElementById("nombreAgregar");

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

})

/*=============================================
CAMPO APELLIDO
=============================================*/

const apellidoAgregar = document.getElementById("apellidoAgregar");

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

})

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

})


/*fechaNacAgregar.addEventListener("keyup", ()=>{

	let fecha = fechaNacAgregar.value;

	console.log("fecha", validarFormatoFecha(fecha));



})*/




/*=============================================
BOTON DE SIGUIENTE PERSONAL
=============================================*/

const checkInputPersonal = () =>{

 	const nombreAgregar = document.getElementById("nombreAgregar").value;
 	const apellidoAgregar = document.getElementById("apellidoAgregar").value;
 	const fechaNacAgregar = document.getElementById("fechaNacAgregar").value;
 	const curpAgregar = document.getElementById("curpAgregar").value;
 	const claveIneAgregar = document.getElementById("claveIneAgregar").value;
 	const rfcAgregar = document.getElementById("rfcAgregar").value;
 	const celularAgregar = document.getElementById("celularAgregar").value;
 	const telefonoAgregar = document.getElementById("telefonoAgregar").value;
 	const correoAgregar = document.getElementById("correoAgregar").value;


}


const sigPersonalAgregar = document.getElementById("sigPersonalAgregar");

sigPersonalAgregar.addEventListener("click", ()=>{

});






