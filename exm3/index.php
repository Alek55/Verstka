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
		$('.step_check1 p').html('<b>1</b> �������� ������');
		$('.step_check2 p').html('<b>2</b> HDMI-������');
		$('.step_check3 p').html('<b>3</b> ���� �������');
		$('.step_check4 p').html('<b>4</b> �����');
	};
	if(w_br <= 460) {
		$('.step_check1 p').html('<b>1</b> �������� ������');
		$('.step_check2 p').html('<b>2</b> HDMI-������');
		$('.step_check3 p').html('<b>3</b> ���� �������');
		$('.step_check4 p').html('<b>4</b> �����');
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
			<h3>�������� ������</h3>
			<form action="https://sferaweba.ru/addtricolor.html" method="post">
				<div class="inp_p">
					<p>���� ���:</p>
					<input type="text" name="name" placeholder="���������">
				</div>
				<div class="inp_p">
					<p>��� �������:</p>
					<input type="text" name="phone" placeholder="7-937-945-32-54">
				</div>
				<input type="submit" name="send_p" value="���������">
			</form>
			<p>�������� ��� ���������� � �������� ��� �����</p>
			<div><img src="images/tricolor/popup/logo_p.png" alt=""></div>
		</div>
		<header>
			<div class="wrap">
				<div class="padd">
					<a href="#"><img src="images/tricolor/logo.png" alt=""></a>
					<div id="header_right">
						<p id="call">8-800-543-54-67</p>
						<a class="open_pop" href="#">�������� ������</a>
					</div>
					<ul>
						<li><a data-id="#goods" href="#">������������</a></li>
						<li><a data-id="#steps" href="#">��������������</a></li>
						<li><a data-id="#tarif" href="#">�����������</a></li>
						<li><a data-id="#cost" href="#">��������</a></li>
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
					<h1>�������� ����������� ��������<br> <span>DTS 54</span> ��� ��������� ��������� �»</h1>
					<p>�������� �� ���� ������</p>
					<a class="open_pop" href="#">����������</a>
					<div id="main_block_bottom">
						<p><i></i><i></i>����� 200<br>�������</p>
						<p><i></i><i></i>������<br>���������</p>
						<p><i></i><i></i>��������<br>12 �������</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="goods">
		<div class="wrap">
			<div class="padd">
				<h1 class="title">��� ������ ������ ������ ������������ � �������</h1>
				<p></p>
				<div id="table_goods">
					<div id="r1">
						<div>
							<span></span>
							<span></span>
							<p>�������� DTS 54</p>
							<img src="images/tricolor/goods/1.png" alt="">
							<i></i>
						</div>
					</div>
					<div id="r2">
						<div>
							<p>����������� ��<br>�������������</p>
							<div>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<img src="images/tricolor/goods/2.png" alt="">
						</div>
						<div>
							<p>�����<br><br></p>
							<div>
								<span></span>
								<span></span>
								<span></span>
							</div>
							<img src="images/tricolor/goods/3.png" alt="">
						</div>
						<div>
							<p>����������� �����<br>�� 12 �������</p>
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
							<p>���������</p>
							<img src="images/tricolor/goods/5.png" alt="">
						</div>
						<div>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div>
							<p>������ HDMI</p>
							<img src="images/tricolor/goods/6.png" alt="">
						</div>
						<div>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div>
							<p>���� �������</p>
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
				<h1 class="title">����������� � 4 ����</h1>
				<p></p>
				<div id="gift">
					<p>HDMI ������ �<br>���� ������� ���� <span>� ���������</span></p>
				</div>
				<div class="step_check step_check1">
					<span></span>
					<span></span>
					<span></span>
					<i></i>
					<p><b>1</b> ����������� �������� ������</p>
				</div>
				<div class="step_check step_check2">
					<span></span>
					<span></span>
					<span></span>
					<i></i>
					<p><b>2</b> ����������� HDMI ������</p>
				</div>
				<div class="step_check step_check3">
					<span></span>
					<span></span>
					<span></span>
					<i></i>
					<p><b>3</b> ����������� ���� �������</p>
				</div>
				<div class="step_check step_check4">
					<span></span>
					<span></span>
					<span></span>
					<i></i>
					<p><b>4</b> ���������� �����</p>
				</div>
				<img src="images/tricolor/steps_bg.png" alt="">
				<div id="steps_btn"><a class="open_pop" href="#">�������� ���������� ������������</a></div>
			</div>
		</div>
	</div>
	<div id="tarif">
		<div class="wrap">
			<div class="padd">
				<div id="tarif_left">
					<h1>����� <span>������</span></h1>
					<div id="wrap_canal_und"></div>
					<div id="wrap_canal">
						<img src="images/tricolor/tarif_img.png" alt="">
						<p>����������</p>
						<p>���������������<br>Full HD(�� 1920x1080i)</p>
					</div>
				</div>
				<div id="tarif_right">
					<p>����� � �������<br>������� ��������</p>
					<p>������������<br><br></p>
					<p>�������������� �����<br>����-� ������������</p>
					<p>����������� ��������<br>���������� �������</p>
					<p>������������ ��������</p>
					<p>��������� � ����������� � ��������� ��������</p>
				</div>
			</div>
		</div>
	</div>
	<div id="act">
		<div class="wrap">
			<div class="padd">
				<div id="act_left">
					<h2>��� ������ ������ �� 31.12.2019 ���������� ������������ �� ���������</h2>
					<p>�����������</p>
					<p>�������� �������� � ���</p>
					<p>���������� �������� �� ��</p>
					<div>
						<p>��� ��������� ������ ���������� ���</p>
					</div>
				</div>
				<div id="act_right">
					<div>
					<p>�������� ������ ������ ���������</p>
					<form id="add_z" action="" method="post">
						<input class="m_btn_text" type="text" name="phone_act" placeholder="��� �������">
						<input class="m_btn" type="submit" value="���������" name="submit_act">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="cost">
		<div class="wrap">
			<div class="padd">
				<h1 class="title">��������� � ��������</h1>
				<p></p>
				<div id="wrap_tabs">
					<div id="tabs">
						<a data-id="#cost_tab" class="active" href="#">���������</a>
						<a data-id="#del_tab" href="#">��������</a>
						<a data-id="#pay_tab" href="#">������</a>
					</div>
				</div>
				<div class="wrap_cost" id="cost_tab">
					<div id="dts54">
						<div class="cost_head">
							<p>��������</p>
							<p>DTS 54</p>
						</div>
						<div class="price">
							<span>2500</span>
							<span>1990 ���.</span>
						</div>
						<div class="cost_check">
							<p>������ ��������<i></i></p>
							<p>���������� ���������</p>
							<p>����� ������<i></i></p>
							<p>����������� �����</p>
							<p>���������� ������������</p>
						</div>
						<div class="cost_btn">
							<a class="open_pop" href="#">�������� ������</a>
						</div>
					</div>
					<div id="dts54plus">
						<div class="cost_head">
							<p>��������</p>
							<p>DTS 54 + �������</p>
						</div>
						<div class="price">
							<span>4000</span>
							<span>3000 ���.</span>
						</div>
						<div class="cost_check">
							<p>������ ��������<i></i></p>
							<p>���������� ���������</p>
							<p>����� ������<i></i></p>
							<p>����������� �����</p>
							<p>���������� ������������</p>
							<p>������� �������� ��</p>
							<p>�������� ���������</p>
							<p>���������</p>
						</div>
						<div class="cost_btn">
							<a class="open_pop" href="#">�������� ������</a>
						</div>
					</div>
					<span></span>
					<span></span>
				</div>
				<div class="wrap_cost_1 hide" id="del_tab">
					<div class="wrap_z">
					<div class="cost_head_1">
						<p>��������</p>
					</div>
					<div class="w_c_cont">
						<p>�������� �������������� �� ���� ������</p>
						<div class="red_checks">
							<p>����� ������</p>
							<p>Boxberry</p>
							<p>������� �����</p>
							<p>������-������</p>
							<p>���</p>
							<p>Delko</p>
						</div>
						<p>���� �������� �� 5 �� 12 ����</p>
					</div>
					<p>�������� �� ����������� �������� � ����� ������ �������������� <span>���������</span></p>
					</div>
					<span class="left_blue"></span>
					<span class="right_red"></span>
				</div>
				<div class="wrap_cost_1 hide" id="pay_tab">
					<div class="wrap_z">
						<div class="cost_head_1">
							<p>������</p>
						</div>
						<div class="w_c_cont_1">
							<p>�� �������� ��������� ��������� �� ���� ���������� �����</p>
							<p>�� ����������� ������ ��������� ������������</p>
							<p>��������� �������� �� ����������� ������������ �������� ����� ���������</p>
						</div>
						<div class="btm_card">
							<p>Visa/ MasterCard</p>
							<p>��������� ������</p>
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
				<h1 class="title">�������� ������� ������ � FULL HD ��������<br>����� �� 1990 ���.</h1>
				<p></p>
				<form id="add_z_1" action="" method="post">
					<input class="m_btn_text" type="text" name="phone_footer" placeholder="��� �������">
					<input class="m_btn" type="submit" name="submit_footer" value="��������">
				</form>
			</div>
		</div>
		<div id="bottom_f">
			<div class="wrap">
				<div class="padd">
					<img src="images/tricolor/logo.png" alt="">
					<div id="footer_time">
						<h3>������ ������:</h3>
						<p></p>
						<p>��-��.: 9:00-18:00</p>
						<p>��.: 9:00-17:00</p>
					</div>
					<div id="footer_contact">
						<h3>��������:</h3>
						<p></p>
						<p>8-800-545-45-45</p>
						<p>ttv@mail.ru</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</main>