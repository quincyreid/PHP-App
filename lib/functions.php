<?php
/**
 * Loads a class from the classpath
 * @param $classname
 */
function phpapp_load_class($classname) {
  $path = sprintf('%s%s%s.php', PHPAPP_CLASS_PATH, DIRECTORY_SEPARATOR, str_replace('_', DIRECTORY_SEPARATOR, $classname));
  require_once $path;
}
/**
 * Gets a path to a config file
 * @param $filename The name of the config file
 * @param string $suffix The suffix of the config file
 * @return string The full Path to the config file
 */
function phpapp_config_file($filename, $suffix = 'ini') {
  return sprintf('%s%s%s.php', PHPAPP_CONF_PATH, DIRECTORY_SEPARATOR, $filename, $suffix);
}
/**
 * Gets the full path to the default config file based on hostname
 * @return string
 */
function phpapp_default_config() {
  return phpapp_conf_file(php_uname('n'));
}

?>