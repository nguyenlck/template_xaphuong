<?php
use Drupal\Core\Url;


function gavias_vinor_preprocess_node(&$variables) {
  $date = $variables['node']->getCreatedTime();
  $variables['date'] = date( 'j', $date) . ' ' . t(date( 'F', $date)) . ' ' . date( 'Y', $date);

  if ($variables['teaser'] || !empty($variables['content']['comments']['comment_form'])) {
    unset($variables['content']['links']['comment']['#links']['comment-add']);
  }
  if ($variables['node']->getType() == 'article') {
      $node = $variables['node'];
      if($node->hasField('comment')){
        $variables['comment_count'] = $node->get('comment')->comment_count;
      }
      $post_format = 'standard';
      try{
         $field_post_format = $node->get('field_post_format');
         if(isset($field_post_format->value) && $field_post_format->value){
            $post_format = $field_post_format->value;
         }
      }catch(Exception $e){
         $post_format = 'standard';
      }

      $iframe = '';
      if($post_format == 'video' || $post_format == 'audio'){
         try{
            $field_post_embed = $node->get('field_post_embed');
            if(isset($field_post_embed->value) && $field_post_embed->value){
               $autoembed = new AutoEmbed();
               $iframe = $autoembed->parse($field_post_embed->value);
            }else{
               $iframe = '';
               $post_format = 'standard';
            }
         }
         catch(Exception $e){
            $post_format = 'standard';
         }
      }
      $variables['gva_iframe'] = $iframe;
      $variables['post_format'] = $post_format;

    // video content type
  }elseif($variables['node']->getType() == 'video'){
    $iframe = '';
    $node = $variables['node'];
    try{
      $field_post_embed = $node->get('field_video_embed');
      if(isset($field_post_embed->value) && $field_post_embed->value){
        $autoembed = new AutoEmbed();
        $iframe = $autoembed->parse($field_post_embed->value);
      }else{
        $iframe = '';
      }
    }
    catch(Exception $e){
       $iframe = '';
    }
    $variables['gva_iframe'] = $iframe;
  }
}

function gavias_vinor_preprocess_node__article(&$variables) {
  $view_mode = $variables['view_mode']; 
  $allowed_view_modes = ['full']; 
  if(in_array($view_mode, $allowed_view_modes)) {
    $allowed_regions = ['related_content'];
    gavias_vinor_add_regions_to_node($allowed_regions, $variables);
  }
}

function gavias_vinor_preprocess_user(&$variables) {
  $allowed_regions = ['user_content'];
  gavias_vinor_add_regions_to_node($allowed_regions, $variables);
  
}

function gavias_vinor_preprocess_comment(&$variables){
   $date = $variables['comment']->getCreatedTime();
  $variables['created'] = date( 'j F Y', $date);
}

function gavias_vinor_preprocess_field(&$variables, $hook) {
  $element = $variables['element'];
}  

function gavias_vinor_preprocess_breadcrumb(&$variables){
  $variables['#cache']['max-age'] = 0;
  $request = \Drupal::request();
  $title = '';
  if ($route = $request->attributes->get(\Symfony\Cmf\Component\Routing\RouteObjectInterface::ROUTE_OBJECT)) {
    $title = \Drupal::service('title_resolver')->getTitle($request, $route);
  }

  if($variables['breadcrumb']){
     foreach ($variables['breadcrumb'] as $key => &$value) {
      if($value['text'] == 'Node'){
        unset($variables['breadcrumb'][$key]);
      }
    }

    if(($node = \Drupal::routeMatch()->getParameter('node')) && $variables['breadcrumb']){
      try{
        $field = $node->get('field_post_category');
        $field = $field->getValue();
         if( isset($field[0]['target_id']) && $field[0]['target_id'] ){
            $term = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($field[0]['target_id']);
            if($term){
              $variables['breadcrumb'][] = array(
                'text' => $term->get('name')->value,
                'url' => Url::fromRoute('entity.taxonomy_term.canonical', array('taxonomy_term'=>$field[0]['target_id']))->toString()
              );
            }  
         }
        
      }catch(Exception $e){

      }
    } 
   
    if(!empty($title)){
      $variables['breadcrumb'][] = array(
          'text' => ''
      );
      $variables['breadcrumb'][] = array(
          'text' => $title
      );
    }  
  }
}

