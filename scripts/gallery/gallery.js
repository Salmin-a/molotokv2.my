$(document).ready(function() {
	
	if ($("#gallery.galleryview").size() > 0) {
		
		/*$("#gallery.galleryview:eq("+g+") .hide").css("display", "block").hide();*/
				
		var size = $("#gallery.galleryview a.item").size();
		var inline = 2;
		var lines = Math.ceil(size / inline);
		for (var i = 0; i < lines; i++) {
			var inputnoc = "<div class='fullline' id='line"+i+"'><div class='prev' style='display:none;'><span>&nbsp;</span></div><div class='next' style='display:none;'><span>&nbsp;</span></div><div class='fulllinein'></div></div>";
			var input = "<div class='fullline' id='line"+i+"'><div class='prev'><span>&nbsp;</span></div><div class='next'><span>&nbsp;</span></div><div class='fulllinein'></div></div>";
			if ($("#gallery.galleryview a.item:eq(" + (i * inline) + ")").hasClass('noc')) { var input = inputnoc; };
			if ($("#gallery.galleryview a.item:eq(" + ((i * inline) + 1) + ")").size() > 0) {
				$("#gallery.galleryview a.item:eq(" + ((i * inline) + 1) + ")").after(input);
			} else if ($("#gallery.galleryview a.item:eq(" + ((i * inline) + 0) + ")").size() > 0) {
				$("#gallery.galleryview a.item:eq(" + ((i * inline) + 0) + ")").after(input);
			} 
			$(".gallery_num a.item:eq(" + ((i * inline) + 1) + ")").css("margin-left", "2%");
			$("#gallery.galleryview a.item:eq(" + (i * inline) + "), #gallery.galleryview a.item:eq(" + ((i * inline) + 1) + ")").addClass("line" + i).attr("line", i);
		};
		$(".fullline").hide();
		$(window).resize(function(){
			var bodywidth = $('.galleryview').width();
			$(".fullline").css("width", bodywidth);
			$(".gal-item-active").css("width", bodywidth);
			$(".gallery").css("height", (bodywidth/16)*9+47);
			$(".next span").css("height", (bodywidth/16)*9+47);
			$(".prev span").css("height", (bodywidth/16)*9+47);
		});
		$(window).resize();

		$("#gallery.galleryview a.item").click(function() {
			$("#gallery.galleryview a.item.active").removeClass('active');
			$(this).addClass("active");
			$(".fullline.active").stop().hide("blind").removeClass('active');
			var i = $(this).attr("line");
			var bodywidth = $('.galleryview').width();
			$("#line"+i+" .fulllinein").html($($(this).attr("href")).html());
			$("#line"+i).stop().show("blind").addClass("active");
			var galcount = $("#line"+i+" .fulllinein .gal-item-active").size();
			$("#line"+i+" .fulllinein .gallerypages").html("<span class='red'>1</span> / <span class='sum'>"+galcount+"</span>");
			$("#line"+i+" .fulllinein .prev").click(function(){
				var active = parseInt($("#line"+i+" .gallerypages .red").text());
				var max = parseInt($("#line"+i+" .gallerypages .sum").text());
				active -= 2;
				if(active == -1){
					active = max-1;
				}
				$("#line"+i+" .gallerypages .red").text((active + 1));
				$("#line"+i+" .fulllinein .galleryin").stop().animate({
					left: active * -bodywidth + "px"
				});
				return false;
			});
			$("#line"+i+" .fulllinein .next").click(function(){
				var active = parseInt($("#line"+i+" .gallerypages .red").text());
				var max = parseInt($("#line"+i+" .gallerypages .sum").text());
				if(active >= max){
					active = 0;
				}
				$("#line"+i+" .gallerypages .red").text((active + 1));
				$("#line"+i+" .fulllinein .galleryin").stop().animate({
					left: active * -bodywidth + "px"
				});
				return false;
			});
			$("#line"+i+">.next").unbind("click").click(function(){
				var active = parseInt($("#line"+i+" .gallerypages .red").text());
				var max = parseInt($("#line"+i+" .gallerypages .sum").text());
				if(active >= max){
					active = 0;
				}
				$("#line"+i+" .gallerypages .red").text((active + 1));
				$("#line"+i+" .fulllinein .galleryin").stop().animate({
					left: active * -bodywidth + "px"
				});
				return false;
				/*
				
				var active = parseInt($("#gallery.galleryview:eq("+g+") a.item").index($("#gallery.galleryview:eq("+g+") a.item.active")));
				var max = parseInt($("#gallery.galleryview:eq("+g+") a.item").size());
				active ++;
				if(active >= max){
					active = 0;
				}
				$("#gallery.galleryview:eq("+g+") a.item:eq("+active+")").click();*/
			});
			$("#line"+i+">.prev").unbind("click").click(function(){
				var active = parseInt($("#line"+i+" .gallerypages .red").text());
				var max = parseInt($("#line"+i+" .gallerypages .sum").text());
				active -= 2;
				if(active == -1){
					active = max-1;
				}
				$("#line"+i+" .gallerypages .red").text((active + 1));
				$("#line"+i+" .fulllinein .galleryin").stop().animate({
					left: active * -bodywidth + "px"
				});
				return false;
				/*
				var active = parseInt($("#gallery.galleryview:eq("+g+") a.item").index($("#gallery.galleryview:eq("+g+") a.item.active")));
				var max = parseInt($("#gallery.galleryview:eq("+g+") a.item").size());
				active --;
				if(active < 0){
					active = max-1;
				}
				$("#gallery.galleryview:eq("+g+") a.item:eq("+active+")").click();
				*/
			});
			$("#line"+i+" .close").unbind("click").click(function(){
				$("#gallery.galleryview a.item.active").removeClass('active');
				$(".fullline.active").stop().hide("blind").removeClass('active');
			})
			return false;
		});
	}
	if($("#gallery.galleryview #fullgallery").size() > 0){
		var galactive = 0;
		var galmax = $("#fullgallery .gal-item-active").size();
		$("#gallery.galleryview #fullgallery .gallerypages").html("<span class='red'>1</span> / <span class='sum'>"+(galmax)+"</span>");
		$("#gallery.galleryview #fullgallery .next").click(function(){
			galactive ++;
			if(galactive >= galmax){
				galactive = 0;
			}
			$("#gallery.galleryview #fullgallery .gallerypages .red").text(galactive + 1);
			$("#gallery.galleryview #fullgallery .gallery .galleryin").stop().animate({
				left: -bodywidth * galactive + "px"
			});
			return false;
		});
		$("#gallery.galleryview #fullgallery .prev").click(function(){
			galactive --;
			if(galactive < 0){
				galactive = galmax -1;
			}
			$("#gallery.galleryview #fullgallery .gallerypages .red").text(galactive + 1);
			$("#gallery.galleryview #fullgallery .gallery .galleryin").stop().animate({
				left: -bodywidth * galactive + "px"
			});
			return false;
		});
		var slideractive = 0;
		var slidermax = Math.ceil($("#gallery.designer.fullview #galleryin a").size() / 5);
		$("#prevnextgallery .next").click(function(){
			slideractive ++;
			if(slideractive == slidermax){
				slideractive = 0;
			}
			$("#gallery.designer.fullview #galleryin").stop().animate({
				left: -bodywidth * slideractive + "px"
			});
		});
		$("#prevnextgallery .prev").click(function(){
			slideractive --;
			if(slideractive == -1){
				slideractive = slidermax - 1;
			}
			$("#gallery.designer.fullview #galleryin").stop().animate({
				left: -bodywidth * slideractive + "px"
			});
		});
	}
	if($(".bigline").size() > 0){
		$(window).resize(function(){
			var bodywidth = $(window).width();
			bodywidth = (bodywidth > 980 ? bodywidth : 980);
			var left = (bodywidth - 980)/2;
			$(".bigline").css("width", bodywidth).css("left", (-1)*left+"px");
			//$(".fullline .prev, .fullline .next").css("width", left+"px");
		});
		$(window).resize();
	}

	$(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: true,
		arrows			: false,
		padding : '0 0 0 0',
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
	
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
