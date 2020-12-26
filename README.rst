Florida DrupalCamp Tailwind CSS Workshop
########################################

Local web server
================

Run the following command to start a local web server. Going to that URL in your browser should show you the example page.

.. code::

    php -S 127.0.0.1:8000 -t public

Building the CSS
================

The CSS is generated from ``assets/css/tailwind.pcss`` and is compiled using ``postcss-cli``.

To simplify the process, there are some custom npm scripts added in ``package.json`` that can be used to compile the CSS:

- ``yarn dev`` - generate the development CSS which is un-purged and un-minified.
- ``yarn prod`` - generate the production CSS which is purged and minified.
- ``yarn watch`` - generate the development CSS, but re-generate automatically when the source file is changed.
