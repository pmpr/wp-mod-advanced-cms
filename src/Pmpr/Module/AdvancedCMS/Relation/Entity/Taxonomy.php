<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284d9a500ecb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Relation\Manager\TaxonomyManager; use Pmpr\Module\AdvancedCMS\Relation\Setting; use WP_Term; class Taxonomy extends Entity { public function __construct() { $this->name = self::gmmygyiecgmggaam; $this->title = __("\124\141\x78\157\156\x6f\155\171\40\x52\x65\154\141\164\x69\x6f\156\x73", PR__MDL__ADVANCED_CMS); parent::__construct(); } public function init() { parent::init(); $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag()); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { foreach ($igqsaukqcqscimok as $ayegqaqygsqsmews) { $this->qcsmikeggeemccuu("{$ayegqaqygsqsmews->{self::igecewwoemccgwsq}}\137\145\x64\151\x74\137\146\x6f\x72\x6d\x5f\146\x69\145\x6c\x64\x73", [$this, "\161\141\141\x63\x67\171\x79\x75\161\x75\x73\145\x6b\x77\x79\141"], 10, 2); if (!$ayegqaqygsqsmews->{self::iycuamekoueuemoy}) { goto ysweqawmawicakeo; } $this->qcsmikeggeemccuu("{$ayegqaqygsqsmews->{self::gygsikewooaciecc}}\137\x65\144\151\x74\x5f\146\x6f\x72\155\x5f\x66\151\145\154\144\x73", [$this, "\x71\141\141\143\x67\171\171\x75\x71\x75\163\x65\x6b\167\x79\x61"], 10, 2); ysweqawmawicakeo: iaomqomgiwiegoca: } goaowamiyyamueiw: gsqcoqqsioiyoykq: } uaicwcqwauosmsqm: } public function eyamqkqiykagecsw() : ?string { return IconFontawesomeInterface::usaocmsseuquaqsu; } public function qaacgyyuqusekwya($iwewcwusemqaiggk, $kesssewsiegssiya) { $nsmgceoqaqogqmuw = ''; $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $kesssewsiegssiya); $iwewcwusemqaiggk->ID = $iwewcwusemqaiggk->term_id; $ysecigwmacqymaku = $this->iuygowkemiiwqmiw("\x74\141\170\x6f\156\x6f\x6d\x79\x5f\141\x64\x6d\151\x6e\137\x66\x69\145\x6c\x64\137\150\x6f\x6c\x64\145\x72"); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $qkweikswegyciaie = $this->ysyeiiyqsecmgoyu($iwewcwusemqaiggk, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, false); if (!$qkweikswegyciaie) { goto cuseccewekgcgkyg; } $nsmgceoqaqogqmuw .= sprintf($ysecigwmacqymaku, sprintf(__("\122\145\154\x61\164\151\x6f\x6e\x20\167\x69\164\x68\x20\45\x73", PR__MDL__ADVANCED_CMS), $this->mauewaeoemuusikw($kooyscwkscsogysg)->label), $qkweikswegyciaie); cuseccewekgcgkyg: ookcgumoacskyymy: } owisckseoogsugqq: if (!$nsmgceoqaqogqmuw) { goto kgysyqkoqgwmoscq; } printf($this->eqkimaoyqiaoyoqa(), $nsmgceoqaqogqmuw); kgysyqkoqgwmoscq: } public function eqkimaoyqiaoyoqa() { return ManipulateHTML::uuccukgasskgimsq("\x74\x61\142\x6c\x65", ["\143\154\141\x73\x73" => "\146\x6f\162\x6d\55\164\x61\x62\x6c\x65"], ManipulateHTML::uuccukgasskgimsq("\x74\x62\x6f\144\x79", [], "\x25\163")); } public function mauewaeoemuusikw($muowmkwsoauukiag) { return ManipulateTaxonomy::imgymusqgccqsqqq($muowmkwsoauukiag); } public function goqmcwikekcgyokg() : array { return []; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Term) { goto makomwwyomweyamm; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); makomwwyomweyamm: return $oammesyieqmwuwyi; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { return $gqgemcmoicmgaqie; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "{$iakkeikwceeomgyq}\57\50\x5b\x5e\x2f\x5d\x2b\51\x2f{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\x69\x6e\x64\145\170\x2e\x70\150\x70\x3f\x74\x61\x78\157\156\157\155\x79\75{$muowmkwsoauukiag}\46{$yygmoeguaqyumuui->target}\75{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\75{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\x3d\44\x6d\141\164\143\150\145\163\133\61\x5d"; if (!$kiyaqqoyagguscog) { goto oqwcmgwimeisusoe; } global $wp_rewrite; $qucissyoweagooww = $wp_rewrite->pagination_base; $ucccueqywigcukcc .= "{$qucissyoweagooww}\57\x3f\x28\x5b\x30\x2d\x39\135\x7b\61\54\x7d\x29\x2f"; $gqgemcmoicmgaqie .= "\46\160\141\147\145\x64\x3d\44\x6d\141\164\x63\150\145\x73\x5b\62\x5d"; oqwcmgwimeisusoe: $ucccueqywigcukcc .= "\x3f\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\x70"]; } public function ugmceccgwaaaigiy() : array { $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [Setting::wcwmusaouiqaqeww($this->aakmagwggmkoiiyu() . self::kouiwaoasqgwksas, __("\x45\x6e\x61\142\x6c\x65", PR__MDL__ADVANCED_CMS)), Setting::iseogkiymousogom(self::uwoqgmuqskqcqsag(), __("\111\164\145\x6d\163", PR__MDL__ADVANCED_CMS), [self::wcwmusaouiqaqeww(self::iccwcygaeqmomooo, __("\x45\x6e\141\x62\154\x65", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::wcwmusaouiqaqeww(self::iycuamekoueuemoy, __("\111\x6e\x76\145\162\163\145\x20\123\x69\144\145", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x49\155\x61\147\145", PR__MDL__ADVANCED_CMS))->wyqeckayigciacse("\163\155\141\x6c\x6c"), self::ymuegqgyuagyucws(self::NAME, __("\x41\144\155\x69\156\40\120\x61\156\145\x6c\40\x4e\141\x6d\x65", PR__MDL__ADVANCED_CMS), sprintf("\x3c\163\164\x72\157\156\x67\76\45\x73\x3a\74\x2f\163\x74\162\x6f\x6e\x67\x3e\40\45\163", __("\116\x6f\164\151\143\145", PR__MDL__ADVANCED_CMS), __("\x57\x69\x6c\154\x20\142\x65\x20\x75\x73\145\144\40\141\163\40\163\x6c\165\x67\x20\164\x6f\x6f\x2e", PR__MDL__ADVANCED_CMS))), self::ckuwucygcwsiawms(self::igecewwoemccgwsq, __("\117\x72\x69\147\x69\x6e", PR__MDL__ADVANCED_CMS), $seyqqsmuaiegkeeq)->eumecwmqmukqgyea(), self::ckuwucygcwsiawms(self::gygsikewooaciecc, __("\104\x65\163\x74\151\x6e\x61\164\x69\157\156", PR__MDL__ADVANCED_CMS), $seyqqsmuaiegkeeq)->eumecwmqmukqgyea(), self::ymuegqgyuagyucws(self::qgwwgcuuykqagamk, __("\117\x72\151\147\x69\156\x20\x54\151\164\x6c\145", PR__MDL__ADVANCED_CMS)), self::ymuegqgyuagyucws(self::uyqakoogaigomqmq, __("\104\x65\163\x74\151\156\x61\164\x69\157\156\40\124\151\x74\154\145", PR__MDL__ADVANCED_CMS)), self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm)])->usosgsaaimqcysyk()]; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return TaxonomyManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } }
