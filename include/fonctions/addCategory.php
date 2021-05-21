<?php
function addCategory ($category, $nom, $description, $image) {
  $array = array(array('nom' => "$nom", 'description' => "$description", 'image' => "$image"));
  $result = array_merge($category, $array);
  for ($i = 0; $i < count($result); $i++) :
    $result[$i]['id']=$i;
  endfor;
  return $result;

};
?>