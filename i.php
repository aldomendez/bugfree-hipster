<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Apps de LR4</title>
	<link rel="stylesheet" href="./packaged/css/semantic.min.css">
</head>
<body>
<div class="ui one column page grid" id="content"></div>

<script id="template" style="display: none;" type='text/ractive'>
	<?php include "template.php" ?>
</script>

<script src="../jsLib/mousetrap/mousetrap.min.js"></script>
<script src="../jquery/jquery.js"></script>
<script src="../jsLib/ractivejs/ractive.js"></script>
<script>
var r, loadRactive;

loadIndex = function (data) {
	r.set('index',data);
}


r = new Ractive({
	el:'#content',
	template:'#template',
	data:{
		showAll:false,
		index:[
			{name:'Index',desc:'Contenido del index'}
		]
	}
});
// r.observe('index',function (n,o) {
// 	console.log('captured:',n);
// });
// r.on('add', function(){
// 	r.data.symbols.push(r.data.newEntry);
// 	r.set('newEntry',{group:r.data.masterGroup,name:'',html:'',entity:''});
// });


$.getJSON('index.js',loadIndex);

Mousetrap.bind('/', function() { 
	r.set('showAll', true);
	console.log('pressed: /');
}, 'keyup');
Mousetrap.bind('.', function() {
	r.set('showAll', false);
	console.log('pressed: .');
}, 'keyup');
</script>
</body>
</html>