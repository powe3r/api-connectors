<?php
/**
 *  Copyright 2011 Wordnik, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */
class OrderApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  /**
	 * getOrders
	 * Get your orders.
   * symbol, string: Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series. (optional)

   * filter, object: Generic table filter. Send JSON key/value pairs, such as {&quot;key&quot;: &quot;value&quot;}. (optional)

   * columns, array[string]: Array of column names to fetch. If omitted, will return all columns. Note that this method will always return item keys, even when not specified, so you may receive more columns that you expect. (optional)

   * start, float: Starting point for results. (optional)

   * reverse, bool: If true, will sort results newest first. (optional)

   * startTime, DateTime: Starting date filter for results. (optional)

   * endTime, DateTime: Ending date filter for results. (optional)

   * count, float: Number of results to fetch. (optional)

   * @return Array[Order]
	 */

   public function getOrders($symbol=null, $filter=null, $columns=null, $start=null, $reverse=null, $startTime=null, $endTime=null, $count=null) {

  		//parse inputs
  		$resourcePath = "/order";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      if($symbol != null) {
  		  $queryParams['symbol'] = $this->apiClient->toQueryValue($symbol);
  		}
  		if($filter != null) {
  		  $queryParams['filter'] = $this->apiClient->toQueryValue($filter);
  		}
  		if($columns != null) {
  		  $queryParams['columns'] = $this->apiClient->toQueryValue($columns);
  		}
  		if($count != null) {
  		  $queryParams['count'] = $this->apiClient->toQueryValue($count);
  		}
  		if($start != null) {
  		  $queryParams['start'] = $this->apiClient->toQueryValue($start);
  		}
  		if($reverse != null) {
  		  $queryParams['reverse'] = $this->apiClient->toQueryValue($reverse);
  		}
  		if($startTime != null) {
  		  $queryParams['startTime'] = $this->apiClient->toQueryValue($startTime);
  		}
  		if($endTime != null) {
  		  $queryParams['endTime'] = $this->apiClient->toQueryValue($endTime);
  		}
  		//make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Array[Order]');
  		return $responseObject;

      }
  /**
	 * newOrder
	 * Create a new order.
   * symbol, string: Instrument symbol. (required)

   * quantity, float: Quantity. Use positive numbers to buy, negative to sell. (required)

   * price, float: Price to buy. (required)

   * ioc, bool: Set to true to place an immediateOrCancel order. (optional)

   * clOrdID, string: Optional Client Order ID to give this order. This ID will come back on any execution messages tied to this order. (optional)

   * @return Order
	 */

   public function newOrder($symbol, $quantity, $price, $ioc=null, $clOrdID=null) {

  		//parse inputs
  		$resourcePath = "/order";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      //make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Order');
  		return $responseObject;

      }
  /**
	 * cancelOrder
	 * Cancel order(s). Send multiple order IDs to cancel in bulk.
   * orderID, string: Order ID(s). (optional)

   * clOrdID, string: Client Order ID(s). See POST /order. (optional)

   * text, string: Optional cancellation annotation. e.g. 'Spread Exceeded' (optional)

   * @return Array[Order]
	 */

   public function cancelOrder($orderID=null, $clOrdID=null, $text=null) {

  		//parse inputs
  		$resourcePath = "/order";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "DELETE";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      //make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'Array[Order]');
  		return $responseObject;

      }
  /**
	 * cancelAllAfter
	 * Automatically cancel all your orders after a specified timeout.
   * timeout, float: Timeout in ms. Set to 0 to cancel this timer.  (required)

   * @return object
	 */

   public function cancelAllAfter($timeout) {

  		//parse inputs
  		$resourcePath = "/order/cancelAllAfter";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "POST";
      $queryParams = array();
      $headerParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = 'application/json';

      //make the API Call
      if (! isset($body)) {
        $body = null;
      }
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);


      if(! $response){
          return null;
        }

  		$responseObject = $this->apiClient->deserialize($response,
  		                                                'object');
  		return $responseObject;

      }
  

}
