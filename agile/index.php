<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Glyn Normington
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo - Sprints";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, History, origin, origins, about, agile, scrum, sprint";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Agile Planning and Tracking</h2>
		<p>
			The VMware committers currently use an agile development process with one week sprints.
		</p>
		<p>
			We use <a href="http://www.acunote.com">Acunote</a> to maintain the Virgo
			<a href="http://eclipse-virgo.acunote.com/projects/16748/sprints/65055/show">backlog</a>
			and manage <a href="http://eclipse-virgo.acunote.com/projects/16748/sprints">sprints</a>.
			You can log in as the user "guest" with password "guest".
		</p>
		
		<a href="http://dilbert.com/strips/comic/2011-03-11/" title="Dilbert.com"><img src="http://dilbert.com/dyn/str_strip/000000000/00000000/0000000/100000/10000/5000/000/115018/115018.strip.gif" border="0" alt="Dilbert.com" /></a>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>