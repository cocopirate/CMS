<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>导购分类</h3>
      <ul class="tab-base">
        <li><a href="layout.php?op=goods_class_index"><span>管理</span></a></li>
        <li><a href="JavaScript:void(0);" class="current"><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="goods_class_form" enctype="multipart/form-data" method="post">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label class="validation" for="gc_name">分类名称:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="" name="gc_name" id="gc_name" maxlength="20" class="txt"></td>
          <td class="vatop tips"></td>
        </tr>
        <tr>
          <td colspan="2" class="required"><label for="pic">分类图片:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><span class="type-file-box">
            <input type='text' name='textfield' id='textfield1' class='type-file-text' />
            <input type='button' name='button' id='button1' value='' class='type-file-button' />
            <input name="pic" type="file" class="type-file-file" id="pic" size="30" hidefocus="true" nc_type="change_pic">
            </span></td>
          <td class="vatop tips">建议用16px * 16px，超出后自动隐藏</td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label for="parent_id">上级分类:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform">
            <select name="gc_parent_id" id="gc_parent_id">
              <option value="0">请选择...</option>
              <option value="">数码办公</option>
              <option value="">&nbsp;&nbsp;手机配件</option>
            </select>
          </td>
          <td class="vatop tips">如果选择上级分类，那么新增的分类则为被选择上级分类的子分类</td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label for="parent_id">是否显示:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><ul>
              <li>
                <label>
                  <input type="radio" checked="checked" value="0" name="storage_type">
                  显示</label>
              </li>
              <li>
                <label>
                  <input type="radio" value="1" name="storage_type">
                  隐藏</label>
              </li>
            </ul></td>
          <td class="vatop tips"></td>
        </tr>

        <tr>
          <td colspan="2" class="required"><label>排序:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input type="text" value="0" name="gc_sort" id="gc_sort" class="txt"></td>
          <td class="vatop tips">数字范围为0~10000，数字越小越靠前</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2"><a href="layout.php?op=msg&msgtitle=导购分类添加成功&msgtxt=[导购分类列表]&url=goods_class_index" class="btn" id="submitBtn"><span>提交</span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
<script type="text/javascript" src="js/common_select.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
