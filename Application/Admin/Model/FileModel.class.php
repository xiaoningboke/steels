<?php
namespace Admin\Model;
use Think\Model;
class FileModel extends Model {
	//添加文件信息
	public function addFile($data){
		$file = M("File");
		$i = $file->add($data);
		return $i;
	}
	//查询所有文件
	public function selFile(){
		$file = M("File");
		$data = $file->select();
		return $data;
	}
	//根据id改变
	public function filesetup($data){
		$id = $data[id];
		$file = M("File");
		$i = $file->where("id = $id")->save($data);
		return $i;
	}

	//根据id删除
	public function delfile($id){
		$file = M("File");
		$i = $file->where("id=$id")->delete(); 
		return $i;
	}
}