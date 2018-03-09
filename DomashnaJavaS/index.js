var images = [
   {
   	title: 'Title 1';
   	image: 'img1.jpg';

   },
   {
   	title: 'Title 2';
   	image: 'img2.jpg';

   },
   {
   	title: 'Title 3';
   	image: 'img3.jpg';

   },
   {
   	title: 'Title 4';
   	image: 'img4.jpg';

   },
   {
   	title: 'Title 5';
   	image: 'img5.jpg';

   },
   {
   	title: 'Title 6';
   	image: 'img6.jpg';
   }

];


var galleryContainer = document.querySelector('.gallery');
var overlay = document.querySelector('.overlay');
var overlayImage = document.querySelector('.overlay img');


sliki.forEach((v,i) => {
	var li = document.createElement('li');
	var img = document.createElement('img');
	var button = document.createElement('button');
	var span = document.createElement('span');

img.src = 'images/'+ v.image;
button.innerText = "x";
span.innerText = v.title;

button.addEventListener( 'click',() => {
	li.remove();
});

img.addEventListener( 'click',() => {
	overlayImage.src = 'images/' + v.image;
	overlay.style.display = 'block';
});

overlayImage.addEventListener( 'click', (e) => {
	e.stopPropagation();
});

overlayImage.addEventListener( 'load',() => {
	overlayImage.style.left = 'calc(50% - '+ ( overlayImage.width / 2) +' px)';
	overlayImage.style.top = 'calc(50% - '(overlayImage.height / 2) +' px)';

});

overlay.addEventListener('click', () =>  {
	overlay.style.display = 'none';
});


li.appendChild(img);
li.appendChild(span);
li.appendChild(button);

galleryContainer.appendChild(li);


});
