<?php

// YOLLO Functions and Constants
// Active code only - dead code has been removed


// returns an absolute URL with a file-mod time version querystring
function asset_url(string $path): string {
    $clean = '/' . ltrim($path, '/');                    // URL path
    $filePath = __DIR__ . '/../' . ltrim($path, '/');    // filesystem path (includes/ -> project root)
    if (file_exists($filePath)) {
        return $clean . '?v=' . filemtime($filePath);
    }
    return $clean;
}

// Contact phone number constant
$phonenumber = "Contact us at (888) 946-9655";

// Generate responsive tab radio button HTML
function generateTab($id, $label, $checked = false) {
    $checkedAttr = $checked ? 'checked="checked"' : '';
    $html = '<input type="radio" name="tabs" id="tab-' . $id . '" ' . $checkedAttr . '>';
    $html .= '<label for="tab-' . $id . '"><i class="fa-solid fa-chevron-right" aria-hidden="true"></i> ' . $label . '</label>';
    return $html;
}

// Responsive tabs array - used in 20+ event pages
$responsive_tabs = array(
    "overview" => generateTab(1, "Overview", true),
    "price" => generateTab(2, "Price"),
    "faqs" => generateTab(3, "FAQs"),
    "photos" => generateTab(4, "Photos"),
    "buynow" => generateTab(5, "Buy Package"),
);

// Current URL for navigation active states
// Note: Also set in bootstrap.inc.php for redundancy
$current_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

// Include featured events data
include("home-featured-events.inc.php");
