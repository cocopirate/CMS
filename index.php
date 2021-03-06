<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="UTF-8">
<title>商城管理后台</title>
<link href="css/skin_0.css" rel="stylesheet" type="text/css" id="cssfile"/>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validation.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->
<script>
//
$(document).ready(function () {
    $('span.bar-btn').click(function () {
	$('ul.bar-list').toggle('fast');
    });
});

$(document).ready(function(){
	var pagestyle = function() {
		var iframe = $("#workspace");
		var h = $(window).height() - iframe.offset().top;
		var w = $(window).width() - iframe.offset().left;
		if(h < 300) h = 300;
		if(w < 973) w = 973;
		iframe.height(h);
		iframe.width(w);
	}
	pagestyle();
	$(window).resize(pagestyle);
	//turn location
	if($.cookie('now_location_act') != null){
		openItem($.cookie('now_location_op')+','+$.cookie('now_location_act')+','+$.cookie('now_location_nav'));
	}else{
		$('#mainMenu>ul').first().css('display','block');
		//第一次进入后台时，默认定到欢迎界面
		$('#item_welcome').addClass('selected');
		$('#workspace').attr('src','layout.php?op=welcome');
	}
	$('#iframe_refresh').click(function(){
		var fr = document.frames ? document.frames("workspace") : document.getElementById("workspace").contentWindow;
		fr.location.reload();
	});

});
//收藏夹
function addBookmark(url, label) {
    if (document.all)
    {
        window.external.addFavorite(url, label);
    }
    else if (window.sidebar)
    {
        window.sidebar.addPanel(label, url, '');
    }
}


function openItem(args){
  closeBg();
	spl = args.split(',');
	op  = spl[0];
	try {
		act = spl[1];
		nav = spl[2];
	}
	catch(ex){}
	if (typeof(act)=='undefined'){var nav = args;}

	$('.actived').removeClass('actived');
	$('#nav_'+nav).addClass('actived');

	$('.selected').removeClass('selected');

	//show
	$('#mainMenu ul').css('display','none');
	$('#sort_'+nav).css('display','block');

	if (typeof(act)=='undefined'){
		//顶部菜单事件
		html = $('#sort_'+nav+'>li').first().html();
		str = html.match(/openItem\('(.*)'\)/ig);
		arg = str[0].split("'");
		spl = arg[1].split(',');
		op  = spl[0];
		act = spl[1];
		nav = spl[2];
		first_obj = $('#sort_'+nav+'>li').first().children('a');
		$(first_obj).addClass('selected');
		//crumbs
		$('#crumbs').html('<span>'+$('#nav_'+nav+' > span').html()+'</span><span class="arrow">&nbsp;</span><span>'+$(first_obj).text()+'</span>');
	}else{
		//左侧菜单事件
		//location
		$.cookie('now_location_nav',nav);
		$.cookie('now_location_act',act);
		$.cookie('now_location_op',op);
		$("a[id='item_"+op+"']").addClass('selected');
		//crumbs
		$('#crumbs').html('<span>'+$('#nav_'+nav+' > span').html()+'</span><span class="arrow">&nbsp;</span><span>'+$('#item_'+op).html()+'</span>');
	}
	src = 'layout.php?act='+ act +'&op='+op;
	$('#workspace').attr('src',src);

}

$(function(){
		bindAdminMenu();
		})
		function bindAdminMenu(){

		$("[nc_type='parentli']").click(function(){
			var key = $(this).attr('dataparam');
			if($(this).find("dd").css("display")=="none"){
				$("[nc_type='"+key+"']").slideDown("fast");
				$(this).find('dt').css("background-position","-322px -170px");
				$(this).find("dd").show();
			}else{
				$("[nc_type='"+key+"']").slideUp("fast");
				$(this).find('dt').css("background-position","-483px -170px");
				$(this).find("dd").hide();
			}
		});
	}
