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

<h3>3.5.0.RELEASE - Release Notes</h3>

<p>
The <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Bondi</a> (3.5.0) release of Virgo
introduces two new fast-booting, low-footprint, single-region Nano and Nano Web distributions useful for embedding and other use cases where resource consumption is critical.
</p>

<p>
The release also upgrades Gemini Web support, provides a Virgo p2 repository and overall better integration with p2,
tightens up conformance with OSGi standards,
upgrades the Logback framework, includes Gemini Management, 
improves the deployer behaviour with respect to the new Subsystems standard,
and delivers several smaller enhancements and bug fixes.</p>
<p>
But before exploring the details, some thanks are due.
</p>

<h4>Acknowledgements</h4>

<p>Three new committers joined during this release and have made great contributions so far:
<ul>
    <li>Florian Waibel (Innoopract GmbH) - Subsystems function</li>
    <li>Lazar Kirchev (SAP AG) - admin shell </li>
    <li>Miles Parker (Tasktop) - tooling overhaul (not yet released)</li>
</ul>
</p>

<p>The Virgo committers would also like to thank the following people for their contributions:
<ul>
    <li>Dani&euml;l van 't Ooster</li>
    <li>Frieder Heugel</li>
    <li>Matthew T. Adams</li>
    <li>Radoslav Ivanov</li>
    <li>Rick Herrick</li>
    <li>Scott Brand</li>
    <li>C. Tran-Xuan</li>
</ul>
</p>

<p>We are also grateful for contributions in the form of bug reports, forum posts, and blogs
which were provided by individuals too numerous to mention.</p>

<h4>OSGi Standards Conformance</h4>
<p>By including the Gemini Blueprint bundles, Virgo now supports the OSGi Blueprint specification out of the box.</p>

<h4>Virgo Server for Apache Tomcat</h4>
<img src="http://tomcat.apache.org/images/tomcat-power.gif" alt="Powered By Tomcat logo" />
<p>
Virgo Tomcat Server is renamed to Virgo Server for Apache Tomcat to
comply with <a href="http://tomcat.apache.org/legal.html">Tomcat legal requirements</a>.
</p>

<h4>Virgo Nano and Nano Web</h4>
<p>
This release introduces two new Virgo flavours - Virgo Nano and Virgo Nano Web. They have low resource consumption, fast startup and a single region.
</p>
<p>
Virgo Nano is good for embedding use cases as it is really the starting point from which the other Virgo distributions are built.
Essentially it is an Equinox framework with hot-deployment capability and supportability features on top to aid developers.
</p>
<p>
Virgo Nano Web in addition to Virgo Nano provides a web layer via integration with Gemini Web.
This server supports hot-deploying both WARs and Web Bundles.
It is ideal for cloud and other use cases with stringent resource consumption and footprint requirements.
</p>

<h4>p2 Support</h4>
<p>
Virgo now supports initial provisioning via p2 director for all Virgo flavours. 
How to initial provision a Virgo instance is described well in Virgo's User Guide (5.3 Installing from an update site),
available <a href="http://www.eclipse.org/downloads/download.php?file=/virgo/release/VD/3.5.0.RELEASE/virgo-documentation-3.5.0.RELEASE.zip">here</a>. 
This also means Virgo now also has a common p2 repository for all Virgo distributions that can be found on our download page.
</p>
<p>
Using the p2 director users can also install and remove p2 features and normal bundles from Virgo Nano(Web) and from the kernel region of Virgo Kernel, Virgo Server for Apache Tomcat and Virgo Jetty Server.
</p>

<h4>Kernel Enhancements</h4>
<p>The kernel implementation of plans and PARs is substantially changed.
Plan and PARs are represented as subgraphs of the graph of artefacts.
Major changes are the ability to share artifacts between subgraphs, garbage collection
of left-over artifacts, and lifecycle management of shared subgraphs.
The underlying semantics are based on those of the OSGi Subsystems specification.
</p>
<p>
Plan artefacts may be specified by absolute "file:" URI instead of type, name,
and version range (satisfied from the repository).
</p>
<p>
Plans now support an optional "provisioning" attribute.
Setting this to "disabled" prevents Virgo from installing bundles from the repository
to attempt to satisfy any missing dependencies in the plan. This value can
make the plan deploy faster, although if there are missing dependencies,
deployment will fail.
</p>

