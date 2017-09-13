<?php
/*
Plugin Name: WP Head
Description: Add content on WP Head
Version: 1.0
Author: Patrick FAUST
Author URI: https://lipaonline.com/
License: GPLv2+
*/

add_action('wp_head', 'hook_wp_head');

function hook_wp_head() {
    
    ob_start();

 ?>
        <!-- ici le code à ajouter dans Head
        Par exemple un code Google Analytics, un code de vérification Pinterest, régie de pub...
        Note: pour ajouter un script js, il vaut mieux faire autrement.. que l'on verra plus tard...


        -->
    <?php

$my_head = apply_filters('lipa_my_head', ob_get_clean());

echo $my_head;
    
    
   
}
