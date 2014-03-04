calc - Step 1
====

Here we set up the project :

-	First we create a basic `composer.json` file (where we requier phpunit like dependance and we autoload our classes).

-	Then we create the `phpunit.xml` file in the root of the project where we configure phpunit.

	In this config we put :
	-	`colors="true"` to have a visual indicator (green ok, red fail). And it's fun!
	-	Some other settings, for further informations [configuration file](http://phpunit.de/manual/3.7/en/appendixes.configuration.html).
	-	And finally in the `directory` tag we put the path to our tests folder (here `./tests/`).


You can also add an alias into your `.bash` / `.bash_profile` to speed your test workflow.

Like `alias phpunit='vendor/bin/phpunit';`

I personnaly use `alias t='vendor/bin/phpunit';`

Now if you `cd the directory` and then run your alias phpunit should run the tests.
