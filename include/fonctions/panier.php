<?php
function panier ($array, $id, $qte) {
array_push($GLOBALS['basket'], array('id' => $id, 'qte' => $qte));

return $GLOBALS['basket'];
}
?>