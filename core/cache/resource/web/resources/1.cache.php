<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Корень',
    'longtitle' => '',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 2,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1516922952,
    'editedby' => 1,
    'editedon' => 1522583670,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!doctype html>
<html lang="en">
<head>
    <title>iCompliance - Корень</title>
    <base href="[[!++site_url]]" />
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/app/dest/css/index.css" />
	<link rel="icon" type="image/svg+xml" href="assets/app/dest/favicon.ico"/>

</head>
<body>
    <div id="app" class="d-flex flex-column flex-wrap">
        <header class="container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">
			    <div class="burger">
	<img src="assets/app/dest/images/burger_menu.svg" alt="" />
</div>

[[!Wayfinder? 
    &startId=`1` 
    &outerTpl=`Menu_outerTpl` 
    &rowTpl=`Menu_rowTpl` 
    &innerTpl=`Menu_innerTpl` 
    &innerRowTpl=`Menu_innerRowTpl` 
    
    &hereClass=`current_page_item` 
    &firstClass=`` 
    &lastClass =`` 
]]
			</div>
			<div class="col flex header_items_logo">
				<div class="logo">
					<img src="assets/app/dest/images/logo_1.svg" alt=""/>
				</div> 
			</div> 
			<div class="col flex d-flex flex-row justify-content-end header_items_search">
				<div class="search">
                    <img src="assets/app/dest/images/search.svg" alt=""/>
                </div>
            </div>
			<div class="flex d-flex flex-row justify-content-end header_items_local">
				<div class="local"> Eng</div>
			</div>
		</div>
	</div>
</header>
        <div class="slider container-fluid">
	<div id="carouselExampleIndicators" data-ride="carousel" class="carousel slide">
		<div class="carousel-inner">
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item active">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>

			<div class="container tabs">
				<ol class="carousel-indicators d-flex flex-row justify-content-start col-12">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
			</div>
		</div>
	</div>
        <div class="container-fluid">
	<div class="container">
		<div class="content">
			<div class="col-12 d-flex justify-content-center">
				<h1>Услуги</h1>
			</div>
			<div class="col-12">
				<div class="cards d-flex flex-row">
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/pazzle.svg" alt="" />
						</div>
						<div class="title">Комплеанс</div>
						<div class="description">Защита от недобросовестных участников торгов</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Fas.svg" alt="" />
						</div>
						<div class="title">Антимонопольная практика</div>
						<div class="description">Представительство в ФАС России, государственных, судебных и правоохранительных органах</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Protect.svg" alt="" />
						</div>
						<div class="title">Защита по картелям</div>
						<div class="description">Защита по делам о картелях и другим антиконкурентным соглашениям</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Law_Order.svg" alt="" />
						</div>
						<div class="title">Корпоративный консалтинг</div>
						<div class="description">Консультирование по тарифному регулированию</div>
						<div class="button">Узнать больше</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="content d-flex flex-column col-xl-7 col-lg-10">
			<div class="image">
				<img src="assets/app/dest/images/pazzle.svg" alt="" />
			</div>
			<h1>Комплеанс</h1>
			<div class="slogan">Защита от недобросовестных участников торгов</div>
			<div class="text">
				<p>Если говорить просто, то любой «комплаенс» представляет собой соответствие каким-либо внутренним или внешним требованиям
					или нормам. Это явление приходит к нам из прогрессивных западных стран и в ближайшем будущем комплаенс-системы будут
					для нас весьма обыденными и привычными. Под соответствием подразумевается часть системы управления/контроля в организации,
					связанная с рисками несоответствия, несоблюдения требований законодательства, нормативных документов, правил и стандартов
					надзорных органов, отраслевых ассоциаций и саморегулируемых организаций, кодексов поведения и т.д. Такие риски несоответствия
					в конечном итоге могут проявляться в форме применения юридических санкций или санкций регулирующих органов, финансовых
					или репутационных потерь как результат несоответствия законам, общепринятым правилам и стандартам.</p>
				<p>И пусть риски связанные с возможными нарушениями санитарно-эпидемиологических или экологических норм не кажутся столь
					серьезными, то риски нарушения антимонопольного законодательства, к слову единственного не имеющего верхней планки величины
					штрафа, – это уже повод задуматься.</p>
			</div>
			<div class="card quote">
				<div class="header">Экспертное мнение</div>
				<p>Наши Эксперты разработают и внедрят в Вашей организации проверенный опытом, научно-обоснованный комплаенс, с учетом актуальной
					правоприменительной практики контрольно-надзорных и судебных органов. Опыт и знания наших Экспертов – в Вашем распоряжении.</p>
				<div
				 class="footer">
					<div class="name">Константин Константинопольский</div>
					<div class="degree">Доктор наук</div>
			</div>
		</div>
		<div class="text">
			<p>В сфере юридического консалтинга, квалификация наших Экспертов позволяет организовать полное юридическое сопровождение
				бизнеса, включая ведение договорной, претензионно-исковой, судебной работы. Однако, наиболее важным и актуальным для
				Партнеров и Клиентов мы считаем:</p>
		</div>
		<ul class="list">
			<li>защиту бизнеса от недружественного поглощения, недобросовестной конкуренции и антиконкурентных соглашений (включая картели);</li>
			<li>представительство в суде, включая обжалование решений ФАС; </li>
			<li>защиту по экономическим и антикоррупционным преступлениям владельцев бизнеса и руководителей организаций; </li>
			<li>представительство интересов в ФАС, включая рассмотрение жалоб, связанных с участием в торгах/организацией торгов; </li>
			<li>квалифицированную защиту по делам о картелях и других антиконкурентных соглашениях;</li>
		</ul>
		<div class="callus_button">
			<img src="assets/app/dest/images/button_call.svg" alt="" />
			<span>Связаться с нами</span>
		</div>
	</div>
