<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c04d5b17017             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Rating\Model\Rate; class Theme extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\143\x6f\x6d\155\x65\x6e\164\x5f\146\157\162\x6d\137\142\x65\146\157\162\145", [$this, "\x72\x65\156\x64\145\162"], 0); parent::wigskegsqequoeks(); } public function render($post) { echo $this->sqkcuwewwecosise($post, false); } public function sqkcuwewwecosise($post, $egcgeqyisgamuamo = false) : string { $nsmgceoqaqogqmuw = ''; if (!$this->gaogimymcgsiqois()) { goto qmoocweoekqueuyy; } $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!in_array($useksmwkuswkwcqg, ["\160\157\x73\164"])) { goto mqiiqkuaoekeuswo; } $qookweymeqawmcwo = ["\x72\145\x73\165\x6c\x74\137\155\x61\x73\153" => __("\x52\x61\x74\151\x6e\147\40\x41\x76\x65\162\x61\x67\145\40\45\x73\40\x6f\146\x20\45\x73\x20\x7c\40\x52\141\x74\x69\156\x67\x20\103\157\x75\x6e\x74\72\40\45\163", PR__PKG__ADVANCED_CMS)]; $qqyuqswckkcomeak = Rate::symcgieuakksimmu()->qooeaookuemoqecm([], $post); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, "\x63\x6f\165\x6e\164"); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\141\x76\x65\162\x61\x67\x65"); $qookweymeqawmcwo["\x72\141\x74\x69\156\147"] = $qqyuqswckkcomeak; if (!$egcgeqyisgamuamo) { goto eckcqesiokgwkkiw; } $eoiqickgueqaoioi = Rate::symcgieuakksimmu()->jwskisguugiiqwsq($post); if ($eoiqickgueqaoioi) { goto yamyagayiooyeekg; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\x74\151\164\x6c\145" => __("\131\x6f\x75\162\40\x6f\x70\151\x6e\151\x6f\156\x20\x69\x73\x20\151\x6d\x70\157\162\x74\141\156\164\40\x74\157\40\165\163", PR__PKG__ADVANCED_CMS), "\x67\x75\x69\x64\x65\x5f\164\x65\170\164" => sprintf(__("\122\141\x74\145\x20\x74\x68\x69\x73\40\160\157\163\x74\x20\x25\x73\x20\x74\x6f\x20\45\163", PR__PKG__ADVANCED_CMS), 1, 5)]); yamyagayiooyeekg: $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\141\164\x69\156\x67\x5f\x66\x6f\162\x6d\137\162\x65\156\144\145\x72\x5f\160\x61\162\141\x6d\x65\164\145\162\163"), $qookweymeqawmcwo, $post); if (!$eoiqickgueqaoioi) { goto yoagcooekomeokwg; } $qookweymeqawmcwo["\165\163\145\162\137\x72\x61\164\x65"] = sprintf(__("\131\157\165\40\x68\x61\x76\145\x20\x61\x6c\162\145\141\x64\x79\x20\162\x61\x74\145\40\x25\x73\x20\x74\x6f\x20\x74\x68\151\x73\40\160\x6f\163\164\x2e", PR__PKG__ADVANCED_CMS), $this->msywmyaoqmaegsuy(ManipulateArray::get($eoiqickgueqaoioi, "\x76\x61\154\x75\145", 1))); yoagcooekomeokwg: eckcqesiokgwkkiw: if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto ecouwqosmoyyqmkw; } $qookweymeqawmcwo["\x72\x65\x73\165\154\x74"] = $this->msywmyaoqmaegsuy(sprintf($qookweymeqawmcwo["\162\145\163\165\154\164\137\x6d\141\163\x6b"], round($wiiqgewkwwkaukyo, 2), 5, intval($gaeqamemwmwsyukm))); ecouwqosmoyyqmkw: $qookweymeqawmcwo["\160\x6f\163\164"] = ManipulatePost::mwikyscisascoeea($post); $qookweymeqawmcwo["\x72\145\x6e\144\x65\x72"] = $egcgeqyisgamuamo; $qookweymeqawmcwo["\162\x61\x74\x69\x6e\147\x5f\x66\x6f\x72\x6d"] = $this->imqoowygmmgysyyu(); $qookweymeqawmcwo["\146\145\145\x64\142\141\143\x6b\137\146\x6f\162\155"] = $this->ocoacoemoquqgqwm(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\146\x6f\162\x6d", $qookweymeqawmcwo); mqiiqkuaoekeuswo: qmoocweoekqueuyy: return $nsmgceoqaqogqmuw; } public function imqoowygmmgysyyu() : ?string { return $this->iuygowkemiiwqmiw("\x72\141\x74\151\156\x67", ["\x6e\x61\155\x65" => "\x72\141\164\x69\x6e\147"]); } public function ocoacoemoquqgqwm() : ?string { $qookweymeqawmcwo = [self::ymckmcsiymwqucoq => [Form::uouyygwcgsmygaee("\162\141\164\x69\x6e\147\137\146\x65\x65\x64\142\141\143\153", __("\x52\141\164\151\156\x67\x20\x46\145\x65\144\x62\141\x63\x6b", PR__PKG__ADVANCED_CMS))->qigsyyqgewgskemg("\x6d\x62\x2d\x32"), Form::uikcsmyiqacmyoau(), Form::ucmasmuimegwqeuk("\x72\x61\x74\151\x6e\x67\x5f\163\165\x62\155\151\164", __("\123\x75\142\x6d\151\164", PR__PKG__ADVANCED_CMS))->qigsyyqgewgskemg("\142\164\156\x2d\142\x6c\157\x63\153\40\152\165\x73\164\151\146\171\x2d\x63\157\156\164\x65\156\164\x2d\143\145\x6e\x74\145\162")->iswqmkousoeksaae()], "\161\x75\x65\x73\164\151\x6f\156" => $this->weysguygiseoukqw(Setting::FEEDBACK_QUESTION)]; $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\141\164\151\156\147\137\146\145\145\144\142\141\143\x6b\137\x70\x61\162\x61\x6d\145\x74\x65\162\163"), $qookweymeqawmcwo); return $this->iuygowkemiiwqmiw("\x66\x65\145\x64\142\x61\143\x6b", $qookweymeqawmcwo); } }
