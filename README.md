Magerror
========

This extension uses PHP-Error to provide detailed, interactive, error reporting during magento development.

**Do not install on a production site!** If you do, bad things will happen!

Installation
------------

This module can be installed using Composer. Other methods of installation are unsupported at present. It can be
installed using the standard composer installation, however it's necessary to add an extra repository to your root
level composer.json:

    https://github.com/bullfrogchampion/PHP-Error

Then, just install as usual:
 
    composer require "bullfrogchampion/Magerror" "1.*" --dev

Roadmap
-------

 - Add abilty to disable using system configuration
 - Add support for other PHP Error Reporting tools
 - Find some way of removing the terrible require lines for the dependancies, while still including them using composer.