<?php

use redditSearch\Searcher\Searcher;

class SearcherTest extends PHPUnit_Framework_TestCase {
	
	public function testNotEmpty(){
		
		$search = new Searcher();
		$result = $search->execSearch( "yolo", "yolo" );

		//Trying to output some results
		//fwrite(STDERR, print_r($result, TRUE));

		$this->assertNotEmpty( $search );
		
	}
	
}