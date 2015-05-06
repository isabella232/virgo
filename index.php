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
	$pageTitle 		= "Virgo - Home";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Home";
	$pageAuthor		= "Christopher Frost";
			
	ob_start();
?>
	<div id="midcolumn">
		
		<!-- <p id='announcement'>
		</p> -->

		<div class="logo"><img src="/virgo/images/virgo-logo.png" alt="Virgo"/></div>
		<p>
			Virgo from EclipseRT is a completely module-based Java application server
			that is designed to run enterprise Java applications and Spring-powered applications
			with a high degree of flexibility and reliability. It offers a simple yet comprehensive
			platform to develop, deploy, and service enterprise Java applications. 
		</p>
		<p>
			The Virgo kernel supports the core concepts of Virgo and is not biased towards the web
			server, thus enabling other types of server to be created. The kernel can also be used
			stand-alone as a rich OSGi application platform. A server runtime can easily be constructed
			by deploying suitable bundles on top of the kernel.
		</p>
		<p>
			Virgo features:
			<ul>
				<li>
					admin console - deploy and manage artifacts, examine diagnostic dumps,
					and examine bundle wiring, either in the live system or from a
					resolution failure
				</li>
				<li>
					Equinox console extension - manage Virgo and deployed artifacts
				</li>
				<li>
					plans - define the artifacts that comprise an application, optionally
					making the application atomic to tie the artifact lifecycles together,
					and scoped to isolate the application from other applications
				</li>
				<li>
					provisioning - automatically supply the dependencies of an application including
					bundles, plans, plan archives (PARs), and configurations, from both local
					and remote repositories
				</li>
				<li>
					web container - supports vanilla WAR files, with all their dependencies in
					<tt>WEB-INF/lib</tt>, and Web Application Bundles, that import their dependencies
					via OSGi manifest metadata, via the reference implementation
					of the OSGi Web	Container specification, based on embedded
					<a href="http://tomcat.apache.org/">Apache Tomcat</a>
					and configured using the standard Tomcat
					<tt>server.xml</tt>
				</li>
				<li>
					user region - isolates the kernel from user-installed applications and enables
					admins to focus on application artifacts and their dependencies without seeing
					those of the kernel as well
				</li>
				<li>
					Spring - Virgo packages Spring, but can easily be configured to
					use a different version of Spring
				</li>
				<li>
					hot deployment - deploy artifacts to Virgo by copying them into the <tt>pickup</tt> directory,
					either in archive or exploded form, as an alternative to deploying via the admin console
				</li>
				<li>
					legacy library support - enables third party libraries which were not designed for OSGi
					to function correctly, once they have been converted into OSGi bundles and deployed, through
					advanced support for thread context class loading, load time weaving, class path scanning, and
					implicit package use
				</li>
				<li>
					advanced resolution failure diagnostics - resolution failures are analysed and reported in
					meaningful terms, a dump is taken for offline analysis using the admin console, and the set
					of bundles being deployed is not committed to the runtime, preserving a cleanly resolved state  
				</li>
				<li>
					logging - via embedded LogBack, configured in
					<tt>config/serviceability.xml</tt>, with a rich set of appenders available out of the box
				</li>
				<li>
					automatic thread stack dump on deadlock
				</li>
			</ul>
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=159">Community Forum</a></li> 
				<li><a href="https://dev.eclipse.org/mailman/listinfo/virgo-dev">Developer Mailing List</a></li>
				<li><a href="http://wiki.eclipse.org/Virgo">Wiki</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;order=Importance;classification=RT;product=Virgo">Bugzilla</a></li>
			    <li><a href="https://hudson.eclipse.org/virgo/">Hudson CI</a></li>
			    <li><a href="http://www.eclipse.org/virgo/profiling">Profiling</a></li>
			    <li><a href="http://www.eclipse.org/virgo/analysis">Static Analysis</a></li>
			    <li>Search:
			    	<ul>
			    		<li><a href="http://virgo-opengrok.springsource.org/" title="This index is provided by VMware and may be withdrawn at any time.">OpenGrok</a> of Virgo master</li>
			    		<li><a href="http://grepcode.com/">GrepCode</a> of Virgo 2.1.0</li>
			    	</ul>
			    </li>
			    <li><a href="https://www.ohloh.net/p/eclipse_virgo">ohloh</a></li>
			    <li><a href="http://www.eclipse.org/virgo/documentation/design/">Design Documents</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Blogs</h6>
			<ul>
			    <li><a href="http://codersbrew.net">Chris Frost</a></li>
			    <li><a href="http://eclipsesource.com/blogs/author/fwaibel/">Florian Waibel</a> (lead)</li>
			    <li><a href="http://devshards.blogspot.it/search/label/Virgo">GianMaria Romanato</a></li>
				<li><a href="http://underlap.blogspot.com">Glyn Normington</a></li>
				<li><a href="http://eclipsedriven.blogspot.com/2011/06/how-to-create-felix-gogo-commands-with.html">Hendy Irawan</a></li>
				<li><a href="http://hsiliev.blogspot.com/">Hristo Iliev</a></li>
				<li><a href="http://www.redmonk.com/jgovernor/2008/02/05/osgi-and-the-rise-of-the-stackless-stack-just-in-time/">James Governor</a></li>
				<li><a title="compose a web app from code and resources distributed over many OSGi bundles. Modularization, finally!" href="http://joergviola.blogspot.com/2010/12/eclipse-virgo-snaps-modular-web-apps.html">J&ouml;rg Viola</a></li>
				<li><a href="http://www.onegeek.com.au/tag/virgo">Matthew Fellows</a></li>
				<li><a title="the next phase of Java development... the &ldquo;stackless stack&rdquo;" href="http://www.redmonk.com/cote/2010/01/13/virgo/">Michael Cot&eacute;</a></li>
				<li><a title="a technology that &ldquo;just worked&rdquo;... Light-weight development, light-weight deployment, industrial strength" href="http://milesparker.blogspot.com/2010/12/emf-and-rap-and-virgo-oh-my.html">Miles Parker</a></li>
				<li><a href="http://www.e-zest.net/Blog/post/OSGi-in-Practise-Part-2-(Spring-DM-Server-).aspx">Nitin Gupta</a></li>
				<li><a href="http://thomaskratz.blogspot.com/2010/11/porting-to-virgo-seeing-some-light.html">Thomas Kratz</a></li>
				<li><a href="http://maniagnosis.crsr.net/2010/06/requiescat-in-pace-springsource-dm.html">Tommy McGuire</a></li>
				<li><a href="http://touk.pl/blog/2011/04/19/modular-web-application-using-eclipse-snaps/">Touk Team</a></li>
				<li><a title= "the internal quality of this product seems to showcase what open-source can achieve" href="http://kindofsickbutcoolstill.blogspot.com/2010/09/open-source-and-code-quality.html">Whatever Gets You Up</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Presentations</h6>
			<ul>
				<li><a href="http://live.eclipse.org/node/937">Virgo Webinar, 31 August 2010</a></li>
				<li><a href="http://git.eclipse.org/c/virgo/org.eclipse.virgo.documentation.git/plain/presentations/EclipseCon%20USA%202014/Virgo%20Tutorial.pdf">Virgo Tutorial, EclipseCon NA 2014</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Virgo Powered</h6>
			<ul>
			    <li><a href="http://www.eclipse.org/virgo/references/cmegroup.php">CME Group</li>
			    <li><a href="http://bigblog.tportal.hr/btin#29857">Croatian Telecom</li>
			    <li><a href="http://underlap.blogspot.com/2011/10/how-infor-ion-uses-virgo.html">Infor ION</a></li>
			    <li><a href="http://www.konekti.org/">Konekti Platform</a></li>
			    <li><a href="http://www.infoq.com/news/2012/12/sap-netweaver-cloud">SAP NetWeaver Cloud</a></li>
				<li><a href="http://github.com/PouzinSociety/tinos">TINOS research project</a></li>
				<li><a href="http://underlap.blogspot.co.uk/2012/10/virgo-in-vsphere.html">VMware vSphere</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<div align="left" id="twtr-search-widget"></div>
			<script src="http://widgets.twimg.com/j/1/widget.js"></script>
			<link href="http://widgets.twimg.com/j/1/widget.css" type="text/css" rel="stylesheet">
			<script>
				new TWTR.Widget({
				  search: '#virgort',
				  id: 'twtr-search-widget',
				  loop: true,
				  title: 'What\'s being said about...',
				  subject: '#VirgoRT',
				  width: 240,
				  height: 400,
				  theme: {
				    shell: {
				      background: '#002E62',
				      color: '#ffffff'
				    },
				    tweets: {
				      background: '#ffffff',
				      color: '#444444',
				      links: '#002E62'
				    }
				  }
				}).render().start();
			</script>
			<br/><font size=-1>Follow: <a href="http://twitter.com/glynnormington">Glyn Normington</a>
			<br/>Follow: <a href="http://twitter.com/cgfrost">Christopher Frost</a></font>
		</div>
		<!-- div class="sideitem">
			<h6>&lt;h6&gt; tag</h6>
				<div class="modal">
					Wrapping your content using a div.modal tag here will add the gradient background
				</div>
		</div -->
	</div>

	
<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>