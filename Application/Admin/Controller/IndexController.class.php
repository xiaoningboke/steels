<?php
namespace Admin\Controller;
use Think\Controller;

use Admin\Model\InformationModel;
use Admin\Model\ArticleModel;
use Admin\Model\PictureModel;
use Admin\Model\FileModel;
use Admin\Model\PhotoModel;
use Admin\Model\LiuyanModel;
use Admin\Model\UserModel;

class IndexController extends CommonController {
	
	
    public function index(){
        $this->display(); 
    }

    //网站配置
    public function setup(){
    	$information = new InformationModel();
    	$data = $information->selInformation();
    	$this->assign('data',$data);
    	$this->display();
    }

    //接受提交过来的网站配置
    public function exitInformation(){
    	$information = new InformationModel();
    	$data = $_POST;
    	$i = $information->exitInformation($data);
    	if($i>0){
    		$this->success("更新成功");
    	}else{
    		$thi->error("更新失败");
    	}
    }

    //公司简介
	public function jianjie(){
		$article = new ArticleModel();
		$data = $article->classificationSelect(1);
		$this->assign('data',$data);
		$this->display();
	}

	//接受公司简介的修改
	public function exitjianjie(){
		$data[id] = $_POST[id];
		$data[title] = $_POST[title];
		$data[content] = $_POST[content];
		$data[classification] = $_POST[classification];
		$article = new ArticleModel();
		$i = $article->exitArticle($data);
		$this->ajaxReturn($i);
	}

	//总经理致辞
	public function speech(){
		$article = new ArticleModel();
		$data = $article->classificationSelect(2);
		$this->assign('data',$data);
		$this->display();
	}


	//无缝钢管显示
	public function wufeng(){
		$article = new ArticleModel();
		$picture = new PictureModel();
		$picdata = $picture->findPic(1);
		$data = $article->classificationSelect(3);
		$this->assign('data',$data);
		$this->assign('picdata',$picdata);
		$this->display();
	}
	//精密钢管显示
	public function jingmi(){
		$article = new ArticleModel();
		$picture = new PictureModel();
		$picdata = $picture->findPic(2);
		$data = $article->classificationSelect(4);
		$this->assign('data',$data);
		$this->assign('picdata',$picdata);
		$this->display();
	}
	//合金钢管显示
	public function hejin(){
		$article = new ArticleModel();
		$picture = new PictureModel();
		$picdata = $picture->findPic(3);
		$data = $article->classificationSelect(5);
		$this->assign('data',$data);
		$this->assign('picdata',$picdata);
		$this->display();
	}
	//自动切割显示
	public function zidong(){
		$article = new ArticleModel();
		$picture = new PictureModel();
		$picdata = $picture->findPic(4);
		$data = $article->classificationSelect(8);
		$this->assign('data',$data);
		$this->assign('picdata',$picdata);
		$this->display();
	}
	//锯床切割显示
	public function juchuang(){
		$article = new ArticleModel();
		$picture = new PictureModel();
		$picdata = $picture->findPic(5);
		$data = $article->classificationSelect(9);
		$this->assign('data',$data);
		$this->assign('picdata',$picdata);
		$this->display();
	}
	//钢管倒角显示
	public function daojiao  (){
		$article = new ArticleModel();
		$picture = new PictureModel();
		$picdata = $picture->findPic(6);
		$data = $article->classificationSelect(10);
		$this->assign('data',$data);
		$this->assign('picdata',$picdata);
		$this->display();
	}
	//电力领域显示
	public function dianli  (){
		$article = new ArticleModel();
		$data = $article->classificationSelect(11);
		$this->assign('data',$data);
		$this->display();
	}
	//石化领域显示
	public function shihua  (){
		$article = new ArticleModel();
		$data = $article->classificationSelect(12);
		$this->assign('data',$data);
		$this->display();
	}

	//冶金领域显示
	public function yejin  (){
		$article = new ArticleModel();
		$data = $article->classificationSelect(13);
		$this->assign('data',$data);
		$this->display();
	}

	//机械领域显示
	public function jixie  (){
		$article = new ArticleModel();
		$data = $article->classificationSelect(14);
		$this->assign('data',$data);
		$this->display();
	}

	//机械领域显示
	public function qiche  (){
		$article = new ArticleModel();
		$data = $article->classificationSelect(15);
		$this->assign('data',$data);
		$this->display();
	}

