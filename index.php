<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>MooTools 3D Spinner</title>
	<meta name="description" content="3D Spinner for MooTools">
	<meta name="keywords" content="mootools, spinner, 3d, rotate, morph">

	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<base href="http://192.168.1.4/sites/youds.com:plugins-themes/mootools-rotate-3d/" />
	
	<!-- CSS : implied media="all" -->
	<link rel="stylesheet" href="css/style.css">

	<style type="text/css" media="screen">
		*{margin:0;padding:0;}
		body{background:black;}
		img#icon{margin:auto;display:block;}
		
	</style>
	
	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script type="text/javascript" src="javascript/MooTools-1.6.0.js"></script>

</head>
<body>
<img src="images/admin-hover@2x.png" alt="Admin Hover" id="icon" onmouseover="rotate3d('icon')" />

<script type="text/javascript" charset="utf-8">
running = ''
function rotate3d (element) {
	if (running == element)
		return false;
	running = element;
	fxMorph = new Fx.Morph(element,  {duration: 'short', transition: Fx.Transitions.Sine.easeOut});
	fxMorph.start({
	    'height': [100, 100], 
	    'width': [90, 0]  
	}).chain(
	  	function(){ this.start({
	    	'height': [100, 100], 
	    	'width': [0, 90]  
		})
	}).chain(
	  	function(){ 
			this.start({
	    		'height': [100, 100], 
	    		'width': [90, 0] 
		})
	}).chain(
	  	function(){ this.start({
	    	'height': [100, 100], 
	    	'width': [0, 90]  
		})
	}).chain(
	  	function(){ 
			running = '';
	});
}
	
</script>
</body>
</html>