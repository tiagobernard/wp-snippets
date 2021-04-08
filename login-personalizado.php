<? //não incluir essa linha
// Logo customizada na pagina de login (admin)
// Adicione no arquivo functions.php do tema
// Personalizar de acordo com o perfil do projeto

function cutom_login_logo() {
echo "<style type=\"text/css\">
body.login {background:#ffffff!important; height:auto; margin: 0; background-size:100%;}
#login {padding: 3% 0 0!important;}
body.login div#login h1 a {
background-image: url(".get_bloginfo('template_directory')."/images/logo.png);
-webkit-background-size: 95%;
background-size: 95%;
margin: 0 auto;
width: 294px;
height:43px;
background-color:#fff;
}
#backtoblog {margin: 0 0!important; padding-bottom:30px!important;}
</style>";
}

add_action( 'login_enqueue_scripts', 'cutom_login_logo' );
add_filter('login_headerurl', create_function('', 'return "https://www.enderecodosite.com.br";'));
add_filter('login_headertitle', create_function('', 'return "Nome do Site";'));

//não incluir essa linha ?>
