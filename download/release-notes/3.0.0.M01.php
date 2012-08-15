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

<h3>3.0.0.M01 - Release Notes</h3>
 
	<p>
		Virgo has now changed sufficiently to warrant the major version increasing to 3.
		This first milestone on the 3.0 line already includes some impressive new features and
		is the first milestone with some new committers on board. So a big welcome to them:
	</p>

	<ul>
	    <li>Violeta Georgieva (SAP AG)</li>
	    <li>Hristo Illiev (SAP AG)</li>
	    <li>Borislav Kapukaranov (SAP AG)</li>
	    <li>Dmitry Sklyut (Chariot Solutions)</li>
	</ul>
	
	<p>
		Contributions in the form of bug reports, forum posts, blogs, and tweets were gratefully received from individuals too numerous to mention.
	</p>

	<h4>Highlights</h4>

	<ul>
	    <li>Relaxed the order in which kernel bundles need to start by using Equinox Declarative Services, in preparation for p2 support.</li>
		<li>Rebased the regions implementation on OSGi framework hooks, destined for standardisation in OSGi R4.3, instead of composite bundles.</li>
		<li>Upgraded Equinox to 3.7M5.</li>
		<li>Added command history and TAB completion to the Equinox console.</li>
		<li>Replaced Felix Configuration Admin and Event Admin with their Equinox counterparts.</li>
		<li>Provided a new <strong>prototype</strong> deliverable: Virgo Jetty Server. This is similar to Virgo Web Server but based on <strong>Jetty</strong>, currently v7.3.</li>
		<li>Upgraded Gemini Web to 1.2.0.M02.</li>
	</ul>
	
	<p>A full list of bugs included in this milestone is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.M01&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>
	
	<h4>Known Issues</h4>
	
	<ul>
		<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=337233">Bug 337233</a>: browsing the OSGi state in the Admin Console breaks when navigating to a bundle in the Kernel region.</li>
		<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=337538">Bug 337538</a>: a thread safety bug in Equinox which sometimes causes the built-in applications such as the admin console
		and splash screen to fail to start. This will be fixed in the next milestone. Meanwile, simply restart Virgo.</li>
		<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=337543">Bug 337543</a>: RuntimeArtifactModel produces and swallows an NPE. This appears in log.log.</a>
	</ul>
	
</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>