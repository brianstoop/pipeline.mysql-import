<?php

/**
 * This file contains the MySQLTargetEscapeItemTest class.
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
class MySQLTargetEscapeItemTest extends MySQLTargetTestCase
{

    /**
     * Test that escapeItem() returns a properly escaped item.
     *
     * @covers \Pipeline\Import\MySQL\MySQLTarget::escapeItem
     */
    public function testEscapeItem(): void
    {
        $item = [
            'integer' => 100,
            'float'   => 1.1,
            'true'    => TRUE,
            'false'   => FALSE,
            'null'    => NULL,
            'string'  => 'foo',
            'geo'     => 'POINT(1 1)',
        ];

        $expected = [
            'integer' => 100,
            'float'   => 1.1,
            'true'    => 1,
            'false'   => 0,
            'null'    => NULL,
            'string'  => "'foo'",
            'geo'     => "ST_GeomFromText('POINT(1 1)')",
        ];

        $method = $this->getReflectionMethod('escapeItem');

        $result = $method->invokeArgs($this->class, [ $item ]);

        $this->assertSame($expected, $result);
    }

}

?>
