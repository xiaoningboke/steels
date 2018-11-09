<?php
namespace Admin\Model;
use Think\Model;
class LiuyanModel extends Model {
	public function sel(){
		$liuyan = M("Liuyan");
		$data = $liuyan->select();
		return $data;
	}
}