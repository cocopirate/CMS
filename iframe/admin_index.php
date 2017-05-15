<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>权限设置</h3>
      <ul class="tab-base">
        <li><a class="current"><span>管理员</span></a></li>
        <li><a href="layout.php?op=admin_add"><span>添加管理员</span></a></li>
        <li><a href="layout.php?op=gadmin_index"><span>权限组</span></a></li>
        <li><a href="layout.php?op=gadmin_add"><span>添加权限组</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="post" id='form_admin'>
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <thead>
        <tr class="space">
          <th colspan="15" class="nobg">管理员列表</th>
        </tr>
        <tr class="thead">
          <th><input type="checkbox" class="checkall" id="checkallBottom" name="chkVal"></th>
          <th>登录名</th>
          <th class="align-center">上次登录时间</th>
          <th class="align-center">登录次数</th>
          <th class="align-center">权限组</th>
          <th class="align-center">状态</th>
          <th class="align-center">操作</th>
        </tr>
      </thead>
      <tbody>

        <tr class="hover">
          <td class="w24">
            <input type="checkbox" value="0" class="checkitem">
          </td>
          <td>admin</td>
          <td class="align-center">2017-05-12 17:08:19</td>
          <td class="align-center">9</td>
          <td class="align-center">超级管理员</td>
          <td class="align-center">启用</td>
          <td class="w150 align-center">超级管理员不可编辑</td>
        </tr>

        <tr class="hover">
          <td class="w24">
            <input type="checkbox" value="0" class="checkitem">
          </td>
          <td>lee</td>
          <td class="align-center">2017-05-12 17:08:19</td>
          <td class="align-center">9</td>
          <td class="align-center">财务</td>
          <td class="align-center">启用</td>
          <td class="align-center"><a href="#">编辑</a> | <a href="#">禁用</a></td>
        </tr>

        <tr class="hover">
          <td class="w24">
            <input type="checkbox" value="0" class="checkitem">
          </td>
          <td>jojo</td>
          <td class="align-center">2017-05-12 17:08:19</td>
          <td class="align-center">9</td>
          <td class="align-center">运营</td>
          <td class="align-center">禁用</td>
          <td class="align-center"><a href="#">编辑</a> | <a href="#">启用</a></td>
        </tr>

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
