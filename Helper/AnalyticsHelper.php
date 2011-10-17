<?php

namespace Nooga\GoogleBundle\Helper;

use Nooga\GoogleBundle\Analytics;
use Nooga\GoogleBundle\Analytics\Event;
use Symfony\Component\Templating\Helper\Helper;

class AnalyticsHelper extends Helper
{
    private $analytics;

    public function __construct(Analytics $analytics)
    {
        $this->analytics = $analytics;
    }

    public function getAllowHash($trackerKey)
    {
        return $this->analytics->getAllowHash($trackerKey);
    }

    public function getAllowLinker($trackerKey)
    {
        return $this->analytics->getAllowLinker($trackerKey);
    }

    public function getTrackPageLoadTime($trackerKey)
    {
        return $this->analytics->getTrackPageLoadTime($trackerKey);
    }

    public function hasCustomPageView()
    {
        return $this->analytics->hasCustomPageView();
    }

    public function getCustomPageView()
    {
        return $this->analytics->getCustomPageView();
    }

    public function hasCustomVariables()
    {
        return $this->analytics->hasCustomVariables();
    }

    public function getCustomVariables()
    {
        return $this->analytics->getCustomVariables();
    }

    public function getEventFunctionName($eventName)
    {
        return 'trackEvent'.ucfirst($eventName);
    }

    public function addEvent($category, $action, $label = null, $value = null)
    {
        $this->analytics->enqueueEvent(new Event($category, $action, $label, $value));
    }

    public function hasEventQueue()
    {
        return $this->analytics->hasEventQueue();
    }

    public function getEventQueue()
    {
        return $this->analytics->getEventQueue();
    }

    public function hasItems()
    {
        return $this->analytics->hasItems();
    }

    public function getItems()
    {
        return $this->analytics->getItems();
    }

    public function getRequestUri()
    {
        return $this->analytics->getRequestUri();
    }

    public function hasPageViewQueue()
    {
        return $this->analytics->hasPageViewQueue();
    }

    public function getPageViewQueue()
    {
        return $this->analytics->getPageViewQueue();
    }

    public function getTrackers(array $trackers = array())
    {
        return $this->analytics->getTrackers($trackers);
    }

    public function isTransactionValid()
    {
        return $this->analytics->isTransactionValid();
    }

    public function getTransaction()
    {
        return $this->analytics->getTransaction();
    }

    public function getName()
    {
        return 'google_analytics';
    }
}
