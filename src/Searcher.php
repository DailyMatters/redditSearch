<?php

namespace redditSearch\Searcher;

class Searcher {

	public function execSearch($query, $options) {

		//http://www.reddit.com/r/entrepreneur/search.json?q=" + searchString + "&sort=" + radioValue
	
		//Checks if options are valid
		if ($this->validateOptions($options) !== false) {

			//Executes a REST request to the reddit api (GET)
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://www.reddit.com/r/entrepreneur/search.json?q=" . $query . "&sort=" . $options);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_HEADER, 0);

			$curl_response = curl_exec($curl);
			
			return $curl_response;
		}
		else {
			return false;
		}
	}

	/**
	 * Checks if the option passed is valid, false n case it's not
	 */
	protected function validateOptions( $options ){

		$possible = array( 'new', 'hot', 'top', 'relevance', 'comments' );

		if( in_array( $options, $possible) ){
			return $options;
		} else{
			return false;
		}

	}

}