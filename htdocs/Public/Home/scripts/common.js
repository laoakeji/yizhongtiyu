// JavaScript Document
$(document).ready(function(){
//	$(".listnav li").hover(function(){
//			var $index=$(".listnav li").index(this);
//			if(!$(this).hasClass("current")){
//			$(".listnav .current").removeClass("current");
//			$(this).addClass("current");
//			}
//			if(!$(".subnav").eq($index).hasClass("subnav-current")){
//				$(".subnav-current").removeClass("subnav-current");
//				$(".subnav").eq($index).addClass("subnav-current");
//			}
//		},function(){
//			var $index=$(".listnav li").index(this);
//			var $obj=$(this);
//			$(this).removeClass("current");
//			$(".subnav-current").removeClass("subnav-current");
//			$(".subnav").eq($index).hover(function(){							   
//				$obj.addClass("current");
//				$(this).addClass("subnav-current");
//												   },function(){
//													   
//						$obj.removeClass("current");
//				$(this).removeClass("subnav-current");							   
//													   })
//
//});




      var $oe_menu		   = $('#nav');
	  var $oe_menu_items   = $('.listnav').children("li");
	  var $oe_menu_info    = $('.subnav');
	  var $oe_menu_o_items   = $('#nav').children("li:not([class='smenu'])");
	  
	  $oe_menu_items.bind('mouseenter',function(){
		  var $this = $(this);
		  var $sn=$this.index("li");
		  $this.addClass('current').siblings().removeClass('current');
		  $oe_menu_info.stop(true,true).slideDown(300);
		  $oe_menu_info.children('div').eq($sn).siblings().css('z-index','99').stop(true,true).slideUp(0);
		  $oe_menu_info.children('div').eq($sn).css('z-index','999').stop(true,true).slideDown(300,function(){});
	  })

	  $oe_menu_o_items.bind('mouseenter',function(){
		  var $this = $(this);
		  $oe_menu_items.removeClass('current');
		  $oe_menu_info.stop(true,true).slideUp(0);
	  })

	  $oe_menu.bind('mouseleave',function(){
		  var $this = $(this);
		  $oe_menu_items.removeClass('current');
		  $this.removeClass('hovered');
		  $oe_menu_info.stop(true,true).slideUp(0);
		  $oe_menu_info.children('div').stop(true,true).slideUp(0);
	  })



	$(".tabs li").click(function(){
		 if(!$(this).hasClass("selected"))	{
			 var $index=$(".tabs li").index(this);
			 $(".tabs .selected").removeClass("selected");
			 $(this).addClass("selected");
			 $(".tabs .tabs-con").eq($index).show().siblings(".tabs-con").hide();
			 }			 
								 
								 })
	var sWidth = $("#focus").width();
	var len = $("#focus ul li").length;
	var index = 0;
	var picTimer;
	var btn = "<div class='focus-text'>";
	for(var i=0; i < len; i++) {
		var $alink=$("#focus li").eq(i);
		var $link=$alink.find("a").attr("href");
		var $text=$alink.find("img").attr("alt");
		btn += "<a href='"+$link+"'>"+$text+"</a>";
	}
	btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
	$("#focus").append(btn);
	$("#focus .focus-text a").mouseover(function() {
		index = $("#focus .focus-text a").index(this);
		showPics(index);
	}).eq(0).trigger("mouseover");

	$("#focus .preNext").css("opacity",0.8).hover(function() {
		$(this).stop(true,false);
	},function() {
		$(this).stop(true,false);
	});

	$("#focus .pre").click(function() {
		index -= 1;
		if(index == -1) {index = len - 1;}
		showPics(index);
	});

	$("#focus .next").click(function() {
		index += 1;
		if(index == len) {index = 0;}
		showPics(index);
	});

	$("#focus ul").css("width",sWidth * (len));
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			showPics(index);
			index++;
			if(index == len) {index = 0;}
		},4000); 
	}).trigger("mouseleave");

	function showPics(index) { 
		var nowLeft = -index*sWidth; 
		$("#focus ul").stop(true,false).animate({"left":nowLeft},300); 
		$("#focus .focus-text a").removeClass("selected").eq(index).addClass("selected"); 
	}
	
	})
