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

namespace Elcodi\ProductBundle\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 */
class CategoryRepository extends EntityRepository
{
    /**
     * Get root categories
     *
     * @return ArrayCollection Collection of Root categories
     */
    public function getParentCategories()
    {
        $categories = $this
            ->createQueryBuilder('c')
            ->where('c.root = :root')
            ->andWhere('c.enabled = :enabled')
            ->setParameters(array(
                'enabled'   =>  true,
                'root'      =>  true,
            ))
            ->getQuery()
            ->getResult();

        return new ArrayCollection($categories);
    }
}
