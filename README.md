idonethis
=========

A PHP class to mail iDoneThis

Usage
-----

Include this file, and use like this:

````
$idt = new iDoneThis('email', 'team name');
if ($idt->send('I done this')); {
  // mail was accepted for delivery
else {
  // mail did not send
}
````