</div>
	<div class="container">
	<div class="content">
		<div class="col-12 d-flex justify-content-center">
			<h1>Эксперты</h1>
		</div>
		<div class="col-12">
			<div class="cards d-flex flex-row experts">
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/egorova.png" alt="" />
					</div>
					<div class="title">Егорова Мария Александровна</div>
					<div class="description">Доктор юридических наук, доцент</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/filimonov.png" alt="" />
					</div>
					<div class="title">Филимонов Андрей Александрович</div>
					<div class="description">Кандидат экономических наук</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/chernyavskiy.png" alt="" />
					</div>
					<div class="title">Чернявский Александр Геннадьевич</div>
					<div class="description">Доктор юридических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/bandurin.png" alt="" />
					</div>
					<div class="title">Бандурин Александр Владимирович</div>
					<div class="description">Доктор экономических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <div class="container">
	<div class="content news col-xl-12 col-md-10">
		<hr/>
		<div class="d-flex flex-row justify-content-between flex-wrap">
			<div class="header">Новости и публикации</div>
			<a class="news_all">Все новости</a>
		</div>
		<ul class="news_list d-flex flex-wrap flex-row">
			<li class="item">
				<div class="date">11 Января 2018</div>
				<div class="title">Антимонопольный комплаенс в Российских реалиях (Мигитко О.)</div>
			</li>
			<li class="item">
				<div class="date">4 Февраля 2018</div>
				<div class="title">Потребность в эффективных комплаенс программах</div>
			</li>
			<li class="item">
				<div class="date">2 Марта 2018</div>
				<div class="title">Президент РФ подписал указ «Об основных оаправлениях госполитики по развитию конкуренции»</div>
			</li>
			<li class="item">
				<div class="date">23 Марта 2018</div>
				<div class="title">Антимонопольный комплаенс в США и Европе. По какому пути пойдет Россия? (Глубовкая Ю.) </div>
			</li>
		</ul>
	</div>
</div>
</div>
        <footer class="container-fluid d-flex flex-row">
	<div class="container d-flex justify-content-between flex-wrap">
		<div class="logo">
			<img src="assets/app/dest/images/logo_2.svg" alt="" />
		</div>
		<div class="slogan">Общество с ограниченной ответственностью «Институт комплаенса» </div>
		<div class="social d-flex">
			<img src="assets/app/dest/images/link_logo.svg" alt="" />
		</div>
		<div class="info d-flex flex-column">
			<div>115035, г. Москва, Кадашевская набережная, дом 26 </div>
			<div>Телефон: 8 (495) 664-39-74</div>
			<div>Эл. почта:
				<a href="mailto:info@icompliance.ru">info@icompliance.ru</a>
			</div>
		</div>
		<div class="madeby d-flex align-items-center">
			<span>Сделано в</span>
			<img src="assets/app/dest/images/toposlogo.svg" alt="" />
		</div>
	</div>
</footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$Menu]]' => '<div class="burger">
	<img src="assets/app/dest/images/burger_menu.svg" alt="" />
</div>

[[!Wayfinder? 
    &startId=`1` 
    &outerTpl=`Menu_outerTpl` 
    &rowTpl=`Menu_rowTpl` 
    &innerTpl=`Menu_innerTpl` 
    &innerRowTpl=`Menu_innerRowTpl` 
    
    &hereClass=`current_page_item` 
    &firstClass=`` 
    &lastClass =`` 
]]',
    '[[$Header]]' => '<header class="container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">
			    <div class="burger">
	<img src="assets/app/dest/images/burger_menu.svg" alt="" />
</div>

[[!Wayfinder? 
    &startId=`1` 
    &outerTpl=`Menu_outerTpl` 
    &rowTpl=`Menu_rowTpl` 
    &innerTpl=`Menu_innerTpl` 
    &innerRowTpl=`Menu_innerRowTpl` 
    
    &hereClass=`current_page_item` 
    &firstClass=`` 
    &lastClass =`` 
]]
			</div>
			<div class="col flex header_items_logo">
				<div class="logo">
					<img src="assets/app/dest/images/logo_1.svg" alt=""/>
				</div> 
			</div> 
			<div class="col flex d-flex flex-row justify-content-end header_items_search">
				<div class="search">
                    <img src="assets/app/dest/images/search.svg" alt=""/>
                </div>
            </div>
			<div class="flex d-flex flex-row justify-content-end header_items_local">
				<div class="local"> Eng</div>
			</div>
		</div>
	</div>
