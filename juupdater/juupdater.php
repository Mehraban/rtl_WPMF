/* Delete Line of 116 to 151*/
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
/* Delete Line of 116 to 151*/
