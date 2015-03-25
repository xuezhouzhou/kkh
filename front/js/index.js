(function($){
  var timer1 ;

  //案例类型 切换
  $(".tab a").on("click",function(){
    var dataID = $(this).attr('data-id');
    $(".tab a").removeClass('cur');
    $(this).addClass('cur');
    $(".list").hide();
    $("#" + dataID).show();
  });

  //热门场地不同城市切换
  $(".site-tab a").on("click",function(){
    var dataID = $(this).attr('data-id');
    $(".site-tab a").removeClass('cur');
    $(this).addClass('cur');
    $(".site-list-wrap").hide();
    $("#" + dataID).show();
  });

  //案例选项 鼠标移入移出
  $(".list li").on('mouseenter',function(){
    $_this = $(this);
    timer1 = setTimeout(function(){
      $_this.find('.info').animate({top: 0},300);
    },100);
  }).on('mouseleave',function(){
    clearInterval(timer1);
    $_this = $(this);
    $_this.find('.info').animate({top: 310},300);
  });

  $(".site-scroll-left").on('click',function(){
    $_this = $(this);
    var index = $_this.siblings('.index').val();
    --index;
    if(index<=0) index = 5;
    siteScroll($_this,index);
  });

  $(".site-scroll-right").on('click',function(){
    $_this = $(this);
    var index = $_this.siblings('.index').val();
    ++index;
    if(index>5) index = 1;
    siteScroll($_this,index);
  });

  function siteScroll($obj,index){
    $obj.siblings('.index').val(index);
    $obj.siblings('.site-list-inner').animate({'scrollLeft':918*(index-1)},300);
    $obj.siblings('.site-dotted-wrap').find('li.cur').removeClass('cur');
    $obj.siblings('.site-dotted-wrap').find('.site-dotted li:nth-child('+ index +')').addClass('cur');
  }

  function placeHolder($obj,text){
    $obj.on('focus',function(){
      if($obj.val()==text) $obj.val("") ;
    }).on('blur',function(){
      if($obj.val()=="") $obj.val(text);
    });      
  }

  placeHolder($('.city'),'活动城市');
  placeHolder($('.type'),'会议类型');
  placeHolder($('.time'),'会议时长');
  placeHolder($('.total'),'参加人数');
  placeHolder($('.spending'),'会议预算');
})(jQuery); 