<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	
	public function exitpassword($data){
		$number = $data[number];
		$map['number'] =array('like','%'.$number.'%');
		$user = M("User");
		$i = $user->where($map)->save($data);
		return $i;
	}

	public function findUser($number){
		$user = M("User");
		$data = $user->find($number);
		return $data;
	}

}