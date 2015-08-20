<?php

  $artikels = array( 
                        array(  'id' => '1',
                                'title' => 'Titel van artikel 1',
                                'text' => 'Tekst van artikel 1',
                                'tags' => array('tag 1 van artikel 1'),
                        ),
                         
                        array(  'id' => '2',
                                'title' => 'Titel van artikel 2',
                                'text' => 'Tekst van artikel 2',
                                'tags' => array('tag 1 van artikel 2', 'tag 2 van artikel 2'),
                        ),
                         
                        array(  'id' => '3',
                                'title' => 'Titel van artikel 3',
                                'text' => 'Tekst van artikel 3',
                                'tags' => array('tag 1 van artikel 3', 'tag 2 van artikel 3', 'tag 3 van artikel 3'),
                        ),
                        );

  if ( isset( $_GET[ 'artikels' ] ) )
  {
    $artikel  = $artikels[ $_GET[ 'artikel' ] ];
  }

  include 'view/header-partial.html';
  if ( !isset( $_GET[ 'artikels' ] ) )
  {
    include 'view/body-partial.html';
  }
  else
  {
    include 'view/body-partial.html';
  }
  include 'view/footer-partial.html';

?>