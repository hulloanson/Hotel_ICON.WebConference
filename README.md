*The COMP3421 project's brief dev guide*

### HTTP API endpoints doc
See [this](./documentation/http-api.md). 

### Using JNL server for testing
1. Login ssh
2. `git clone http://gogs.voidspace.me/WebDevelopment/Hotel_ICON.WebConference.git public_html`
3. `chmod -R a+rw public_html/cache`
4. Add `RewriteBase /~[your user name]/` to public_html/.htaccess and public_html/public/.htaccess

### To install the dev tools, highlighting etc

1. Install composer
2. Execute `composer install`
3. Methods and Classes stubs can be found in vendor/phalcon/ide

### Creating controller

1. Find the vendor/bin/phalcon.php
2. Execute `./phalcon.php controller [controller name]`

### Creating model

1. Since we use MongoDB, we use the [Phalcon ODM](https://docs.phalconphp.com/en/latest/reference/odm.html)
2. So to create model, we make Classes in app/models folder that extends the \Phalcon\Mvc\Collection class.

### Creating a HTTP data endpoints (api)

1. Use router.php. Documentation at https://docs.phalconphp.com/en/latest/reference/routing.html
2. Briefly, `$router->add*` first specify path of the endpoint and thenmake reference to controllers
3. In this project, all data api are prefixed with '/api'
~~1. Make a controller. The name of the controller we be the new endpoint~~
~~2. e.g. app/model/TestController.php is exposed at http://jnl.ddns.net:8081/test~~
~~3. For nested endpoint, add a public function with name `[endpoint-name]Action()`~~
 
### Creating a view

1. Can either use the [Volts](https://docs.phalconphp.com/en/latest/reference/volt.html) template (\*.volt) or the PHP template (\*.phtml)
2. Data are passed from controller to view via setVar or magic setters. For details see [this](https://docs.phalconphp.com/en/latest/reference/controllers.html)
3. Each folder is an endpoint relative to root. `index.volt/index.phtml` will be the index of the endpoint; `[name].volt/[name].phtml` will be nested endpoint `[endpoint]/[name]`
4. A corresponding controller should be added. e.g. `views/test/all.volt` should have a corresponding `TestController::allAction`

### Send data without using view / override view

1. In the desired endpoint function (Controller::someAction), return a [Response](https://docs.phalconphp.com/en/latest/api/Phalcon_Http_Response.html) object

### Obtaining GET/POST data
1. See https://docs.phalconphp.com/en/latest/reference/controllers.html#request-and-response
2. To handle GET/POST data, use `$this->request->get` or `$this->request->getPost` in the handling controller function.

### More details on how to use Phalcon
1. See https://docs.phalconphp.com/en/latest/index.html