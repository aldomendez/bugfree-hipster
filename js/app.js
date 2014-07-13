var r, loadRactive;

r = new Ractive({
	el:'#content',
	template:'#template',
	data:{
		showAll:false,
		flag:'myflag',
		index:[]
	}
});
// r.observe('index',function (n,o) {
// 	console.log('captured:',n);
// });
// r.on('add', function(){
// 	r.data.symbols.push(r.data.newEntry);
// 	r.set('newEntry',{group:r.data.masterGroup,name:'',html:'',entity:''});
// });


indexPromise = $.getJSON('index.js').promise();

indexPromise.then(function (index) {
	// jQuery me entrega el contenido del archivo ya listo para
	// trabajar con el objeto que resivo del servidor
	r.set('index',index);
});

Mousetrap.bind('/', function() { 
	r.set('showAll', true);
	console.log('pressed: /');
}, 'keyup');
Mousetrap.bind('.', function() {
	r.set('showAll', false);
	console.log('pressed: .');
}, 'keyup');