</header>',
    '[[$Slider]]' => '<div class="slider container-fluid">
	<div id="carouselExampleIndicators" data-ride="carousel" class="carousel slide">
		<div class="carousel-inner">
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item active">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>

			<div class="container tabs">
				<ol class="carousel-indicators d-flex flex-row justify-content-start col-12">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
			</div>
		</div>
	</div>',
    '[[$Services]]' => '<div class="container">
		<div class="content">
			<div class="col-12 d-flex justify-content-center">
				<h1>Услуги</h1>
			</div>
			<div class="col-12">
				<div class="cards d-flex flex-row">
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/pazzle.svg" alt="" />
						</div>
						<div class="title">Комплеанс</div>
						<div class="description">Защита от недобросовестных участников торгов</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Fas.svg" alt="" />
						</div>
						<div class="title">Антимонопольная практика</div>
						<div class="description">Представительство в ФАС России, государственных, судебных и правоохранительных органах</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Protect.svg" alt="" />
						</div>
						<div class="title">Защита по картелям</div>
						<div class="description">Защита по делам о картелях и другим антиконкурентным соглашениям</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Law_Order.svg" alt="" />
						</div>
						<div class="title">Корпоративный консалтинг</div>
						<div class="description">Консультирование по тарифному регулированию</div>
						<div class="button">Узнать больше</div>
					</div>
				</div>
			</div>
		</div>
	</div>',
    '[[$Page]]' => '<div class="container">
		<div class="content d-flex flex-column col-xl-7 col-lg-10">
			<div class="image">
				<img src="assets/app/dest/images/pazzle.svg" alt="" />
			</div>
			<h1>Комплеанс</h1>
			<div class="slogan">Защита от недобросовестных участников торгов</div>
			<div class="text">
				<p>Если говорить просто, то любой «комплаенс» представляет собой соответствие каким-либо внутренним или внешним требованиям
					или нормам. Это явление приходит к нам из прогрессивных западных стран и в ближайшем будущем комплаенс-системы будут
					для нас весьма обыденными и привычными. Под соответствием подразумевается часть системы управления/контроля в организации,
					связанная с рисками несоответствия, несоблюдения требований законодательства, нормативных документов, правил и стандартов
					надзорных органов, отраслевых ассоциаций и саморегулируемых организаций, кодексов поведения и т.д. Такие риски несоответствия
					в конечном итоге могут проявляться в форме применения юридических санкций или санкций регулирующих органов, финансовых
					или репутационных потерь как результат несоответствия законам, общепринятым правилам и стандартам.</p>
				<p>И пусть риски связанные с возможными нарушениями санитарно-эпидемиологических или экологических норм не кажутся столь
					серьезными, то риски нарушения антимонопольного законодательства, к слову единственного не имеющего верхней планки величины
					штрафа, – это уже повод задуматься.</p>
			</div>
			<div class="card quote">
				<div class="header">Экспертное мнение</div>
				<p>Наши Эксперты разработают и внедрят в Вашей организации проверенный опытом, научно-обоснованный комплаенс, с учетом актуальной
					правоприменительной практики контрольно-надзорных и судебных органов. Опыт и знания наших Экспертов – в Вашем распоряжении.</p>
				<div
				 class="footer">
					<div class="name">Константин Константинопольский</div>
					<div class="degree">Доктор наук</div>
			</div>
		</div>
		<div class="text">
			<p>В сфере юридического консалтинга, квалификация наших Экспертов позволяет организовать полное юридическое сопровождение
				бизнеса, включая ведение договорной, претензионно-исковой, судебной работы. Однако, наиболее важным и актуальным для
				Партнеров и Клиентов мы считаем:</p>
		</div>
		<ul class="list">
			<li>защиту бизнеса от недружественного поглощения, недобросовестной конкуренции и антиконкурентных соглашений (включая картели);</li>
			<li>представительство в суде, включая обжалование решений ФАС; </li>
			<li>защиту по экономическим и антикоррупционным преступлениям владельцев бизнеса и руководителей организаций; </li>
			<li>представительство интересов в ФАС, включая рассмотрение жалоб, связанных с участием в торгах/организацией торгов; </li>
			<li>квалифицированную защиту по делам о картелях и других антиконкурентных соглашениях;</li>
		</ul>
		<div class="callus_button">
			<img src="assets/app/dest/images/button_call.svg" alt="" />
			<span>Связаться с нами</span>
		</div>
	</div>
</div>',
    '[[$Experts]]' => '<div class="container">
	<div class="content">
		<div class="col-12 d-flex justify-content-center">
			<h1>Эксперты</h1>
		</div>
		<div class="col-12">
			<div class="cards d-flex flex-row experts">
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/egorova.png" alt="" />
					</div>
					<div class="title">Егорова Мария Александровна</div>
					<div class="description">Доктор юридических наук, доцент</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/filimonov.png" alt="" />
					</div>
					<div class="title">Филимонов Андрей Александрович</div>
					<div class="description">Кандидат экономических наук</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/chernyavskiy.png" alt="" />
					</div>
					<div class="title">Чернявский Александр Геннадьевич</div>
					<div class="description">Доктор юридических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/bandurin.png" alt="" />
					</div>
					<div class="title">Бандурин Александр Владимирович</div>
					<div class="description">Доктор экономических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
			</div>
		</div>
	</div>
