<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>规格管理</h3>
      <ul class="tab-base">
        <li><a class="current" href="JavaScript:void(0);"><span>管理</span></a></li>
        <li><a href="#">新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <table id="prompt" class="table tb-type2">
    <tbody>
      <tr class="space odd">
        <th colspan="12" class="nobg"> <div class="title">
            <h5>操作提示</h5>
            <span class="arrow"></span> </div>
        </th>
      </tr>
      <tr class="odd">
        <td>
          <ul>
            <li>规格将会对应到商品发布的规格，规格值由店铺自己添加。</li>
            <li>默认安装中会添加一个默认颜色规格，请不要删除，只有这个颜色规格才能在商品详细页显示为图片。</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
  <form id="form_spec" method="get">
    <input type="hidden" name="act" value="spec" />
    <input type="hidden" name="op" value="spec_del" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
          <th></th>
          <th>排序</th>
          <th>规格名称</th>
          <th class="align-center">是否显示</th>
          <th class="align-center">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover edit">
          <td class="w24"><input type="checkbox" class="checkitem"/></td>
          <td class="w48 sort">1</td>
          <td class=""><span>颜色</span></td>
          <td class="align-center">显示</td>
          <td class="w96 align-center">
            <a href="#">编辑</a> | <a href="javascript:void(0)">删除</a>
          </td>
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
</div>
<script type="text/javascript" src="js/jquery.edit.js" charset="utf-8"></script>
