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
	$pageAuthor		= "Borislav Kapukaranov";
		
	ob_start();
?>

<div id="midcolumn">

<h3>3.6.0.M05 - Release Notes</h3>

<p>
This is the fifth milestone of the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Sky</a> (3.6.0) release of Virgo.
Notable in this release is the inclusion of the new Web Admin Console in Virgo Nano.
From now on the Virgo distributions' bundles are signed as well as our p2 repository.
The milestone also includes many enhancements and fixes on the web console and the enterprise support.
</p>

<p>A full list of bugs and enhancements included in this milestone is available
	<a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&query_format=advanced&bug_status=CLOSED&product=Virgo&target_milestone=3.6.0.M05&list_id=3834829" target="_self">here</a>.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

