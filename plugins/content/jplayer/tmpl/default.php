<?php
/*
 * JPlayer for Joomla! 1.6
 * Author: MaxSVK
 * Version: 1.6.1
 * Last Update: 2011-01-31
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<!-- JPlayer Plugin (start) -->
<div class="jplayer">
<div class="jplayer-box"><?php echo $output->player; ?></div>
<div class="jplayer-text">
<?php echo $output->downloadLink; ?>
<?php echo $output->debugMode; ?>
</div>
</div>
<!-- JPlayer Plugin (end) -->