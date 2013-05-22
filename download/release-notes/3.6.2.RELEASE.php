<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2013 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Violeta Georgieva
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>

<div id="midcolumn">

<h3>3.6.2.RELEASE - Release Notes</h3>

<p>This is the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Sky</a> (3.6.2) release of Virgo</p>
<p>
The release updates the versions of the enterprise components. The new Virgo Nano Web version comes with various performance improvements.
The release also includes several bug fixes.
</p>


<h4>Migration from 3.6.1 to 3.6.2</h4>

<h4>Version Upgrades</h4>
<ul>
	<li>Gemini Web is upgraded to 2.2.2</li>
	<li>JSF RI is upgraded to 2.1.18</li>
	<li>OpenWebBeans is upgraded to 1.1.7</li>
	<li>BVal is upgraded to 0.5</li>
	<li>XBean is upgraded to 3.12</li>
	<li>Javassist is upgraded to 3.17.1.GA</li>
	<li>Apache Commons Lang is upgraded to 3.1</li>
	<li>org.objectweb.asm is upgraded to 3.2</li>
	<li>OpenEJB is upgraded to 4.5.2</li>
</ul>

<p>A full list of bugs included in this release is available
	<a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=3886983&classification=RT&query_format=advanced&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&product=Virgo&target_milestone=3.6.2.RELEASE" target="_self">here</a>.</p>

<p>Please refer to the Virgo <a href="http://www.eclipse.org/virgo/download/release-notes/3.6.0.RELEASE.php">3.6.0.RELEASE</a> and <a href="http://www.eclipse.org/virgo/download/release-notes/3.6.1.RELEASE.php">3.6.1.RELEASE</a> release notes for more information about the base content of this release.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

