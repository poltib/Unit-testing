calc - Intro
====

In this branche the tests are run with [PhpSpec](http://www.phpspec.net/).

We just change the `composer.json` file with

	"require-dev": {
        "phpspec/phpspec": "2.0.*@dev"
    }

And that's it if you type in your terminal `vendor/bin/phpspec run` (or create an alias) the test suite will run.

For more details go to the spec folder and read the test files.
