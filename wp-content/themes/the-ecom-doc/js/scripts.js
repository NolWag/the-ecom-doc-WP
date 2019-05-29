var mobileBtn = document.getElementById('Hamburger');
var secondNav = document.getElementById('NavList');
if(mobileBtn) {
	mobileBtn.addEventListener('click', function() {
	console.log('click');
	secondNav.classList.toggle('hide');
	})
}