<? //não incluir essa linha
// Adicionar código no functions.php do tema.

/*REMOVE WIDGET EM BLOCO*/
// Desabilita o editor de bloco em widgets do plugin Gutenberg.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Desabilita o editor de bloco dos widgets. renomeado de wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );

//não incluir essa linha ?>
