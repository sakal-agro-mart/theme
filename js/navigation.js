
const hamburger = document.getElementById('navbar-hamburger');

const menuLinks =document.getElementById('menu-links-wrapper')

hamburger.addEventListener('click', (e) => {
	if(menuLinks.style.visibility == 'visible') {
		menuLinks.style.visibility = 'hidden';
		menuLinks.style.opacity = 0;

	} else {
		menuLinks.style.visibility = 'visible';
		menuLinks.style.opacity = 1;
	}
	
});
