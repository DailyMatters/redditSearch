<?php

use redditSearch\Searcher\Searcher;

class SearcherTest extends PHPUnit_Framework_TestCase {
	
	public function testNotEmpty(){
		
		$search = new Searcher();
		$result = $search->execSearch( "yolo", "new" );

		//Trying to output some results
		//fwrite(STDERR, print_r($result, TRUE));

		$this->assertNotEmpty( $result );
		
	}
	

	public function testNotValidOption(){
		
		$search = new Searcher();
		$result = $search->execSearch( "yolo", "yolo" );

		$this->assertEquals( $result, false );
		
	}

	public function testValidOption(){
		
		$search = new Searcher();
		$result = $search->execSearch( "yolo", "hot" );

		$this->assertNotEquals( $result, false );
		
	}
}