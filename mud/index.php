<html>
<head>
<title>The Riders of Elmulda</title>
</head>
<body>
<center><h1>The Riders of Elmulda</h1></center>
<center><div>
	<?php
	$host = "telnet.anotherdayanotherga.me";
	$port = 4000;
	$conn = fsockopen($host, $port);
	
	if (!$conn)
	{
		echo "<p>The server is currently <font color='red'>down</font>.";
	}
	else
	{
		echo "The server is currently <font color='green'>up</font>!";
	}
	?>
</div></center>

<table align="center" width="50%">
<tr>
<td>For a while now, I've wanted to create a MUD. A virtual world I could call my own while letting my writing flow onto a digital plane that reflected it perfectly in an interactive format. However, programming brought me down and leveled with me that it was just not possible at the time.</td>
</tr>
<tr>
<td>Now, thanks to several games I've created, regardless of how small, I've got newfound confidence in my programming abilities. I've also found several small codebases via the <a href="http://www.andreasen.org/16k.shtml">16k MUD Competition</a> from 2000 that I can use as a reference, and maybe take inspriation from (once I get them all up and running, that is...most of them run on Unix).</td>
<tr>
<td><i>The Riders of Elmulda</i> is a MUD about dragon riders. You play as the rider of a dragon. Your dragon is your companion. You level alongside him or her, albeit at different rates. Eventually, you will both die, as well, though your dragon may survive several generations of your characters.</td>
</tr>
<tr>
<td>In <i>The Riders of Elmulda</i>, you will have control over both yourself and your dragon. You must learn to control both in harmony to truly rule in battle.</td>
</tr>
<tr>
<td>Here are a few of the features of <i>The Riders of Elmulda</i>:<br />
- Aging characters, realistic recovery rates, and permadeath.<br />
- Dragon breeding.<br />
- Fully customizable living spaces, in the form of apartments.<br />
- Strong guild support with guilds battling for control over towns.<br />
- Strong crafting that matters.<br />
- And much more.
</td>
</tr>
<tr>
<td>Places to check for news include:<br />
- Here, of course.<br />
- <a href="http://anotherdayanotherga.me/blog">My blog</a>.<br />
- <a href="http://anotherdayanotherga.me">The <i>Another Day, Another Game</i> homepage.</td>
</tr>
<tr>
<td>This doesn't mean at all that I'm giving up making silly, accessible, bite-sized games. It just means I'm also going to be following up on another goal I've had for quite a while now.</td>
</tr>
<tr style="text-align:center">
<td style="text-align:center">Copyright 2011 Matt Chelen</td>
</tr>
</table>
</body>
</html>