<?php
namespace Home\Controller;
use Think\Controller;

use Home\Model\ArticleModel;
use Home\Model\PictureModel;
use Home\Model\LiuyanModel;
use Home\Model\FileModel;

class ContentController extends CommonController {
    public function index(){
    	$classification = $_GET[classification];
    	$article = new ArticleModel();
    	$data = $article->selclassification($classification);
    	$this->assign('data',$data);
        $this->display();
    }

    //产品内容页
    public function product(){
    	$classification = $_GET[classification];
    	$fenlei = $_GET[fenlei];
    	$article = new ArticleModel();
    	$picture = new PictureModel();
    	$picdata = $picture->findPic($fenlei);
    	$data = $article->selclassification($classification);
    	$this->assign('picdata',$picdata);
    	$this->assign('data',$data);
        $this->display();
    }

    //新闻列表
    public function newsList(){
        $classification = $_GET[classification];
        if($classification == 6){
            $this->assign('title','钢管知识');
        }else if ($classification == 7) {
            $this->assign('title','行业动态');
        }else{
            $this->assign('title','热点资讯');
        }
        $article = new ArticleModel();
        $tuijian = $article->tuijian($classification);
        $this->assign('tuijian',$tuijian);

        $article = M('Article');//实例化Goods数据对象  Goods是你的表名
        //p是前台传值过来的参数，也就是页码
        if($_GET['p']==NULL){
            $p=1;
        }else{
            $p=$_GET['p'];
        }
        $list = $article->where("classification = $classification")->order('id desc')->page($p.',20')->select();// 查询满足要求的总记录数
        $this->assign('list',$list);// 赋值数据集
        $count = $article->count();
        $Page = new \Think\Page($count,20);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
    //新闻内容
    public function disNews(){
        $id = $_GET[id];
        $article = new ArticleModel();
        $data = $article->findId($id);
        $this->assign('data',$data);
        $this->display();
    }
    //联系方式
    public function lianxi(){
        $this->display();
    }
    //电子地图
    public function ditu(){
        $this->display();
    }
    //咨询建议
    public function zixun(){
        $this->display();
    }
    //接受提交的留言
    public function tijiaojianyi(){
        $data = $_POST;
        $liuyan = new LiuyanModel();
        $i = $liuyan->addCon($data);
        if($i>0){
            $this->success("留言成功");
        }else{
            $this->error("留言失败");
        }
    }
    //下载中心显示
    public function xiazai(){
        $file = new FileModel();
        $data = $file->xiazai();
        $tuijian = $file->tuijian();
        $this->assign("tuijian",$tuijian);
        $this->assign('data',$data);
        $this->display();
    }
    // 文件下载
    public function download(){
        $file = new FileModel();
        $id = $_GET[id];
        $fileuri = $file->findId($id)[fileuri];
        $file = './public/Uploads/'.$fileuri;   //下载文件存放目录  
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        }else{
            echo "文件不存在";
        }
 
    }

    //搜索功能
    public function sousuo(){
        $article = new ArticleModel();
        $ss = $_POST[ss];
        $data = $article->sousuo($ss);
        $this->assign("data",$data);
        $this->display();
    }

    //计算器
    public function jisuanqi(){
        $this->display();
    }

}