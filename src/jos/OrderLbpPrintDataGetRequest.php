<?php

namespace Jos;

class OrderLbpPrintDataGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.order.lbp.print.data.get";
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
                                                        		                                    	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                            }





        
 

