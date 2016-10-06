<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function __construct() {
        parent::__construct();
        
        //获取产品列表
        $arr = D("pro_list")->select();
        $this->assign("protitle",$arr);

        //版权
        $copylist = D("copyright")->find();
        $this->assign("copylist",$copylist);

        //页面图片
        $imgdlist = D("img")->where("type!=1")->select();
        $this->assign("imgdlist",$imgdlist);
		
		//主页信息
		$in = D("index")->find();
        $this->assign('ind',$in);

        //底部链接
        $listtlist = D("pro_list")->order("sort asc")->select();
        $this->assign("listtlist",$listtlist);
        $listlist = D("pro_dlist")->select();
        $this->assign("listlist",$listlist);
    }

    public function index(){
    	$arr = D("img")->where("type=1")->order("sort asc")->select();
		$this->assign('list', $arr);
		$arr_copy = D("copyright")->find();
		$this->assign('list_copy',$arr_copy);

		//500强链接
        $wu1 = D("wubai")->where("typeid=1")->select();
        $this->assign('wulist1',$wu1);

        $wu2 = D("wubai")->where("typeid=2")->select();
        $this->assign('wulist2',$wu2);

        $wu3 = D("wubai")->where("typeid=3")->select();
        $this->assign('wulist3',$wu3);

        $wu4 = D("wubai")->where("typeid=4")->select();
        $this->assign('wulist4',$wu4);

        $wu5 = D("wubai")->where("typeid=5")->select();
        $this->assign('wulist5',$wu5);

        //一站式服务
        $yzser = D("yzser")->order("sort asc")->select();
        $this->assign("yzser",$yzser);

       	//友情链接
       	$yzser = D("yzser")->order("sort asc")->select();
        $this->assign("yzser",$yzser);

    	$this->display();
    }

    public function common_foot(){
		$arr_copy = D("copyright")->find();
		$this->assign('list',$arr_copy);
    	//$this->display();
    }

    public function cases(){
        $typeid = I("get.typeid",-1);
        if($typeid==0){
            $list = D("cases")->select();
            $this->assign("list",$list);
        }
        else if($typeid>0){
            $list = D("cases")->where("typeid=$typeid")->select();
            $this->assign("list",$list);
        }

        $video = D("index")->find();
        $this->assign("video",$video);

        $case_type = D("case_type")->order('sort asc')->select();
        $this->assign("case_type",$case_type);
        $this->assign("typeid",$typeid);
        $this->display();
    }

    public function news(){
        $list = D("news")->select();
        $this->assign("list",$list);
        $this->display();
    }

    public function goto_news(){
        $id = I("get.id");
        if($id == null) exit;
        $table = D("news");
        $list = $table->where("id=$id")->find();
        $list['count'] = $list["count"]+1;
        $table->where("id=$id")->save($list);
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("list",$list);
        $this->display();
    }

    public function goto_cases(){
        $id = I("get.id");
        if($id == null) exit;
        $table = M("cases");
        $list = $table->where("id=$id")->find();
        $list['count'] = $list["count"]+1;
        $table->where("id=$id")->save($list);
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("list",$list);
        $this->display();
    }

    public function contact(){
        $arr = D("contact_info")->find();
        $this->assign("list",$arr);
        $this->display();
    }

    public function do_contact(){
        $data = I("post.");
        $s = D("contactus_back")->add($data);
        echo 1;
    }

    public function intro_intro(){
        $type = I("get.type",1);
        $arr = D("intro_intro")->where("type=$type")->find();
        $arr['content'] = html_entity_decode($arr['content']);
        $this->assign("list",$arr);
        if($type==2){
            $this->display("intro_team");
        }
        else if($type==4){
            $this->display("intro_resource");
        }
        else if($type==5){
            $this->display("intro_about");
        }
        else{
            $this->display();
        }
    }

    public function intro_story(){
        $arr = D("intro_year")->order("sort asc")->select();
        $this->assign("yearlist",$arr);

        $list = D("intro_story")->order("time asc")->select();
        $this->assign("list",$list);
        $this->display();
    }

    public function pro_detail(){
    	$prolist = D("pro_list")->order("sort asc")->select();
    	$this->assign("prolist",$prolist);

        $url = D("pro_detail")->where("sort=0")->find();
        $this->assign("url",$url);

        $list = D("pro_detail")->where("sort>0")->order("sort asc")->select();
        $this->assign("detail",$list);
        $this->display();
    }

    public function product(){
        $type = I("get.type",1);
        $list = D("pro_list")->where("id=$type")->find();
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("conlist",$list);

        $roadlist = D("pro_road")->where("type=$type")->select();
        $this->assign("roadlist",$roadlist);
        
        $this->display("product".$type);
    }

    public function service(){
    	$id = I("get.id",1);
    	$arr = D("yzser")->where("id=$id")->find();
        $arr['content'] = html_entity_decode($arr['content']);
    	$this->assign("list",$arr);

        $serlist = D("yzser")->select();
        //$serlist['content'] = html_entity_decode($serlist['content']);
        $this->assign("serlist",$serlist);
    	$this->display();
    }


    

}