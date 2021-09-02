# micro-mvc-php
a micro mvc framework for php
1) Config your Web url in .env .
## lifecycle
- `All request proccess by index.php`
- `Autoload files include in bootstrap/init.php`
- `BASE_URL IS DEFINE IN init.php => it is the root web url`
- `you can customize your specific routes in file App/Core/Router.php in PATHS CONST`
- `you can customize 404 page url in file App/Core/Router.php in NOT_FOUND CONST`
####Parameters
- `You have access to url query strings with 2 ways`
####### For example
- `Our url: www.test.com?name=amir`
- 1) `(new \App\Core\Request)->name`
- 2) `(new \App\Core\Request)->input('name')`