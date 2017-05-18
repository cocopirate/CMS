<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>新增店铺</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=store_index"><span>管理</span></a></li>
        <li><a href="layout.php?op=store_apply"><span>开店申请</span></a></li>
        <li><a href="layout.php?op=store_renewal_apply"><span>续签申请</span></a></li>
        <li><a href="layout.php?op=store_class_apply"><span>经营类目申请</span></a></li>
        <li><a href="JavaScript:void(0);" class="current"><span>新增店铺</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th colspan="12"><div class="title">
            <h5>操作提示</h5>
            <span class="arrow"></span></div>
        </th>
      </tr>
      <tr>
        <td><ul>
            <li>平台可以在此处添加外驻店铺，新增的外驻店铺默认为开启状态</li>
            <li>新增外驻店铺默认绑定所有经营类目并且佣金为0，可以手动设置绑定其经营类目</li>
            <li>新增外驻店铺将自动创建店主会员账号（用于登录网站会员中心）以及商家账号（用于登录商家中心）</li>
          </ul></td>
      </tr>
    </tbody>
  </table>
  <form id="store_form" method="post">
    <input type="hidden" name="form_submit" value="ok" />
    <input type="hidden" name="store_id" />
    <table class="table tb-type2">
      <tbody>

        <tr>
          <td colspan="2" class="required"><label class="validation" for="store_name">店铺名称:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" id="store_name" name="store_name" class="txt" /></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation">店铺等级:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <select name="grade_id">
              <option value="">请选择...</option>
              <option value="">系统默认</option>
              <option value="">黄金店铺</option>
              <option value="">白金店铺</option>
              <option value="">钻石店铺</option>
              <option value="">自营店铺</option>
            </select>
          </td>
          <td class="vatop tips"></td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="member_name">店主账号:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" id="member_name" name="member_name" class="txt" /></td>
          <td class="vatop tips">用于登录会员中心</td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation" for="seller_name">店铺账号:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" id="seller_name" name="seller_name" class="txt" /></td>
          <td class="vatop tips">用于登录商家中心，可与店主账号不同</td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation" for="member_passwd">登录密码:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="password" value="" id="member_passwd" name="member_passwd" class="txt" /></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label class="validation" for="member_passwd">确认密码:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="password"  class="txt" /></td>
          <td class="vatop tips"></td>
        </tr>

      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="15"><a href="layout.php?op=msg&msgtitle=店铺添加成功&msgtxt=[店铺管理]&url=store_index" class="btn" id="submitBtn"><span>提交</span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
