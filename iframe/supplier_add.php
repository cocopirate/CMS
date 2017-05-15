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
<script type="text/javascript" src="js_1/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<script type="text/javascript" src="js_1/jquery-ui/jquery.ui.js"></script>
<script type="text/javascript" src="js_1/ajaxfileupload/ajaxfileupload.js"></script>
<script type="text/javascript" src="js_1/jquery.Jcrop/jquery.Jcrop.js"></script>
<link href="js_1/jquery.Jcrop/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" id="cssfile2" />
<script type="text/javascript">
//裁剪图片后返回接收函数
function call_back(picname){
	$('#member_avatar').val(picname);
	$('#view_img').attr('src',picname);
}
$(function(){
	$('input[class="type-file-file"]').change(uploadChange);
	function uploadChange(){
		var filepatd=$(this).val();
		var extStart=filepatd.lastIndexOf(".");
		var ext=filepatd.substring(extStart,filepatd.lengtd).toUpperCase();		
		if(ext!=".PNG"&&ext!=".GIF"&&ext!=".JPG"&&ext!=".JPEG"){
			alert("file type error");
			$(this).attr('value','');
			return false;
		}
		if ($(this).val() == '') return false;
		ajaxFileUpload();
	}	
	function ajaxFileUpload()
	{
    /*
		$.ajaxFileUpload
		(
			{
				url:'layout.php?act=common&op=pic_upload&form_submit=ok&uploadpath=<?php echo ATTACH_AVATAR;?>',
				secureuri:false,
				fileElementId:'_pic',
				dataType: 'json',
				success: function (data, status)
				{
					if (data.status == 1){
						ajax_form('cutpic','<?php echo $lang['nc_cut'];?>','layout.php?act=common&op=pic_cut&type=member&x=120&y=120&resize=1&ratio=1&url='+data.url,690);
					}else{
						alert(data.msg);
					}
					$('input[class="type-file-file"]').bind('change',uploadChange);
				},
				error: function (data, status, e)
				{
					alert('上传失败');
					$('input[class="type-file-file"]').bind('change',uploadChange);
				}
			}
		)
    */
	};
	//按钮先执行验证再提交表单
	$("#submitBtn").click(function(){
    if($("#user_form").valid()){
     $("#user_form").submit();
	}
	});
  /*
    $('#user_form').validate({
        errorPlacement: function(error, element){
			error.appendTo(element.parent().parent().prev().find('td:first'));
        },
        rules : {
			member_name: {
				required : true,
				minlength: 3,
				maxlength: 20,
				remote   : {
                    url :'index.php?act=member&op=ajax&branch=check_user_name',
                    type:'get',
                    data:{
                        user_name : function(){
                            return $('#member_name').val();
                        },
                        member_id : ''
                    }
                }
			},
            member_passwd: {
				required : true,
                maxlength: 20,
                minlength: 6
            },
            member_email   : {
                required : true,
                email : true,
				remote   : {
                    url :'index.php?act=member&op=ajax&branch=check_email',
                    type:'get',
                    data:{
                        user_name : function(){
                            return $('#member_email').val();
                        },
                        member_id : '<?php echo $output['member_array']['member_id'];?>'
                    }
                }
            },
			member_qq : {
				digits: true,
				minlength: 5,
				maxlength: 11
			}
        },
        messages : {
			member_name: {
				required : '<?php echo $lang['member_add_name_null']?>',
				maxlength: '<?php echo $lang['member_add_name_length']?>',
				minlength: '<?php echo $lang['member_add_name_length']?>',
				remote   : '<?php echo $lang['member_add_name_exists']?>'
			},
            member_passwd : {
				required : '<?php echo '密码不能为空'; ?>',
                maxlength: '<?php echo $lang['member_edit_password_tip']?>',
                minlength: '<?php echo $lang['member_edit_password_tip']?>'
            },
            member_email  : {
                required : '<?php echo $lang['member_edit_email_null']?>',
                email   : '<?php echo $lang['member_edit_valid_email']?>',
				remote : '<?php echo $lang['member_edit_email_exists']?>'
            },
			member_qq : {
				digits: '<?php echo $lang['member_edit_qq_wrong']?>',
				minlength: '<?php echo $lang['member_edit_qq_wrong']?>',
				maxlength: '<?php echo $lang['member_edit_qq_wrong']?>'
			}
        }
    });
    */
});
</script>
