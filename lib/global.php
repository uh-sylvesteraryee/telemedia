<?php

function asset_get($asset_name, $class = '') {
  echo '<img src="'.get_template_directory_uri().'/dist/images/'.$asset_name.'" class="'.$class.'">';
}

function asset_link_get($asset_name) {
  echo get_template_directory_uri().'/dist/images/'.$asset_name;
}