</script>
<script type="text/javascript">
//显示灰色JS遮罩层
function showBg(ct,content){
var bH=$("body").height();
var bW=$("body").width();
var objWH=getObjWh(ct);
$("#pagemask").css({width:bW,height:bH,display:"none"});
var tbT=objWH.split("|")[0]+"px";
var tbL=objWH.split("|")[1]+"px";
$("#"+ct).css({top:tbT,left:tbL,display:"block"});
$(window).scroll(function(){resetBg()});
$(window).resize(function(){resetBg()});
}
function getObjWh(obj){
var st=document.documentElement.scrollTop;//滚动条距顶部的距离
var sl=document.documentElement.scrollLeft;//滚动条距左边的距离
var ch=document.documentElement.clientHeight;//屏幕的高度
var cw=document.documentElement.clientWidth;//屏幕的宽度
var objH=$("#"+obj).height();//浮动对象的高度
var objW=$("#"+obj).width();//浮动对象的宽度
var objT=Number(st)+(Number(ch)-Number(objH))/2;
var objL=Number(sl)+(Number(cw)-Number(objW))/2;
return objT+"|"+objL;
}
function resetBg(){
var fullbg=$("#pagemask").css("display");
if(fullbg=="block"){
var bH2=$("body").height();
var bW2=$("body").width();
$("#pagemask").css({width:bW2,height:bH2});
var objV=getObjWh("dialog");
var tbT=objV.split("|")[0]+"px";
var tbL=objV.split("|")[1]+"px";
$("#dialog").css({top:tbT,left:tbL});
}
}

//关闭灰色JS遮罩层和操作窗口
function closeBg(){
$("#pagemask").css("display","none");
$("#dialog").css("display","none");
}
</script>
<script type="text/javascript">
$(function(){
    var $li =$("#skin li");
		$li.click(function(){
		$("#"+this.id).addClass("selected").siblings().removeClass("selected");
		$("#cssfile").attr("href","css/"+ (this.id) +".css");
        $.cookie( "MyCssSkin" ,  this.id , { path: '/', expires: 10 });

        $('iframe').contents().find('#cssfile2').attr("href","css/"+ (this.id) +".css");
    });

    var cookie_skin = $.cookie( "MyCssSkin");
    if (cookie_skin) {
		$("#"+cookie_skin).addClass("selected").siblings().removeClass("selected");
		$("#cssfile").attr("href","css/"+ cookie_skin +".css");
		$.cookie( "MyCssSkin" ,  cookie_skin  , { path: '/', expires: 10 });
    }
});
function addFavorite(url, title) {
	try {
		window.external.addFavorite(url, title);
	} catch (e){
		try {
			window.sidebar.addPanel(title, url, '');
        	} catch (e) {
			showDialog("收藏成功", 'notice');
		}
	}
}
</script>

</head>

