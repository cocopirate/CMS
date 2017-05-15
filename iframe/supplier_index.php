<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>供应商管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="layout.php?op=supplier_add" ><span>新增</span></a></li>
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
              <option value="member_name">供应商名称</option>
              <option value="member_mobile">供应商编号</option>
            </select>
          </td>
          <td>
            <input type="text" name="search_field_value" class="txt">
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
    <!--
    <table class="tb-type1 noborder search">
      <tbody>
        <tr style="background: rgb(255, 255, 255);">
          <th><label for="search_brand_name">首字母</label></th>
          <td>
                <a href="#">A</a>&nbsp;&nbsp;
                <a href="#">B</a>&nbsp;&nbsp;
                <a href="#">C</a>&nbsp;&nbsp;
                <a href="#">D</a>&nbsp;&nbsp;
                <a href="#">E</a>&nbsp;&nbsp;
                <a href="#">F</a>&nbsp;&nbsp;
                <a href="#">G</a>&nbsp;&nbsp;
                <a href="#">H</a>&nbsp;&nbsp;
                <a href="#">I</a>&nbsp;&nbsp;
                <a href="#">J</a>&nbsp;&nbsp;
                <a href="#">K</a>&nbsp;&nbsp;
                <a href="#">L</a>&nbsp;&nbsp;
                <a href="#">M</a>&nbsp;&nbsp;
                <a href="#">N</a>&nbsp;&nbsp;
                <a href="#">O</a>&nbsp;&nbsp;
                <a href="#">P</a>&nbsp;&nbsp;
                <a href="#">Q</a>&nbsp;&nbsp;
                <a href="#">R</a>&nbsp;&nbsp;
                <a href="#">S</a>&nbsp;&nbsp;
                <a href="#">T</a>&nbsp;&nbsp;
                <a href="#">U</a>&nbsp;&nbsp;
                <a href="#">V</a>&nbsp;&nbsp;
                <a href="#">W</a>&nbsp;&nbsp;
                <a href="#">X</a>&nbsp;&nbsp;
                <a href="#">Y</a>&nbsp;&nbsp;
                <a href="#">Z</a>&nbsp;&nbsp;
                  </td>
        </tr>
      </tbody>
    </table>
    -->
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
            <li>通过供应商管理，你可以进行查看、编辑供应商资料等操作</li>
            <li>你可以根据相关条件进行搜索供应商，然后选择相应的操作</li>
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
          <th colspan="2">供应商名称</th>
          <th class="align-center"><span>商品数量</span></th>
          <th class="align-center"><span>联系人</span></th>
          <th class="align-center"><span>联系电话</span></th>
          <th class="align-center">状态</th>
          <th class="align-center">操作</th>
        </tr>
      <tbody>
        <tr class="hover member">
          <td class="w24"><input type="checkbox" value="member_id" class="checkitem"></td>
          <td class="w48 picture">
            <div class="size-44x44">
              <span class="thumb size-44x44">
                <i></i>
                <img src="images/default_user_portrait.gif" style="width:44px;height:44px;"/>
              </span>
            </div>
          </td>
          <td><p class="name"><strong>铭东</strong>(编号:0293823)</p>
            <p class="smallfont">创建时间:&nbsp;2017-05-11 11:35:56</p>
              </td>
          <td class="align-center">3</td>
          <td class="align-center">张三丰</td>
          <td class="align-center">15088909823</td>
          <td class="align-center">启用</td>
          <td class="align-center"><a href="#">编辑</a> | <a href="#">管理</a> | <a href="#">禁用</a></td>
        </tr>

        <tr class="hover member">
          <td class="w24"><input type="checkbox" class="checkitem"></td>
          <td class="w48 picture">
            <div class="size-44x44">
              <span class="thumb size-44x44">
                <i></i>
                <img src="images/default_user_portrait.gif" style="width:44px;height:44px;"/>
              </span>
            </div>
          </td>
          <td><p class="name"><strong>海豚</strong>(编号:0298978)</p>
            <p class="smallfont">创建时间:&nbsp;2017-05-11 11:35:56</p>
              </td>
          <td class="align-center">10</td>
          <td class="align-center">刘德华</td>
          <td class="align-center">15088909856</td>
          <td class="align-center">禁用</td>
          <td class="align-center"><a href="#">编辑</a> | <a href="#">管理</a> | <a href="#">禁用</a></td>
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
