<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Directory\Model\Country\Postcode;

interface ValidatorInterface
{
    /**
     * Validate postcode for selected country by mask
     *
     * @param string $postcode
     * @param string $countryId
     * @return bool
     */
    public function validate($postcode, $countryId);
}
