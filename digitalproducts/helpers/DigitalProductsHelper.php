<?php
namespace Craft;

/**
 * Digital Products Helper
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2016, Pixel & Tonic, Inc.
 */
class DigitalProductsHelper
{

    // Public Methods
    // =========================================================================

    /**
     * Generate a license key.
     *
     * @return string
     */
    public static function generateLicenseKey()
    {
        $codeAlphabet = craft()->config->get('licenseKeyAlphabet', 'digitalProducts');
        $keyLength = craft()->config->get('licenseKeyLength', 'digitalProducts');

        $licenseKey = '';

        for ($i = 0; $i < $keyLength; $i++) {
            $licenseKey .= $codeAlphabet[mt_rand(0, strlen($codeAlphabet) - 1)];
        }

        return $licenseKey;
    }
}
