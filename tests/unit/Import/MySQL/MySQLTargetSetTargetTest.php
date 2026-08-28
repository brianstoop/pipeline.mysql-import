<?php

/**
 * This file contains the MySQLTargetSetTargetTest class.
 *
 * SPDX-FileCopyrightText: Copyright 2025 Framna Netherlands B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
 */

namespace Pipeline\Tests\Import\MySQL;

/**
 * This class contains the tests for the MySQLTarget.
 *
 * @covers \Pipeline\Import\MySQL\MySQLTarget
 */
class MySQLTargetSetTargetTest extends MySQLTargetTestCase
{

    /**
     * Test that setTarget() sets the table name property.
     *
     * @covers \Pipeline\Import\MySQL\MySQLTarget::setTarget
     */
    public function testSetTargetSetsTableNameProperty(): void
    {
        $this->assertPropertyUnset('table');

        $this->class->setTarget('table');

        $this->assertPropertySame('table', 'table');
    }

}

?>
