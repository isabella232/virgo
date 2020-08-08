<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2009, 2015 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost, Florian Waibel
 *
 *******************************************************************************/

	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Virgo - Release Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Christopher Frost";

	ob_start();
?>

<div id="midcolumn">

	<h2>Virgo Releases</h2>
	<p>
		Sample applications can be found on the <a href="https://www.eclipse.org/virgo/samples">Samples</a> page. All downloads are
		provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>
		unless otherwise specified.
	</p>

	<div id='accordion'>
        <h4><a href="#">3.7.4.RELEASE</a></h4>
        <div>
            <ul>
                <li><a href='release-notes/3.7.4.RELEASE.php' target='_self'>View Release Notes</a></li>
                <li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='https://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.4.RELEASE/virgo-tomcat-server-3.7.4.RELEASE.zip' target='_self'>Download</a></li>
                <li><strong>Virgo Jetty Server</strong> -  <a href='https://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.4.RELEASE/virgo-jetty-server-3.7.4.RELEASE.zip' target='_self'>Download</a> </li>
                <li><strong>Virgo Kernel</strong> - <a href='https://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.4.RELEASE/virgo-kernel-3.7.4.RELEASE.zip' target='_self'>Download</a></li>
                <!-- <li><strong>Virgo Nano</strong> - <a href='https://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.4.RELEASE/virgo-nano-3.7.4.RELEASE.zip' target='_self'>Download</a></li> -->
                <!-- <li><strong>Virgo Nano Full</strong> - <a href='https://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.4.RELEASE/virgo-nano-full-3.7.4.RELEASE.zip' target='_self'>Download</a></li> -->
            </ul>
        </div>

    	<h4><a href="#">3.7.3.RELEASE</a></h4>
        <div>
            <ul>
                <li><a href='release-notes/3.7.3.RELEASE.php' target='_self'>View Release Notes</a></li>
                <li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.3.RELEASE/virgo-tomcat-server-3.7.3.RELEASE.zip' target='_self'>Download</a></li>
                <li><strong>Virgo Jetty Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.3.RELEASE/virgo-jetty-server-3.7.3.RELEASE.zip' target='_self'>Download</a> </li>
                <li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.3.RELEASE/virgo-kernel-3.7.3.RELEASE.zip' target='_self'>Download</a></li>
                <li><strong>Virgo Nano</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.3.RELEASE/virgo-nano-3.7.3.RELEASE.zip' target='_self'>Download</a></li>
                <li><strong>Virgo Nano Full</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.3.RELEASE/virgo-nano-full-3.7.3.RELEASE.zip' target='_self'>Download</a></li>
                <!-- <li><strong>Virgo Snaps</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.2.RELEASE/snaps-3.7.2.RELEASE.zip' target='_self'>Download</a></li> -->
                <!-- <li><strong>Virgo Update Site</strong> - <a href='http://download.eclipse.org/virgo/release/updatesite/3.7.2.RELEASE' target='_self'>http://download.eclipse.org/virgo/release/updatesite/3.7.2.RELEASE</a></li> -->
            </ul>
            <p>
                <strong>Note:</strong> A defect has been reported against the last version of Gemini Web, the JSP Expression Language (EL) does not work see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=563105">Bug 563105</a>
            </p>
            <p>
                Virgo Server 3.7.3 is affected by the Gemini Web defect listed above, therefore the team agrees (see <a href="https://www.eclipse.org/lists/virgo-dev/msg01912.html">meeting notes</a>) to publish a new Virgo release once a fixed Gemini Web version is available.
            </p>
        </div>

        <h4><a href="#">3.7.2.RELEASE</a></h4>
        <div>
            <ul>
                <li><a href='release-notes/3.7.2.RELEASE.php' target='_self'>View Release Notes</a></li>
                <li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.2.RELEASE/virgo-tomcat-server-3.7.2.RELEASE.zip' target='_self'>Download</a></li>
                <li><strong>Virgo Jetty Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.2.RELEASE/virgo-jetty-server-3.7.2.RELEASE.zip' target='_self'>Download</a> </li>
                <li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.2.RELEASE/virgo-kernel-3.7.2.RELEASE.zip' target='_self'>Download</a></li>
                <li><strong>Virgo Nano</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.2.RELEASE/virgo-nano-3.7.2.RELEASE.zip' target='_self'>Download</a></li>
                <li><strong>Virgo Snaps</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.2.RELEASE/snaps-3.7.2.RELEASE.zip' target='_self'>Download</a></li>
                <li><strong>Virgo Update Site</strong> - <a href='http://download.eclipse.org/virgo/release/updatesite/3.7.2.RELEASE' target='_self'>http://download.eclipse.org/virgo/release/updatesite/3.7.2.RELEASE</a></li>
            </ul>
        </div>

        <!--

        <h4><a href="#">3.7.0.RELEASE</a></h4>
		<div>
			<ul>
				<li><a href='release-notes/3.7.0.RELEASE.php' target='_self'>View Release Notes</a>. (<a href="release-notes/3.7.0_approved_ip_log.html">Approved IP log</a>)</li>
				<li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.0.RELEASE/virgo-tomcat-server-3.7.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Jetty Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.0.RELEASE/virgo-jetty-server-3.7.0.RELEASE.zip' target='_self'>Download</a> </li>
				<li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.0.RELEASE/virgo-kernel-3.7.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Nano</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.7.0.RELEASE/virgo-nano-3.7.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Snaps</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VS/3.7.0.RELEASE/snaps-3.7.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Update Site</strong> - <a href='http://download.eclipse.org/virgo/updatesite/3.7.0.RELEASE' target='_self'>http://download.eclipse.org/virgo/updatesite/3.7.0.RELEASE</a></li>
			</ul>
		</div>

        -->

		<h4><a href="#">3.6.4.RELEASE</a></h4>
		<div>
			<ul>
				<li><a href='http://www.eclipse.org/virgo/download/release-notes/3.6.4.RELEASE.php' target='_self'>View Release Notes</a>. (<a href="release-notes/3.6.2_approved_ip_log.html">Approved IP log</a>)</li>
				<li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.6.4.RELEASE/virgo-tomcat-server-3.6.4.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Jetty Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.6.4.RELEASE/virgo-jetty-server-3.6.4.RELEASE.zip' target='_self'>Download</a> </li>
				<li><strong>Virgo Nano Web</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.6.4.RELEASE/virgo-nano-full-3.6.4.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.6.4.RELEASE/virgo-kernel-3.6.4.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Nano</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VP/3.6.4.RELEASE/virgo-nano-3.6.4.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Snaps</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VS/3.6.4.RELEASE/snaps-3.6.4.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Documentation</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VD/3.6.4.RELEASE/virgo-documentation-3.6.4.RELEASE.zip'>Download</a> | <a href='http://www.eclipse.org/virgo/documentation/' target='_self'>Browse</a></li>
				<li><strong>Virgo Update Site</strong> - <a href='http://download.eclipse.org/virgo/updatesite/3.6.4.RELEASE' target='_self'>http://download.eclipse.org/virgo/updatesite/3.6.4.RELEASE</a></li>
			</ul>
		</div>

        <!--

		<h4><a href="#">3.5.0.RELEASE</a></h4>
		<div>
			<ul>
				<li><a href='http://www.eclipse.org/virgo/download/release-notes/3.5.0.RELEASE.php' target='_self'>View Release Notes</a>. (<a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=218093">Approved IP log</a>)</li>
				<li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VTS/3.5.0.RELEASE/virgo-tomcat-server-3.5.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Jetty Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VJS/3.5.0.RELEASE/virgo-jetty-server-3.5.0.RELEASE.zip' target='_self'>Download</a> </li>
				<li><strong>Virgo Nano Web</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VN/3.5.0.RELEASE/virgo-nano-full-3.5.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VK/3.5.0.RELEASE/virgo-kernel-3.5.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Nano</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VN/3.5.0.RELEASE/virgo-nano-3.5.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Snaps</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VS/3.5.0.RELEASE/snaps-3.5.0.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Documentation</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VD/3.5.0.RELEASE/virgo-documentation-3.5.0.RELEASE.zip'>Download</a> | <a href='http://www.eclipse.org/virgo/documentation/' target='_self'>Browse</a></li>
				<li><strong>Virgo Update Site</strong> - <a href='http://download.eclipse.org/virgo/updatesite/3.5.0.RELEASE' target='_self'>http://download.eclipse.org/virgo/updatesite/3.5.0.RELEASE</a></li>
			</ul>
		</div>

		<h4><a href="#">3.0.3.RELEASE</a></h4>
		<div>
			<ul>
				<li><a href='http://www.eclipse.org/virgo/download/release-notes/3.0.3.RELEASE.php' target='_self'>View Release Notes</a>. (<a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=200883">Approved IP log</a>)</li>
				<li><strong>Virgo Server for Apache Tomcat</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VTS/3.0.3.RELEASE/virgo-tomcat-server-3.0.3.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Jetty Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VJS/3.0.3.RELEASE/virgo-jetty-server-3.0.3.RELEASE.zip' target='_self'>Download</a> </li>
				<li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VK/3.0.3.RELEASE/virgo-kernel-3.0.3.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Snaps</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VS/3.0.3.RELEASE/snaps-3.0.3.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Documentation</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VD/3.0.3.RELEASE/virgo-documentation-3.0.3.RELEASE.zip'>Download</a> | <a href='http://www.eclipse.org/virgo/documentation/' target='_self'>Browse</a></li>
			</ul>
		</div>

		<h4><a href="#">2.1.1.RELEASE</a></h4>
		<div>
			<ul>
				<li><a href='http://www.eclipse.org/virgo/download/release-notes/2.1.1.RELEASE.php' target='_self'>View Release Notes</a>. (<a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=179880">Approved IP log</a>)</li>
				<li><strong>Virgo Web Server</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VWS/2.1.1.RELEASE/virgo-web-server-2.1.1.RELEASE.zip' target='_self'>Download</a></li>
				<li><strong>Virgo Kernel</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VK/2.1.1.RELEASE/virgo-kernel-2.1.1.RELEASE.zip' target='_self'>Download</a></li>
			   	<li><strong>Virgo Documentation</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/VD/2.1.1.RELEASE/virgo-documentation-2.1.1.RELEASE.zip'>Download</a></li>
			</ul>
		</div>

		-->

	</div>

	<div>
		<h2>Virgo Bundlor Releases</h2>
		<p>
			All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a>
			unless otherwise specified.
		</p>

		<h4><a href="#">1.1.2.RELEASE</a></h4>
		<div>
			<ul>
			    <li><a href='http://www.eclipse.org/virgo/download/release-notes/bundlor/1.1.2.RELEASE.php' target='_self'>View Release Notes</a></li>
				<li>Update site - 'http://download.eclipse.org/virgo/release/BNDLR/1.1.2.RELEASE/updatesite'</li>
				<li><strong>Virgo Bundlor</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/BNDLR/1.1.2.RELEASE/bundlor-1.1.2.RELEASE.zip' target='_self'>Download</a></li>
			    <li><strong>Bundlor User Guide</strong> - <a href='http://www.eclipse.org/downloads/download.php?file=/virgo/release/BNDLR/1.1.2.RELEASE/user-guide.zip'>Download</a> | <a href='http://www.eclipse.org/virgo/documentation/' target='_self'>Browse</a></li>
			</ul>
		</div>
	</div>

    <!--

	<h2>Development Milestones</h2>
	<p>
		Development milestones are available for <a href="http://www.eclipse.org/virgo/download/milestones.php">download</a>.
	</p>

	-->

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
