$(function() {
	var top = $('#menu').offset().top - parseFloat($('#menu').css('marginTop').replace(/auto/, 0));
	var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

	var maxY = footTop - $('#menu').outerHeight();

	$(window).scroll(function(evt) {
		var y = $(this).scrollTop();
		if (y > top) {
			if (y < maxY) {
				$('#menu').addClass('fixed').removeAttr('style');
			} else {
				$('#menu').removeClass('fixed').css({
					position: 'absolute',
					top: (maxY - top) + 'px'
				});
			}
		} else {
			$('#menu').removeClass('fixed');
		}
	});
});

$(window).load(function(){
		var pages = $('.slide li'), current=0;
		var currentPage,nextPage;
		var timeoutID;
		var buttonClicked=0;

		var handler1=function(){
			buttonClicked=1;
			$('.slide .button').unbind('click');
			currentPage= pages.eq(current);
			if($(this).hasClass('prevButton'))
			{
				if (current <= 0)
					current=pages.length-1;
					else
					current=current-1;
			}
			else
			{

				if (current >= pages.length-1)
					current=0;
				else
					current=current+1;
			}
			nextPage = pages.eq(current);
			currentPage.hide();
			nextPage.fadeIn('slow',function(){
				nextPage.css("opacity",1);
				currentPage.css("opacity",1);
				$('.slide .button').bind('click',handler1);
			});		
		}

		var handler2=function(){
			if (buttonClicked==0)
			{
			$('.slide .button').unbind('click');
			currentPage= pages.eq(current);
			if (current >= pages.length-1)
				current=0;
			else
				current=current+1;
			nextPage = pages.eq(current);
			currentPage.hide();	
			nextPage.fadeIn('slow',function(){
				nextPage.css("opacity",1);
				currentPage.css("opacity",1);
				$('.slide .button').bind('click',handler1);				
			});
			timeoutID=setTimeout(function(){
				handler2();	
			}, 4000);
			}
		}

		$('.slide .button').click(function(){
			clearTimeout(timeoutID);
			handler1();
		});

		timeoutID=setTimeout(function(){
			handler2();	
			}, 4000);
		
});

