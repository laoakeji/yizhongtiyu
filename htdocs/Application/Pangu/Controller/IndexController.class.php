<?php
namespace Pangu\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function __construct() {
		parent::__construct();
		check_admin_login();
	}
	public function index() {
		$arr = D("pro_list")->order("sort asc")->select();
		$this->assign("list",$arr);
		$this->display();
	}
	/**
	 * 系统信息
	 * @wxy
	 * @DateTime 2016-05-20T16:11:00+0800
	 * @return   [type]                   [description]
	 */
	public function welcome() {
		//p(build_order_no());
		$arr['php_uname1'] = php_uname('s');
		$arr['php_uname2'] = php_uname('r');
		$arr['php_sapi_name'] = php_sapi_name();
		$arr['PHP_VERSION'] = PHP_VERSION;
		$arr['DEFAULT_INCLUDE_PATH'] = DEFAULT_INCLUDE_PATH;
		$arr['host'] = $_SERVER["HTTP_HOST"];
		$arr['ip'] = GetHostByName($_SERVER['SERVER_NAME']);
		$arr['root'] = $_SERVER['SystemRoot'];
		$arr['port'] = $_SERVER['SERVER_PORT'];
		$arr['day'] = date("Y-m-d");

		$this->assign('sys', $arr);
		$this->display();
	}


	public function copyright(){
		$arr = M("copyright")->select();
		$this->assign("list",$arr);
		$this->display();
	}

	public function edit_copyright(){
		$id = I("get.id", 0);
		$arr = M("copyright")->where("id=$id")->find();
		$this->assign("list",$arr);
		$this->assign("id", $id);
		$this->display();
	}

	public function do_edit_copyright(){
		$id = I("get.id", 0);
		$data = I("post.");
		$s = D("copyright")->where("id=$id")->save($data);
		echo 1;
	}

	public function img_list(){
		$type = I("get.type", 1);
		$GB = M('img'); // 实例化User对象
		if($type==1){
			$count = $GB->where("type=$type")->count(); // 查询满足要求的总记录数
			$Page = new \Think\Page($count, 50); // 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show(); // 分页显示输出
			$list = $GB->where("type=$type")->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
			$this->assign('list', $list); // 赋值数据集
			$this->assign('page', $show); // 赋值分页输出
		}
		else{
			$count = $GB->where("type!=1")->count(); // 查询满足要求的总记录数
			$Page = new \Think\Page($count, 50); // 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show = $Page->show(); // 分页显示输出
			$list = $GB->where("type!=1")->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
			$this->assign('list', $list); // 赋值数据集
			$this->assign('page', $show); // 赋值分页输出
		}
		$title = "图片列表";
		$this->assign("title", $title);
		$this->assign("type", $type);
		$this->display(); // 输出模板
	}

	/**
	 * 删除公用方法
	 * @wxy
	 * @DateTime 2016-05-21T09:56:38+0800
	 * @return   [type]                   [description]
	 */
	public function do_del() {
		$id = I("post.id");
		$table = I("post.table");
		if ($table == "wx_user") {
			$s = D($table)->where("uid=$id")->delete();
		} else {
			$s = D($table)->where("id=$id")->delete();
		}
		switch ($table) {
		case 'goods':
			S("goods_" . $id, null);
			S("goods_base_" . $id, null);
			break;

		default:
			# code...
			break;
		}

		echo $s;
	}

	/**
	 * 删除全部
	 * @wxy
	 * @DateTime 2016-05-21T09:59:24+0800
	 * @return   [type]                   [description]
	 */
	public function do_del_all() {
		$ids = I("get.ids");
		$ids = rtrim($ids, ",");
		$table = I("get.table");
		if ($table == "wx_user") {
			$s = D($table)->where("uid in ($ids)")->delete();
		} else {
			$s = D($table)->where("id in ($ids)")->delete();
		}
		$ids = explode(',', $ids);
		switch ($table) {
		case 'goods':
			foreach ($ids as $key => $e) {
				S("goods_" . $e, null);
				S("goods_base_" . $e, null);
			}
			break;
		default:
			# code...
			break;
		}
		echo $s;
	}

	/**
	 * 通用提交编辑
	 * @wxy
	 * @DateTime 2016-05-20T16:39:51+0800
	 * @return   [type]                   [description]
	 */
	public function do_edit() {
		$id = I("get.id", 0);
		$table = I("get.table", 0);
		$data = I("post.");

		if ($table == "goods_discount") {

			$data['s_time'] = strtotime($data['s_time']);
			$data['e_time'] = strtotime($data['e_time']);
		}
		if ($table == "news") {
			$time = I("get.time",0);
			$data['ptime'] = $time;
		}
		if ($table == "cases") {
			$time = I("get.time",0);
			$data['ptime'] = $time;
		}
		if ($table == "intro_story") {
			$time = I("get.time",0);
			$data['time'] = $time;
		}

		if ($id == 0) {
			$data['ctime'] = time();
			$data['status'] = 1;

			$s = D($table)->add($data);
		} else {
			$s = D($table)->where("id=$id")->save($data);
		}
		if ($table == "sys_set") {
			S("sys_set", null);
		}
	
		echo $s;
	}

	/**
	 * 通用编辑页面
	 * @wxy
	 * @DateTime 2016-05-20T16:39:25+0800
	 * @return   [type]                   [description]
	 */
	public function edit() {
		$id = I("get.id", 0);
		$table = I("get.table", 0);
		$arr = D($table)->where("id=$id")->find();
		if ($table == "img") {
			$type = I("get.type", 0);
			$this->assign("type", $type);
		}
		if ($table == "intro_story") {
			$yearlist = D("intro_year")->order("sort desc")->select();
			$this->assign("yearlist", $yearlist);
		}
		if ($table == "cases") {
			$typelist = D("case_type")->order("sort asc")->select();
			$this->assign("typelist", $typelist);
		}
		$this->assign("list", $arr);
		$this->assign("id", $id);
		$this->display("edit_" . $table);
	}

	public function news(){
		$arr = D("news")->select();
		$this->assign("list", $arr);
		$this->display();
	}

	public function edit_news() {
		$id = I("get.id", 0);
		$arr = M("news")->where("id=$id")->find();
		$this->assign("list",$arr);
		$this->assign("id", $id);
		$this->display();
	}

	public function case_type(){
		$arr = M("case_type")->select();
		$this->assign("list",$arr);
		$this->display();
	}

	public function edit_case_type(){
		$id = I("get.id", 0);
		$arr = M("case_type")->where("id=$id")->find();
		$this->assign("list",$arr);
		$this->assign("id", $id);
		$this->display();
	}

	public function cases(){
		$typelist = M("case_type")->select();
		$this->assign("typelist",$typelist);

		$arr = D("cases")->select();
		$this->assign("list",$arr);
		$this->display();

	}

	public function contact_back(){
		$arr = M("contactus_back")->select();
		$this->assign("list",$arr);
		$this->display();
	}

	public function edit_contact_back(){
		$id = I("get.id", 0);
		$arr = M("contactus_back")->where("id=$id")->find();
		$this->assign("list",$arr);
		$this->display();
	} 

	public function edit_contact_info(){
		$arr = M("contact_info")->find();
		$id = $arr['id'];
		$this->assign("list",$arr);
		$this->assign("is",$id);
		$this->display();
	}

	public function edit_intro_intro(){
		$type = I("get.type",1);
		$arr = D("intro_intro")->where("type=$type")->find();
		$this->assign("list",$arr);
		$this->display();
	}

	public function intro_yeartype(){
		$arr = D("intro_year")->select();
		$this->assign("yearlist",$arr);

		$list = D("intro_story")->select(); 
		$this->assign("list",$list);
		$this->display();
	}

	public function edit_intro_year(){
		$id = I("get.id", 0);
		$arr = M("intro_year")->where("id=$id")->find();
		$this->assign("list",$arr);
		$this->display();
	}

	public function edit_intro_story(){
		$yearlist = D("intro_year")->order("sort desc")->select();
		$this->assign("yearlist", $yearlist);

		$id = I("get.id",0);
		/*if($id != 0){
			$list = D("intro_story")->where("id=$id")->find();
			$list['time'] = date('Y-m-d', $list['time']); 
			$this->assign("list", $list);
		}
		else{

		}
*/
		$list = D("intro_story")->where("id=$id")->find();
		//$list['time'] = date('Y-m-d', $list['time']); 
		$this->assign("list", $list);

		$this->display();

	}

	//产品中心-详细
	public function pro_detail(){
		$arr = D("pro_detail")->select();
		$this->assign("list",$arr);
		$this->display();
	}

	public function edit_pro_detail(){

		$this->display();
	}

	public function pro_list(){
		$id = I("get.type",0);
		$arr = D("pro_list")->where("id=$id")->find();
		$this->assign("list",$arr);
		$this->display();
	}

	public function wubai_list(){
        $arr = D("wubai")->select();
        $this->assign("list",$arr);

        $wulist = D("index")->field('id,w1,w2,w3,w4,w5')->find();
        $this->assign("typelist",$wulist);
        $this->display();
    }

