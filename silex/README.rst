****************
Notejam: Silex
****************

Notejam application implemented using `Silex <https://silex.sensiolabs.org/>`_ micro-framework.

Silex version: 2.1.0

PHP version required: >=5.5.9

==========================
Installation and launching
==========================

-----
Clone
-----

Clone the repo:

.. code-block:: bash

    $ git clone git@github.com:komarserjio/notejam.git YOUR_PROJECT_DIR/

-------
Install
-------

Install `composer <https://getcomposer.org/>`_

.. code-block:: bash

    $ cd YOUR_PROJECT_DIR/silex/notejam
    $ curl -s https://getcomposer.org/installer | php

Install dependencies

.. code-block:: bash

    $ cd YOUR_PROJECT_DIR/silex/notejam
    $ php composer.phar install

Create database schema

.. code-block:: bash

    FIXME: TBA


------
Launch
------

Start built-in php web server:

.. code-block:: bash

    $ cd YOUR_PROJECT_DIR/silex/notejam
    $ php -S localhost:8080 -t web web/index.php

Go to http://localhost:8080 in your browser.

---------
Run tests
---------

Run functional tests:

.. code-block:: bash

    $ cd YOUR_PROJECT_DIR/silex/notejam/
    $ ./vendor/bin/phpunit


============
Contribution
============
Do you have Silex experience? Help the app to follow PHP and Silex best practices.

Please send your pull requests in the ``master`` branch.
Always prepend your commits with framework name:

.. code-block:: bash

    Silex: Implemented sign in functionality

Read `contribution guide <https://github.com/komarserjio/notejam/blob/master/contribute.rst>`_ for details.