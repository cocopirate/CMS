<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>店铺管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>管理</span></a></li>
        <li><a href="layout.php?op=store_apply"><span>开店申请</span></a></li>
        <li><a href="layout.php?op=store_renewal_apply"><span>续签申请</span></a></li>
        <li><a href="layout.php?op=store_class_apply"><span>经营类目申请</span></a></li>
        <li><a href="layout.php?op=store_add"><span>新增店铺</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="get" name="formSearch" id="formSearch">
  <input type="hidden" value="store" name="act">
  <input type="hidden" value="store" name="op">
  <table class="tb-type1 noborder search">
    <tbody>
      <tr>

        <th><label for="owner_and_name">店主</label></th>
        <td><input type="text" value="" name="owner_and_name" id="owner_and_name" class="txt"></td>

        <th><label for="store_name">店铺名称</label></th>
        <td><input type="text" value="" name="store_name" id="store_name" class="txt"></td>

        <th><label>所属等级</label></th>
        <td>
          <select name="grade_id">
            <option value="">请选择...</option>
            <option value="">系统默认</option>
            <option value="">黄金店铺</option>
            <option value="">白金店铺</option>
            <option value="">钻石店铺</option>
            <option value="">自营店铺</option>
          </select>
        </td>

        <th><label>店铺状态</label></th>
        <td>
            <select name="store_type">
                <option value="">请选择...</option>
                <option value="">开启</option>
                <option value="">关闭</option>
                <option value="">即将到期</option>
                <option value="">已到期</option>
            </select>
        </td>

        <td>
          <a href="javascript:void(0);" id="ncsubmit" class="btn-search " title="">&nbsp;</a>
          <a href="" class="btns " title=""><span>取消搜索</span></a>
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
        <td>
          <ul>
            <li>如果当前时间超过店铺有效期或店铺处于关闭状态，前台将不能继续浏览该店铺，但是店主仍然可以编辑该店铺</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
  <form method="post" id="store_form">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
          <th>店铺名称</th>
          <th>店铺账号</th>
          <th>店主账号</th>
          <th class="align-center">所属等级</th>
          <th class="align-center">有效期至</th>
          <th class="align-center">状态</th>
          <th class="align-center">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover edit">
          <td><a href="" >有间小店</a></td>
          <td>you_jian_shop</td>
          <td>l5022390092</td>
          <td class="align-center">系统默认</td>
          <td class="nowarp align-center">2019-05-23</td>
          <td class="align-center w72">开启</td>
          <td class="align-center w200"><a href="">查看</a> | <a href="">编辑</a> | <a href="">禁用</a></td>
        </tr>
        <tr class="hover edit">
          <td><a href="" >有间小店2</a></td>
          <td>you_jian_shop2</td>
          <td>l5022390032</td>
          <td class="align-center">黄金店铺</td>
          <td class="nowarp align-center">2019-05-23</td>
          <td class="align-center w72">即将到期</td>
          <td class="align-center w200"><a href="">查看</a> | <a href="">编辑</a> | <a href="">禁用</a></td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="16">
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
<script>
