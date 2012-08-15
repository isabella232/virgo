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

<h3>3.0.0.M04 - Release Notes</h3>

<p>
The M04 milestone of Virgo contains bug fixes on top of the fixes in <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.M03&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">M03</a>.
The admin console has been improved to better handle the new Region implementation.
Now PARs are allowed to contain plans.
The migration notes in Virgo 3.0 has been updated in light of the stricter "Require-Bundle" processing in Equinox 3.7.
</p>

<h4>Acknowledgements</h4>

<p>A documentation patch was gratefully received from:</p>
<ul>
    <li>Joel Rosi-Schwartz</li>
</ul>

<h4>Highlights</h4>

<ul>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=343050">Bug 343050</a>: Document stricter processing of Require-Bundle by Equinox 3.7 in Virgo 3.0 migration notes.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=342676">Bug 342676</a>: User guide refers to incorrect hosted repository context path.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=337233">Bug 337233</a>: Browsing the OSGi state in the Admin Console breaks when you navigate to a bundle in the Kernel region.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=335689">Bug 335689</a>: Allows PARs to contain plans.</li>
</ul>

<p>A full list of bugs included in this milestone is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.M04&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
$html = ob_get_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>