<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec394cea5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use JsonException; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\AttributeTrait; use Pmpr\Common\Foundation\Traits\ToArrayTrait; use Pmpr\Module\AdvancedCMS\Form\MetaBox; class Field { use HelperTrait, WrapperTrait, ToArrayTrait, TemplateTrait, AttributeTrait; protected $sanitizer = "\163\141\156\151\x74\151\172\145\137\x74\x65\x78\164\x5f\146\151\x65\x6c\x64"; protected array $ignorables = []; protected array $errors = []; protected ?string $id = null; protected ?int $priority = 0; protected ?string $type = null; protected ?string $name = null; protected $default = null; protected ?string $desc = null; protected $classes; protected $defaultCb = null; protected $restValueCb; protected $value; protected $showOnCb = null; protected ?string $rowEnd = ''; protected ?string $rowStart = ''; public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null) { if ($sqeykgyoooqysmca) { goto eekcoeikaeaaeyii; } wp_die("\x66\x69\145\154\144\40\164\171\160\x65\40\x69\x73\40\156\157\x74\40\x73\145\x74\54\40\x6d\x65\164\141\102\x6f\170\72\40" . static::class); eekcoeikaeaaeyii: $this->ggiaseqygioygumq($aokagokqyuysuksm); $this->type = $sqeykgyoooqysmca; $this->name = $ymqmyyeuycgmigyo; $this->desc = $mkqqqewsokcswckc; $this->attributes = []; $this->imgcoakmmgqsckkm(12); if (in_array($this->gueasuouwqysmomu(), ["\147\x72\157\165\x70", "\162\x61\x64\151\x6f", "\x62\x75\164\164\157\156", "\x6d\165\154\x74\151\x5f\142\x75\164\x74\x6f\x6e\163"])) { goto cogywoqcqummsyus; } $this->qigsyyqgewgskemg("\x77\55\61\60\x30"); cogywoqcqummsyus: if (!($qgciuiagkkguykgs = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi()->myagqecycsaiyqsk($this, "\163\x61\x6e\151\x74\151\172\x65"))) { goto gmwykkouysyaqwqm; } $this->sanitizer = [$this, $qgciuiagkkguykgs]; gmwykkouysyaqwqm: } public function kyayukmuuqaokgmm(?callable $cygiacuaaswggouy) : self { $this->showOnCb = $cygiacuaaswggouy; return $this; } public function aeuecemcqwokyewi($ekcswiguywieeeoc) : self { $this->kyayukmuuqaokgmm(static function () use($ekcswiguywieeeoc) { return $ekcswiguywieeeoc; }); return $this; } public function mugkkmkwquagcecw(?string $ogygkgwwyemqousg) : self { $this->rowEnd = $ogygkgwwyemqousg; return $this; } public function kkauggiwqygmwesc(?string $kqskugkaoecgcywm) : self { $this->rowStart = $kqskugkaoecgcywm; return $this; } public function ioiaiuywsieaeseo($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\163\x6d"); } public function iyouqgqicyqkiswi($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\x6d\144"); } public function oiwawawcmigageco($imgcoakmmgqsckkm) : self { return $this->imgcoakmmgqsckkm($imgcoakmmgqsckkm, "\154\147"); } public function imgcoakmmgqsckkm($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self { $egkyssmuqcwaciya = "\x63\157\x6c"; if (!$gcgsqcoqciockquc) { goto ugqwuugsweqgmywk; } $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}"; ugqwuugsweqgmywk: $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}"; $this->usoqcyyugsuyiewc($egkyssmuqcwaciya); return $this; } public function mgymikeweqyoaweq() : self { return $this->usoqcyyugsuyiewc("\160\170\x2d\x30"); } public function eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc = '') : self { $egkyssmuqcwaciya = "\x63\x6f\x6c"; if (!$gcgsqcoqciockquc) { goto uaukmuiwskcemcsw; } $egkyssmuqcwaciya .= "\55{$gcgsqcoqciockquc}"; uaukmuiwskcemcsw: $egkyssmuqcwaciya .= "\x2d{$imgcoakmmgqsckkm}"; $this->yqoekuewicqoescm($egkyssmuqcwaciya); return $this; } public function iemaiogyauaiiesq() : self { $emkaqwyswammaako = ['', "\x73\x6d", "\155\x64", "\x6c\x67"]; $imgcoakmmgqsckkm = 1; isgwkwacoyimiauk: if (!($imgcoakmmgqsckkm <= 12)) { goto sockeswygwcskeuq; } foreach ($emkaqwyswammaako as $gcgsqcoqciockquc) { $this->eqmqucasseomgsce($imgcoakmmgqsckkm, $gcgsqcoqciockquc); cscusseysqygsoiy: } uaqackioaiqwcocy: mkwkkmkgiqiamacc: $imgcoakmmgqsckkm++; goto isgwkwacoyimiauk; sockeswygwcskeuq: return $this; } public function mwikyscisascoeea() : ?string { return $this->id; } public function ggiaseqygioygumq(?string $aokagokqyuysuksm) : self { $this->id = $aokagokqyuysuksm; $this->yaqyemmwkmgegwqy($aokagokqyuysuksm); return $this; } public function yaqyemmwkmgegwqy($aokagokqyuysuksm) : self { $this->mykogkuaqwmycgog("\x66\x69\145\x6c\144\x2d\151\144\55{$this->mwikyscisascoeea()}"); return $this->qigsyyqgewgskemg("\x66\x69\145\x6c\x64\x2d\151\x64\55{$aokagokqyuysuksm}")->gmywsauuqwcmakuc("\146\151\145\x6c\x64\x2d\x69\144", $aokagokqyuysuksm); } public function yywskysiycwkwsgw() : ?int { return $this->priority; } public function jyumyyugiwwiqomk($sqqewmoeaekuyyas) : self { $this->priority = $sqqewmoeaekuyyas; return $this; } public function iukseawoegcgwcoy(&$wwgucssaecqekuek, $ggauoeuaesiymgee, $uusmaiomayssaecw = null) : self { $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, $uusmaiomayssaecw, $ggauoeuaesiymgee); return $this; } public function miwgyweukiaicmos() { return $this->defaultCb; } public function qqowmcseeoiskoug($qwiycwgywyomkoog) : self { $this->defaultCb = $qwiycwgywyomkoog; return $this; } public function gueasuouwqysmomu() : ?string { return $this->type; } protected function aseocggwwegcmqes(string $sqeykgyoooqysmca) : self { $this->type = $sqeykgyoooqysmca; return $this; } public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function usuqmwksoeaayaig(?string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function oiswysuiioecsaae($aokagokqyuysuksm = null) { $ggauoeuaesiymgee = $this->default; if ($aokagokqyuysuksm) { goto mggeqkcksyaymcsa; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; goto uegouoiuyoqkcscg; mggeqkcksyaymcsa: $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get($aokagokqyuysuksm, $ggauoeuaesiymgee); uegouoiuyoqkcscg: return $eqgoocgaqwqcimie; } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { $this->default = $ggauoeuaesiymgee; return $this; } public function uuwsoaqmkwcgaqes() : ?string { return $this->desc; } public function ccmwycqioaicegoc(?string $mkqqqewsokcswckc) : self { $this->desc = $mkqqqewsokcswckc; return $this; } public function cuisiyiswcqkuogm() { return $this->classes; } public function eumecwmqmukqgyea() : self { return $this->qcgocuceocquqcuw("\162\x65\x71\x75\151\162\145\x64", "\162\145\161\165\x69\x72\x65\144"); } public function msmiagueogcsucgc() : ?string { return $this->waecsyqmwascmqoa("\x72\145\x71\165\151\162\145\x64"); } public function awyimywmcyoukaao() : self { return $this->masauymeceuiyceo(); } public function masauymeceuiyceo() : self { return $this->qigsyyqgewgskemg("\x64\151\x72\145\x63\x74\x69\157\156\55\x72\164\154"); } public function eigeeiacogyacogm() : self { return $this->yskkmqiusguummwa(); } public function yskkmqiusguummwa() : self { return $this->qigsyyqgewgskemg("\x64\x69\x72\x65\143\164\x69\x6f\x6e\x2d\154\x74\x72"); } public function usoqcyyugsuyiewc(?string $egkyssmuqcwaciya) : self { $this->classes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya); return $this; } public function yqoekuewicqoescm(?string $egkyssmuqcwaciya) : self { $this->classes = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ogaeogwycyqqckeu($this->cuisiyiswcqkuogm(), null, $egkyssmuqcwaciya); return $this; } public function wkmawgqeysyeiakk(array $cmkqisoeyioisqaw) : self { foreach ($cmkqisoeyioisqaw as $egkyssmuqcwaciya) { $this->usoqcyyugsuyiewc($egkyssmuqcwaciya); eeyyskqsmquyquqw: } cgyakcqgugqgkqiw: return $this; } public function mkmssscwmeekwgqo() : self { return $this->usoqcyyugsuyiewc("\x63\155\142\x2d\x72\157\x77\55\151\x6e\x6c\151\156\145"); } public function yoimakcqmoqokkcu() : self { return $this->mgymikeweqyoaweq()->usoqcyyugsuyiewc("\x63\155\142\55\x72\157\x77\55\x62\154\x6f\143\153"); } public function oykaosmaegqwmoga() : self { return $this->qigsyyqgewgskemg("\x64\151\163\141\x62\154\x65\144")->qcgocuceocquqcuw("\144\x69\x73\x61\x62\x6c\x65\144", "\144\151\x73\x61\x62\x6c\145\x64"); } public function qooeaookuemoqecm() { return $this->value; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->value = $eqgoocgaqwqcimie; return $this; } public function ccakgucwwemiwkoi($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { if (!is_array($eqgoocgaqwqcimie)) { goto ewscugeuicukkycc; } $eqgoocgaqwqcimie = json_encode($eqgoocgaqwqcimie, JSON_THROW_ON_ERROR); ewscugeuicukkycc: $this->qigsyyqgewgskemg("\x64\x65\x70\x65\x6e\144\145\144\x2d\x74\x6f")->gmywsauuqwcmakuc("\x64\145\160\x65\156\144\x65\x64", $uusmaiomayssaecw)->gmywsauuqwcmakuc("\144\145\160\x65\x6e\x64\x65\x64\55\x76\x61\x6c\165\x65", $eqgoocgaqwqcimie); return $this; } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $eqgoocgaqwqcimie = self::oiswysuiioecsaae($this->mwikyscisascoeea()); if (!$eqgoocgaqwqcimie) { goto kqswcsysqawkcgye; } $kkeqqkkkqwkocsyu[Constants::wikgqsqysyuoykse] = $eqgoocgaqwqcimie; kqswcsysqawkcgye: return $kkeqqkkkqwkocsyu; } public function agkauiesooccqsae() : ?callable { return $this->restValueCb; } public function aygqoksyisymwcuw(callable $wkmuskegugkocuwc) : self { $this->restValueCb = $wkmuskegugkocuwc; return $this; } public function awakiiaoeeiaiqgo() : self { $this->qigsyyqgewgskemg("\167\55\155\x64\x2d\x31\60\x30"); return $this; } public function giaekmqwqoqmqcic() { return $this->ignorables; } public function qicwqseeaecsiiia($momcykaoccoymeig) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->giaekmqwqoqmqcic(), $momcykaoccoymeig); } public function kqkccuwgcwemskey($momcykaoccoymeig, $ikgwqyuyckaewsow) : self { $oyumuuqqsmuacmak = $this->qicwqseeaecsiiia($momcykaoccoymeig); $oyumuuqqsmuacmak[Constants::ymckmcsiymwqucoq] = $ikgwqyuyckaewsow; $this->ignorables[$momcykaoccoymeig] = $oyumuuqqsmuacmak; return $this; } public function oeeumggeiyyckkom($qqswgiawgeaeoecu, $ikgwqyuyckaewsow, bool $iiwmeimguameeome = false) : self { if (!($ikgwqyuyckaewsow === $this->mwikyscisascoeea() || is_array($ikgwqyuyckaewsow) && in_array($this->mwikyscisascoeea(), $ikgwqyuyckaewsow, true))) { goto wusciwkkckmqigms; } wp_die("\171\x6f\x75\40\141\162\x65\x20\164\162\171\x69\x6e\147\40\164\x6f\x20\x69\147\156\x6f\x72\145\x20{$this->mwikyscisascoeea()}\40\151\x6e\160\x75\164\x20\x62\171\x20\151\164\x73\145\154\x66\x2e"); wusciwkkckmqigms: $this->ignorables[] = [Constants::REVERSE => $iiwmeimguameeome, Constants::ykqyicwaggyuuuwo => $qqswgiawgeaeoecu, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow]; return $this; } public function render(?string $aokagokqyuysuksm = '', bool $koaqeegoeiaiccse = false) { $ywmkwiwkosakssii = [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::qaacaqioeyiuakeu => $koaqeegoeiaiccse]; return MetaBox::iuaucuookgoqiiio([$this], $ywmkwiwkosakssii); } public function msqsseeaasqysese($iswcokucwmiosiaq) : self { if (!$iswcokucwmiosiaq) { goto iiiccouaaqsyikae; } $this->errors[] = $iswcokucwmiosiaq; iiiccouaaqsyikae: return $this; } public function ymoyyqeymakckaee() : array { return $this->errors; } public function aoimcoqycewceekq(?callable $umcwwewscqegoqoe) : void { $this->sanitizer = $umcwwewscqegoqoe; } public function ikaukuqokwgsyeia() : ?callable { return $this->sanitizer; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!($aoaumkkqqmwekemo = $this->giaekmqwqoqmqcic())) { goto ukkcmocamwgiqayu; } $this->qigsyyqgewgskemg("\x70\x72\55\151\147\156\157\162\x61\142\x6c\145\x2d\x69\x6e\x70\165\164")->eskgwaywimqcwcyy("\151\x67\x6e\157\x72\x61\142\154\145\55\164\x61\x72\x67\x65\164", $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($aoaumkkqqmwekemo, JSON_UNESCAPED_SLASHES)); ukkcmocamwgiqayu: if (!($ueeagokqmgisgauy = $this->ymoyyqeymakckaee())) { goto gygwewcqsmwqismo; } $this->eskgwaywimqcwcyy(Constants::iwyueouqaqegmcas, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ueeagokqmgisgauy)); $ukwokcuqauuosmoo = $this->uuwsoaqmkwcgaqes(); foreach ($ueeagokqmgisgauy as $iswcokucwmiosiaq) { $ukwokcuqauuosmoo .= $iswcokucwmiosiaq; amgsueumgaguceaa: } mwysseaekcsiesmm: $this->ccmwycqioaicegoc($ukwokcuqauuosmoo); gygwewcqsmwqismo: if (!(is_string($this->qooeaookuemoqecm()) && !in_array($this->gueasuouwqysmomu(), ["\144\151\163\x70\x6c\x61\x79", "\x74\145\170\164\141\x72\145\x61", "\x77\171\x73\151\167\171\x67"]))) { goto uougwgeyiokewkkm; } $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $this->qooeaookuemoqecm()); uougwgeyiokewkkm: } }
