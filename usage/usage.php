<?php

use redditSearch\Searcher\Searcher;

include_once( '../src/Searcher.php' );

//Calling the storeSearch function search for 'entrepreneur', the options are not yet implemented
storeSearch( 'entrepreneur', 'something' );

/**
* This function will execute a search and store the result in a file called data.txt
*/
function storeSearch( $query, $options ){

	echo '*** SEARCHING ***';

	$search = new Searcher();
	$result = $search->execSearch( $query, $options );

	file_put_contents( 'data.txt', $result, FILE_APPEND);

	echo '*** SEARCH COMPLETE ***';
}