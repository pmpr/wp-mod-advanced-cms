<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec394cea5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use CMB2; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\AdvancedCMS\Form\Field\Field; class MetaBox extends Element { protected array $tabs = []; protected array $fields = []; protected ?string $icon = null; protected array $postTypes = []; protected bool $hookAble = false; protected array $taxonomies = []; protected bool $isVerticalTab = true; protected ?string $context = "\x6e\x6f\x72\155\141\154"; public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false) { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; $this->hookAble = $yiyasiwyokuumigg; parent::__construct($aokagokqyuysuksm); } public function wigskegsqequoeks() { if (!($this->qwkguquqiiaekmsi() && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo())) { goto csscmcacoikwsecs; } $this->qcsmikeggeemccuu("\x63\155\142\x32\x5f\x61\x64\155\x69\156\137\x69\x6e\x69\x74", [$this, "\162\145\147\x69\163\x74\145\162"]); csscmcacoikwsecs: parent::wigskegsqequoeks(); } public function yqsycyoeiusqqqgm() : ?string { return $this->context; } public function sucsaaaeiecgqcem(?string $mgkceomocowocqyo) : self { $this->context = $mgkceomocowocqyo; return $this; } public function maosyyqsuygkawma() : self { $this->sucsaaaeiecgqcem("\x6e\x6f\x72\155\x61\154"); return $this; } public function igeseuiwcwwsuesi() : self { $this->sucsaaaeiecgqcem("\x73\x69\x64\145"); return $this; } public function ymyesuiosuagoaco() : self { $this->sucsaaaeiecgqcem("\141\x64\166\x61\156\x63\x65\x64"); return $this; } public function qwkguquqiiaekmsi() : ?bool { return $this->hookAble; } public function cmuqkakwwqyywqke(bool $yiyasiwyokuumigg) : self { $this->hookAble = $yiyasiwyokuumigg; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function kyccqycmcyqomiqm() : ?bool { return $this->isVerticalTab; } public function cgmuykwsyqgaymgm(bool $kyccqycmcyqomiqm) : self { $this->isVerticalTab = $kyccqycmcyqomiqm; return $this; } public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto mkwskuycuyguqqok; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, $cciauwuwuqaywgce->ugmceccgwaaaigiy()); kuicqywysciceggs: } cuykwgmswkskqkyi: mkwskuycuyguqqok: return $ikgwqyuyckaewsow; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if ($aiowsaccomcoikus->yywskysiycwkwsgw()) { goto sciwggaeogcoesiu; } $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); sciwggaeogcoesiu: $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto yowsmsiyimmimemc; } $this->mkksewyosgeumwsa($aiowsaccomcoikus); yowsmsiyimmimemc: kwagwqyusyiyoaqs: } eqkauqciwewmgeoi: return $this; } public function mukiwuqwmywsckco() : bool { return !empty($this->ugmceccgwaaaigiy()); } public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self { if (is_array($this->objectType)) { goto kiqogmwcgcamwiig; } $this->objectType = []; kiqogmwcgcamwiig: $this->objectType[] = $mqyaskyaekmkegmg; return $this; } public function iakygkwocqoukwuc() : ?array { return $this->postTypes; } public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self { if (in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc(), true)) { goto iomcaiwewsawiamu; } $this->postTypes[] = $useksmwkuswkwcqg; $this->kukswgcoysaeescm($useksmwkuswkwcqg); iomcaiwewsawiamu: return $this; } public function aueosikimququsko(array $sciomagaqmgggsiu) : self { foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if (!$useksmwkuswkwcqg) { goto uukumskkeggaowck; } $this->mgieiwsmcswmmiim($useksmwkuswkwcqg); uukumskkeggaowck: eequksumcoogyoem: } sqiciiuwmykocycc: return $this; } public function iwqugwigmoiagwec() : ?string { $meqocwsecsywiiqs = $this->qcgakseyaikigqco(); if (!$this->eyamqkqiykagecsw()) { goto cggowoquuiwqkyew; } $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\154\x61\163\x73" => "\160\162\x2d\155\x65\x74\x61\142\x6f\x78\55\151\x63\x6f\x6e\x20\151\x63\157\x6e\x2d\163\x6d"]); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui([$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs], ["\x63\x6c\x61\163\163" => "\x70\162\x2d\155\x65\x74\141\142\x6f\x78\x2d\164\151\164\154\x65\x20\x6d\171\x2d\x61\x75\164\x6f"]); cggowoquuiwqkyew: return $meqocwsecsywiiqs; } public function mqmocoguqcyymgqu() : ?array { return $this->taxonomies; } public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self { if (in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) { goto ocokwuuquaokmasc; } $this->taxonomies[] = $kesssewsiegssiya; ocokwuuquaokmasc: return $this; } public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self { foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya) { goto meawswgwagoqgkye; } $this->acqyqaaeeogkosoq($kesssewsiegssiya); meawswgwagoqgkye: goacqqsgaaigyuaw: } yiwiqaqmwiogawym: return $this; } public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto mswsoaimesegiiic; } $this->aucimgwswmgaocae($cciauwuwuqaywgce); mswsoaimesegiiic: usqgaogkqgemuima: } wcesymwqykqoyuqk: return $this; } public function osqsemgesogkmios() : bool { return !empty($this->equiyaoamqmaeckc()); } public function register($uusmaiomayssaecw = null) : CMB2 { if ($uusmaiomayssaecw) { goto egasokooagakisiy; } $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); egasokooagakisiy: $uiewakwqscemywuo = $this->weqsyyuyccsemacu($uusmaiomayssaecw); if (!$this->osqsemgesogkmios()) { goto goeoymmqqqeeoime; } foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) { if (!($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik())) { goto qmiwsequckckoaei; } $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy()); qmiwsequckckoaei: qgegkeomwscwwiuw: } kecwuwwcwokuksyq: $uiewakwqscemywuo["\164\141\x62\163"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) { return $cciauwuwuqaywgce->wkkcmkuiigsukyik(); }); goeoymmqqqeeoime: if (!$this->mukiwuqwmywsckco()) { goto eiawsoasmscmqswa; } $uiewakwqscemywuo[Constants::ymckmcsiymwqucoq] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy()); eiawsoasmscmqswa: $scegeeyqweaksmki = new_cmb2_box($uiewakwqscemywuo); $scegeeyqweaksmki->object_type($this->aaamyckgicycisqq()); return $scegeeyqweaksmki; } public function gisikkgygmseekyi() : self { return $this->ycgswwsswoyyeqgc(["\x63\x6f\x6d\x6d\x65\x6e\164"]); } public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array { $uiewakwqscemywuo = [Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::qescuiwgsyuikume => $this->iwqugwigmoiagwec(), Constants::osiogououyayqyck => $this->yqsycyoeiusqqqgm(), Constants::iuqumwggccmcuyem => $this->qwkguquqiiaekmsi() ? "\154\157\x77" : $this->yywskysiycwkwsgw(), "\x73\x68\x6f\x77\x5f\x6e\141\155\145\163" => $this->eoceqqugyiaqqayw(), "\x63\141\160\141\x62\x69\154\151\x74\x79" => $this->gwaeeegmgggawiyi(), "\x64\x69\x73\x70\x6c\141\x79\x5f\x63\142" => false, "\157\x62\152\145\x63\164\x5f\x74\171\160\145\163" => $this->aaamyckgicycisqq(), "\166\x65\x72\164\x69\x63\x61\x6c\137\164\141\142\x73" => $this->kyccqycmcyqomiqm(), "\141\x64\x6d\x69\x6e\x5f\155\x65\156\x75\137\150\x6f\x6f\153" => false]; $egkyssmuqcwaciya = "\x66\157\x72\155\x2d\x63\157\156\164\x61\151\x6e\x65\162"; if ($this->iakygkwocqoukwuc()) { goto qmeoaqmsuseueqiy; } if (!$this->mqmocoguqcyymgqu()) { goto ickcmqoiosquugwe; } $egkyssmuqcwaciya .= "\40\160\162\x2d\x74\x65\x72\x6d"; $uiewakwqscemywuo["\x74\141\170\x6f\156\157\x6d\x69\x65\163"] = $this->mqmocoguqcyymgqu(); $uiewakwqscemywuo["\157\x62\x6a\x65\x63\x74\x5f\x74\x79\x70\145\163"] = ["\164\145\162\x6d"]; ickcmqoiosquugwe: goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $uiewakwqscemywuo["\x70\157\163\x74\x5f\x74\x79\160\145\x73"] = $this->iakygkwocqoukwuc(); $egkyssmuqcwaciya .= "\x20\x70\x72\55\x6d\145\x74\141\x62\x6f\x78"; ygkcacsyyckescqs: if (!(!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms)) { goto cuoqqgaygogsmmic; } $uiewakwqscemywuo["\x73\150\157\x77\137\x6f\156"] = ["\x6b\x65\171" => $this->aaamyckgicycisqq(), "\166\x61\x6c\165\145" => [$kooiowmeygoykmms]]; cuoqqgaygogsmmic: $uiewakwqscemywuo["\x63\154\141\163\x73\145\x73"] = $egkyssmuqcwaciya; $this->megwuoouecmkuaqm($uiewakwqscemywuo); return $this->configuration; } }
