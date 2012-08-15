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
 * Contributors: Chris Frost
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo - Feature Summary";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, feature, features";
	$pageAuthor		= "Chris Frost";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Feature Summary</h2>
		<p>
			Virgo provides a number of <a href="http://www.eclipse.org/virgo/deliverables/">deliverables</a>, each providing a particular mix of features. The table below outlines the features in each Virgo 3.5.x deliverable.
		</p>
	
		<table id="packaging">
			<tr><th align=left><a href="http://www.eclipse.org/virgo/">Feature</a></th><th colspan=5 class="packaging-content zebra"><a href="http://www.eclipse.org/virgo/deliverables/">Deliverable</a></th></tr>
			<tr>
				<th></th>
				<th class="packaging-content zebra"><a href="http://www.eclipse.org/virgo/deliverables#nano-deliverable">Nano</a></th>
				<th class="packaging-content"><a href="http://www.eclipse.org/virgo/deliverables#nano-full-deliverable">Nano "Full"</a></th>
				<th class="packaging-content zebra"><a href="http://www.eclipse.org/virgo/deliverables#kernel-deliverable">Kernel</a></th>
				<th class="packaging-content"><a href="http://www.eclipse.org/virgo/deliverables#jetty-server-deliverable">Jetty Server</a></th>
				<th class="packaging-content zebra"><a href="http://www.eclipse.org/virgo/deliverables#tomcat-server-deliverable">Server for Apache Tomcat</a></th>
			</tr>
			<tr><th align=left colspan=6>Servlet Container</th></tr>
			<tr>
				<td>Gemini Web (embedded Tomcat)</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Jetty</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"></td>
			</tr>
			<tr>
				<td>Web Application Bundles</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>WAR files</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td><a href="http://www.eclipse.org/virgo/deliverables#snaps-deliverable">Snaps</a></td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr><th align=left colspan=6>Administration</th></tr>
			<tr>
				<td>Gogo shell via ssh/telnet</td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>JMX management</td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Web Admin Console</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr><th align=left colspan=6>Deployment</th></tr>
			<tr>
				<td>Kernel region</td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Hot deployer</td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Bundle artefacts</td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>User region</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Plan and PAR artefacts</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Configuration artefacts</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr><th align=left colspan=6>Provisioning</th></tr>
			<tr>
				<td>p2 initial provisioning</td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>p2 runtime provisioning<sup>1</sup></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Dependency provisioning from repository</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Remote repository serving</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr><th align=left colspan=6>Diagnostics</th></tr>
			<tr>
				<td>Medic/logback diagnostics</td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Resolution failure diagnostics</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr>
				<td>Dumps for offline analysis</td>
				<td class="packaging-content zebra"></td>
				<td class="packaging-content"></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content"><img src="../images/tick.png" alt="yes"/></td>
				<td class="packaging-content zebra"><img src="../images/tick.png" alt="yes"/></td>
			</tr>
			<tr><td align=left colspan=6>
					<ol>
						<li>Kernel region only</li>
					</ol>
				</td></tr>
			</tbody>
		</table>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>