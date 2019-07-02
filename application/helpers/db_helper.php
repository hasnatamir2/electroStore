<?php
/*
*
*   Get categories
*
*/
function get_categories(){
    $CI = get_instance();
    $categories = $CI->Product_model->get_categories();
    return $categories;
}

/*
*   Get sidebar most popular
*/
function get_popular(){
    $CI = get_instance();
    $CI->load->model('Product_model');
    $popular_product = $CI->Product_model->get_popular();
    return $popular_product;
}