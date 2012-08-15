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

<h3>Maya (3.0) Release Candidate 2 - Release Notes</h3>

<p>
Release Candidate 2 of Virgo <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Maya</a> (3.0)
upgrades the version of Gemini Web to 2.0.0.RC2,
</p>
<p>
The document "Creating an Application with Virgo" is being replaced with a "Guide to the GreenPages Sample" which will appear in the next GreenPages release.
Meanwhile, some material from "Creating an Application with Virgo" which was more germane to the User and Programmer Guides has been moved to those documents.
</p>
<p>
Release Candidate 2 represents a bug and documentation freeze for Virgo 3.0. Unless critical bugs are found in RC2, the only changes before 3.0 is released will be in documentation.
</p>

<h4>Highlights</h4>

<ul>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=353119">Bug 353119</a>: Version of Equinox upgraded to the stable Indigo release (3.7.0.v20110613).</li>
</ul>

<p>A full list of bug fixes included in this release candidate is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.RC2&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

<h4>Incubator Bundles</h4>

<p>
Note that two bundles included from the Equinox components component are in incubation status.
</p>
<p>
The Region Digraph bundle was moved from Virgo into Equinox incubation, but is otherwise in a stable, well-tested state.
</p>
<p>
The Console Supportability bundle, which integrates the Apache Felix Gogo shell, is in incubation status mainly because it depends on interfaces that were
being worked on in the OSGi Alliance. However, the Alliance has decided not to continue that particular piece of specification work since Gogo is already proving to be
a popular, reusable console.
</p>

</div>

<?
$html = ob_get_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>