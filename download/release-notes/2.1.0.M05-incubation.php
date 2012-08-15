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
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>

<div id="midcolumn">

<h3>2.1.0.M05-incubation - Release Notes</h3>

<p>Bugzilla list available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;target_milestone=2.1.0.M05-incubation;product=Virgo;classification=RT" target="_self">here</a>.</p>

<ul>
	<li>Upgrade Equinox to 3.6.1</li>
	<li>Remove unnecessary bundles from kernel and shrink the classpath</li>
	<li>Distinguish more clearly between kernel and web server in documentation</li>
	<li>Bug 325334: Import-Bundle of fragment that does not specify bundle version range</li>
	<li>Rename service scoping control property</li>
	<li>Various diagnostic improvements</li>
	<li>Improve permission handling in Windows startup scripts and document a workaround</li>
	<li>Add empty pickup directory to kernel zip</li>
	<li>Various minor improvements</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>