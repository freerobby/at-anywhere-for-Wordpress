<div class="wrap">
  <h2>Configure @anywhere for Wordpress</h2>

  <form method="post" action="options.php">
    <?php wp_nonce_field('update-options'); ?>
    <table class="form-table">
      <tr valign="top">
        <th scope="row">@anywhere API Key</th>
        <td><input type="text" name="aa_api_key" value="<?php echo get_option('aa_api_key'); ?>" size="30" /></td>
      </tr>
    </table>

    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="aa_api_key" />

    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
  </form>
</div>
