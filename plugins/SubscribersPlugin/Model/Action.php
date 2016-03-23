<?php
/**
 * SubscribersPlugin for phplist.
 *
 * This file is a part of SubscribersPlugin.
 *
 * SubscribersPlugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * SubscribersPlugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @author    Duncan Cameron
 * @copyright 2011-2013 Duncan Cameron
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License, Version 3
 */
class SubscribersPlugin_Model_Action extends CommonPlugin_Model
{
    /*
     *  Inherited protected variables
     */
    protected $properties = array(
        'file' => null,
        'action' => null,
        'listId' => null,
        'pattern' => null,
        'users' => null,
    );
    protected $persist = array(
    );

    /*
     *  Public methods
     */
    public function __construct($defaultAction)
    {
        $this->properties['action'] = $defaultAction;
        parent::__construct();
    }

    public function setProperties(array $new)
    {
        parent::setproperties($new);

        if (isset($_FILES['file'])) {
            $this->file = $_FILES['file'];
        }
    }
}
