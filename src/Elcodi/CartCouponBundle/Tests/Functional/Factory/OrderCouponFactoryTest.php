<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\CartCouponBundle\Tests\Functional\Factory;

use Elcodi\CoreBundle\Tests\WebTestCase;

/**
 * Class OrderCouponFactoryTest
 */
class OrderCouponFactoryTest extends WebTestCase
{
    /**
     * Load fixtures of these bundles
     *
     * @return array Bundles name where fixtures should be found
     */
    protected function loadSchema()
    {
        return false;
    }

    /**
     * Returns the callable name of the service
     *
     * @return string service name
     */
    public function getServiceCallableName()
    {
        return [
            'elcodi.core.cart_coupon.factory.order_coupon',
            'elcodi.factory.order_coupon',
        ];
    }

    /**
     * Test order_coupon factory provider
     */
    public function testFactoryProvider()
    {
        $this->assertInstanceOf(
            $this->container->getParameter('elcodi.core.cart_coupon.entity.order_coupon.class'),
            $this->container->get('elcodi.core.cart_coupon.entity.order_coupon.instance')
        );
    }

    /**
     * Test order_coupon factory provider alias
     */
    public function testFactoryProviderAlias()
    {
        $this->assertInstanceOf(
            $this->container->getParameter('elcodi.core.cart_coupon.entity.order_coupon.class'),
            $this->container->get('elcodi.entity.order_coupon.instance')
        );
    }
}
