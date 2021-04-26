<? //não adicionar essa linha

add_action('woocommerce_checkout_before_customer_details', 'lab82_verifica_categoria_carrinho');
function lab82_verifica_categoria_carrinho()
{
	$cat_in_cart = false;
	foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
		if (has_term('CATEGORIA-DE-PRODUTO-AQUI', 'product_cat', $cart_item['product_id'])) {
			$cat_in_cart = true;
			break;
		}
	}
	// Se a categoria estiver no carrinho...
	if ($cat_in_cart) {
		echo 'CONTEÚDO PERSONALIZADO AQUI';
	}
}

//não adicionar essa linha ?>
