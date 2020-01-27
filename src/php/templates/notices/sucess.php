<?php
/**
 * The Template for displaying a success notice.
 *
 * Override this template by copying it to yourtheme/commenter/notices/success.php
 *
 * @author        Joshua McKendall
 * @package       Commenter/templates
 * @version       1.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
?>

<ul class="commenter-notices success alert alert-success">

	<?php foreach ( $messages as $code => $message ) { ?>
			
		<li  class="commenter-notice" ><?php echo sprintf( '%s', $message ); ?></li>

	<?php }	?>
	
</ul>