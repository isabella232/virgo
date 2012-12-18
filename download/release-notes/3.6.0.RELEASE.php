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

<h3>3.6.0.RELEASE - Release Notes</h3>

<p>
	The <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Sky</a> (3.6.0) release of Virgo
	supports Java EE Web Profile applications in Virgo Nano Web,
	introduces a rewritten and extended web administration console into all Virgo runtimes, and support Java 7.
</p>

<p>
	The release also upgrades Gemini Web, including the embedded Apache Tomcat (with WebSocket support), Gemini Blueprint, Spring framework, Gogo, Logback, and SLF4J
	and delivers numerous smaller enhancements and bug fixes.</p>

<h4>Acknowledgements</h4>

<p>The Virgo committers would like to thank the following people for their contributions:
<ul>
    <li>Alex Antonov - for a bundlor fix</li>
    <li>David Normington - for the initial implementation of the web admin console wiring panel</li>
    <li>Polina Genova - for the bulk deployment feature of the Nano deployer</li>
</ul>
</p>

<p>
	We are also grateful for contributions in the form of bug reports, forum posts, and blogs
	which were provided by individuals too numerous to mention.
</p>

<h4>Java EE Web Profile Support</h4>

<p>
	Several open source Java EE API implementations are integrated into Nano Web to support applications written to the Java EE Web Profile.
</p>
<p>
	This dramatically lowers the barrier to adoption of Virgo for a large class of existing enterprise Java applications.
</p>
<p>
	The following table shows the APIs supported and the components that provide them.
	<table>
    <tr>
        <td>Specification</td>
        <td>Packages</td>
        <td>Component</td>
    </tr>
    <tr>
    	<td>JavaServer Faces (JSF) 2 </td>
        <td>javax.faces.*</td>
        <td></td>
    </tr>
    <tr>
    	<td>Servlet 3 and Java Server Pages</td>
        <td>javax.servlet.*</td>
        <td>Gemini Web (embedded Apache Tomcat)</td>
    </tr>
    <tr>
        <td>Contexts and Dependency Injection (CDI)</td>    	
        <td>javax.enterprise.context<br/>javax.enterprise.inject</td>
        <td>OpenWebBeans</td>
    </tr>
    <tr>
    	<td>Enterprise JavaBean (EJB) 3.1 Lite</td>
        <td>javax.ejb.*</td>
        <td>OpenEjb</td>
    </tr>
    <tr>
    	<td>Bean Validation</td>
        <td>javax.validation</td>
        <td></td>
    </tr>
    <tr>
    	<td>Java Persistence API (JPA) 2</td>
        <td>javax.persistence.*</td>
        <td></td>
    </tr>
    <tr>
    	<td>Java Transaction API (JPA)</td>
        <td>javax.transaction.*</td>
        <td></td>
    </tr>
  	</table>

</p>
<p>
	For more information, see this <a href="http://jaxenter.com/introducing-the-java-ee-web-profile-36201.html">article on the web profile</a>
	and the Wikipedia entry on <a href="http://en.wikipedia.org/wiki/Java_Platform,_Enterprise_Edition">Java Platform, Enterprise Edition</a>.
</p>

<h4>New Web Administration Console</h4>

<p>
	The web administration console, described in <a href="http://codewax.org/eclipse/new-web-admin-console-in-virgo/">this blog</a>,
	has been completely rewritten and extended and is now provided with all Virgo runtimes.
