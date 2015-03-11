<?php
//模拟控制器assign过来登录状态
$login_statue = true;

//模拟控制器assign过来模块信息(决定左侧导航的高亮显示)
$module = 'meeting';

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>KKH - 会议管理 - 列表</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/hygl-list.css">
</head>
<body>

<?php include_once 'common/inc_header.php' ?>

<div id="container-wrap">
  <div id="container">
    
    <?php include_once 'common/inc_side.php' ?>

    <div id="main">
      <div class="tool-bar">
        <div class="icon"></div>
        <h1>会议管理</h1>
        <div class="search">
          <input type="text" placeholder="请输入会议名称/时间/编号">
          <div class="btn-search"></div>
        </div>
        <a class="btn btn-primary btn-82-32 btn-add">新建会议</a>
        <a class="btn btn-default btn-82-32 btn-del">删除会议</a>
      </div>

      <div class="con-list">
        <table id="hy-list" width="100%" cellpading="0" cellspacing="0">
          <thead>
            <tr>
              <td width="60px"><div class="check"></div></td>
              <td width="250px">会议名称</td>
              <td width="175px">
                <div class="cursor-pointer">开始时间 <span class="order order-desc"></span></div>
              </td>
              <td width="175px">
                <div class="cursor-pointer">结束时间 <span class="order order-asc"></span></div>
              </td>
              <td>
                <div class="cursor-pointer">会议状态 <span class="order order-asc"></span></div>
              </td>
              <td width="120px"></td>
            <tr>
          </thead>
          <tbody>
            <tr>
              <td><div class="check checked"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi"></span>
                <span class="ico ico-wx"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi-high"></span>
                <span class="ico ico-wx-high"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi"></span>
                <span class="ico ico-wx-high"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi-high"></span>
                <span class="ico ico-wx"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi"></span>
                <span class="ico ico-wx"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi-high"></span>
                <span class="ico ico-wx-high"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi"></span>
                <span class="ico ico-wx-high"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi-high"></span>
                <span class="ico ico-wx"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi"></span>
                <span class="ico ico-wx"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi-high"></span>
                <span class="ico ico-wx-high"></span>
              </td>
            </tr>
            <tr>
              <td><div class="check"></div></td>
              <td><a href="javascript:void(0)">2015年上海各地高校人才迎新晚会</a></td>
              <td>2014-09-08 18:30</td>
              <td>2014-09-08 18:30</td>
              <td>待确定</td>
              <td>
                <span class="ico ico-wifi"></span>
                <span class="ico ico-wx-high"></span>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="page-bar-wrap">
          <div class="page-bar">
            <a class="next" href=""></a>
            <a href="#">8</a>
            <span class="dotted">.....</span>
            <a href="#">3</a>
            <a href="#">2</a>
            <a href="#">1</a>
            <a class="prev" href=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'common/inc_footer.php' ?>

<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<script>

(function($){
  
  $("#hy-list tr:odd").css({'background-color':'#f6f8fa'});

  $('#hy-list tbody .check').on('click',function(){
    $(this).toggleClass('checked');
  });

  $('#hy-list thead .check').on('click',function(){
    $(this).toggleClass('checked');
    if($(this).hasClass('checked')){
      $('#hy-list tbody .check').addClass('checked');
    }else{
      $('#hy-list tbody .check').removeClass('checked');
    }
  });

})(jQuery);  
</script>
</body>
</html>