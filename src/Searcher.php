<?php

namespace search\Searcher;

class Searcher{

	public function execSearch( $query, $options ){

		//http://www.reddit.com/r/entrepreneur/search.json?q=" + searchString + "&sort=" + radioValue
	
		//Executes a REST request to the reddit api (GET)
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "http://www.reddit.com/r/entrepreneur/search.json?q=" . $query);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HEADER, 1);

		$curl_response = curl_exec($curl);
		
		return $curl_response;

	}

}