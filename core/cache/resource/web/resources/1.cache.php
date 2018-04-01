<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => NULL,
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website. </p>

<h2>New to&nbsp;MODX?</h2>

<p>Pages on a MODX site are called <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>

<p>Building your website is done through a combination of <b>Templates</b>, <b>Template Variables</b>, <b>Chunks</b>, <b>Snippets</b> and <b>Plugins</b>. Collectively these are known as <b>Elements</b>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>

<p><a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/customizing-content/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>

<p>With <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/using-snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>

<p>Finally, <a href="https://rtfm.modx.com/revolution/2.x/developing-in-modx/basic-development/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>

<p>To learn more about MODX, be sure to check out the <a href="https://rtfm.modx.com/revolution/2.x/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>
',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1516922952,
    'editedby' => 0,
    'editedon' => 0,
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
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!doctype html>
<html lang="en">
<head>
    <title>iCompliance - Главная</title>
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
<ul class="nav">
	<li>Об институте</li>
	<li>Комплаенс</li>
	<li>Антимонопольная практика</li>
	<li>Защита по картелям</li>
	<li>Контакты</li>
</ul>
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
<ul class="nav">
	<li>Об институте</li>
	<li>Комплаенс</li>
	<li>Антимонопольная практика</li>
	<li>Защита по картелям</li>
	<li>Контакты</li>
</ul>',
    '[[$Header]]' => '<header class="container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">
			    <div class="burger">
	<img src="assets/app/dest/images/burger_menu.svg" alt="" />
</div>
<ul class="nav">
	<li>Об институте</li>
	<li>Комплаенс</li>
	<li>Антимонопольная практика</li>
	<li>Защита по картелям</li>
	<li>Контакты</li>
</ul>
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
<ul class="nav">
	<li>Об институте</li>
	<li>Комплаенс</li>
	<li>Антимонопольная практика</li>
	<li>Защита по картелям</li>
	<li>Контакты</li>
</ul>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="burger">
	<img src="assets/app/dest/images/burger_menu.svg" alt="" />
</div>
<ul class="nav">
	<li>Об институте</li>
	<li>Комплаенс</li>
	<li>Антимонопольная практика</li>
	<li>Защита по картелям</li>
	<li>Контакты</li>
</ul>',
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
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);