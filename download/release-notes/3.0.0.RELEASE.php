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

<h3>3.0.0.RELEASE - Release Notes</h3>

<p>The <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Maya</a> (3.0) release of Virgo
introduces a new Jetty-based web server download as well as improving the integration with other EclipseRT technologies,
delivers the <em>snaps</em> framework for modular web applications,
and provides a new shell with telnet and ssh access.
</p>
<p>
The release also upgrades Gemini Web to pick up Tomcat 7 and Servlet 3.0 support,
tightens up conformance with OSGi standards,
upgrades Spring framework,
provides an updated GreenPages sample application,
improves resource lookup performance,
and delivers several smaller enhancements and bug fixes.</p>
<p>
But before exploring the details, some thanks are due.
</p>

<h4>Acknowledgements</h4>

<p>Several new committers joined during this release, got up to speed quickly, and made a major contribution to the release content:
<ul>
    <li>Borislav Kapukaranov (SAP AG)</li>
    <li>Dmitry Sklyut (Chariot Solutions)</li>
    <li>Hristo Illiev (SAP AG)</li>
    <li>Violeta Georgieva (SAP AG)</li>
</ul>
</p>

<p>The Virgo committers would like to thank the following people.</p>
	
<p>Tom Watson led the work to move the region digraph bundle from Virgo to Equinox and subsequently extended and enhanced the function.</p>

<p>Lazar Kirchev led the work on the Gogo shell.</p>

<p>Code and documentation contributions were received from:
<ul>
    <li>Joel Rosi-Schwartz (Etish)</li>
    <li>Lazar Kirchev (SAP AG)</li>
    <li>Patsy Phelan (TSSG)</li>
    <li>Radoslav Ivanov (SAP AG)</li>
    <li>Rick Herrick (NRG)</li>
</ul>
</p>

<p>Contributions in the form of bug reports, forum posts, and blogs were provided by individuals too numerous to mention.</p>

<h4>Jetty Support and EclipseRT Integration</h4>
<img src="http://www.eclipse.org/jetty/images/jetty-logo-80x22.png" alt="Jetty logo"/>
<img src="images/equinox-osgi.png" alt="Equinox" />
<p>In addition to the familiar Tomcat-based web server download
known as "Virgo Tomcat Server" (formerly "Virgo Web Server"), Virgo now provides a web server download known as "Virgo Jetty Server" based on Jetty 7.4.2
and Servlet 2.5.
</p>
<p>
Equinox implementations of the OSGi Configuration Admin and Event Admin services are used instead of their Felix counterparts (which were used in earlier releases).
</p>
<p>
<em>Integration with p2 is deferred to a future release.</em>
</p>