/*	public function edit_wubai(){
		$this->display();
	}*/

	public function edit_index(){
		$arr = D("index")->find();
		$this->assign("list",$arr);
		$this->display();
	}

	public function ser_list(){
		$arr = D("yzser")->order("sort asc")->select();
		$this->assign("list",$arr);
		$this->display();
	}

	//友情链接
	public function pro_dlist(){
		$prolist = D("pro_list")->select();
		$this->assign("prolist",$prolist);

		$arr = D("pro_dlist")->select();
		$this->assign("list",$arr);
		$this->display();
	}

	public function pro_road(){
		$roadlist = D("pro_road")->select();
		$this->assign("roadlist",$roadlist);
		$this->display();
	}




































	public function sys_set() {
		$arr = D("sys_set")->where("id=1")->find();
		$this->assign("list", $arr);
		$this->assign("id", 1);
		$this->display();
	}
	public function goods_brand() {

		$GB = M('goods_brand'); // 实例化User对象
		$count = $GB->where('status=1')->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show(); // 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $GB->where('status=1')->order('c_time')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list); // 赋值数据集
		$this->assign('page', $show); // 赋值分页输出
		$this->display(); // 输出模板

	}
	
	

	

	/**
	 * 商品列表
	 * @wxy
	 * @DateTime 2016-05-21T10:03:30+0800
	 * @return   [type]                   [description]
	 */
	public function goods_list() {
		$GB = M('goods'); // 实例化User对象
		$count = $GB->where('status=1')->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count, 25); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show(); // 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$join = "pg_goods_data on pg_goods_data.goods_id=pg_goods.id";
		$join2 = "pg_goods_brand on pg_goods_brand.id=pg_goods.brand_id";
		$field = "pg_goods.*,pg_goods_data.*,pg_goods_brand.brand_name";
		$list = $GB->where('pg_goods.status=1')->join($join)->join($join2)->field($field)->order('pg_goods.c_time')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list); // 赋值数据集
		$this->assign('page', $show); // 赋值分页输出
		$this->display(); // 输出模板
	}

	public function edit_goods() {
		$id = I("get.id", 0);
		$join = "pg_goods_data on pg_goods_data.goods_id=pg_goods.id";
		$arr2 = D("goods")->where("id=$id")->join($join)->find();
		if ($arr2) {
			$wap_lb = rtrim($arr2['goods_imgs_wap'], ',');
			$wap_lb = ltrim($wap_lb, ',');
			$pc_lb = rtrim($arr2['goods_imgs_pc'], ',');
			$pc_lb = ltrim($pc_lb, ',');
			$wap_lb2 = explode(",", $wap_lb);
			$pc_lb2 = explode(",", $pc_lb);
			$arr2['wap_lb2'] = $wap_lb2;
			$arr2['pc_lb2'] = $pc_lb2;
		}
		S("goods_" . $id, null);
		$arr = D("goods_brand")->select();
		$this->assign("brand", $arr);
		$this->assign("list", $arr2);
		$this->assign("id", $id);

		$this->display();
	}

	public function do_edit_goods() {
		$id = I("get.id", 0);
		$data = I("post.");
		$map['sku_num'] = 0;

		if ($id == 0) {
			$data['c_time'] = time();
			$data['status'] = 1;
			$s = D("goods")->add($data);
			$map['goods_id'] = $s;
			$ss = D("goods_data")->add($map);
		} else {
			$s = D("goods")->where("id=$id")->save($data);

		}
		S("goods_" . $goods_id, null);
		S("goods_base_" . $goods_id, null);
		echo 1;
	}

	public function user_list() {
		$GB = M('wx_user'); // 实例化User对象
		$rank = I("get.rank", 0);
		$order = I("get.order", "pg_wx_user.uid");
		$key = $key2 = I("get.key", "");
		$tj = I("get.tj", 0);
		$a_id = I("get.a_id", 0);
		$uid = I("get.uid", 0);
		$where = "1=1";
		if ($rank == 0) {

		} else {
			$where .= " and pg_wx_user.rank=$rank";
		}
		if ($key != "") {
			$where .= " and pg_wx_user.nickname like '%" . $key . "%'";
		}
		if ($tj == 1) {
			$where .= " and pg_wx_user.a_id>0";
		}
		if ($tj == 2) {
			$where .= " and pg_wx_user.a_id=0";
		}
		if ($a_id > 0) {
			$where .= " and pg_wx_user.a_id=$a_id";
		}
		if ($uid > 0) {
			$where = " pg_wx_user.uid=$uid";
		}

		$count = $GB->where($where)->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count, 50); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show(); // 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$join = "pg_user_data on pg_user_data.uid=pg_wx_user.uid";
		$field = "pg_user_data.*,pg_wx_user.*";
		$list = $GB->where($where)->join($join)->field($field)->order($order . " desc")->limit($Page->firstRow . ',' . $Page->listRows)->select();
		foreach ($list as $key => &$e) {
			$e['a_name'] = $GB->where("uid='" . $e['a_id'] . "'")->getField("nickname");
		}
		unset($e);
		$this->assign('list', $list); // 赋值数据集
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('count', $count); // 赋值分页输出
		$this->assign('rank', $rank); // 赋值分页输出
		$this->assign('order', $order); // 赋值分页输出
		$this->assign('key', $key2); // 赋值分页输出
		$this->assign('tj', $tj); // 赋值分页输出
		$this->assign('a_id', $a_id); // 赋值分页输出

		$this->display(); // 输出模板

	}

	public function do_set_user_company() {
		$uid = I("post.id", 0);
		$data['user_type'] = 2;
		$s = D("wx_user")->where("uid=$uid")->save($data);
		echo $s;
	}

	public function pay_list() {
		$type = I("get.type", 0);
		$status = I("get.status", 0);
		$GB = M('pay_record'); // 实例化User对象
		$count = $GB->where("type=$type")->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count, 50); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show(); // 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$join = "pg_wx_user on pg_pay_record.uid=pg_wx_user.uid";
		$field = "pg_wx_user.nickname,pg_wx_user.openid,pg_pay_record.*";
		$where = "1=1";

		$where .= " and pg_pay_record.type=$type";
		if ($status > 0) {
			$where .= " and pg_pay_record.status=$status";
		}

		$list = $GB->where($where)->join($join)->field($field)->order('pg_pay_record.c_time')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		$this->assign('list', $list); // 赋值数据集
		$this->assign('page', $show); // 赋值分页输出
		switch ($type) {
		case '1':
			$title = "提现";
			break;
		case '2':
			$title = "充值";
			break;
		default:
			$title = "财务";
			break;
		}
		$this->assign("title", $title);
		$this->display(); // 输出模板
	}
	public function order_list() {

		$key = $key2 = I("get.key", "");
		$time = I("get.time", '');
		$status = I("get.status", 0);
		$uid = I("get.uid", 0);
		$tuan_status = I("get.tuan_status", 0);

		$where = "1=1 and pg_goods_order.uid not in (4523,4514,4522)";
		//$where = "1=1 and pg_goods_order.uid not in (4523)";

		if ($key != "") {
			$where .= " and pg_goods_order.tel like '%" . $key . "%'";
		}
		if ($time != "") {
			$t1 = strtotime($time);
			$t2 = strtotime($time) + 24 * 60 * 60;
			$where .= " and pg_goods_order.c_time>$t1 and pg_goods_order.c_time<$t2";
		}
		if ($status == 0) {

		} else {
			$where .= " and pg_goods_order.status=$status";
		}
		if ($uid == 0) {

		} else {
			$where = "  pg_goods_order.uid=$uid";
		}
		if ($status == 2) {
			$where .= " and pg_goods_order.tuan_id=0";
		}

		if ($tuan_status == 2) {
			$where .= " and pg_goods_order.tuan_status=2 and pg_goods_order.status=2";
		}
		if ($tuan_status == 3) {
			$where .= " and pg_goods_order.tuan_status=2";
		}
		if ($tuan_status == -1) {
			$where .= " and pg_goods_order.tuan_status=-1 and pg_goods_order.status=2";
		}
		if ($tuan_status == -2) {
//已退货
			$where .= " and pg_goods_order.tuan_status=-1 and pg_goods_order.status=-3";
		}
		//p($where);
		$GB = M('goods_order'); // 实例化User对象
		$join = "pg_wx_user on pg_goods_order.uid=pg_wx_user.uid";
		$count = $GB->where($where)->join($join)->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count, 100); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show(); // 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$field = "pg_wx_user.nickname,pg_goods_order.*";
		$list = $GB->where($where)->join($join)->field($field)->order('pg_goods_order.c_time desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

		switch ($status) {
		case '1':
			$title = "待付款";
			break;
		case '2':
			$title = "代发货";
			break;
		case '3':
			$title = "已发货";
			break;
		default:
			$title = "未知";
			break;
		}
		$car = D("goods_car");
		$pay = D("pay_record");
		foreach ($list as $key => &$e) {
			$car_ids = $e['car_ids'];
			$arr2 = $car->where("id in ($car_ids) and status=2")->select();
			$e['car'] = $arr2;
			$e['sh_order'] = $pay->where("pid='" . $e['id'] . "' and type=2")->find();
		}
		unset($e);
		$this->assign('list', $list); // 赋值数据集
		$this->assign('page', $show); // 赋值分页输出
		//p($list);
		$this->assign("title", $title);
		$this->assign("count", $count);
		$this->assign("key", $key2);
		$this->assign("time2", $time);
		$this->assign("status", $status);
		$this->assign("time", date("Y-m-d H:i:s"));
		$this->display(); // 输出模板
	}

	public function xj_list() {

	}

	public function goods_discount() {
		$goods_id = I("get.id", 0);
		$GB = M('goods_discount'); // 实例化User对象
		$count = $GB->where("goods_id=$goods_id")->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count, 50); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show(); // 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $GB->where("goods_id=$goods_id")->order('c_time')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list); // 赋值数据集
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('goods_id', $goods_id); // 赋值分页输出
		$this->assign("title", "打折列表");
		$this->display(); // 输出模板
	}

	public function do_change_sku() {
		$goods_id = I("post.id", 0);
		$data['add_num'] = $add_num = I("post.add_num", 0);
		$data['goods_id'] = I("post.id", 0);
		$data['c_time'] = time();
		$data['status'] = 1;
		$num = D("goods_data")->where("goods_id=$goods_id")->getField("sku_num");
		$data['num'] = $num;
		$map['sku_num'] = $num + $add_num;
		D("goods_sku_record")->add($data);
		D("goods_data")->where("goods_id=$goods_id")->save($map);
		echo 1;
	}

	public function goods_sku_record() {
		$goods_id = I("get.id", 0);
		$GB = M('goods_sku_record'); // 实例化User对象
		$count = $GB->where("goods_id=$goods_id")->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count, 50); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show(); // 分页显示输出
		$list = $GB->where("goods_id=$goods_id")->order('id')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('list', $list); // 赋值数据集
		$this->assign('page', $show); // 赋值分页输出
		$title = "库存修改记录";
		$this->assign("title", $title);
		$this->display(); // 输出模板
	}

	public function send_order() {
		$id = I("get.id", 0);
		$map['status'] = 3;
		$map['send_time'] = time();
		$arr = D("goods_order")->where("id=$id and status=2")->save($map);
		$rd['code'] = 1;
		$rd['msg'] = "成功";
		$this->ajaxReturn($rd);
	}
	public function send_order_all() {
		$ids = I("get.ids", 0);
		$ids = rtrim($ids, ",");
		$ids = ltrim($ids, ",");
		$map['status'] = 3;
		$map['send_time'] = time();
		$arr = D("goods_order")->where("id in ($ids) and status=2")->save($map);
		$rd['code'] = 1;
		$rd['msg'] = "成功";
		$this->ajaxReturn($rd);
	}
	public function add_kd() {
		$id = I("post.id", 0);
		$ems_no = I("post.ems_no", 0);
		$data['ems_no'] = $ems_no;
		D("goods_order")->where("id=$id")->save($data);
		$rd['code'] = 1;
		$rd['msg'] = "成功";
		$this->ajaxReturn($rd);
	}
	public function qx_th() {
		$id = I("get.id", 0);
		$map['status'] = 2;
		$goods_order = D("goods_order");
		$s1 = $goods_order->where("id=$id and status=-3")->save($map);
		echo $s1;
	}
	public function th_order2222() {
		$id = I("get.id", 0);
		$map['status'] = -3;
		$goods_order = D("goods_order");
		$goods_order->startTrans(); //事务开始
		$order_info = $goods_order->where("id=$id")->find();
		if ($order_info['status'] != -2) {
			$rd['code'] = 40092; //已退货
			$rd['msg'] = "已退货";
			$this->ajaxReturn($rd);
		}
		$s1 = $goods_order->where("id=$id and status=-2")->save($map);
		$map2['status'] = -1; //已退货
		$pay_record = D("pay_record");

		$s2 = $pay_record->where("pid=$id and type=3 and status=1")->save($map2);

		$arr22 = $pay_record->where("pid=$id and type=3")->select();
		$s2 = 1;
		$s3 = 1;
		foreach ($arr22 as $key => $e) {
			$money = floatval($e['money']);
			$uid = $e['uid'];
			$arr3 = D("user_data")->where("uid=$uid")->field("fxz_money,uid")->find();
			$map3['fxz_money'] = $arr3['fxz_money'] - $money;
			$s3 = D("user_data")->where("uid=$uid")->save($map3);
			//$s3 = $Model->query("UPDATE pg_user_data set money=money+$money,fx_money=fx_money+$money,fxz_money=fxz_money-$money where uid=$uid");
		}

		$arr55 = $pay_record->where("pid=$id and type=2")->find();
		ini_set('date.timezone', 'Asia/Shanghai');
		//error_reporting(E_ERROR);
		require_once THINK_PATH . "/Weixin/lib/WxPay.Api.php";
		$out_trade_no = $arr55['out_trade_no'];
		$fee = $arr55['money'] * 100 * 0.6;
		$s4 = 1;
		if (isset($out_trade_no) && $out_trade_no != "") {
			$out_trade_no = $out_trade_no;
			$total_fee = $fee;
			$refund_fee = $fee;
			$input = new \WxPayRefund();
			$input->SetOut_trade_no($out_trade_no);
			$input->SetTotal_fee($total_fee);
			$input->SetRefund_fee($refund_fee);
			$input->SetOut_refund_no(\WxPayConfig::MCHID . date("YmdHis"));
			$input->SetOp_user_id(\WxPayConfig::MCHID);
			$res = \WxPayApi::refund($input);
			if ($res['return_code'] == "SUCCESS") {
				$s4 = 1;

			} else {
				$s4 = 0;
				$rd['code'] = 40401; //退货失败微信
				$rd['msg'] = "微信商户退货失败";
				$this->ajaxReturn($rd);exit;
			}
		}

		// $money = $pay_record->where("pid=$id and type=3")->sum("money");
		// $uid = $pay_record->where("pid=$id and type=3")->getField('uid');

		// $money = floatval($money);

		// if ($money > 0) {

		// 	$arr3 = D("user_data")->where("uid=$uid")->field("money,fx_money,fxz_money,uid")->find();
		// 	$map3['fxz_money'] = $arr3['fxz_money'] - $money;
		// 	$s3 = D("user_data")->where("uid=$uid")->save($map3);
		// } else {
		// 	$s2 = 1;
		// 	$s3 = 1;
		// }

		//$arr5=D("goods_order")->where("uid=$uid and ")->find();
		if ($s3 > 0 && $s2 > 0 && $s1 > 0 && $s4 > 0) {
			$goods_order->commit();
			$rd['code'] = 1;
			$rd['msg'] = "退货成功";
		} else {
			$goods_order->rollback();
			$rd['code'] = 40093;
			$rd['msg'] = "退货失败";
		}

		$this->ajaxReturn($rd);
	}
	public function th_order() {
		$id = I("get.id", 0);
		$map['status'] = -3;
		$goods_order = D("goods_order");
		$goods_order->startTrans(); //事务开始
		$order_info = $goods_order->where("id=$id")->find();
		if ($order_info['status'] != -2) {
			$rd['code'] = 40092; //已退货
			$rd['msg'] = "已退货";
			$this->ajaxReturn($rd);
		}
		$s1 = $goods_order->where("id=$id and status=-2")->save($map);

		$pay_record = D("pay_record");
		$arr55 = $pay_record->where("pid=$id and type=2")->find();

		$map2['uid'] = $order_info['uid'];
		$map2['status'] = 1; //已退货

		$map2['money'] = $arr55['money'] * 0.6;
		$map2['type'] = 7;
		$map2['c_time'] = time();
		$map2['pid'] = $arr55['pid'];
		$map2['out_trade_no'] = $arr55['out_trade_no'];
		$s2 = $pay_record->add($map2);

		$s3 = 1;

		ini_set('date.timezone', 'Asia/Shanghai');
		//error_reporting(E_ERROR);
		require_once THINK_PATH . "/Weixin/lib/WxPay.Api.php";
		$out_trade_no = $arr55['out_trade_no'];
		$fee = $arr55['money'] * 100;

		$s4 = 1;
		if (isset($out_trade_no) && $out_trade_no != "") {
			$out_trade_no = $out_trade_no;
			$total_fee = $fee;
			$refund_fee = $fee * 0.6;
			$input = new \WxPayRefund();
			$input->SetOut_trade_no($out_trade_no);
			$input->SetTotal_fee($total_fee);
			$input->SetRefund_fee($refund_fee);
			$input->SetOut_refund_no(\WxPayConfig::MCHID . date("YmdHis"));
			$input->SetOp_user_id(\WxPayConfig::MCHID);
			$res = \WxPayApi::refund($input);
			//p($res);exit;
			if ($res['return_code'] == "SUCCESS") {
				$s4 = 1;

			} else {
				$s4 = 0;
				$rd['code'] = 40401; //退货失败微信
				$rd['msg'] = "微信商户退货失败";
				$this->ajaxReturn($rd);exit;
			}
		}

		if ($s3 > 0 && $s2 > 0 && $s1 > 0 && $s4 > 0) {
			$goods_order->commit();
			$rd['code'] = 1;
			$rd['msg'] = "退货成功";
		} else {
			$goods_order->rollback();
			$rd['code'] = 40093;
			$rd['msg'] = "退货失败";
		}

		$this->ajaxReturn($rd);
	}
	public function th_order3() {
		$id = I("get.id", 0);
		$map['status'] = -3;
		$goods_order = D("goods_order");
		$goods_order->startTrans(); //事务开始
		$order_info = $goods_order->where("id=$id")->find();
		if ($order_info['status'] != -2) {
			$rd['code'] = 40092; //已退货
			$rd['msg'] = "已退货";
			$this->ajaxReturn($rd);
		}
		$s1 = $goods_order->where("id=$id and status=-2")->save($map);

		$pay_record = D("pay_record");
		$arr55 = $pay_record->where("pid=$id and type=2")->find();

		$map2['uid'] = $order_info['uid'];
		$map2['status'] = 1; //已退货

		$map2['money'] = $arr55['money'];
		$map2['type'] = 7;
		$map2['c_time'] = time();
		$map2['pid'] = $arr55['pid'];
		$map2['out_trade_no'] = $arr55['out_trade_no'];
		$s2 = $pay_record->add($map2);

		$s3 = 1;

		ini_set('date.timezone', 'Asia/Shanghai');
		//error_reporting(E_ERROR);
		require_once THINK_PATH . "/Weixin/lib/WxPay.Api.php";
		$out_trade_no = $arr55['out_trade_no'];
		$fee = $arr55['money'] * 100;

		$s4 = 1;
		if (isset($out_trade_no) && $out_trade_no != "") {
			$out_trade_no = $out_trade_no;
			$total_fee = $fee;
			$refund_fee = $fee;
			$input = new \WxPayRefund();
			$input->SetOut_trade_no($out_trade_no);
			$input->SetTotal_fee($total_fee);
			$input->SetRefund_fee($refund_fee);
			$input->SetOut_refund_no(\WxPayConfig::MCHID . date("YmdHis"));
			$input->SetOp_user_id(\WxPayConfig::MCHID);
			$res = \WxPayApi::refund($input);
			//p($res);exit;
			if ($res['return_code'] == "SUCCESS") {
				$s4 = 1;

			} else {
				$s4 = 0;
				$rd['code'] = 40401; //退货失败微信
				$rd['msg'] = "微信商户退货失败";
				$this->ajaxReturn($rd);exit;
			}
		}

		$arr_56 = $pay_record->where("pid=$id and type=3 and status=1")->select();
		if (count($arr_56) > 0) {

			$map4['status'] = -1;
			$s5 = $pay_record->where("pid=$id and type=3 and status=1")->save($map4);
			foreach ($arr_56 as $key => $e) {
				$d_uid = $e['uid'];
				$arr_57 = D("user_data")->where("uid=$d_uid")->field("fxz_money")->find();
				$map5['fxz_money'] = $arr_57['fxz_money'] - $e['money'];
				D("user_data")->where("uid=$d_uid")->save($map5);
			}

			$d_num = D("goods_order")->where("uid='" . $order_info['uid'] . "' and status>=2 and money>98")->count();
			if ($d_num > 0) {

			} else {
				$map77['rank'] = 1;
				D("wx_user")->where("uid='" . $order_info['uid'] . "'")->save($map77);
			}

		} else {
			$s5 = 1;
		}

		if ($s3 > 0 && $s2 > 0 && $s1 > 0 && $s4 > 0 && $s5 > 0) {
			$goods_order->commit();
			$rd['code'] = 1;
			$rd['msg'] = "退货成功";
		} else {
			$goods_order->rollback();
			$rd['code'] = 40093;
			$rd['msg'] = "退货失败";
		}

		$this->ajaxReturn($rd);
	}
	public function th_order2() {
		$id = I("get.id", 0);
		$map['status'] = -3;
		$goods_order = D("goods_order");
		$goods_order->startTrans(); //事务开始
		$order_info = $goods_order->where("id=$id")->find();
		if ($order_info['status'] == -3) {
			$rd['code'] = 40092; //已退货
			$rd['msg'] = "已退货";
			$this->ajaxReturn($rd);
		}
		$s1 = $goods_order->where("id=$id and status=2 and tuan_status=-1")->save($map);
		$pay_record = D("pay_record");

		$arr55 = $pay_record->where("pid=$id and type=2")->find();

		$map2['uid'] = $order_info['uid'];
		$map2['status'] = 1; //已退货

		$map2['money'] = $arr55['money'];
		$map2['type'] = 7;
		$map2['c_time'] = time();
		$map2['pid'] = $arr55['pid'];
		$map2['out_trade_no'] = $arr55['out_trade_no'];
		$s2 = $pay_record->add($map2);

		ini_set('date.timezone', 'Asia/Shanghai');
		//error_reporting(E_ERROR);
		require_once THINK_PATH . "/Weixin/lib/WxPay.Api.php";
		$out_trade_no = $arr55['out_trade_no'];
		$fee = $arr55['money'] * 100;
		$s4 = 1;
		if (isset($out_trade_no) && $out_trade_no != "") {
			$out_trade_no = $out_trade_no;
			$total_fee = $fee;
			$refund_fee = $fee;
			$input = new \WxPayRefund();
			$input->SetOut_trade_no($out_trade_no);
			$input->SetTotal_fee($total_fee);
			$input->SetRefund_fee($refund_fee);
			$input->SetOut_refund_no(\WxPayConfig::MCHID . date("YmdHis"));
			$input->SetOp_user_id(\WxPayConfig::MCHID);
			$res = \WxPayApi::refund($input);
			if ($res['return_code'] == "SUCCESS") {
				$s4 = 1;

			} else {
				$s4 = 0;
				$rd['code'] = 40401; //退货失败微信
				$rd['msg'] = "微信商户退货失败";
				$this->ajaxReturn($rd);exit;
			}
		}

		// $money = $pay_record->where("pid=$id and type=3")->sum("money");
		// $uid = $pay_record->where("pid=$id and type=3")->getField('uid');

		// $money = floatval($money);

		// if ($money > 0) {

		// 	$arr3 = D("user_data")->where("uid=$uid")->field("money,fx_money,fxz_money,uid")->find();
		// 	$map3['fxz_money'] = $arr3['fxz_money'] - $money;
		// 	$s3 = D("user_data")->where("uid=$uid")->save($map3);
		// } else {
		// 	$s2 = 1;
		// 	$s3 = 1;
		// }
		$s3 = 1;
		//$arr5=D("goods_order")->where("uid=$uid and ")->find();
		if ($s3 > 0 && $s2 > 0 && $s1 > 0 && $s4 > 0) {
			$goods_order->commit();
			$rd['code'] = 1;
			$rd['msg'] = "退货成功";
		} else {
			$goods_order->rollback();
			$rd['code'] = 40093;
			$rd['msg'] = "退货失败";
		}

		$this->ajaxReturn($rd);
	}
	public function do_add_money() {
		$id = I("post.id", 0);
		$money = I("post.money", 0);
		if ($money > 0) {
			# code...
		} else {
			$rd['code'] = 40101; //金额不正确
			$rd['msg'] = "金额不正确";
			$this->ajaxReturn($rd);exit;
		}
		$pay_record = D("pay_record");
		$pay_record->startTrans();
		$data['uid'] = $id;
		$data['money'] = $money;
		$data['c_time'] = time();
		$data['type'] = 5;
		$data['status'] = 1;
		$s1 = $pay_record->add($data);
		$old_money = D("user_data")->where("uid=$id")->getField("money");
		$map['money'] = $old_money + $money;
		$s2 = D("user_data")->where("uid=$id")->save($map);
		if ($s1 > 0 && $s2 > 0) {
			$pay_record->commit();
			$rd['code'] = 1;
			$rd['msg'] = "增加成功";
		} else {
			$pay_record->rollback();
			$rd['code'] = 40102;
			$rd['msg'] = "增加失败";
		}
		$this->ajaxReturn($rd);

	}

	public function do_add_up() {
		$id = I("post.id", 0);
		$a_id = I("post.a_id", 0);
		$data['c_time'] = date("Y-m-d H:i:s");
		$data['data'] = "后台给" . $id . "增加了一个上级" . $a_id;
		D("log")->add($data);
		$map['a_id'] = $a_id;
		$map['uid'] = $id;
		$arr = D("wx_user")->where("uid=$id")->find();
		$arr2 = D("wx_user")->where("uid=$a_id")->find();
		if ($arr2) {
			$map['b_id'] = $arr2['a_id'];
			$map['c_id'] = $arr2['b_id'];
			# code...
		}
		if ($arr['a_id'] != 0) {
			// $rd['code'] = 40103;
			// $rd['msg'] = "已存在上级";
			// $this->ajaxReturn($rd);
			// exit;
		}

		$arr66 = D("wx_user")->where("uid=$a_id")->find();
		$map2['b_id'] = $a_id;
		$map3['c_id'] = $a_id;
		if (!$arr) {
			$rd['code'] = 40104;
			$rd['msg'] = "上级用户编号不存在";
			$this->ajaxReturn($rd);
			exit;
		} else {
			$map['b_id'] = $arr66['a_id'];
			$map['c_id'] = $arr66['b_id'];
			$map2['c_id'] = $arr66['a_id'];
		}

		$map['a_time'] = time();
		$s = D("wx_user")->where("uid=$id")->save($map);
		$s2 = D("user_data")->where("uid=$a_id")->setInc("xj_num", 1);

		D("wx_user")->where("a_id=$id")->save($map2);
		D("wx_user")->where("b_id=$id")->save($map3);

		$rd['code'] = 1;
		$rd['msg'] = "增加成功";
		$this->ajaxReturn($rd);

	}

	public function change_user_rank() {
		$uid = I("post.uid", 0);
		$rank = I("post.rank", 1);
		$data['rank'] = $rank;
		$s = D("wx_user")->where("uid=$uid")->save($data);
		$map['c_time'] = date("Y-m-d H:i:s");
		$map['data'] = "修改用户" . $uid . "等级为" . $rank;
		D("log")->add($map);
		echo $s;
	}

	public function do_tx() {
		//header("Content-type:text/html;charset=utf-8");
		$pay_record = D("pay_record");
		$pay_record->startTrans();
		$id = I("post.id", 0);
		$arr = $pay_record->where("id=$id")->find();
		$data['status'] = 2;
		$s1 = $pay_record->where("id=$id")->save($data);
		$uid = $arr['uid'];
		$arr2 = D("user_data")->where("uid=$uid")->find();
		$map['txz_money'] = $arr2['txz_money'] - $arr['money'];
		$map['tx_money'] = $arr2['tx_money'] + $arr['money'];
		$s2 = D("user_data")->where("uid=$uid")->save($map);
		$openid = D("wx_user")->where("uid=$uid")->getField("openid");
		require_once THINK_PATH . "Weixin/WxApi.class.php";
		$wx = new \WxApi;
		$res = $wx->send_money($openid, $arr['money'] * 100);

		if ($res['result_code'] == "SUCCESS") {

		} else {
			$rd['code'] = 40404; //企业付款失败
			$rd['msg'] = "企业付款失败";
			$this->ajaxReturn($rd);exit;
		}
		if ($s1 > 0 && $s2 > 0) {
			$pay_record->commit();
			$rd['code'] = 1;
			$rd['msg'] = "成功";
			$this->ajaxReturn($rd);exit;
		} else {
			$pay_record->rollback();
			$rd['code'] = 40201; //提现失败
			$rd['msg'] = "提现失败";
			$this->ajaxReturn($rd);exit;
		}
		$rd['code'] = 1;
		$rd['msg'] = "成功";
		$this->ajaxReturn($rd);

	}

