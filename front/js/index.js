(function($){
  var timer1 ;

  //我们的服务是否有展开
  var serviceOpen = 0;

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


  //场地左按钮
  $(".site-scroll-left").on('click',function(){
    $_this = $(this);
    var index = $_this.siblings('.index').val();
    --index;
    if(index<=0) index = 5;
    siteScroll($_this,index);
  });
  
  //场地右按钮
  $(".site-scroll-right").on('click',function(){
    $_this = $(this);
    var index = $_this.siblings('.index').val();
    ++index;
    if(index>5) index = 1;
    siteScroll($_this,index);
  });

  //炫酷互动
  $('.service .interactive .icon').on('click',function(){
    var $_this = $(this);
    serviceAni($_this);
    $('.service .fast').animate({'left':'75%'},300);
    $('.service .consumption').animate({'left':'100%'},300);
    $('.service .analysis').animate({'left':'125%'},300); 
  });
  
  //极速互联
  $('.service .fast .icon').on('click',function(){
    var $_this = $(this);
    serviceAni($_this);
    $('.service .interactive').animate({'left':'-25%'},300);
    $('.service .fast').animate({'left':'0'},300);
    $('.service .consumption').animate({'left':'75%'},300);
    $('.service .analysis').animate({'left':'100%'},300); 
  });

  //会议消费
  $('.service .consumption .icon').on('click',function(){
    var $_this = $(this);
    serviceAni($_this);
    $('.service .interactive').animate({'left':'-50%'},300);
    $('.service .fast').animate({'left':'-25%'},300);
    $('.service .consumption').animate({'left':'0'},300);
    $('.service .analysis').animate({'left':'75%'},300); 
  });
  
  //智能分析
  $('.service .analysis .icon').on('click',function(){
    var $_this = $(this);
    serviceAni($_this);
    $('.service .interactive').animate({'left':'-50%'},300);
    $('.service .fast').animate({'left':'-25%'},300);
    $('.service .consumption').animate({'left':'0'},300);
    $('.service .analysis').animate({'left':'25%'},300); 
  });

  function serviceAni($_obj){
    $('.service .icon').removeClass('icon-cur');
    $('.service .panel').hide();
    $('.service .icon').siblings('p').show();
    $('.service .icon').siblings('h3').show();
    $_obj.addClass('icon-cur');
    $_obj.siblings('p').hide();
    $_obj.siblings('h3').hide();
    $_obj.siblings('.panel').fadeIn(300);
    serviceOpen = 1;
  }

  function serviceReset(){
    $('.service .icon').removeClass('icon-cur');
    $('.service .panel').hide();
    $('.service .icon').siblings('p').show();
    $('.service .icon').siblings('h3').show();
    $('.service .interactive').animate({'left':''},300);
    $('.service .fast').animate({'left':'25%'},300);
    $('.service .consumption').animate({'left':'50%'},300);
    $('.service .analysis').animate({'left':'75%'},300);
  }

  function siteScroll($obj,index){
    $obj.siblings('.index').val(index);
    $obj.siblings('.site-list-inner').animate({'scrollLeft':918*(index-1)},300);
    $obj.siblings('.site-dotted-wrap').find('li.cur').removeClass('cur');
    $obj.siblings('.site-dotted-wrap').find('.site-dotted li:nth-child('+ index +')').addClass('cur');
  }

  /*function placeHolder($obj,text){
    $obj.on('focus',function(){
      if($obj.val()==text) $obj.val("") ;
    }).on('blur',function(){
      if($obj.val()=="") $obj.val(text);
    });      
  }*/

  //关闭 我们的服务 的展开项
  $("body").on('click',function(e){
    //判断我们的服务是否有展开
    if(serviceOpen == 1) {
      if($(e.target).hasClass('icon')){
        return;
      }else{
        serviceReset();
      }
    }
  });

  $('.demand-right').on('click',function(){
    $(".demand-input-wrap").animate({'scrollLeft':490},300);
    $(this).hide();
    $('.demand-left').show();
  });

  $('.demand-left').on('click',function(){
    $(".demand-input-wrap").animate({'scrollLeft':0},300);
    $(this).hide();
    $('.demand-right').show();
  });

  $('.demand-input [placeholder]').focus(function() {
    var input = $(this);
    if (input.val() == input.attr('placeholder')) {
      input.val('');
      input.removeClass('placeholder');
    }
  }).blur(function() {
    var input = $(this);
    if (input.val() == '' || input.val() == input.attr('placeholder')) {
      input.addClass('placeholder');
      input.val(input.attr('placeholder'));
    }
  });

  $.each($('.demand-input input[placeholder]'),function(index,val) {
    var input = $(val);
    if (input.val() == '' || input.val() == input.attr('placeholder')) {
      input.addClass('placeholder');
      input.val(input.attr('placeholder'));
    }
  });  
})(jQuery); 