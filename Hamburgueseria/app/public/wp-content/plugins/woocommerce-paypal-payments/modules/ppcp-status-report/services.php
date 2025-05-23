<?php

/**
 * The status report module services.
 *
 * @package WooCommerce\PayPalCommerce\StatusReport
 */
declare (strict_types=1);
namespace WooCommerce\PayPalCommerce\StatusReport;

return array('status-report.renderer' => static function (): \WooCommerce\PayPalCommerce\StatusReport\Renderer {
    return new \WooCommerce\PayPalCommerce\StatusReport\Renderer();
});