<h4>Migration to 3.5.x</h4>
<p>
There are many infrastructural changes in this Virgo release. They are thoroughly described in our <a href="http://wiki.eclipse.org/Virgo/Community/Migrating_from_3.0.x_to_3.5.0">migration notes</a>. 
The changes include a slightly modified directory layout, symbolic name changes, new default launcher, impact on Logback's custom appenders and others.
</p>

<h4>Version Upgrades</h4>
<img src="http://www.eclipse.org/jetty/images/jetty-logo-80x22.png" alt="Jetty logo"/>
<img src="images/equinox-osgi.png" alt="Equinox" />
<p>The familiar Virgo Jetty Server is now upgraded to Jetty 8.1.1.</p>
<p>Equinox and other Eclipse bundles are upgraded to their Eclipse Juno bits.</p>
<p>Logback is now updated to version 1.0.0.</p>
<p>SLF4J is updated to version 1.6.4</p>

<h4>Enhancements and Fixes</h4>
<p>A full list of bugs and enhancements included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?priority=P1;priority=P2;priority=P3;priority=P4;priority=P5;list_id=2250459;bug_severity=blocker;bug_severity=critical;bug_severity=major;bug_severity=normal;bug_severity=minor;bug_severity=trivial;bug_severity=enhancement;classification=RT;op_sys=All;op_sys=AIX%20GTK;op_sys=AIX%20Motif;op_sys=HP-UX;op_sys=HP-UX%20GTK;op_sys=iOS;op_sys=Linux;op_sys=Linux-GTK;op_sys=Linux-Motif;op_sys=Linux%20Qt;op_sys=Mac%20OS%20X%20-%20Carbon%20%28unsup.%29;op_sys=Mac%20OS%20X;op_sys=Neutrino;op_sys=other;op_sys=QNX-Photon;op_sys=Solaris;op_sys=Solaris-GTK;op_sys=Solaris-Motif;op_sys=SymbianOS-Series%2080;op_sys=SymbianOS%20S60;op_sys=Symbian%20Qt;op_sys=Unix%20All;op_sys=Windows%20All;op_sys=Windows%2095;op_sys=Windows%2098;op_sys=Windows%202000;op_sys=Windows%20Server%202003;op_sys=Windows%20Server%202008;op_sys=Windows%207;op_sys=Windows%20CE;op_sys=Windows%20ME;op_sys=Windows%20Mobile%202003;op_sys=Windows%20Mobile%205.0;op_sys=Windows%20NT;op_sys=Windows%20XP;op_sys=Windows%20Vista;op_sys=Windows%20Vista-WPF;query_format=advanced;rep_platform=All;rep_platform=Macintosh;rep_platform=Other;rep_platform=PC;rep_platform=Power%20PC;rep_platform=Sun;bug_status=CLOSED;version=unspecified;version=2.1.0.M01;version=2.1.0.M02-incubation;version=2.1.0.M03-incubation;version=2.1.0.M04-incubation;version=2.1.0.M05-incubation;version=2.1.0.M06-incubation;version=2.1.0.RC1;version=2.1.0.RC1-incubation;version=2.1.0.RELEASE;version=2.2.0.M01;version=3.0.0.M01;version=3.0.0.M02;version=3.0.0.M03;version=2.1.1.RELEASE;version=3.0.0.M04;version=2.3.0.RELEASE;version=3.0.0.M05;version=3.0.0.M06;version=3.0.0.RC1;version=3.0.0.RC2;version=3.0.0.RELEASE;version=3.0.1.RELEASE;version=1.1.0.M02;version=3.0.2.RELEASE;version=3.1.0.M01;version=3.5.0.M02;version=3.5.0.M03;version=3.0.3.RELEASE;version=3.5.0.M04;version=1.1.0.RELEASE;version=2.5.0.RELEASE;component=bundlor;component=documentation;component=jetty;component=runtime;component=samples;component=snaps;component=tooling;component=unknown;component=virgo-build;component=web-admin;target_milestone=3.5.0.M01;target_milestone=3.5.0.M02;target_milestone=3.5.0.M03;target_milestone=3.5.0.M04;target_milestone=3.5.0.M05;target_milestone=3.5.0.RC1;target_milestone=3.5.0.RELEASE;product=Virgo" target="_self">here</a>.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

