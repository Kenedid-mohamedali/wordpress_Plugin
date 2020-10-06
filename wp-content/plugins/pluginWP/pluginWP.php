<?php   
/**
 * @package pluginWP
 * @version 1.0.0
 */
/*
Plugin Name: Mon pluginWP !
Plugin URI: https://github.com/Kenedid-mohamedali
Description: Un plugin WordPress pour dire Bonjour !
Author: Kénédid Mohamed Ali
Version: 1.0.0
Author URI: https://github.com/Kenedid-mohamedali
*/

add_action('wp_footer', 'say_hello');
add_filter('default_content', 'contenu_par_defaut');
add_filter('the_content', 'insererApresContenu');
add_shortcode('nouveauShortcode', 'gererShortcode');

function insererApresContenu($content){ 
    $content .= '<p> Bonjour ! Je suis du contenu insérer via un plugin WordPress !</p>';
    return $content;
}

function say_hello(){   
    echo('<p>Bonjour ! C\'est encore moi ! via mon plugin WP :)</p>');
}

function gerershortcode(){   
    echo('<p>Salut ! Moi je suis du shortcode, via le plugin WP aussi ;)</p>');
}

function contenu_par_defaut(){  
    return "Template par defaut

    Titre 1
            <p>lorem ipsum</p>
    Titre 2
            <p>lorem ipsum</p>
    Titre 3
            <p>lorem ipsum</p>";
}


?>