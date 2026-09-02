<?php

use Extended\ACF\Fields\Gallery;
use Extended\ACF\Fields\Repeater;
use Extended\ACF\Fields\Tab;
use Extended\ACF\Fields\WYSIWYGEditor;
use Extended\ACF\Location;

if (function_exists('register_extended_field_group')) {

    register_extended_field_group([
        'title' => 'Contenu de l\'article',
        'fields' => [
            Repeater::make('Répéteur de contenu', 'repeater_content')
                ->fields([
                    Tab::make('Contenu', 'tab_content'),
                    WYSIWYGEditor::make('Contenu', 'content'),
                    Tab::make('Images', 'tab_images'),
                    Gallery::make('Images', 'images')->format('id')->maxFiles(2),
                ])->layout('block')->minRows(1)->button('Ajouter un contenu'),
        ],
        'location' => [
            Location::where('post_type', '===', 'post'),
        ],
    ]);
}

