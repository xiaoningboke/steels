<?php
namespace Home\Model;
use Think\Model;
class FileModel extends Model {
	public function xiazai(){
		$file = M("File");
		$data = $file->select();
		return $data;
	}
	public function findId($id){
		$file = M("File");
		$data = $file->where("id=$id")->find();
		return $data;
	}
	public function tuijian(){
		$file = M("File");
		$data = $file->where("setup = 1")->select();
		return $data;
	}
}