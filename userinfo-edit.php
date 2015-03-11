<?php
//模拟控制器assign过来登录状态
$login_statue = true;

//模拟控制器assign过来模块信息(决定左侧导航的高亮显示)
$module = 'other';

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>KKH - 账号信息修改</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/userinfo-edit.css">
</head>
<body>

<?php include_once 'common/inc_header.php'; ?>

<div id="container-wrap">
  <div id="container">
    
    <?php include_once 'common/inc_side.php'; ?>

    <div id="main">
      <div id="top-bar">
        <div id="top-bar-nav">
          <a href="javascript:void(0)" class="zhxx cur">账号信息</a>
          <a href="changepass.php" class="mmxg">密码修改</a>
        </div>
        <a href="#" class="btn btn-default btn-82-32 btn-back">返回</a>
      </div>

      <div id="content">
        <div id="con-userinfo">
          <!-- 个人信息 -->
          <h2 class="m-t-40">个人信息</h2>
          <table width="100%" cellpadding="0" cellspacing="0" class="m-t-15">
            <tr>
              <td class="label" width="15%">用户名</td>
              <td width="85%">荷西</td>
            </tr>
            <tr>
              <td class="label">真实姓名</td>
              <td><input type="text" class="text text-296-40" value="张三" placeholder="真实姓名"></td>
            </tr>
            <tr>
              <td class="label">邮箱</td>
              <td>xzzphp@163.com </td>
            </tr>
            <tr>
              <td class="label">手机</td>
              <td>18616675742</td>
            </tr>
            <tr>
              <td class="label">性别</td>
              <td>男</td>
            </tr>
          </table>
          
          <!-- 公司信息 -->
          <h2 class="m-t-25">公司信息</h2>
          <table width="100%" cellpadding="0" cellspacing="0" class="m-t-15">
            <tr>
              <td class="label" width="15%">公司</td>
              <td width="85%"><input type="text" class="text text-296-40" value="上海荷锐信息技术有限公司" placeholder="公司"></td>
            </tr>
            <tr>
              <td class="label">职务</td>
              <td><input type="text" class="text text-296-40" value="行政" placeholder="职务"></td>
            </tr>
            <tr>
              <td class="label">地址</td>
              <td><input type="text" class="text text-296-40" value="上海市浦东新区巨峰路200号" placeholder="地址"></td>
            </tr>
          </table>

          <div class="btn-wrap">
            <a class="btn btn-primary btn-106-36 btn-br-18 fl">确认</a>
            <a class="btn btn-default btn-106-36 btn-br-18 fr" href="userinfo.html" class="btn-c btn-md btn-cancel">取消</a>
          </div>
        </div>

        <!-- 右侧头像信息 -->
        <div id="con-tx">
          <img class="tx-img" src="images/tx.jpg">
          <a class="btn btn-default btn-82-32 center">修改</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'common/inc_footer.php' ?>

<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>