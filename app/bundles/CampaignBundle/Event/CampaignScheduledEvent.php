<?php

/*
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\CampaignBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class CampaignScheduledEvent.
 */
class CampaignScheduledEvent extends Event
{
    /**
     * @var \Mautic\LeadBundle\Entity\Lead
     */
    protected $lead;

    /**
     * @var array
     */
    protected $event;

    /**
     * @var array
     */
    protected $config;

    /**
     * @var array
     */
    protected $eventDetails;

    /**
     * @var bool
     */
    protected $systemTriggered;

    /**
     * @var \DateTime
     */
    protected $dateScheduled;

    /**
     * @var array
     */
    protected $eventSettings;

    /**
     * Construct.
     *
     * @param $args
     */
    public function __construct($args)
    {
        $this->lead            = $args['lead'];
        $this->event           = $args['event'];
        $this->config          = $args['event']['properties'];
        $this->eventDetails    = $args['eventDetails'];
        $this->systemTriggered = $args['systemTriggered'];
        $this->dateScheduled   = $args['dateScheduled'];
        $this->eventSettings   = $args['eventSettings'];
    }

    /**
     * @return \Mautic\LeadBundle\Entity\Lead
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * @return array
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @return array
     */
    public function getEventDetails()
    {
        return $this->eventDetails;
    }

    /**
     * @return bool
     */
    public function getSystemTriggered()
    {
        return $this->systemTriggered;
    }

    /**
     * @return \DateTime
     */
    public function getDateScheduled()
    {
        return $this->dateScheduled;
    }

    /**
     * @return mixed
     */
    public function getEventSettings()
    {
        return $this->eventSettings;
    }
}
