<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2012 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Glyn Normington
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>

<div id="midcolumn">

<h3>3.0.3.RELEASE - Release Notes</h3>

<p>This is the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Maya</a> (3.0.3) release of Virgo.</p>
<p>
The release upgrades embedded Tomcat and Jetty to prevent a DoS attack and fixes a bug which caused intermittent exceptions to be thrown when deploying applications to Virgo.</p>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.3.RELEASE&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

<p>Please refer to the Virgo <a href="http://www.eclipse.org/virgo/download/release-notes/3.0.0.RELEASE.php">3.0.0.RELEASE</a>,
<a href="http://www.eclipse.org/virgo/download/release-notes/3.0.1.RELEASE.php">3.0.1.RELEASE</a>,
and <a href="http://www.eclipse.org/virgo/download/release-notes/3.0.2.RELEASE.php">3.0.2.RELEASE</a> release notes for more information about the base content of this release.</p>
</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>