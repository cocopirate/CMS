<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>店铺管理</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=store_index"><span>管理</span></a></li>
        <li><a href="JavaScript:void(0);" class="current"><span>开店申请</span></a></li>
        <li><a href="layout.php?op=store_renewal_apply"><span>续签申请</span></a></li>
        <li><a href="layout.php?op=store_add"><span>新增店铺</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="get" name="formSearch">
    <input type="hidden" value="store" name="act">
    <input type="hidden" value="store_joinin" name="op">
    <table class="tb-type1 noborder search">
      <tbody>
        <tr>
          <th><label for="store_name">店主</label></th>
          <td><input type="text" value="" name="store_name" id="store_name" class="txt"></td>
          <th><label for="owner_and_name">店铺</label></th>
          <td><input type="text" value="" name="owner_and_name" id="owner_and_name" class="txt"></td>
          <th><label>申请状态</label></th>
          <td>
              <select name="joinin_state">
                  <option value="">请选择...</option>
                  <option value="">待审核</option>
                  <option value="">待付款</option>
                  <option value="">已付款</option>
                  <option value="">开店成功</option>
                  <option value="">审核失败</option>
                  <option value="">付款审核失败</option>
              </select>
          </td>
            <td>
              <a href="javascript:document.formSearch.submit();" class="btn-search " title="">&nbsp;</a>
              <a href="index.php?act=store&op=store_joinin" class="btns " title=""><span>取消搜索</span></a>
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
            <li>点击审核按钮可以对开店申请进行审核，点击查看按钮可以查看开店信息</li>
          </ul></td>
      </tr>
    </tbody>
  </table>
  <form method="post" id="store_form" name="store_form">
    <input type="hidden" name="form_submit" value="ok" />
    <input type="hidden" name="type" id="type" value="" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
          <th>店铺名称</th>
          <th>店铺账号</th>
          <th>店主账号</th>
          <th class="align-center">付款金额</th>
          <th class="align-center">申请时间</th>
          <th class="align-center">申请状态</th>
          <th class="align-center">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover edit">
          <td><a href="#" >有间小店2</a></td>
          <td>you_jian_shop</td>
          <td>l3999039034</td>
          <td class="align-center">100元</td>
          <td class="align-center">2017-12-01 10:23:45</td>
          <td class="w72 align-center">待审核</td>
          <td class="w200 align-center">
              <a href="#">审核</a> | <a href="#">查看</a>
          </td>
        </tr>

        <tr class="hover edit">
          <td><a href="#" >有间小店2</a></td>
          <td>you_jian_shop2</td>
          <td>l3999039234</td>
          <td class="align-center">100元</td>
          <td class="align-center">2017-12-01 10:23:45</td>
          <td class="w72 align-center">审核失败</td>
          <td class="w200 align-center">
              <a href="#">查看</a>
          </td>
        </tr>

        <tr class="hover edit">
          <td><a href="#" >有间小店2</a></td>
          <td>you_jian_shop2</td>
          <td>l3999039234</td>
          <td class="align-center">100元</td>
          <td class="align-center">2017-12-01 10:23:45</td>
          <td class="w72 align-center">待付款</td>
          <td class="w200 align-center">
              <a href="#">查看</a>
          </td>
        </tr>

        <tr class="hover edit">
          <td><a href="#" >有间小店2</a></td>
          <td>you_jian_shop2</td>
          <td>l3999039234</td>
          <td class="align-center">100元</td>
          <td class="align-center">2017-12-01 10:23:45</td>
          <td class="w72 align-center">已付款</td>
          <td class="w200 align-center">
              <a href="#">付款审核</a> | <a href="#">查看</a>
          </td>
        </tr>

        <tr class="hover edit">
          <td><a href="#" >有间小店2</a></td>
          <td>you_jian_shop2</td>
          <td>l3999039234</td>
          <td class="align-center">100元</td>
          <td class="align-center">2017-12-01 10:23:45</td>
          <td class="w72 align-center">付款审核失败</td>
          <td class="w200 align-center">
              <a href="#">查看</a>
          </td>
        </tr>

        <tr class="hover edit">
          <td><a href="#" >有间小店2</a></td>
          <td>you_jian_shop3</td>
          <td>l39990392324</td>
          <td class="align-center">100元</td>
          <td class="align-center">2017-12-01 10:23:45</td>
          <td class="w72 align-center">开店成功</td>
          <td class="w200 align-center">
              <a href="#">查看</a>
          </td>
        </tr>

      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td></td>
          <td colspan="15">
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
