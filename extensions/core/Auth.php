<?php

namespace extensions\core;

use nadir\core\Request;
use nadir\core\AppHelper;

/**
 * This is the auth general class for custom extension.
 * @author Leonid Selikhov
 */
class Auth extends AbstractAuth
{
    /** @var \nadir\core\Request The request object. */
    protected $request = null;

    /** @var array The route config. */
    protected $routeConfig = null;

    /** @var mixed The occured error instance. */
    protected $error       = null;

    /**
     * The constructor receives the request object to read the route configuration.
     * @param \nadir\core\Request $oRequest The request object.
     */
    public function __construct(Request $oRequest)
    {
        $this->request     = $oRequest;
        $this->routeConfig = AppHelper::getInstance()->getRouteConfig();
    }

    /**
     * It checks cookies according custom algorithm.
     * @param array $aCookies The associated array of cookies.
     */
    protected function checkCookies(array $aCookies)
    {
        // Put your code here...
    }

    /**
     * The main executable method of this class.
     * @throws \Exception It's throwed if 'auth' option wasn't defined.
     */
    public function run()
    {
        if (!isset($this->routeConfig['auth'])) {
            throw new \Exception("Undefined option 'auth' for the current route.");
        }
        $mCookies = $this->request->getCookies();
        $this->checkCookies(!is_null($mCookies) ? $mCookies : array());
    }

    /**
     * {@inheritdoc}
     */
    public function isValid()
    {
        return is_null($this->error);
    }

    /**
     * {@inheritdoc}
     */
    public function onFail()
    {
        // Put your code here...
    }
}