<body style="min-width: 1200px; margin: 0px; ">
<div id="pagemask"></div>
<div id="dialog" style="display:none">
  <div class="title">
    <h3>管理中心导航</h3>
    <span><a href="JavaScript:void(0);" onclick="closeBg();">关闭</a></span>
  </div>
  <div class="content">
    <dl>
      <dt>设置</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('base,setting,setting')">站点设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('qq,account,setting')">账号同步</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('param,upload,setting')">上传设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('seo,setting,setting')">SEO设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('email,message,setting')">邮箱短信</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('system,payment,setting')">支付方式</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('admin,admin,setting')">权限设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,express,setting')">快递公司</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('waybill_list,waybill,setting')">运单模板</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('area,area,setting')">地区管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,offpay_area,setting')">配送地区</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('clear,cache,setting')">清理缓存</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('db,db,setting')">数据备份</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('perform,perform,setting')">性能优化</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('search,search,setting')">搜索设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('list,admin_log,setting')">操作日志</a></dd>
    </dl>
    <dl>
      <dt>商品</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('goods_class,goods_class,goods')">分类管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('brand,brand,goods')">品牌管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('goods,goods,goods')">商品管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('type,type,goods')">类型管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('spec,spec,goods')">规格管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('list,goods_album,goods')">图片空间</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,web_channel,goods')">频道管理</a></dd>
    </dl>
    <dl>
      <dt>店铺</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('store,store,store')">店铺管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('store_grade,store_grade,store')">店铺等级</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('store_class,store_class,store')">店铺分类</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('store_domain_setting,domain,store')">二级域名</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('stracelist,sns_strace,store')">店铺动态</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('help_store,help_store,store')">店铺帮助</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('edit_info,store_joinin,store')">开店首页</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('list,ownshop,store')">自营店铺</a></dd>
    </dl>
    <dl>
      <dt>会员</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('member,member,member')">会员管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,member_grade,member')">会员级别</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,exppoints,member')">经验值管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('notice,notice,member')">会员通知</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('addpoints,points,member')">积分管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('predeposit,predeposit,member')">预存款</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('sharesetting,sns_sharesetting,member')">分享绑定</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('class_list,sns_malbum,member')">会员相册</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('tracelist,snstrace,member')">买家动态</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('member_tag,sns_member,member')">会员标签</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('chat_log,chat_log,member')">聊天记录</a></dd>
    </dl>
    <dl>
      <dt>交易</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('index,order,trade')">实物订单</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,vr_order,trade')">虚拟订单</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('refund_manage,refund,trade')">退款管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('return_manage,return,trade')">退货管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('refund_manage,vr_refund,trade')">虚拟订单退款</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('consulting,consulting,trade')">咨询管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('inform_list,inform,trade')">举报管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('evalgoods_list,evaluate,trade')">评价管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('complain_new_list,complain,trade')">投诉管理</a></dd>
    </dl>
    <dl>
      <dt>网站</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('article_class,article_class,website')">文章分类</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('article,article,website')">文章管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('document,document,website')">会员协议</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('navigation,navigation,website')">页面导航</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('ap_manage,adv,website')">广告管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('web_config,web_config,website')">首页管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('rec_list,rec_position,website')">推荐位</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('link,link,website')">友情连接</a></dd>
    </dl>
    <dl>
      <dt>运营</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('setting,operation,operation')">基本设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('groupbuy_template_list,groupbuy,operation')">抢购管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,vr_groupbuy,operation')">虚拟抢购设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('xianshi_apply,promotion_xianshi,operation')">限时折扣</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('mansong_apply,promotion_mansong,operation')">满即送</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('bundling_list,promotion_bundling,operation')">优惠套装</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('goods_list,promotion_booth,operation')">推荐展位</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('voucher_apply,voucher,operation')">代金券</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,bill,operation')">结算管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,vr_bill,operation')">虚拟订单结算</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('activity,activity,operation')">活动管理</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('pointprod,pointprod,operation')">兑换礼品</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,mall_consult,operation')">平台客服</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,rechargecard,operation')">平台充值卡</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('index,delivery,operation')">物流自提服务站</a></dd>
      </dl>
    <dl>
      <dt>统计</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('general,stat_general,stat')">概述及设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('scale,stat_industry,stat')">行业分析</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('newmember,stat_member,stat')">会员统计</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('newstore,stat_store,stat')">店铺统计</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('income,stat_trade,stat')">销量分析</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('pricerange,stat_goods,stat')">商品分析</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('promotion,stat_marketing,stat')">营销分析</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('refund,stat_aftersale,stat')">售后分析</a></dd>
    </dl>
    <dl>
      <dt>手机端</dt>
      <dd><a href="javascript:void(0)" onclick="openItem('index_edit,mb_special,mobile')">首页编辑</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('special_list,mb_special,mobile')">专题设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('mb_category_list,mb_category,mobile')">分类图片设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('mb_app,mb_app,mobile')">下载设置</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('flist,mb_feedback,mobile')">意见反馈</a></dd>
      <dd><a href="javascript:void(0)" onclick="openItem('mb_payment,mb_payment,mobile')">手机支付</a></dd>
    </dl>
  </div>
