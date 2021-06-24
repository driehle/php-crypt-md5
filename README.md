PHP crypt-md5
=============

A pure PHP implementation of an MD5-hashsum-based implementation of the crypt routine, which can be used to generate hashs for Apache's passwd files.

[![Build Status](https://github.com/driehle/php-crypt-md5/workflows/Continuous%20Integration/badge.svg)](https://github.com/driehle/php-crypt-md5/actions?query=workflow%3A"Continuous+Integration")
[![Latest Stable Version](https://poser.pugx.org/driehle/php-crypt-md5/v/stable)](https://packagist.org/packages/driehle/php-crypt-md5) 
[![Total Downloads](https://poser.pugx.org/driehle/php-crypt-md5/downloads)](https://packagist.org/packages/driehle/php-crypt-md5) 
[![Latest Unstable Version](https://poser.pugx.org/driehle/php-crypt-md5/v/unstable)](https://packagist.org/packages/driehle/php-crypt-md5) 
[![License](https://poser.pugx.org/driehle/php-crypt-md5/license)](https://packagist.org/packages/driehle/php-crypt-md5)

Description
-----------

unix_md5_crypt() provides a crypt()-compatible interface to the
rather new MD5-based crypt() function found in modern operating systems.
It's based on the implementation found on FreeBSD 2.2.[56]-RELEASE and
contains the following license in it:

	"THE BEER-WARE LICENSE" (Revision 42):
	<phk@login.dknet.dk> wrote this file.  As long as you retain this notice you
	can do whatever you want with this stuff. If we meet some day, and you think
	this stuff is worth it, you can buy me a beer in return.   Poul-Henning Kamp

apache_md5_crypt() provides a function compatible with Apache's
.htpasswd files. This was contributed by Bryan Hart (<bryan@eai.com>).

Installation
-----

The latest version of this package can be installed via Composer:

```
composer require driehle/php-crypt-md5
```

All available versions can be found under <https://packagist.org/packages/driehle/php-crypt-md5>.

Usage
-----

```
$cryptedpassword = Md5Crypt::unix   ($password [, $salt [, $magicstring ]);
$apachepassword  = Md5Crypt::apache ($password [, $salt]);
```


Authors
-------

 * Dennis Riehle <spam@dennisriehle.de>
 * Fabian Steiner <info@fabis-site.net> (thanks for bugfixing!)
 * Jörg Reinholz <http://www.fastix.de/> (thanks for bugfixing!)

Other implementations this one is based on:

 * perl's Crypt::PasswdMD5 by Luis Munoz (lem@cantv.net)
 * phyton's md5crypt.py by Michal Wallace http://www.sabren.com/
 * /usr/src/libcrypt/crypt.c from FreeBSD 2.2.5-RELEASE
