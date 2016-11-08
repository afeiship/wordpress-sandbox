<?php

remove_theme_support( 'title-tag' );

function customize_title_tag(){
  switch (true) {
    case is_singular():
      printf('%s%s',the_title(),QP_SEO_TITLE_SUFFIX);
      break;
    case is_archive():
      printf('%s',get_bloginfo('name'));
      break;
  }
}
?>
