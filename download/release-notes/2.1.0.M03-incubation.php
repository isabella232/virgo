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

<h3>2.1.0.M03-incubation - Release Notes</h3>
<p>The blog post is available <a href="http://blog.springsource.com/2010/08/10/virgo-milestone-m03-ships/" target="_self">here</a>.</p>

<ul>
    <li>Further performance improvements, especially for Windows users.</li>
    <li>Update the version of Logback to 0.9.24 and SLF4J to 1.6.1.</li>
    <li>Improved the API for adding custome deployment types.</li>
    <li>Created a plan for the future of Virgo <a href="http://wiki.eclipse.org/Virgo/Future#Virgo_Plan" target="_self">here</a>.</li>
	<li>Minor bug fixes.</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>