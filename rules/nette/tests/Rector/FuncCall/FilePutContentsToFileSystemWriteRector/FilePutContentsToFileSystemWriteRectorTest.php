<?php

declare(strict_types=1);

namespace Rector\Nette\Tests\Rector\FuncCall\FilePutContentsToFileSystemWriteRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Nette\Rector\FuncCall\FilePutContentsToFileSystemWriteRector;

final class FilePutContentsToFileSystemWriteRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return FilePutContentsToFileSystemWriteRector::class;
    }
}
