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
 * Contributors: Christopher Frost
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Hristo Iliev";
		
	ob_start();
?>

<div id="midcolumn">

<h3>3.0.0.M03 - Release Notes</h3>
 
	<p>
		The M03 milestone of Virgo contains bug fixes on top of the fixes in <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.M02&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">M02</a>.
		The shell has been improved to better handle the new Region implementation.
		Virgo Web Server has been renamed to Virgo Tomcat Server.
	</p>

	<h4>Highlights</h4>

	<ul>
		<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=339343">Bug 339343</a>: vsh doesn't list the actual state of the services in the user region.</li>
		<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=338535">Bug 338535</a>: The web-server build is incorrectly named, should be tomcat-server.</li>
	</ul>
	
	<p>A full list of bugs included in this milestone is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.M03&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>
	
	<h4>Known Issues</h4>
	
	<ul>
		<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=336941">Bug 336941</a>: Change state dumping and analysis to work with framework hooks (the new Region implementation).</li>
	</ul>
	
</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>