</p>
<p>
	Below are samples of the various panels - click on a panel to see it at full size in a separate window.
	Each panel is displayed only on Virgo runtimes that support it, which essentially means that
	certain panels are not available on Nano and Nano Web.
	<img src="images/webadmin/map.jpg" usemap="#map" width="932" height="502">
	<map id="map" name="map">
	<area shape="rect" alt="Web Admin Console overview" title="" coords="2,6,310,142" href="images/webadmin/overview.png" target="_blank" />
	<area shape="rect" alt="Web Admin Console artifacts" title="" coords="314,6,622,142" href="images/webadmin/artifacts.png" target="_blank" />
	<area shape="rect" alt="Web Admin Console repositories" title="" coords="626,4,936,144" href="images/webadmin/repositories.png" target="_blank" />
	<area shape="rect" alt="Web Admin Console wirings" title="" coords="300,146,634,356" href="images/webadmin/wirings.png" target="_blank" />
	<area shape="rect" alt="Web Admin Console dumps" title="" coords="0,362,310,506" href="images/webadmin/dumps.png" target="_blank" />
	<area shape="rect" alt="Web Admin Console configurations" title="" coords="314,362,624,508" href="images/webadmin/configurations.png" target="_blank" />
	<area shape="rect" alt="Web Admin Console logging" title="" coords="628,360,932,502" href="images/webadmin/logging.png" target="_blank" />
</map>
</p>

<h4>Java 7 Support</h4>

<p>
	Java 7 is now supported in addition to Java 6.
</p>

<p>
	Note that Spring framework 3.1.3 or 3.2 is required to fix a known performance problem on JDK 1.7.0_06 or later
	(see <a href="https://jira.springsource.org/browse/SPR-9781">SPR-9781</a>).
	Users can upgrade  Spring framework as described in the
	<a href="http://wiki.eclipse.org/Virgo/FAQ#How_can_I_change_the_version_of_Spring_framework_in_the_user_region.3F">FAQ</a>.
</p>

<h4>Miscellaneous Improvements</h4>

<ul>
	<li>Bulk hot deployment of initial pickup artifacts in Virgo Nano</li>
	<li>All Virgo distributions' p2 profiles published with a custom Java Server Profile such that the p2 resolution exactly matches the runtime content</li>
	<li>Work directory paths shortened to alleviate Windows filesystem limitations.</li>
	<li>Bundles and WAR files may be deployed in packed form to shorten work directory paths further.
		See the <a href="http://www.eclipse.org/virgo/documentation/virgo-documentation-3.6.0.M01/docs/virgo-user-guide/html/ch13s06.html">User Guide</a> for
		the kernel configuration property deployer.unpackBundles.
	</li>
	<li>New 'tee' system stream capture mode - that prints both system outs and errs in the logs and on the default system output</li>
	<li>Support for nested web context path in Nano Web - this allows users to install a war with web context path of the form 'my/war/application'</li>
	<li>Support for Spring framework 3.2.x</li>
	<li>Fragments may attach to multiple hosts for closer conformance to the OSGi specifications</li>
	<li>Logging configuration may be changed without restart Virgo, via the web admin console or JMX</li>
</ul>

<h4>Migration to 3.6.0</h4>
<p>
There are infrastructural changes in this Virgo release which are thoroughly described in our <a href="http://wiki.eclipse.org/Virgo/Community/Migrating_from_3.5.x_to_3.6.0">migration notes</a>. 
</p>

<h4>Version Upgrades</h4>
<img src="http://www.eclipse.org/jetty/images/jetty-logo-80x22.png" alt="Jetty logo"/>
<img src="images/equinox-osgi.png" alt="Equinox" />
<li>Equinox is upgraded to its Juno SR1 version</li>
<p>Gemini Web is upgraded to 2.2.0 (embedded Apache Tomcat is upgraded to 7.0.32 with WebSocket support)</p>
<p>Gemini Blueprint is upgraded to 1.0.2</p>
<p>Spring framework is upgraded to 3.1.0</p>
<p>Apache Felix Gogo is updated to version 0.10.0.</p>
<p>Logback is updated to version 1.0.7.</p>
<p>SLF4J is updated to version 1.7.2</p>

<h4>Enhancements and Fixes</h4>
<p>A full list of bugs and enhancements included in this release is available
	<a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=3886983&classification=RT&query_format=advanced&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&product=Virgo&target_milestone=3.6.0.M01&target_milestone=3.6.0.M02&target_milestone=3.6.0.M03&target_milestone=3.6.0.M04&target_milestone=3.6.0.M05&target_milestone=3.6.0.RC1&target_milestone=3.6.0.RELEASE" target="_self">here</a>.</p>

</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

