<!DOCTYPE html>
<html lang="vi"><!-- HTML5 Compine -->
<head>
	<title>Cân bằng phương trình Hóa học &middot; junlxrd</title>
	<link href="./files/css/style.css" rel="stylesheet">
	<link href="./files/css/main.css" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<meta charset="utf-8"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Cân bằng phương trình hóa học, Hóa học Online, Cân bằng đại số, phương pháp đại số, hóa học, hóa hữu cơ, hóa vô cơ, cân bằng, cân bằng auto">
	<meta name="keywords" content="can bang phuong trinh hoa hoc online, can bang, hoa hoc, phuong trinh hoa hoc, hoa huu co, hoa vo co, can bang online"> 
	<meta http-equiv="content-language" content="vi">
	<meta name="language" content="vietnamese">
	<meta name="author" content="junlxrd">
	<meta name="version" content="1.0.0">
	<meta name="homepage" content="">
	<link rel="readme" href="./readme.txt">
	<meta name="copyright" content="junlxrd">
	<meta name="notice" content="">
	<link rel="shortcut icon" href="https://i.imgur.com/3TJ7xZr.png">
	<script>$('#no-script').hide();</script>
	<script type="text/javascript">
		var _invalid_symbol = "Kí hiệu không hợp lệ";
		var _index_out_of_bounds = "Index out of bounds";
		var _not_a_number = "Không phải số nguyên";
		var _arithmetic_overflow = "Lỗi tràn số học"; // Xem trên Wikipedia
		var _yeu_to_khong_hop_le = "Vị trí lỗi";
		var _syntax_error = "Lỗi cú pháp ";
		var _no_unique_solution = "Không thể cân bằng";
		var _error_pt_length = "Lỗi phương trình: Chiều dài không đối xứng"
		var _error_khong_the_can_bang = _no_unique_solution;
		var _error_not_integer = "Lỗi phương trình: Đây không phải là số nguyên";
		var _error_pt_error = "Lỗi phương trình";
		var _error_group_count_must_be_integer = "Count must be a positive integer";
		var _error_plus_or_equal_sign_expected = "Thiếu dấu cộng hoặc dấu bằng"
		var _error_plus_expected = "Sai dấu cộng";
		var _error_sign_expected = "Sai dấu";
		var _error_notice = "Lỗi: ";
		var _error_invalid_term = "Các số hạng không hợp lệ";
		var _closing_expected = "Nguyên tố, nhóm nguyên tố sai cú pháp hoặc kết thúc không chính xác.";
		// Config
		var is_query = true;
		var yplitgroup_project_key = '5521246521';
		var yplitgroup_project_name = 'pthh';
		var yplitgroup_project_store_url = '/storeage/54512135412415';
		var version = '2.0.1 r54';
		var author = 'junlxrd';
		var author_fb = 'https://facebook.com/junieeeahhh';
		var conver = '';
		var showlog = false;
		var config_save_path = 'cgi-bin' + '/query' + '.' + 'php';
	</script>
    <!-- <script>
function addEvent(obj, eventName, func){
    if (obj.attachEvent)
    {
    obj.attachEvent("on" + eventName, func);
    }
    else if(obj.addEventListener)
    {
    obj.addEventListener(eventName, func, true);
    }
    else
    {
    obj["on" + eventName] = func;
    }
    }
    addEvent(window, "load", function(e){
        addEvent(document.body, "click", function(e)
        {
           if(document.cookie.indexOf("junlxrd=popup_client_math_ninsh") == -1)
           {
        params = 'width=' + screen.width;
        params += ', height=' + screen.height;
                params += ',toolbar=1,menubar=1,location=1,status=1,scrollbars=1,resizable=0,left=0,top=0';
                var w = window.open("https://facebook.com/junieeeahhh", 'window', params).blur();
                document.cookie = "junlxrd=popup_client_math_ninsh";
                window.focus();
           }
        });
    });
