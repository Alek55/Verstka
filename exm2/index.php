<?php
$this->registerCssFile("@web/css/land/sabrilia.css", [
    ['depends' => ['app\assets\AppAsset']],
]);
$this->registerCssFile("@web/css/orders/slick.css", [
    ['depends' => ['app\assets\AppAsset']],
]);
$this->registerCssFile("@web/css/orders/slick-theme.css", [
    ['depends' => ['app\assets\AppAsset']],
]);
$this->registerJsFile("@web/js/orders/slick.min.js", [
    ['depends' => ['app\assets\AppAsset']],
], \yii\web\View::POS_READY);

 $this->registerJs("
		$('#imgs').slick({
			slidesToShow: 1,
			autoplay: true,
			dots: true,
			arrows: false,
			speed:1000,
			centerMode: true,
			centerPadding:'0px',
	  });
	", \yii\web\View::POS_READY);
	
$this->registerJs("
		$('#catalog_wrap').slick({
			slidesToShow: 1,
			autoplay: true,
			dots: true,
			arrows: false,
			speed:1000,
			centerMode: true,
			centerPadding:'0px',
	  });
	  $('#act_podushki').slick({
		  dots: false,
		  autoplay: true,
		  arrows: false,
		  infinite: true,
		  speed: 1000,
		  fade: true,
		  cssEase: 'linear'
	  });
	", \yii\web\View::POS_READY);
	$this->registerJs("
		$(document).ready(function() {
			$('.sabrilia_form').click(function(e) {
				e.preventDefault();
				var top = $('#contact').offset().top;
				$('html, body').animate({'scrollTop':top+'px'}, 1000);
			});
			
			$('#icon_menu a').click(function(e) {
				e.preventDefault();
				$('nav').css('display', 'block');
				$('nav').animate({right:0}, 100);
				$('#dark').fadeIn(300);
			});
			
			$('#dark').click(function() {
				$('nav').animate({right:-230}, 100);
				$('#dark').fadeOut(300);
			});
			
			$('nav ul li a, #menu ul li a').click(function(e) {
				e.preventDefault();
				var data = $(this).attr('data-id');
				var top = $(data).offset().top;
				$('html, body').animate({'scrollTop':top+'px'}, 1000);
				$('nav').animate({right:-230}, 100);
				$('#dark').fadeOut(300);
			});
			
			$('#contact input[name=send]').click(function(e) {
				var name = $('#contact input[name=name]').val();
				var phone = $('#contact input[name=phone]').val();
				if(name == '') {
					e.preventDefault();
					$('#contact form + .error').text('������� ���');
				}
				else if(phone == '') {
					e.preventDefault();
					$('#contact form + .error').text('������� �������');
				}
			});
			$('form input').on('focus', function() {
				$('.error').empty();
			});
			
			$('#act form input[name=send]').on('click', function(e) {
				e.preventDefault();
				var name = $('#act input[name=name]').val();
				var phone = $('#act input[name=phone]').val();
				if(name == '') {
					$('#act form + .error').text('������� ���');
				}
				else if(phone == '') {
					$('#act form + .error').text('������� �������');
				}
			});
		});
	", \yii\web\View::POS_READY);
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<div id="main">
	<nav>
		<ul>
			<li><a data-id="#company" href="#">� ���</a></li>
			<li><a data-id="#our_work" href="#">���� ������</a></li>
			<li><a data-id="#feedback" href="#">������</a></li>
			<li><a data-id="#catalog" href="#">�������</a></li>
			<li><a data-id="#team" href="#">���� �������</a></li>
			<li><a data-id="#shema" href="#">������� ������</a></li>
			<li><a data-id="#map" href="#">��������</a></li>
		</ul>
		<p>+7-495-740-58-01</p>
		<p>+7-926-396-27-65</p>
		<p>hello@sabrilia.ru</p>
	</nav>
	<div class="wrap">
		<div class="padd">
			<div id="info_right">
				<div id="address">
					<p>�����:</p>
					<address>�. ������, ��.���������, �.8, �.1</address>
				</div>
				<div id="time">
					<p>������ ������:</p>
					<p>� 10:00 �� 20:00</p>
				</div>
			</div>
			<div id="main_block">
				<div id="main_block_header">
					<a href="#"><img src="images/sabrilia/logo.png" alt="��������"></a>
					<p id="icon_menu"><a href="#"></a></p>
					<div id="phones">
						<p>+7-495-740-58-01</p>
						<p>+7-926-396-27-65</p>
					</div>
				</div>
				<div id="main_title">
					<div></div>
					<h1>�������������� ����� �������� �� ����������� ������</h1>
				</div>
				<div class="polosa"></div>
				<div id="adv">
					<p>������� � ���������� �����</p>
					<p>���������������� �����</p>
					<p>������ � ��������� ��� ����</p>
				</div>
				<div class="btn">
					<a class="sabrilia_form" href="#">�������� ������</a>
				</div>
				<div id="menu">
					<ul>
						<li><a data-id="#company" href="#">� ���</a></li>
						<li><a data-id="#our_work" href="#">����<br>������</a></li>
						<li><a data-id="#catalog" href="#">�������</a></li>
					</ul>
				</div>
				<div id="flower"></div>
			</div>
		</div>
	</div>
</div>
<div id="company">
	<div class="wrap">
		<div class="padd">
			<h1 class="title">� ����� ��������</h1>
			<div class="title_logo">
				<div></div>
				<img src="images/sabrilia/icons/diamond.png" alt="">
				<div></div>
			</div>
			<div id="company_content">
				<div id="wrap_video"><img src="images/sabrilia/company.jpg" alt="�����"></div>
				<div id="company_text">
					<p>������ ��������<br>� ����������� ������</p>
					<p>�������������� ��������</p>
					<p>��������������<br>������������ �������</p>
					<p>���� ��� �� ������</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="our_work">
	<div class="wrap">
		<div class="padd">
			<h1 class="title">���� ������</h1>
			<div id="polosa_o_w"></div>
			<p>� 2014 ���� �� ��������� ����� 1000 �����</p>
			<div id="work_content">
				<div id="imgs">
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/1/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/1/2.jpg" alt="">
							<img src="images/sabrilia/work/1/3.jpg" alt="">
						</div>
					</div>
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/2/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/2/2.jpg" alt="">
							<img src="images/sabrilia/work/2/3.jpg" alt="">
						</div>
					</div>
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/3/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/3/2.jpg" alt="">
							<img src="images/sabrilia/work/3/3.jpg" alt="">
						</div>
					</div>
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/4/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/4/2.jpg" alt="">
							<img src="images/sabrilia/work/4/3.jpg" alt="">
						</div>
					</div>
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/5/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/5/2.jpg" alt="">
							<img src="images/sabrilia/work/5/3.jpg" alt="">
						</div>
					</div>
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/6/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/6/2.jpg" alt="">
							<img src="images/sabrilia/work/6/3.jpg" alt="">
						</div>
					</div>
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/7/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/7/2.jpg" alt="">
							<img src="images/sabrilia/work/7/3.jpg" alt="">
						</div>
					</div>
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/8/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/8/2.jpg" alt="">
							<img src="images/sabrilia/work/8/3.jpg" alt="">
						</div>
					</div>
					<div class="imgs_item">
						<div>
							<img src="images/sabrilia/work/9/1.jpg" alt="">
						</div>
						<div>
							<img src="images/sabrilia/work/9/2.jpg" alt="">
							<img src="images/sabrilia/work/9/3.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="list_company">
	<div class="wrap">
		<div class="padd">
			<div id="wrap_l_c">
				<div id="l_c_left"></div>
				<div id="l_c_right">
					<img src="images/sabrilia/list_company/1kanal.png" alt="1 �����">
					<img src="images/sabrilia/list_company/severstal.png" alt="����������">
					<img src="images/sabrilia/list_company/morf.png" alt="������������ �������">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="feedback">
	<div class="wrap">
		<div class="padd">
			<i></i>
			<i></i>
			<div id="feed_text">
				<h1 class="title">� ��� ����� ��������� ��������� ��������</h1>
				<p>���������� ������ � ��� � <a target="_blank" href="https://www.facebook.com/sabriliamoscow">facebook</a></p>
			</div>
			<img src="images/sabrilia/feedback/brill.png" alt="���������">
			<div id="feed_content">
				<div><img src="images/sabrilia/feedback/feed1.jpg" alt="�����1"></div>
				<div><img src="images/sabrilia/feedback/feed2.jpg" alt="�����2"></div>
				<div><img src="images/sabrilia/feedback/feed3.jpg" alt="�����3"></div>
			</div>
		</div>
	</div>
</div>
<div id="act">
	<div class="wrap">
		<div class="padd">
			<div id="act_text">
				<h1>��� ������ �� <span>250 ����� ������<br>��� ������������ �������</span> � �������</h1>
				<form action="#" method="post">
					<input type="text" name="name" placeholder="���� ���">
					<input type="text" name="phone" placeholder="��� �������">
					<input type="submit" name="send" value="��������">
				</form>
				<p class="error"></p>
			</div>
			<div id="act_podushki">
				<img src="images/sabrilia/podushki/1.png" alt="">
				<img src="images/sabrilia/podushki/2.png" alt="">
				<img src="images/sabrilia/podushki/3.png" alt="">
				<img src="images/sabrilia/podushki/6.png" alt="">
			</div>
		</div>
	</div>
</div>
<div id="catalog">
	<div class="wrap">
		<div class="padd">
			<h1 class="title">����������� ��������� ������������ ������<br>�Sabine Klein�</h1>
			<div class="title_logo">
				<div></div>
				<img src="images/sabrilia/icons/catalog.png" alt="">
				<div></div>
			</div>
			<p>� ����� �������� ������������ ��� ��������� ������������ ������ �� "Sabine Klein". ��� �������� �������� ������� ��������, ������� ����� �������� ��� ������������� ������������� ������� � ������ ��������, � ����� ��������� ������ ���� ������ ����.</p>
			<div id="catalog_wrap">
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/3.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/4.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/5.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/6.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/7.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/8.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/9.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/10.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/11.jpg" alt="">
				</div>
				<div class="catalog_block">
					<img src="images/sabrilia/catalog/13.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div id="team">
	<div class="wrap">
		<div class="padd">
			<h1 class="title">������� ������ ����,<br><span>��������� ����� ���� ���� � ����������</span></h1>
			<div class="title_logo">
				<div></div>
				<img src="images/sabrilia/icons/team.png" alt="">
				<div></div>
			</div>
		</div>
	</div>
	<img src="images/sabrilia/team.jpg" alt="�������">
</div>
<div id="shema">
	<div class="wrap">
		<div class="padd">
			<h1 class="title">� ��� ��������� ��������<br>�������� �� ������ � ����</h1>
			<div class="title_logo">
				<div></div>
				<img src="images/sabrilia/icons/shema.png" alt="">
				<div></div>
			</div>
			<div id="shema_wrap">
				<div class="shema_block">
					<div class="shema_img"><img src="images/sabrilia/shema_1.png" alt=""></div>
					<div class="shema_text">
						<p>���</p>
						<div></div>
						<p>���������� ������ � ��� ��������� ����������� � ���� � �������������� � �������</p>
					</div>
					<div class="shema_img650"><img src="images/sabrilia/shema_1.png" alt=""></div>
				</div>
				<div class="shema_block">
					<div class="shema_text">
						<p>���</p>
						<div></div>
						<p>���������� ������ ������ � ��� �������� ���������� ������ ������</p>
					</div>
					<div class="shema_img"><img src="images/sabrilia/shema_2.png" alt=""></div>
				</div>
				<div class="shema_block">
					<div class="shema_img"><img src="images/sabrilia/shema_4.png" alt=""></div>
					<div class="shema_text">
						<p>���</p>
						<div></div>
						<p>���������� ����������� ������, ����������� ������� � ���������� � ������</p>
					</div>
					<div class="shema_img650"><img src="images/sabrilia/shema_4.png" alt=""></div>
				</div>
				<div class="shema_block">
					<div class="shema_text">
						<p>��!</p>
						<div></div>
						<p>��������� ������, ��������� �<br>���������� ���������</p>
					</div>
					<div class="shema_img"><img src="images/sabrilia/shema_3.png" alt=""></div>
				</div>
			</div>
			<div id="shema_btn">
				<a class="sabrilia_form" href="#">�������� ������</a>
			</div>
		</div>
	</div>
</div>
<div id="dop_uslugi">
	<div class="wrap">
		<div class="padd">
			<h2>� ��� �� ����� ������ ���������� �����<br> ��������� �������:</h2>
			<p>-����������, ����������, ������������.<br>�� ������������� � ������ ����������.</p>
			<h2>� ����� �������� ����� ��������������<br>������:</h2>
			<p>-������;</p>
			<p>-������;</p>
			<p>-�������� �����.</p>
			<a class="sabrilia_form" href="#">�������� ������������</a>
			<i></i>
		</div>
	</div>
</div>
<div id="contact">
	<div id="contact_dark"></div>
	<div class="wrap">
		<div class="padd">
			<h1 class="title">�������� ������ �� �������� ������</h1>
			<p>� ��� ��������� �������� � ���� � ���������� �����</p>
			<div></div>
			<form action="#" method="post">
				<input type="text" name="name" placeholder="���">
				<input type="text" name="phone" placeholder="�������">
				<input type="submit" name="send" value="���������">
			</form>
			<p class="error"></p>
		</div>
	</div>
</div>
<footer>
	<div class="wrap">
		<div class="padd">
			<div id="footer_left">
				<a href="#"><img src="images/sabrilia/logo_white.png" alt=""></a>
				<span>��� ����������</span>
			</div>
			<p>���� ���������� � <a href="https://sferaweba.ru/landing.html" target="_blank">������ ����</a></p>
			<div id="footer_whatsapp">
				<a target="_blank" href="https://api.whatsapp.com/send?phone=79263962765&text=������ ����, ������� ������ '���������' � ��� �������� ��� ����������.
� ���� ������ ������������ ����� �� ����������� ������."></a>
			</div>
		</div>
	</div>
</footer>
<div id="map">
	<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab728eadcb4375f335ec55059f3eec07d162d30a9fd414adee2a89ef40d911ffa&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
	<div id="map_dark"></div>
	<div id="data_contact">
		<h3>���� ��������:</h3>
		<div>
			<p>
				<b>������:</b>
				�. ������, ��.���������, �.8, �.1 
			</p>
			<p>
				<b>������ ������:</b>
				� 10:00 �� 20:00
			</p>
			<p>
				<b>�������:</b>
				+7-495-740-58-01
			</p>
			<p>
				<b>WhatsApp:</b>
				+7-926-396-27-65 
			</p>
			<p>
				<b>Email:</b>
				hello@sabrilia.ru
			</p>
		</div>
	</div>
</div>