<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta
			name="Title"
			content="Тестовое задание на должность Web-мастер/Младший Web-разработчик"
		/>
		<meta
			name="Description"
			content="На этой странице отображен результат тестового задания"
		/>
		<meta name="H1" content="Вакансия веб-программист" />
		<title>Главная страница</title>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
        <script src="https://unpkg.com/imask"></script>
	</head>
	<body id="body_html">
		<?php
		wp_head();
		?>
		<form action="<?php bloginfo('template_url'); ?>/Server/load_to_email.php" method="post">
		<div id="popup">
			<p id="x_close">X</p>
			<p id="title_popup">Обратный звонок</p>
			<p class="name_input">Имя</p>
			<input required type="text" name="name_name" id="name_input_js" maxlength="12"/>
			<p class="name_input">Телефон</p>
			<input required type="text" name="name_phone" id="number_phone" placeholder="+7"/>
            <p id="text_message">Сообщение успешно<br/> отправлено!</p>
			<div class="checkbox_block_popup">
				<input type="checkbox" checked id="checkbox" />
				<p>Согласиться на обработку<br />персональных данных</p>
			</div>
			<button id="button_submit_form" type="submit">Отправить</button></form>
		</div>
<span id="back_black">
		<p id="main_text_test">
			Тестовое задание на должность Web-мастер/Младший Web-разработчик<br />
			1. Зарегистрировать бесплатный хостинг и домен.<br />
			2. Развернуть на бесплатном хостинге WP.<br />
			3. Шрифт на сайте «montserrat». Цвет #333333<br />
			4. Создать страницу.<br />
			5. Прописать на ней мета-теги:<br />
			Title: Тестовое задание на должность Web-мастер/Младший Web-разработчик<br />
			Description: На этой странице отображен результат тестового задания.<br />
			H1: Вакансия веб-программист<br />
			6. После H1 разместить текст текущего тестового задания<br />
			7. Поставить в тексте на словосочетание
			<span id="form_link_popup">«форму обратной связи»</span> ссылку, при
			нажатии на которое откроется форма обратной связи в popup.<br />
			8. Реализовать форму обратной связи в popup окне (готовые решения и
			плагины использовать запрещено, библиотечки можно).<br />
			9. Внешний вид формы (<br />
			● Максимальная ширина 350,<br />
			● цвет кнопки и текста #333333, при наведении на кнопку должна быть
			инверсия цвета.<br />
			● поле “Телефон” должно быть обязательным, у поля “Телефон” должна быть
			маска. <br />
			● Галочка на обработку должна быть обязательна и по умолчанию
			установлена.<br />
			● При невыполнении условия о обязательных полях должно выводится сообщение
			об ошибке, или успешном заполнении – сообщение об отправке. )<br />
			● <br />
			● Реализовать на php функционал отправки данных с формы на почту.<br />
			● При нажатии на «крестик» форма должны закрываться.<br />
			● Страница и форма должны быть адаптивными.<br />
			<br />
			● ТЗ отправить на почту ablyazova@seo.ru: ссылку на сайт, архив с сайтом.
			<br />
			<br />
		</p>
		</span>

		<script src="<?php bloginfo('template_url'); ?>/Scripts/show_popup.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/Scripts/check_form.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/Scripts/Mask.js"></script>
		<?php
		wp_footer();
		?>
	</body>
</html>
