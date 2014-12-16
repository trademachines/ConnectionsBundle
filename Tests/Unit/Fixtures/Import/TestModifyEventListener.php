<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ConnectionsBundle\Tests\Unit\Fixtures\Import;

use ONGR\ConnectionsBundle\Event\AbstractInitialSyncModifyEvent;
use ONGR\ConnectionsBundle\Event\ImportItem;

/**
 * Implementation of InitialSyncModifyEventListener.
 */
class TestModifyEventListener extends AbstractInitialSyncModifyEvent
{
    /**
     * Does nothing.
     *
     * @param ImportItem $eventItem
     */
    protected function modify(ImportItem $eventItem)
    {
    }
}
