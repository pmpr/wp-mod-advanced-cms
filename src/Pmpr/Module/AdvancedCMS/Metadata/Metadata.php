<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6256c1a44c458             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Metadata; use Pmpr\Common\Foundation\Data\Metadata as Data; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WP_Taxonomy; class Metadata extends Common { const iwascisiiokuackw = "\141\x75\164\x68\157\162"; const UPDATE = "\165\160\144\141\164\145"; const goumieeyyqigueiw = "\x63\157\155\x6d\145\x6e\x74\x73"; const uceokykiyceaouke = "\163\164\165\144\171\137\x74\151\155\145"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x6d\x65\164\141\144\141\164\141\137\x72\x65\x6e\x64\145\162"), [$this, "\162\x65\156\144\145\x72"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\145\164\x61\144\141\164\141\137\x67\x65\x74\137\151\x74\x65\155\x73"), [$this, "\167\141\163\147\x77\163\x6f\147\155\165\x71\x75\161\145\141\x61"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\145\164\x61\144\141\x74\141\x5f\x67\145\164\137\x69\x74\x65\155\163\137\143\x6f\165\x6e\x74"), [$this, "\x79\x67\x6d\143\x73\155\145\147\143\x79\163\x79\145\157\x73\x73"], 10, 2); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { Widget::symcgieuakksimmu(); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::uwceyikaaaqgkkee => "\x69\164\145\x6d\x73"]); if (isset($ywmkwiwkosakssii[self::qwumqqyuasyskkkc])) { goto suuskagowwgsouqw; } $ywmkwiwkosakssii[self::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); suuskagowwgsouqw: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[self::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [self::UPDATE => __("\x55\160\144\x61\164\145\144\x20\101\x74", PR__MDL__ADVANCED_CMS), self::iwascisiiokuackw => __("\101\x75\x74\x68\157\x72", PR__MDL__ADVANCED_CMS), self::wmmucsiyiyusmssm => __("\103\162\145\x61\164\145\x64\40\x41\x74", PR__MDL__ADVANCED_CMS), self::goumieeyyqigueiw => __("\103\157\155\155\145\x6e\164\x73", PR__MDL__ADVANCED_CMS), self::uceokykiyceaouke => __("\x53\x74\165\x64\x79\40\x74\151\x6d\145", PR__MDL__ADVANCED_CMS)]; $oammesyieqmwuwyi = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\145\164\141\144\141\x74\x61\x5f\147\x65\164\x5f\x61\x6c\x6c\137\151\x74\x65\x6d\163"), $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto aquqkiggamaoegoo; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; aquqkiggamaoegoo: csieaismmmocyacu: } omykokikgocoikec: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\146\x6f\162\155\x61\x74" => ManipulateSetting::uyomwmskouyyqyyq(), self::mswoacegomcucaik => '', self::cgiswgcumueqgcmw => 0, self::ackcaikowcokggsc => []]); $post = ManipulatePost::get(ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik)); $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, self::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto mykiyqcqiegkiqys; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); mykiyqcqiegkiqys: $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, "\x66\x6f\162\x6d\x61\x74"); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto ykqsuiyyosyeyscc; } $wsqgggkqsaokoegu = ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post, false); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy(ManipulateArray::get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case self::UPDATE: $suckquwcuiuyiogc = ManipulatePost::oukqamgqowciwoum($saqmwwmqiwmkiwaa, $post, false); if (!$suckquwcuiuyiogc) { goto mqimkwickkgqqeoi; } if ($suckquwcuiuyiogc < $wsqgggkqsaokoegu) { goto saauykgakaeiyoua; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto qwemkcoaseywkuuc; saauykgakaeiyoua: $eqgoocgaqwqcimie = ManipulateHTML::gmqyuaqwgiayskei("\55"); qwemkcoaseywkuuc: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::yqqwkcykyeagkakg); mqimkwickkgqqeoi: goto koiscokkkaimiecq; case self::iwascisiiokuackw: $iakkeikwceeomgyq = ManipulatePost::mguqscccckuywsya($post); $eqgoocgaqwqcimie = ManipulatePost::ekauksssqmmykouq($post); $ugugimquukqwogge->qoowicksguscqyks(ManipulatePost::qkweigiqsaaigqau($post))->saemoowcasogykak(IconFontawesomeInterface::ueqwmuwomeukquwy); goto koiscokkkaimiecq; case self::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto kwyimqumkuuyaiku; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($wsqgggkqsaokoegu), $wsqgggkqsaokoegu); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::wcswouquyoywwagi); kwyimqumkuuyaiku: goto koiscokkkaimiecq; case self::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\x25\x73\x20\x63\157\155\155\x65\156\164\x73", PR__MDL__ADVANCED_CMS), DecoratorPost::qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::kumgmciqwoukimgc)->qoowicksguscqyks(ManipulatePost::ycqquoiyyuesegsy($post) . "\x23\x63\x6f\155\155\145\156\x74\x73\137\143\x6f\156\x74\x61\x69\x6e\145\162"); goto koiscokkkaimiecq; case self::uceokykiyceaouke: $moowucgmewesiwsu = ManipulatePost::cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto gkqiqaqecmoogmaa; } $eqgoocgaqwqcimie = sprintf(__("\45\163\40\x6d\x69\x6e\x75\164\145\x20\162\x65\x61\144\151\156\x67", PR__MDL__ADVANCED_CMS), $this->msywmyaoqmaegsuy($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::amsucmiagiecieac); gkqiqaqecmoogmaa: goto koiscokkkaimiecq; default: if (!DecoratorTaxonomy::myagqecycsaiyqsk($igqsaukqcqscimok)) { goto sqwuqegeiisoiiuq; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto eouwacqiommmeaqc; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = ManipulateArray::get($kesssewsiegssiya, "\163\151\156\x67\x6c\x65\x5f\x76\x61\154\x75\145"); if ($qyucoagsiyeieyiu) { goto wiwoiyoakywqyaiy; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto isewysikysqewkis; } if (count($uyuaosigqymaqsaa) == 1) { goto gsymkkskwsgggoic; } foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::ogigqueukwysusii => $cekoogweeooasayu ? ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; ceiuqsiqgiuiekem: } mceucsaeouuwyumm: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\x74\x61\x78\x6f\156\157\x6d\x69\145\163", [self::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto ugykmcouiwiscoqu; gsymkkskwsgggoic: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); ugykmcouiwiscoqu: isewysikysqewkis: goto igmmqwyawcuuckkq; wiwoiyoakywqyaiy: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); igmmqwyawcuuckkq: eouwacqiommmeaqc: $ugugimquukqwogge->saemoowcasogykak(IconFontawesomeInterface::usaocmsseuquaqsu); sqwuqegeiisoiiuq: goto koiscokkkaimiecq; } owuuuiekkaeoeacq: koiscokkkaimiecq: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\x65\x74\141\144\141\x74\x61\137\x75\160\144\141\164\145\137{$igqsaukqcqscimok}"), $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto uscokkmquayiukag; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; uscokkmquayiukag: cquecqekuucwoumw: } agemwookwseyycqo: ykqsuiyyosyeyscc: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto egesuwkqkmaigaoe; } $eqgoocgaqwqcimie = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto ugogoekeckgcmuaw; } $ugugimquukqwogge->qoowicksguscqyks(ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); ugogoekeckgcmuaw: egesuwkqkmaigaoe: return $ugugimquukqwogge; } }
