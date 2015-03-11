<?php
//模拟控制器assign过来登录状态
$login_statue = true;

//模拟控制器assign过来模块信息(决定左侧导航的高亮显示)
$module = "hygl";


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>KKH - 会议管理 - 新建会议</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/meeting-add.css">
<script src="http://api.map.baidu.com/api?v=2.0&ak=154xlNeRRQNWV0XuZpRib87i"></script>
</head>
<body>

<?php include_once 'common/inc_header.php' ?>

<div id="container-wrap">
  <div id="container">

    <?php include_once 'common/inc_side.php' ?>
    
    <div id="main">
      <div id="meeting-add-header">
        <div class="icon"></div>
        <h2>新建会议</h2>
        <a class="btn btn-default btn-82-32 btn-back">返回</a>
      </div>  
      <div id="meeting-add-con">
        <table width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td class="w80">公司名称</td>
            <td class="w250"><input type="text" class="text text-230-38" placeholder="请输入公司名称"></td>
            <td colspan="2"><a class="btn btn-default btn-82-32">上传logo</a></td>
          </tr>
          <tr>
            <td>会议名称</td>
            <td colspan="3"><input type="text" class="text text-230-38" placeholder="请输入会议名称"></td>
          </tr>
          <tr>
            <td>参会人数</td>
            <td colspan="3"><input type="text" class="text text-230-38" placeholder=">1000人"></td>
          </tr>
          <tr>
            <td>开始时间</td>
            <td><input type="text" class="text text-230-38" placeholder="2014-10-09 16:00"></td>
            <td class="w80">结束时间</td>
            <td><input type="text" class="text text-230-38" placeholder="2014-10-09 16:00"></td>
          </tr>
          <tr>
            <td>联系人</td>
            <td colspan="3"><input type="text" class="text text-230-38" placeholder="请输入联系人"></td>
          </tr>
          <tr>
            <td>联系电话</td>
            <td colspan="3"><input type="text" class="text text-230-38" placeholder="请输入联系电话"></td>
          </tr>
          <tr>
            <td>WIFI服务</td>
            <td colspan="3">
              <div id="wifi-radio">
                <div class="radio"><i></i>需要</div>
                <div class="radio radio-checked"><i></i>不需要</div>   
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="4" class="a4a9ae">自动配置WiFi编号</td>
          </tr>
          <tr>
            <td>会议图片</td>
            <td colspan="3">
              <a class="btn btn-default btn-82-32 fl">添加</a>
              <div class="tips fl"><i></i>添加图片会让您的会议更出彩哦！</div>
            </td>
          </tr>
          <tr>
            <td>会议地址</td>
            <td ><input type="text" class="text text-230-38" placeholder="请输入详细地址"></td>
            <td colspan="2"><a class="btn btn-primary btn-106-36 btn-br-18">选场地</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">
              <div id="allmap"></div>
            </td>
          </tr>
          <tr>
            <td colspan="4"><a class="tc-show" data-id="tc-more-meeting-info">更多会议信息填写>></a></td>
          </tr>
          <tr>
            <td>会议二维码</td>
            <td><a class="btn btn-default btn-112-32">生成二维码</a></td>
          </tr>
        </table>
        <div class="btn-wrap">
          <a class="btn btn-primary btn-106-36 btn-br-18 fl">确认</a>
          <a class="btn btn-default btn-106-36 btn-br-18 fr">取消</a>
        </div>
      </div>  
    </div>  
  </div>
</div>

<?php include_once 'common/inc_header.php' ?>

<!-- 页面遮罩层 -->
<div id="body-hover"></div>

<!-- 更多会议信息填写弹出层 -->
<div id="tc-more-meeting-info" class="tc-box">
  <div class="tc-close" data-id="tc-more-meeting-info"></div>
  <div class="top">
    <h2>更多会议信息填写</h2>
  </div>
  <div class="content">
    <h3>会议介绍</h3>
    <textarea placeholder="请输入会议介绍" row="3"></textarea>
    <h3 class="m-t-5">嘉宾介绍</h3>
    <textarea placeholder="请输入嘉宾介绍" row="3"></textarea>
    <h3 class="m-t-5">会议日程</h3>
    <textarea placeholder="请输入会议日程" row="3"></textarea>
    <div class="btn-wrap">
      <a class="btn btn-primary btn-106-36 btn-br-18 fl">确认</a>
      <a class="btn btn-default btn-106-36 btn-br-18 fr">取消</a>
    </div>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/common.js"></script>
<script>
(function($){
  $('#wifi-radio .radio').on('click',function(){
    $(this).siblings('.radio-checked').removeClass('radio-checked').end().addClass('radio-checked');
  });

  $('.tc-close').on('click',function(){
    var id = $(this).attr('data-id');
    $('#' + id + ",#body-hover").hide();
  });

  $('.tc-show').on('click',function(){
    var id = $(this).attr('data-id');
    $('#' + id + ",#body-hover").show();
  });
})(jQuery);

// 百度地图API功能
var map = new BMap.Map("allmap");
var point = new BMap.Point(116.356716,39.356716);
map.centerAndZoom(point, 12);
var marker = new BMap.Marker(point);  // 创建标注
map.addOverlay(marker);              // 将标注添加到地图中
var label = new BMap.Label("上海市浦东新区巨峰路311号",{offset:new BMap.Size(20,-10)});
marker.setLabel(label);   
</script>
</body>
</html>