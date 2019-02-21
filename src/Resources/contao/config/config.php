<?php

// Frontend modules
$GLOBALS['FE_MOD']['events']['timelineEventlist'] = 'Pdir\TimelineEventsBundle\Frontend\TimelineEventlistModule';

// Style sheet
if (\defined('TL_MODE') && TL_MODE == 'BE')
{
    // $GLOBALS['TL_CSS'][] = 'bundles/pdirtimelineevents/backend.min.css|static';
}