<? //não incluir essa linha
// Adicionar código no functions.php do tema principal ou tema filho

// remover notice update de um ou mais determinado plugin
//caso queira remover o notice update de apenas um plugin, remova a linha 9 e edite a linha 8.
//caso queira fazer em 3 plugins ou mais, acrescente uma ou mais linhas após a linha 9 e customize de acordo com sua realidade.
function lab82_remove_notice_update( $value ) {

    if ( isset( $value ) && is_object( $value ) ) {
        unset( $value->response[ 'hello.php' ] );
        unset( $value->response[ 'pasta-plugin/arquivo-principal.php' ] );
        unset( $value->response[ 'pasta-plugin-2/arquivo-principal.php']);
    }

    return $value;
}
add_filter( 'site_transient_update_plugins', 'lab82_remove_notice_update' );

//não incluir essa linha ?>
