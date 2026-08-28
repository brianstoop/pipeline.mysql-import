<?php

/**
 * This file contains the StaticRangeTestCase class.
 *
 * SPDX-FileCopyrightText: Copyright 2026 Framna Netherlands B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
 */

namespace Pipeline\Tests\Import\MySQL\Ranges;

use Lunr\Halo\LunrBaseTestCase;
use PHPUnit\Framework\MockObject\MockObject;
use Pipeline\Import\MySQL\MySQLTarget;
use Pipeline\Import\MySQL\Ranges\StaticRange;
use Psr\Log\LoggerInterface;

/**
 * This class contains common setup routines, providers
 * and shared attributes for testing the StaticRange class.
 *
 * @covers Pipeline\Import\MySQL\Ranges\StaticRange
 */
abstract class StaticRangeTestCase extends LunrBaseTestCase
{

    /**
     * Mock instance of the MySQLTarget class.
     * @var MySQLTarget&MockObject
     */
    protected MySQLTarget&MockObject $target;

    /**
     * Mock instance of the Logger.
     * @var LoggerInterface&MockObject
     */
    protected LoggerInterface&MockObject $logger;

    /**
     * Instance of the tested class.
     * @var StaticRange
     */
    protected StaticRange $class;

    /**
     * TestCase Constructor.
     */
    public function setUp(): void
    {
        $this->target = $this->getMockBuilder(MySQLTarget::class)
                             ->disableOriginalConstructor()
                             ->getMock();

        $this->logger = $this->getMockBuilder(LoggerInterface::class)
                             ->getMock();

        $this->class = new StaticRange($this->logger, $this->target);

        parent::baseSetUp($this->class);
    }

    /**
     * TestCase Destructor.
     */
    public function tearDown(): void
    {
        parent::tearDown();

        unset($this->class);
        unset($this->target);
        unset($this->logger);
    }

}

?>
