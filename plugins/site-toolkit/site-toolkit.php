<?php
/**
 * Plugin Name: Site Toolkit (V3 Example Monorepo)
 * Description: Toolkit half of the v3 monorepo example. Activated together with Site Analytics.
 * Version: 0.1.0
 */

add_action('admin_notices', function () {
    echo '<div class="notice notice-success"><p><strong>Site Toolkit</strong> is active.</p></div>';
});

// Fork smoke test: v3 preview workflows.

// Fork smoke rerun after v3 fork verification fix.
