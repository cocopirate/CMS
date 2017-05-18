<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>权限设置</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=admin_index"><span>管理员</span></a></li>
        <li><a href="layout.php?op=admin_add"><span>添加管理员</span></a></li>
        <li><a href="layout.php?op=gadmin_index"><span>权限组</span></a></li>
        <li><a class="current"><span>添加权限组</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="add_form" method="post">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2 nobdb">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="admin_name">权限组:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" id="gname" maxlength="40" name="gname" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2"><table class="table tb-type2 nomargin">
              <thead>
                <tr class="space">
                  <th> <input id="limitAll" value="1" type="checkbox">&nbsp;&nbsp;设置权限</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td>
                    <input id="limit_setting" type="checkbox" onclick="selectLimit('limit_setting')">
                    <label><b>设置</b>&nbsp;&nbsp;</label>
                    <label><input class="limit_setting" type="checkbox" >仓储管理&nbsp;</label>
                    <label><input class="limit_setting" type="checkbox" >配送方式&nbsp;</label>
                    <label><input class="limit_setting" type="checkbox" >权限管理&nbsp;</label>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input id="limit_goods" type="checkbox" onclick="selectLimit('limit_goods')">
                    <label><b>商品</b>&nbsp;&nbsp;</label>
                    <label><input class="limit_goods" type="checkbox" >导购分类&nbsp;</label>
                    <label><input class="limit_goods" type="checkbox" >商品管理&nbsp;</label>
                    <label><input class="limit_goods" type="checkbox" >类目管理&nbsp;</label>
                    <label><input class="limit_goods" type="checkbox" >规格管理&nbsp;</label>
                    <label><input class="limit_goods" type="checkbox" >品牌管理&nbsp;</label>
                    <label><input class="limit_goods" type="checkbox" >搜索设置&nbsp;</label>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input id="limit_store" type="checkbox" onclick="selectLimit('limit_store')">
                    <label><b>店铺</b>&nbsp;&nbsp;</label>
                    <label><input class="limit_store" type="checkbox" >店铺管理&nbsp;</label>
                    <label><input class="limit_store" type="checkbox" >店铺等级&nbsp;</label>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input id="limit_member" type="checkbox" onclick="selectLimit('limit_member')">
                    <label><b>会员</b>&nbsp;&nbsp;</label>
                    <label><input class="limit_member" type="checkbox" >会员管理&nbsp;</label>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input id="limit_trade" type="checkbox" onclick="selectLimit('limit_trade')">
                    <label><b>会员</b>&nbsp;&nbsp;</label>
                    <label><input class="limit_trade" type="checkbox" >订单管理&nbsp;</label>
                    <label><input class="limit_trade" type="checkbox" >发货管理&nbsp;</label>
                    <label><input class="limit_trade" type="checkbox" >退款管理&nbsp;</label>
                    <label><input class="limit_trade" type="checkbox" >退货管理&nbsp;</label>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input id="limit_operation" type="checkbox" onclick="selectLimit('limit_operation')">
                    <label><b>运营</b>&nbsp;&nbsp;</label>
                    <label><input class="limit_operation" type="checkbox" >专题管理&nbsp;</label>
                    <label><input class="limit_operation" type="checkbox" >限时折扣&nbsp;</label>
                    <label><input class="limit_operation" type="checkbox" >满件优惠&nbsp;</label>
                    <label><input class="limit_operation" type="checkbox" >满金额优惠&nbsp;</label>
                    <label><input class="limit_operation" type="checkbox" >优惠套装&nbsp;</label>
                    <label><input class="limit_operation" type="checkbox" >优惠券&nbsp;</label>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input id="limit_invoicing" type="checkbox" onclick="selectLimit('limit_invoicing')">
                    <label><b>进销存</b>&nbsp;&nbsp;</label>
                    <label><input class="limit_invoicing" type="checkbox" >供应商管理&nbsp;</label>
                    <label><input class="limit_invoicing" type="checkbox" >库存管理&nbsp;</label>
                    <label><input class="limit_invoicing" type="checkbox" >大客户管理&nbsp;</label>
                    <label><input class="limit_invoicing" type="checkbox" >报价单管理&nbsp;</label>
                  </td>
                </tr>

                <tr>
                  <td>
                    <input id="limit_stat" type="checkbox" onclick="selectLimit('limit_stat')">
                    <label><b>统计</b>&nbsp;&nbsp;</label>
                    <label><input class="limit_stat" type="checkbox" >销量分析&nbsp;</label>
                    <label><input class="limit_stat" type="checkbox" >商品分析&nbsp;</label>
                    <label><input class="limit_stat" type="checkbox" >会员分析&nbsp;</label>
                    <label><input class="limit_stat" type="checkbox" >店铺分析&nbsp;</label>
                    <label><input class="limit_stat" type="checkbox" >营销分析&nbsp;</label>
                    <label><input class="limit_stat" type="checkbox" >售后分析&nbsp;</label>
                  </td>
                </tr>

              </tbody>
            </table>

          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="2"><a href="layout.php?op=msg&msgtitle=权限组添加成功&msgtxt=[权限组列表]&url=gadmin_index" class="btn" ><span>提交</span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script>
function selectLimit(name){
    if($('#'+name).attr('checked')) {
        $('.'+name).attr('checked',true);
    }else {
        $('.'+name).attr('checked',false);
    }
}
$(document).ready(function(){
	$('#limitAll').click(function(){
		$('input[type="checkbox"]').attr('checked',$(this).attr('checked') == 'checked');
	});
});
</script>
