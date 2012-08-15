<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2010 VMware Inc.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Glyn Normington
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo: the Ideal OSGi Server Runtime?";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, benefits, ideal";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Virgo: the Ideal OSGi Server Runtime?</h2>
		<p>
			Virgo is an ideal OSGi server runtime, possibly <i>the</i> ideal OSGi server runtime, from several perspectives.
		</p>
		
		<h3>Standard OSGi</h3>
		<p>
			Virgo supports all the standard features of OSGi; encapsulated modules or <i>bundles</i>, a powerful service
			registry, versioning, class space isolation, sharing of dependencies, dynamic refreshing and updating, and much more. 
		</p>
		
		<h3>Bundles all the way down</h3>
		<p>
			Virgo was designed from the ground up as OSGi bundles so it's extremely modular and extensible.
		</p>
		<p>
			For example, the core of the runtime is the Virgo kernel which is built on the relatively tiny Virgo Nano runtime.
			Virgo Tomcat Server is constructed by configuring a web layer, an admin console, and some other utilities on top of the kernel.
			Similarly the Virgo Jetty Server is constructed by configuring a collection of Jetty bundles, the admin console, and other utilities on top of the kernel.
		</p>
		<p>
			The kernel protects itself from interference from such additions, and from applications, by running them in a separate user region.
			The kernel and user region are isolated from each other using standard OSGi defined hooks with sharing controlled by a user region configuration file.
			This separation enables applications to use a different version of the Spring framework to that used by the kernel.
		</p>
		<p>
			All the major Java EE application servers are now built on top of OSGi, but only Virgo
			was <i>designed</i> for OSGi and didn't need OSGi to be retrofitted.
		</p>
		
		<h3>Extra features</h3>
		<p>
			Virgo provides a multi-bundle application model to simplify the deployment and management of non-trivial
			applications.
		</p>
		<p>
			Virgo also provides a repository which can store dependencies such as OSGi bundles which are
			"faulted in" when needed. This results in cleaner definitions of applications and a small footprint compared to
			traditional Java EE servers which pre-load many features just in case an application needs them.
		</p>
		<p>
			The major Java EE application servers are beginning to follow suit in exposing an application model, so Virgo committers
			are working with others in the OSGi Alliance to produce a standard multi-bundle application construct.
		</p>
		
		<h3>Existing Java libraries</h3>
		<p>
			Virgo enables existing Java libraries to run successfully
			in an OSGi environment. Ok, you have to convert them to bundles first, but then the Virgo kernel supports
			thread context class loading, load time weaving, classpath scanning, and a number of other features which
			are commonly used by persistence providers and other common Java utilities.
		</p>
		<p>
			Essentially, we observed the commonly-occurring problems when people attempted to migrate to OSGi and
			implemented general solutions to those problems early on.
		</p>

		<h3>Container integration</h3>
		<p>
			Virgo integrates OSGi with Spring and a servlet container.
		</p>
		<p>
			Virgo uses <a href="http://www.eclipse.org/gemini/blueprint/">Gemini Blueprint</a> (formerly Spring DM) to wire application contexts to the OSGi service registry.
			Beans can be published as OSGi services and can consume OSGi services, both with minimal effort.
		</p>
		<p>
			The embedded form of Tomcat is used as a servlet engine in Virgo Tomcat Server's web support and is configured and managed just like standard Tomcat.
			Similarly, Jetty is the servlet engine in Virgo Jetty Server.
		</p>

		<h3>Diagnostics++</h3>
		<p>
			Virgo has extensive diagnostics:
			<ul>
				<li>
					An admin console lets you examine the state of all artifacts deployed in Virgo as well as explore the state
					of bundles in the OSGi framework.
				</li>
				
				<li>
					Virgo provides multiple types of diagnostics: event logging aimed at administrators, diagnostics logging
					aimed at developers, as well as various types of diagnostic dumps.
				</li>
				
				<li>
					Virgo builds on <a href="http://logback.qos.ch/">Logback</a> to support highly configurable and efficient logging.
				</li>
				
				<li>
					When an application is deployed, Virgo first resolves the application in a "side state" and, if resolution fails,
					no changes are committed to the OSGi framework and the side state is dumped to disk so that it can be analysed
					using the OSGi state inspector in the admin console.
				</li>

				<li>
					If a resolution failure occurs, Virgo also analyses the resolver error, including the root causes of any
					<a href="http://blog.springsource.com/2008/10/20/understanding-the-osgi-uses-directive/">uses constraint</a>
					violation, and extracts a meaningful message to include in an exception which is then thrown.
				</li>

				<li>
					Virgo adds advanced diagnostics to Spring DM to track the starting of bundles and their application contexts and
					issue error messages on failure and warnings when dependencies are delayed.
				</li>

				<li>
					Virgo automatically detects deadlocks and generates a thread stack dump.
				</li>
			</ul>
		</p>
		
		<h3>Advanced tooling</h3>
		<p>
			Virgo tooling support is provided in the
			<a href="http://www.springsource.com/developer/sts">SpringSource Tool Suite</a> or in standard Eclipse via an
			<a href="http://www.springsource.org/dmservertools">update site</a>. This enables a Virgo server to run under the control
			of the tooling, applications to be deployed, debugged, and updated by the tooling, and package and service dependencies
			between bundles to be analysed. The Virgo tooling will also be donated to Eclipse in due course.
		</p>
		
		<h3>Future proof</h3>
		<p>
			Virgo is an open source Eclipse project with a liberal license and
			active participation from multiple vendors, which positions it ideally for the future.
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>