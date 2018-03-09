var cb1 = function (fn){
	fn(cb2);
}

var cb2 = function (fn){
	fn(cb3);
}
var cb3 = function(fn){
	fn(cb4);
}
var cb4 = function(fn){
	fn();
	console.log('test');
}

cb1 (function(fn){
	fn(function(fn){
		fn(function(fn){
			fn(function(fn){
				console.log('TEST!');
			});
		});
	});
});


var pr1 = function (number){
	return new Promise(function(resolve,reject){
		if(number % 2 == 0){
			return resolve(number);
		}
	});
} 

var pr2 = function (br){
	return new Promise (function(resolve,reject){
		return resolve (br * 100);
	});
}

var pr3 = function (br){
	return new Promise (function(resolve,reject){
		return resolve ('Rezultatot e:' + br);
	});
}

pr1(4)
.then(function(num){
	return pr2 (num);
})

.then(function(b){
	return pr3(b);
})

.then(function(res){
	console.log(res);
});