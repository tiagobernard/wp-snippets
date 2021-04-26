<? //não adicionar essa linha

//altera texto botão finalizar compra - checkout
add_filter( 'woocommerce_order_button_text', 'lab82_texto_botao_woo' ); 

function lab82_texto_botao_woo() {
    return __( 'NOVO TEXTO DO BOTÃO AQUI', 'woocommerce' );
}

//==================

// altera texto do botão "adicionar ao carrinho" de um produto específico na página do produto
add_filter( 'woocommerce_product_single_add_to_cart_text', 'lab82_texto_botao_produto_woo' ); 

function lab82_texto_botao_produto_woo( $text ) {
global $product;

// Se estiver na página única do produto ID "82"...
if ( 82 === $product->id ) {
   $text = 'NOVO TEXTO DO BOTÃO AQUI';
}
return $text;
}

// ==================

// Modifica o texto "Finalizar Compra" na página do checkout se um produto específico estiver no carrinho.

add_filter( 'woocommerce_order_button_text', 'lab82_texto_botao_produto_checkout_woo' );
function lab82_texto_botao_produto_checkout_woo() {

    // Defina aqui o ID do produto específico
    $specific_product_id = 82;
    $found = false;

    // Verifica cada item no carrinho
    foreach(WC()->cart->get_cart() as $cart_item)
        if($cart_item['product_id'] == $specific_product_id){
            $found = true; // encontra produto específico no carrinho
            break;
        }

    // Se o produto de ID 82 estiver no carrinho...
    if($found)
        return __( 'NOVO TEXTO DO BOTÃO AQUI', 'woocommerce' ); // Texto para quando o produto ID 82 estiver no carrinho
    else
        return __( 'Finalizar Compra', 'woocommerce' ); // Aqui o texto nornal
}

//não adicionar essa linha ?>
