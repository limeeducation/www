
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var scrTop = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - scrTop) <= delta)
        return;

    if (scrTop > lastScrollTop && scrTop){
        // Scroll Down
        $('body').removeClass('scr-up').addClass('scr-down');
    } else {
        // Scroll Up
		$('body').removeClass('scr-down').addClass('scr-up');
    }

    lastScrollTop = scrTop;
}

jQuery(function($){

	// 전체메뉴
	$('.mo_menu_open').click(function() {
		$('body').addClass("fixed");
		anioption = {
			time: 0.8,
			easing: 'easeOutCubic'
		};
		$('#mobileMenu').animate({
			"right": "0"
		}, anioption);
		$('.dim').fadeIn();
		return false;
	});
	$('.mo_menu_close').click(function() {
		anioption = {
			time: 0.6,
			easing: 'easeOutCubic'
		};
		$('#mobileMenu').animate({
			"right": "-100%"
		}, anioption);
		$('body').removeClass("fixed");
		$('.dim').fadeOut();
		return false;
	});
	$('.dim').click(function() {
		anioption = {
			time: 0.6,
			easing: 'easeOutCubic'
		};
		$('#mobileMenu').animate({
			"right": "-105%"
		}, anioption);
		$('body').removeClass("fixed");
		$('.dim').fadeOut();
	});

	$("#mnb > li").each(function(){
		$(this).has('.depth').addClass('parent');
	});

	// 전체메뉴 토글
	var mnb_flag = 0;
	$("#mnb > li.parent > a").click(function() {
		if(mnb_flag == 0){
			if($(this).hasClass('active')){
				mnb_flag = 1;
				$(this).removeClass('active').next('.depth').slideUp( 300, function(){ 
					mnb_flag = 0;
				});
			}else{
				mnb_flag = 1;
				$("#mnb .item > a").removeClass('active').next('.depth').slideUp(300);
				$(this).addClass('active').next('.depth').slideDown( 300, function(){ 
					mnb_flag = 0;
				});
			}
		}
		return false;
	});
	var $header = $('#header');

	$(document).on('mouseenter focus', '#gnb > li > a', function () {
		$header.addClass('on');
		// $('.dim').show();
		$('.depth_wrap li').removeClass('on');
		$(this).parent('li').addClass('on').siblings('li').removeClass('on');
	}).on('mouseenter focus', '#gnb .depth_list a', function () {
		if($(this).parents('ul').hasClass('gnb_3depth')){
			$(this).parents('.gnb_3depth').parent('li').addClass('on').siblings('li').removeClass('on');
		}else{
			$(this).parent('li').addClass('on').siblings('li').removeClass('on');
		}
	}).on('mouseenter focus', '.header_sitemap a', function () {
		$header.removeClass('on');
		// $('.dim').hide();
		$('#gnb li').removeClass('on');
	}).on('mouseleave', '#header', function () {
		$header.removeClass('on');
		// $('.dim').hide();
		$('#gnb li').removeClass('on');
	})

	// 헤더 스크롤
	var header_h = $('#visual').height();
	set_header();
	$(window).scroll(set_header);
	function set_header(event){
		if($(window).scrollTop() > header_h){
			$('#header').addClass('active');
			if($(window).innerWidth() > 1183){
				$('.quick_nav').css('position','fixed');
				$('.quick_nav').css('top','23.8rem');
				$('.quick_nav').css('bottom','auto');
			}
		} else {
			$('#header').removeClass('active');
			if($(window).innerWidth() > 1183){
				$('.quick_nav').css('position','absolute');
				$('.quick_nav').css('top','3.8rem');
			}
		}
	}

	// 컨텐츠 스크롤
	var content_h = $('#header').height() + $('#visual').height();
	set_content();
	$(window).scroll(set_content);
	function set_content(event){
		if($(window).scrollTop() > content_h){
			$('#content').addClass('active');
		} else {
			$('#content').removeClass('active');
		}
	}

	// 스크롤 Top
	setTop();
	$(window).resize(setTop);
	function setTop(){
		$(".footer_top a").on('click', function(event) {
			$('html,body').stop().animate({scrollTop:Math.round($(this.hash).offset().top)}, 600, 'easeOutQuart');
			event.preventDefault();
		});
	}

	$('.ranking_more').on('click',function(){
		$(this).parent('.cont_title').toggleClass('on');
		if($(this).parent('.cont_title').hasClass('on')){
			$(this).parent('.cont_title').siblings('.ranking_table').addClass('on')
		}else{
			$(this).parent('.cont_title').siblings('.ranking_table').removeClass('on')
		}
		return false;
	});

	function modalCancel(){
		$(".modal_wrap").each(function(){
			if($(this).hasClass("active")){
				$('.modal_wrap').attr('style', '');
				$('.modal_wrap').removeClass('active');
			}
			$('body').removeClass('show-modal');
		});
	}

	var $modal_wrap = $('.modal_wrap'),
		$modal_open = $('.modal_open'),
		$modal_close = $('.modal_close'),
		$modal_cancel = $('.modal_wrap .cancel');

	$modal_open.on("click", function(event){
		modalCancel();
		// modalScroll();
		$('body').toggleClass('show-modal');
		if($(event.target).attr('href')){
			$($(event.target).attr('href')).toggleClass('active');
		}else{
			$($(this).attr('href')).toggleClass('active');
		}
		return false;
	});
	$modal_close.on("click", function(event){
		if($('body').hasClass('show-modal')){
			$('body').toggleClass('show-modal');
		}
		if($(event.target).parents('.modal_wrap').hasClass('active')){
			$(event.target).parents('.modal_wrap').toggleClass('active');
			return false;
		}
	});
	$modal_cancel.on("click", function(event){
		if($('body').hasClass('show-modal')){
			$('body').toggleClass('show-modal');
		}
		if($(event.target).parents('.modal_wrap').hasClass('active')){
			$(event.target).parents('.modal_wrap').toggleClass('active');
			return false;
		}
	});

	$modal_wrap.on("click", function(event){
		if($(event.target).hasClass('active')){
			$(event.target).toggleClass('active');
			$('body').toggleClass('show-modal');
			return false;
		}
	});
});

