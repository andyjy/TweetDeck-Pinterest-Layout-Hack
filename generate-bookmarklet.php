#!/usr/bin/php
<?php
/**
 * Handy script for generating the bookmarklet HTML file
 */
ob_start();
$code = str_replace(array("\\\n", "\r", "\n"), '', preg_replace('|//.*\n|', '', file_get_contents('tweetdeck-pinterest.js')));
?>
<h1>Installing the TweetDeck Pinterest-style layout bookmarklet</h1>
<p>Click and drag the link below to your bookmarks bar to install the bookmarklet.</p>
<p>(If your bookmarks bar isn't visible, select Bookmarks &gt; Show Bookmarks Bar from the Tools menu).</p>
<p><a href="javascript:<?php echo htmlspecialchars($code); ?>">TweetDeck Pinterest-style</a></p>
<?php
file_put_contents('bookmarklet.html', ob_get_clean());
