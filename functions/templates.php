<?php

add_filter('template_include', 'anbieter_template');

function anbieter_template( $template ) {
  if ( is_post_type_archive('anbieter') ) {
    $theme_files = array('archive-anbieter.php', 'rating-posts/archive-anbieter.php');
    $exists_in_theme = locate_template($theme_files, false);
    if ( $exists_in_theme != '' ) {
      return $exists_in_theme;
    } else {
      return RP_PATH . 'templates/archive-anbieter.php';
    }
  }
  return $template;
}

add_filter('template_include', 'anbieter_taxonomy_template');

function anbieter_taxonomy_template( $template ) {
  if ( is_tax('anbieter_type') ) {
    $theme_files = array('taxonomy-anbieter_type.php', 'rating-posts/taxonomy-anbieter_type.php');
    $exists_in_theme = locate_template($theme_files, false);
    if ( $exists_in_theme != '' ) {
      return $exists_in_theme;
    } else {
      return RP_PATH . 'templates/taxonomy-anbieter_type.php';
    }
  }
  return $template;
}