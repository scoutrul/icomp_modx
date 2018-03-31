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
        <div class="header container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">MENU</div>
			<div class="col flex header_items_logo">
				<div class="logo">
					<img src="images/logo_1.svg" alt=""/>
				</div> 
			</div> 
			<div class="col flex d-flex flex-row justify-content-end header_items_search">
				<div class="search">
                    <img src="images/search.svg" alt=""/>
                </div>
            </div>
			<div class="flex d-flex flex-row justify-content-end header_items_local">
				<div class="local"> Eng</div>
			</div>
		</div>
	</div>
</div>
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
    '[[$Header]]' => '<div class="header container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">MENU</div>
			<div class="col flex header_items_logo">
				<div class="logo">
					<img src="images/logo_1.svg" alt=""/>
				</div> 
			</div> 
			<div class="col flex d-flex flex-row justify-content-end header_items_search">
				<div class="search">
                    <img src="images/search.svg" alt=""/>
                </div>
            </div>
			<div class="flex d-flex flex-row justify-content-end header_items_local">
				<div class="local"> Eng</div>
			</div>
		</div>
	</div>
</div>',
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
          'snippet' => '<div class="header container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">MENU</div>
			<div class="col flex header_items_logo">
				<div class="logo">
					<img src="images/logo_1.svg" alt=""/>
				</div> 
			</div> 
			<div class="col flex d-flex flex-row justify-content-end header_items_search">
				<div class="search">
                    <img src="images/search.svg" alt=""/>
                </div>
            </div>
			<div class="flex d-flex flex-row justify-content-end header_items_local">
				<div class="local"> Eng</div>
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
          'content' => '<div class="header container-fluid d-flex flex-row align-items-center">
	<div class="container col-xs-12">
		<div class="d-flex flex-row align-items-center justify-content-between header_items">
			<div class="flex header_items_menu">MENU</div>
			<div class="col flex header_items_logo">
				<div class="logo">
					<img src="images/logo_1.svg" alt=""/>
				</div> 
			</div> 
			<div class="col flex d-flex flex-row justify-content-end header_items_search">
				<div class="search">
                    <img src="images/search.svg" alt=""/>
                </div>
            </div>
			<div class="flex d-flex flex-row justify-content-end header_items_local">
				<div class="local"> Eng</div>
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
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);