How long until tomorrowland
==============

Welcome to the repository for the 100 day challenge website

Development
----------------------------

Clone the project to your computer, install `Vagrant`_ and `VirtualBox`_

.. code-block:: console

    $ vagrant up

It will create a virtual machine with VirtualBox
You will need to edit your hosts file to add:

.. code-block:: console

    192.168.56.69 dev.howlonguntiltomorrowland.com


You will also need to download the dependencies via Composer and Bower

.. code-block:: console

    $ composer install
    $ bower install

Then access the website via http://dev.howlonguntiltomorrowland.com

Enjoy!

.. _Vagrant: https://www.vagrantup.com/
.. _VirtualBox: https://www.virtualbox.org/wiki/Downloads