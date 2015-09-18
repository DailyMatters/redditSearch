<?php

use redditSearch\Searcher\Searcher;

class SearcherTest extends PHPUnit_Framework_TestCase {
	
	public function testNotEmpty(){
		
		$search = new Searcher();
		$result = $search->execSearch( "yolo", "yolo" );
		$this->assertNotEmpty( $search );
		
	}
	
}