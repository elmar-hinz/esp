..  Editor configuration
	...................................................
	* utf-8 with BOM as encoding
	* tab indent with 4 characters for code snippet.
	* optional: soft carriage return preferred.

.. include:: Includes.txt

Administrator Manual
====================

Installing the extension
------------------------

Install the extension with the extension manager. No configuration is required.

Installing the stored procedure examples
----------------------------------------

Stored procedure examples are located in ext_procedures.sql.

For installation by commandline do something like this. Use the credentials matching your database.

::

	cat ext_procedures.sql | mysql -u root -p secret -D typo3

Alternatively you can install the procedures or parts of the file by copy & paste 
into your preferred database administration tool i.e. phpMyAdmin.