<h4>Snaps</h4>
<p>
The <a href="http://wiki.eclipse.org/Virgo/Future#Snaps">snaps</a> framework for modular web applications, previously known as "slices",
is now available for general use.
</p>
<p>
Snaps is provided as a separate download complete with a new "Virgo Snaps User Guide"
(also available <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.0.0.RELEASE/docs/snaps-guide/htmlsingle/virgo-snaps-guide.html">online</a>),
and a comprehensive sample application. The Guide describes how to install snaps on top of Virgo Tomcat Server and
then uses the sample application to verify the installation and demonstrate all the major features of snaps.
</p>
<img src="images/snaps-sample.png" alt="snaps sample" height="25%"/>

<h4>Gogo Shell</h4>
<p>
A new shell, based on Apache Felix <a href="http://felix.apache.org/site/apache-felix-gogo.html">Gogo</a>, is provided for both kernel and user region.
Access is via ssh or telnet, although both are disabled by default.
</p>
<img src="images/gogo.png" alt="Gogo shell" />
<p>
The User Guide <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.0.0.RELEASE/docs/virgo-user-guide/html/ch06.html#admin-shell-enable">explains</a>
how to enable, re-configure, and log in to the shell.
</p>

<h4>Gemini Web Upgrade</h4>
<img src="images/gemini-logo.png" alt="Gemini logo" />
<img src="http://tomcat.apache.org/images/tomcat.gif" alt="Tomcat logo" />
<p>
Virgo Tomcat Server is upgraded to Gemini Web to 2.0.0.RELEASE and thence to Tomcat 7, Servlet 3.0, JSP 2.2, and EL 2.2.
</p>

<h4>OSGi Standards Conformance</h4>
<p>
The kernel is upgraded to the stable Indigo release (3.7.0.v20110613) of Equinox and thence to OSGi R4.3.
This upgrade also tightens up the processing of Require-Bundle as described in <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=343050">bug 343050</a>.
</p>
<p>
Declarative Services and the OSGi Log Service are supported out of the box.
</p>
<p>
OSGi standard semantics for starting lazy activation bundles are adopted so that such bundles are eagerly started as they are deployed.
See the <a href="http://wiki.eclipse.org/Virgo/Community/Migrating_from_2.x_to_3.0.0#Lazy_Activation_Bundles">migration notes</a> and
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=346775">bug 346775</a> for more details.
</p>
<p>
Virgo's regions are re-implemented in terms of OSGi framework hooks, which were standardised in OSGi R4.3, instead of the
deprecated Equinox support for composite bundles. The web admin console and the shell are upgraded to reflect the new region support.
</p>
<p>
Virgo Tomcat Server's <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.0.0.RELEASE/docs/virgo-programmer-guide/html/ch04s06.html">Web Application Manifest Processing</a> conforms to the OSGi specification.
<em>This is a backward incompatible change compared to Virgo Web Server 2.1.x.</em>
As a migration aid, <em>which may be removed in future releases</em>, the previous behaviour may be re-instated by <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.0.0.RELEASE/docs/virgo-user-guide/html/ch11s08.html">configuring the Web Integration Layer</a>.
<em>Please note there is a <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.0.0.RELEASE/docs/virgo-user-guide/html/apbs07.html">known issue</a>
with certain WAR files which may be worked around using this migration aid.</em>
</p>

<h4>Spring Framework Upgrade</h4>
<img src="http://www.springsource.com/files/uploads/all/images/product/Logo_Spring_252x150.png" alt="Spring framework logo" />
<p>
Spring Framework is upgraded to 3.0.5.RELEASE.
</p>
<p>
Since Spring 2.5 is incompatible with Servlet 3.0, users of Virgo Tomcat Server are no longer able to downgrade the Spring framework in the user region to a version lower
than 3.0.
</p>

<h4>Updated GreenPages Sample</h4>
<img src="images/greenpages.png" alt="GreenPages sample" />
<p>
The GreenPages sample has been updated to work with Virgo Tomcat Server 3.0.
</p>
<p>
The document "Creating an Application with Virgo" has being replaced with a "Guide to the GreenPages Sample" which is provided with the sample
and is also available as part of the distribution.
</p>

<h4>Migrating from Earlier Releases</h4>

<p>Users of earlier releases should refer to the <a href="http://wiki.eclipse.org/Virgo/Community/Migrating_from_2.x_to_3.0.0">migration notes</a> for
help in moving to this release.</p>

<h4>Incubator Bundles</h4>

<p>
Note that two bundles included from the Equinox project are in incubation status.
</p>
<p>
The Region Digraph bundle was moved from Virgo to Equinox and is in a stable, well-tested state.
</p>
<p>
The Console Supportability bundle, which integrates the Apache Felix Gogo shell, is in incubation status mainly because it depends on interfaces that were
being worked on in the OSGi Alliance. However, the Alliance has decided not to continue that particular piece of specification work since Gogo is already proving to be
a popular, reusable console.
</p>


<h4>Other Features</h4>

<ul>
	<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=335689">Bug 335689</a>: Allows PARs to contain plans.</li>
	<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=332911">Bug 332911</a>: Expose Virgo's class loading diagnostic commands to JMX.</li>
	<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=337822">Bug 337822</a>: Add the -noStart option to dmk.sh/dmk.bat. This is useful when there is a <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.0.0.RELEASE/docs/virgo-user-guide/html/apbs05.html">problem deleting the Virgo installation directory under Windows</a>.</li>
	<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=347120">Bug 347120</a>: Include the logging level in (trace) log entries.</li>
	<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=350404">Bug 350404</a>: Fix the way web applications are stopped so
	more sophisticated web apps can be refreshed, or stopped and restarted, successfully.</li>
	<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=343346">Bug 343346</a>: Speed up JSP compilation.</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Virgo&query_format=advanced&target_milestone=2.2.0.M02&target_milestone=2.4.0.RELEASE&target_milestone=3.0.0.M01&target_milestone=3.0.0.M02&target_milestone=3.0.0.M03&target_milestone=3.0.0.M04&target_milestone=3.0.0.M05&target_milestone=3.0.0.M06&target_milestone=3.0.0.RC1&target_milestone=3.0.0.RC2&target_milestone=3.0.0.RELEASE&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>