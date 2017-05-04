<?php

function unique_header() {
  $path = drupal_get_path_alias($_GET['q']);
  //Get root term from url alias
  $root_term = current(explode('/', $path));
  //Set header image based on first term in path
  if ($root_term == 'root-a') {
    $output = '<a href="http://placehold.it"><img src="http://placehold.it/1200x150/eeeeee/000000"></a>';
  }
  elseif ($root_term == 'root-b') {
    $output = '<a href="http://placehold.it"><img src="http://placehold.it/1200x150/000000/ffffff"></a>';
  }
  //Set default header for all other pages
  else {
    $output = '<a href="http://placehold.it"><img src="http://placehold.it/1200x50/cccccc/ffffff"></a>';
  }
  return $output;
}
