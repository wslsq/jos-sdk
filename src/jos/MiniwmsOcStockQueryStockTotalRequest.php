<?php

namespace Jos;

class MiniwmsOcStockQueryStockTotalRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.miniwms.oc.stock.queryStockTotal";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                    	                   			private $stationId;
    	                        
	public function setStationId($stationId){
		$this->stationId = $stationId;
         $this->apiParas["stationId"] = $stationId;
	}

	public function getStationId(){
	  return $this->stationId;
	}

                            }





        
 

