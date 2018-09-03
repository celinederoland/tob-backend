<?php
/** @noinspection PhpUnusedParameterInspection */

/**
 * Created by PhpStorm.
 * User: celineperso
 * Date: 18.08.18
 * Time: 07:43
 */

namespace Tob;


use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Klein\ServiceProvider;

class Router {

    use TimeController;

    /** @var Klein */
    private $klein;

    public function register() {

        $this->klein = new Klein();

        $this->klein->onHttpError(function ($code, Klein $router) {
            $router->response()->json(['result' => 'error', 'message' => 'not found']);
        });

        $this->klein->onError(function (Klein $router, $err_msg) {
            $router->response()->code(500);
            $router->response()->json(['result' => 'error', 'message' => $err_msg]);
        });

        $request   = Request::createFromGlobals();
        $json_body = json_decode($request->body(), true);
        if (is_array($json_body)) $request->paramsPost()->merge($json_body);

        $this->klein->respond('*',
            function (Request $request, Response $response, ServiceProvider $service) {
                $response->header('Access-Control-Allow-Origin', '*');
                $response->header('Access-Control-Allow-Methods', '*');
                $response->header('Access-Control-Allow-Headers', '*');
            }
        );
        $this->klein->respond('OPTIONS',
            function (Request $request, Response $response, ServiceProvider $service) {
                $response->json(null);
            }
        );


        $this->timeRoutes();


        $this->klein->dispatch($request);
    }

    public function timeRoutes() {

        $this->klein->respond('GET', '/week/help',

            function (Request $request, Response $response, ServiceProvider $service) {

                $response->json($this->available());
            }
        );

        $this->klein->respond('GET', '/week/[i:id]',

            function (Request $request, Response $response, ServiceProvider $service) {

                $response->json($this->get($request->param('id', 0)));
            }
        );

        $this->klein->respond('GET', '/all',

            function (Request $request, Response $response, ServiceProvider $service) {

                $response->json($this->getAll());
            }
        );

        $this->klein->respond('POST', '/time/[i:time]',

            function (Request $request, Response $response, ServiceProvider $service) {

                $response->json($this->add($request->param('time', 0)));
            }
        );

        $this->klein->respond('POST', '/time/delete/[i:time]',

            function (Request $request, Response $response, ServiceProvider $service) {

                $response->json($this->remove($request->param('time', 0)));
            }
        );

        $this->klein->respond('DELETE', '/time/[i:time]',

            function (Request $request, Response $response, ServiceProvider $service) {

                $response->json($this->remove($request->param('time', 0)));
            }
        );
    }


}