(function($){
  //右上角账号信息下拉菜单
  $(".login-info").on('mouseenter',function(){
    $('.login-info-list').show(); 
  }).on('mouseleave',function(){
    $('.login-info-list').hide();
  });

  //互动管理二级菜单
  $("#side-menu-interactive").on('click',function(){
    $(this).find('.icon-jt').toggleClass('icon-jt-bottom');
    $("#interactive-child").slideToggle();
  });
})(jQuery);  