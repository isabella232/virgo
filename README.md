# Eclipse Virgo Homepage

## Run a local preview with Docker

The Eclipse Virgo homepage depends on features of the Git repo `eclipse.org-common`.

For best results please grab both `eclipse.org-common` and `virgo`:

```bash
$ git clone git://git.eclipse.org/gitroot/www.eclipse.org/eclipse.org-common.git eclipse.org-common
$ git clone git://git.eclipse.org/gitroot/www.eclipse.org/virgo.git virgo
```

...and fire up a (temporary) Docker container linking the source of the homepage:

```bash
docker run --rm -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:5.6-apache
```

You'll find (sort of a) preview locally at [http://locahost/virgo](http://locahost/virgo).

> Note: This setup was first published as [Serving a PHP homepage locally with Docker](https://devops.datenkollektiv.de/serving-a-php-homepage-locally-with-docker.html).
