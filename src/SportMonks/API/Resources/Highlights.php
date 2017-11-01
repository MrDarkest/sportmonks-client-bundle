<?php
/**
 * Created by PhpStorm.
 * User: dimitar
 * Date: 31.10.17
 * Time: 08:13
 */

namespace SportMonks\API\Resources;


use SportMonks\API\Traits\Resource\FindAll;
use SportMonks\API\Traits\Resource\NextPage;
use SportMonks\API\Traits\Utility\InitTrait;

/**
 * Class Highlights
 * @package SportMonks\API\Resources
 */
class Highlights extends ResourceAbstract
{
    use InitTrait;

    use FindAll;

    use NextPage;
}