<?php

/**
 * This file contains the MySQLTargetTestCase class.
 *
 * SPDX-FileCopyrightText: Copyright 2025 Framna Netherlands B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
 */

namespace Pipeline\Tests\Import\MySQL;

use Lunr\Gravity\MySQL\Tests\Helpers\MySQLDatabaseAccessObjectTestCase;
use Pipeline\Import\MySQL\MySQLTarget;

/**
 * This class contains the tests for the MySQLTarget.
 *
 * @covers \Pipeline\Import\MySQLTarget
 */
abstract class MySQLTargetTestCase extends MySQLDatabaseAccessObjectTestCase
{

    /**
     * Class to test.
     * @var MySQLTarget
     */
    protected MySQLTarget $class;

    /**
     * Set up test data.
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->class = new MySQLTarget($this->db, $this->logger);
        $this->baseSetUp($this->class);
    }

    /**
     * Destructor.
     */
    public function tearDown(): void
    {
        parent::tearDown();
    }

}

?>
