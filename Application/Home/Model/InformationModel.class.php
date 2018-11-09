<?php
namespace Home\Model;
use Think\Model;
class InformationModel extends Model {

	public function selMessage(){
		$information = M("Information");
		$data = $information->find();
		return $data;
	}

	
}