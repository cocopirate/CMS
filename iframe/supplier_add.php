<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>供应商管理</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=supplier_index" ><span>管理</span></a></li>
        <li><a href="JavaScript:void(0);" class="current"><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="user_form" enctype="multipart/form-data" method="post">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation">供应商名称:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation">联系人:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation">联系电话:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation">状态:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><ul>
              <li>
                <label>
                  <input type="radio" checked="checked" value="0" name="state">
                  启用</label>
              </li>
              <li>
                <label>
                  <input type="radio" value="1" name="state">
                  禁用</label>
              </li>
            </ul></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label>公司图标:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <span class="type-file-show">
            <img class="show_image" src="images/preview.png">
            <div class="type-file-preview" style="display: none;"><img id="view_img" src="images/default_user_portrait.gif"></div>
            </span>
            <span class="type-file-box">
              <input type='text' name='member_avatar' id='member_avatar' class='type-file-text' />
              <input type='button' name='button' id='button' value='' class='type-file-button' />
              <input name="_pic" type="file" class="type-file-file" id="_pic" size="30" hidefocus="true" />
            </span>
            </td>
          <td class="vatop tips">支持gif,jpg,jpeg,png</td>
        </tr>
        <tr class="noborder">
          <td colspan="2" class="required"><label>公司全称:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label>详细地址:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label>备注:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><textarea name="statistics_code" rows="6" class="tarea" id="statistics_code"></textarea></td>
          <td class="vatop tips"><span class="vatop rowform"></span></td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="15"><a href="layout.php?op=msg&msgtitle=供应商添加成功&msgtxt=[供应商管理]&url=supplier_index" class="btn"><span>提交</span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script type="text/javascript" src="js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-ui/jquery.ui.js"></script>
<script type="text/javascript" src="js/ajaxfileupload/ajaxfileupload.js"></script>
<script type="text/javascript" src="js/jquery.Jcrop/jquery.Jcrop.js"></script>
<link href="js/jquery.Jcrop/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" id="cssfile2" />
