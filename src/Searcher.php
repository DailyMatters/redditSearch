<?php

namespace search\Searcher;

public class Searcher{

	public function __construct( $query, $options ){
		$this->query = $query;
		$this->options = $options;
	}

	public function execSearch( $query, $options ){

		//Executes a REST request to the reddit api (GET)
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HEADER, 1);

		$curl_response = curl_exec($curl);

	}

}