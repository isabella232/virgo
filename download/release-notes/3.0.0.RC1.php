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

<h3>Maya (3.0) Release Candidate 1 - Release Notes</h3>

<p>
Release Candidate 1 of Virgo <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Maya</a> (3.0) finally brings the snaps framework for modular web applications
out of prototype status. The separate snaps download includes a completely new "Virgo Snaps User Guide"
(also available <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.0.0.x/docs/snaps-guide/htmlsingle/virgo-snaps-guide.html">online</a>)
and a comprehensive sample application. The User Guide describes how to install snaps on top of Virgo Tomcat Server and
uses the sample application to verify the installation and step through all the major features of snaps.
</p>
<p>
RC1 also provides significant improvements to the rest of Virgo. It improves the performance of resource lookups for web applications,
upgrades the version of Gemini Web to 2.0.0.RC1,
moves the Web Integration Layer configuration from <tt>config/org.eclipse.virgo.web.properties</tt> to <tt>repository/ext/org.eclipse.virgo.web.properties</tt>,
provides a way of disabling the console telnet and ssh ports and disables them by default (see the User Guide section "Enabling Equinox Console"),
and fixes several bugs.
</p>
<p>
The document "Creating an Application with Virgo" has being replaced with a "Guide to the GreenPages Sample" which will appear in the next GreenPages release.
Meanwhile, some material from "Creating an Application with Virgo" which was more germane to the User and Programmer Guides has been moved to those documents in RC1.
</p>
<p>
RC1 represents a bug freeze for Virgo 3.0. Unless critical bugs are found in RC1, the only changes before 3.0 is released will be in documentation.
</p>

<h4>Highlights</h4>

<ul>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=343346">Bug 343346</a>: Slow JSP compilation.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=352575">Bug 352575</a>: <tt>config/org.eclipse.virgo.web.properties</tt> is superseded by
<tt>repository/ext/org.eclipse.virgo.web.properties</tt>.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=350846">Bug 350846</a>: [Gogo] Need a way of disabling a console port in the console configuration file.</li>
</ul>

<p>A full list of bug fixes included in this release candidate is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.RC1&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

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