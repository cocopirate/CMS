<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>提示</title>
<link href="css/skin_0.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3>操作成功</h3>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <table class="table tb-type2 msg">
    <tbody class="noborder">
      <tr>
        <td rowspan="5" class="msgbg"></td>
        <td class="tip"><?php echo $_GET['msgtitle']; ?></td>
      </tr>
      <tr>
        <td class="tip2">3秒后将会自动返回<?php echo $_GET['msgtxt']; ?></td>
      </tr>
      <tr>
        <td>
          <script type="text/javascript"> window.setTimeout("javascript:location.href='layout.php?op=<?php echo $_GET['url']; ?>'", 3000); </script>
          <a href="layout.php?op=<?php echo $_GET['url']; ?>" class="btns"><span>马上返回</span></a> 
        </td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>