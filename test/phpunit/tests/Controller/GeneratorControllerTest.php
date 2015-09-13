<?php
/**
 * @link https://github.com/old-town/zf2-metadata-generator
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Zf2MetadataGenerator\PhpUnit\Test\Controller;

use OldTown\Zf2MetadataGenerator\PhpUnit\TestData\TestPaths;
use Zend\Test\PHPUnit\Controller\AbstractConsoleControllerTestCase;

/**
 * Class GeneratorControllerTest
 *
 * @package OldTown\Zf2MetadataGenerator\PhpUnit\Test\Controller
 */
class GeneratorControllerTest extends AbstractConsoleControllerTestCase
{
    /**
     * @return void
     */
    protected function setUp()
    {
        $this->setApplicationConfig(include TestPaths::getApplicationConfig());
        parent::setUp();
    }


    /**
     * Запуск генерации
     *
     * @return void
     */
    public function testGenerate()
    {
        $this->dispatch('Zf2MetadataGenerator generate');
        $this->assertMatchedRouteName('generatePhpStormMeta');
        $this->assertControllerClass('generatorcontroller');
        $this->assertActionName('generate');

        $this->assertConsoleOutputContains('done');
    }
}