/**
 * 商品团购设置
 * @xx1993
 * @DateTime 2016-06-04T00:20:43+0800
 * @return   [type]                   [description]
 */
	public function goods_tuan_set() {
		$id = I("get.id", 0);
		$table = "tuan_set";
		$arr = D($table)->where("goods_id=$id")->find();

		$this->assign("list", $arr);
		$this->assign("id", $id);
		$this->display();
	}

	public function taun_edit() {
		$id = I("get.id", 0);
		$data = I("post.");

		$arr = D("tuan_set")->where("goods_id=$id")->find();
		if (!$arr) {
			$data['goods_id'] = $id;
			$s = D("tuan_set")->add($data);

		} else {

			$s = D("tuan_set")->where("goods_id=$id")->save($data);

		}

		echo 1;
	}

	public function do_refund() {

	}

	public function tb() {
		$this->display();
	}
	public function excel() {
		require_once THINK_PATH . "/MyClass/excel/Classes/PHPExcel/IOFactory.php";
		error_reporting(E_ALL);

		date_default_timezone_set('Asia/ShangHai');

		/** PHPExcel_IOFactory */
		//require_once '../Classes/PHPExcel/IOFactory.php';
		p($_FILES);
		require_once THINK_PATH . "/MyClass/Uploads.php";
		$upload = new \Uploads;
		$data = $upload->upload_excel();
		//p($data);exit;
		$file = "/www/web/999cuohela/public_html" . $data;
		echo $data;
		// Check prerequisites
		if (!file_exists($file)) {
			exit("not found 31excel5.xls.\n");
		}

		$reader = \PHPExcel_IOFactory::createReader('Excel5'); //设置以Excel5格式(Excel97-2003工作簿)
		$PHPExcel = $reader->load($file); // 载入excel文件
		$sheet = $PHPExcel->getSheet(0); // 读取第一個工作表
		$highestRow = $sheet->getHighestRow(); // 取得总行数
		$highestColumm = $sheet->getHighestColumn(); // 取得总列数

		/** 循环读取每个单元格的数据 */
		//$highestRow = 10;
		$goods_order = D("goods_order");
		for ($row = 2; $row <= $highestRow; $row++) {
//行数是以第1行开始
			$A = $sheet->getCell("A" . $row)->getValue();
			$L = $sheet->getCell("L" . $row)->getValue();
			// echo $A . "</br>";
			// echo $L . "</br>";
			if ($A != "" && $L != "") {
				$arr = $goods_order->where("order_no='" . $A . "'")->find();
				//p($arr);
				if ($arr) {
					if ($arr['ems_no'] == "") {
						$map['ems_no'] = $L;
						$goods_order->where("order_no='" . $A . "'")->save($map);
						echo $row . "<br>";
					}
				}
			}
			unset($A);
			unset($L);
			unset($map);
			unset($arr);

		}
	}
}