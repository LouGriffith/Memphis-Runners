// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$( document ).ready(function() {
  $(".home header").backstretch("img/startline.jpg");

	var wall = new freewall("#container");
	wall.reset({
		selector: '.brick',
		animate: true,
		cellW: 150,
		cellH: 'auto',
		onResize: function() {
			wall.fitWidth();
		}
	});

	var images = wall.container.find('.item');
	var length = images.length;
	images.css({visibility: 'hidden'});
	images.find('img').load(function() {
		-- length;
		if (!length) {
			setTimeout(function() {
				images.css({visibility: 'visible'});
				wall.fitWidth();
			}, 505);
		}
	});
  
});