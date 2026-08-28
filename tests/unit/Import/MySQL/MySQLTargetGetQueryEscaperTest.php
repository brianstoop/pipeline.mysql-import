<?php

/**
 * This file contains the MySQLTargetGetQueryEscaperTest class.
 *
 * SPDX-FileCopyrightText: Copyright 2025 Framna Netherlands B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
 */

namespace Pipeline\Tests\Import\MySQL;

use Lunr\Gravity\MySQL\MySQLQueryEscaper;

/**
 * This class contains the tests for the MySQLTarget.
 *
 * @covers \Pipeline\Import\MySQL\MySQLTarget
 */
class MySQLTargetGetQueryEscaperTest extends MySQLTargetTestCase
{

    /**
     * Test that getQueryEscaper() returns a simple query builder.
     *
     * @covers \Pipeline\Import\MySQL\MySQLTarget::getQueryEscaper
     */
    public function testGetQueryEscaperReturnsSimpleQueryBuilder(): void
    {
        $this->assertInstanceOf(MySQLQueryEscaper::class, $this->class->getQueryEscaper());
    }

}

?>