</div>',
    '[[$News]]' => '<div class="container">
	<div class="content news col-xl-12 col-md-10">
		<hr/>
		<div class="d-flex flex-row justify-content-between flex-wrap">
			<div class="header">Новости и публикации</div>
			<a class="news_all">Все новости</a>
		</div>
		<ul class="news_list d-flex flex-wrap flex-row">
			<li class="item">
				<div class="date">11 Января 2018</div>
				<div class="title">Антимонопольный комплаенс в Российских реалиях (Мигитко О.)</div>
			</li>
			<li class="item">
				<div class="date">4 Февраля 2018</div>
				<div class="title">Потребность в эффективных комплаенс программах</div>
			</li>
			<li class="item">
				<div class="date">2 Марта 2018</div>
				<div class="title">Президент РФ подписал указ «Об основных оаправлениях госполитики по развитию конкуренции»</div>
			</li>
			<li class="item">
				<div class="date">23 Марта 2018</div>
				<div class="title">Антимонопольный комплаенс в США и Европе. По какому пути пойдет Россия? (Глубовкая Ю.) </div>
			</li>
		</ul>
	</div>
</div>',
    '[[$Content]]' => '<div class="container-fluid">
	<div class="container">
		<div class="content">
			<div class="col-12 d-flex justify-content-center">
				<h1>Услуги</h1>
			</div>
			<div class="col-12">
				<div class="cards d-flex flex-row">
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/pazzle.svg" alt="" />
						</div>
						<div class="title">Комплеанс</div>
						<div class="description">Защита от недобросовестных участников торгов</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Fas.svg" alt="" />
						</div>
						<div class="title">Антимонопольная практика</div>
						<div class="description">Представительство в ФАС России, государственных, судебных и правоохранительных органах</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Protect.svg" alt="" />
						</div>
						<div class="title">Защита по картелям</div>
						<div class="description">Защита по делам о картелях и другим антиконкурентным соглашениям</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Law_Order.svg" alt="" />
						</div>
						<div class="title">Корпоративный консалтинг</div>
						<div class="description">Консультирование по тарифному регулированию</div>
						<div class="button">Узнать больше</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="content d-flex flex-column col-xl-7 col-lg-10">
			<div class="image">
				<img src="assets/app/dest/images/pazzle.svg" alt="" />
			</div>
			<h1>Комплеанс</h1>
			<div class="slogan">Защита от недобросовестных участников торгов</div>
			<div class="text">
				<p>Если говорить просто, то любой «комплаенс» представляет собой соответствие каким-либо внутренним или внешним требованиям
					или нормам. Это явление приходит к нам из прогрессивных западных стран и в ближайшем будущем комплаенс-системы будут
					для нас весьма обыденными и привычными. Под соответствием подразумевается часть системы управления/контроля в организации,
					связанная с рисками несоответствия, несоблюдения требований законодательства, нормативных документов, правил и стандартов
					надзорных органов, отраслевых ассоциаций и саморегулируемых организаций, кодексов поведения и т.д. Такие риски несоответствия
					в конечном итоге могут проявляться в форме применения юридических санкций или санкций регулирующих органов, финансовых
					или репутационных потерь как результат несоответствия законам, общепринятым правилам и стандартам.</p>
				<p>И пусть риски связанные с возможными нарушениями санитарно-эпидемиологических или экологических норм не кажутся столь
					серьезными, то риски нарушения антимонопольного законодательства, к слову единственного не имеющего верхней планки величины
					штрафа, – это уже повод задуматься.</p>
			</div>
			<div class="card quote">
				<div class="header">Экспертное мнение</div>
				<p>Наши Эксперты разработают и внедрят в Вашей организации проверенный опытом, научно-обоснованный комплаенс, с учетом актуальной
					правоприменительной практики контрольно-надзорных и судебных органов. Опыт и знания наших Экспертов – в Вашем распоряжении.</p>
				<div
				 class="footer">
					<div class="name">Константин Константинопольский</div>
					<div class="degree">Доктор наук</div>
			</div>
		</div>
		<div class="text">
			<p>В сфере юридического консалтинга, квалификация наших Экспертов позволяет организовать полное юридическое сопровождение
				бизнеса, включая ведение договорной, претензионно-исковой, судебной работы. Однако, наиболее важным и актуальным для
				Партнеров и Клиентов мы считаем:</p>
		</div>
		<ul class="list">
			<li>защиту бизнеса от недружественного поглощения, недобросовестной конкуренции и антиконкурентных соглашений (включая картели);</li>
			<li>представительство в суде, включая обжалование решений ФАС; </li>
			<li>защиту по экономическим и антикоррупционным преступлениям владельцев бизнеса и руководителей организаций; </li>
			<li>представительство интересов в ФАС, включая рассмотрение жалоб, связанных с участием в торгах/организацией торгов; </li>
			<li>квалифицированную защиту по делам о картелях и других антиконкурентных соглашениях;</li>
		</ul>
		<div class="callus_button">
			<img src="assets/app/dest/images/button_call.svg" alt="" />
			<span>Связаться с нами</span>
		</div>
	</div>
