<?php

/**
 * This file contains the MySQLTargetGetQueryBuilderTest class.
 *
 * SPDX-FileCopyrightText: Copyright 2025 Framna Netherlands B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
 */

namespace Pipeline\Tests\Import\MySQL;

use Lunr\Gravity\MySQL\MySQLDMLQueryBuilder;
use Lunr\Gravity\MySQL\MySQLSimpleDMLQueryBuilder;

/**
 * This class contains the tests for the MySQLTarget.
 *
 * @covers \Pipeline\Import\MySQL\MySQLTarget
 */
class MySQLTargetGetQueryBuilderTest extends MySQLTargetTestCase
{

    /**
     * Test that getQueryBuilder() returns NULL if no query builder is active.
     *
     * @covers \Pipeline\Import\MySQL\MySQLTarget::getQueryBuilder
     */
    public function testGetQueryBuilderWhenNoQueryBuilderActive(): void
    {
        $this->assertNull($this->class->getQueryBuilder());
    }

    /**
     * Test that getQueryBuilder() returns a simple query builder.
     *
     * @covers \Pipeline\Import\MySQL\MySQLTarget::getQueryBuilder
     */
    public function testGetQueryBuilderReturnsSimpleQueryBuilder(): void
    {
        $this->setReflectionPropertyValue('builder', $this->realSimpleBuilder);

        $this->assertInstanceOf(MySQLSimpleDMLQueryBuilder::class, $this->class->getQueryBuilder());
    }

    /**
     * Test that getQueryBuilder() returns a normal query builder.
     *
     * @covers \Pipeline\Import\MySQL\MySQLTarget::getQueryBuilder
     */
    public function testGetQueryBuilderReturnsQueryBuilder(): void
    {
        $this->setReflectionPropertyValue('builder', $this->realBuilder);

        $this->assertInstanceOf(MySQLDMLQueryBuilder::class, $this->class->getQueryBuilder());
    }

}

?>
