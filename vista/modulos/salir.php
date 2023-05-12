<?php

/*Eliminar la cookie*/
// setcookie("tkn","",time() - 60,"/tiendita2/");

session_destroy();

echo "<script>

	document.cookie = 'tkn=; max-age=0; path=/tiendita2/';

  window.location= 'login';

</script>";

 ?>