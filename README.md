PHP crypt-md5
=============

A pure PHP implementation of an MD5-hashsum-based implementation of the crypt routine, which can be used to generate hashs for Apache's passwd files.


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
.htpasswd files. This was contributed by Bryan Hart <bryan@eai.com>.


Usage
-----

  $cryptedpassword = md5crypt_unix   ($password [, $salt [, $magicstring ]);
  $apachepassword  = md5crypt_apache ($password [, $salt]);



Authors
-------

 * Dennis Riehle <selfhtml@riehle-web.com>
 * Fabian Steiner <info@fabis-site.net> (thanks for bugfixing!)

Other implementations this one is based on:

 * perl's Crypt::PasswdMD5 by Luis Munoz (lem@cantv.net)
 * phyton's md5crypt.py by Michal Wallace http://www.sabren.com/
 * /usr/src/libcrypt/crypt.c from FreeBSD 2.2.5-RELEASE


Version
-------

Version:   1.0 stable
Last edit: Tue, 13 September 2005 13:49:28 GMT