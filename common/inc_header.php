<!-- header start -->  
<div id="header-wrap">
  <div id="header">
    <div id="logo"></div>
    <div id="welcome">欢迎您的登录！您可在此管理您的系统后台。</div>
    <div id="top-menu">
      <div class="back-index">
        <a href="#">回到首页</a>
      </div>
      
      <?php if($login_statue) { //已登录 ?>
        <div class="login-info">
          <div class="login-info-inner">
            <img class="tx" src="images/tx.jpg" >
            <p class="username">河西</p>
          </div>
          <div class="login-info-list">
            <a href="userinfo.php">账号信息</a>
            <a href="changepass.php">密码修改</a>
            <a href="#">退出</a>
          </div>
        </div>
      <?php }else{ //未登录 ?>
        <div class="login-menu">
          <a href="login.php">登录</a>
          <span>|</span>
          <a href="register.php">注册</a>  
        </div>
      <?php } ?> 
    </div>
  </div>
</div>
<!-- header end --> 