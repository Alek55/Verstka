<?php
$this->registerCssFile("@web/css/land/tricolor.css", [
    ['depends' => ['app\assets\AppAsset']],
]);

$this->registerJs("
	$('header ul li a').click(function(e) {
		e.preventDefault();
		var data_id = $(this).attr('data-id');
		var top = $(data_id).offset().top;
		$('html, body').animate({'scrollTop':top+'px'}, 1000);
	});
	
	$('#tabs a').click(function(e) {
		e.preventDefault();
		$('#tabs a').removeClass('active');
		$(this).addClass('active');
		$('.wrap_cost, .wrap_cost_1').css('display', 'none');
		var data_id = $(this).attr('data-id');
		$(data_id).fadeIn(300);
	});
	
	$('#add_z .m_btn').click(function(e) {
		var value = $('#add_z .m_btn_text').val();
		if(!isNumeric(value)) {
			$('#act_right form .m_btn_text').css('border', '1px solid red');
			return false;
		}
		return true;
	});
	
	$('#add_z_1 .m_btn').click(function(e) {
		var value = $('#add_z_1 .m_btn_text').val();
		if(!isNumeric(value)) {
			$('footer form .m_btn_text').css('border', '1px solid red');
			return false;
		}
		return true;
	});
	
	function isNumeric(n) {
		return !isNaN(parseFloat(n)) && isFinite(n);
	}
	
	var w_br = $(window).width();
	if(w_br <= 829) {
		$('.step_check1 p').html('<b>1</b> Антенный кабель');
		$('.step_check2 p').html('<b>2</b> HDMI-кабель');
		$('.step_check3 p').html('<b>3</b> Блок питания');
		$('.step_check4 p').html('<b>4</b> Карта');
	};
	if(w_br <= 460) {
		$('.step_check1 p').html('<b>1</b> Антенный кабель');
		$('.step_check2 p').html('<b>2</b> HDMI-кабель');
		$('.step_check3 p').html('<b>3</b> Блок питания');
		$('.step_check4 p').html('<b>4</b> Карта');
		$('#main_block_content h1 br').remove();
	}
	
	$('.open_pop').click(function(e) {
		e.preventDefault();
		$('#dark').fadeIn(300);
		$('#popup').fadeIn(300);
	});
	$('#popup #close_p').click(function(e) {
		$('#dark').fadeOut(300);
		$('#popup').fadeOut(300);
	});
	$('#dark').click(function(e) {
		$('#dark').fadeOut(300);
		$('#popup').fadeOut(300);
	});
", \yii\web\View::POS_READY);

?>
<main>
	<div id="main_block">
		<div id="dark"></div>
		<div id="popup">
			<span id="close_p"></span>
			<span id="circle1_p"></span>
			<span id="circle2_p"></span>
			<span id="c_left"></span>
			<span id="c_right"></span>
			<h3>Оставьте заявку</h3>
			<form action="https://sferaweba.ru/addtricolor.html" method="post">
				<div class="inp_p">
					<p>Ваше имя:</p>
					<input type="text" name="name" placeholder="Александр">
				</div>
				<div class="inp_p">
					<p>Ваш телефон:</p>
					<input type="text" name="phone" placeholder="7-937-945-32-54">
				</div>
				<input type="submit" name="send_p" value="Отправить">
			</form>
			<p>Менеджер вам перезвонит и утвердит ваш заказ</p>
			<div><img src="images/tricolor/popup/logo_p.png" alt=""></div>
		</div>
		<header>
			<div class="wrap">
				<div class="padd">
					<a href="#"><img src="images/tricolor/logo.png" alt=""></a>
					<div id="header_right">
						<p id="call">8-800-543-54-67</p>
						<a class="open_pop" href="#">Заказать звонок</a>
					</div>
					<ul>
						<li><a data-id="#goods" href="#">Комплектация</a></li>
						<li><a data-id="#steps" href="#">Характеристики</a></li>
						<li><a data-id="#tarif" href="#">Подключение</a></li>
						<li><a data-id="#cost" href="#">Доставка</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div id="main_block_content">
			<div class="wrap">
				<div class="padd">
					<i></i>
					<i></i>
					<img src="images/tricolor/main_img.png" alt="">
					<h1>Цифровой спутниковый приемник<br> <span>DTS 54</span> для просмотра «Триколор ТВ»</h1>
					<p>Доставка по всей России</p>
					<a class="open_pop" href="#">Приобрести</a>
					<div id="main_block_bottom">
						<p><i></i><i></i>Более 200<br>каналов</p>
						<p><i></i><i></i>Легкая<br>настройка</p>
						<p><i></i><i></i>Гарантия<br>12 месяцев</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="goods">
		<div class="wrap">
			<div class="padd">
				<h1 class="title">При заказе онлайн полная комплектация в подарок</h1>
				<p></p>
				<div id="table_goods">
					<div id="r1">
						<div>
							<span></span>
							<span></span>
							<p>Приемник DTS 54</p>
							<img src="images/tricolor/goods/1.png" alt="">
							<i></i>
						</div>
					</div>
					<div id="r2">
						<div>
							<p>Руководство по<br>использованию</p>
							<div>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<img src="images/tricolor/goods/2.png" alt="">
						</div>
						<div>
							<p>Пульт<br><br></p>
							<div>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<img src="images/tricolor/goods/3.png" alt="">
						</div>
						<div>
							<p>Гарантийный талон<br>на 12 месяцев</p>
							<div>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<img src="images/tricolor/goods/4.png" alt="">
						</div>
					</div>
					<div id="r3">
						<div>
							<p>Батарейки</p>
							<img src="images/tricolor/goods/5.png" alt="">
						</div>
						<div>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div>
							<p>Кабель HDMI</p>
							<img src="images/tricolor/goods/6.png" alt="">
						</div>
						<div>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div>
							<p>Блок питания</p>
							<img src="images/tricolor/goods/7.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="steps">
		<div class="wrap">
			<div class="padd">
				<h1 class="title">Подключение в 4 шага</h1>
				<p></p>
				<div id="gift">
					<p>HDMI кабель и<br>блок питания идут <span>в комплекте</span></p>
				</div>
				<div class="step_check step_check1">
					<span></span>
					<span></span>
					<span></span>
					<i></i>
					<p><b>1</b> Подключаете антенный кабель</p>
				</div>
				<div class="step_check step_check2">
					<span></span>
					<span></span>
					<span></span>
					<i></i>
					<p><b>2</b> Подключаете HDMI кабель</p>
				</div>
				<div class="step_check step_check3">
					<span></span>
					<span></span>
					<span></span>
					<i></i>
					<p><b>3</b> Подключаете блок питания</p>
				</div>
				<div class="step_check step_check4">
					<span></span>
					<span></span>
					<span></span>
					<i></i>
					<p><b>4</b> Вставляете карту</p>
				</div>
				<img src="images/tricolor/steps_bg.png" alt="">
				<div id="steps_btn"><a class="open_pop" href="#">Получить бесплатную консультацию</a></div>
			</div>
		</div>
	</div>
	<div id="tarif">
		<div class="wrap">
			<div class="padd">
				<div id="tarif_left">
					<h1>Тариф <span>ЭКСТРА</span></h1>
					<div id="wrap_canal_und"></div>
					<div id="wrap_canal">
						<img src="images/tricolor/tarif_img.png" alt="">
						<p>телеканала</p>
						<p>Видеоразрешение<br>Full HD(до 1920x1080i)</p>
					</div>
				</div>
				<div id="tarif_right">
					<p>Канал в формате<br>высокой четкости</p>
					<p>Радиостанций<br><br></p>
					<p>Автоматический поиск<br>теле-и радиоканалов</p>
					<p>Возможность создания<br>фаворитных списков</p>
					<p>Подключаемые субтитры</p>
					<p>Телетекст с сообщениями о последних событиях</p>
				</div>
			</div>
		</div>
	</div>
	<div id="act">
		<div class="wrap">
			<div class="padd">
				<div id="act_left">
					<h2>При заказе онлайн до 31.12.2019 бесплатная консультация по настройке</h2>
					<p>Регистрация</p>
					<p>Отправка договора в НСК</p>
					<p>Бесплатная доставка до ТК</p>
					<div>
						<p>Вам останется только подключить его</p>
					</div>
				</div>
				<div id="act_right">
					<div>
					<p>Оставьте заявку нашему менеджеру</p>
					<form id="add_z" action="" method="post">
						<input class="m_btn_text" type="text" name="phone_act" placeholder="Ваш телефон">
						<input class="m_btn" type="submit" value="Отправить" name="submit_act">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="cost">
		<div class="wrap">
			<div class="padd">
				<h1 class="title">Стоимость и доставка</h1>
				<p></p>
				<div id="wrap_tabs">
					<div id="tabs">
						<a data-id="#cost_tab" class="active" href="#">Стоимость</a>
						<a data-id="#del_tab" href="#">Доставка</a>
						<a data-id="#pay_tab" href="#">Оплата</a>
					</div>
				</div>
				<div class="wrap_cost" id="cost_tab">
					<div id="dts54">
						<div class="cost_head">
							<p>Приемник</p>
							<p>DTS 54</p>
						</div>
						<div class="price">
							<span>2500</span>
							<span>1990 руб.</span>
						</div>
						<div class="cost_check">
							<p>Полный комплект<i></i></p>
							<p>Бесплатная настройка</p>
							<p>Тариф Экстра<i></i></p>
							<p>Гарантийный талон</p>
							<p>Бесплатная консультация</p>
						</div>
						<div class="cost_btn">
							<a class="open_pop" href="#">ОСТАВИТЬ ЗАЯВКУ</a>
						</div>
					</div>
					<div id="dts54plus">
						<div class="cost_head">
							<p>Комплект</p>
							<p>DTS 54 + тарелка</p>
						</div>
						<div class="price">
							<span>4000</span>
							<span>3000 руб.</span>
						</div>
						<div class="cost_check">
							<p>Полный комплект<i></i></p>
							<p>Бесплатная настройка</p>
							<p>Тариф Экстра<i></i></p>
							<p>Гарантийный талон</p>
							<p>Бесплатная консультация</p>
							<p>Тарелка Триколор ТВ</p>
							<p>Стеновое крепление</p>
							<p>Конвертер</p>
						</div>
						<div class="cost_btn">
							<a class="open_pop" href="#">ОСТАВИТЬ ЗАЯВКУ</a>
						</div>
					</div>
					<span></span>
					<span></span>
				</div>
				<div class="wrap_cost_1 hide" id="del_tab">
					<div class="wrap_z">
					<div class="cost_head_1">
						<p>Доставка</p>
					</div>
					<div class="w_c_cont">
						<p>Доставка осуществляется по всей России</p>
						<div class="red_checks">
							<p>Почта России</p>
							<p>Boxberry</p>
							<p>Деловые линии</p>
							<p>Байкал-сервис</p>
							<p>ПЭК</p>
							<p>Delko</p>
						</div>
						<p>Срок доставки от 5 до 12 дней</p>
					</div>
					<p>Доставка до траспортной компании и почты россии осуществляется <span>бесплатно</span></p>
					</div>
					<span class="left_blue"></span>
					<span class="right_red"></span>
				</div>
				<div class="wrap_cost_1 hide" id="pay_tab">
					<div class="wrap_z">
						<div class="cost_head_1">
							<p>Оплата</p>
						</div>
						<div class="w_c_cont_1">
							<p>Мы высылаем платежное поручение на вашу электронну почту</p>
							<p>Вы оплачиваете полную стоимость оборудования</p>
							<p>Стоимость доставки вы оплачиваете транспортной компании после получения</p>
						</div>
						<div class="btm_card">
							<p>Visa/ MasterCard</p>
							<p>Отделения банков</p>
						</div>
					</div>
					<span class="left_blue"></span>
					<span class="right_red"></span>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="wrap">
			<div class="padd">
				<h1 class="title">Смотрите любимые каналы в FULL HD качестве<br>всего за 1990 руб.</h1>
				<p></p>
				<form id="add_z_1" action="" method="post">
					<input class="m_btn_text" type="text" name="phone_footer" placeholder="Ваш телефон">
					<input class="m_btn" type="submit" name="submit_footer" value="Заказать">
				</form>
			</div>
		</div>
		<div id="bottom_f">
			<div class="wrap">
				<div class="padd">
					<img src="images/tricolor/logo.png" alt="">
					<div id="footer_time">
						<h3>График работы:</h3>
						<p></p>
						<p>Пн-Пт.: 9:00-18:00</p>
						<p>Сб.: 9:00-17:00</p>
					</div>
					<div id="footer_contact">
						<h3>Контакты:</h3>
						<p></p>
						<p>8-800-545-45-45</p>
						<p>ttv@mail.ru</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</main>