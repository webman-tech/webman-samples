<?php

namespace app\controller\api1;

class IndexController
{
    /**
     * api1 入口
     *
     * @OA\Get(
     *     path="/api1/index",
     *     @OA\Response(
     *         response="200",
     *         description="ok"
     *     )
     * )
     * @return string
     */
    public function index()
    {
        return 'api1';
    }
}