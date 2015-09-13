<?php
/**
 * @link https://github.com/old-town/zf2-metadata-generator
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Zf2MetadataGenerator\PhpUnit\Test;

use OldTown\Zf2MetadataGenerator\PhpUnit\TestData\TestPaths;
use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

/**
 * Class ModuleTest
 *
 * @package OldTown\Zf2MetadataGenerator\PhpUnit\Test
 */
class ModuleTest extends AbstractConsoleControllerTestCase
{
    /**
     * Проверка того что модуль успешно загружается
     *
     * @return void
     */
    public function testLoadModule()
    {
        /** @noinspection PhpIncludeInspection */
        $this->setApplicationConfig(
            include TestPaths::getApplicationConfig()
        );
        $this->assertModulesLoaded(['OldTown\Zf2MetadataGenerator']);
    }
}
