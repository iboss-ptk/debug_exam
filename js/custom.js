/* === initialize scrollReveal === */

window.scrollReveal = new scrollReveal(
		{
            after: '0.3s',
            enter: 'bottom',
            move: '24px',
            over: '0.66s',
            easing: 'ease-in-out',
            viewportFactor: .33,
            reset: true,
            init: true
          }

	);



/* === parallax background === */

$('.parallax').scrolly({bgParallax: true});


/* === viewport fit === */

// global vars
var winHeight = $(window).height();

// set initial div height / width
$('.vp-fit').css({
	'height': winHeight,
});

// make sure div stays full width/height on resize
$(window).resize(function(){
	winHeight = $(window).height();
    $('.vp-fit').css({
    'height': winHeight,
});
});