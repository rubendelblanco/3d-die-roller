<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    katodia_die_roller
 * @subpackage katodia_die_roller/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
  <h1>Configuración</h1>
  <div class="postbox">
    <div class="inside">
    <?php $die_roller_nonce = wp_create_nonce( '3d_die_roller_conf_form' ); ?>
    <table>
      <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" id="3d_die_roller_conf_form">
        <input type="hidden" name="action" value="die_roller">
        <input type="hidden" name="die_roller_nonce" value="<?php echo $die_roller_nonce; ?>"/>
        <tr>
          <td>
            <h4><?php esc_attr_e( 'Texto descriptivo', 'Katd3DieRolller' ); ?></h4>
            <textarea id="" name="" cols="40" rows="10"></textarea>
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <h4><?php esc_attr_e( 'Boton "lanzar"', 'Katd3DieRolller' ); ?></h4>
            <input type="text" value="" class="regular-text">
          </td>
          <td></td>
        </tr>
        <tr>
          <td>
            <h4><?php esc_attr_e( 'Boton "borrar"', 'Katd3DieRolller' ); ?></h4>
            <input type="text" value="" class="regular-text">
          </td>
        </tr>
      </form>
    </table>
    </div>
  </div>
</div>
