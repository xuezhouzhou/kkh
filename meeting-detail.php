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
<title>KKH - 会议管理 - 详情</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/meeting-detail.css">
<script src="http://api.map.baidu.com/api?v=2.0&ak=154xlNeRRQNWV0XuZpRib87i"></script>
</head>
<body>

<?php include_once 'common/inc_header.php' ?>

<div id="container-wrap">
  <div id="container">
    
    <?php include_once 'common/inc_side.php' ?>

    <div id="main">
      <div id="main-top">
        <!-- 会议详情 -->
        <div id="hy-detail">
          <div class="header">
            <div class="icon"></div>
            <h2>会议详情</h2>
            <a class="btn btn-default btn-82-32 btn-back">返回</a>
            <a class="btn btn-default btn-82-32 btn-edit">修改会议</a>
            <a class="btn btn-default btn-82-32 btn-del">删除会议</a>
          </div>
          <div class="content-wrap">
            <div class="content">
              <div class="hy-img"><img src="images/hy-img.jpg" /></div>
              <div class="title">
                <h3>上海高新知识产业园年度总结会议</h3>
                <p>20141207000010</p>
              </div>
              <div class="time-print">
                <div class="time">2014-12-09 16:00 -18:00<span>共1天</span></div>
                <div class="print">打印</div>
              </div>
              <table width="100%" cellspacing="0" cesspadding="0">
                <tr>
                  <td width="80px">联系人</td>
                  <td width="150px">王康</td>
                  <td width="80px">联系电话</td>
                  <td>13954265566</td>
                </tr>
                <tr>
                  <td>参会人数</td>
                  <td>>1000人</td>
                  <td>SSID</td>
                  <td>Chinge<i style="padding-right:40px;"></i>WIFI编号<i style="padding-right:20px;"></i>132445</td>
                </tr>
                <tr>
                  <td colspan="4">
                    <a href="javascript:void(0)" class="more-hy-info fl" id="more-hyxx">更多会议信息>></a>
                    <a class="btn btn-default btn-82-32 fr">会议二维码</a>
                  </td>
                </tr>
                <tr>
                  <td>会议地址</td>
                  <td colspan="3">上海市浦东新区巨峰路311号 上海国际会展中心22楼多功能会议室</td>
                </tr>
              </table>
              <div class="map-wrap">
                <div class="position">
                  <div class="fl">X：116.35671616 <i style="padding-right:20px;"></i>Y：39.35671616</div>
                  <div class="fr sq">收起</div>
                </div>
                <div class="map"  id="allmap">
                  <img src="images/map.jpg" />  
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- 参会人员 -->
        <div id="hy-member">
          <div class="header">
            <div class="icon"></div>
            <h2>参会人员</h2>
            <div class="total">78/98人</div>
          </div>
          <div class="content">
            <table width="100%" cellspacing="0" cesspadding="0">
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-m"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-grey"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-green"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-blue"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-m"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-grey"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-green"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-blue"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-m"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-grey"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-green"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-green"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-blue"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-m"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-grey"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-green"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-blue"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-m"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-grey"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-green"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-blue"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-m"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-grey"></div></td>
              </tr>
              <tr>
                <td class="name">王康飞</td>
                <td class="ico"><div class="icon-sex-w"></div></td>
                <td>13165546543</td>
                <td class="ico"><div class="icon-mem-green"></div></td>
              </tr>
            </table>
            <div class="more-member">
              <a href="javascript:void(0)" class="fl" id="more-member">更多>></a>
              <div class="btn btn-default btn-82-32 fr" id="add-ch-member">增加参会人</div>
            </div>
          </div>
        </div>
      </div>
      <div id="main-bottom">
        <!-- 会议互动 -->
        <div id="hyhd">
          <div class="header">
            <div class="icon"></div>
            <h2>会议互动</h2>
            <a class="btn btn-default btn-82-32 btn-add" href="">添加互动</a>
          </div>
          <table width="100%" cellspacing="0" cesspadding="0">
            <tr>
              <td class="hd-type"><img src="images/hd-type-qdms.png"></td>
              <td colspan="4">
                <div class="btn-wrap">
                  <a class="wxqd">微信签到</a>
                  <a class="sjqd">手机签到</a>
                  <a class="btn btn-primary btn-106-36 btn-br-18" id="qdms-change">更换</a>  
                </div>
              </td>
            </tr>
            <tr>
              <td class="hd-type"><img src="images/hd-type-zpq.png"></td>
              <td width="170px;">暖场展示</td>
              <td width="150px">20141207000010</td>
              <td width="90px">等待进行</td>
              <td class="link">
                <a href="" class="border">置顶</a>
                <a href="">上移</a>
                <a href="">下移</a>
                <a href="">删除</a>
              </td>
            </tr>
            <tr>
              <td class="hd-type"><img src="images/hd-type-wj.png"></td>
              <td>本次会议演出最佳的...</td>
              <td>20141207000010</td>
              <td>等待进行</td>
              <td class="link">
                <a href="" class="border">置顶</a>
                <a href="">上移</a>
                <a href="">下移</a>
                <a href="">删除</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'common/inc_footer.php' ?>

