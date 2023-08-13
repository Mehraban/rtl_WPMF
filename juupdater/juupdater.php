/* ...::: One Free Online Tool for Compare ==> https://www.comparetext.net :::... */
/* Start Convert Comment Line of 116 to 151*/
/*public function __construct(
    $metadataUrl,
    $pluginFile,
    $slug = '',
    $checkPeriod = 12,
    $optionName = '',
    $muPluginFile = ''
) {
    $this->metadataUrl        = $metadataUrl;
    $this->pluginAbsolutePath = $pluginFile;
    $this->pluginFile         = plugin_basename($this->pluginAbsolutePath);
    $this->muPluginFile       = $muPluginFile;
    $this->checkPeriod        = $checkPeriod;
    $this->slug               = $slug;
    $this->optionName         = $optionName;
    $this->debugMode          = defined('WP_DEBUG') && WP_DEBUG;

    //If no slug is specified, use the name of the main plugin file as the slug.
    //For example, 'my-cool-plugin/cool-plugin.php' becomes 'cool-plugin'.
    if (empty($this->slug)) {
        $this->slug = basename($this->pluginFile, '.php');
    }

    if (empty($this->optionName)) {
        $this->optionName = 'external_updates-' . $this->slug;
    }

    //Backwards compatibility: If the plugin is a mu-plugin but no $muPluginFile is specified, assume
    //it's the same as $pluginFile given that it's not in a subdirectory (WP only looks in the base dir).
    if (empty($this->muPluginFile) && (strpbrk($this->pluginFile, '/\\') === false) && $this->isMuPlugin()) {
        $this->muPluginFile = $this->pluginFile;
    }


    $this->installHooks();
}*/

/* End Convert Comment Line of 116 to 151*/

/* Start Convert Comment Line of 910 to 939*/

/*$updater_capability = apply_filters('ju_updater_user_can', current_user_can('update_plugins'), 'update_plugins');
if ($isRelevant && $updater_capability) {
    $linkUrl = wp_nonce_url(
        add_query_arg(
            array(
                'puc_check_for_updates' => 1,
                'puc_slug'              => $this->slug,
            ),
            is_network_admin() ? network_admin_url('plugins.php') : admin_url('plugins.php')
        ),
        'puc_check_for_updates'
    );

    $linkText = apply_filters('puc_manual_check_link-' . $this->slug, 'Check for updates');
    if (!empty($linkText)) {
        $pluginMeta[] = sprintf('<a href="%s">%s</a>', esc_attr($linkUrl), $linkText);
    }

    $ju_token = get_option('ju_user_token');
    $link     = JU_BASE . 'index.php?option=com_juupdater&view=login&tmpl=component&site=' . admin_url() . '
    &TB_iframe=true&width=300&height=305';

    if (empty($ju_token)) {
        $pluginMeta[] = sprintf(
            '<span style="color: #ff6200" class="dashicons dashicons-warning"></span>In order to access updates please link your account : <a class="thickbox ju_update" href="%s">%s</a>',
            esc_attr($link),
            'JoomUnited Login'
        );
    }
}*/
/* End Convert Comment Line of 910 to 939*/
