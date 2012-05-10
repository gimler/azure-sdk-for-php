<?php

/**
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * PHP version 5
 *
 * @category  Microsoft
 * @package   WindowsAzure\Services\ServiceManagement\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
 
namespace WindowsAzure\Services\ServiceManagement\Models;

/**
 * The location class.
 *
 * @category  Microsoft
 * @package   WindowsAzure\Services\ServiceManagement\Models
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class Location
{
    /**
     * @var string
     */
    private $_name;
    
    /**
     * @var string
     */
    private $_displayName;
    
    /**
     * Gets the name.
     * 
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }
    
    /**
     * Sets the name.
     * 
     * @param string $name The name.
     * 
     * @return none
     */
    public function setName($name)
    {
        $this->_name = $name;
    }
    
    /**
     * Gets the displayName.
     * 
     * @return string
     */
    public function getDisplayName()
    {
        return $this->_displayName;
    }
    
    /**
     * Sets the displayName.
     * 
     * @param string $displayName The displayName.
     * 
     * @return none
     */
    public function setDisplayName($displayName)
    {
        $this->_displayName = $displayName;
    }
}

?>