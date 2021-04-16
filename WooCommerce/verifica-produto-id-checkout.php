<? //não adicionar essa linha

add_action( 'woocommerce_checkout_before_customer_details', 'lab82_verifica_produto_carrinho' );
function lab82_verifica_produto_carrinho() {
   $product_id = 1493; // ALTERAR PARA O ID DO PRODUTO EM QUESTÃO
   $product_cart_id = WC()->cart->generate_cart_id( $product_id );
   $in_cart = WC()->cart->find_product_in_cart( $product_cart_id );
   if ( $in_cart ) {
      echo 'CONTEÚDO PERSONALIZADO AQUI';
   }
}

//não adicionar essa linha ?>
