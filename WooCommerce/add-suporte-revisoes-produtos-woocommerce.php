<? //não adicionar essa linha. Adicione no arquivo functions.php do seu tema/tema filho

//Adicionar suporte de revisão a produtos WooCommerce
add_filter( 'woocommerce_register_post_type_product', 'lab82_add_revisao_produto' );

function lab82_add_revisao_produto( $supports ) {
     $supports['supports'][] = 'revisions';

     return $supports;
}

//não adicionar essa linha ?>
