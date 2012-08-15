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

<h3>2.1.0.RC1-incubation - Release Notes</h3>

Bugzilla list available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;target_milestone=2.1.0.RC1-incubation;product=Virgo;classification=RT" target="_self">here</a>.</p>

<ul>
	<li>Bug 326423: Allow Logback to be configured via logback.xml in root of a bundle</li>
	<li>Bug 327383: Reinstate com.springsource.javax.transaction-1.1.0.jar in lib directory</li>
	<li>Bug 327209: Improve deployer cleanup logic for certain kinds of bundle install failures</li>
	<li>Bug 327211: Clearly separate bundle symbolic name from bundle version in admin console</li>
	<li>Bug 326782: Allow kernel to be released independently of the web server</li>
	<li>Various documentation fixes and improvements.</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>