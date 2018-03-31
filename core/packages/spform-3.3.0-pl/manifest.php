<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => '
SPForm - Simple Spam-proof Contact Form Snippet
==============================================================

Author: Bob Ray

Tutorial: http://bobsguides.com/spform-tutorial.html
Troubleshooting: http://bobsguides.com/spform-faq.html
Bugs and Requests: https://github.com/BobRay/SPForm/issues

SPForm is a simple spam-proof contact form for MODx.

Basic Usage
-----------

    When the installation is completed, you should have a fully working
    spam-proof contact form that sends email to the address you give
    during the install.

    Minimal snippet call: [[!SPForm]]

    To see SPForm\'s options, just go to the elements section of the Manager
    and select the SPForm snippet. Then click on the "Properties" tab.


',
    'license' => '   SPForm Package

   License:
      This program is free software; you can redistribute it and/or
      modify it under the terms of the GNU General Public License
      as published by the Free Software Foundation; either version 2
      of the License, or (at your option) any later version.

      This program is distributed in the hope that it will be useful,
      but WITHOUT ANY WARRANTY; without even the implied warranty of
      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
      GNU General Public License for more details.

      You may have received a copy of the GNU General Public License
      along with this program; if not, write to the Free Software
      Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,
      USA.

      An on-line copy of the GNU General Public License can be found
      http://www.fsf.org/copyleft/gpl.html.',
    'changelog' => 'Version 3.3.0-pl
----------------
Add JS popup if captcha input is empty
Fix bug with cssPath property
Fix bug with useemailsender property

Version 3.2.2-pl
----------------
Removed leftover debugging code

Version 3.2.1-pl
----------------
Minor bug fixes and improvements

Version 3.2.0-pl
----------------
Better validation with strict DOCTYPE (thanks Roland)
Corrected class of created resources

Version 3.2.0-rc2
-----------------
Fixed bug with useemailsender property type
Refactored snippet property array

Version 3.2.0-rc1
-------------
Added useemailsender and spfrom properties to override user email address in EMAIL_FROM

Version 3.1.7
-------------
Added Russian Translation
Created English nl properties file while awaiting nl translation

Version 3.1.6
-------------
Fixed bug with lexicon->load for other languages
Added language strings to JS alerts
Added Spanish translation files

Version 3.1.5
-------------
Fixed bug with newline in language string

Version 3.1.4
-------------
Moved Banlist into a chunk
Fixed bugs with property language keys
Minor bug fixes
Uninstall now removes the two resources
Added language strings for SPFResponse properties
Added language strings for SPForm properties
Removed PHP4 constructor
Added changelog to build
Removed deprecated PHP functions
Internationalized property descriptions
Refactored for Git
Build tested with MODx 2.0.6-pl2


Version 3.1.0
-------------
Changed resources to published
Fixed minor bugs
Fixed MODx xPDO and Log constants for RC1
Added return email to message body.

Version 3.0.8
-------------
Fixed critical bug in PHP4 Constructor.


Version 3.0.7
--------------
Completely refactored for Revolution.
',
    'setup-options' => 'spform-3.3.0-pl/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'aa82f9f639ba26ff872f0c2d84a5ff8b',
      'native_key' => 'spform',
      'filename' => 'modNamespace/689e706ac84abeb614aa6f2f9593a326.vehicle',
      'namespace' => 'spform',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '4a93a1c8de71b03ab420b3d64cc4ac67',
      'native_key' => 1,
      'filename' => 'modCategory/ebbc91242dfbdf45d01dda4a8192035c.vehicle',
      'namespace' => 'spform',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => '811a15868616244c8103990fee8f7fda',
      'native_key' => 1,
      'filename' => 'modResource/176ef946af84d399725343fc3c331ba8.vehicle',
      'namespace' => 'spform',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modResource',
      'guid' => 'e88e83a4e23ef821664e5aa616b5966d',
      'native_key' => 2,
      'filename' => 'modResource/4f456dcad4ee5e1e3a041317e83965e0.vehicle',
      'namespace' => 'spform',
    ),
  ),
);