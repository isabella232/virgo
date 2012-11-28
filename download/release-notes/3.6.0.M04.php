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

<h3>3.6.0.M04 - Release Notes</h3>

<p>
This is the fourth milestone of the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Sky</a> (3.6.0) release of Virgo.
It contains numerous fixes to the new web admin console, enables support of EJBs and other enterprise APIs in Virgo Nano Full,
introduces support for Spring framework 3.2.x,
and implements other bug fixes and enhancements.
</p>

<p>A full list of bugs and enhancements included in this milestone is available
	<a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=3678427&classification=RT&query_format=advanced&bug_status=CLOSED&product=Virgo&target_milestone=3.6.0.M04" target="_self">here</a>.</p>

<p>Note there is a limitation that Virgo Nano Full's controlled shutdown is not working in this milestone (see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=395148" target="_self">bug 395148</a>).</p>
</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

