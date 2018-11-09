<?php
namespace Login\Controller;

use Think\Controller;
use Login\Model\UserModel;

class IndexController extends Controller {
    //判断是否已经登录(默认密码123)
	public function index(){
        if(!session('?user')){
            $this->display();
        }else{
            $this->redirect('Admin/Index/index');
        }
    }
    public function dl(){
        $number = $_POST[number];
        $password = md5(md5($_POST[password]));
        $user = new UserModel();
        $data = $user->findUser($number);
        if($password == $data[password]){
            session('user',$data);
            $this->redirect('Admin/Index/index');
              
        }else{
            $this->error("账号或密码错误");
        }
    }
    //退出
    public function quit(){
        session('[destroy]');
        $this->redirect('Login/Index/index');
    }
}
