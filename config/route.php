<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use app\middleware\SampleMiddleware2;
use WebmanTech\Swagger\RouteAnnotation\DTO\RouteConfigDTO;

// 注册全局的 callback 类型的路由，然后可以在 openapi 注解中使用
RouteConfigDTO::registerNamedMiddleware('sample_middleware3', function() {
    return new SampleMiddleware2('from named sample_middleware3');
});
