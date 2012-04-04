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
 * @package   PEAR2\Tests\Unit\WindowsAzure\Services\Core\Filters
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */

namespace PEAR2\Tests\Unit\WindowsAzure\Services\Core\Filters;
use PEAR2\WindowsAzure\Services\Core\Filters\HeadersFilter;
use PEAR2\WindowsAzure\Core\HttpClient;
use PEAR2\WindowsAzure\Resources;

/**
 * Unit tests for class HeadersFilter
 *
 * @category  Microsoft
 * @package   PEAR2\Tests\Unit\WindowsAzure\Services\Core\Filters
 * @author    Abdelrahman Elogeel <Abdelrahman.Elogeel@microsoft.com>
 * @copyright 2012 Microsoft Corporation
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/azure-sdk-for-php
 */
class HeadersFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers PEAR2\WindowsAzure\Services\Core\Filters\HeadersFilter::handleRequest
     * @covers PEAR2\WindowsAzure\Services\Core\Filters\HeadersFilter::__construct
     */
    public function testHandleRequestEmptyHeaders()
    {
        // Setup
        $channel = new HttpClient();
        $filer = new HeadersFilter(array());
        
        // Test
        $request = $filer->handleRequest($channel);
        
        // Assert
        $this->assertCount(0, $request->getHeaders());
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Core\Filters\HeadersFilter::handleRequest
     * @covers PEAR2\WindowsAzure\Services\Core\Filters\HeadersFilter::__construct
     */
    public function testHandleRequestOneHeader()
    {
        // Setup
        $channel = new HttpClient();
        $header1 = 'header1';
        $value1 = 'value1';
        $expected = array($header1 => $value1);
        $filer = new HeadersFilter($expected);
        
        // Test
        $request = $filer->handleRequest($channel);
        
        // Assert
        $headers = $request->getHeaders();
        $this->assertEquals($value1, $headers[$header1]);
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Core\Filters\HeadersFilter::handleRequest
     * @covers PEAR2\WindowsAzure\Services\Core\Filters\HeadersFilter::__construct
     */
    public function testHandleRequestMultipleHeaders()
    {
        // Setup
        $channel = new HttpClient();
        $header1 = 'header1';
        $value1 = 'value1';
        $header2 = 'header2';
        $value2 = 'value2';
        $expected = array($header1 => $value1, $header2 => $value2);
        $filer = new HeadersFilter($expected);
        
        // Test
        $request = $filer->handleRequest($channel);
        
        // Assert
        $headers = $request->getHeaders();
        $this->assertEquals($value1, $headers[$header1]);
        $this->assertEquals($value2, $headers[$header2]);
    }
    
    /**
     * @covers PEAR2\WindowsAzure\Services\Core\Filters\HeadersFilter::handleResponse
     */
    public function testHandleResponse()
    {
        // Setup
        $channel = new HttpClient();
        $response = null;
        $filer = new HeadersFilter(array());
        
        // Test
        $response = $filer->handleResponse($channel, $response);
        
        // Assert
        $this->assertNull($response);
    }
}

?>