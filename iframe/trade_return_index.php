<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>退款管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>待处理</span></a></li>
        <li><a href="#"><span>所有记录</span></a></li>
        <li><a href="#"><span>退货设置</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="get" action="index.php" name="formSearch" id="formSearch">
    <input type="hidden" name="act" value="refund" />
    <input type="hidden" name="op" value="refund_manage" />
    <table class="tb-type1 noborder search">
      <tbody>
        <tr>
        <th>
          <select name="type">
            <option value="order_sn">订单编号</option>
            <option value="refund_sn">退货编号</option>
            <option value="store_name">店铺名</option>
            <option value="buyer_name">买家会员名</option>
          </select>
        </th>
        <td><input type="text" class="text" name="key" /></td>
          <th><label for="add_time_from">申请时间</label></th>
          <td>
            <input class="txt date" type="text" id="add_time_from" name="add_time_from">
            <label for="add_time_to">~</label>
            <input class="txt date" type="text" value="" id="add_time_to" name="add_time_to"/>
          </td>
          <td>
            <a href="javascript:void(0);" id="ncsubmit" class="btn-search ">&nbsp;</a>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th colspan="12"><div class="title"><h5>操作提示</h5><span class="arrow"></span></div></th>
      </tr>
      <tr>
        <td>
          <ul>
              <li>点击查看操作将显示订单（包括订单物品）的详细信息</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
  <table class="table tb-type2 nobdb">
    <thead>
      <tr class="thead">
        <th>订单编号</th>
        <th>退货编号</th>
        <th>店铺名称</th>
        <th>买家名称</th>
        <th class="align-center">申请时间</th>
        <th class="align-center">退款金额(元)</th>
        <th class="align-center">退货数量</th>
        <th class="align-center">操作</th>
      </tr>
    </thead>
    <tbody>
      <tr class="bd-line" >
        <td>9000000000000101</td>
        <td>199102170522094532</td>
        <td>有间小店2</td>
        <td>testuser</td>
        <td class="align-center">2017-05-22 09:45:32</td>
        <td class="align-center">12.00</td>
        <td class="align-center">4</td>
        <td class="align-center">
          <a href="#"> 查看 </a> | <a href="#"> 确认 </a>
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="20">
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
<link rel="stylesheet" type="text/css" href="js/jquery-ui/themes/ui-lightness/jquery.ui.css"  />
<script type="text/javascript">
$(function(){
    $('#add_time_from').datepicker({dateFormat: 'yy-mm-dd'});
    $('#add_time_to').datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
