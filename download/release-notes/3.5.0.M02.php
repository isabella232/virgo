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

<h3>3.5.0.M02 - Release Notes</h3>

<p>The <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Bondi</a> (3.5.0) release of Virgo</p>
<p>
This is the second milestone for the Virgo Bondi (3.5.0) release.</p>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?priority=P1;priority=P2;priority=P3;priority=P4;priority=P5;list_id=162512;bug_severity=blocker;bug_severity=critical;bug_severity=major;bug_severity=normal;bug_severity=minor;bug_severity=trivial;bug_severity=enhancement;resolution=---;resolution=FIXED;resolution=INVALID;resolution=WONTFIX;resolution=DUPLICATE;resolution=WORKSFORME;resolution=MOVED;resolution=NOT_ECLIPSE;classification=RT;op_sys=All;op_sys=AIX%20GTK;op_sys=AIX%20Motif;op_sys=HP-UX;op_sys=HP-UX%20GTK;op_sys=iOS;op_sys=Linux;op_sys=Linux-GTK;op_sys=Linux-Motif;op_sys=Linux%20Qt;op_sys=Mac%20OS%20X;op_sys=Mac%20OS%20X%20-%20Cocoa;op_sys=Neutrino;op_sys=other;op_sys=QNX-Photon;op_sys=Solaris;op_sys=Solaris-GTK;op_sys=Solaris-Motif;op_sys=SymbianOS-Series%2080;op_sys=SymbianOS%20S60;op_sys=Symbian%20Qt;op_sys=Unix%20All;op_sys=Windows%20All;op_sys=Windows%2095;op_sys=Windows%2098;op_sys=Windows%202000;op_sys=Windows%20Server%202003;op_sys=Windows%20Server%202008;op_sys=Windows%207;op_sys=Windows%20CE;op_sys=Windows%20ME;op_sys=Windows%20Mobile%202003;op_sys=Windows%20Mobile%205.0;op_sys=Windows%20NT;op_sys=Windows%20XP;op_sys=Windows%20Vista;op_sys=Windows%20Vista-WPF;query_format=advanced;rep_platform=All;rep_platform=Macintosh;rep_platform=Other;rep_platform=PC;rep_platform=Power%20PC;rep_platform=Sun;bug_status=RESOLVED;bug_status=CLOSED;version=unspecified;version=2.1.0.M01;version=2.1.0.M02-incubation;version=2.1.0.M03-incubation;version=2.1.0.M04-incubation;version=2.1.0.M05-incubation;version=2.1.0.M06-incubation;version=2.1.0.RC1;version=2.1.0.RC1-incubation;version=2.1.0.RELEASE;version=2.2.0.M01;version=3.0.0.M01;version=3.0.0.M02;version=3.0.0.M03;version=2.1.1.RELEASE;version=3.0.0.M04;version=2.3.0.RELEASE;version=3.0.0.M05;version=3.0.0.M06;version=3.0.0.RC1;version=3.0.0.RC2;version=3.0.0.RELEASE;version=3.0.1.RELEASE;version=1.1.0.M02;version=3.0.2.RELEASE;version=3.1.0.M01;component=documentation;component=jetty;component=runtime;component=samples;component=snaps;component=tooling;component=unknown;component=virgo-build;component=web-admin;target_milestone=3.5.0.M02;product=Virgo" target="_self">here</a>.</p>

<h4>Highlights</h4>
<p>From 3.5.0 onward, Virgo can be initial provisioned via p2. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=343543">Bug 343543</a> and its dependencies track the work done on this topic. Now it's possible, using the standard p2 director, to provision every Virgo distribution.</p>
<p>From this milestone onward we decided split the Nano offering in two - the smallest one - Nano - serves as an enhanced OSGi container with various serviceability features and hot-deployment for your everyday bundles. The other flavor - Virgo Nano Full - is a more complete, yet very small web-server with embedded Tomcat, p2 provisioning and various serviceability features. Virgo Nano Full comes bundled with Gemini Web and is therefore capable of handling web applications (WARs and Web Application Bundles). Each Nano distribution runs in a single region. </p>
<p>We also revised the directory layout in this milestone so it's closer to the classic Virgo layout familiar to users.</p>
<p>Spring Framework is removed from the Nano runtime, this gives you freedom to bring your desired Spring Framework version on board without being constrained by our choice.</p>
<p>Hot-deployment is now available out of the box for Virgo Nano too.</p>
<p>The shell configuration is now contained in a single properties file.</p>
<p>This milestone also includes many bugfixes and other enhancements.</p>
<h4>Notable leftovers for future milestones (3.5.0.M03+)</h4>
<p>Improved Virgo Tooling.</p>
<p>Improved Virgo Web Console.</p>
<p>Various Virgo Nano enhancements covered with <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=364571">this bug</a>.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>