</div>
<table style="width: 100%;" id="frametable" height="100%" width="100%" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td colspan="2" height="90" class="mainhd">
        <div class="layout-header"> <!-- Title/Logo - can use text instead of image -->
          <div id="title"><a href="index.php"></a></div>
          <!-- Top navigation -->
          <div id="topnav" class="top-nav">
            <ul>
              <li class="adminid" title="您好:admin">您好&nbsp;:&nbsp;<strong>admin</strong></li>
              <li><a href="#" target="workspace" ><span>修改密码</span></a></li>
              <li><a href="#" title="安全退出"><span>安全退出</span></a></li>
              <li><a href="#" target="_blank" title="商城首页"><span>商城首页</span></a></li>
            </ul>
          </div>
          <!-- End of Top navigation -->
          <!-- Main navigation -->
          <nav id="nav" class="main-nav">
            <ul>
           		<li><a class="link actived" id="nav_dashboard" href="javascript:;" onclick="openItem('dashboard');"><span>控制台</span></a></li>
				      <li><a class="link" id="nav_setting" href="javascript:;" onclick="openItem('setting');"><span>设置</span></a></li>
      				<li><a class="link" id="nav_goods" href="javascript:;" onclick="openItem('goods');"><span>商品</span></a></li>
      				<li><a class="link" id="nav_store" href="javascript:;" onclick="openItem('store');"><span>店铺</span></a></li>
      				<li><a class="link" id="nav_member" href="javascript:;" onclick="openItem('member');"><span>会员</span></a></li>
      				<li><a class="link" id="nav_trade" href="javascript:;" onclick="openItem('trade');"><span>交易</span></a></li>
      				<li><a class="link" id="nav_operation" href="javascript:;" onclick="openItem('operation');"><span>运营</span></a></li>
              <li><a class="link" id="nav_invoicing" href="javascript:;" onclick="openItem('invoicing');"><span>进销存</span></a></li>
              <li><a class="link" id="nav_stat" href="javascript:;" onclick="openItem('stat');"><span>统计</span></a></li>
            </ul>
          </nav>
          <div class="loca"><strong>您的位置:</strong>
            <div id="crumbs" class="crumbs"><span>设置</span><span class="arrow">&nbsp;</span><span>欢迎页面</span> </div>
          </div>
          <div class="toolbar">
            <ul id="skin" class="skin"><span>换肤</span>
              <li id="skin_0" class="" title="默认风格"></li>
              <li id="skin_1" class="" title="Mac风格"></li>
            </ul>
            <div class="sitemap"><a id="siteMapBtn" href="#rhis" onclick="showBg('dialog','dialog_content');"><span>管理地图</span></a></div>
            <div class="toolmenu"><span class="bar-btn"></span>
              <ul class="bar-list">
                <li><a onclick="openItem('clear,cache,setting');" href="javascript:void(0)">更新站点缓存</a></li>
                <li><a href="#" id="iframe_refresh">刷新管理中心</a></li>
                <li><a href="#" title="收藏管理中心" rel="sidebar" onclick="addFavorite('', '');return false;">收藏管理中心</a></li>
              </ul>
            </div>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td class="menutd" valign="top" width="161">
      	<div id="mainMenu" class="main-menu">

          <ul id="sort_dashboard" style="display: block;">
            <li>
            	<a class="selected" id="item_welcome" href="JavaScript:void(0);" onclick="openItem('welcome,dashboard,dashboard');">欢迎页面</a>
            </li>
            <li>
            	<a href="JavaScript:void(0);" onclick="openItem('member_index,member,member');">会员管理</a>
            </li>
            <li>
            	<a href="JavaScript:void(0);" onclick="openItem('store_index,store,store');">店铺管理</a>
            </li>
            <li>
            	<a href="JavaScript:void(0);" onclick="openItem('');">商品管理</a>
            </li>
            <li>
            	<a href="JavaScript:void(0);" onclick="openItem('');">订单管理</a>
            </li>
          </ul>
          <ul id="sort_setting" style="display: none;">
            <li>
            	<a id='item_storage_index' href="JavaScript:void(0);" onclick="openItem('storage_index,setting,setting');">仓储管理</a>
            </li>
            <li>
              <a id='item_delivery_index' href="JavaScript:void(0);" onclick="openItem('delivery_index,setting,setting');">配送方式</a>
            </li>
            <li>
            	<a id='item_admin_index' href="JavaScript:void(0);" onclick="openItem('admin_index,setting,setting');">权限管理</a>
            </li>
          </ul>
          <ul id="sort_goods" style="display: none;">
            <li>
            	<a id='item_goods_class_index' href="JavaScript:void(0);" onclick="openItem('goods_class_index,goods,goods');">分类管理</a>
            </li>
            <li>
              <a id='item_goods_index' href="JavaScript:void(0);" onclick="openItem('goods_index,goods,goods');">商品管理</a>
            </li>
            <li>
              <a id='item_goods_type_index' href="JavaScript:void(0);" onclick="openItem('goods_type_index,goods,goods');">类型管理</a>
            </li>
            <li>
            	<a id='item_goods_spec_index' href="JavaScript:void(0);" onclick="openItem('goods_spec_index,goods,goods');">规格管理</a>
            </li>
            <li>
            	<a id='item_goods_brand_index' href="JavaScript:void(0);" onclick="openItem('goods_brand_index,goods,goods');">品牌管理</a>
            </li>
            <li>
            	<a id='item_goods_setting' href="JavaScript:void(0);" onclick="openItem('goods_setting,goods,goods');">商品设置</a>
            </li>
          </ul>
          <ul id="sort_store" style="display: none;">
            <li>
            	<a id='item_store_index' href="JavaScript:void(0);" onclick="openItem('store_index,store,store');">店铺管理</a>
            </li>
            <li>
              <a id='item_store_grade_index' href="JavaScript:void(0);" onclick="openItem('store_grade_index,store,store');">店铺等级</a>
            </li>
          </ul>
          <ul id="sort_member" style="display: none;">
            <li>
            	<a id='item_member_index' href="JavaScript:void(0);" onclick="openItem('member_index,member,member');">会员管理</a>
            </li>
          </ul>
          <ul id="sort_trade" style="display: none;">
            <li>
            	<a id='item_trade_order_index' href="JavaScript:void(0);" onclick="openItem('trade_order_index,trade,trade');">订单管理</a>
            </li>
            <li>
            	<a id='item_trade_delivery_index' href="JavaScript:void(0);" onclick="openItem('trade_delivery_index,trade,trade');">发货管理</a>
            </li>
            <li>
              <a id='item_trade_refund_index' href="JavaScript:void(0);" onclick="openItem('trade_refund_index,trade,trade');">退款管理</a>
            </li>
            <li>
              <a id='item_trade_return_index' href="JavaScript:void(0);" onclick="openItem('trade_return_index,trade,trade');">退货管理</a>
            </li>
          </ul>
          <ul id="sort_operation" style="display: none;">
          	<li>
            	<a id='item_test' href="JavaScript:void(0);" onclick="openItem('test,goods,goods');">专题管理</a>
            </li>
            <li>
            	<a id='item_test' href="JavaScript:void(0);" onclick="openItem('test,goods,goods');">限时折扣</a>
            </li>
            <li>
            	<a id='item_test' href="JavaScript:void(0);" onclick="openItem('test,goods,goods');">满件优惠</a>
            </li>
            <li>
            	<a id='item_test' href="JavaScript:void(0);" onclick="openItem('test,goods,goods');">满金额优惠</a>
            </li>
            <li>
              <a id='item_goods' href="JavaScript:void(0);" onclick="openItem('goods,goods,goods');">优惠套装</a>
            </li>
            <li>
              <a id='item_goods' href="JavaScript:void(0);" onclick="openItem('goods,goods,goods');">优惠券</a>
            </li>
          </ul>
          <ul id="sort_stat" style="display: none;">
          	<li>
            	<a id='item_test' href="JavaScript:void(0);" onclick="openItem('test,goods,goods');">销量分析</a>
            </li>
            <li>
            	<a id='item_test' href="JavaScript:void(0);" onclick="openItem('test,goods,goods');">商品分析</a>
            </li>
            <li>
            	<a id='item_test' href="JavaScript:void(0);" onclick="openItem('test,goods,goods');">会员分析</a>
            </li>
            <li>
            	<a id='item_test' href="JavaScript:void(0);" onclick="openItem('test,goods,goods');">店铺分析</a>
            </li>
            <li>
              <a id='item_goods' href="JavaScript:void(0);" onclick="openItem('goods,goods,goods');">营销分析</a>
            </li>
            <li>
              <a id='item_goods' href="JavaScript:void(0);" onclick="openItem('goods,goods,goods');">售后分析</a>
            </li>
          </ul>
          <ul id="sort_invoicing" style="display: none;">
            <li>
              <a id='item_supplier_index' href="JavaScript:void(0);" onclick="openItem('supplier_index,invoicing,invoicing');">供应商管理</a>
            </li>
            <li>
              <a id='item_stock_index' href="JavaScript:void(0);" onclick="openItem('stock_index,invoicing,invoicing');">库存管理</a>
            </li>
            <li>
              <a id='item_KA_index' href="JavaScript:void(0);" onclick="openItem('KA_index,invoicing,invoicing');">大客户管理</a>
            </li>
            <li>
              <a id='item_quotation_index' href="JavaScript:void(0);" onclick="openItem('quotation_index,invoicing,invoicing');">报价单管理</a>
            </li>
          </ul>
        </div>
        <div class="copyright" style="display: none;">技术支持</div>
      </td>
      <td valign="top" width="100%"><iframe src="" id="workspace" name="workspace" style="overflow: visible;" frameborder="0" width="100%" height="100%" scrolling="yes" onload="window.parent"></iframe></td>
    </tr>
  </tbody>
</table>
</body>
</html>
