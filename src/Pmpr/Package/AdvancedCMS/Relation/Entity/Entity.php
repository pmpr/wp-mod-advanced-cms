<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ddc40b4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Relation\Ajax; use Pmpr\Package\AdvancedCMS\Relation\Common; use Pmpr\Package\AdvancedCMS\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Common { const SIDE_QUERY_VAR = "\162\145\154\x61\x74\151\157\156\x5f\163\151\x64\145"; const TARGET_QUERY_VAR = "\162\145\x6c\x61\x74\151\157\x6e\137\x74\141\x72\x67\x65\x74"; const META_KEY_QUERY_VAR = "\162\x65\154\141\164\x69\x6f\x6e\137\155\x65\164\141\137\x6b\x65\171"; use FieldTrait, ElementTrait; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x69\156\151\x74"], 0)->qcsmikeggeemccuu("\x70\x61\x72\163\x65\x5f\161\165\145\162\x79", [$this, "\165\x75\161\161\x63\165\x6b\143\x6b\x75\163\143\x6f\x79\x61\x73"], 999)->qcsmikeggeemccuu("\x77\x6f\157\143\x6f\155\155\145\162\143\145\137\x70\162\x6f\x64\165\143\x74\x5f\161\165\x65\162\171", [$this, "\x75\x75\x71\161\x63\165\153\143\153\x75\163\x63\157\171\141\x73"], 999)->qcsmikeggeemccuu("\x62\145\x66\x6f\x72\x65\137\165\x70\144\x61\164\x65\137{$uusmaiomayssaecw}", [$this, "\x69\141\163\x79\x77\167\x6b\147\x75\x79\x61\165\151\x79\167\x75"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x71\165\x65\162\x79\x5f\x76\141\162\163", [$this, "\155\165\x6f\x75\155\x67\x6d\x69\165\x75\157\141\167\163\x69\167"])->cecaguuoecmccuse(Setting::symcgieuakksimmu()->mmsykuomogaqoaye(), [$this, "\157\x63\157\151\163\x73\x79\x69\155\x77\165\171\x6d\161\x6d\x79"])->cecaguuoecmccuse("\x75\160\x64\141\164\x65\x5f{$this->aakmagwggmkoiiyu()}\x5f\151\x74\145\155\163\137\142\171\x5f\x6d\145\164\x61\x6b\145\171", [$this, "\x67\x69\x6d\x73\151\151\151\167\151\141\151\161\x63\151\151\143"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto isgwkwacoyimiauk; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!ManipulateArray::get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto cscusseysqygsoiy; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); cscusseysqygsoiy: uaqackioaiqwcocy: } mkwkkmkgiqiamacc: ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc); isgwkwacoyimiauk: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\155\x65\x74\141\137\153\x65\171" => '', "\163\151\144\145\163" => [], "\154\x69\155\x69\164" => 5]); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\163\x69\144\x65\x73"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii["\155\145\x74\x61\x5f\153\x65\171"]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($this->uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto eeyyskqsmquyquqw; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto cgyakcqgugqgkqiw; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->ouoyuioaimwgosaa($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\154\x69\x6d\x69\164" => $ywmkwiwkosakssii["\x6c\x69\x6d\151\164"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; uegouoiuyoqkcscg: } mggeqkcksyaymcsa: cgyakcqgugqgkqiw: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; eeyyskqsmquyquqw: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = ManipulateArray::get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::META_KEY_QUERY_VAR, self::TARGET_QUERY_VAR, self::SIDE_QUERY_VAR], ["\x6d\x65\164\x61\x6b\x65\x79", "\164\x61\x72\x67\x65\164", "\163\x69\x64\145"]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto ewscugeuicukkycc; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; ewscugeuicukkycc: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto wusciwkkckmqigms; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto kqswcsysqawkcgye; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\155\x65\164\x61\113\145\x79", "\164\141\162\147\x65\x74", "\x73\151\x64\x65"]); kqswcsysqawkcgye: wusciwkkckmqigms: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto mwysseaekcsiesmm; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto ukkcmocamwgiqayu; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, ["\157\165\164\x70\x75\164" => "\151\x64"]); if (!$oammesyieqmwuwyi) { goto iiiccouaaqsyikae; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); iiiccouaaqsyikae: ukkcmocamwgiqayu: mwysseaekcsiesmm: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::META_KEY_QUERY_VAR; $kkeqqkkkqwkocsyu[] = self::TARGET_QUERY_VAR; $kkeqqkkkqwkocsyu[] = self::SIDE_QUERY_VAR; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::_ITEMS; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = ManipulateArray::get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); gygwewcqsmwqismo: } amgsueumgaguceaa: return $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\137\x62\157\170\x5f\x74\x61\x62\x73", ["\155\145\x74\141\x42\x6f\x78\145\x73" => $uaqusiikkokccqou, "\x74\x61\162\x67\x65\164" => "\43\x72\x65\x6c\141\x74\x69\x6f\x6e\x2d\x73\164\165\146\x66", "\x6e\141\155\145\x73" => $aiwgcyaewwagisoo], ["\145\x63\x68\157" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); return $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\x5f\x62\x6f\x78", ["\x64\x61\x74\141" => $icwicymcioeyeyek, "\x74\x61\162\147\145\164" => $ccamueccusigaaio->name, "\x65\x6e\x74\x69\x74\171" => $this->aakmagwggmkoiiyu(), "\157\167\x6e\145\x72" => $igqsaukqcqscimok->ID, "\155\145\164\x61\x4b\145\x79" => $gwiwsycaaqgwmewg, "\x6e\141\155\x65" => $ccamueccusigaaio->labels->singular_name, "\145\x78\x63\154\x75\144\145\x73" => $icwicymcioeyeyek ? json_encode(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if ($igqsaukqcqscimok instanceof WP_Term) { goto gommacygsykyussk; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto uougwgeyiokewkkm; } $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); uougwgeyiokewkkm: goto ukqocwewouckikso; gommacygsykyussk: $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($igqsaukqcqscimok); ukqocwewouckikso: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\173\175", "\151\156\160\x75\x74\137\160\x6c\x61\x63\145\x68\157\154\144\x65\162" => __("\x54\171\160\145\40\116\141\x6d\145\x20\x6f\146\40\141\40\x25\163", PR__PKG__ADVANCED_CMS), "\x6d\x6f\166\x65\137\x68\x61\x6e\144\x6c\145" => $this->cmeuowkiswiuocqa(), "\162\145\155\157\166\x65\137\155\x6f\144\x61\x6c" => $this->amsaeiymyieqksqy()]); } public function ocoissyimwuymqmy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto ucqmumuygcywwqma; } $cciauwuwuqaywgce->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ygyiacciqgemekwc . $this->aakmagwggmkoiiyu(), $this->qcgakseyaikigqco())->ewweaossowcqywaw($this->ugmceccgwaaaigiy())->saemoowcasogykak($this->eyamqkqiykagecsw())); ucqmumuygcywwqma: return $cciauwuwuqaywgce; } public function ugmceccgwaaaigiy() : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\162\x65\x6c\141\164\x69\x6f\x6e", $eygsasmqycagyayw->get("\162\x65\x6c\x61\x74\151\x6f\x6e\56\143\163\163")))->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x72\145\x6c\141\x74\151\157\156", $eygsasmqycagyayw->get("\162\145\x6c\x61\x74\x69\157\156\56\x6a\x73"))->ayuciigykaswwqeo("\x6a\161\165\145\162\171"))->ikqyiskqaaymscgw("\x72\x65\154\141\164\151\157\156", ["\141\x6a\141\x78" => Ajax::myikkigscysoykgy]); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false); }
