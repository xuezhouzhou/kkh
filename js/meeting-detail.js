(function($){
  //弹出层隐藏
  $('.tc-close').on('click',function(){
    var id = $(this).attr('data-id');
    $('#' + id + ",#body-hover").hide();
  });
  
  //弹出层显示
  $('.tc-show').on('click',function(){
    var id = $(this).attr('data-id');
    $('#' + id + ",#body-hover").show();
  });

  //签到模式radio切换
  $("#tc-sign-change .radio").on('click',function(){
    if(!$(this).hasClass('radio-checked')){
      $("#tc-sign-change .radio").removeClass("radio-checked");
      $(this).addClass('radio-checked');
    }
  });

  $(function(){
    setSideHeight();
  });

  //设置左侧菜单导航高度
  function setSideHeight(){
    var height = $("#main").height();
    $('#side').height(height);
  }
	
	//邀请函标题
  $('#inv-title').on('focus',function(){
    var text = $(this).val();
    if(text=='点击输入标题'){
      $(this).val('');
    }
  }).on('blur',function(){
    var text = $(this).val();
    if(text==''){
      $(this).val('点击输入标题');
    }else{
      $('#tc-inv h2').text(text);
    }
  });

  //邀请函内容
  $('#inv-con').on('focus',function(){
    var text = $(this).val();
    if(text=='点击输入邀请函内容'){
      $(this).val('');
    }
  }).on('blur',function(){
    var text = $(this).val();
    if(text==''){
      $(this).val('点击输入邀请函内容');
    }else{
      $('#p-inv-con').text(text);
    }
  });


  $("#inv-commit").on('click',function(){
    var statue = $(this).attr('data');
    if(statue=='edit'){
      $('#inv-title,#inv-con').show();
      $('#p-inv-con,#tc-inv h2').hide();
      $(this).attr('data','commit').text('确定');
    }else{
      var invTitle = $('#inv-title').val();
      var invCon = $('#inv-con').val();
      if(invTitle=='点击输入标题'){
        alert("请输入邀请函标题");
      }else if(invCon=="点击输入邀请函内容"){
        alert("请输入邀请函内容");
      }else{
        $('#inv-title,#inv-con').hide();
        $('#p-inv-con,#tc-inv h2').show();
        $(this).attr('data','edit');
        $(this).text('修改');
      }
    }
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
