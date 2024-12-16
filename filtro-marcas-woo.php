<?php
$categories = get_categories( 'taxonomy=pwb-brand' );

$select = "<select name='cat' id='cat' class='postform'>n";
$select .= "<option value='-1'>Filtrar por marca</option>n";

foreach ( $categories as $category ) {
    if ( $category->count > 0 ) {
        $select .= "<option value='".$category->slug."'>".$category->name.'</option>';
    }
}

$select .= '</select>';

echo $select;

echo '<script type="text/javascript"><!--
var dropdown = document.getElementById("cat");
function onCatChange() {
	if ( dropdown.options[dropdown.selectedIndex].value != -1 ) {
		location.href = "http://servostratores.lab82/marcas/"+dropdown.options[dropdown.selectedIndex].value+"/";
	}
}
dropdown.onchange = onCatChange;
-->
</script>';
?>