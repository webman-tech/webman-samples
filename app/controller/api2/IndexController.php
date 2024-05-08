<?php

namespace app\controller\api2;

use OpenApi\Attributes as OA;

class IndexController
{
    #[OA\Get(path: '/api2/index', summary: 'api2 入口')]
    #[OA\Response(response: 200, description: 'ok')]
    public function index()
    {
        return 'api2';
    }
}