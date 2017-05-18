<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>店铺等级</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=store_grade_index"><span>管理</span></a></li>
        <li><a href="JavaScript:void(0);" class="current"><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="grade_form" method="post">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="sg_name">等级名称:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" id="sg_name" name="sg_name" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation">级别: </label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" id="sg_sort" name="sg_sort" class="txt"></td>
          <td class="vatop tips">数值越大表明级别越高</td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation">分销价折扣:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <input type="text" value="100" class="txt">%
          </td>
          <td class="vatop tips">0～100的数字，例如输入85.8，表示分销价折扣85.8%</td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation">分销利润上限:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <input type="text" value="0" class="txt">%
          </td>
          <td class="vatop tips">大于0的数字，例如输入10，表示分销利润上限增加10%</td>
    		</tr>

        <tr>
          <td colspan="2" class="required"><label class="validation">收费标准:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <input type="text" value="0" class="txt">元/年
          </td>
          <td class="vatop tips">必须为数字，在会员开通或升级店铺时将显示在前台</td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label for="skin_limit">店铺权限:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
              <label><input type="checkbox" name="gc_virtual" value="1">自营商品</label>
              <label><input type="checkbox" name="gc_virtual" value="1">店铺装修</label>
          </td>
          <td class="vatop tips"></td>
        </tr>

      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="15"><a href="layout.php?op=msg&msgtitle=店铺等级添加成功&msgtxt=[等级管理]&url=store_grade_index" class="btn" id="submitBtn"><span>提交</span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
