<?php
namespace Home\Model;
use Think\Model;
class LiuyanModel extends Model {
	//添加留言信息
	public function addCon($data){
		$liuyan = M("Liuyan");
		$i = $liuyan->add($data);
		return $i;
	}
}