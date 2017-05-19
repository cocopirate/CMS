<link href="css/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="css/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>商品管理</h3>
      <ul class="tab-base">
        <li><a href="JavaScript:void(0);" class="current"><span>所有商品</span></a></li>
        <li><a href="" ><span>下架商品</span></a></li>
        <li><a href=""><span>等待审核</span></a></li>
        <li><a href=""><span>新增</span></a></li>
      </ul>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <form method="get" name="formSearch" id="formSearch">
    <input type="hidden" name="act" value="goods">
    <input type="hidden" name="op" value="goods">
    <table class="tb-type1 noborder search">
      <tbody>
        <tr>
          <th><label for="search_goods_name">商品名称</label></th>
          <td><input type="text" value="" name="search_goods_name" id="search_goods_name" class="txt"></td>
          <th><label for="search_commonid">平台货号</label></th>
          <td><input type="text" value="" name="search_commonid" id="search_commonid" class="txt" /></td>
          <th><label>导购分类</label></th>
          <td id="searchgc_td">
            <select name="gc_parent_id" id="gc_parent_id">
              <option value="0">请选择...</option>
              <option value="">数码办公</option>
              <option value="">&nbsp;&nbsp;手机配件</option>
            </select>
          </td>
        </tr>
        <tr>
          <th><label for="search_store_name">所属店铺</label></th>
          <td><input type="text" value="" name="search_store_name" id="search_store_name" class="txt"></td>
          <th><label>品牌</label></th>
          <td>
            <div id="ajax_brand" class="ncsc-brand-select w180">
                  <div class="selection">
                  	<input name="b_name" id="b_name" value="" type="text" class="txt w180" readonly="readonly" />
                  	<input type="hidden" name="b_id" id="b_id" value="" />
                  </div>
                  <div class="ncsc-brand-select-container">
                    <div class="brand-index" data-url="">
                      <div class="letter" nctype="letter">
                        <ul>
                          <li><a href="javascript:void(0);" data-letter="all">全部品牌</a></li>
                          <li><a href="javascript:void(0);" data-letter="A">A</a></li>
                          <li><a href="javascript:void(0);" data-letter="B">B</a></li>
                          <li><a href="javascript:void(0);" data-letter="C">C</a></li>
                          <li><a href="javascript:void(0);" data-letter="D">D</a></li>
                          <li><a href="javascript:void(0);" data-letter="E">E</a></li>
                          <li><a href="javascript:void(0);" data-letter="F">F</a></li>
                          <li><a href="javascript:void(0);" data-letter="G">G</a></li>
                          <li><a href="javascript:void(0);" data-letter="H">H</a></li>
                          <li><a href="javascript:void(0);" data-letter="I">I</a></li>
                          <li><a href="javascript:void(0);" data-letter="J">J</a></li>
                          <li><a href="javascript:void(0);" data-letter="K">K</a></li>
                          <li><a href="javascript:void(0);" data-letter="L">L</a></li>
                          <li><a href="javascript:void(0);" data-letter="M">M</a></li>
                          <li><a href="javascript:void(0);" data-letter="N">N</a></li>
                          <li><a href="javascript:void(0);" data-letter="O">O</a></li>
                          <li><a href="javascript:void(0);" data-letter="P">P</a></li>
                          <li><a href="javascript:void(0);" data-letter="Q">Q</a></li>
                          <li><a href="javascript:void(0);" data-letter="R">R</a></li>
                          <li><a href="javascript:void(0);" data-letter="S">S</a></li>
                          <li><a href="javascript:void(0);" data-letter="T">T</a></li>
                          <li><a href="javascript:void(0);" data-letter="U">U</a></li>
                          <li><a href="javascript:void(0);" data-letter="V">V</a></li>
                          <li><a href="javascript:void(0);" data-letter="W">W</a></li>
                          <li><a href="javascript:void(0);" data-letter="X">X</a></li>
                          <li><a href="javascript:void(0);" data-letter="Y">Y</a></li>
                          <li><a href="javascript:void(0);" data-letter="Z">Z</a></li>
                          <li><a href="javascript:void(0);" data-letter="0-9">其他</a></li>
                        </ul>
                      </div>
                      <div class="search" nctype="search"><input name="search_brand_keyword" id="search_brand_keyword" type="text" class="text" placeholder="品牌名称关键字查找"/><a href="javascript:void(0);" class="ncsc-btn-mini" style="vertical-align: top;">Go</a></div>
                    </div>
                    <div class="brand-list" nctype="brandList">
                    <ul nctype="brand_list">
                        <li><em>Q</em>Queen</li>
                    </ul>
                    </div>
                    <div class="no-result" nctype="noBrandList" style="display: none;">没有符合"<strong>搜索关键字</strong>"条件的品牌</div>
                  	</div>
                 </div>
          </td>
          <th><label>上架状态</label></th>
          <td><select name="search_state">
              <option value="">请选择...</option>
              <option>出售中</option>
              <option>已下架</option>
              <option>仓库中</option>
            </select></td>
         <th><label>审核状态</label></th>
          <td>
            <select name="search_verify">
              <option value=""  >请选择...</option>
              <option>未审核</option>
              <option>已通过</option>
              <option>审核失败</option>
            </select>
          </td>
          <td>
            <a href="javascript:void(0);" id="ncsubmit" class="btn-search ">&nbsp;</a>
          </td>
          <td class="w120">&nbsp;</td>
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
            <li>上架，当商品处于非上架状态时，前台将不能浏览该商品，店主可控制商品上架状态</li>
            <li>下架，当商品处于下架状态时，前台将不能购买该商品，只有管理员可控制商品下架状态</li>
          </ul></td>
      </tr>
    </tbody>
  </table>
  <form method='post' id="form_goods">
    <input type="hidden" name="form_submit" value="ok" />
    <table class="table tb-type2">
      <thead>
        <tr class="thead">
          <th class="w24"></th>
          <th class="w24"></th>
          <th class="w72">平台货号</th>
          <th colspan="2">商品名称</th>
          <th>品牌&分类</th>
          <th class="w72 align-center">价格(元)</th>
          <th class="w72 align-center">库存</th>
          <th class="w72 align-center">商品状态</th>
          <th class="w72 align-center">审核状态</th>
          <th class="w108 align-center">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr class="hover edit">
          <td><input type="checkbox" name="id[]" class="checkitem"></td>
          <td><i class="icon-plus-sign" style="cursor: pointer;" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
          <td>1000080</td>
          <td class="w60 picture">
            <div class="size-56x56">
              <span class="thumb size-56x56">
                <i></i>
                <img src="images/default_goods_image.gif" style="width:56px;height:56px;"/>
              </span>
            </div>
          </td>
          <td>
            <dl class="goods-info"><dt class="goods-name">ROSETTE/诗留美屋蓝泥洁面乳洗面奶清洁毛孔蓝色洗面奶*2件装</dt>
              <dd class="goods-type">
                <!-- <span class="presell" title="预先发售商品">预售</span> -->
                <i class="icon-tablet" title="手机端商品详情"></i>
              </dd>
              <dd class="goods-store">所属店铺：自营店铺</dd>
            </dl>
          </td>
          <td>
            <p>数码办公 >手机配件 >手机电池</p>
            <p class="goods-brand">品牌：爱他美</p>
            </td>
          <td class="align-center">10.00</td>
          <td class="align-center">1300</td>
          <td class="align-center">出售中</td>
          <td class="align-center">通过</td>
          <td class="align-center">
            <a href="" target="_blank">查看</a>&nbsp;|&nbsp;<a href="javascript:void(0);">下架</a>
          </td>
        </tr>

        <tr class="hover edit">
          <td><input type="checkbox" name="id[]" class="checkitem"></td>
          <td><i class="icon-minus-sign" style="cursor: pointer;" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
          <td>1000080</td>
          <td class="w60 picture">
            <div class="size-56x56">
              <span class="thumb size-56x56">
                <i></i>
                <img src="images/default_goods_image.gif" style="width:56px;height:56px;"/>
              </span>
            </div>
          </td>
          <td>
            <dl class="goods-info"><dt class="goods-name">ROSETTE/诗留美屋蓝泥洁面乳洗面奶清洁毛孔蓝色洗面奶*2件装</dt>
              <dd class="goods-type">
                <!-- <span class="presell" title="预先发售商品">预售</span> -->
                <i class="icon-tablet" title="手机端商品详情"></i>
              </dd>
              <dd class="goods-store">所属店铺：自营店铺</dd>
            </dl>
          </td>
          <td>
            <p>数码办公 >手机配件 >手机电池</p>
            <p class="goods-brand">品牌：爱他美</p>
            </td>
          <td class="align-center">10.00</td>
          <td class="align-center">1300</td>
          <td class="align-center">出售中</td>
          <td class="align-center">通过</td>
          <td class="align-center">
            <a href="" target="_blank">查看</a>&nbsp;|&nbsp;<a href="javascript:void(0);">下架</a>
          </td>
        </tr>

        <tr>
          <td colspan="20">
            <div class="ncsc-goods-sku ps-container">
              <ul class="ncsc-goods-sku-list">
                <li>
                  <div class="goods-thumb" title="商家货号：">
                    <a href="#" target="_blank"><img src="images/default_goods_image.gif"></a>
                  </div>
                  <div class="goods_spec">颜色：<em title="蓝色">蓝色</em></div>
                  <div class="goods_spec">尺码：<em title="xl">xl</em></div>
                  <div class="goods-price">价格：<em title="￥23.00">￥23.00</em></div>
                  <div class="goods-storage">库存：<em title="1000">1000</em></div>
                  <a href="#" target="_blank" class="ncsc-btn-mini">查看商品详情</a>
                </li>
                <li>
                  <div class="goods-thumb" title="商家货号：">
                    <a href="#" target="_blank"><img src="images/default_goods_image.gif"></a>
                  </div>
                  <div class="goods_spec">颜色：<em title="蓝色">蓝色</em></div>
                  <div class="goods_spec">尺码：<em title="xl">xl</em></div>
                  <div class="goods-price">价格：<em title="￥23.00">￥23.00</em></div>
                  <div class="goods-storage">库存：<em title="1000">1000</em></div>
                  <a href="#" target="_blank" class="ncsc-btn-mini">查看商品详情</a>
                </li>
                <li>
                  <div class="goods-thumb" title="商家货号：">
                    <a href="#" target="_blank"><img src="images/default_goods_image.gif"></a>
                  </div>
                  <div class="goods_spec">颜色：<em title="蓝色">蓝色</em></div>
                  <div class="goods_spec">尺码：<em title="xl">xl</em></div>
                  <div class="goods-price">价格：<em title="￥23.00">￥23.00</em></div>
                  <div class="goods-storage">库存：<em title="1000">1000</em></div>
                  <a href="#" target="_blank" class="ncsc-btn-mini">查看商品详情</a>
                </li>
              </ul>
          </td>
        </tr>

        <tr class="hover edit">
          <td><input type="checkbox" name="id[]" class="checkitem"></td>
          <td><i class="icon-plus-sign" style="cursor: pointer;" title="点击展开查看此商品全部规格；规格值过多时请横向拖动区域内的滚动条进行浏览。"></i></td>
          <td>1000080</td>
          <td class="w60 picture">
            <div class="size-56x56">
              <span class="thumb size-56x56">
                <i></i>
                <img src="images/default_goods_image.gif" style="width:56px;height:56px;"/>
              </span>
            </div>
          </td>
          <td>
            <dl class="goods-info"><dt class="goods-name">ROSETTE/诗留美屋蓝泥洁面乳洗面奶清洁毛孔蓝色洗面奶*2件装</dt>
              <dd class="goods-type">
                <!-- <span class="presell" title="预先发售商品">预售</span> -->
                <i class="icon-tablet" title="手机端商品详情"></i>
              </dd>
              <dd class="goods-store">所属店铺：自营店铺</dd>
            </dl>
          </td>
          <td>
            <p>数码办公 >手机配件 >手机电池</p>
            <p class="goods-brand">品牌：爱他美</p>
            </td>
          <td class="align-center">10.00</td>
          <td class="align-center">1300</td>
          <td class="align-center">出售中</td>
          <td class="align-center">通过</td>
          <td class="align-center">
            <a href="" target="_blank">查看</a>&nbsp;|&nbsp;<a href="javascript:void(0);">下架</a>
          </td>
        </tr>
      </tbody>
      <tfoot class="tfoot">
        <tr>
          <td class="w24"><input type="checkbox" class="checkall" id="checkallBottom"></td>
          <td colspan="16">
            <label for="checkallBottom">全选</label>&nbsp;&nbsp;
            <a href="JavaScript:void(0);" class="btn" onclick=""><span>下架</span></a>
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

<script type="text/javascript" src="js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-ui/jquery.ui.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/common_select.js" charset="utf-8"></script>
