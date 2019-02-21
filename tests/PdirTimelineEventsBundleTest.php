<?php

/*
 * Timeline Events bundle for Contao Open Source CMS
 *
 * Copyright (c) 2019 pdir / digital agentur // pdir GmbH
 * @package    timeline-events
 * @link       https://github.com/pdir/timeline-events
 * @author     Mathias Arzberger <develop@pdir.de>
 * @license    LGPL-3.0-or-later
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pdir\TimelineEventsBundle\Tests;

use Pdir\TimelineEventsBundle\PdirTimelineEventsBundle;
use PHPUnit\Framework\TestCase;

class PdirTimelineEventsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new PdirTimelineEventsBundle();

        $this->assertInstanceOf('Pdir\TimelineEventsBundle\PdirTimelineEventsBundle', $bundle);
    }
}
