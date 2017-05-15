<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>仓储管理</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=storage_index" ><span>管理</span></a></li>
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
          <td colspan="2" class="required"><label class="validation" for="storage_name">仓储名称:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="storage_name" id="storage_name" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label class="validation">仓储类型:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><ul>
              <li>
                <label>
                  <input type="radio" checked="checked" value="0" name="storage_type">
                  普通仓</label>
              </li>
              <li>
                <label>
                  <input type="radio" value="1" name="storage_type">
                  保税仓</label>
              </li>
              <li>
                <label>
                  <input type="radio" value="2" name="storage_type">
                  海外仓</label>
              </li>
            </ul></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation">配送方式:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
              <label>
              <input type="checkbox" name="gc_virtual" value="1" checked="true">
              默认快递</label>
              <label>
              <input type="checkbox" name="gc_virtual" value="1">
              邮政小包</label>
              <label>
              <input type="checkbox" name="gc_virtual" value="1">
              顺丰快递</label>
              <label>
              <input type="checkbox" name="gc_virtual" value="1">
              国际EMS</label>
              <label>
              <input type="checkbox" name="gc_virtual" value="1">
              圆通快递</label>
              <label>
              <input type="checkbox" name="gc_virtual" value="1">
              天天快递</label>
              <label>
              <input type="checkbox" name="gc_virtual" value="1">
              中通快递</label>
          </td>
          <td class="vatop tips">选择默认快递即表示平台根据仓储实际情况选择快递配送。</td>
        </tr>

        <tr class="noborder">
          <td colspan="2" class="required"><label for="storage_limit">限购金额:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="storage_limit" id="storage_limit" class="txt"></td>
          <td class="vatop tips">不填写表示不限制购买金额</td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label>仓储图标:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
			<span class="type-file-show">
			<img class="show_image" src="images/preview.png">
			<div class="type-file-preview" style="display: none;"><img id="view_img" src="images/default_store_logo.gif"></div>
			</span>
            <span class="type-file-box">
              <input type='text' name='member_avatar' id='member_avatar' class='type-file-text' />
              <input type='button' name='button' id='button' value='' class='type-file-button' />
              <input name="_pic" type="file" class="type-file-file" id="_pic" size="30" hidefocus="true" />
            </span>
            </td>
          <td class="vatop tips">支持gif,jpg,jpeg,png</td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="15"><a href="layout.php?op=msg&msgtitle=仓储添加成功&msgtxt=[仓储管理]&url=storage_index" class="btn"><span>提交</span></a></td>
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
