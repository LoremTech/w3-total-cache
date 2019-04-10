<?php
namespace W3TC;

if ( !defined( 'W3TC' ) )
	die();

?>
<div id="w3tc-help">
	<p><?php _e( 'Request <a href="admin.php?page=w3tc_support"><strong>premium support</strong></a> or troubleshoot issues using the common questions below:', 'w3-total-cache' ); ?></p>

        <ul>
            <?php foreach ( $entries as $entry ): ?>
                <li>
                    <a href="<?php echo htmlspecialchars($entry['a']) ?>" target="_blank"><?php
	echo htmlspecialchars($entry['q'])
?></a>
            	</li>
            <?php endforeach; ?>
        </ul>

    <div style="clear: left;"></div>
</div>
