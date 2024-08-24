

document
	.getElementById('button_submit_form')
	.addEventListener('click', function (e) {
		if (document.getElementById('name_input_js').value.length === 0) {
		    e.preventDefault();
			document.getElementById('text_message').innerHTML =
				'Вы не заполнили поле Имя!';
			document.getElementById('text_message').style.display = 'block';
			document.getElementById('name_input_js').style.borderColor = 'red';
			setTimeout(() => {
				document.getElementById('name_input_js').style.borderColor =
					'rgb(118, 118, 118)';
				document.getElementById('text_message').style.display = 'none';
			}, 4500);
		} else if (document.getElementById('number_phone').value.length !== 16) {
		    e.preventDefault();
			document.getElementById('text_message').innerHTML =
				'Вы не заполнили поле Телефон!';
			document.getElementById('text_message').style.display = 'block';
			document.getElementById('number_phone').style.borderColor = 'red';
			setTimeout(() => {
				document.getElementById('text_message').style.display = 'none';
				document.getElementById('number_phone').style.borderColor =
					'rgb(118, 118, 118)';
			}, 4500);
		} else if (document.getElementById('checkbox').checked === false) {
		    e.preventDefault();
			document.getElementById('text_message').innerHTML =
				'Вы не подтвердили согласие на обработку персональных данных';
			document.getElementById('text_message').style.display = 'block';
			setTimeout(() => {
				document.getElementById('text_message').style.display = 'none';
			}, 6500); // Поскольку текст длинный, время setTimeOut дольше
			// Положительный ответ если все тесты сверху не были выполнены (всё правильно заполнено)
		} else {
			document.getElementById('text_message').style.display = 'block';
			document.getElementById('text_message').innerHTML =
				'Сообщение успешно<br/>отправлено!';
		}
	});
