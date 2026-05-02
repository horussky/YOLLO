<?php

/**
 * Bootstrap - Event Configuration Loader
 * 
 * Loads and extracts event configuration into variables
 * Usage: loadEvent('conf_allstar.php');
 * 
 * After calling, these variables are available:
 * - $event
 * - $geolocation
 * - $people
 * - $package_items
 * - $metas
 * 
 * Also initializes:
 * - $current_url (current page filename for nav active states)
 * - $active (CSS class for active nav items)
 */

// Set current page for navigation active states
if (!isset($current_url)) {
    $current_url = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
}
if (!isset($active)) {
    $active = 'active-nav';
}

/**
 * Load and extract event configuration file
 * 
 * @param string $configFile Filename in config/events/ directory (e.g., 'conf_allstar.php')
 * @return array Configuration array with keys: event, geolocation, people, package_items, metas
 * @throws Exception If config file not found or invalid
 */
function loadEvent($configFile) {
    $configPath = __DIR__ . '/../config/events/' . $configFile;
    
    if (!file_exists($configPath)) {
        throw new Exception("Event configuration file not found: {$configFile}");
    }
    
    $config = require $configPath;
    
    if (!is_array($config)) {
        throw new Exception("Event configuration must return an array: {$configFile}");
    }
    
    // Validate required keys
    $requiredKeys = array('metas', 'event', 'geolocation', 'people', 'package_items');
    foreach ($requiredKeys as $key) {
        if (!isset($config[$key])) {
            throw new Exception("Missing required key '{$key}' in {$configFile}");
        }
    }
    
    return $config;
}
