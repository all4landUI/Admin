/*
 * 올포랜드 관리자 (http://all4land.com)
 * Copyright 2019 UI/UX.
 */

if (typeof jQuery === 'undefined') {
	throw new Error('jQuery가 필요합니다.');
}

 +function($){
 	'use strict';
 	 var adminTemplate = {
    	settings : function(){
    		$(".sidebar").mCustomScrollbar();
    	},
    	/* ========================================================================
		 * 사용용도 : 클릭 이벤트 
		 * 1. 좌측메뉴 
		 * 2. 소스 보기
		 * 3. 소스 복사
		 * ======================================================================== */
    	clickEvent : function(){

    		// EVENT.1
    		$(".depth-view>a").on("click" , function(event){
    			event.stopPropagation();
    			var $this = $(this),
    				$parent = $this.parent("li"),
    				$state = $parent.is(".menu-open") ? true : false;

    				if($parent.is(".active") === false){
	    				if($state === false){ // 활성화가 아닐 때 
	    					$parent.addClass("menu-open");
	    					$this.next("ul").stop().slideDown("fast");
	    				} else {
	    					$parent.removeClass("menu-open");
	    					$this.next("ul").stop().slideUp("fast");
	    				}
    				}
    			$this = null;
    		});
    		// EVENT.2
    		$("#button__source--view").on("click" , function(event){
				event.stopPropagation()
				var $this = $(this),
				$condition = $this.parent().is('.active')

				if($condition === false){
					$this.parent().addClass("active")
				} else {
					$this.parent().removeClass("active")
				}
			})
			// EVENT.3
			$("#button__source--copy").on("click" , function(event){
				event.stopPropagation()
			    var panel  = null;
			    var target = $(this).data("clipboard");
			    var html   = $("[data-copy="+target+"]").html();
			    if(typeof html == 'undefined'){
			    	return alert('잘못된 실행입니다.')
			    }
			    panel = document.createElement("textarea");
				document.body.appendChild(panel);
				panel.value = html;
				panel.select();
				document.execCommand('copy');
				document.body.removeChild(panel);
				alert('복사되었습니다.')
				panel = null;
			})
    	},

    	init : function(){
    		this.clickEvent();
    	}
    }

    $(window).load(function(){
    	adminTemplate.init();	
    })
    
 }(jQuery);