</div>
	<div class="container">
	<div class="content">
		<div class="col-12 d-flex justify-content-center">
			<h1>Эксперты</h1>
		</div>
		<div class="col-12">
			<div class="cards d-flex flex-row experts">
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/egorova.png" alt="" />
					</div>
					<div class="title">Егорова Мария Александровна</div>
					<div class="description">Доктор юридических наук, доцент</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/filimonov.png" alt="" />
					</div>
					<div class="title">Филимонов Андрей Александрович</div>
					<div class="description">Кандидат экономических наук</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/chernyavskiy.png" alt="" />
					</div>
					<div class="title">Чернявский Александр Геннадьевич</div>
					<div class="description">Доктор юридических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/bandurin.png" alt="" />
					</div>
					<div class="title">Бандурин Александр Владимирович</div>
					<div class="description">Доктор экономических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
			</div>
		</div>
	</div>
</div>
    <div class="container">
	<div class="content news col-xl-12 col-md-10">
		<hr/>
		<div class="d-flex flex-row justify-content-between flex-wrap">
			<div class="header">Новости и публикации</div>
			<a class="news_all">Все новости</a>
		</div>
		<ul class="news_list d-flex flex-wrap flex-row">
			<li class="item">
				<div class="date">11 Января 2018</div>
				<div class="title">Антимонопольный комплаенс в Российских реалиях (Мигитко О.)</div>
			</li>
			<li class="item">
				<div class="date">4 Февраля 2018</div>
				<div class="title">Потребность в эффективных комплаенс программах</div>
			</li>
			<li class="item">
				<div class="date">2 Марта 2018</div>
				<div class="title">Президент РФ подписал указ «Об основных оаправлениях госполитики по развитию конкуренции»</div>
			</li>
			<li class="item">
				<div class="date">23 Марта 2018</div>
				<div class="title">Антимонопольный комплаенс в США и Европе. По какому пути пойдет Россия? (Глубовкая Ю.) </div>
			</li>
		</ul>
	</div>
</div>
</div>',
    '[[$Footer]]' => '<footer class="container-fluid d-flex flex-row">
	<div class="container d-flex justify-content-between flex-wrap">
		<div class="logo">
			<img src="assets/app/dest/images/logo_2.svg" alt="" />
		</div>
		<div class="slogan">Общество с ограниченной ответственностью «Институт комплаенса» </div>
		<div class="social d-flex">
			<img src="assets/app/dest/images/link_logo.svg" alt="" />
		</div>
		<div class="info d-flex flex-column">
			<div>115035, г. Москва, Кадашевская набережная, дом 26 </div>
			<div>Телефон: 8 (495) 664-39-74</div>
			<div>Эл. почта:
				<a href="mailto:info@icompliance.ru">info@icompliance.ru</a>
			</div>
		</div>
		<div class="madeby d-flex align-items-center">
			<span>Сделано в</span>
			<img src="assets/app/dest/images/toposlogo.svg" alt="" />
		</div>
	</div>
</footer>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'Header' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<header class="container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">
			    [[$Menu]]
			</div>
			<div class="col flex header_items_logo">
				<div class="logo">
					<img src="assets/app/dest/images/logo_1.svg" alt=""/>
				</div> 
			</div> 
			<div class="col flex d-flex flex-row justify-content-end header_items_search">
				<div class="search">
                    <img src="assets/app/dest/images/search.svg" alt=""/>
                </div>
            </div>
			<div class="flex d-flex flex-row justify-content-end header_items_local">
				<div class="local"> Eng</div>
			</div>
		</div>
	</div>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header class="container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">
			    [[$Menu]]
			</div>
			<div class="col flex header_items_logo">
				<div class="logo">
					<img src="assets/app/dest/images/logo_1.svg" alt=""/>
				</div> 
			</div> 
			<div class="col flex d-flex flex-row justify-content-end header_items_search">
				<div class="search">
                    <img src="assets/app/dest/images/search.svg" alt=""/>
                </div>
            </div>
			<div class="flex d-flex flex-row justify-content-end header_items_local">
				<div class="local"> Eng</div>
			</div>
		</div>
	</div>
</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Menu' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Menu',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="burger">
	<img src="assets/app/dest/images/burger_menu.svg" alt="" />
</div>

