<?php

namespace Jos;

class PopLvyouDujiaOrderListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.order.list.get";
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
                                                        		                                    	                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

