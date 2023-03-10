<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Babel Project";
	$pageKeywords	= "babel,eclipse,translation,i18n,l10n,internationalization,localization,globalization";
	$pageAuthor		= "Jess Garms, Denis Roy";
	ob_start();

?>
	
<style>
.packages img {	margin-right:5px;}
.packages tr td{padding:7px 0;}
.packageDesc b{	color:#333366;	font-size:150%;}
.packageDesc span{	font-size:85%;	padding:0 0 10px 0;	margin:0px;}
</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<p>Eclipse is a global community. It is in everyone's interest
		to ensure that Eclipse is available and translated in as many locales as
		possible.</p>
		
<?php include("description.html");  ?>

	<table width="100%" class="packages" cellspacing=0 cellpadding=0>
		<tr><td width="60" valign="top" align="center">
			<img src="/mylyn/images/community.jpg">
				</td><td valign="top" class="packageDesc">
				<b>Community</b><br />
				<span><a href="https://www.eclipse.org/forums/index.php?t=thread&frm_id=42">Newsgroup</a> &#160;|&#160; <a href="https://dev.eclipse.org/mailman/listinfo/babel-dev">Developers mailing list</a> &#160;|&#160; <a href="http://wiki.eclipse.org/Babel_/_Language_champions">Language Champions</a></span>
			</td></tr>
	<tr><td width="60" valign="top" align="center">
			<a href="http://babel.eclipse.org/"><img src="//dev.eclipse.org/large_icons/categories/applications-internet.png"></a>
				</td><td valign="top" class="packageDesc">
				<b><a href="http://babel.eclipse.org/">Translate now</a></b><br />
				<span>Go to the translation tool and help translate Eclipse.  It's easy!<br/></span>
			</td></tr>
		<tr><td width="60" valign="top" align="center">
			<a href="downloads.php"><img src="//dev.eclipse.org/large_icons/actions/go-bottom.png"></a>
				</td><td valign="top" class="packageDesc">
				<b><a href="downloads.php">Downloads</a></b><br />
				<span>Download Eclipse language packs.<br/></span>
			</td></tr>
		<tr><td width="60" valign="top" align="center">
			<a href="development.php"><img src="//dev.eclipse.org/large_icons/emotes/face-smile.png"></a>
				</td><td valign="top" class="packageDesc">
				<b>You can help!</b><br />
				<span><a href="http://babel.eclipse.org/">Translate!</a> &#160;|&#160; <a href="development/">Write Code</a> &#160;|&#160; <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Babel">Report bugs</a></span>
			</td></tr>
	</table>
	</div>
	<div id="rightcolumn">
     <div class="sideitem">
       <h6>Incubation</h6><p>
       <div align="center">
         <a href="/projects/what-is-incubation.php">
           <img align="center" src="/images/egg-incubation.png" border="0"/>
         </a>
       </div>
       <div align="center">  
         This project is in the 
         <a href="/projects/dev_process/validation-phase.php">Incubation Phase</a>
       </div>
     </div>
	  <div class="sideitem">
			<h6>Links</h6>
			<ul>
				<li><a href="http://babel.eclipse.org/">Translation tool</a></li>
				<li><a href="http://wiki.eclipse.org/Babel/FAQ">Babel FAQ</a></li>
				<li><a href="http://www.eclipse.org/proposals/babel/" target="_blank">Project Proposal</a></li>
			</ul>
		</div>
	</div>
</div>
<?php 
	$html = ob_get_contents();
	ob_end_clean();


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>