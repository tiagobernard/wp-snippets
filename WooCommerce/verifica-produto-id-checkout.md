# verifica se o carrinho contém um produto específico por ID
### usar no arquivo function.php do tema filho (*child theme*) ativo ou em um arquivo de *plugin*.

Verificar se um produto está presente no carrinho do cliente no WooCommerce é muito útil se você deseja fazer *upsell* personalizado ou mostrar ao cliente uma mensagem personalizada para o produto específico quando estiver no carrinho/checkut. Outro caso de uso é se você deseja mostrar uma forma de pagamento diferente para um produto específico ou oferecer frete grátis.

### como obter o ID do produto no WooCommerce
Ao editar um produto, dê uma olhada no url, ele se parecerá com:

Ex. `https://www.dominio.com.br/wp-admin/post.php?post=1493&action=edit` <br />
Perceba que o ID do produto é **1493**
