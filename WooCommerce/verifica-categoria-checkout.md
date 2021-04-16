# verifica se o carrinho contém produtos de uma categoria específica
> ### usar no arquivo function.php do tema filho (*child theme*) ativo ou em um arquivo de *plugin*.

Verificar se um categoria de produtos específica está presente no carrinho do cliente no WooCommerce é muito útil se você deseja fazer *upsell* personalizado ou mostrar ao cliente uma mensagem personalizada para uma categoria específica quando estiver no checkut. Outro caso de uso é se você deseja mostrar uma forma de pagamento diferente para uma caegoria específica ou oferecer frete grátis.

Você pode alterar o *hook add_action* `'woocommerce_checkout_before_customer_details'` por outro e exibir o conteúdo em outros locais.
Abaixo está uma lista com ganchos de checkout WooCommerce.

### A página de check-out do WooCommerce tem os seguintes *hooks*:

1. woocommerce_before_checkout_form
1. woocommerce_checkout_before_customer_details
1. woocommerce_checkout_billing
1. woocommerce_before_checkout_billing_form
1. woocommerce_after_checkout_billing_form
1. woocommerce_before_checkout_registration_form
1. woocommerce_after_checkout_registration_form
1. woocommerce_checkout_shipping
1. woocommerce_before_checkout_shipping_form
1. woocommerce_after_checkout_shipping_form
1. woocommerce_before_order_notes
1. woocommerce_after_order_notes
1. woocommerce_checkout_after_customer_details
1. woocommerce_checkout_before_order_review_heading
1. woocommerce_checkout_order_review
1. woocommerce_checkout_before_order_review
1. woocommerce_review_order_before_cart_contents
1. woocommerce_review_order_after_cart_contents
1. woocommerce_review_order_before_shipping
1. woocommerce_review_order_after_shipping
1. woocommerce_review_order_before_order_total
1. woocommerce_review_order_after_order_total
1. woocommerce_review_order_before_payment
1. woocommerce_review_order_before_submit
1. woocommerce_review_order_after_submit
1. woocommerce_review_order_after_payment
1. woocommerce_checkout_after_order_review
1. woocommerce_after_checkout_form
