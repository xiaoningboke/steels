<?php
namespace Admin\Model;
use Think\Model;
class InformationModel extends Model {
	//查询信息表中的所有信息
	public function selInformation(){
		$information = M("Information");
		$data = $information->find();
		return $data;
	}
	//修改信息表中的信息
	public function exitInformation($data){
		$information = M("Information");
		$i = $information->where('id = 1')->save($data);
		return $i;
	}


}