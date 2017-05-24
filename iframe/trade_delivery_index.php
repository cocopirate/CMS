<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>发货管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="JavaScript:void(0);"><span>发货设置</span></a></li>
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
         <th><label>发货状态</label></th>
          <td colspan="4">
            <select name="order_state" class="querySelect">
              <option value="">请选择...</option>
              <option value="10">待通知发货</option>
              <option value="20">待仓储发货</option>
              <option value="30">发货完成</option>
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
  <table class="table tb-type2">
    <thead>
      <tr class="thead">
        <th class="w24"></th>
        <th class="w24"></th>
        <th class="w72">订单编号</th>
        <th>收货信息</th>
        <th class="w132">物流信息</th>
        <th class="w72 align-center">供应商</th>
        <th class="align-center">下单时间</th>
        <th class="w72 align-center">发货状态</th>
        <th class="w108 align-center">操作</th>
      </tr>
    </thead>
    <tbody>
      <tr class="hover edit">
        <td><input type="checkbox" name="" class="checkitem"></td>
        <td><i class="icon-plus-sign" style="cursor: pointer;" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
        <td>9000000000000201</td>
        <td>
          <dl class="goods-info">
            <dt>张三,15099098923</dt>
            <dd>浙江	杭州市	余杭区 乐富海邦园14撞</dd>
            <dd class="gray">客户留言：-</dd>
          </dl>
        </td>
        <td>
          <dl class="goods-info">
            <dd><strong>运单号：-</strong></dd>
            <dd>物流公司：-</dd>
          </dl>
        </td>
        <td class="align-center">铭东</td>
        <td class="align-center">2017-05-19 16:33:30</td>
        <td class="align-center">待通知发货</td>
        <td class="align-center">
          <a href="" target="_blank">查看</a>&nbsp;|&nbsp;<a href="javascript:void(0);">通知发货</a>
        </td>
      </tr>

      <tr class="hover edit">
        <td><input type="checkbox" name="id[]" class="checkitem"></td>
        <td><i class="icon-minus-sign" style="cursor: pointer;" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
        <td>9000000000000201</td>
        <td>
          <dl class="goods-info">
            <dt>张三,15099098923</dt>
            <dd>浙江	杭州市	余杭区 乐富海邦园14撞</dd>
            <dd class="gray">客户留言：-</dd>
          </dl>
        </td>
        <td>
          <dl class="goods-info">
            <dd><strong>运单号：98839394304</strong></dd>
            <dd>物流公司：韵达快递</dd>
          </dl>
        </td>
        <td class="align-center">励星</td>
        <td class="align-center">2017-05-19 16:33:30</td>
        <td class="align-center">待仓储发货</td>
        <td class="align-center">
          <a href="" target="_blank">查看</a>
        </td>
      </tr>

      <tr>
        <td colspan="20">
          <div class="delivery-goods ps-container">
            <ul class="delivery-goods-list">
              <li>
                <div class="fl goods-thumb">
                  <a href="#" target="_blank"><img src="images/default_goods_image.gif"></a>
                </div>
                <div class="fl ml10">
                  <div class="goods-name">ROSETTE/诗留美屋蓝泥洁面乳洗面奶清洁毛孔蓝色洗面奶*2件装</div>
                  <div class="gray" style="margin-bottom:5px;">货号编码：982837928</div>
                  <span class="virtual">白色</span>
                  <span class="virtual">XL</span>
                </div>
                <div class="fl" style="margin:20px 0 0 50px;">
                  <strong class="red">¥120.00</strong> x 4
                </div>
                <div class="clear"></div>
              </li>
              <li>
                <div class="fl goods-thumb">
                  <a href="#" target="_blank"><img src="images/default_goods_image.gif"></a>
                </div>
                <div class="fl ml10">
                  <div class="goods-name">ROSETTE/诗留美屋蓝泥洁面乳洗面奶清洁毛孔蓝色洗面奶*2件装</div>
                  <div class="gray" style="margin-bottom:5px;">货号编码：982837928</div>
                  <span class="virtual">白色</span>
                  <span class="virtual">XL</span>
                </div>
                <div class="fl" style="margin:20px 0 0 50px;">
                  <strong class="red">¥120.00</strong> x 4
                </div>
                <div class="clear"></div>
              </li>
            </ul>
          </div>
        </td>
      </tr>

      <tr class="hover edit">
        <td><input type="checkbox" name="id[]" class="checkitem"></td>
        <td><i class="icon-plus-sign" style="cursor: pointer;" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
        <td>9000000000000201</td>
        <td>
          <dl class="goods-info">
            <dt>张三,15099098923</dt>
            <dd>浙江	杭州市	余杭区 乐富海邦园14撞</dd>
            <dd class="gray">客户留言：请在周六日配送</dd>
          </dl>
        </td>
        <td>
          <dl class="goods-info">
            <dd><strong>运单号：98839394304</strong></dd>
            <dd>物流公司：韵达快递</dd>
          </dl>
        </td>
        <td class="align-center">铭东</td>
        <td class="align-center">2017-05-19 16:33:30</td>
        <td class="align-center">发货完成</td>
        <td class="align-center">
          <a href="" target="_blank">查看</a>
        </td>
      </tr>

      <tr class="hover edit">
        <td><input type="checkbox" name="id[]" class="checkitem"></td>
        <td><i class="icon-plus-sign" style="cursor: pointer;" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
        <td>9000000000000201</td>
        <td>
          <dl class="goods-info">
            <dt>张三,15099098923</dt>
            <dd>浙江	杭州市	余杭区 乐富海邦园14撞</dd>
            <dd class="gray">客户留言：-</dd>
          </dl>
        </td>
        <td>
          <dl class="goods-info">
            <dd><strong>运单号：98839394304</strong></dd>
            <dd>物流公司：韵达快递</dd>
          </dl>
        </td>
        <td class="align-center">铭东</td>
        <td class="align-center">2017-05-19 16:33:30</td>
        <td class="align-center">已取消</td>
        <td class="align-center">
          <a href="" target="_blank">查看</a>
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
