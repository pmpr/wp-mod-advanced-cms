<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec394cea5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class BSSelect extends Select { protected ?array $items = []; protected bool $isCustom = false; protected ?string $target = null; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, "\x62\163\x73\x65\x6c\145\143\164"); $this->gmywsauuqwcmakuc("\x73\x74\x79\x6c\145", "\x62\x74\x6e\55\x77\x68\151\164\145")->gmywsauuqwcmakuc("\x6c\151\166\145\x2d\x73\x65\141\x72\143\150", "\164\x72\165\x65")->gmywsauuqwcmakuc("\144\145\x73\x65\x6c\x65\x63\x74\55\x61\154\154\55\164\145\x78\x74", __("\x44\145\163\145\154\x65\x63\x74", PR__CMN__FOUNDATION))->qigsyyqgewgskemg("\x70\162\55\x62\157\157\x73\164\x72\x61\x70\x2d\163\145\154\145\x63\164\x20\x62\157\157\x73\x74\162\141\x70\55\163\145\154\x65\143\x74"); } public function wasgwsogmuquqeaa() : ?array { return $this->items; } public function icsmsougoccqosgc(?array $oammesyieqmwuwyi) : self { $this->items = $oammesyieqmwuwyi; return $this; } public function oeewiaacscgyamai($igqsaukqcqscimok) : self { $this->items[] = $igqsaukqcqscimok; return $this; } public function wiweskwucmkcukcm($oammesyieqmwuwyi = []) : self { if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto gicyayswqyuoekcq; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->oeewiaacscgyamai($igqsaukqcqscimok); kosaqwikueyksqmw: } mqkmcysgoiaouiwm: gicyayswqyuoekcq: return $this; } public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self { if (!$giqggecqqikcysgq) { goto iikiiioqiyegyaak; } $this->gmywsauuqwcmakuc("\155\x61\170\55\157\160\x74\x69\x6f\156\x73", (string) $giqggecqqikcysgq); iikiiioqiyegyaak: return $this; } public function soyqkauogoaqekos() : self { $this->oockkiieqcwiocga("\x75\163\145\x72\x73"); return $this; } public function yyayequseyasoyks() : self { $this->oockkiieqcwiocga("\164\x65\162\155\x73"); return $this; } public function smmismmuuccmscya() : self { $this->oockkiieqcwiocga("\x70\157\163\164\163"); return $this; } public function wkqyoukciomqiyew() : self { $this->oockkiieqcwiocga("\x6d\x6f\144\145\154\x73"); return $this; } public function kacywqgmseagyuyu() : self { $this->oockkiieqcwiocga("\x69\x63\x6f\156\163"); return $this; } public function imwouwmsiukakwqi() : self { $this->oockkiieqcwiocga("\143\157\155\155\145\156\x74\163"); return $this; } public function euagkaqymgiigyaa() : self { $this->oockkiieqcwiocga("\x73\164\141\x74\151\x63\137\151\155\141\x67\x65\x73"); return $this; } public function squsacgomqgkakaw() : ?string { return $this->target; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self { $this->gmywsauuqwcmakuc(Constants::okeuagwgwkmiokac, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES)); return $this; } public function osmkwgikieoyykwg() : self { $this->oikgogcweiiaocka()->usoqcyyugsuyiewc("\163\157\x72\x74\x61\142\154\x65\55\163\x65\154\145\x63\x74")->qigsyyqgewgskemg("\163\157\x72\164\x61\x62\x6c\145\x2d\163\x65\x6c\145\x63\164"); return $this; } public function somyygqqawwswkyk() : ?bool { return $this->isCustom; } public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self { $this->isCustom = $somyygqqawwswkyk; return $this; } public function oikgogcweiiaocka() : self { $this->sanitizer = null; return $this->aseocggwwegcmqes("\x6d\x75\154\164\x69{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw(); } public function zosqeeykkcqmmkqs() : bool { return strpos($this->gueasuouwqysmomu(), "\155\165\154\164\x69") !== false; } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self { return $this->qcgocuceocquqcuw(Constants::qescuiwgsyuikume, $iwiewowoqmoekyqi); } public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self { $uiymkeeaukcyqqik = "\x63\x6f\165\156\164"; if (!$gaeqamemwmwsyukm) { goto uiosisocuwokwkie; } $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik}\x20\x3e\x20{$gaeqamemwmwsyukm}"; uiosisocuwokwkie: return $this->gmywsauuqwcmakuc("\x73\145\154\x65\x63\x74\145\144\55\164\145\170\x74\55\x66\x6f\x72\x6d\141\164", $uiymkeeaukcyqqik); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); if (!is_array($oammesyieqmwuwyi)) { goto gcckqucukawcasgk; } if (!$this->squsacgomqgkakaw()) { goto cuumeogeomowqisc; } $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $this->squsacgomqgkakaw()); cuumeogeomowqisc: $this->gmywsauuqwcmakuc(Constants::qwumqqyuasyskkkc, wp_json_encode($oammesyieqmwuwyi, JSON_THROW_ON_ERROR)); gcckqucukawcasgk: if ($this->msmiagueogcsucgc()) { goto csammceowmqwaamq; } $iwiewowoqmoekyqi = __("\x43\x68\x6f\157\x73\x65\40\x61\x6e\40\157\160\164\x69\x6f\156\x2e\x2e\x2e", PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc("\144\x65\x73\145\154\x65\143\164\x2d\x61\154\154\55\164\x65\170\164", __("\x44\145\163\145\154\x65\143\164", PR__CMN__FOUNDATION)); if ($this->zosqeeykkcqmmkqs()) { goto qmkaeeomgkwggoyo; } $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; qmkaeeomgkwggoyo: csammceowmqwaamq: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if (!$this->squsacgomqgkakaw()) { goto ocaguquugeamqckq; } $kkeqqkkkqwkocsyu["\142\x65\146\x6f\x72\x65"] = "\74\144\x69\x76\x20\143\154\141\163\x73\75\42\x70\157\163\x69\164\151\x6f\156\x2d\x72\145\154\x61\164\151\x76\x65\42\76"; $kkeqqkkkqwkocsyu["\141\x66\164\x65\x72"] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi([Constants::waguuiqqgsysuukq => "\61\170", "\x63\157\x6e\164\x61\151\156\145\162\137\x63\x6c\x61\163\x73" => "\160\157\163\151\x74\151\157\x6e\x2d\163\x74\x61\x74\151\143"]) . "\x3c\57\144\x69\x76\x3e"; ocaguquugeamqckq: return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
