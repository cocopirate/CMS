<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>店铺等级</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="layout.php?op=store_grade_add" ><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="post" name="formSearch">
    <table class="tb-type1 noborder search">
      <tbody>
        <tr>
          <th><label for="like_sg_name">等级名称</label></th>
          <td><input type="text" name="like_sg_name" id="like_sg_name" class="txt"></td>
          <td>
            <a href="javascript:document.formSearch.submit();" class="btn-search " title="">&nbsp;</a>
            <a class="btns " href="#" title=""><span>取消搜索</span></a>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <form id="form_grade" method='post' name="">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
          <th class="w24">&nbsp;</th>
          <th>级别</th>
          <th>等级名称</th>
          <th class="align-center">分销价折扣</th>
          <th class="align-center">分销利润上限</th>
          <th class="align-center">自营商品</th>
          <th class="align-center">店铺装修</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>

        <tr class="hover">
          <td>
            <input type="checkbox" name='check_sg_id[]' value="" class="checkitem">
          </td>
          <td class="w36">0</td>
          <td>系统默认</td>
          <td class="align-center">100%</td>
          <td class="align-center">100%</td>
          <td class="align-center">不允许</td>
          <td class="align-center">不允许</td>
          <td class="w270">
            <a href="">编辑</a> | 系统默认不能删除
          </td>
        </tr>

        <tr class="hover">
          <td>
            <input type="checkbox" name='check_sg_id[]' value="" class="checkitem">
          </td>
          <td class="w36">10</td>
          <td>黄金店铺</td>
          <td class="align-center">90%</td>
          <td class="align-center">+10元</td>
          <td class="align-center">不允许</td>
          <td class="align-center">不允许</td>
          <td class="w270">
            <a href="">编辑</a> | <a href="">删除</a>
          </td>
        </tr>

        <tr class="hover">
          <td>
            <input type="checkbox" name='check_sg_id[]' value="" class="checkitem">
          </td>
          <td class="w36">10</td>
          <td>白金店铺</td>
          <td class="align-center">80%</td>
          <td class="align-center">+5%</td>
          <td class="align-center">不允许</td>
          <td class="align-center">允许</td>
          <td class="w270">
            <a href="">编辑</a> | <a href="">删除</a>
          </td>
        </tr>

        <tr class="hover">
          <td>
            <input type="checkbox" name='check_sg_id[]' value="" class="checkitem">
          </td>
          <td class="w36">10</td>
          <td>钻石店铺</td>
          <td class="align-center">70%</td>
          <td class="align-center">+10%</td>
          <td class="align-center">允许</td>
          <td class="align-center">允许</td>
          <td class="w270">
            <a href="">编辑</a> | <a href="">删除</a>
          </td>
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
