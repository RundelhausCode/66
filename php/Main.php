<?php
require 'rb.php';
R::setup('mysql:host=localhost;dbname=entest', 'root', 'rootlog');
    $w = R::dispense( 'whisky' );
    $w->name = 'Bowmore';
    $id = R::store( $w );

    class insert_mail{
        
    }
/*if ( isset( $opts['list'] ) ) {
    $bottles = R::find( 'whisky' );
    if ( !count( $bottles ) )
        die( "The cellar is empty!\n" );
    foreach( $bottles as $b ) {
        echo "* #{$b->id}: {$b->name}\n";
    }
    exit;
}*/

?>
