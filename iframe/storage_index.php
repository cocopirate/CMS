<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>仓储管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="layout.php?op=storage_add" ><span>新增</span></a></li>
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
              <option value="member_name">仓储名称</option>
              <option value="member_mobile">仓储编号</option>
            </select>
          </td>
          <td>
            <input type="text" name="search_field_value" class="txt">
          </td>
          <td>
            <select name="search_sort" >
              <option value="">类型</option>
              <option value="member_login_num desc">普通仓</option>
              <option value="member_login_time desc">保税仓</option>
              <option value="member_login_num desc">海外仓</option>
            </select>
          </td>
          <td>
            <select name="search_state" >
              <option value="">状态</option>
              <option value="no_isbuy">禁用</option>
              <option value="no_memberstate">启用</option>
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
            <li>通过仓储管理，你可以进行查看、编辑仓储资料等操作</li>
            <li>你可以根据条件搜索仓储，然后选择相应的操作</li>
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
          <th colspan="2">仓储名称</th>
          <th class="align-center"><span>类型</span></th>
          <th class="align-center">商品数量</th>
          <th class="align-center"><span>状态</span></th>
          <th class="align-center">操作</th>
        </tr>
      <tbody>
        <tr class="hover member">
          <td class="w24"><input type="checkbox" value="member_id" class="checkitem"></td>
          <td class="w48 picture">
            <div class="size-44x44">
              <span class="thumb size-44x44">
                <i></i>
                <img src="images/default_store_logo.gif" style="width:44px;height:44px;"/>
              </span>
            </div>
          </td>
          <td><p class="name"><strong>日本1号仓</strong>(编号:0293823)</p>
            <p class="smallfont">创建时间:&nbsp;2017-05-11 11:35:56</p>
              </td>
          <td class="align-center">海外仓</td>
          <td class="align-center">10</td>
          <td class="align-center">启用</td>
          <td class="align-center"><a href="#">编辑</a> | <a href="#">禁用</a></td>
        </tr>

        <tr class="hover member">
          <td class="w24"><input type="checkbox" value="member_id" class="checkitem"></td>
          <td class="w48 picture">
            <div class="size-44x44">
              <span class="thumb size-44x44">
                <i></i>
                <img src="images/default_store_logo.gif" style="width:44px;height:44px;"/>
              </span>
            </div>
          </td>
          <td><p class="name"><strong>宁波仓</strong>(编号:0293823)</p>
            <p class="smallfont">创建时间:&nbsp;2017-05-11 11:35:56</p>
              </td>
          <td class="align-center">保税仓</td>
          <td class="align-center">10</td>
          <td class="align-center">禁用</td>
          <td class="align-center"><a href="#">编辑</a> | <a href="#">启用</a></td>
        </tr>

        <tr class="hover member">
          <td class="w24"><input type="checkbox" value="member_id" class="checkitem"></td>
          <td class="w48 picture">
            <div class="size-44x44">
              <span class="thumb size-44x44">
                <i></i>
                <img src="images/default_store_logo.gif" style="width:44px;height:44px;"/>
              </span>
            </div>
          </td>
          <td><p class="name"><strong>综合仓</strong>(编号:0293823)</p>
            <p class="smallfont">创建时间:&nbsp;2017-05-11 11:35:56</p>
              </td>
          <td class="align-center">普通仓</td>
          <td class="align-center">10</td>
          <td class="align-center">启用</td>
          <td class="align-center"><a href="#">编辑</a> | <a href="#">禁用</a></td>
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
