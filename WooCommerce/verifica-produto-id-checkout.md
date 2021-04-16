## verifica se o carrinho contém um produto específico por ID
> ### usar no arquivo function.php do tema filho (*child theme*) ativo ou em um arquivo de *plugin*.
#### :link: [ir para o código](https://github.com/tiagobernard/wp-tricks/blob/main/WooCommerce/verifica-produto-id-checkout.php)

Verificar se um produto está presente no carrinho do cliente no WooCommerce é muito útil se você deseja fazer *upsell* personalizado ou mostrar ao cliente uma mensagem personalizada para o produto específico quando estiver no checkut. Outro caso de uso é se você deseja mostrar uma forma de pagamento diferente para um produto específico ou oferecer frete grátis.

### como obter o ID do produto no WooCommerce
Ao editar um produto, dê uma olhada no url, ele se parecerá com:

Ex. `https://www.dominio.com.br/wp-admin/post.php?post=1493&action=edit` <br />
Perceba que o ID do produto é **1493**

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
