
function validaFormLogin ( ) {
 var username = FormLogin.username.value;

 if(username ==""){
   alert('preencha o nome de usuario.');
   username.focus();
   return false;
 }
