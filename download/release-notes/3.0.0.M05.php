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

<h3>3.0.0.M05 - Release Notes</h3>

<p>
The 3.0.0.M05 milestone of Virgo upgrades several dependencies to their latest levels, adds significant functional enhancements, and fixes a number of bugs.
</p>

<h4>Highlights</h4>

<ul>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=342716">Bug 342716</a>: Support the OSGi Log Service and plumb it in to Virgo's logging infrastructure.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=332911">Bug 332911</a>: Expose Virgo's class loading diagnostic commands to JMX.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=314282">Bug 314282</a>: Upgrade the Spring framework embedded in Virgo to version 3.0.5.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=332045">Bug 332045</a>: Upgrade Virgo Tomcat Server to use Gemini Web 2.0.0.M01 which embeds the stable release Tomcat 7.0.12 and supports the
latest Java Servlet, JavaServer Pages, and Expression Language specifications.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=337822">Bug 337822</a>: Add the -noStart option to dmk.sh/dmk.bat. See the User Guide section entitled "Cleaning Virgo Web Server without Starting it" 
and known issue entitled "Problem Deleting Installation Directory under Windows".</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=343364">Bug 343364</a>: Use the Equinox implementation of the region digraph (based on the Virgo implementation).</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=347120">Bug 347120</a>: Include the logging level in (trace) log entries.</li>
</ul>

<p>A full list of bug fixes included in this milestone is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.M05&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
$html = ob_get_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>