<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f6492a91625             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Rating\Model\Rate; class Theme extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\x6f\x6d\x6d\x65\x6e\x74\137\x66\157\x72\155\137\142\145\x66\x6f\162\145", [$this, "\162\x65\156\x64\x65\162"], 0); parent::wigskegsqequoeks(); } public function render($post) { echo $this->sqkcuwewwecosise($post, false); } public function sqkcuwewwecosise($post, $egcgeqyisgamuamo = false) : string { $nsmgceoqaqogqmuw = ''; if (!$this->gaogimymcgsiqois()) { goto qsygcycwieukkgwc; } $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!in_array($useksmwkuswkwcqg, ["\x70\157\163\x74"])) { goto umgaesggesswoaqe; } $qookweymeqawmcwo = ["\162\x65\x73\x75\154\164\x5f\155\141\163\x6b" => __("\122\x61\164\151\156\x67\40\101\166\145\162\141\x67\145\x20\x25\163\x20\x6f\146\x20\x25\x73\x20\x7c\x20\x52\141\164\151\x6e\147\x20\103\x6f\x75\x6e\164\72\40\x25\x73", PR__PKG__ADVANCED_CMS)]; $qqyuqswckkcomeak = Rate::symcgieuakksimmu()->qooeaookuemoqecm([], $post); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, "\143\x6f\165\x6e\x74"); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\141\166\x65\x72\x61\147\x65"); $qookweymeqawmcwo["\162\x61\164\151\x6e\x67"] = $qqyuqswckkcomeak; if (!$egcgeqyisgamuamo) { goto kciouyuaqkyqomam; } $eoiqickgueqaoioi = Rate::symcgieuakksimmu()->jwskisguugiiqwsq($post); if ($eoiqickgueqaoioi) { goto sycygoiaiqqageym; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\164\151\164\x6c\x65" => __("\x59\x6f\165\x72\x20\157\x70\x69\156\151\157\156\x20\151\163\x20\x69\155\160\x6f\x72\164\141\x6e\164\x20\164\x6f\x20\165\x73", PR__PKG__ADVANCED_CMS), "\147\165\x69\x64\x65\137\x74\145\170\x74" => sprintf(__("\122\141\x74\x65\40\164\x68\151\163\40\160\157\163\x74\x20\x25\x73\40\x74\157\x20\45\x73", PR__PKG__ADVANCED_CMS), 1, 5)]); sycygoiaiqqageym: $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\141\164\x69\x6e\x67\x5f\146\x6f\162\155\137\162\x65\156\144\145\162\137\x70\x61\x72\141\155\x65\x74\145\162\163"), $qookweymeqawmcwo, $post); if (!$eoiqickgueqaoioi) { goto gygawoqywkukmqee; } $qookweymeqawmcwo["\x75\163\145\162\x5f\x72\141\164\145"] = sprintf(__("\x59\x6f\x75\40\150\141\x76\145\40\x61\x6c\x72\x65\x61\144\x79\40\x72\x61\164\145\x20\x25\x73\x20\164\x6f\40\x74\150\151\x73\x20\160\157\163\164\56", PR__PKG__ADVANCED_CMS), $this->msywmyaoqmaegsuy(ManipulateArray::get($eoiqickgueqaoioi, "\x76\x61\154\165\145", 1))); gygawoqywkukmqee: kciouyuaqkyqomam: if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto wwkgkaecgiwggcck; } $qookweymeqawmcwo["\162\145\x73\165\154\164"] = $this->msywmyaoqmaegsuy(sprintf($qookweymeqawmcwo["\x72\x65\x73\165\154\164\137\x6d\141\163\x6b"], round($wiiqgewkwwkaukyo, 2), 5, intval($gaeqamemwmwsyukm))); wwkgkaecgiwggcck: $qookweymeqawmcwo["\160\157\x73\x74"] = ManipulatePost::mwikyscisascoeea($post); $qookweymeqawmcwo["\x72\145\x6e\x64\x65\x72"] = $egcgeqyisgamuamo; $qookweymeqawmcwo["\162\x61\164\x69\x6e\x67\x5f\146\x6f\162\155"] = $this->imqoowygmmgysyyu(); $qookweymeqawmcwo["\x66\x65\x65\144\142\x61\143\153\137\x66\157\162\155"] = $this->ocoacoemoquqgqwm(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x66\157\x72\155", $qookweymeqawmcwo); umgaesggesswoaqe: qsygcycwieukkgwc: return $nsmgceoqaqogqmuw; } public function imqoowygmmgysyyu() : ?string { return $this->iuygowkemiiwqmiw("\x72\x61\164\x69\x6e\147", ["\x6e\141\x6d\x65" => "\162\x61\164\151\156\147"]); } public function ocoacoemoquqgqwm() : ?string { $qookweymeqawmcwo = [self::ymckmcsiymwqucoq => [Form::uouyygwcgsmygaee("\x72\x61\x74\151\156\x67\137\146\x65\145\x64\x62\141\x63\153", __("\122\x61\x74\x69\x6e\147\40\x46\x65\145\144\142\x61\143\153", PR__PKG__ADVANCED_CMS))->qigsyyqgewgskemg("\x6d\142\x2d\62"), Form::uikcsmyiqacmyoau(), Form::ucmasmuimegwqeuk("\162\141\x74\x69\156\147\137\x73\165\x62\x6d\151\x74", __("\x53\165\x62\x6d\151\x74", PR__PKG__ADVANCED_CMS))->qigsyyqgewgskemg("\142\x74\156\x2d\x62\154\x6f\x63\153\x20\152\165\x73\x74\151\x66\x79\x2d\x63\157\156\164\x65\156\x74\x2d\x63\x65\x6e\164\x65\162")->iswqmkousoeksaae()], "\161\165\x65\x73\164\151\x6f\x6e" => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey)]; $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\141\x74\151\x6e\x67\x5f\x66\145\145\x64\x62\x61\143\153\137\x70\141\x72\141\155\145\164\x65\162\163"), $qookweymeqawmcwo); return $this->iuygowkemiiwqmiw("\x66\145\145\144\x62\141\x63\153", $qookweymeqawmcwo); } }
