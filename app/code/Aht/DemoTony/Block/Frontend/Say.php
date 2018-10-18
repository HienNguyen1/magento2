<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Aht\Demo\Block\Frontend;

class Say extends \Magento\Framework\View\Element\Template
{

    public function sayHello()
    {
        return __("Say Hello from the block Demo");
    }

}
