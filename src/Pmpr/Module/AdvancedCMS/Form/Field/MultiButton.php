<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce116c94039             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; class MultiButton extends Field { protected array $buttons = []; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) { parent::__construct("\x6d\165\x6c\164\x69\137\x62\165\x74\x74\157\x6e\163", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->qigsyyqgewgskemg("\155\x6c\x2d\61"); } public function micmwmywmkguiyyk() { return $this->qigsyyqgewgskemg("\142\x75\x74\164\157\156\x2d\160\162\x69\155\x61\162\171"); } public function imswwiyicyksouus() : array { return $this->buttons; } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if (!(isset($kkeqqkkkqwkocsyu["\x62\x75\164\x74\x6f\156\163"]) && $kkeqqkkkqwkocsyu["\x62\165\164\164\157\156\x73"] && is_array($kkeqqkkkqwkocsyu["\142\x75\x74\x74\157\x6e\x73"]))) { goto eckcqesiokgwkkiw; } foreach ($kkeqqkkkqwkocsyu["\142\165\x74\x74\157\x6e\163"] as $uusmaiomayssaecw => $gskauacumcmekigs) { if (!$gskauacumcmekigs instanceof Field) { goto yoagcooekomeokwg; } $kkeqqkkkqwkocsyu["\x62\165\164\164\x6f\x6e\163"][$uusmaiomayssaecw] = $gskauacumcmekigs->sacmkccceuywoqsq(false, $ywmkwiwkosakssii); yoagcooekomeokwg: yamyagayiooyeekg: } iksewmsaugayqaqq: eckcqesiokgwkkiw: return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }