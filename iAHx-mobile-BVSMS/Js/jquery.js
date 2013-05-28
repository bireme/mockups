/* PAGINACAO */(function($){$.fn.quickPagination=function(options){var defaults={pageSize:10,currentPage:1,holder:null,pagerLocation:"after"};var options=$.extend(defaults,options);return this.each(function(){var selector=$(this);var pageCounter=1;selector.wrap("<div class='simplePagerContainer'></div>");selector.parents(".simplePagerContainer").find("ul.simplePagerNav").remove();selector.children().each(function(i){if(i<pageCounter*options.pageSize&&i>=(pageCounter-1)*options.pageSize){$(this).addClass("simplePagerPage"+pageCounter)}else{$(this).addClass("simplePagerPage"+(pageCounter+1));pageCounter++}});selector.children().hide();selector.children(".simplePagerPage"+options.currentPage).show();if(pageCounter<=1){return}var pageNav="<ul class='simplePagerNav'>";for(i=1;i<=pageCounter;i++){if(i==options.currentPage){pageNav+="<li class='currentPage simplePageNav"+i+"'><a rel='"+i+"' href='#'>"+i+"</a></li>"}else{pageNav+="<li class='simplePageNav"+i+"'><a rel='"+i+"' href='#'>"+i+"</a></li>"}}pageNav+="</ul>";if(!options.holder){switch(options.pagerLocation){case"before":selector.before(pageNav);break;case"both":selector.before(pageNav);selector.after(pageNav);break;default:selector.after(pageNav)}}else{$(options.holder).append(pageNav)}selector.parent().find(".simplePagerNav a").click(function(){var clickedLink=$(this).attr("rel");options.currentPage=clickedLink;if(options.holder){$(this).parent("li").parent("ul").parent(options.holder).find("li.currentPage").removeClass("currentPage");$(this).parent("li").parent("ul").parent(options.holder).find("a[rel='"+clickedLink+"']").parent("li").addClass("currentPage")}else{$(this).parent("li").parent("ul").parent(".simplePagerContainer").find("li.currentPage").removeClass("currentPage");$(this).parent("li").parent("ul").parent(".simplePagerContainer").find("a[rel='"+clickedLink+"']").parent("li").addClass("currentPage")}selector.children().hide();selector.find(".simplePagerPage"+clickedLink).show();return false})})}})(jQuery);

$(document).ready(function(){
	nav();
	filters();
	numeracao();
	paginacao();
});

function nav(){
	var speed = 300;
	var navHeight = $(".h-nav").height();

	$(".i-nav-show").on("click", function(){
		$(this).hide();
		$(".i-nav-hide").show();

		$(".h-nav").css({"height":"0px", "display":"block"}).stop().animate({"height":navHeight},speed);
	});

	$(".i-nav-hide").on("click", function(){
		$(this).hide();
		$(".i-nav-show").show();

		$(".h-nav").stop().animate({"height":"0px"}, speed, function(){
			$(this).hide();
		});
	});
};

function filters(){
	var speed = 300;
	var iShow = "<span class='i-show'></span>";
	var iHide = "<span class='i-hide'></span>";

	$(".c-filters-lia").on("click", function(){
		var element = $(this);
		var filtersHeight = element.siblings(".c-filters-sub").height();
		var click = element.find("span").attr("class");

		if(click == "i-show"){
			element.find(".i-show").addClass("i-hide").removeClass("i-show");
			element.siblings(".c-filters-sub").css({"height":"0px", "display":"block"}).stop().animate({"height":filtersHeight},speed);
		}else{
			element.find(".i-hide").addClass("i-show").removeClass("i-hide");
			element.siblings(".c-filters-sub").stop().animate({"height":"0px"}, speed, function(){
				$(this).hide();
				$(this).css({"height":"auto"});
			});
		}
	});

	$(".c-filters-ck").on("click", function(){
		var element = $(this);
		var pegarID = element.attr("id");
		var filters = $("#filters-add");
		var texto = element.siblings(".c-filters-lbl").text();

		if(element.is(":checked")){
			filters.append("<span id='"+ pegarID +"' class='c-filters-select'><span class='c-filters-remove'></span>"+ texto + "</span>");
		}else{
			$("span#"+pegarID).remove();
		}

		$(".c-filters-remove").on("click", function(){
			var ID = $(this).parent().attr("id");
			$("input#"+ID).attr("checked",false);
			$(this).parent().remove();
		});
	});
};

function numeracao(){
	if($(".c-results").length){
		$(".c-results").each(function(e){
			var i = e + 1;
			$(this).find(".c-results-num").text(i+". ");
		});
	}
};

function paginacao(){
	if( $(".c-results-list").length ){
		$(".c-results-list").quickPagination({pageSize:'20'});
	}
};