<h1>Code Settings</h1>
<?php settings_errors(); ?>
<form action="options.php" method="post">
    <?php settings_fields( 'code-settings-group' ); ?>
    <?php do_settings_sections( 'code' ); ?>
    <?php submit_button(); ?>
</form>