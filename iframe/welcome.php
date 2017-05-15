<script type="text/javascript" src="js_1/jquery.mousewheel.js"></script>
<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>系统信息</h3>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <div class="info-panel">
    <dl class="member">
      <dt>
        <div class="ico">
          <i></i>
          <sub title="会员总数"><span><em id="statistics_member">1</em></span></sub>
        </div>
        <h3>会员</h3>
        <h5>新增会员/预存款提现</h5>
      </dt>
      <dd>
        <ul>
          <li class="w50pre normal">
            <a href="index.php?act=member&op=member">本周新增<sub><em id="statistics_week_add_member">0</em></sub></a>
          </li>
          <li class="w50pre none">
            <a href="index.php?act=predeposit&op=pd_cash_list">预存款提现<sub><em id="statistics_cashlist">0</em></sub></a>
          </li>
        </ul>
      </dd>
    </dl>
    <dl class="shop">
      <dt>
        <div class="ico">
          <i></i>
          <sub title="新增店铺数"><span><em id="statistics_store">2</em></span></sub>
        </div>
        <h3>店铺</h3>
        <h5>新开店铺审核</h5>
      </dt>
      <dd>
        <ul>
          <li class="w20pre none">
            <a href="#">开店审核<sub><em id="statistics_store_joinin">0</em></sub></a>
          </li>
          <li class="w20pre none">
            <a href="#">类目申请<sub><em id="statistics_store_bind_class_applay">0</em></sub></a>
          </li>
          <li class="w20pre none">
            <a href="#">续签申请<sub><em id="statistics_store_reopen_applay">0</em></sub></a>
          </li>
          <li class="w20pre none">
            <a href="#">已到期<sub><em id="statistics_store_expired">0</em></sub></a>
          </li>
          <li class="w20pre none">
            <a href="#">即将到期<sub><em id="statistics_store_expire">0</em></sub></a>
          </li>
        </ul>
      </dd>
    </dl>
    <dl class="goods">
      <dt>
        <div class="ico">
          <i></i>
          <sub title="商品总数"><span><em id="statistics_goods">2</em></span></sub>
        </div>
        <h3>商品</h3>
        <h5>新增商品/品牌申请审核</h5>
      </dt>
      <dd>
        <ul>
          <li class="w25pre normal">
            <a href="#">本周新增<sub title="本周新增"><em id="statistics_week_add_product">1</em></sub></a>
          </li>
          <li class="w25pre none">
            <a href="#">商品审核<sub><em id="statistics_product_verify">0</em></sub></a>
          </li>
          <li class="w25pre none">
            <a href="#">举报<sub><em id="statistics_inform_list">0</em></sub></a>
          </li>
          <li class="w25pre none">
            <a href="#">品牌申请<sub><em id="statistics_brand_apply">0</em></sub></a>
          </li>
        </ul>
      </dd>
    </dl>
    <dl class="trade">
      <dt>
        <div class="ico">
          <i></i>
          <sub title="订单总数"><span><em id="statistics_order">5</em></span></sub>
        </div>
        <h3>交易</h3>
        <h5>交易订单及投诉/举报</h5>
      </dt>
      <dd>
        <ul>
          <li class="w18pre none">
            <a href="#">退款<sub><em id="statistics_refund"></em></sub></a>
          </li>
          <li class="w18pre none">
            <a href="#">退货<sub><em id="statistics_return"></em></sub></a>
          </li>
          <li class="w25pre none">
            <a href="#">虚拟订单退款<sub><em id="statistics_vr_refund"></em></sub></a>
          </li>
          <li class="w18pre none">
            <a href="#">投诉<sub><em id="statistics_complain_new_list">0</em></sub></a>
          </li>
          <li class="w20pre none">
            <a href="#">待仲裁<sub><em id="statistics_complain_handle_list">0</em></sub></a>
          </li>
        </ul>
      </dd>
    </dl>
    <dl class="operation">
      <dt>
        <div class="ico"><i></i></div>
        <h3>运营</h3>
        <h5>系统运营类设置及审核</h5>
      </dt>
      <dd>
        <ul>
          <li class="w15pre none">
            <a href="#">抢购<sub><em id="statistics_groupbuy_verify_list">0</em></sub></a>
          </li>
          <li class="w17pre none">
            <a href="">积分订单<sub><em id="statistics_points_order">0</em></sub></a>
          </li>
          <li class="w17pre none">
            <a href="#">账单审核<sub><em id="statistics_check_billno">0</em></sub></a>
          </li>
          <li class="w17pre none">
            <a href="">账单支付<sub><em id="statistics_pay_billno">0</em></sub></a>
          </li>
          <li class="w17pre none">
            <a href="#">平台客服<sub><em id="statistics_mall_consult">0</em></sub></a>
          </li>
          <li class="w17pre none">
            <a href="#">服务站<sub><em id="statistics_delivery_point">0</em></sub></a>
          </li>
        </ul>
      </dd>
    </dl>
    <div class="clear"></div>
    <div class="system-info"></div>
  </div>
</div>
<script type="text/javascript">
var normal = ['week_add_member','week_add_product'];
var work = ['store_joinin','store_bind_class_applay','store_reopen_applay','store_expired','store_expire','brand_apply','cashlist','groupbuy_verify_list','points_order','complain_new_list','complain_handle_list', 'product_verify','inform_list','refund','return','vr_refund','cms_article_verify','cms_picture_verify','circle_verify','check_billno','pay_billno','mall_consult','delivery_point','offline'];
$(document).ready(function(){
	$.getJSON("index.php?act=dashboard&op=statistics", function(data){
	  $.each(data, function(k,v){
		  $("#statistics_"+k).html(v);
		  if (v!= 0 && $.inArray(k,work) !== -1){
			$("#statistics_"+k).parent().parent().parent().removeClass('none').addClass('high');
		  }else if (v == 0 && $.inArray(k,normal) !== -1){
			$("#statistics_"+k).parent().parent().parent().removeClass('normal').addClass('none');
		  }
	  });
	});
	//自定义滚定条
	$('#system-info').perfectScrollbar();
});
</script>
