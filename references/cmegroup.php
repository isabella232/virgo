<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2012 VMware Inc.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Glyn Normington
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "CME Group";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, References, CME Group";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>CME Group</h2>
		<p>
		    <a href="http://www.cmegroup.com/">CME Group</a>, formerly known as
            Chicago Mercantile Exchange Holdings Inc., was founded in 1898 and
			operates the CME, CBOT, NYMEX, and COMEX regulatory exchanges
			worldwide. It is the world&#8217;s leading derivatives marketplace with 2570
			full time employees and a market capitalisation of over $15B.
		</p>
        <p>
        CME Group kindly released the following information in January 2012.
		</p>
        <p>        
        At CME Group, the goals for our project were to use and create a platform
        that would be easy to maintain, expand and reuse. Our applications are of
        various sizes and complexities, but there are certain aspects that are
        common, which was the reason to find a very modular solution. In
        particular, our current efforts are in Surveillance tools which allow
        monitoring the state of the exchange and the market.
		</p>
        <p>        
        We started using Virgo 2.0.1 during a &ldquo;proof of concept&rdquo; in November of
        2010 and spent 2011 working closely with them to build the application.
        Today we use version 3.0.1. with 48 service bundles and 20 web bundles.
        These services range from simple DAO type services, through authorization
        and authentication, web services, and even distributed caching. All web
        bundles use snaps and customized apache tiles views.
 		</p>
        <p>       
        What Virgo and OSGi provides for us is complete modularity and
        plug-and-play capability. This enables us to work more intelligently with
        other teams who need to build bundles independently of us where the strong
        isolation of services and APIs allows for a clear separation of control.
        We have created a core set of services that will be a platform for future
        projects across CME Group and are already actively building two projects
        on top of that platform. Having Virgo bundled with Apache&#8217;s Tomcat also
        helped in deciding which container to use as our projects are mostly web
        applications.
		</p>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>