<? //não incluir essa linha
// Adicionar código no functions.php do tema.

// Ocultar admin bar front wordpress menos admin
function my_function_admin_bar($content) {
return ( current_user_can("administrator") ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// Ocultar admin bar front wordpress todos os usuários
function my_function_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

//não incluir essa linha ?>
