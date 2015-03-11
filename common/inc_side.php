    <!-- 侧边栏 start -->
    <div id="side">
      <!-- 侧边栏用户信息 start -->
      <div id="side-userinfo">
        <div class="hover"></div>
        <img class="tx" src="images/tx.jpg">
        <div class="sex sex-m"></div>
        <p class="username">荷西-sweety</p>
        <p class="score"><span class="num">208</span>分</p>
      </div>
      <!-- 侧边栏用户信息 end -->

      <!-- 侧边栏导航 start -->
      <div id="side-menu">
        <a class="menu-list" href="meeting-list.php">
          <?php if($module=="meeting"){ //判断当前的模块是否是会议管理模块(决定是否高亮显示图标) ?>
            <div class="border border-hy"></div>
            <div class="icon icon-hygl-cur"></div>
          <?php } else{ ?>
            <div class="icon icon-hygl"></div>
          <?php }?>
          <div class="title">会议管理</div>
        </a>
        
        <a class="menu-list">
          <div class="icon icon-txlgl"></div>
          <div class="title">通讯录管理</div>
        </a>
        <div id="side-menu-hdgl" class="menu-list">
          <div class="icon icon-hdgl"></div>
          <div class="title">互动管理</div>
          <div class="icon-jt icon-jt-right"></div>
        </div>

        <div id="hdgl-child">
          <a class="menu-list"><div class="title">投票管理</div></a>
          <a class="menu-list"><div class="title">问卷管理</div></a>
          <a class="menu-list"><div class="title">抽奖管理</div></a>
          <a class="menu-list"><div class="title">照片墙管理</div></a>
          <a class="menu-list"><div class="title">签到管理</div></a>
          <a class="menu-list"><div class="title">众筹管理</div></a>
        </div>

        <a class="menu-list">
          <div class="icon icon-tjbb"></div>
          <div class="title">统计报表</div>
        </a>
      </div>
      <!-- 侧边栏导航 end -->
    </div>
    <!-- 侧边栏 end -->