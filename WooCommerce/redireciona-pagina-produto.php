<? //não adicionar essa linha | Leia o README.md

//redireciona página do produto único
add_action( 'template_redirect', 'redireciona_produto_lab82', 100 );
function redireciona_produto_lab82() {
    if ( ! is_product() ) return;
    wp_redirect( get_site_url(null, '/slug-pagina-destino') );
    exit();
}

//não adicionar essa linha ?>
