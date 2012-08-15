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
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>

<div id="midcolumn">

<h3>2.1.0.M04-incubation - Release Notes</h3>
<p>The blog post is available <a href="http://blog.springsource.com/2010/09/03/virgo-milestone-4-ships/" target="_self">here</a>.

Bugzilla list available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;target_milestone=2.1.0.M04-incubation;product=Virgo;classification=RT" target="_self">here</a>.</p>

<ul>
	<li>Bug 323609 fixed: severe logging performance issue under Windows in certain scenarios</li>
    <li>OSGi extensions change in preparation for Equinox 3.6 upgrade contributed by Hristo Illiev</li>
    <li>New testcases and test coverage improvements contributed by Olivier Girardot</li>
    <li>Support new framework property org.eclipse.virgo.suppress.heap.dumps and document it in User Guide</li>
    <li>Unused EquinoxConsoleManager deleted</li>
    <li>Various build and test improvements</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>