<div id="body-hover"></div>

<!-- 更多参会人员弹出框 -->
<div id="tc-chry">
  <div class="top">
    <h2>参会人员 (89人)</h2>
    <a class="btn-a btn-add">增加参会人</a>
    <div class="btn-tc-close" id="tc-chry-close"></div>
  </div>
  <table width="100%" cellpadding="0" cellspacing="0">
    <thead>
      <tr>
        <td width="134px">姓名</td>
        <td width="168px">电话</td>
        <td width="200px">邮箱</td>
        <td>
          <div class="cursor-pointer">属性<span class="order order-asc"></span></div>
        </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div class="name sex-m">王康飞</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-grey"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-w">李娟</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-green"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-m">王康飞</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-blue"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-w">李娟</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-grey"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-m">王康飞</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-grey"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-w">李娟</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-green"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-m">王康飞</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-blue"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-w">李娟</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-grey"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-m">王康飞</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-grey"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-w">李娟</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-green"></div></td>
      </tr>
      <tr>
        <td><div class="name sex-m">王康飞</div></td>
        <td>13165546543</td>
        <td>5698637@qq.com</td>
        <td><div class="icon-mem-blue"></div></td>
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



<!-- 更多会议信息弹出框 -->
<div id="tc-more-hgxx">
  <div class="top">
    <h2>更多会议信息</h2>
    <div class="btn-tc-close" id="tc-more-hgxx-close"></div>
  </div>
  <div class="content">
    <h3>会议介绍</h3>
    <p>过程分析与控制技术综合交叉了过程工程、分析化学、控制工程、系统工程、仪器科学、信息科学、应用数学等学科内容，实现了将化学、物理和生物性质等多变量作为直接参量参与过程自动化生产控制的优化技术，对工业的安全生产、品质量等发挥着重要作用。随着物联网技术的发展，过程分析与控制技术在化学工业、石油及石化、能源、冶金、建材、核能、生物技术、医药以及环境污染治理等工业中将具有越来越广泛的应用前景。</p>
    <h3 class="m-t-20">嘉宾介绍</h3>
    <p>李彬彬<i></i>范冰冰<i></i>刘冰冰<i></i>刘诗诗<i></i>等众多人员</p>
    <h3 class="m-t-20">会议日程</h3>
    <table cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td width="20%">2014-09-08</td>
        <td width="20%">16:00-18:00 </td>
        <td width="60%">迎新晚会</td>
      </tr>
      <tr>
        <td></td>
        <td>19:00-20:00</td>
        <td>用餐</td>
      </tr>
      <tr>
        <td></td>
        <td>21:00-22:00</td>
        <td>会议闭幕</td>
      </tr>
    </table>
  </div>
  <div class="btn-wrap">
    <a class="btn btn-primary btn-106-36 btn-br-18 fl">确认</a>
    <a class="btn btn-default btn-106-36 btn-br-18 fr">取消</a>
  </div>
</div>




