<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284d9a500ecb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateTemplate; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Relation\Manager\PostManager; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\x43\165\x73\164\157\x6d\40\120\x6f\163\164\40\124\171\x70\145\x20\x52\x65\154\141\164\x69\157\156\163", PR__MDL__ADVANCED_CMS); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\144\137\155\145\164\141\137\x62\x6f\170\145\x73", [$this, "\x73\151\153\161\147\147\167\x6d\155\171\x6b\x75\151\171\x6d\171"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconFontawesomeInterface::gscaisseeekokyea; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\57\50\133\136\x2f\x5d\53\x29\x2f{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\151\156\144\145\x78\56\160\150\x70\77\160\x6f\163\164\137\x74\x79\160\x65\x3d{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\x3d{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\x26{$yygmoeguaqyumuui->side}\x3d\x24\155\x61\164\143\x68\145\x73\x5b\x31\x5d"; if (!$kiyaqqoyagguscog) { goto acesyuieuuqwgkwm; } ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); acesyuieuuqwgkwm: $ucccueqywigcukcc .= "\x3f\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\x6f\x70"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg); $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\x6e\x6f\162\x6d\x61\x6c"); if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi && ManipulatePost::uqwgsuysegkweago([$useksmwkuswkwcqg], "\145\x64\151\164"))) { goto gwiaimosqoiquwkc; } $this->enqueue(); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto ugswokwmkumcmigc; } ManipulateTemplate::sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\x5f\155\x65\164\141\137\x62\x6f\x78", "\143\141\154\x6c\142\141\143\153" => [$this, "\171\163\x79\x65\151\151\171\161\x73\145\x63\x6d\x67\x6f\x79\x75"], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\122\145\x6c\141\x74\151\157\156\x20\167\x69\164\150\x20\x25\x73", PR__MDL__ADVANCED_CMS), $mksyucucyswaukig->label), "\x73\x63\x72\x65\145\x6e" => $useksmwkuswkwcqg, "\143\157\156\164\x65\170\x74" => $mgkceomocowocqyo, "\x61\162\x67\163" => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg]]); ugswokwmkumcmigc: qiaaqkymeuuueoqk: } asaowisseacciyia: gwiaimosqoiquwkc: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo["\x61\162\x67\x73"]) && $qookweymeqawmcwo["\x61\x72\147\163"])) { goto owgakkqgckqcegoi; } return $qookweymeqawmcwo["\141\162\x67\x73"]; owgakkqgckqcegoi: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\123\x6f\x6d\145\x74\150\x69\156\147\x20\151\x73\x20\167\x72\157\156\x67\x20\x69\x6e\x20\162\145\x6c\141\x74\151\x6f\x6e\x20\146\151\145\x6c\x64\x20\162\145\156\x64\145\162\151\x6e\x67", PR__MDL__ADVANCED_CMS), "\162\x65\154\141\164\151\x6f\156", self::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return ManipulatePost::waaisqccqacqeium($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto cigesysuauaiccms; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); cigesysuauaiccms: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = ManipulatePost::get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto qumkwsqqocooyuoq; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); qumkwsqqocooyuoq: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto gcskyqewysqaceeg; } $mcaisukqqyosuasi = ManipulatePage::ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto kkewoqqowugagwoy; gcskyqewysqaceeg: $mcaisukqqyosuasi = ManipulatePost::get($ymqmyyeuycgmigyo); kkewoqqowugagwoy: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); if (!$gwiwsycaaqgwmewg) { goto wwswmaewcaisauei; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); wwswmaewcaisauei: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy() : array { $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [self::wcwmusaouiqaqeww($this->aakmagwggmkoiiyu() . self::kouiwaoasqgwksas, __("\x45\156\141\142\x6c\145", PR__MDL__ADVANCED_CMS)), self::yyuwuqsiucweeoue(self::osiogououyayqyck, __("\115\x65\164\141\102\x6f\170\40\x50\157\163\x69\x74\151\157\x6e", PR__MDL__ADVANCED_CMS), ["\163\151\144\x65" => __("\123\x69\x64\145\142\x61\162", PR__MDL__ADVANCED_CMS), "\141\144\x76\x61\x6e\x63\x65\144" => __("\102\157\x74\164\x6f\155", PR__MDL__ADVANCED_CMS)], __("\x50\157\163\151\164\x69\157\156\40\x6f\x66\x20\155\145\164\141\142\157\170\40\151\156\x20\145\144\x69\x74\x20\163\x63\x72\145\x65\156\40\157\146\x20\143\x75\x73\164\157\155\40\160\157\x73\164\x20\x74\171\x70\145\x73\56", PR__MDL__ADVANCED_CMS))->awagieqcmmwkgwgs(true), self::iseogkiymousogom(self::uwoqgmuqskqcqsag(), __("\x49\x74\145\155\x73", PR__MDL__ADVANCED_CMS), [self::wcwmusaouiqaqeww(self::iccwcygaeqmomooo, __("\x45\156\x61\142\154\145", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6)->mkmssscwmeekwgqo(), self::wcwmusaouiqaqeww(self::iycuamekoueuemoy, __("\111\156\166\145\x72\163\x65\x20\x53\151\144\145", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\x61\x67\x65", PR__MDL__ADVANCED_CMS))->wyqeckayigciacse("\163\x6d\141\x6c\154"), self::ymuegqgyuagyucws(self::NAME, __("\101\144\155\x69\x6e\40\x50\141\156\x65\154\x20\116\141\x6d\x65", PR__MDL__ADVANCED_CMS)), self::ckuwucygcwsiawms(self::igecewwoemccgwsq, __("\117\x72\x69\147\x69\x6e", PR__MDL__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ckuwucygcwsiawms(self::gygsikewooaciecc, __("\x44\145\x73\x74\x69\156\141\x74\x69\157\156", PR__MDL__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ymuegqgyuagyucws(self::qgwwgcuuykqagamk, __("\x4f\x72\x69\147\x69\156\40\x54\x69\x74\154\145", PR__MDL__ADVANCED_CMS), sprintf("\74\163\164\x72\157\156\147\76\45\x73\72\74\57\x73\x74\162\x6f\x6e\x67\x3e\x20\45\x73", __("\116\x6f\x74\151\x63\145", PR__MDL__ADVANCED_CMS), __("\x57\151\x6c\x6c\x20\x62\x65\40\165\163\x65\144\40\x61\163\40\x73\154\x75\x67\x20\x74\x6f\157\x2e", PR__MDL__ADVANCED_CMS))), self::ymuegqgyuagyucws(self::uyqakoogaigomqmq, __("\x44\x65\x73\164\151\156\141\x74\x69\157\156\40\x54\x69\164\154\145", PR__MDL__ADVANCED_CMS)), self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm)])->usosgsaaimqcysyk()]; } }
