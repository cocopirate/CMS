<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>权限设置</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=admin_index"><span>管理员</span></a></li>
        <li><a class="current"><span>添加管理员</span></a></li>
        <li><a href="layout.php?op=gadmin_index"><span>权限组</span></a></li>
        <li><a href="layout.php?op=gadmin_add"><span>添加权限组</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="user_form" enctype="multipart/form-data" method="post">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="admin_name">登录名:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="admin_name" id="admin_name" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation" for="admin_name">密码:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="admin_name" id="admin_name" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation" for="admin_name">确认密码:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="admin_name" id="admin_name" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label>权限组:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <select name="search_state" >
              <option value="">选择权限组</option>
              <option value="no_isbuy">财务</option>
              <option value="no_memberstate">运营</option>
            </select>
          </td>
          <td class="vatop tips"></td>
        </tr>
        
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="15"><a href="layout.php?op=msg&msgtitle=管理员账号添加成功&msgtxt=[管理员列表]&url=admin_index" class="btn"><span>提交</span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script type="text/javascript" src="js_1/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<script type="text/javascript" src="js_1/jquery-ui/jquery.ui.js"></script>
<script type="text/javascript" src="js_1/ajaxfileupload/ajaxfileupload.js"></script>
<script type="text/javascript" src="js_1/jquery.Jcrop/jquery.Jcrop.js"></script>
<link href="js_1/jquery.Jcrop/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" id="cssfile2" />
<script type="text/javascript">

</script>
