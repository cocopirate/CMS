<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>订单管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="get" action="index.php" name="formSearch" id="formSearch">
    <input type="hidden" name="act" value="order" />
    <input type="hidden" name="op" value="index" />
    <table class="tb-type1 noborder search">
      <tbody>
        <tr>
         <th><label>订单号</label></th>
         <td><input class="txt2" type="text" name="order_sn" value="" /></td>
         <th>店铺</th>
         <td><input class="txt-short" type="text" name="store_name" /></td>
         <th><label>订单状态</label></th>
          <td colspan="4">
            <select name="order_state" class="querySelect">
              <option value="">请选择...</option>
              <option value="10">待付款</option>
              <option value="20">待发货</option>
              <option value="30">待收货</option>
              <option value="40">交易完成</option>
              <option value="0">已取消</option>
            </select>
          </td>
        </tr>
        <tr>
          <th><label for="query_start_time">下单时间</label></th>
          <td>
            <input class="txt date hasDatepicker" type="text" value="" id="query_start_time" name="query_start_time" readonly="readonly"/>
            <label for="query_start_time">~</label>
            <input class="txt date hasDatepicker" type="text" value="" id="query_end_time" name="query_end_time" readonly="readonly"/>
          </td>
         <th>买家</th>
         <td><input class="txt-short" type="text" name="buyer_name" /></td>
         <th>付款方式</th>
         <td>
            <select name="payment_code" class="w100">
              <option value="">请选择...</option>
              <option value=""></option>
            </select>
         </td>
         <td><a href="javascript:void(0);" id="ncsubmit" class="btn-search ">&nbsp;</a></td>
        </tr>
      </tbody>
    </table>
  </form>
  <table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th colspan="12">
          <div class="title"><h5>操作提示</h5><span class="arrow"></span></div>
        </th>
      </tr>
      <tr>
        <td>
          <ul>
            <li>点击查看操作将显示订单（包括订单物品）的详细信息</li>
            <li>点击取消操作可以取消订单（在线支付但未付款的订单和货到付款但未发货的订单）</li>
            <li>如果平台已确认收到买家的付款，但系统支付状态并未变更，可以点击收到货款操作，并填写相关信息后更改订单支付状态</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
  <div style="text-align:right;">
    <a class="btns" target="_blank" href=""><span>导入Excel</span></a>
    <a class="btns" target="_blank" href=""><span>导出Excel</span></a>
  </div>
  <table class="table tb-type2 nobdb">
    <thead>
      <tr class="thead">
        <th>订单号</th>
        <th>店铺</th>
        <th>买家</th>
        <th class="align-center">订单时间</th>
        <th class="align-center">订单总额</th>
        <th class="align-center">支付方式</th>
        <th class="align-center">订单状态</th>
        <th class="align-center">操作</th>
      </tr>
    </thead>
    <tbody>

      <tr class="hover">
        <td>9000000000000201</td>
        <td>有间小店2</td>
        <td>testuser</td>
        <td class="nowrap align-center">2017-05-19 16:33:30</td>
        <td class="align-center">14.00</td>
        <td class="align-center">在线支付</td>
        <td class="align-center">待付款</td>
        <td class="w144 align-center">
          <a href="#">查看</a>  | <a href="#">取消</a>  | <a href="#">收到货款</a>
        </td>
      </tr>

      <tr class="hover">
        <td>9000000000000201</td>
        <td>有间小店2</td>
        <td>testuser</td>
        <td class="nowrap align-center">2017-05-19 16:33:30</td>
        <td class="align-center">14.00</td>
        <td class="align-center">支付宝</td>
        <td class="align-center">待发货</td>
        <td class="w144 align-center">
          <a href="#">查看</a>
        </td>
      </tr>

      <tr class="hover">
        <td>9000000000000201</td>
        <td>有间小店2</td>
        <td>testuser</td>
        <td class="nowrap align-center">2017-05-19 16:33:30</td>
        <td class="align-center">14.00</td>
        <td class="align-center">微信支付</td>
        <td class="align-center">待收货</td>
        <td class="w144 align-center">
          <a href="#">查看</a>
        </td>
      </tr>

      <tr class="hover">
        <td>9000000000000201</td>
        <td>有间小店2</td>
        <td>testuser</td>
        <td class="nowrap align-center">2017-05-19 16:33:30</td>
        <td class="align-center">14.00</td>
        <td class="align-center">微信支付</td>
        <td class="align-center">交易完成</td>
        <td class="w144 align-center">
          <a href="#">查看</a>
        </td>
      </tr>

    </tbody>
    <tfoot>
      <tr class="tfoot">
        <td colspan="15" id="dataFuncs">
          <div class="pagination">
            <ul>
              <li><span>首页</span></li>
              <li><span>上一页</span></li>
              <li><span class="currentpage">1</span></li>
              <li><span>下一页</span></li>
              <li><span>末页</span></li>
            </ul>
          </div>
        </td>
      </tr>
    </tfoot>
  </table>
</div>
<script type="text/javascript" src="js/jquery-ui/jquery.ui.js"></script>
<script type="text/javascript" src="js/jquery-ui/i18n/zh-CN.js" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="js/jquery-ui/themes/ui-lightness/jquery.ui.css" />
<script type="text/javascript">
$(function(){
    $('#query_start_time').datepicker({dateFormat: 'yy-mm-dd'});
    $('#query_end_time').datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