[[!Wayfinder? 
    &startId=`1` 
    &outerTpl=`Menu_outerTpl` 
    &rowTpl=`Menu_rowTpl` 
    &innerTpl=`Menu_innerTpl` 
    &innerRowTpl=`Menu_innerRowTpl` 
    
    &hereClass=`current_page_item` 
    &firstClass=`` 
    &lastClass =`` 
]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="burger">
	<img src="assets/app/dest/images/burger_menu.svg" alt="" />
</div>

[[!Wayfinder? 
    &startId=`1` 
    &outerTpl=`Menu_outerTpl` 
    &rowTpl=`Menu_rowTpl` 
    &innerTpl=`Menu_innerTpl` 
    &innerRowTpl=`Menu_innerRowTpl` 
    
    &hereClass=`current_page_item` 
    &firstClass=`` 
    &lastClass =`` 
]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Slider' => 
      array (
        'fields' => 
        array (
          'id' => 11,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Slider',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="slider container-fluid">
	<div id="carouselExampleIndicators" data-ride="carousel" class="carousel slide">
		<div class="carousel-inner">
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item active">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>

			<div class="container tabs">
				<ol class="carousel-indicators d-flex flex-row justify-content-start col-12">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
			</div>
		</div>
	</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="slider container-fluid">
	<div id="carouselExampleIndicators" data-ride="carousel" class="carousel slide">
		<div class="carousel-inner">
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item active">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>
			<div style="background-image:url(assets/app/dest/images/slide_bg.png)" class="carousel-item">
				<div class="message container">
					<h1 class="col-12">Наши услуги</h1>
					<p class="col-10 col-sm-9 col-md-7 col-lg-5">Разработка антимонопольного комплаенса, представительство в ФАС России, защита по делам о картелях, консультирование
						по вопросам антимонопольного законодательства и т.д.</p>
				</div>
			</div>

			<div class="container tabs">
				<ol class="carousel-indicators d-flex flex-row justify-content-start col-12">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
			</div>
		</div>
	</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Content' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Content',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="container-fluid">
	[[$Services]]
	[[$Page]]
	[[$Experts]]
    [[$News]]
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="container-fluid">
	[[$Services]]
	[[$Page]]
	[[$Experts]]
    [[$News]]
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Services' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Services',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="container">
		<div class="content">
			<div class="col-12 d-flex justify-content-center">
				<h1>Услуги</h1>
			</div>
			<div class="col-12">
				<div class="cards d-flex flex-row">
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/pazzle.svg" alt="" />
						</div>
						<div class="title">Комплеанс</div>
						<div class="description">Защита от недобросовестных участников торгов</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Fas.svg" alt="" />
						</div>
						<div class="title">Антимонопольная практика</div>
						<div class="description">Представительство в ФАС России, государственных, судебных и правоохранительных органах</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Protect.svg" alt="" />
						</div>
						<div class="title">Защита по картелям</div>
						<div class="description">Защита по делам о картелях и другим антиконкурентным соглашениям</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Law_Order.svg" alt="" />
						</div>
						<div class="title">Корпоративный консалтинг</div>
						<div class="description">Консультирование по тарифному регулированию</div>
						<div class="button">Узнать больше</div>
					</div>
				</div>
			</div>
		</div>
	</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="container">
		<div class="content">
			<div class="col-12 d-flex justify-content-center">
				<h1>Услуги</h1>
			</div>
			<div class="col-12">
				<div class="cards d-flex flex-row">
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/pazzle.svg" alt="" />
						</div>
						<div class="title">Комплеанс</div>
						<div class="description">Защита от недобросовестных участников торгов</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Fas.svg" alt="" />
						</div>
						<div class="title">Антимонопольная практика</div>
						<div class="description">Представительство в ФАС России, государственных, судебных и правоохранительных органах</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Protect.svg" alt="" />
						</div>
						<div class="title">Защита по картелям</div>
						<div class="description">Защита по делам о картелях и другим антиконкурентным соглашениям</div>
						<div class="button">Узнать больше</div>
					</div>
					<div class="card">
						<div class="image">
							<img src="assets/app/dest/images/Law_Order.svg" alt="" />
						</div>
						<div class="title">Корпоративный консалтинг</div>
						<div class="description">Консультирование по тарифному регулированию</div>
						<div class="button">Узнать больше</div>
					</div>
				</div>
			</div>
		</div>
	</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Page' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Page',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="container">
		<div class="content d-flex flex-column col-xl-7 col-lg-10">
			<div class="image">
				<img src="assets/app/dest/images/pazzle.svg" alt="" />
			</div>
			<h1>Комплеанс</h1>
			<div class="slogan">Защита от недобросовестных участников торгов</div>
			<div class="text">
				<p>Если говорить просто, то любой «комплаенс» представляет собой соответствие каким-либо внутренним или внешним требованиям
					или нормам. Это явление приходит к нам из прогрессивных западных стран и в ближайшем будущем комплаенс-системы будут
					для нас весьма обыденными и привычными. Под соответствием подразумевается часть системы управления/контроля в организации,
					связанная с рисками несоответствия, несоблюдения требований законодательства, нормативных документов, правил и стандартов
					надзорных органов, отраслевых ассоциаций и саморегулируемых организаций, кодексов поведения и т.д. Такие риски несоответствия
					в конечном итоге могут проявляться в форме применения юридических санкций или санкций регулирующих органов, финансовых
					или репутационных потерь как результат несоответствия законам, общепринятым правилам и стандартам.</p>
				<p>И пусть риски связанные с возможными нарушениями санитарно-эпидемиологических или экологических норм не кажутся столь
					серьезными, то риски нарушения антимонопольного законодательства, к слову единственного не имеющего верхней планки величины
					штрафа, – это уже повод задуматься.</p>
			</div>
			<div class="card quote">
				<div class="header">Экспертное мнение</div>
				<p>Наши Эксперты разработают и внедрят в Вашей организации проверенный опытом, научно-обоснованный комплаенс, с учетом актуальной
					правоприменительной практики контрольно-надзорных и судебных органов. Опыт и знания наших Экспертов – в Вашем распоряжении.</p>
				<div
				 class="footer">
					<div class="name">Константин Константинопольский</div>
					<div class="degree">Доктор наук</div>
			</div>
		</div>
		<div class="text">
			<p>В сфере юридического консалтинга, квалификация наших Экспертов позволяет организовать полное юридическое сопровождение
				бизнеса, включая ведение договорной, претензионно-исковой, судебной работы. Однако, наиболее важным и актуальным для
				Партнеров и Клиентов мы считаем:</p>
		</div>
		<ul class="list">
			<li>защиту бизнеса от недружественного поглощения, недобросовестной конкуренции и антиконкурентных соглашений (включая картели);</li>
			<li>представительство в суде, включая обжалование решений ФАС; </li>
			<li>защиту по экономическим и антикоррупционным преступлениям владельцев бизнеса и руководителей организаций; </li>
			<li>представительство интересов в ФАС, включая рассмотрение жалоб, связанных с участием в торгах/организацией торгов; </li>
			<li>квалифицированную защиту по делам о картелях и других антиконкурентных соглашениях;</li>
		</ul>
		<div class="callus_button">
			<img src="assets/app/dest/images/button_call.svg" alt="" />
			<span>Связаться с нами</span>
		</div>
	</div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="container">
		<div class="content d-flex flex-column col-xl-7 col-lg-10">
			<div class="image">
				<img src="assets/app/dest/images/pazzle.svg" alt="" />
			</div>
			<h1>Комплеанс</h1>
			<div class="slogan">Защита от недобросовестных участников торгов</div>
			<div class="text">
				<p>Если говорить просто, то любой «комплаенс» представляет собой соответствие каким-либо внутренним или внешним требованиям
					или нормам. Это явление приходит к нам из прогрессивных западных стран и в ближайшем будущем комплаенс-системы будут
					для нас весьма обыденными и привычными. Под соответствием подразумевается часть системы управления/контроля в организации,
					связанная с рисками несоответствия, несоблюдения требований законодательства, нормативных документов, правил и стандартов
					надзорных органов, отраслевых ассоциаций и саморегулируемых организаций, кодексов поведения и т.д. Такие риски несоответствия
					в конечном итоге могут проявляться в форме применения юридических санкций или санкций регулирующих органов, финансовых
					или репутационных потерь как результат несоответствия законам, общепринятым правилам и стандартам.</p>
				<p>И пусть риски связанные с возможными нарушениями санитарно-эпидемиологических или экологических норм не кажутся столь
					серьезными, то риски нарушения антимонопольного законодательства, к слову единственного не имеющего верхней планки величины
					штрафа, – это уже повод задуматься.</p>
			</div>
			<div class="card quote">
				<div class="header">Экспертное мнение</div>
				<p>Наши Эксперты разработают и внедрят в Вашей организации проверенный опытом, научно-обоснованный комплаенс, с учетом актуальной
					правоприменительной практики контрольно-надзорных и судебных органов. Опыт и знания наших Экспертов – в Вашем распоряжении.</p>
				<div
				 class="footer">
					<div class="name">Константин Константинопольский</div>
					<div class="degree">Доктор наук</div>
			</div>
		</div>
		<div class="text">
			<p>В сфере юридического консалтинга, квалификация наших Экспертов позволяет организовать полное юридическое сопровождение
				бизнеса, включая ведение договорной, претензионно-исковой, судебной работы. Однако, наиболее важным и актуальным для
				Партнеров и Клиентов мы считаем:</p>
		</div>
		<ul class="list">
			<li>защиту бизнеса от недружественного поглощения, недобросовестной конкуренции и антиконкурентных соглашений (включая картели);</li>
			<li>представительство в суде, включая обжалование решений ФАС; </li>
			<li>защиту по экономическим и антикоррупционным преступлениям владельцев бизнеса и руководителей организаций; </li>
			<li>представительство интересов в ФАС, включая рассмотрение жалоб, связанных с участием в торгах/организацией торгов; </li>
			<li>квалифицированную защиту по делам о картелях и других антиконкурентных соглашениях;</li>
		</ul>
		<div class="callus_button">
			<img src="assets/app/dest/images/button_call.svg" alt="" />
			<span>Связаться с нами</span>
		</div>
	</div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Experts' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Experts',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="container">
	<div class="content">
		<div class="col-12 d-flex justify-content-center">
			<h1>Эксперты</h1>
		</div>
		<div class="col-12">
			<div class="cards d-flex flex-row experts">
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/egorova.png" alt="" />
					</div>
					<div class="title">Егорова Мария Александровна</div>
					<div class="description">Доктор юридических наук, доцент</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/filimonov.png" alt="" />
					</div>
					<div class="title">Филимонов Андрей Александрович</div>
					<div class="description">Кандидат экономических наук</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/chernyavskiy.png" alt="" />
					</div>
					<div class="title">Чернявский Александр Геннадьевич</div>
					<div class="description">Доктор юридических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/bandurin.png" alt="" />
					</div>
					<div class="title">Бандурин Александр Владимирович</div>
					<div class="description">Доктор экономических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
			</div>
		</div>
	</div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="container">
	<div class="content">
		<div class="col-12 d-flex justify-content-center">
			<h1>Эксперты</h1>
		</div>
		<div class="col-12">
			<div class="cards d-flex flex-row experts">
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/egorova.png" alt="" />
					</div>
					<div class="title">Егорова Мария Александровна</div>
					<div class="description">Доктор юридических наук, доцент</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/filimonov.png" alt="" />
					</div>
					<div class="title">Филимонов Андрей Александрович</div>
					<div class="description">Кандидат экономических наук</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/chernyavskiy.png" alt="" />
					</div>
					<div class="title">Чернявский Александр Геннадьевич</div>
					<div class="description">Доктор юридических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
				<div class="card">
					<div class="photo">
						<img src="assets/app/dest/images/exp/bandurin.png" alt="" />
					</div>
					<div class="title">Бандурин Александр Владимирович</div>
					<div class="description">Доктор экономических наук, профессор</div>
					<div class="button">Узнать больше</div>
				</div>
			</div>
		</div>
	</div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'News' => 
      array (
        'fields' => 
        array (
          'id' => 17,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'News',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="container">
	<div class="content news col-xl-12 col-md-10">
		<hr/>
		<div class="d-flex flex-row justify-content-between flex-wrap">
			<div class="header">Новости и публикации</div>
			<a class="news_all">Все новости</a>
		</div>
		<ul class="news_list d-flex flex-wrap flex-row">
			<li class="item">
				<div class="date">11 Января 2018</div>
				<div class="title">Антимонопольный комплаенс в Российских реалиях (Мигитко О.)</div>
			</li>
			<li class="item">
				<div class="date">4 Февраля 2018</div>
				<div class="title">Потребность в эффективных комплаенс программах</div>
			</li>
			<li class="item">
				<div class="date">2 Марта 2018</div>
				<div class="title">Президент РФ подписал указ «Об основных оаправлениях госполитики по развитию конкуренции»</div>
			</li>
			<li class="item">
				<div class="date">23 Марта 2018</div>
				<div class="title">Антимонопольный комплаенс в США и Европе. По какому пути пойдет Россия? (Глубовкая Ю.) </div>
			</li>
		</ul>
	</div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="container">
	<div class="content news col-xl-12 col-md-10">
		<hr/>
		<div class="d-flex flex-row justify-content-between flex-wrap">
			<div class="header">Новости и публикации</div>
			<a class="news_all">Все новости</a>
		</div>
		<ul class="news_list d-flex flex-wrap flex-row">
			<li class="item">
				<div class="date">11 Января 2018</div>
				<div class="title">Антимонопольный комплаенс в Российских реалиях (Мигитко О.)</div>
			</li>
			<li class="item">
				<div class="date">4 Февраля 2018</div>
				<div class="title">Потребность в эффективных комплаенс программах</div>
			</li>
			<li class="item">
				<div class="date">2 Марта 2018</div>
				<div class="title">Президент РФ подписал указ «Об основных оаправлениях госполитики по развитию конкуренции»</div>
			</li>
			<li class="item">
				<div class="date">23 Марта 2018</div>
				<div class="title">Антимонопольный комплаенс в США и Европе. По какому пути пойдет Россия? (Глубовкая Ю.) </div>
			</li>
		</ul>
	</div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Footer' => 
      array (
        'fields' => 
        array (
          'id' => 18,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'Footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer class="container-fluid d-flex flex-row">
	<div class="container d-flex justify-content-between flex-wrap">
		<div class="logo">
			<img src="assets/app/dest/images/logo_2.svg" alt="" />
		</div>
		<div class="slogan">Общество с ограниченной ответственностью «Институт комплаенса» </div>
		<div class="social d-flex">
			<img src="assets/app/dest/images/link_logo.svg" alt="" />
		</div>
		<div class="info d-flex flex-column">
			<div>115035, г. Москва, Кадашевская набережная, дом 26 </div>
			<div>Телефон: 8 (495) 664-39-74</div>
			<div>Эл. почта:
				<a href="mailto:info@icompliance.ru">info@icompliance.ru</a>
			</div>
		</div>
		<div class="madeby d-flex align-items-center">
			<span>Сделано в</span>
			<img src="assets/app/dest/images/toposlogo.svg" alt="" />
		</div>
	</div>
</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer class="container-fluid d-flex flex-row">
	<div class="container d-flex justify-content-between flex-wrap">
		<div class="logo">
			<img src="assets/app/dest/images/logo_2.svg" alt="" />
		</div>
		<div class="slogan">Общество с ограниченной ответственностью «Институт комплаенса» </div>
		<div class="social d-flex">
			<img src="assets/app/dest/images/link_logo.svg" alt="" />
		</div>
		<div class="info d-flex flex-column">
			<div>115035, г. Москва, Кадашевская набережная, дом 26 </div>
			<div>Телефон: 8 (495) 664-39-74</div>
			<div>Эл. почта:
				<a href="mailto:info@icompliance.ru">info@icompliance.ru</a>
			</div>
		</div>
		<div class="madeby d-flex align-items-center">
			<span>Сделано в</span>
			<img src="assets/app/dest/images/toposlogo.svg" alt="" />
		</div>
	</div>
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 38,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);