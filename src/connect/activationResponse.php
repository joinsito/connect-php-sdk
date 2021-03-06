<?php
/**
 * This file is part of the Ingram Micro Cloud Blue Connect SDK.
 *
 * @copyright (c) 2018. Ingram Micro. All Rights Reserved.
 */

namespace Connect;

require_once "exception.php";

/**
 * Class ActivationTileResponse
 * @package Connect
 */
class ActivationTileResponse
{

    /**
     * @var null|string
     */
    public $activationTile = "Activation succeeded";

    /**
     * ActivationTileResponse constructor.
     * @param null $msg
     */
    public function __construct($msg = null)
    {
        if($msg){
            $this->activationTile = $msg;
        }
    }

}

/**
 * Class ActivationTemplateResponse
 * @package Connect
 */
class ActivationTemplateResponse
{
    /**
     * @var
     */
    public $templateid;

    /**
     * ActivationTemplateResponse constructor.
     * @param $templateid
     */
    public function __construct($templateid)
    {
        $this->templateid = $templateid;
    }
}