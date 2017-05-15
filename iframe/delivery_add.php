<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>配送方式</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=delivery_index" ><span>管理</span></a></li>
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
          <td colspan="2" class="required"><label class="validation">配送方式:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label class="validation">计费方式:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><ul>
              <li>
                <label>
                  <input type="radio" checked="checked" value="0" name="chargetype">
                  统一费用</label>
              </li>
              <li>
                <label>
                  <input type="radio" value="1" name="chargetype">
                  按重计费</label>
              </li>
            </ul></td>
          <td class="vatop tips"></td>
        </tr>

          <tr class="noborder js-charge-type0">
            <td colspan="2" class="required"><label class="validation">统一计费(元):</label></td>
          </tr>
          <tr class="noborder js-charge-type0">
            <td class="vatop rowform"><input type="text" value="" class="txt"></td>
            <td class="vatop tips"></td>
          </tr>

          <tr class="noborder js-charge-type1" style="display: none;">
            <td colspan="2" class="required"><label class="validation">按重计费:</label></td>
          </tr>
          <tr class="noborder js-charge-type1" style="display: none;">
            <td class="vatop rowform">首重重量(克):&nbsp;&nbsp;<input style="width: 170px;" type="text" value="" class="txt"></td>
            <td class="vatop tips"></td>
          </tr>
          <tr class="noborder js-charge-type1" style="display: none;">
            <td class="vatop rowform">首重费用(元):&nbsp;&nbsp;<input style="width: 170px;" type="text" value="" class="txt"></td>
            <td class="vatop tips"></td>
          </tr>
          <tr class="noborder js-charge-type1" style="display: none;">
            <td class="vatop rowform">续重重量(克):&nbsp;&nbsp;<input style="width: 170px;" type="text" value="" class="txt"></td>
            <td class="vatop tips"></td>
          </tr>
          <tr class="noborder js-charge-type1" style="display: none;">
            <td class="vatop rowform">续重费用(元):&nbsp;&nbsp;<input style="width: 170px;" type="text" value="" class="txt"></td>
            <td class="vatop tips"></td>
          </tr>

        <tr>
          <td colspan="2" class="required"><label>图标:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <span class="type-file-show">
            <img class="show_image" src="images/preview.png">
            <div class="type-file-preview" style="display: none;"><img id="view_img" src="images/default_goods_image.gif" width="100px;height:100px;"></div>
            </span>
            <span class="type-file-box">
              <input type='text' name='member_avatar' id='member_avatar' class='type-file-text' />
              <input type='button' name='button' id='button' value='' class='type-file-button' />
              <input name="_pic" type="file" class="type-file-file" id="_pic" size="30" hidefocus="true" />
            </span>
            </td>
          <td class="vatop tips">支持gif,jpg,jpeg,png</td>
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
          <td colspan="15"><a href="layout.php?op=msg&msgtitle=配送方式添加成功&msgtxt=[配送方式]&url=delivery_index" class="btn"><span>提交</span></a></td>
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
$(function(){
    $("input[name='chargetype']").click(function(){

      if($(this).val() == 0){

        $(".js-charge-type0").show();
        $(".js-charge-type1").hide();

      }else if($(this).val() == 1){

        $(".js-charge-type0").hide();
        $(".js-charge-type1").show();

      }
   });
	});
</script>
