<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>品牌管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="#"><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="get" name="formSearch" id="formSearch">
    <input type="hidden" name="act" value="brand">
    <input type="hidden" name="op" value="brand">
    <table class="tb-type1 noborder search">
      <tbody>
        <tr>
          <th><label for="search_brand_name">品牌名称</label></th>
          <td><input class="txt" name="search_brand_name" id="search_brand_name" type="text"></td>
          <td>
            <a href="javascript:void(0);" id="ncsubmit" class="btn-search ">&nbsp;</a>
            <a class="btns " href="index.php?act=brand&op=brand" ><span>取消搜索</span></a>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th colspan="12"><div class="title"><h5>操作提示</h5><span class="arrow"></span></div></th>
      </tr>
      <tr>
        <td>
          <ul>
              <li>被推荐品牌，将在前台品牌推荐模块处显示</li>
              <li>在品牌列表页面，品牌将按类别分组，即具有相同类别的品牌为一组，品牌类别与品牌分类无联系</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
  <form method='post' name="brandForm">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
          <th class="w24"></th>
          <th class="w48">排序</th>
          <th class="w270">品牌名称</th>
          <th class="w150">关联分类</th>
          <th>品牌图片标识</th>
          <th class="align-center">是否显示</th>
          <th class="w72 align-center">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover edit">
          <td><input value="" class="checkitem" type="checkbox" name="del_brand_id[]"></td>
          <td class="sort">1</td>
          <td class="name">皮克朋</td>
          <td class="class">家用电器</td>
          <td class="picture">
            <div class="brand-picture"><img src="data/upload/shop/brand/04399838633002147_sm.jpg"/></div>
          </td>
          <td class="align-center">显示</td>
          <td class="align-center">
            <a href="#">编辑</a>&nbsp;|&nbsp;<a href="javascript:void(0)">删除</a></td>
        </tr>
      </tbody>
      <tfoot class="tfoot">
        <tr>
          <td class="w24"><input type="checkbox" class="checkall" id="checkallBottom"></td>
          <td colspan="16">
            <label for="checkallBottom">全选</label>&nbsp;&nbsp;
            <a href="JavaScript:void(0);" class="btn" onclick=""><span>删除</span></a>
            <div class="pagination">
              <ul>
                <li><span>首页</span></li>
                <li><span>上一页</span></li>
                <li><span class="currentpage">1</span></li>
                <li><span>下一页</span></li>
                <li><span>末页</span></li>
              </ul>
            </div>
          </td>
        </tr>
      </tfoot>
    </table>
  </form>
  <div class="clear"></div>
</div>
</div>
<script type="text/javascript" src="js/jquery.edit.js" charset="utf-8"></script>
