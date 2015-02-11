# NHCohen Partners

## Compiling Sass

1. Make sure you have compass and susy installed: ```compass -v``` & ```susy -v```
	* If not installed: ```gem install compass``` / ```gem install susy```
1. ```compass watch``` or ```compass compile -e production``` in the project directory (same directory as ```config.rb```)

## .htaccess without SSL

If you need to change the .htaccess file, run this command to prevent committing it to the repo:
```
git update-index --assume-unchanged httpdocs/.htaccess
```

To revert it:
```
git update-index --no-assume-unchanged
```
