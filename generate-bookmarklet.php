#!/usr/bin/php
<?php
/**
 * Handy script for generating the bookmarklet HTML file
 */
ob_start();
$code = str_replace(array("\\\n", "\r", "\n"), '', preg_replace('|//.*\n|', '', file_get_contents('tweetdeck-pinterest.js')));
?>
<a href="javascript:<?php echo htmlspecialchars($code); ?>">TweetDeck Pinterest-style</a>
<?php
file_put_contents('bookmarklet.html', ob_get_clean());
