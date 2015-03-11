<?php
//模拟控制器assign过来数据
$login_statue = false;
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>KKH - 注册</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/register.css">
</head>
<body>

<?php include_once 'common/inc_header.php'; ?>

<div class="register-wrap">
  <div id="register">
    <div class="row" id="title">
      <div class="col col-l"></div>
      <div class="col col-m">
        <h1>注册</h1>
        <p class="m-t-5">为了能够顺利的注册完成。请正确填以下信息。</p>
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <input type="text" class="text text-md" placeholder="用户名">
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <input type="text" class="text text-md" placeholder="真实姓名">
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <div class="radio-wrap" style="margin-top:7px;">
          <div class="radio">男</div>
          <div class="radio radio-checked">女</div>  
        </div>
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <input type="text" class="text text-md" placeholder="手机">
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <input type="text" class="text text-md" placeholder="邮箱">
      </div>
      <div class="col col-r">
        <p class="warning-tips">邮箱格式不正确！</p>
      </div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <input type="text" class="text text-md" placeholder="公司/组织">
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <input type="text" class="text text-md" placeholder="职务">
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <input type="password" class="text text-md" placeholder="密码">
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-15">
      <div class="col col-l"></div>
      <div class="col col-m">
        <input type="password" class="text text-md" placeholder="重复密码">
      </div>
      <div class="col col-r"></div>
    </div>

    <div class="row m-t-30">
      <div class="col col-l"></div>
      <div class="col col-m">
        <a class="btn btn-primary btn-br-21 btn-136-42 fl">确认</a>
        <a class="btn btn-default btn-br-21 btn-136-42 fr">取消</a>
      </div>
      <div class="col col-r"></div>
    </div>

  </div>  
</div>

<?php include_once 'common/inc_footer.php' ?>

<script src="js/jquery.min.js"></script>
<script>
(function(){
  $(".radio-wrap .radio").click(function(){
    $(this).siblings('.radio-checked').removeClass('radio-checked').end().addClass('radio-checked');
  });
})(jQuery);  
</script>
</body>
</html>