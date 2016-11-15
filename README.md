*The COMP3421 project's brief dev guide*

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

### Creating a endpoint

1. Make a controller. The name of the controller we be the new endpoint
2. e.g. app/model/TestController.php is exposed at [http://jnl.ddns.net:8081/test]
3. For nested endpoint, add a public function with name `[endpoint-name]Action()`
 
### Creating a view

1. Can either use the [Volts](https://docs.phalconphp.com/en/latest/reference/volt.html) template (\*.volt) or the PHP template (\*.phtml)
2. Data are passed from controller to view via setVar or magic setters. For details see [this](https://docs.phalconphp.com/en/latest/reference/controllers.html)
3. Each folder is an endpoint relative to root. `index.volt/index.phtml` will be the index of the endpoint; `[name].volt/[name].phtml` will be nested endpoint `[endpoint]/[name]` 