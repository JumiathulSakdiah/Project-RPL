const toSignupEvent = document.getElementById('toSignup');
const toLoginEvent = document.getElementById('toLogin');
const container = document.getElementById('container');

toSignupEvent.addEventListener('click', () => {
	container.classList.add("signup-show");

});

toLoginEvent.addEventListener('click', () => {
	container.classList.remove("signup-show");

});