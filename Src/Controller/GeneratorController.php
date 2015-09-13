<?php
/**
 * @link https://github.com/old-town/zf2-metadata-generator
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Zf2MetadataGenerator\Controller;

use Zend\Mvc\Controller\AbstractConsoleController;

/**
 * Class GeneratorController
 *
 * @package OldTown\Zf2MetadataGenerator\Controller
 */
class GeneratorController extends AbstractConsoleController
{
    /**
     * Запуск генератора
     *
     */
    public function generateAction()
    {
        return 'done';
    }
}
