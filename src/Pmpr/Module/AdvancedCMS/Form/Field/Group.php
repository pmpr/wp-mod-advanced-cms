<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce116c94039             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Group extends OptionAwareField { protected array $fields = []; protected array $nonDuplicate = []; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $ikgwqyuyckaewsow = [], ?string $mkqqqewsokcswckc = null) { parent::__construct("\x67\x72\157\x75\160", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->sanitizer = null; $this->acauweqyyugwisqc(["\154\x69\x6d\151\164" => 0, "\x73\157\162\x74\x61\142\x6c\145" => false, "\162\145\155\x6f\x76\145\137\142\x75\164\164\157\x6e" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\x62\x67\x2d\164\x72\x61\x6e\x73\160\x61\x72\145\156\x74\x20\x66\157\162\155\55\143\x6f\x6e\x74\141\151\x6e\x65\x72\x20\x63\x6f\x6c\x2d\x31\62")->ewweaossowcqywaw($ikgwqyuyckaewsow); } public function sosuookgumsgyyyc($uuyoeicyoayimaoa) : self { $this->gmywsauuqwcmakuc("\x72\157\167\x2d\154\x69\x6d\151\x74", $uuyoeicyoayimaoa); return $this; } public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self { if (!$pkyyagewkiyckmwy) { goto kyiwsiakwgiwouyi; } $this->acauweqyyugwisqc(["\x61\x64\x64\x5f\142\x75\164\164\x6f\156" => sprintf(__("\101\x64\144\x20\x4e\x65\167\40\45\x73", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\147\162\157\x75\160\137\164\151\x74\x6c\145" => sprintf("\x25\163\x20\173\43\x7d", $pkyyagewkiyckmwy)]); kyiwsiakwgiwouyi: return $this; } public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function acakyumkgoeiskqq(array $ikgwqyuyckaewsow) : self { $this->fields = $ikgwqyuyckaewsow; return $this; } public function omsoosuoikgueyke() : self { $this->qigsyyqgewgskemg("\x63\x6f\154\x2d\x6c\147\x2d\66"); return $this; } public function usosgsaaimqcysyk() : self { $this->qigsyyqgewgskemg("\143\157\154\55\154\x67\x2d\66\x20\143\x6f\x6c\x2d\x78\x6c\x2d\x34"); return $this; } public function wygoskowywcuyaiq() : self { $this->usosgsaaimqcysyk(); return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if ($aiowsaccomcoikus->yywskysiycwkwsgw()) { goto awgmegueeqeyqamu; } $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); awgmegueeqeyqamu: if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\x68\x65\x63\153\142\x6f\170", "\x72\141\144\151\x6f"])) { goto gqimwsyemoewagcy; } $aiowsaccomcoikus->mkmssscwmeekwgqo(); goto aoaqwygkaagiuuws; gqimwsyemoewagcy: $aiowsaccomcoikus->yoimakcqmoqokkcu(); aoaqwygkaagiuuws: $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $this->mkksewyosgeumwsa($aiowsaccomcoikus); maaisuqwkymeguys: } esagiiawomyacuiw: return $this; } public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\x61\156\x64", $wumguikkgaigkoee = []) : self { if ($wumguikkgaigkoee) { goto qkyciyiwkmgkmquk; } $wumguikkgaigkoee = ["\163\x75\x62\x6d\x69\x74" => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(sprintf(__("\123\157\162\x72\x79\x2c\x20\171\x6f\165\x20\x63\x61\156\x27\x74\40\163\x75\142\155\151\x74\x20\146\x6f\162\155\56\40\x53\157\155\x65\x20\x66\x69\145\154\x64\47\x73\40\x76\141\154\165\145\x20\x69\163\x20\x64\165\160\x6c\151\143\141\x74\145\144\x20\151\156\40\x67\x72\157\165\x70\54\x20\x70\x6c\x65\141\163\145\40\x66\x69\170\40\145\162\x72\x6f\162\163\x20\x61\x6e\x64\40\164\x72\x79\x20\141\x67\141\x69\x6e\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\x64\144\x5f\x6e\145\x77" => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(sprintf(__("\x53\157\162\162\171\54\x20\171\157\x75\40\x63\x61\x6e\x27\164\x20\x61\x64\144\40\156\145\x77\40\x25\x73\x2e\x20\123\x6f\155\145\x20\146\x69\145\x6c\x64\47\x73\40\x76\141\154\165\x65\x20\151\163\40\144\165\160\x6c\x69\143\x61\164\145\x64\x2c\x20\160\x6c\x65\141\x73\x65\x20\146\x69\x78\40\145\x72\162\x6f\162\163\x20\141\156\x64\x20\x74\162\171\40\141\x67\x61\151\x6e\x2e", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))]; qkyciyiwkmgkmquk: $this->nonDuplicate[] = ["\x6d\x65\163\163\x61\147\145\163" => $wumguikkgaigkoee, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo]; return $this; } public function iaogqeuosowauooc() : array { return $this->nonDuplicate; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { $aiowsaccomcoikus[Constants::ciyoccqkiamemcmm] = $this->qooeaookuemoqecm(); ayceeyuocgowqwsa: } sksgcusuyqcwqswe: if (!($wmeooiyuiyagywsc = $this->iaogqeuosowauooc())) { goto iuwkiyimqmgguose; } $this->usoqcyyugsuyiewc("\x70\162\x2d\x6e\x6f\156\55\x64\x75\x70\154\151\143\141\x74\x65\55\147\162\157\x75\x70")->eskgwaywimqcwcyy("\x6e\x6f\x6e\x2d\x64\165\x70\x6c\151\143\141\164\145", json_encode($wmeooiyuiyagywsc)); iuwkiyimqmgguose: parent::qgsieamsswkgysow($ywmkwiwkosakssii); $this->options[Constants::iikosyqiawkweouo] = $this->ccekeuwwqqoiwuwy(); } }