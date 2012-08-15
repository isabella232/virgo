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

<h3>2.1.1.RELEASE - Release Notes</h3>

<p>The 2.1.1 release is a security and bug fix update release of the first formal release of Virgo and is aimed at migrating SpringSource dm Server applications and users to Virgo.
See the <a href="http://wiki.eclipse.org/Virgo/Community/Migrating_from_dm_Server">migration notes</a> for details.</p>

<p>Please refer to the <a href="http://www.eclipse.org/virgo/download/release-notes/2.1.0.RELEASE.php">release notes</a> for Virgo 2.1.0.RELEASE for more information about the base content of this release.</p>

<h4>Acknowledgements</h4>

<p>A documentation patch was gratefully received from:</p>
<ul>
    <li>Joel Rosi-Schwartz</li>
</ul>

<h4>Highlights</h4>

<p>Dependency upgrades:</p>
<ul>
    <li>Upgrade Tomcat to 6.0.32 (plus modifications to support embedding)</li>
    <li>Upgrade the OSGi web container to
      <a href="http://www.eclipse.org/gemini/web/download/release-notes/1.1.1.RELEASE.php">Gemini Web 1.1.1.RELEASE</a></li>
</ul>
<p>Other improvements and bug fixes:<p/>
<ul>
	<li>Bug 342675: User guide refers to incorrect hosted repository context path</li>
	<li>See <a href="http://tomcat.apache.org/tomcat-6.0-doc/changelog.html">Tomcat 6.0.32</a> for other fixes</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=2.1.1.RELEASE&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>