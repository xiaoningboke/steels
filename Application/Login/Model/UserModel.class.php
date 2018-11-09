<?php
namespace Login\Model;
use Think\Model;
class UserModel extends Model {
	
	public function findUser($number){
		$user = M("User");
		$map['number'] =array('like','%'.$number.'%');
		$data = $user->where($map)->find();
		return $data;
	}

}