<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Apps de LR4</title>
	<link rel="stylesheet" href="./packaged/css/semantic.min.css">
</head>
<body>
<div class="ui one column page grid" id="content"></div>

<div id="template" style="display: none;">
	<?php include "template.php" ?>
</div>

<script src="../jsLib/mousetrap/mousetrap.min.js"></script>
<script src="../jquery/jquery.js"></script>
<script src="ractive.js"></script>
<script>
var r, loadRactive;

loadIndex = function (data) {
	r.set('index',data);
}

r = new Ractive({
	el:'#content',
	template:'#template',
	data:{
		index:[{
			name:'aldo',
			desc:'prod tech'
		},{
			name:'Sandra',
			desc:'key master'
		}],
		flag:'algun valor'
	}
});
r.observe('index',function (n,o) {
	console.log('captured:',n);
});
// r.on('add', function(){
// 	r.data.symbols.push(r.data.newEntry);
// 	r.set('newEntry',{group:r.data.masterGroup,name:'',html:'',entity:''});
// });


// $.getJSON('index.js',loadIndex);

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