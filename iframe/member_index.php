<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>会员管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="layout.php?op=member_add" ><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="get" name="formSearch" id="formSearch">
    <input type="hidden" value="member" name="act">
    <input type="hidden" value="member" name="op">
    <table class="tb-type1 noborder search">
      <tbody>
        <tr>
          <td>
            <select name="search_field_name" >
              <option value="member_name">会员名称</option>
              <option value="member_mobile">手机号码</option>
            </select>
          </td>
          <td>
            <input type="text" name="search_field_value" class="txt">
          </td>
          <td>
            <select name="search_sort" >
              <option value="">排序</option>
              <option value="member_login_time desc">最后登录</option>
              <option value="member_login_num desc">登录次数</option>
            </select>
          </td>
          <td>
            <select name="search_state" >
              <option value="">会员状态</option>
              <option value="no_isbuy">禁止购物</option>
              <option value="no_memberstate">禁止登录</option>
            </select>
          </td>
          <td>
            <a href="javascript:void(0);" id="ncsubmit" class="btn-search " title="">&nbsp;</a>
            <a href="index.php?act=member&op=member" class="btns "><span>撤销搜索</span></a>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th colspan="12"><div class="title">
            <h5>操作提示</h5>
            <span class="arrow"></span></div></th>
      </tr>
      <tr>
        <td><ul>
            <li>通过会员管理，你可以进行查看、编辑会员资料等操作</li>
            <li>你可以根据条件搜索会员，然后选择相应的操作</li>
          </ul></td>
      </tr>
    </tbody>
  </table>
  <form method="post" id="form_member">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2 nobdb">
      <thead>
        <tr class="thead">
          <th>&nbsp;</th>
          <th colspan="2">会员</th>
          <th class="align-center"><span fieldname="logins" nc_type="order_by">登录次数</span></th>
          <th class="align-center"><span fieldname="last_login" nc_type="order_by">最后登录</span></th>
          <th class="align-center">下单次数</th>
          <th class="align-center">消费金额</th>
          <th class="align-center">登录</th>
          <th class="align-center">操作</th>
        </tr>
      <tbody>
      <?php
      for($i=0; $i<=10; $i++){
        echo '
        <tr class="hover member">
          <td class="w24"><input type="checkbox" value="member_id" class="checkitem"></td>
          <td class="w48 picture">
            <div class="size-44x44">
              <span class="thumb size-44x44">
                <i></i>
                <img src="default_user_portrait.gif" style="width:44px;height:44px;"/>
              </span>
            </div>
          </td>
          <td><p class="name"><strong>l3561350</strong></p>
            <p class="smallfont">注册时间:&nbsp;2017-05-11 11:35:56</p>
            
              <div class="im">
                <span class="mobile" >
                  <a href="#" class=" yes" title="手机号"></a>
                  <div style="font-size:13px; padding-left:20px; padding-top:2px;width: 100px;">15099090923</div>
                </span>
              </div>
              </td>
          <td class="align-center">1</td>
          <td class="w150 align-center"><p>2017-05-11 11:35:56</p>
            <p>192.168.0.1</p></td>
          <td class="align-center">3</td>
          <td class="align-center"><p>¥120.00</p>
          </td>
          <td class="align-center">允许</td>
          <td class="align-center"><a href="#">编辑</a> | <a href="#">通知</a></td>
        </tr>';
      }
        ?>
      </tbody>
      <tfoot class="tfoot">
        <tr>
        <td class="w24"><input type="checkbox" class="checkall" id="checkallBottom"></td>
          <td colspan="16">
          <label for="checkallBottom">全选</label>
            &nbsp;&nbsp;<a href="JavaScript:void(0);" class="btn" onclick=""><span>删除</span></a>
            <div class="pagination"> <ul><li><span>首页</span></li><li><span>上一页</span></li><li><span class="currentpage">1</span></li><li><span>下一页</span></li><li><span>末页</span></li></ul> </div></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script>
$(function(){
    $('#ncsubmit').click(function(){
      $('input[name="op"]').val('member');$('#formSearch').submit();
    }); 
});
</script>
