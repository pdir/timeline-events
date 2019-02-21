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

namespace Pdir\TimelineEventsBundle\DependencyInjection;

use Contao\ModuleEventlist;

class TimelineEventlistModule extends ModuleEventlist
{
    /**
     * Template.
     *
     * @var string
     */
    protected $strTemplate = 'mod_timeline_eventlist';
}
