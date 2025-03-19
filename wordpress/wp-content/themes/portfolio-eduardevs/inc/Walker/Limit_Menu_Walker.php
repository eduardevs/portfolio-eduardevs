<?php

namespace MyTheme\Walker;

use Walker_Nav_Menu;

class Limit_Menu_Walker extends Walker_Nav_Menu
{
    private $max_items;
    private $current_items = 0;

    public function __construct($max_items)
    {
        // error_log('Limit_Menu_Walker::__construct() called');
        // var_dump($max_items);
        // die(); // Check if this line is reached
        $this->max_items = $max_items;
    }


    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        if ($this->current_items >= $this->max_items) {
            return;
        }

        $this->current_items++;

        // Commence la balise <li>
        $output .= sprintf(
            '<li id="menu-item-%s" class="menu-item-%s nav-item mb-2">',
            esc_attr($item->ID),
            esc_attr($item->ID)
        );

        // Ajoute la balise <a> avec le lien et le titre
        $output .= sprintf(
            '<a href="%s" class="nav-link p-0 ">%s</a>',
            esc_url($item->url),
            esc_html($item->title) // Utilisez $item->title pour le titre de l'élément de menu
        );
    }

    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
        // Ferme la balise <li> si le nombre maximum d'éléments est atteint

        $output .= '</li>';

    }
}
