<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>管理后台</title>
<script type="text/javascript" src="js_1/jquery.js"></script>
<script type="text/javascript" src="js_1/jquery.validation.min.js"></script>
<script type="text/javascript" src="js_1/admincp.js"></script>
<script type="text/javascript" src="js_1/jquery.cookie.js"></script>
<script type="text/javascript" src="js_1/common.js" charset="utf-8"></script>
<link href="css/skin_0.css" rel="stylesheet" type="text/css" id="cssfile2" />
<link href="js_1/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<link href="css/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="css/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript" src="js_1/perfect-scrollbar.min.js"></script>

<script type="text/javascript">
SITEURL = '';
/*
SITEURL = '<?php echo SHOP_SITE_URL;?>';
RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL;?>';
MICROSHOP_SITE_URL = '<?php echo MICROSHOP_SITE_URL;?>';
CIRCLE_SITE_URL = '<?php echo CIRCLE_SITE_URL;?>';
ADMIN_TEMPLATES_URL = '<?php echo ADMIN_TEMPLATES_URL;?>';
LOADING_IMAGE = "<?php echo ADMIN_TEMPLATES_URL.DS.'images/loading.gif';?>";
*/
//换肤
cookie_skin = $.cookie("MyCssSkin");
if (cookie_skin) {
	$('#cssfile2').attr("href","css/"+ cookie_skin +".css");
}
</script>
</head>
<body>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<?php
	$op = $_GET['op'];
  require_once('iframe/'.$op.'.php');
?>
<!--
<?php if ($output['setting_config']['debug'] == 1){?>
<div id="think_page_trace" class="trace">
  <fieldset id="querybox">
    <legend><?php echo $lang['nc_debug_trace_title'];?></legend>
    <div>
      <?php print_r(Tpl::showTrace());?>
    </div>
  </fieldset>
</div>
<?php }?>
-->
</body>
</html>
