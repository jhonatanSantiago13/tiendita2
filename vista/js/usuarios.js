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





