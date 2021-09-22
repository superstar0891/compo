<?php

namespace Odan\Migration\Test;

use Odan\Migration\Adapter\Database\MySqlSchemaAdapter;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Output\NullOutput;

/**
 * Test.
 */
class MySqlSchemaAdapterTest extends TestCase
{
    use DbTestTrait;

    /**
     * Test.
     */
    public function testEsc(): void
    {
        $output = new NullOutput();
        $pdo = $this->getPdo();
        $dba = new MySqlSchemaAdapter($pdo, $output);

        $this->assertSame('NULL', $dba->esc(null));
        $this->assertSame('abc', $dba->esc('abc'));
    }

    /**
     * Test.
     */
    public function testQuote(): void
    {
        $output = new NullOutput();
        $pdo = $this->getPdo();
        $dba = new MySqlSchemaAdapter($pdo, $output);

        $this->assertSame('NULL', $dba->quote(null));
        $this->assertSame("'abc'", $dba->quote('abc'));
    }

    /**
     * Test.
     */
    public function testIdent(): void
    {
        $output = new NullOutput();
        $pdo = $this->getPdo();
        $dba = new MySqlSchemaAdapter($pdo, $output);

        $this->assertSame('`db`', $dba->ident('db'));
        $this->assertSame('`db`.`table`', $dba->ident('db.table'));
        $this->assertSame('`db`.`table`.`field`', $dba->ident('db.table.field'));
        $this->assertSame('`abcdef`', $dba->ident("abc'def"));
        $this->assertSame('`abcdef`.`ghi`', $dba->ident("abc'def.ghi"));
    }
}
