<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\PictureModel;
use Home\Model\ArticleModel;


class IndexController extends CommonController  {
    public function index(){
    	$picture = new PictureModel();
    	$article = new ArticleModel();
    	$wufeng = $picture->findPicfore(1);
    	$jingmi = $picture->findPicfore(2);
    	$hejin = $picture->findPicfore(3);
    	$zidong = $picture->findPicfore(4);
    	$juchuang = $picture->findPicfore(5);
    	$daojiao = $picture->findPicfore(6);
    	$zhishi = $article->selnews(6);
    	$dongtai = $article->selnews(7);
        $redian = $article->selnews(17);

    	$this->assign('wufeng',$wufeng);
    	$this->assign('jingmi',$jingmi);
    	$this->assign('hejin',$hejin);
    	$this->assign('zidong',$zidong);
    	$this->assign('juchuang',$juchuang);
    	$this->assign('daojiao',$daojiao);
    	$this->assign('redian',$redian);
    	$this->assign('zhishi',$zhishi);
    	$this->assign('dongtai',$dongtai);
        $this->display();
    }
}