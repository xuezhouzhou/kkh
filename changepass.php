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
<title>KKH - 密码修改</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/changepass.css">
</head>
<body>

<?php include_once 'common/inc_header.php' ?>

<div id="container-wrap">
  <div id="container">
    
    <?php include_once 'common/inc_side.php' ?>

    <div id="main">
      <div id="top-bar">
        <div id="top-bar-nav">
          <a href="userinfo.html" class="zhxx">账号信息</a>
          <a href="javascript:void(0)" class="mmxg cur">密码修改</a>
        </div>
        <a href="#" class="btn btn-default btn-82-32 btn-back">返回</a>
      </div>

      <div id="change-pass">
        <div class="row">
          <div class="col col-l"></div>
          <div class="col col-m">
            <h1>修改密码</h1>
          </div>
          <div class="col col-r"></div>
        </div>

        <div class="row">
          <div class="col col-l"></div>
          <div class="col col-m">
            <input type="password" class="text text-lg" placeholder="原始密码">
          </div>
          <div class="col col-r">
            <p class="warning-tips">密码不正确！</p>
          </div>
        </div>

        <div class="row m-t-15">
          <div class="col col-l"></div>
          <div class="col col-m">
            <input type="password" class="text text-lg" placeholder="设置新密码">
          </div>
          <div class="col col-r"></div>
        </div>

        <div class="row m-t-15">
          <div class="col col-l"></div>
          <div class="col col-m">
            <input type="password" class="text text-lg" placeholder="重复密码">
          </div>
          <div class="col col-r"></div>
        </div>

        <div class="row m-t-25">
          <div class="col col-l"></div>
          <div class="col col-m">
            <a class="btn btn-primary btn-106-36 btn-br-18">确认</a>
          </div>
          <div class="col col-r"></div>
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