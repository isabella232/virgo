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

<h3>2.1.0.RELEASE - Release Notes</h3>

<p>The 2.1.0 release is the first formal release of Virgo and is aimed at migrating SpringSource dm Server applications and users to Virgo.
See the <a href="http://wiki.eclipse.org/Virgo/Community/Migrating_from_dm_Server">migration notes</a> for details.</p>

<h4>Acknowledgements</h4>

<p>Code and documentation contributions were gratefully received from:</p>
<ul>
    <li>Violeta Georgieva (SAP AG)</li>
    <li>Olivier Girardot</li>
    <li>Hristo Illiev (SAP AG)</li>
    <li>Borislav Kapukaranov (SAP AG)</li>
    <li>Dmitry Sklyut (Chariot Solutions)</li>
    <li>Nikolai Tankov (SAP AG)</li>
    <li>Florian Waibel (EclipseSource)</li>
</ul>

<p>Contributions in the form of bug reports, forum posts, blogs, and tweets were gratefully received from individuals too numerous to mention.</p>

<h4>Highlights</h4>

<p>Code donations (<a href="http://wiki.eclipse.org/Virgo/Source">source code</a>), repackaged to the org.eclipse namespace and relicensed under the Eclipse Public License v1.0:</p>
<ul>
    <li>Donate SpringSource dm Server to form the Virgo kernel, Virgo web server, and built-in applications such as the admin console</li>
    <li>Donate documentation</li>
    <li>Donate GreenPages, Formtags, Config properties, and OSGi samples</li>
    <li>Donate the dm Server 'slices' prototype for modular web applications, renamed to the 'snaps' prototype</li>
    <li>Donate "Spring Build" Ant/Ivy build scripts, renamed to "Virgo build"</li>
    <li>Donate integration test framework and OSGi test stubs</li>
    <li>Donate extensive unit and integration test suites, kernel system verification tests, and performance test</li>
    <li>Donate Virgo tooling integration layer</li>
</ul>
<p>Performance improvements:</p>
<ul>
    <li>Reduce startup time by as much as 5x on some systems by tuning logging</li>
    <li>Remove unnecessary bundles from the kernel and shrink the classpath</li>
</ul>
<p>Dependency upgrades:</p>
<ul>
    <li>Upgrade Equinox to 3.6.1</li>
    <li>Upgrade Tomcat to 6.0.29 (plus modifications to support embedding)</li>
    <li>Upgrade Logback to 0.9.24</li>
    <li>Upgrade SLF4J to 1.6.1</li>
    <li>Upgrade the OSGi web container to
      <a href="http://www.eclipse.org/gemini/web/download/release-notes/1.1.0.RELEASE.php">Gemini Web 1.1.0.RELEASE</a></li>
</ul>
<p>Other improvements and bug fixes:<p/>
<ul>
	<li>Bug 323347/326140: Improve permission handling in Windows startup scripts and document a workaround</li>
    <li>Bug 323609: Severe logging performance issue under Windows in certain scenarios</li>
	<li>Bug 325334: Import-Bundle of fragment that does not specify bundle version range</li>
	<li>Bug 326423: Allow Logback to be configured via logback.xml in root of a bundle</li>
	<li>Bug 327209: Improve deployer cleanup logic for certain kinds of bundle install failures</li>
	<li>Bug 327211: Clearly separate bundle symbolic name from bundle version in admin console</li>
	<li>Bug 312752: Support Tomcat context configuration</li>
	<li>Provide 'vsh' (Virgo shell) Equinox console extension</li>
	<li>Support new framework property org.eclipse.virgo.suppress.heap.dumps and document it in User Guide</li>
	<li>Various documentation fixes and improvements.</li>
	<li>Various diagnostic improvements</li>
	<li>Various build and test improvements</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=2.1.0.M01&target_milestone=2.1.0.M02-incubation&target_milestone=2.1.0.M03-incubation&target_milestone=2.1.0.M04-incubation&target_milestone=2.1.0.M05-incubation&target_milestone=2.1.0.M06-incubation&target_milestone=2.1.0.RC1-incubation&target_milestone=2.1.0.RELEASE&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>