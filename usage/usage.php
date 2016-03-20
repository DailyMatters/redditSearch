<?php

use redditSearch\Searcher\Searcher;

include_once( '../src/Searcher.php' );

//Calling the storeSearch function search for 'composer' on the 'php' subreddit
storeSearch( 'php', 'composer', 'hot', 2);

/**
* This function will execute a search and store the result in a file called data.txt
*/
function storeSearch( $subreddit, $query, $options, $results ){

	echo '*** SEARCHING *** ';

	$search = new Searcher();
	$result = $search->execSearch( $subreddit, $query, $options, $results );

	file_put_contents( 'data.txt', $result, FILE_APPEND);

	/*$limit = json_decode( $result, true );
	var_dump( count($limit) );*/

	echo ' *** SEARCH COMPLETE ***';
}