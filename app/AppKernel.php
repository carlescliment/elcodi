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

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

/**
 * Class AppKernel
 */
class AppKernel extends Kernel
{
    /**
     * Register application bundles
     *
     * @return array Array of bundles instances
     */
    public function registerBundles()
    {
        $bundles = array(

            /**
             * Symfony bundles
             */
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),

            /**
             * Doctrine bundles
             */
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new \Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),

            /**
             * Storage bundles
             */
            new \Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),

            /**
             * Elcodi core bundles
             */
            new \Elcodi\CoreBundle\ElcodiCoreBundle(),
            new \Elcodi\CartBundle\ElcodiCartBundle(),
            new \Elcodi\BannerBundle\ElcodiBannerBundle(),
            new \Elcodi\CouponBundle\ElcodiCouponBundle(),
            new \Elcodi\CurrencyBundle\ElcodiCurrencyBundle(),
            new \Elcodi\UserBundle\ElcodiUserBundle(),
            new \Elcodi\ProductBundle\ElcodiProductBundle(),
            new \Elcodi\ReferralProgramBundle\ElcodiReferralProgramBundle(),
            new \Elcodi\CartCouponBundle\ElcodiCartCouponBundle(),
            new \Elcodi\MediaBundle\ElcodiMediaBundle(),
            new \Elcodi\RuleBundle\ElcodiRuleBundle(),
            new \Elcodi\NewsletterBundle\ElcodiNewsletterBundle(),

        );

        if (in_array($this->getEnvironment(), array('dev'))) {
            $bundles[] = new Egulias\ListenersDebugCommandBundle\EguliasListenersDebugCommandBundle();
        }

        return $bundles;
    }

    /**
     * Register container configuration
     *
     * @param LoaderInterface $loader Loader
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__ . '/config/config.yml');
    }
}
