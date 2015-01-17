<?php
/**
 * Created by PhpStorm.
 * User: anik
 * Date: 1/4/15
 * Time: 11:35 PM
 */
require app_path().'/cso/event_handlers/jobs-event-handlers.php';
require app_path().'/cso/event_handlers/users-event-handlers.php';




Event::listen('jobs.posted', 'cso\event_handlers\JobsEventHandler@notifyJobsPosted');

Event::listen('password_changed', 'cso\event_handlers\UsersEventHandler@passwordChanged');