	//其他领域显示
	public function qita  (){
		$article = new ArticleModel();
		$data = $article->classificationSelect(16);
		$this->assign('data',$data);
		$this->display();
	}
	//接受产品图片
	public function uppicture(){
		$data[picname] = $this->upload();
		$data[fenlei] = $_POST[fenlei];
		$picture = new PictureModel();
		$i = $picture->addPicture($data);
		if($i>0){
			$this->success("上传成功");
		}else{
			$this->error("上传失败");
		}
	}
	//删除产品图片
	public function delpicture(){
		$id = $_GET[id];
		$picture = new PictureModel();
		$i = $picture->delpicture($id);
		if($i>0){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}

	//发布新闻
	public function addNews(){
		$this->display();
	}
	//接受发布新闻
	public function addnewsCon(){
		$data[title] = $_POST[title];
		$data[time] = $_POST[time];
		$data[content] = $_POST[content];
		$data[settop] = $_POST[settop];
		$data[classification] = $_POST[classification];
		$article = new ArticleModel();
		$i = $article->addNews($data);
		$this->ajaxReturn($i);
	}
	//新闻列表
	public function newslist(){
		$article = new ArticleModel();
		$data = $article->selnews();
		$this->assign('data',$data);
		$this->display();
	}

	//显示修改新闻
	public function exitNews(){
		$article = new ArticleModel();
		$data = $article->findbyId($_GET[id]);
		$this->assign('data',$data);
		$this->display();
	}

	public function exitnewsCon(){
		$data[id] = $_POST[id];
		$data[title] = $_POST[title];
		$data[time] = $_POST[time];
		$data[content] = $_POST[content];
		$data[settop] = $_POST[settop];
		$data[classification] = $_POST[classification];
		$article = new ArticleModel();
		$i = $article->exitArticle($data);
		$this->ajaxReturn($i);
	}

	//显示文件上传的页面
	public function file(){
		$this->display();
	}

	//上传文件
	public function upfile(){
		$data[fileuri] = $this->upload();
		$data[filename] = $_POST[filename];
		$data[time] = $_POST[time];
		$data[settop] = $_POST[settop];
		$file = new FileModel();
		$i = $file->addFile($data);
		if($i>0){
			$this->success("上传成功");
		}else{
			$this->error("上传失败");
		}
	}
	//文件列表
	public function fileList(){
		$file = new FileModel();
		$data = $file->selFile();
		$this->assign('data',$data);
		$this->display();
	}

	//改变文件的置顶状态
	public function filesetup(){
		$data[id] = $_POST[id];
		$data[setup] = $_POST[setup];
		$file = new FileModel();
		$i = $file->filesetup($data);
		$this->ajaxReturn($i);
	}

	//根据id删除文件
	public function delfile(){
		$id = $_GET[id];
		$file = new FileModel();
		$i = $file->delfile($id);
		if ($i>0) {
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}

	//网站图片的管理
	public function picList(){
		$photo = new PhotoModel();
		$data = $photo->selPhoto();
		$this->assign('data',$data);
		$this->display();
	}

	//首页图片
	public function addphoto(){
		$data[title] = $_POST[title];
		$data[photouri] = $this->upload();
		$photo = M("Photo");
		$i = $photo->add($data);
		if($i>0){
			$this->success("成功");
		}else{
			$this->error("失败");
		}
	}

	//二级页面的图片
	public function uppictures(){
		$data[id] = $_POST[id];
		$data[photouri] = $this->upload();
		$article = new ArticleModel();
		$i = $article->exitArticle($data);
		if($i>0){
			$this->success("上传成功");
		}else{
			$this->error("上传失败");
		}
	}

	//网站图片更换
	public function exitPic(){
		$id = $_GET[id];
		$photo = new PhotoModel();
		$data = $photo->findId($id);
		$this->assign('data',$data);
		$this->display();
	}
	public function upphoto(){
		$data[id] = $_POST[id];
		$data[photouri] = $this->upload();
		$article = new PhotoModel();
		$i = $article->exitPhoto($data);
		if($i>0){
			$this->success("上传成功");
		}else{
			$this->error("上传失败");
		}
	}
	//修改密码
	public function dispassword(){
		  
		$this->display();
	}
	//修改密码数据
	public function exitpassword(){
		$oldpassword = md5(md5($_POST[oldpassword]));
		$newpassword = md5(md5($_POST[password]));
		$pas = new UserModel();
		$password = $pas->findUser(session('user')[number]);
		if($password == $oldpassword){
			$data[number] = session('user')[number];
			$data[password] = $newpassword;
			$i = $pas->exitpassword($data);
			if($i>0){
				$this->success("修改成功");
			}else{
				$this->error("修改失败");
			}
		}else{
			$this->error("原密码错误");
		}
	}

	//查看留言
	public function liuyan(){
		$liuyan = new LiuyanModel();
		$data = $liuyan->sel();
		$this->assign('data',$data);
		$this->display();
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//文件上传操作
	public function upload(){
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg', 'doc' ,'docx', 'xlsx');// 设置附件上传类型
	    $upload->rootPath  =     './public/Uploads/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    // 上传文件  $oldFN
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        return $upload->getError();
	    }else{// 上传成功
	    	foreach($info as $file){
		        return $file['savepath'].$file['savename'];
		    }
	    }
	}



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//富文本编辑器
	public function save_info(){  
   $ueditor_config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "",     file_get_contents("./Public/Ueditor/php/config.json")), true);  
        $action = $_GET['action'];  
        switch ($action) {  
            case 'config':  
                $result = json_encode($ueditor_config);  
                break;  
                /* 上传图片 */  
            case 'uploadimage':  
                /* 上传涂鸦 */  
            case 'uploadscrawl':  
                /* 上传视频 */  
            case 'uploadvideo':  
                /* 上传文件 */  
            case 'uploadfile':  
                $upload = new \Think\Upload();  
                $upload->maxSize = 3145728;  
                $upload->rootPath = './Public/Uploads/';  
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');  
                $info = $upload->upload();  
                if (!$info) {  
                    $result = json_encode(array(  
                            'state' => $upload->getError(),  
                    ));  
                } else {  
                    $url = __ROOT__ . "/Public/Uploads/" . $info["upfile"]["savepath"] . $info["upfile"]['savename'];  
                    $result = json_encode(array(  
                            'url' => $url,  
                            'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),  
                            'original' => $info["upfile"]['name'],  
                            'state' => 'SUCCESS'  
                    ));  
                }  
                break;  
            default:  
                $result = json_encode(array(  
                'state' => '请求地址出错'  
                        ));  
                        break;  
        }  
        /* 输出结果 */  
        if (isset($_GET["callback"])) {  
            if (preg_match("/^[\w_]+$/", $_GET["callback"])) {  
                echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';  
            } else {  
                echo json_encode(array(  
                        'state' => 'callback参数不合法'  
                ));  
            }  
        } else {  
            echo $result;  
        }  
    }  
}