<?php

namespace Jos;

class MiniwmsOcGoodsQuerySkusInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.miniwms.oc.goods.querySkusInfo";
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

                        	                   			private $sku;
    	                        
	public function setSku($sku){
		$this->sku = $sku;
         $this->apiParas["sku"] = $sku;
	}

	public function getSku(){
	  return $this->sku;
	}

                            }





        
 