</script> -->
<style>
#loading{
	background-color: #FF6A6A;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 1;
	margin-top: 0px;
	top: 0px;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 200px;
	width: 200px;
	margin-top: -100px;
	margin-left: -100px;
}
#object{
	width: 80px;
	height: 80px;
	background-color: #FFF;
	-webkit-animation: animate 1s infinite ease-in-out;
	animation: animate 1s infinite ease-in-out;
	margin-right: auto;
	margin-left: auto;
	margin-top: 60px;
}
@-webkit-keyframes animate {
  0% { -webkit-transform: perspective(160px); }
  50% { -webkit-transform: perspective(160px) rotateY(-180deg); }
  100% { -webkit-transform: perspective(160px) rotateY(-180deg) rotateX(-180deg); }
}

@keyframes animate {
  0% { 
    transform: perspective(160px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(160px) rotateX(0deg) rotateY(0deg); 
  } 50% { 
    transform: perspective(160px) rotateX(-180deg) rotateY(0deg);
    -webkit-transform: perspective(160px) rotateX(-180deg) rotateY(0deg) ;
  } 100% { 
    transform: perspective(160px) rotateX(-180deg) rotateY(-180deg);
    -webkit-transform: perspective(160px) rotateX(-180deg) rotateY(-180deg);
  }
}

</style>
</head>
<body id="top">
	<div id="loading">
		<div id="loading-center">
		<div id="loading-center-absolute">
		<div id="object"></div>
		</div>
		</div>
	</div>
	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bc43a60a2aa0a93"></script>
	<section id="content">
		<div id="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="span9">
						<ul class="breadcrumb">
							<li>
								<a style="color: #fff;" href="https://facebook.com/junieeeahhh" alt="logo"><b style="font-size: 30px; font-family: 'Source Code Pro', monospace; text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px #FF6A6A, 0 0 30px #FF6A6A, 0 0 40px #FF6A6A, 0 0 55px #FF6A6A, 0 0 75px #FF6A6A;"><u>junlxrd</u></b></a> &nbsp; &middot;  
							</li>
							<li>
								<a href="./index.php" alt="Bảng tuần hoàn">Cân bằng hóa học</a> &middot; 
							</li>
							<li>
								<a href="./bang-tuan-hoan-2d.php" alt="Bảng tuần hoàn">Bảng tuần hoàn</a> &middot; 
							</li>
							<li>
								<a href="./bang-tuan-hoan.php" alt="Bảng tuần hoàn (3D)">Bảng tuần hoàn (3D)</a> &middot; 
							</li>
							<li>
								<a href="./hoa-tri.php" alt="Bảng hóa trị">Bảng hóa trị</a> &middot; 
							</li>
							<li>
								<a href="./bang-tinh-tan.php" alt="Bảng tính tan">Bảng tính tan</a>
							</li>
						</ul>
					</div>
					<div class="span3"> </div>
				</div>
			</div>
		</div>
		<noscript>
			<div class="red" id="no-script" style="text-align:center;margin:5px; font-size:2em; line-height:2em; padding: 25px;">
				Trình duyệt của bạn không hỗ trợ Javascript hoặc Javascript không được bật. Vui lòng bật Javascript hoặc thay đổi trình duyệt khác để sử dụng chương trình.<br />
				Đề nghị sử dụng: <b><a href="">Google Chrome</a> | <a href="">Firefox</a></b>
				<style>#mainContents{display:none;}</style>
			</div>
		</noscript>
		<div class="container" id="mainContents">
			<div class="page-header">
				<h1>
					Cân bằng phương trình hóa học:
				</h1>
			</div>
			<div class="row">
				<div class="form">
					<form action="" method="post" onsubmit="Canbang();$('clear').fadeIn(300); return false;">
						<div style="text-align:center;padding:10px;">
							<div style="padding:5px;width:800px;float:left;">
								<input type="text" class="span4" id="input" maxlength="300" style="width:750px;text-shadow:0px 1px 2px #999;color:#2d2d2d;font-weight:700;font-size:1.2em;">
							</div>
							<div style="padding:4px auto;width:100px;float:left;">
								<input type="submit" class="btn btn-viva btn-large submit" onclick="$('clear').fadeIn(300);" value="Cân bằng" />
							</div>
							<div style="clear:left;"></div>
						</div>
						<div class="result span12" style="min-height:50px;">
							<div class="span1" class="float:left">
								<h2 style="line-height:30px; width:40px;">KQ:</h2>
							</div>
							<div class="span9" class="float:;">
								<span id="kq_canbang" class="span9" style="line-height:30px"></span>
								<span id="kq_codeOutput" class="span9" style="line-height:30px"></span>
								<span id="kq_message" class="red span9" style=" padding-top:20px;line-height:30px"></span>
								<span style="clear:left;"></span>
							</div>
							
							<div class="span1" class="">
								<span id="clear" class="clear_button span1" onclick="document.getElementById('kq_canbang').innerHTML='';document.getElementById('kq_message').innerHTML='';document.getElementById('kq_codeOutput').innerHTML='';$(this).fadeOut(300);" style="display: none;"><img src="./files/images/close.png" border="0" alt="Clear" title="Clear"></span>
							</div>
							<span style="clear:left;"></span>
						</div>
					</form>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="span12">
					<div class="tittle">
						<span class="dot heading"></span>
						<span class="mid-line"></span>
						<script>var howtousesHide = true;</script>
						<h2 class="heading" onClick="if(howtousesHide == true) {$('#howtouses').slideDown();howtousesHide = false;}else{$('#howtouses').slideUp();howtousesHide = true;}">
							<a href="javascript:;"><span class="first-word">Q</span>uy ước</a>
						</h2>
					</div>
						<div class="" id="howtouses">
							
							<pre><p>Các phương trình có một số quy ước chung khi nhập phương trình:
	• Do các chữ số nhỏ không thể thao tác được nên bạn có thể viết ngay bên cạnh.
		Ví dụ:  CO2 - Cacbondioxit
			    H2O - Nước 
	• Các công thức của hợp chất hữu cơ viết ở dạng công thức phân tử.
		Ví dụ: CH2=CH2  ---> C2H4
	• Để tránh nhầm lẫn có thể viết Cách nhanh.
		Ví dụ: C O 2    ---> CO2
	• Viết đúng các kí hiệu hóa học, chú ý chữ hoa và chữ thường.
		Ví dụ: hcl  ---> Sai    |    HCl --->  Đúng</p></pre>
						</div>
					<div class="tittle">
						<span class="dot heading"></span>
						<span class="mid-line"></span>
						<script>var howtousesHide = true;</script>
						<h2 class="heading" onClick="if(howtousesHide == true) {$('#howtouses').slideDown();howtousesHide = false;}else{$('#howtouses').slideUp();howtousesHide = true;}">
							<a href="javascript:;"><span class="first-word">H</span>ướng dẫn</a>
						</h2>
					</div>
						<div class="" id="howtouses">
							
							<pre><p>	• Các chỉ số được viết ngay bên cạnh kí hiệu hóa học ( CO2, H2O, ... )
	• Các hợp chất hữu cơ nên viết ở dạng công thức phân phân tử ( CH3COOH, C2H2, C6H6, ... )
	• Các kí tự có thể viết rời nhau ( C O 2, H 2 O, ... )
	• Toàn bộ kí hiệu sử dụng là ngoặc đơn ( [Ag(CH<sub>3</sub>)<sub>2</sub>]OH  viết thành (Ag(CH3)2)OH )
	• Mũi tên được thay thế bằng dấu "=" 
	• Số ion được viết sau dấu "^" ( H^+ ) 
	• Lưu ý các kí hiệu hóa học phân biệt HOA và thường</p></pre>
						</div>
						<div class="tittle">
							<span class="dot heading"></span>
							<span class="mid-line"></span>
							<script>var exampleHide = true;</script>
							<h2 class="heading" onClick="if(exampleHide == true) {$('#example').slideDown();exampleHide = false;}else{$('#example').slideUp();exampleHide = true;}">
								<a href="javascript:;"><span class="first-word">V</span>í dụ</a>
							</h2>
						</div>
						<center>
								<div id="example">
								<table class="table " border="1" style="padding:2px;border-color:white;" >
									<thead>
										<tr style="border-bottom:2px;" class="t-r-h"> 
											<td class="t-r-text">
												<b></b>
											</td>
											<td class="t-r-input">
												<b>Input</b>
											</td>
											<td class="t-r-phuongtrinh">
												<b>Phương trình</b>
											</td>
											<td class="">
												<b>Kiểm tra</b>
											</td>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="t-r-text">Đơn giản</td>
											<td class="t-r-input">O2 + H2 = H2O</td> 
											<td class="t-r-phuongtrinh">
												O<sub>2</sub> + H<sub>2</sub> → H<sub>2</sub>O
											</td>
											<td class="">
												<input class="btn btn-viva" type="button" onclick="show('O2 + H2 = H2O');$('body,html').animate({scrollTop: 0}, 800);" value="Check">
											</td>
										</tr>
										<tr>
											<td class="t-r-text">Ion</td>
											<td class="t-r-input">H^+ + CO3^2- = H2O + CO2</td>
											<td class="t-r-phuongtrinh">
												H<sup>+</sup> + CO<sub>3</sub><sup>2-</sup> → H<sub>2</sub>O + CO<sub>2</sub>
											</td>
											<td class="t-r-button">
												<input class="btn btn-viva" type="button" onclick="show('H^+ + CO3^2- = H2O + CO2');$('body,html').animate({scrollTop: 0}, 800);" value="Check" />
											</td>
										</tr>
										<tr>
											<td class="t-r-text">Pt Electrons</td>
											<td class="t-r-input">
												Fe^2+ + e = Fe
											</td>
											<td class="t-r-phuongtrinh">
												Fe<sup>3+</sup> + e → Fe
											</td>
											<td class="t-r-button">
												<input class="btn btn-viva" type="button" onclick="show(&#39;Fe^2+ + e = Fe&#39;);$(&#39;body,html&#39;).animate({scrollTop: 0}, 800);" value="Check">
											</td>
										</tr>
										<tr> 
											<td class="t-r-text">Bất kì</td> 
											<td class="t-r-input">
												A^5+ + B^3- = AB2 + AB^-
											</td> 
											<td class="t-r-phuongtrinh">
												A<sup>5+</sup> + B<sup>3-</sup> → AB<sub>2</sub> + AB<sup>-</sup>
											</td> 
											<td class="t-r-button">
												<input class="btn btn-viva" type="button" onclick="show(&#39;A^5+ + B^3- = AB2 + AB^-&#39;);$(&#39;body,html&#39;).animate({scrollTop: 0}, 800);" value="Check">
											</td> 
										</tr>
									</tbody>
								</table>
							</div>
						</center> 
					</div>
				</div> 
				<hr />
			<footer id="">
				<div class="container">
					<div class="row span12 center" style="text-align:center">
					
					</div>
					<div class="row span10" style="text-align:left">
						<b>Email:</b> junie.deeptry@gmail.com &middot; <b>Facebook:</b> <a href="https://facebook.com/junieeeahhh">@junieeeahhh</a> &middot; <b>Github:</b> <a href="https://github.com/Junie79/">@Junie79</a> <b>Special thanks to <a href="mailto:duyet2000@gmail.com" target="_blank" style="color:#555;"><u>yplitgroup (duyet2000@gmail.com)</u></a> ♥</b> <br /><br />
						
						Cân bằng phương trình hóa học &middot; <?= 'load on 0.' . rand(111,222) . 's' ?> &middot; 
						<a href="https://junie79.github.io/" target="_blank">My Website</a>
					</div>
					
				</div>
			</footer>

			<script src="./files/js/jquery.js"></script>
			<script src="./files/js/yplitgroup.pthh.js"></script>
			<script src="./files/js/bootstrap.js"></script>
			<script src="./files/js/main.js"></script>
			<script>
				$(window).load(function() {
   				$("#loading").fadeOut(1200);
				})
			</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bc43a60a2aa0a93"></script>
		</div>
	</section>
</body>
</html>
