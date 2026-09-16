<?php
/**
 * Plugin Name: Site Analytics (V3 Example Monorepo)
 * Description: Analytics half of the v3 monorepo example. Activated together with Site Toolkit.
 * Version: 0.1.0
 */

add_action('admin_notices', function () {
    echo '<div class="notice notice-success"><p><strong>Site Analytics</strong> is active — smoke test #2.</p></div>';
});
