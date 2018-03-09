var link = document.querySelector('.google-link');

var clickHandler = function(e) {
	e.preventDefault();
	console.log(e);
	alert('Hello Google!');

	switch(e.type){
		case 'click':
		      window.location = 'https://yahoo.com';
		break;
		
		case 'auxclick':
		      window.open('https://yahoo.com','_blank');
		break;           
	}

}

link.addEventListener('click',clickHandler);
link.addEventListener('auxclick',clickHandler);
