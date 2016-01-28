//remove empty p tags
jQuery('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});

//alert
jQuery(function($){
	$("#menu-quick-links li.alert a").fancybox({type:'iframe',width:450,maxHeight:300,padding:0});
	$("#menu-quick-links li.concern a").fancybox({type:'iframe',width:650,maxHeight:450,padding:0});
});

jQuery(".fancybox, .gallery a").attr('rel', 'shadowbox').fancybox({
	padding: 0,
	helpers:  {
        title : {
            type : 'inside'
        }
    }
});

//bootstrap for mobile
if (window.matchMedia('(min-width: 768px)').matches){
	jQuery(function($) {
		$('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		},
		function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		});

		$('.navbar .dropdown > a').click(function(){
			location.href = this.href;
		});
	});
}