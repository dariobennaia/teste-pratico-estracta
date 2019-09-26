<?php
/**
 * Created by PhpStorm.
 * User: dario
 * Date: 25/09/19
 * Time: 20:50
 */

namespace Src\Helpers;

/**
 * Class TemplateHelper
 * @package Src\Helpers
 */
class TemplateHelper
{

    /**
     * @param $view
     * @param null $data
     * @return string
     */
    public function view($view, $data = null)
    {
        try {
            if (!is_null($data)) {
                extract($data);
            }
            if (file_exists(__DIR__ . "/../Views/" . $view . ".php")) {
                require_once __DIR__ . "/../Views/" . $view . ".php";
            } else {
                throw new \Exception("view {$view} não encontrada");
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
