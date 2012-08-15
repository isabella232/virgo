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
	$pageTitle 		= "Virgo - Support";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Support";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Community Forum</h2>
		<p>
			The Virgo Forum is intended for user community discussions on Virgo usage and troubleshooting.
			Developers extending Virgo should refer to the <a href="http://wiki.eclipse.org/Virgo">Virgo wiki</a> and the
			<a href="https://dev.eclipse.org/mailman/listinfo/virgo-dev">Virgo Developer mailing list</a>.
		</p>
		<ul>
			<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=159">Browse forum posts</a> using the web interface</li>
			<li>
				<a href="news://news.eclipse.org/eclipse.virgo">Subscribe</a> to the forum with your news reader.
				<a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">See the FAQ</a>
				for instructions on subscribing.
			</li>
		</ul>
		
		<h2>Open Source Support for Virgo</h2>
		<p>
			Submit bugs using the <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Virgo">Bugzilla web interface</a>.
			Please <a href="https://bugs.eclipse.org/bugs/query.cgi?product=Virgo">search for duplicates</a> first.
		</p>
			For defects, provide steps to reproduce. For enhancements, describe a use case.
		</p>
		<p>
			Committers prioritize critical bug fixes and enhancements and cannot respond to all inquiries.
			For additional help, see the Commerical Support section below.
		</p>
		<ul>
			<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Virgo&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">View bugs with severity of normal or higher</a></li>
			<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=Virgo&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=notregexp&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">View bugs marked enhancement, minor, or trivial</a></li>
		</ul>
		
		<h2>Commercial Support for Virgo</h2>
		<table border="0"> 
        		<tr height="10" colspan="2"></tr> 
        		<tr> 
        		<td width="80" align="centre" valign="bottom"> 
        			&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://s9.springsource.com/services/enterprisesupport"><img border=0 src="/virgo/images/spring09_logo.png"></a> 
        		</td> 
		        <td> 
			        <a href="http://s9.springsource.com/services/enterprisesupport">SpringSource</a> the originator of Virgo
			        provides commercial support for Virgo (and for SpringSource dm Server) at the Basic and Production levels.
			        This is a separate support offering and is not tied to any other Spring projects or offerings.
			    </td> 
				</tr> 
			</table>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>