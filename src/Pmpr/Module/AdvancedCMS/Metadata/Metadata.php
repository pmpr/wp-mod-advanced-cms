<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284d9a500ecb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Metadata; use Pmpr\Common\Foundation\Data\Metadata as Data; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Taxonomy; class Metadata extends Common { const iwascisiiokuackw = "\x61\165\x74\150\x6f\162"; const UPDATE = "\x75\160\144\141\x74\x65"; const goumieeyyqigueiw = "\x63\x6f\x6d\155\145\x6e\x74\x73"; const uceokykiyceaouke = "\x73\x74\x75\144\171\137\164\x69\155\145"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6d\145\164\x61\x64\141\x74\x61\x5f\162\x65\156\144\145\162"), [$this, "\162\x65\156\144\145\162"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x65\x74\x61\144\141\x74\x61\137\147\x65\x74\137\x69\164\145\155\x73"), [$this, "\x77\x61\163\x67\167\x73\x6f\x67\155\x75\161\165\161\x65\x61\141"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\145\x74\141\x64\141\164\141\137\x67\145\x74\x5f\x69\164\145\155\163\x5f\143\x6f\x75\156\164"), [$this, "\171\147\x6d\143\163\x6d\x65\x67\143\x79\163\171\145\157\x73\163"], 10, 2); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Stat::symcgieuakksimmu(); Widget::symcgieuakksimmu(); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::uwceyikaaaqgkkee => "\x69\164\x65\155\163"]); if (isset($ywmkwiwkosakssii[self::qwumqqyuasyskkkc])) { goto mmgmqogugasaqkgg; } $ywmkwiwkosakssii[self::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); mmgmqogugasaqkgg: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[self::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [self::UPDATE => __("\125\160\x64\141\164\145\x64\x20\x41\164", PR__MDL__ADVANCED_CMS), self::iwascisiiokuackw => __("\x41\165\x74\x68\x6f\x72", PR__MDL__ADVANCED_CMS), self::wmmucsiyiyusmssm => __("\x43\x72\145\141\x74\145\144\x20\101\x74", PR__MDL__ADVANCED_CMS), self::goumieeyyqigueiw => __("\103\x6f\155\x6d\145\x6e\164\163", PR__MDL__ADVANCED_CMS), self::uceokykiyceaouke => __("\x53\164\x75\x64\x79\x20\164\151\x6d\145", PR__MDL__ADVANCED_CMS)]; $oammesyieqmwuwyi = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x65\x74\141\144\x61\x74\141\137\147\x65\x74\x5f\x61\x6c\154\x5f\151\164\x65\x6d\163"), $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto mgcuiguaomoqwwwm; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; mgcuiguaomoqwwwm: smcguieygyqcaqgs: } wmumywgyyeagqoeq: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\146\157\162\x6d\x61\x74" => ManipulateSetting::uyomwmskouyyqyyq(), self::mswoacegomcucaik => '', self::cgiswgcumueqgcmw => 0, self::ackcaikowcokggsc => []]); $post = ManipulatePost::get(ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik)); $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, self::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto eoyiumycaigawmmc; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); eoyiumycaigawmmc: $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\146\x6f\162\155\x61\x74"); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto kgmeiwiakwicgkkk; } $wsqgggkqsaokoegu = ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post, false); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy(ManipulateArray::get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case self::UPDATE: $suckquwcuiuyiogc = ManipulatePost::oukqamgqowciwoum($saqmwwmqiwmkiwaa, $post, false); if (!$suckquwcuiuyiogc) { goto wgiygcmqaokywuqa; } if ($suckquwcuiuyiogc < $wsqgggkqsaokoegu) { goto ooqksueucyagyuoe; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto osmmoyqkqoucsgow; ooqksueucyagyuoe: $eqgoocgaqwqcimie = ManipulateHTML::gmqyuaqwgiayskei("\55"); osmmoyqkqoucsgow: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::yqqwkcykyeagkakg); wgiygcmqaokywuqa: goto sckioayasmkcoeoo; case self::iwascisiiokuackw: $iakkeikwceeomgyq = ManipulatePost::mguqscccckuywsya($post); $eqgoocgaqwqcimie = ManipulatePost::ekauksssqmmykouq($post); $ugugimquukqwogge->qoowicksguscqyks(ManipulatePost::qkweigiqsaaigqau($post))->saemoowcasogykak(IconFontawesomeInterface::ueqwmuwomeukquwy); goto sckioayasmkcoeoo; case self::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto iauwuugggmegwisk; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($wsqgggkqsaokoegu), $wsqgggkqsaokoegu); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::wcswouquyoywwagi); iauwuugggmegwisk: goto sckioayasmkcoeoo; case self::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\45\163\40\143\x6f\155\155\x65\156\x74\x73", PR__MDL__ADVANCED_CMS), DecoratorPost::qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::kumgmciqwoukimgc)->qoowicksguscqyks(ManipulatePost::ycqquoiyyuesegsy($post) . "\43\x63\157\155\155\x65\156\x74\x73\137\143\x6f\x6e\164\141\151\156\145\162"); goto sckioayasmkcoeoo; case self::uceokykiyceaouke: $moowucgmewesiwsu = ManipulatePost::cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto aukucaieceiwesmm; } $eqgoocgaqwqcimie = sprintf(__("\x25\163\x20\155\x69\156\165\164\145\x20\162\145\141\x64\151\x6e\147", PR__MDL__ADVANCED_CMS), $this->msywmyaoqmaegsuy($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::amsucmiagiecieac); aukucaieceiwesmm: goto sckioayasmkcoeoo; default: if (!DecoratorTaxonomy::myagqecycsaiyqsk($igqsaukqcqscimok)) { goto kicwiowcogmauwiy; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto kaiesowkgwogqseg; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = ManipulateArray::get($kesssewsiegssiya, "\x73\x69\x6e\x67\154\x65\137\x76\x61\x6c\x75\145"); if ($qyucoagsiyeieyiu) { goto cwikoaeqmmoimmso; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto acggikioyeueeowg; } if (count($uyuaosigqymaqsaa) == 1) { goto iwueukqcywkiyqge; } foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::ogigqueukwysusii => $cekoogweeooasayu ? ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; micceocwuwkyusic: } kqyoakickmseyyeq: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\164\141\x78\157\x6e\x6f\155\151\145\x73", [self::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto ykwasaaoeeiuomim; iwueukqcywkiyqge: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); ykwasaaoeeiuomim: acggikioyeueeowg: goto egaymskkosukqeao; cwikoaeqmmoimmso: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); egaymskkosukqeao: kaiesowkgwogqseg: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::usaocmsseuquaqsu); kicwiowcogmauwiy: goto sckioayasmkcoeoo; } yssqmyoaokkksukc: sckioayasmkcoeoo: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x65\x74\x61\144\141\x74\x61\x5f\x75\160\x64\x61\164\145\137{$igqsaukqcqscimok}"), $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto cwswueuqoamqasya; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; cwswueuqoamqasya: eyiwqgqcsqakwqss: } yuoeumyiuqkuouey: kgmeiwiakwicgkkk: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto omykokikgocoikec; } $eqgoocgaqwqcimie = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto suuskagowwgsouqw; } $ugugimquukqwogge->qoowicksguscqyks(ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); suuskagowwgsouqw: omykokikgocoikec: return $ugugimquukqwogge; } }
