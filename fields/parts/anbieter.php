<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$anbieter = new FieldsBuilder('anbieter');

$anbieter
    ->setLocation('post_type', '==', 'anbieter');
  
$anbieter
    ->addTab('Haupteinstellungen', ['placement' => 'left'])
        ->addUrl('Link')
    ->addTab('Erfahrungen', ['placement' => 'left'])
        ->addTextarea('dsc', ['label'=>'Beschreibung', 'new_lines'=>'br'])
    ->addTab('Kundigen', ['placement' => 'side'])
        ->addWysiwyg('kundigen_dsc', ['label'=>'Kundigen', 'new_lines'=>'br'])
        ->addUrl('kundigen_link', ['label'=>'Link'])
        ->addRepeater('kundigen_content', ['label'=>'Content'])
            ->addGroup('content', ['label'=> ''])
                ->addText('title', ['label'=>'Title'])
                ->addWysiwyg('content', ['label'=>'Content', 'new_lines'=>'br'])
            ->endGroup()
        ->endRepeater()
    ->addTab('Bewerten', ['placement' => 'side'])
        ->addWysiwyg('bewerten_dsc', ['label'=>'Bewerten', 'new_lines'=>'br'])
        ->addUrl('bewerten_link', ['label'=>'Link'])   
        ;

add_action('acf/init', function() use ($anbieter) {
   acf_add_local_field_group($anbieter->build());
});