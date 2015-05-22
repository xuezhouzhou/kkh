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

  
	$('.js-radio').live('click',function(){
		var $_this = $(this);
		var $_awardScopeWrap = $_this.parent().siblings('.award-scope-wrap');
		if($_this.hasClass('radio-checked')){
			return;
		}else{
			if($_this.hasClass('js-userlist-control')){
        $_this.next('.userlist').show();
      }else{
        $_awardScopeWrap.children('.userlist').hide();
      }
			$_awardScopeWrap.children('.js-radio').removeClass('radio-checked');
			$_awardScopeWrap.children('.js-radio').addClass('radio');
			$_awardScopeWrap.children('.js-checkbox').removeClass('checkbox-checked').addClass('checkbox');
			$_this.addClass('radio-checked');
		}
		setSideHeight();
	});
	
	$('.js-checkbox').live('click',function(){
		var $_this = $(this);
		var $_awardScopeWrap = $_this.parent().siblings('.award-scope-wrap');
		if($_this.hasClass('checkbox-checked')){
			$_this.removeClass('checkbox-checked').addClass('checkbox');	
		}else{
			$_this.removeClass('checkbox').addClass('checkbox-checked');	
		}
		$_awardScopeWrap.children('.userlist').hide();
		$_awardScopeWrap.children('.js-radio').removeClass('radio-checked').addClass('radio');
		setSideHeight();
	});
	
	

  //在此奖项之后新增奖项
  $("#js-add-award").on('click',function(){
		addAward($(this));
  });
	
	//删除奖项
  $(".js-award-del").live('click',function(){
    $(this).parents('.item').remove();

    //奖项序号整理
    $.each($("#award-info .item"),function(index,item){
      var $_item = $(item);
      $_item.find('.input-award-name').attr('placeholder',"奖项" + (index+1));
      $_item.find('.td-award-name').text("奖项" + (index+1));
    });

    setSideHeight();
  })

  $(function(){
   	addAward($("#js-add-award"));
  });

  //设置左侧菜单导航高度
  function setSideHeight(){
    var height = $("#main").height();
    $('#side').height(height);;
  }
	
	//新增选项
	function addAward($obj){
		var html = $('#js-award-demo').html();
    var reg = new RegExp("{--index--}","g");
    var index = $("#award-info .item").length + 1;
    html = html.replace(reg,index); 
   	$obj.before(html);
    setSideHeight();
	}
})(jQuery);