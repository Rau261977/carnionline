document.addEventListener('DOMContentLoaded', function () {
	document.addEventListener('scroll', function () {
		const scrollImage = document.querySelector('.scroll-image');

		if (window.scrollY > 0) {
			scrollImage.style.display = 'block';
		} else {
			scrollImage.style.display = 'none';
		}
	});
});
