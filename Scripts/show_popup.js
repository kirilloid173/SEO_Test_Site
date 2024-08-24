document
	.getElementById('form_link_popup')
	.addEventListener('click', function () {
		document.getElementById('back_black').style.backgroundColor = '#333333';
		document.getElementById('popup').style.display = 'flex';
		document.getElementById('body_html').style.backgroundColor = '#333333';
		document.getElementById('main_text_test').style.display = 'none';
	});
document.getElementById('x_close').addEventListener('click', function () {
	document.getElementById('back_black').style.backgroundColor = 'white';
	document.getElementById('popup').style.display = 'none';
	document.getElementById('main_text_test').style.display = 'block';
	document.getElementById('body_html').style.backgroundColor = 'white';
});
