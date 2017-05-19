<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>商品设置</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>搜索设置</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form id="form" method="post" enctype="multipart/form-data" name="settingForm">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <tbody>
        <tr class="noborder">
          <td colspan="2" class="required"><label for="hot_search">热门搜索:</label></td>
        </tr>
        <tr class="noborder">
          <td class="vatop rowform"><input id="hot_search" name="hot_search" value="好商城V4,内衣,笔记本,手机" class="txt" type="text"></td>
          <td class="vatop tips"><span class="vatop rowform">热门搜索，将显示在前台搜索框下面，前台点击时直接作为关键词进行搜索，多个关键词间请用半角逗号 "," 隔开</span></td>
        </tr>
      </tbody>
      <tfoot>
        <tr class="tfoot">
          <td colspan="2" ><a href="layout.php?op=msg&msgtitle=热门搜索词设置成功&msgtxt=[上一页]&url=goods_setting" class="btn"><span>提交</span></a></td>
        </tr>
      </tfoot>
    </table>
  </form>
</div>
