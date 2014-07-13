var r, loadRactive;

r = new Ractive({
	el:'#content',
	template:'#template',
	data:{
		pageElement:'finished',
		flag:'myflag',
		index:[],
		editing:null,
		state:'prod'
	}
});
// r.observe('index',function (n,o) {
// 	console.log('captured:',n);
// });
r.on('edit', function(e){
	console.log(e);
});


indexPromise = $.getJSON('index.js').promise();

indexPromise.then(function (index) {
	// jQuery me entrega el contenido del archivo ya listo para
	// trabajar con el objeto que resivo del servidor
	r.set('index',index);
});

Mousetrap.bind('/', function() { 
	r.set('pageElement', 'all');
}, 'keyup');
Mousetrap.bind('.', function() {
	r.set('pageElement', 'finished');
}, 'keyup');
Mousetrap.bind(',', function() {
	//Esto funciona de la siguiente manera:
	// Primero seleccionamos el arreglo de opciones que tenemos disponibles
	// en este caso son estas dos opciones
	// `sel` va como sigue:
	// buscamos cual es el indice del valor actual en la variable r.state
	// -- se supone que el valor tiene que existir
	// le sumamos uno al valor del indice (por que queremos que me seleccione
	// el siguiente valor en el arrego), y despues hacemos el modulo contra
	// la cantidad total de elementos que tiene el arreglo
	// (esto me asegura que al sumarle uno al indice, en el ultimo numero me
	// seleccione el primero de nuevo)
	arr = ['prod','dev'];
	sel = ((arr.indexOf(r.data.state)+1)%(arr.length));
	r.set('state', arr[sel]);
}, 'keyup');
Mousetrap.bind('=', function() {
	r.set('showMenu', false);
}, 'keyup');