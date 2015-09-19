<?php

use search\Searcher\Searcher;

execute( "rafael", "yolo" );

function execute( $query, $order ){

	$search = new Searcher();
	$result = $search->execSearch( $query, $order );

	print_r( $result );

}