<!-- 签到模式切换 -->
<div id="tc-qdms">
  <div class="top">
    <h2>签到模式</h2>
    <div class="btn-tc-close" id="tc-qdms-close"></div>
  </div>
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td class="img" width="50%"><img src="images/qd-weixin.png"></td>
      <td class="img" width="50%"><img src="images/qd-phone.png"></td>
    </tr>
    <tr>
      <td class="title">微信签到</td>
      <td class="title">手机号签到</td>
    </tr>
    <tr>
      <td class="des">参会人员将会收到二维<br>码，现场给相关人员进<br>行扫描即可。</td>
      <td class="des">参会人员在微信订阅号中<br>输入自己的手机号码后四<br>位即可签到完成。</td>
    </tr>
    <tr>
      <td><div class="radio radio-checked" data="wx"></div></td>
      <td><div class="radio" data="phone"></div></td>
    </tr>
  </table>
</div>



<!-- 增加参会人 -->
<div id="tc-add-number">
  <div class="btn-tc-close" id="tc-add-number-close"></div>
  <div class="content">
    <h2>选择增加的参会人员（89人）</h2>
    <table width="100%"cellpadding="0" cellspacing="0">
      <tr>
        <td width="85px" class="p-t-10" style="vertical-align: top;">参会人员</td>
        <td class="p-t-10">
          <div class="chry-wrap">
            <div class="txl-wrap">
              <div class="txl"><div class="radio radio-checked"></div>通讯录</div>
              <div class="slide"></div>
            </div>
            
            <div class="fz-wrap">
              <div class="qbfz fl"><div class="radio"></div>全部分组</div>
              <div class="bffz fl"><div class="radio radio-checked"></div>部分分组</div>
            </div>

            <div class="text-zdfz">指定分组（3/5)</div>
              
            <div class="zdfz-wrap">
              <div class="item"><div class="checkbox"></div>研发一组</div>
              <div class="item"><div class="checkbox checkbox-checked"></div>研发二组</div>
              <div class="item"><div class="checkbox checkbox-checked"></div>研发三组</div>
            </div>

            <div class="zdfz-wrap">
              <div class="item"><div class="checkbox"></div>研发四组</div>
              <div class="item"><div class="checkbox checkbox-checked"></div>研发五组</div>
            </div>

            <div class="zdr-wrap">
              <div class="zdr">指定人(0/300)<i style="padding-right:20px"></i>选择</div>
            </div>
          </div>


        </td>
      </tr>
      <tr>
        <td>邀请函</td>
        <td>
          <div class="yqh-wrap">
            <div class="item"><div class="radio"></div>需要</div>
            <div class="item"><div class="radio"></div>不需要</div>
            <div class="item">
              <div class="nddh">2015年年度大会</div>
            </div>
          </div>

        </td>
      </tr>
    </table>
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
  //更多参会人员弹出层显示
  $("#more-member").on('click',function(){
    $("#tc-chry,#body-hover").show();
  });

  //更多参会人员弹出层隐藏
  $('#tc-chry-close').on('click',function(){
    $("#tc-chry,#body-hover").hide();
  });

  //更多会议信息弹出层显示
  $('#more-hyxx').on('click',function(){
    $("#body-hover,#tc-more-hgxx").show();
  });

  //更多会议信息弹出层隐藏
  $('#tc-more-hgxx-close').on('click',function(){
    $("#body-hover,#tc-more-hgxx").hide();
  });

  //签到模式弹出层显示
  $('#qdms-change').on('click',function(){
   $("#body-hover,#tc-qdms").show(); 
  });

  //签到模式弹出层隐藏
  $('#tc-qdms-close').on('click',function(){
    $("#body-hover,#tc-qdms").hide();
  });



  $("#tc-qdms .radio").on('click',function(){
    if(!$(this).hasClass('radio-checked')){
      $("#tc-qdms .radio").removeClass("radio-checked");
      $(this).addClass('radio-checked');
    }
  });


  $("#tc-add-number-close").on('click',function(){
    $("#tc-add-number,#body-hover").hide();
  });


  $('#add-ch-member').on('click',function(){
    $("#tc-add-number,#body-hover").show();
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