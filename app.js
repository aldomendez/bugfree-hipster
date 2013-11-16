$(document).ready(function(){

	Mousetrap.bind('[ [ =', function() { window.mvm.showDevEntries(true); }, 'keyup');
	Mousetrap.bind('q q w', function() { window.mvm.showDevEntries(true); }, 'keyup');
	Mousetrap.bind('esc', function() { window.mvm.showDevEntries(false); }, 'keyup');

	$.ajax({
		url:"index.js",
		dataType:'json',
		success : function(data){
			// inicializa el modelo
			window.mvm = {index:data};
			window.mvm["showDevEntries"] = ko.observable(false);
			window.mvm["editForm"] = ko.observable(true);
			// inicializa Knockout
			ko.applyBindings(mvm);
		},
		error : function (x,status,error){
			// console.log(status + error);
		}
	});

});