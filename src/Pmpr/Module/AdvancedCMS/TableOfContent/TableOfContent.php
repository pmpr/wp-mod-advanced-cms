<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624029fab98f6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\TableOfContent; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class TableOfContent extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\160\137\151\156\x73\x65\162\x74\137\x70\157\x73\164\137\144\x61\164\141", [$this, "\x6d\x75\145\x67\x73\155\x6d\x69\x63\x73\x71\x73\147\x75\x63\x6d"]); parent::kgquecmsgcouyaya(); } public function muegsmmicsqsgucm($icwicymcioeyeyek) { return $this->iumiqmcwkquqecso($icwicymcioeyeyek, true); } public function iumiqmcwkquqecso($icwicymcioeyeyek, $cwwowqyuwccuykom = false) { $iueymcwwscwqkiyq = ManipulateArray::get($icwicymcioeyeyek, "\160\x6f\x73\164\x5f\163\164\141\164\x75\x73"); if (!(in_array(ManipulatePost::gueasuouwqysmomu($icwicymcioeyeyek), $this->esciskwmewkgwaik()) && $iueymcwwscwqkiyq === "\x70\165\x62\154\151\x73\x68")) { goto iymaiwqimisgacmk; } $icwicymcioeyeyek = Generator::symcgieuakksimmu()->goeuwocuuigcicgu($icwicymcioeyeyek, $cwwowqyuwccuykom); iymaiwqimisgacmk: return $icwicymcioeyeyek; } public function iemaakgqgqosiecm() { Widget::symcgieuakksimmu(); if (!is_admin()) { goto mugscgugcogcasue; } Setting::symcgieuakksimmu(); mugscgugcogcasue: } }