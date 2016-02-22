
This is a toy app for messing around with PHP web services.

To install:
- Install virtualbox
- Install vagrant
- Clone the repo
- `cd <project dir>/vagrant`
- `vagrant up`
- `vagrant provision`
- From your machine:  browse or curl to `http://localhost:8080/phpToy/`...  This should give a "hello world" that says things are basically working
- From your machine:  `curl http://localhost:8080/phpToy/api/hello.php` should return a well-formed JSON.
- And then have fun and please share your findings!
