<?php

/**
 * This file contains the MySQLTargetSetBatchSizeTest class.
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
class MySQLTargetSetBatchSizeTest extends MySQLTargetTestCase
{

    /**
     * Test that setBatchSize() sets the table name property.
     *
     * @covers \Pipeline\Import\MySQL\MySQLTarget::setBatchSize
     */
    public function testSetBatchSizeSetsProperty(): void
    {
        $this->assertPropertySame('batchSize', 50_000);

        $this->class->setBatchSize(5000);

        $this->assertPropertySame('batchSize', 5000);
    }

}

?>
