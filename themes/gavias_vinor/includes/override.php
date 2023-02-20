<?php
function gavias_vinor_preprocess_views_view_unformatted__taxonomy_term(&$variables){
   $current_uri = \Drupal::request()->getRequestUri();
   $url = \Drupal::service('path.current')->getPath();
   $arg = explode('/', $url);
   $tid = 0;
   if ((isset($arg[1]) && $arg[1] ==  "taxonomy") && (isset($arg[2]) && $arg[2] == "term") && isset($arg[3]) && is_numeric($arg[3]) ) {
      $tid = $arg[3];
   }
   $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($tid);
   $layout = 'list';

   $columns = 3;
   try{
      $field = $term->get('field_category_layout');
      if(isset($field) && $field){
         $field = $field->getValue();
         if( isset($field[0]['value']) && $field[0]['value'] ){
            $layout = $field[0]['value'];
         }
      }
   }catch(Exception $e){
      $layout = 'list';
   }
   
   $item_class = '';
   if($layout == 'grid' || $layout == 'masonry' || $layout == 'small'){
      try{
         $field = $term->get('field_category_columns');
         if(isset($field) && $field){
            $field = $field->getValue();
            if( isset($field[0]['value']) && $field[0]['value'] ){
               $columns = $field[0]['value'];
            }
         }
      }catch(Exception $e){
         $columns = 3;
      }

      if ($columns == '1'){
         $item_class = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
      }else if($columns == 2){
         $item_class = 'col-lg-6 col-md-6 col-sm-6 col-xs-12';
      }else if($columns == 3){
         $item_class = 'col-lg-4 col-md-4 col-sm-4 col-xs-12';
      }else if($columns == 4){
         $item_class = 'col-lg-3 col-md-3 col-sm-6 col-xs-12';
      }else if($columns == 6){
         $item_class = 'col-lg-2 col-md-2 col-sm-6 col-xs-12';
      }
   }   
   if($layout=='masonry'){
      $item_class .= ' item-masory';
   }   
   $variables['gva_columns'] = $columns;
   $variables['gva_item_class'] = $item_class;

   $variables['gva_layout'] = $layout;
}

function gavias_vinor_preprocess_views_view_unformatted(&$variables) {
   $variables['title_prefix'] = '';
   $variables['title_suffix'] = '';
   $view = $variables['view'];
   $rows = $variables['rows'];
   $style = $view->style_plugin;
   $options = $style->options;
   $array_class = preg_split('/ /', $options['row_class']);
   if(in_array('gva-carousel-1', $array_class) ){
      $variables['gva_carousel']['class'] = 'owl-carousel init-carousel-owl';
      $variables['gva_carousel']['columns'] = '1';
   }
   if(in_array('gva-carousel-2', $array_class) ){
      $variables['gva_carousel']['class'] = 'owl-carousel init-carousel-owl';
      $variables['gva_carousel']['columns'] = '2';
   }
   if(in_array('gva-carousel-3', $array_class) ){
      $variables['gva_carousel']['class'] = 'owl-carousel init-carousel-owl';
      $variables['gva_carousel']['columns'] = '3';
   }
   if(in_array('gva-carousel-4', $array_class) ){
      $variables['gva_carousel']['class'] = 'owl-carousel init-carousel-owl';
      $variables['gva_carousel']['columns'] = '4';
   }
   if(in_array('gva-carousel-5', $array_class) ){
      $variables['gva_carousel']['class'] = 'owl-carousel init-carousel-owl';
      $variables['gva_carousel']['columns'] = '5';
   }
   if(in_array('gva-carousel-6', $array_class) ){
      $variables['gva_carousel']['class'] = 'owl-carousel init-carousel-owl';
      $variables['gva_carousel']['columns'] = '6';
   }
   if(in_array('gva-carousel-7', $array_class) ){
      $variables['gva_carousel']['class'] = 'owl-carousel init-carousel-owl';
      $variables['gva_carousel']['columns'] = '7';
   }
   if(in_array('gva-carousel-8', $array_class) ){
      $variables['gva_carousel']['class'] = 'owl-carousel init-carousel-owl';
      $variables['gva_carousel']['columns'] = '8';
   }
}

function gavias_vinor_preprocess_username(&$variables){
   $account = $variables['account'];
   if($account->hasField('field_full_name')){
      $field_full_name = $account->get('field_full_name');
      $field_full_name = $field_full_name->getValue();
      $variables['name'] = $field_full_name[0]['value'];
   }
}

function gavias_vinor_preprocess_views_view_grid(&$variables) {
   $view = $variables['view'];
   $rows = $variables['rows'];
   $style = $view->style_plugin;
   $options = $style->options;
   $variables['gva_masonry']['class'] = '';
   $variables['gva_masonry']['class_item'] = '';
   $array_class = preg_split('/ /', $options['row_class_custom']);
   if(in_array('masonry', $array_class) ){
      $variables['gva_masonry']['class'] = 'post-masonry-style row';
      $variables['gva_masonry']['class_item'] = 'item-masory';
   }
}
