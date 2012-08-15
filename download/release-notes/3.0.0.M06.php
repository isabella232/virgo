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

<h3>Maya (3.0) Milestone 6 - Release Notes</h3>

<p>
Milestone 6 of Virgo <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Maya</a> (3.0) introduces a new shell,
makes available the <a href="http://wiki.eclipse.org/Virgo/Future#Snaps">snaps</a> framework supporting modular OSGi web applications,
increases compliance with certain OSGi specifications (this is a backward incompatible change from milestone 5 - see below),
upgrades Gemini Web to <a href="http://www.eclipse.org/gemini/web/download/release-notes/2.0.0.M02.php">2.0.0.M02</a>, and fixes several bugs.
</p>
<h4>Gogo Shell</h4>
<p>
The new shell, based on Apache Felix Gogo, is not yet documented in the User Guide. See the <a href="http://felix.apache.org/site/apache-felix-gogo.html">Gogo home page</a> for some basic usage information.
Shells are provided for both kernel and user region.
</p>
<p>
Access is via ssh or telnet.
The simplest way to access the shell is via telnet to port 2501 or 2401 for user region or kernel, respectively.
</p>
<p>
Alternatively, you can ssh to port 2502 or 2402 for user region or kernel, respectively.
The first time you use ssh to connect, specify the user "equinox" and password "equinox".
You'll then be prompted prompted to create a new user, password, and role (the "admin" role is recommended).
</p>
<p>
The shell ports may be reconfigured by editing <tt>config/osgi.console.telnet.properties</tt> or <tt>config/osgi.console.ssh.properties</tt> for the kernel,
or <tt>repository/ext/osgi.console.telnet.properties</tt> or <tt>repository/ext/osgi.console.ssh.properties</tt> for the user region, and then restarting Virgo.
</p>
<p>
The shell currently has a few known <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;short_desc=%5BGogo%5D;short_desc_type=allwordssubstr;version=3.0.0.M06;component=runtime;classification=RT;product=Virgo">bugs</a>.
</p>

<h4>Backward Incompatible Change to WAB Support</h4>
<p>Milestone 6 includes a backward Incompatible Change to the handling of Web Application Bundle (WAB) manifest headers.</p>
<p>This may affect any WAB. Note that a WAB is distinguished from a WAR file by the presence of one or more of the manifest headers: <tt>Bundle-SymbolicName</tt>,
<tt>Bundle-Version</tt>, <tt>Bundle-ManifestVersion</tt>, <tt>Import-Package</tt>, or <tt>Web-ContextPath</tt>.
<em>So if milestone 6 affects the processing of a WAR file, the chances are the WAR is actually a WAB</em>.
</p>
<p>Prior to milestone 6, the following defaults are applied to WAB manifest headers:
<ul>
<li><tt>Bundle-ManifestVersion</tt> is set to 2,</li>
<li><tt>Bundle-SymbolicName</tt> is generated from the path from which the bundle was installed,</li>
<li><tt>Bundle-ClassPath</tt> is set to <tt>WEB-INF/classes</tt> followed by the JARs in <tt>WEB-INF/lib</tt> in an unspecified order, followed by any transitive dependencies declared
by the JARs in <tt>WEB-INF/lib</tt>,</li>
<li>Import-Package is extended in an implementation defined way.</li>
</ul>
These defaults are still applied to WAR files as described in the Programmer Guide section entitled "Web Application Manifest Processing", but are <strong>no longer</strong>
applied to WABs.
</p>
<p>
As a migration aid, <strong>which may be removed in future releases</strong>, it is possible to re-instate the defaulting of WAB manifest headers by setting the following property
value in <tt>config/org.eclipse.virgo.web.properties</tt>:
</p>
<pre>
WABHeaders=defaulted

</pre>
<p>
This is described in the User Guide section "Configuring the Web Integration Layer".
</p>

<h4>Highlights</h4>

<ul>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=347904">Bug 347904</a>: Introduce the new shell in place of the traditional Equinox shell.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=346775">Bug 346775</a>: adopt OSGi standard semantics for starting lazy activation bundles so that such
bundles are eagerly started as they are deployed.
See the <a href="http://wiki.eclipse.org/Virgo/Community/Migrating_from_2.x_to_3.0.0#Lazy_Activation_Bundles">migration notes</a> for more details.</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=326798">Bug 326798</a>: Configure Virgo's processing of Web Application Bundle manifest headers to
conform strictly to the OSGi Web Applications specification by default, as described above.
</li>
<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=350404">Bug 350404</a>: fix the way web applications are stopped so
more sophisticated web apps can be refreshed, or stopped and restarted, successfully.</li>
</ul>

<p>A full list of bug fixes included in this milestone is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=3.0.0.M06&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
$html = ob_get_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>