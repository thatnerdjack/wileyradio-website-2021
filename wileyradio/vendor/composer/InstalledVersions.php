<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => 'dc88fc436d92b1402c8f8dd4b457e4f791d1d8c4',
    'name' => 'automattic/underscores',
  ),
  'versions' => 
  array (
    'automattic/underscores' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => 'dc88fc436d92b1402c8f8dd4b457e4f791d1d8c4',
    ),
    'dealerdirect/phpcodesniffer-composer-installer' => 
    array (
      'pretty_version' => 'v0.7.1',
      'version' => '0.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe390591e0241955f22eb9ba327d137e501c771c',
    ),
    'gettext/gettext' => 
    array (
      'pretty_version' => 'v4.8.4',
      'version' => '4.8.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '58bc0f7f37e78efb0f9758f93d4a0f669f0f84a1',
    ),
    'gettext/languages' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '38ea0482f649e0802e475f0ed19fa993bcb7a618',
    ),
    'grogy/php-parallel-lint' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'jakub-onderka/php-parallel-lint' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'mck89/peast' => 
    array (
      'pretty_version' => 'v1.12.0',
      'version' => '1.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '833be7a294627a8c5b1c482cbf489f73bf9b8086',
    ),
    'mustache/mustache' => 
    array (
      'pretty_version' => 'v2.13.0',
      'version' => '2.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e95c5a008c23d3151d59ea72484d4f72049ab7f4',
    ),
    'php-parallel-lint/php-parallel-lint' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '474f18bc6cc6aca61ca40bfab55139de614e51ca',
    ),
    'phpcompatibility/php-compatibility' => 
    array (
      'pretty_version' => '9.3.5',
      'version' => '9.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9fb324479acf6f39452e0655d2429cc0d3914243',
    ),
    'phpcompatibility/phpcompatibility-paragonie' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ddabec839cc003651f2ce695c938686d1086cf43',
    ),
    'phpcompatibility/phpcompatibility-wp' => 
    array (
      'pretty_version' => '2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7dc0cd7a8f767ccac5e7637550ea1c50a67b09e',
    ),
    'ramsey/array_column' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f8e52eb28e67eb50e613b451dd916abcf783c1db',
    ),
    'rmccue/requests' => 
    array (
      'pretty_version' => 'v1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '87932f52ffad70504d93f04f15690cf16a089546',
    ),
    'squizlabs/php_codesniffer' => 
    array (
      'pretty_version' => '3.5.8',
      'version' => '3.5.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d583721a7157ee997f235f327de038e7ea6dac4',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.2.4',
      'version' => '5.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '0d639a0943822626290d169965804f79400e6a04',
    ),
    'wp-cli/i18n-command' => 
    array (
      'pretty_version' => 'v2.2.6',
      'version' => '2.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a66da3f09f6a728832381012848c3074bf1635c8',
    ),
    'wp-cli/mustangostang-spyc' => 
    array (
      'pretty_version' => '0.6.3',
      'version' => '0.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6aa0b4da69ce9e9a2c8402dab8d43cf32c581cc7',
    ),
    'wp-cli/php-cli-tools' => 
    array (
      'pretty_version' => 'v0.11.12',
      'version' => '0.11.12.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e472e08489f7504d9e8c5c5a057e1419cd1b2b3e',
    ),
    'wp-cli/wp-cli' => 
    array (
      'pretty_version' => 'v2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6dde820a8f6f183f4b6d751e5be1cd343974f333',
    ),
    'wp-coding-standards/wpcs' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7da1894633f168fe244afc6de00d141f27517b62',
    ),
    'wptrt/wpthemereview' => 
    array (
      'pretty_version' => '0.2.1',
      'version' => '0.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '462e59020dad9399ed2fe8e61f2a21b5e206e420',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
