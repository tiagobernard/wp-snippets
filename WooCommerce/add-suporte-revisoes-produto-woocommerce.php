<? //não adicionar essa linha. Adicione no arquivo functions.php do seu tema/tema filho

//Adicionar suporte de revisão a produtos WooCommerce
add_filter( 'woocommerce_register_post_type_product', 'cinch_add_revision_support' );

function cinch_add_revision_support( $supports ) {
     $supports['supports'][] = 'revisions';

     return $supports;
}

//não adicionar essa linha ?>
