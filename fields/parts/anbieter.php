<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

$anbieter = new FieldsBuilder('anbieter');

$anbieter
    ->setLocation('post_type', '==', 'anbieter');
  
$anbieter
    ->addTab('Haupteinstellungen', ['placement' => 'left'])
        ->addUrl('ZumAngebot')
        ->addNumber('visit')
        ->addNumber('bewertung')
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
        ->addRepeater('rates', ['label'=>'Content'])
            ->addGroup('content', ['label'=> ''])
                ->addNumber('deineBewertung', ['label'=>'deineBewertung', 'min'=>1, 'max'=>5, 'wrapper'=>['width'=>'33%']])
                ->addNumber('kundenservice', ['label'=>'kundenservice', 'min'=>1, 'max'=>5, 'wrapper'=>['width'=>'33%']])
                ->addNumber('erreichbarkeit', ['label'=>'erreichbarkeit', 'min'=>1, 'max'=>5, 'wrapper'=>['width'=>'33%']])
                ->addNumber('preisLeistungsVerhaeltnis', ['label'=>'preisLeistungsVerhaeltnis', 'min'=>1, 'max'=>5, 'wrapper'=>['width'=>'33%']])
                ->addNumber('sicherheitZuverlae', ['label'=>'sicherheitZuverlae', 'min'=>1, 'max'=>5, 'wrapper'=>['width'=>'33%']])
                ->addNumber('bankWeiterempfehlen', ['label'=>'bankWeiterempfehlen', 'min'=>1, 'max'=>5, 'wrapper'=>['width'=>'33%']])
                ->addTextarea('message')
                ->addText('mail')
                ->addText('name')
                ->addText('produkt')
                ->addText('date')
            ->endGroup()
        ->endRepeater()
        ;

add_action('acf/init', function() use ($anbieter) {
   acf_add_local_field_group($anbieter->build());
});