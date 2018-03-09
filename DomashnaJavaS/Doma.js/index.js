  function c2f(c) {
  	var f = c * 1.8 + 32 ;
  	console.log (f);  
  }

  function f2c(f) {
  	var c = (f - 32) / 1.8;
  	console.log(c);
   	
  } 

  function temp (t,ct) {
  	switch (ct) {
  		case 'c2f':
  		       c2f(t);
  		break;

  		case 'f2c' :
  		       f2c(t);
  		break;              
  	}
  }

  c2f (18);
  f2c (120);

  temp ( 12, 'c2f');
  temp ( 102, 'f2c');
  temp ( 18, 'c2f');
  temp ( 120, 'f2c');



  function fizzBuzz(n){
  	var output = [];

  	for ( var i = 0; i < n.length ; i++){
  		var member = '';

  		if(n [i] % 3 == 0){
  			member += 'Fizz';

  		}
  		if(n[i] % 5 == 0) {
  			member += 'Buzz';

  		}
		if(member.length == 0) {
			member = n[i];
		}
		output.push (member);
  	}
    return output;
  }

   var niza = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,];
   var novaNiza = fizzBuzz(niza);

   console.log(novaNiza);
   console.log(niza);



   var fnTest1 = function (name){
   	    console.log(name);
   }

   var fnTest2 = function (fn,n){
   	    fn(n);
   }

   var fnTest3 = function(fn1,fn2,name) {
   	    fn1(fn2,name);
   }
   
   // V1 

   fnTest3( fnTest2,fnTest1,'Pero');

   // V2

   fnTest3(
       function(fn,n) {
       	       fn(n);
       } ,
       fnTest1,
       'Janko'
   	);

   // V3

   fnTest3 (

   	   function(fn,n){
   	   	  fn(n);
   	   },

   	   function(name) {
   	   	  console.log(name);
   	   },

   	      'Stanko'
   	);