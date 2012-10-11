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

<h3>3.6.0.M01 - Release Notes</h3>

<p>
This is the first milestone of the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Sky</a> (3.6.0) release of Virgo.
It contains the following upgrades:
<ul>
	<li>Tomcat 7.0.29 with WebSocket support</li>
	<li>Spring 3.1</li>
	<li>Gemini Blueprint 1.0.2</li>
	<li>Gemini Web 2.2.0</li>
</ul>
</p>

<p>
The milestone also adds a number of enhancements such as:
<ul>
	<li>New Admin Console for Virgo Kernel, Virgo Server For Apache Tomcat, and Virgo Jetty Server,
		described in <a href="http://codewax.org/eclipse/new-web-admin-console-in-virgo/">this blog</a></li>
	<li>Bulk hot deployment of initial pickup artifacts in Virgo Nano</li>
	<li>All Virgo distributions' p2 profiles are now published with a custom Java Server Profile, with that the p2 resolution exactly matches the runtime content</li>
	<li>Work directory paths have been shortened to alleviate Windows filesystem limitations.</li>
	<li>Bundles and WAR files may be deployed in packed form to shorten work directory paths further.
		See the <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.6.0.M01/docs/virgo-user-guide/html/ch13s06.html">User Guide</a> for
		the kernel configuration property deployer.unpackBundles</li>
</ul>
</p>

<h4>Enhancements and Fixes</h4>
<p>A full list of bugs and enhancements included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?priority=P1&priority=P2&priority=P3&priority=P4&priority=P5&list_id=3018676&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&resolution=---&resolution=FIXED&resolution=INVALID&resolution=WONTFIX&resolution=DUPLICATE&resolution=WORKSFORME&resolution=MOVED&resolution=NOT_ECLIPSE&classification=RT&query_format=advanced&bug_status=RESOLVED&bug_status=CLOSED&version=unspecified&version=2.1.0.M01&version=2.1.0.M02-incubation&version=2.1.0.M03-incubation&version=2.1.0.M04-incubation&version=2.1.0.M05-incubation&version=2.1.0.M06-incubation&version=2.1.0.RC1&version=2.1.0.RC1-incubation&version=2.1.0.RELEASE&version=2.2.0.M01&version=3.0.0.M01&version=3.0.0.M02&version=3.0.0.M03&version=2.1.1.RELEASE&version=3.0.0.M04&version=2.3.0.RELEASE&version=3.0.0.M05&version=3.0.0.M06&version=3.0.0.RC1&version=3.0.0.RC2&version=3.0.0.RELEASE&version=3.0.1.RELEASE&version=1.1.0.M02&version=3.0.2.RELEASE&version=3.1.0.M01&version=3.5.0.M02&version=3.5.0.M03&version=3.0.3.RELEASE&version=3.5.0.M04&version=1.1.0.RELEASE&version=2.5.0.RELEASE&version=3.5.0.RELEASE&component=bundlor&component=documentation&component=jetty&component=runtime&component=samples&component=snaps&component=tooling&component=unknown&component=virgo-build&component=web-admin&product=Virgo&target_milestone=3.6.0.M01" target="_self">here</a>.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

