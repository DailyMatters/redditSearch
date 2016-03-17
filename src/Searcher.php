<?php

namespace redditSearch\Searcher;

class Searcher {

	/**
	* This method queries the reddit API for searches
	*
	* @param $query The term to search for
	* @param $options The search option ( 'new', 'hot', 'top', 'relevance', 'comments' )
	* @param $results The number of results to show ( The default is 25 but it can be less )
	*
	**/
	public function execSearch($query, $options, $results = 25) {

		//http://www.reddit.com/r/entrepreneur/search.json?q=" + searchString + "&sort=" + radioValue + "&limit=" + limitNumber
	
		//Checks if options are valid
		if ($this->validateOptions($options) !== false && $this->validateLimit($results) !== false) {

			$roundedResults = round( $results );
		
			//Executes a REST request to the reddit api (GET)
			$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "http://www.reddit.com/r/entrepreneur/search.json?q=" . $query . "&sort=" . $options . "&limit=" . $roundedResults);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_HEADER, 0);

			$curl_response = curl_exec($curl);
			curl_close($curl);
			
			return $curl_response;
		}
		else {
			return false;
		}
	}

	/**
	 * Checks if the option passed is valid, false in case it's not
	 */
	protected function validateOptions( $options ){

		$possible = array( 'new', 'hot', 'top', 'relevance', 'comments' );

		if( in_array( $options, $possible) ){
			return $options;
		} else{
			return false;
		}

	}
	
	/**
	 * Checks if the limit passed is valid
	 */
	protected function validateLimit( $limit ){
		
		if( is_integer( $limit )){
			return $limit;
		}else{
			return false;
		}
		
	}

}
