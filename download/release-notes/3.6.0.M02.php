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

<h3>3.6.0.M02 - Release Notes</h3>

<p>
This is the second milestone of the <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Sky</a> (3.6.0) release of Virgo.
It contains the following upgrades:
<ul>
	<li>Equinox is bumped to its Juno SR1 version</li>
</ul>
</p>

<p>
The milestone also adds a number of enhancements such as:
<ul>
	<li>New 'tee' system stream capture mode - that prints both system outs and errs in the logs and on the default system output</li>
	<li>Support for nested web context path in Nano Web - this allows users to install a war with web context path of the sort 'my/war/application'</li>
</ul>
</p>

<h4>Enhancements and Fixes</h4>
<p>Also included are many fixes on the new web admin console.</p>
<p>A full list of bugs and enhancements included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?priority=P1&priority=P2&priority=P3&priority=P4&priority=P5&list_id=3185060&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&resolution=---&resolution=FIXED&resolution=INVALID&resolution=WONTFIX&resolution=DUPLICATE&resolution=WORKSFORME&resolution=MOVED&resolution=NOT_ECLIPSE&classification=RT&query_format=advanced&bug_status=RESOLVED&bug_status=CLOSED&version=1.1.0.M02&version=3.0.2.RELEASE&version=3.1.0.M01&version=3.5.0.M02&version=3.5.0.M03&version=3.0.3.RELEASE&version=3.5.0.M04&version=1.1.0.RELEASE&version=2.5.0.RELEASE&version=3.5.0.RELEASE&version=3.6.0.M01&component=bundlor&component=documentation&component=jetty&component=runtime&component=samples&component=snaps&component=tooling&component=unknown&component=virgo-build&component=web-admin&product=Virgo&target_milestone=3.6.0.M02" target="_self">here</a>.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

