<?php
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

function custom_scripts(){
  wp_enqueue_script( 'custom_script', get_template_directory_uri() .'/js/custom.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts' , 'custom_scripts' );

function load_google_cdn() {
  if ( !is_admin() ){
    //jQueryを登録解除
    wp_deregister_script( 'jquery' );
    
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), NULL, false);
  }
}
add_action( 'init', 'load_google_cdn' );

function get_top_products($post_ids = []) {
  $res = '';
  
  foreach($post_ids as $post_id) {
    $res .= '<div class="col s12 m4">'
        .'<div class="card hoverable modal-trigger" data-target="product_'. $post_id .'">'
        .'    <div class="card-image">'
        .'        <img src="'. get_the_post_thumbnail_url($post_id, 'medium'). '" />'
        .'        <span class="card-title">'. get_the_title($post_id). '</span>'
        .'    </div>'
        .'</div>'
    .'</div>';
  }
  
  return $res;
}

function get_top_product_details($post_ids = []) {
  $res = '';
  
  foreach($post_ids as $post_id) {
    $productDevTools = get_field('product_develop_env');
    $attachments = get_children( array(
                    'orderby' => 'menu_order',
                    'order'=> 'ASC',
                    'post_parent' => $post_id,
                    'post_type' => 'attachment',
                    'post_mime_type' => 'image',
                  ));
                
    $res .= '<!-- '. get_the_title($post_id). '-->'
        .'<div id="product_'. $post_id. '" class="modal">'
        .'<div class="modal-content">'
        .'<div class="row">'
        .'<div class="col s12 m5">'
        .'<h4>'. get_the_title($post_id). '</h4>'
        .'<div class="description mb30">'
        . get_post_field('post_content', $post_id)
        .'<ul>';
        
    if(get_field('product_demo', $post_id)) {
      $res .= '<li><a href="'. get_field('product_demo', $post_id). '" target="_blank"><i class="fas fa-desktop"></i>Demo</a></li>';
    }
    
    if(get_field('product_github', $post_id)) {
      $res .= '<li><a href="'. get_field('product_github', $post_id). '" target="_blank"><i class="fab fa-github"></i>github</a></li>';
    }
    
    $res .= '</ul>'
         .'</div>';
         
     if(!empty($productDevTools)) {
       $res .= '<h5>開発環境</h5>'
            .'<div class="description">'
            .'<ul>';
            
        foreach($productDevTools as $productDevTool) {
          $res .= '<li>'. $productDevTool. '</li>';
        }
        
         $res .= '</ul>'
              .'</div>';
     }
     
     $res .= '</div>'
          .'<div class="col s12 m7">';
          
      if(!empty($attachments)) {
        $res .= '<ul class="modal_images">';
        
        foreach($attachments as $image) {
          $res .= '<li><img src="'. $image->guid. '" alt="'. $image->post_title. '" /></li>';
        }
        
        $res .= '</ul>';
      }
      
      $res .= '</div></div></div></div>';
  }
  
  return $res;
}