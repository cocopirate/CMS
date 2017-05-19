<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>导购分类</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="layout.php?op=goods_class_add" ><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
   <table class="table tb-type2" id="prompt">
    <tbody>
      <tr class="space odd">
        <th class="nobg" colspan="12">
          <div class="title"><h5>操作提示</h5><span class="arrow"></span></div>
        </th>
      </tr>
      <tr>
        <td>
          <ul>
            <li>当店主添加商品时可选择商品分类，用户可根据分类查询商品列表</li>
            <li>点击分类名前“+”符号，显示当前分类的下级分类</li>
            <li>对分类作任何更改后，都需要到 设置 -> 清理缓存 清理商品分类，新的设置才会生效</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
  <form method='post'>
    <input type="hidden" name="form_submit" value="ok" />
    <input type="hidden" name="submit_type" id="submit_type" value="" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
          <th></th>
          <th>排序</th>
          <th>分类名称</th>
          <th class="align-center">是否显示</th>
          <th class="align-center">操作</th>
        </tr>
      </thead>
      <tbody>

        <tr class="hover edit">
          <td class="w48">
            <input type="checkbox" class="checkitem"/>
            <img src="images/tv-expandable.gif">
          </td>
          <td class="w48 sort"><span datatype="number">1</span></td>
          <td class="w50pre name">
            <span style="display:inline-block;width:150px;">数码办公</span>
            <a class="btn-add-nofloat marginleft" href="#"><span>新增下级</span></a>
          </td>
          <td class="align-center">是</td>
          <td class="w96 align-center"><a href="">编辑</a> | <a href="">删除</a></td>
        </tr>

        <tr class="hover edit">
          <td class="w48">
            <input type="checkbox" class="checkitem"/>
            <img src="images/tv-collapsable.gif">
          </td>
          <td class="w48 sort"><span datatype="number">2</span></td>
          <td class="w50pre name">
            <span style="display:inline-block;width:150px;">礼品箱包</span>
            <a class="btn-add-nofloat marginleft" href="#"><span>新增下级</span></a>
          </td>
          <td class="align-center">是</td>
          <td class="w96 align-center"><a href="">编辑</a> | <a href="">删除</a></td>
        </tr>


        <tr class="hover edit">
          <td class="w48">
            <input type="checkbox" class="checkitem"/>
            <img src="images/tv-expandable.gif">
          </td>
          <td class="w48 sort"><span datatype="number">20</span></td>
          <td class="w50pre name">
            <img src="images/tv-item1.gif">
            <span style="display:inline-block;width:150px;">潮流女包</span>
            <a class="btn-add-nofloat marginleft" href="#"><span>新增下级</span></a>
          </td>
          <td class="align-center">是</td>
          <td class="w96 align-center"><a href="">编辑</a> | <a href="">删除</a></td>
        </tr>

        <tr class="hover edit">
          <td class="w48">
            <input type="checkbox" class="checkitem"/>
            <img src="images/tv-collapsable.gif">
          </td>
          <td class="w48 sort"><span datatype="number">3</span></td>
          <td class="w50pre name">
            <span style="display:inline-block;width:150px;">家居家装</span>
            <a class="btn-add-nofloat marginleft" href="#"><span>新增下级</span></a>
          </td>
          <td class="align-center">是</td>
          <td class="w96 align-center"><a href="">编辑</a> | <a href="">删除</a></td>
        </tr>

        <tr class="hover edit">
          <td class="w48">
            <input type="checkbox" class="checkitem"/>
            <img src="images/tv-collapsable.gif">
          </td>
          <td class="w48 sort"><span datatype="number">30</span></td>
          <td class="w50pre name">
            <img src="images/tv-item1.gif">
            <span style="display:inline-block;width:150px;">家居家装</span>
            <a class="btn-add-nofloat marginleft" href="#"><span>新增下级</span></a>
          </td>
          <td class="align-center">是</td>
          <td class="w96 align-center"><a href="">编辑</a> | <a href="">删除</a></td>
        </tr>

        <tr class="hover edit">
          <td class="w48">
            <input type="checkbox" class="checkitem"/>
            <img src="images/tv-item.gif">
          </td>
          <td class="w48 sort"><span>300</span></td>
          <td class="w50pre name">
            <img src="images/tv-expandable1.gif">
            <span style="display:inline-block;width:150px;">家纺</span>
            <a class="btn-add-nofloat marginleft" href="#"><span>新增下级</span></a>
          </td>
          <td class="align-center">是</td>
          <td class="w96 align-center"><a href="">编辑</a> | <a href="">删除</a></td>
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
<script type="text/javascript" src="js/jquery.edit.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.goods_class.js" charset="utf-8"></script>
