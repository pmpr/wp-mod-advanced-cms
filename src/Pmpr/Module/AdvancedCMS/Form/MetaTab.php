<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec394cea5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\AttributeTrait; use CMB2_Boxes; class MetaTab extends Common { use AttributeTrait; protected ?string $id = null; protected bool $hide = false; protected bool $once = false; protected bool $regKey = true; protected ?string $hook = null; protected ?string $topMenu = null; protected ?string $postsSlug = null; protected ?string $key = "\x6d\171\137\157\160\x74\x69\157\156"; protected array $menuArgs = ["\166\151\x65\167\137\x63\141\160\141\142\x69\x6c\x69\164\171" => '', "\x70\x61\x72\145\x6e\x74\x5f\163\x6c\165\147" => '', "\x70\141\147\145\x5f\x74\151\x74\154\145" => '', "\x6d\145\x6e\x75\137\x74\151\x74\154\x65" => '', "\143\x61\x70\141\x62\x69\154\x69\x74\x79" => "\x6d\x61\156\x61\147\145\137\x6f\x70\x74\151\157\x6e\x73", "\x6d\x65\156\x75\x5f\x73\154\x75\x67" => '', "\x69\143\x6f\156\x5f\165\x72\154" => '', "\x70\x6f\x73\151\164\x69\157\x6e" => null, "\x6e\x65\x74\x77\x6f\x72\153" => false]; protected array $tabs = []; protected int $column = 1; protected $saveText = false; protected $resetText = false; protected array $load = []; protected ?string $title = ''; protected ?string $page = null; protected ?array $metaBoxes = []; public function __construct($uusmaiomayssaecw = null) { if (!(is_admin() && class_exists("\x43\x4d\102\62"))) { goto ieqesiiageaauiuw; } $this->id = $this->iaqckqwoiseyqaku(); $this->key = $uusmaiomayssaecw; parent::__construct(); ieqesiiageaauiuw: } public function qsqiqgmeoowykuue() : ?array { return $this->metaBoxes; } public function sikqggwmmykuiymy(MetaBox $qkweikswegyciaie) : self { $this->metaBoxes[$qkweikswegyciaie->mwikyscisascoeea()] = $qkweikswegyciaie; return $this; } public function swqsasqieqqgusew(?string $suaemuyiacqyugsm) : self { $this->page = $suaemuyiacqyugsm; return $this; } public function kyqakacqeumicgag() : ?string { return $this->page; } public function ecogksqmogoywequ(bool $caeimyuwaykuuaay) : self { $this->hide = $caeimyuwaykuuaay; return $this; } public function ekwgmoqoeywwwccw() : bool { return $this->hide; } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { $this->title = $meqocwsecsywiiqs; return $this; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function licekmysugkqeoay() : array { return $this->menuArgs; } public function qaygoqgeieeugsey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->menuArgs[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function mmsykuomogaqoaye() : ?string { return $this->hook; } public function oggwewqswcggccae(?string $iaakskwmyqceoscy) : self { $this->hook = $iaakskwmyqceoscy; return $this; } public function ceiqwucmgawwmawo($ioeaaqcyogamwwqc) : self { $this->saveText = $ioeaaqcyogamwwqc; return $this; } public function kusoyyuwiukiokww() { return $this->saveText; } public function kkigeuaeguyueaem($kqkwemukaemqoyas) : self { $this->resetText = $kqkwemukaemqoyas; return $this; } public function occsuagsiuuimcoy() { return $this->resetText; } public function eigooueumicckoge() : array { return $this->load; } public function agcaegggmmeuammg($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->licekmysugkqeoay(), $uusmaiomayssaecw); } public function ecmssiawmckmucas(bool $msykisgooaaamcio) : self { $this->regKey = $msykisgooaaamcio; return $this; } public function agciemoaikwmiugi() : bool { return $this->regKey; } public function iaqckqwoiseyqaku() : string { return "\143\155\157" . rand(1000, 99999); } public function ycwgegqesceyoocw(int $qgoqiacsiccwoawi) : self { if (!($qgoqiacsiccwoawi > 2 || $qgoqiacsiccwoawi < 1)) { goto gamqcwuwkikwqoay; } $qgoqiacsiccwoawi = 1; gamqcwuwkikwqoay: $this->column = $qgoqiacsiccwoawi; return $this; } public function myywwqkyiwawwquy() : int { return $this->column; } public function cisyiemkeykgkomc() : ?string { return $this->key; } public function gcgmwakaoecqcuwo(?string $uusmaiomayssaecw) : self { $this->key = $uusmaiomayssaecw; return $this; } public function wigskegsqequoeks() { $kiiwewqkgqgqwwue = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gsaomcwyacqcumaa() && $this->agcaegggmmeuammg("\x6e\x65\164\167\x6f\162\x6b") ? "\x6e\145\164\x77\157\x72\x6b\137" : ''; $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\137\x68\x65\141\x64", [$this, "\x75\165\161\161\153\147\x79\161\x65\153\155\147\x79\143\x67\x71"])->qcsmikeggeemccuu("\x61\144\155\x69\x6e\x5f\x69\156\151\x74", [$this, "\171\145\x79\x69\147\x75\x79\x65\147\155\155\171\165\x73\x65\x61"])->qcsmikeggeemccuu("\141\x64\x6d\x69\156\137\145\156\161\165\x65\165\145\x5f\163\143\x72\151\160\x74\163", [$this, "\x77\161\161\143\x6b\x6b\x6d\x71\141\153\151\x71\165\171\143\x73"])->qcsmikeggeemccuu("{$kiiwewqkgqgqwwue}\141\144\x6d\x69\156\137\x6d\145\x6e\x75", [$this, "\x73\157\x63\x63\x6f\x6d\x61\153\167\x65\x71\x67\x73\153\x69\143"], 20)->qcsmikeggeemccuu("\143\155\x62\x32\137\162\145\156\144\145\x72\x5f\157\160\164\x69\x6f\x6e\x73\x5f\163\x61\166\145\137\x62\165\x74\164\x6f\x6e", [$this, "\145\143\171\171\161\163\x67\167\167\165\x75\x6b\147\163\163\x67"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if (!$this->agciemoaikwmiugi()) { goto mscyggqcesgqqksu; } register_setting($this->cisyiemkeykgkomc(), $this->cisyiemkeykgkomc()); mscyggqcesgqqksu: $omwmuycmeqcqokom = $this->agcaegggmmeuammg("\x70\141\162\145\156\164\137\163\x6c\165\x67"); $ewuukoycimkekouc = $this->agcaegggmmeuammg("\x6d\145\156\165\x5f\163\x6c\x75\x67"); $this->ecogksqmogoywequ($omwmuycmeqcqokom && $omwmuycmeqcqokom === $ewuukoycimkekouc); $this->swqsasqieqqgusew($ewuukoycimkekouc ?: $this->cisyiemkeykgkomc()); $eiiwoqgkgmosakem = $this->agcaegggmmeuammg("\166\x69\145\167\137\143\141\160\141\x62\151\154\151\164\171"); if ($eiiwoqgkgmosakem) { goto oyeyomcgkmgymogq; } $this->qaygoqgeieeugsey("\x76\x69\145\167\x5f\143\x61\160\x61\x62\x69\154\x69\164\x79", $eiiwoqgkgmosakem === '' ? $this->agcaegggmmeuammg("\143\x61\x70\x61\x62\x69\x6c\151\x74\171") : false); oyeyomcgkmgymogq: } public function ccauywsgwsesgmua() : bool { return $this->once; } public function ikqkaioeswqeaqkw(?string $uwkoaemcqekeqqkw) : self { $this->topMenu = $uwkoaemcqekeqqkw; return $this; } public function eyqwmckgumyaoams() : ?string { return $this->topMenu; } public function aeecsqoyykuekais(?string $sgeeumkioegwiymu) : self { $this->postsSlug = $sgeeumkioegwiymu; return $this; } public function kecacgyqmgeeqmme() : ?string { return $this->postsSlug; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce, $egkeamycaysqsoma = true) : self { if (!$egkeamycaysqsoma) { goto iesekaeqeomeuaui; } $cciauwuwuqaywgce = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\x74\141\x62", $cciauwuwuqaywgce, $this); iesekaeqeomeuaui: if (!$cciauwuwuqaywgce instanceof Tab) { goto wsesqmcqoiyyqkqi; } $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; wsesqmcqoiyyqkqi: return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); wkwamkgkwykeqkec: } mogkoocsoeuyoqqa: return $this; } public function myomgmiksogoikuc() : bool { return !empty($this->equiyaoamqmaeckc()); } public function qessyiueeiwwgyag() { $eiiwoqgkgmosakem = $this->sscegwueamckwmcy("\x66\157\162\155\137\147\145\x6e\x65\x72\141\x74\157\162\x5f\x62\x61\x63\153\145\156\144\x5f\x70\x61\x67\x65\137\143\141\160\141\x62\x69\x6c\x69\x74\171", $this->agcaegggmmeuammg($this->agcaegggmmeuammg("\166\151\x65\167\137\x63\x61\x70\141\x62\151\x6c\151\x74\171"))); if (!(!$this->ekwgmoqoeywwwccw() && (!$eiiwoqgkgmosakem || $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie($eiiwoqgkgmosakem)))) { goto yuimwyoywaiiqacs; } $iogqeouiuqyewuqe = ''; $kqweykcqkgkmoqay = ''; $this->qigsyyqgewgskemg("\x77\162\141\160\40\143\155\x62\x32\55\157\160\x74\x69\157\x6e\x73\x2d\x70\x61\x67\x65\40\143\x6d\x6f\55\157\160\164\151\157\x6e\x73\x2d\x70\141\x67\145")->qigsyyqgewgskemg($this->cisyiemkeykgkomc()); $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($this->equiyaoamqmaeckc()); foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto gswcoeiisamakwii; } if (!$cciauwuwuqaywgce->wkkcmkuiigsukyik()) { goto yoqakewookqoqacm; } $aokagokqyuysuksm = $cciauwuwuqaywgce->mwikyscisascoeea(); $qgoqiacsiccwoawi = 1; $scwwkgcyecqgioqs = (array) $this->sscegwueamckwmcy("{$aokagokqyuysuksm}\x5f\164\141\142\x5f\163\x69\144\145\137\155\x65\164\141\142\157\170\145\163", $cciauwuwuqaywgce->weookicuaacigemm()); if (empty($scwwkgcyecqgioqs)) { goto ikuuiauwouuqawuw; } $scwwkgcyecqgioqs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($scwwkgcyecqgioqs, "\x67\x65\x74\x50\162\x69\157\x72\x69\x74\x79"); foreach ($scwwkgcyecqgioqs as $qkweikswegyciaie) { if (!$qkweikswegyciaie instanceof MetaBox) { goto uckewycoogsogwiy; } $qkweikswegyciaie = $this->sscegwueamckwmcy("{$qkweikswegyciaie->mwikyscisascoeea()}\x5f\163\151\x64\x65\x5f\x6d\145\164\x61\142\157\x78\x65", $qkweikswegyciaie); if (!$qkweikswegyciaie->mukiwuqwmywsckco()) { goto kwiggogcgciwuwqk; } $qkweikswegyciaie->register($this->cisyiemkeykgkomc()); $this->omameoyeausyugmw($qkweikswegyciaie, "\146\157\x72\x6d\137\155\x61\153\145\x72\137\x74\x61\142\137\x73\151\144\x65\x5f\143\157\x6e\164\141\151\156\145\x72\137{$aokagokqyuysuksm}", "\163\151\x64\x65"); $qgoqiacsiccwoawi = 2; kwiggogcgciwuwqk: uckewycoogsogwiy: yykqaowwsqgqysmq: } suqceasgacskcmkc: ikuuiauwouuqawuw: $iogqeouiuqyewuqe .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia([$cciauwuwuqaywgce->emgauskcekyqqseg(), $cciauwuwuqaywgce->qcgakseyaikigqco()], "\x23", [Constants::gouqcwikiiygyasc => "\157\x70\164\x2d\x74\x61\x62\55{$aokagokqyuysuksm}", "\x63\154\141\163\163" => "\156\141\166\x2d\164\x61\142\40\x6f\160\x74\x2d\x74\141\x62\x20\x70\162\x2d\x74\141\x62", "\144\x61\164\x61\x2d\x6f\x70\164\x63\157\156\164\x65\x6e\164" => "\43\157\160\164\55\143\157\x6e\164\x65\156\164\55{$aokagokqyuysuksm}"]); $kqweykcqkgkmoqay .= $this->iuygowkemiiwqmiw("\x63\x6f\156\x74\x65\156\x74", [Constants::gouqcwikiiygyasc => $aokagokqyuysuksm, Constants::meisqwykgaymauka => $qgoqiacsiccwoawi, "\144\x65\x73\x63\162\151\x70\164\151\x6f\x6e" => $cciauwuwuqaywgce->meqceykmywmqgoym(), "\143\x6f\x6e\x74\141\x69\x6e\145\162\137\141\x74\164\x72\x73" => ["\151\x64" => "\157\x70\164\x2d\x63\x6f\x6e\x74\x65\156\164\55{$aokagokqyuysuksm}", "\x63\x6c\141\163\163" => "\x6f\x70\164\x2d\143\x6f\x6e\x74\145\x6e\x74", "\144\x61\164\x61\55\x62\x6f\x78\x65\x73" => implode("\x2c", array_keys($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($cciauwuwuqaywgce->qsqiqgmeoowykuue())))]]); yoqakewookqoqacm: gswcoeiisamakwii: oeocukauoyosicso: } oimkeqocuguqqsqk: $qyukicweqoisimwg = array_filter([$this->omeeeegkauuouaka(), $this->uaasoaieuoymsgsi()]); echo $this->iuygowkemiiwqmiw("\155\145\x74\x61\x74\x61\142", ["\153\x65\x79" => $this->cisyiemkeykgkomc(), "\150\157\x6f\x6b" => $this->mmsykuomogaqoaye(), "\164\141\142\x73" => $iogqeouiuqyewuqe, "\x70\141\147\x65" => $this->kyqakacqeumicgag(), "\x63\x6f\154\x75\x6d\x6e" => $this->myywwqkyiwawwquy(), "\156\x6f\x6e\x63\145\163" => [wp_nonce_field("\x6d\x65\164\141\x2d\x62\157\170\55\x6f\x72\144\145\x72", "\155\145\164\x61\55\142\x6f\170\x2d\157\x72\x64\145\x72\55\156\x6f\x6e\143\145", false, false), wp_nonce_field("\x63\154\x6f\163\145\x64\x70\157\x73\x74\x62\157\170\x65\x73", "\143\x6c\157\163\145\144\x70\x6f\x73\x74\x62\157\x78\x65\x73\x6e\157\156\143\145", false, false)], "\x62\x75\x74\164\157\x6e\163" => $qyukicweqoisimwg, "\143\x6f\x6e\x74\x65\x6e\x74\x73" => $kqweykcqkgkmoqay, "\160\141\x67\145\137\x74\x69\x74\x6c\145" => esc_html(get_admin_page_title()), "\143\157\156\164\x61\151\x6e\x65\x72\137\141\x74\164\x72\163" => $this->ccekeuwwqqoiwuwy()]); $this->once = false; yuimwyoywaiiqacs: } public function makgumuaykymweaq() : array { $ywmkwiwkosakssii = []; $omwmuycmeqcqokom = $this->eyqwmckgumyaoams(); $omwmuycmeqcqokom = $this->agcaegggmmeuammg(Constants::qoquaeuooeycomks) ?: $omwmuycmeqcqokom; $cmyoswawcimsecyy = $this->agcaegggmmeuammg(Constants::ysgwugcqguggmigq) ?: $this->qcgakseyaikigqco(); if (!$omwmuycmeqcqokom) { goto ocywegekakimmwcq; } $uescmseksquycukc = $this->kecacgyqmgeeqmme() ? "\77\x70\x6f\x73\x74\137\164\x79\160\x65\75{$this->kecacgyqmgeeqmme()}" : ''; $ywmkwiwkosakssii[] = $omwmuycmeqcqokom . $uescmseksquycukc; ocywegekakimmwcq: $ywmkwiwkosakssii[] = $cmyoswawcimsecyy; $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::qsegwakiwaiyimyy) ?: $cmyoswawcimsecyy; $ywmkwiwkosakssii[] = $this->sscegwueamckwmcy("\146\x6f\162\x6d\137\x67\145\x6e\145\x72\141\164\x6f\162\137\x62\x61\x63\153\x65\156\x64\137\160\141\147\145\137\x63\141\160\141\142\x69\x6c\151\x74\171", $this->agcaegggmmeuammg(Constants::ucmueuwwcmocgmig)); $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::wuowaiyouwecckaw) ?: $this->cisyiemkeykgkomc(); $ywmkwiwkosakssii[] = [$this, "\x71\145\163\x73\x79\151\165\145\x65\x69\167\167\x67\x79\x61\x67"]; if (!$omwmuycmeqcqokom) { goto emqswoaawgeyosmi; } $ywmkwiwkosakssii[] = null; goto iwsmmkqaoksmocok; emqswoaawgeyosmi: $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg("\151\143\157\x6e\137\x75\x72\x6c") ?: ''; iwsmmkqaoksmocok: $ywmkwiwkosakssii[] = $this->agcaegggmmeuammg(Constants::kekcgssiyagioocg) === null ? null : (int) $this->agcaegggmmeuammg(Constants::kekcgssiyagioocg); $ywmkwiwkosakssii["\143\x62"] = $omwmuycmeqcqokom ? "\x61\x64\x64\137\163\x75\x62\155\145\x6e\x75\x5f\x70\x61\147\x65" : "\141\144\144\137\155\145\x6e\x75\137\160\x61\147\x65"; return $ywmkwiwkosakssii; } public function soccomakweqgskic() { $ywmkwiwkosakssii = $this->makgumuaykymweaq(); $iaakskwmyqceoscy = $ywmkwiwkosakssii["\x63\142"]($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[1], $ywmkwiwkosakssii[2], $ywmkwiwkosakssii[3], $ywmkwiwkosakssii[4], $ywmkwiwkosakssii[5], $ywmkwiwkosakssii[6], $ywmkwiwkosakssii[7]); $this->oggwewqswcggccae($iaakskwmyqceoscy); $this->qcsmikeggeemccuu("\x61\144\x6d\151\156\137\x70\x72\151\156\x74\137\163\x74\x79\x6c\x65\163\x2d{$this->mmsykuomogaqoaye()}", ["\x43\x4d\x42\x32\x5f\150\157\157\153\165\x70", "\x65\x6e\161\165\145\165\x65\x5f\143\155\x62\137\143\163\x73"])->qcsmikeggeemccuu("\141\x64\144\x5f\155\x65\x74\141\x5f\142\x6f\170\x65\163\x5f{$this->mmsykuomogaqoaye()}", [$this, "\167\141\143\x65\155\x6b\161\x6d\x69\167\165\161\157\x75\x67\141"])->qcsmikeggeemccuu("\154\x6f\x61\x64\55{$this->mmsykuomogaqoaye()}", [$this, "\157\x67\153\x69\151\145\167\163\x63\145\155\x61\161\x6b\x77\x67"]); $this->cqscqicucmeamkyq($this->ygyygikyocoymgaw("\141\146\x74\x65\x72\137\151\x6e\x69\164\137\150\x6f\x6f\153", false), $iaakskwmyqceoscy, $this); $this->siqqwyaiwgagokug(); } private function siqqwyaiwgagokug() { $symcuwcoqkwoscsg = $this->eigooueumicckoge(); $iaakskwmyqceoscy = $this->mmsykuomogaqoaye(); if (!$symcuwcoqkwoscsg) { goto esaqcqqwuussiiwo; } foreach ($symcuwcoqkwoscsg as $sqaougiyimwumoqi) { $ywmkwiwkosakssii = (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::okeuagwgwkmiokac, 1); $aiamqeawckcsuaou = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::uqgcmmosieyimiku); $ekiuyucoiagmscgy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::wwgusigoaksqmwsm); $sqqewmoeaekuyyas = (int) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sqaougiyimwumoqi, Constants::iuqumwggccmcuyem, 10); if (!($ekiuyucoiagmscgy && $aiamqeawckcsuaou && false !== strpos($sqaougiyimwumoqi[Constants::uqgcmmosieyimiku], "\55\133\x68\157\157\153\x5d"))) { goto qiiigwkqeoewsuwm; } $aiamqeawckcsuaou = str_replace("\133\150\x6f\x6f\153\135", $iaakskwmyqceoscy, $aiamqeawckcsuaou); $sqqewmoeaekuyyas = $sqqewmoeaekuyyas > 0 ? $sqqewmoeaekuyyas : 10; $ywmkwiwkosakssii = $ywmkwiwkosakssii > 0 ? $ywmkwiwkosakssii : 1; $this->qcsmikeggeemccuu($aiamqeawckcsuaou, $ekiuyucoiagmscgy, $ywmkwiwkosakssii, $sqqewmoeaekuyyas); qiiigwkqeoewsuwm: okkmcocqokkskasy: } esikeyqyuikmaiek: esaqcqqwuussiiwo: } public function wacemkqmiwuqouga() { $ywoucyskcquysiwc = $this->equiyaoamqmaeckc(); if (!$ywoucyskcquysiwc) { goto yqagomygmeoecwey; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $saouceauqqiwcwas = $cciauwuwuqaywgce->wacemkqmiwuqouga($this->cisyiemkeykgkomc()); if (!$cciauwuwuqaywgce->sekaaukqmiysugws()) { goto qsgqwyqaqiowkmco; } $uaqusiikkokccqou = (array) $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\x5f\x74\x61\x62\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\137\155\145\x74\x61\x62\x6f\x78\x65\163", $cciauwuwuqaywgce->qsqiqgmeoowykuue(), $cciauwuwuqaywgce, $this); $uaqusiikkokccqou = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($uaqusiikkokccqou, "\x67\x65\x74\x50\162\151\157\162\x69\x74\171"); foreach ($uaqusiikkokccqou as $qkweikswegyciaie) { $qkweikswegyciaie = $this->sscegwueamckwmcy("{$this->cisyiemkeykgkomc()}\137\x74\141\x62\x5f{$cciauwuwuqaywgce->cisyiemkeykgkomc()}\x5f\x6d\145\x74\x61\x62\x6f\x78\x5f{$qkweikswegyciaie->cisyiemkeykgkomc()}", $qkweikswegyciaie, $cciauwuwuqaywgce, $this); if (!$qkweikswegyciaie instanceof MetaBox) { goto gsygwgsiawgmqiyi; } $mgkceomocowocqyo = $qkweikswegyciaie->yqsycyoeiusqqqgm(); $this->sceiskoouaiqocqo($qkweikswegyciaie, $saouceauqqiwcwas, $mgkceomocowocqyo === "\x73\151\144\145" ? "\156\x6f\162\x6d\x61\154" : $mgkceomocowocqyo); gsygwgsiawgmqiyi: wwukgaquuyoissgy: } suqcsgaosywaauuu: qsgqwyqaqiowkmco: mscgewkcqcoowweg: } ikqeeaysmqgcgawq: yqagomygmeoecwey: foreach ($this->qsqiqgmeoowykuue() as $qkweikswegyciaie) { if (!$qkweikswegyciaie instanceof MetaBox) { goto usymasgsyqgsuocg; } $this->sceiskoouaiqocqo($qkweikswegyciaie, $qkweikswegyciaie->register($this->cisyiemkeykgkomc()), "\163\151\x64\x65"); usymasgsyqgsuocg: eucqomyqykgoiuge: } qikaewekoecykeou: } public function sceiskoouaiqocqo(MetaBox $qkweikswegyciaie, $uoeiskamgscgeccq = [], string $mgkceomocowocqyo = "\156\x6f\x72\x6d\x61\x6c") { if (!is_array($uoeiskamgscgeccq)) { goto aiccyaswigkaycqk; } $uoeiskamgscgeccq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($uoeiskamgscgeccq, $qkweikswegyciaie->mwikyscisascoeea()); aiccyaswigkaycqk: if (!$this->uaicqoagkoeacawy($uoeiskamgscgeccq)) { goto zayqqeqgcwkekwws; } $aokagokqyuysuksm = $qkweikswegyciaie->mwikyscisascoeea(); $this->qcsmikeggeemccuu("\143\155\142\62\x5f\x73\141\x76\145\x5f\157\x70\x74\151\x6f\156\x73\x2d\x70\x61\147\145\x5f\146\x69\x65\x6c\144\x73\x5f{$aokagokqyuysuksm}", [$this, "\x67\x6f\171\x65\x6d\151\x6b\x6f\147\x65\165\x73\x6b\x67\x61\163"], 10, 2); $wyicesskmckwqeec = "\x70\157\x73\164\x62\157\x78\137\143\x6c\141\x73\163\145\163\x5f{$this->mmsykuomogaqoaye()}\x5f{$aokagokqyuysuksm}"; if (!("\163\x69\144\x65" !== $mgkceomocowocqyo && $this->myomgmiksogoikuc())) { goto sqyokemumceysegy; } $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x65\x77\x73\153\x6b\167\x75\x77\153\153\x6b\x61\x71\167\147\153"]); sqyokemumceysegy: if (!$uoeiskamgscgeccq->meta_box["\x63\154\x6f\163\145\x64"]) { goto oqousikwiiqagoyw; } $this->cecaguuoecmccuse($wyicesskmckwqeec, [$this, "\x79\x69\145\x6d\x75\163\147\x71\155\157\x79\x6d\163\x67\x65\x67"]); oqousikwiiqagoyw: $this->omameoyeausyugmw($qkweikswegyciaie, $this->mmsykuomogaqoaye(), $mgkceomocowocqyo); zayqqeqgcwkekwws: } public function omameoyeausyugmw(MetaBox $qkweikswegyciaie, $iaakskwmyqceoscy, $mgkceomocowocqyo) { $this->caokeucsksukesyo()->wmkogisswkckmeua()->sikqggwmmykuiymy([Constants::gouqcwikiiygyasc => $qkweikswegyciaie->mwikyscisascoeea(), Constants::qescuiwgsyuikume => $qkweikswegyciaie->iwqugwigmoiagwec(), Constants::cacismqswgaewkuu => $iaakskwmyqceoscy, Constants::osiogououyayqyck => $mgkceomocowocqyo, Constants::wwgusigoaksqmwsm => [$this, "\x61\x75\163\x79\155\155\147\x73\x6b\x73\157\x71\167\165\161\x6b"]]); } public function wqqckkmqakiquycs() { if (!($this->csaueuycewaiuaay() && $this->myomgmiksogoikuc())) { goto aueaceeyommgkicu; } $eueuqacmukymcyya = "{$this->kyqakacqeumicgag()}\55\141\x64\155\151\156"; $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->imsomwwswyoquoqk($eueuqacmukymcyya, $this->miocmcoykayoyyau()->get("\x6d\x75\154\164\151\157\160\164\163\x2e\152\163")); $ywoucyskcquysiwc = $this->equiyaoamqmaeckc(); $cciauwuwuqaywgce = reset($ywoucyskcquysiwc); $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->fowiaymccsmewemu($eueuqacmukymcyya, "\120\x4d\x50\x52\117\x70\164\124\x61\142\163", [Constants::ascagqcquwgmygkm => $this->kyqakacqeumicgag(), "\x70\x6f\x73\164\x74\x79\x70\145" => $this->kecacgyqmgeeqmme(), "\x64\x65\146\141\165\154\164\164\141\142" => $cciauwuwuqaywgce instanceof Tab ? $cciauwuwuqaywgce->mwikyscisascoeea() : '']); aueaceeyommgkicu: } public function uuqqkgyqekmgycgq() { if (!$this->myomgmiksogoikuc()) { goto mysueeoswqgccmui; } $icyaoosaykeskiuu = $this->iuygowkemiiwqmiw("\x6d\145\x74\x61\164\x61\142\56\143\163\163", [Constants::imywcsggckkcywgk => $this->kyqakacqeumicgag()]); $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\x73\x74\171\154\x65", [Constants::gouqcwikiiygyasc => "\x70\162\x2d\x74\141\x62\55\143\154\145\141\156\165\160\55\x63\x73\163"], true, $icyaoosaykeskiuu); mysueeoswqgccmui: } public function iaggsikquucsoiko() { $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->awwqwouuoioauoaw("\163\x63\x72\x69\160\x74", [], true, "\152\x51\x75\145\162\171\50\x64\157\x63\x75\x6d\145\x6e\164\51\x2e\162\145\x61\x64\x79\50\x66\x75\x6e\143\164\x69\157\156\50\x29\173\160\157\x73\x74\142\157\170\145\x73\x2e\x61\144\144\x5f\160\x6f\163\x74\x62\x6f\x78\x5f\x74\x6f\147\x67\x6c\145\163\x28\x22\160\157\x73\164\x62\x6f\x78\x2d\143\157\x6e\x74\141\151\156\145\162\42\x29\73\175\x29\x3b"); } public function ecyyqsgwwuukgssg() { if (!($this->csaueuycewaiuaay() && $this->ekwgmoqoeywwwccw())) { goto egmayaiikwsskgmy; } echo $this->uaasoaieuoymsgsi(); egmayaiikwsskgmy: } private function uaicqoagkoeacawy($uoeiskamgscgeccq) : bool { return isset($uoeiskamgscgeccq->meta_box["\163\x68\x6f\167\137\157\x6e"][Constants::ascagqcquwgmygkm]) && $uoeiskamgscgeccq->meta_box["\x73\x68\157\x77\x5f\157\x6e"][Constants::ascagqcquwgmygkm] === "\x6f\x70\164\x69\x6f\156\163\55\x70\141\147\x65" && in_array($this->kyqakacqeumicgag(), $uoeiskamgscgeccq->meta_box["\163\x68\x6f\167\137\157\x6e"][Constants::ciyoccqkiamemcmm], true); } public function goyemikogeuskgas($kqokimuosyuyyucg, $sogsqsawoyqmqsqu) { if (!($sogsqsawoyqmqsqu && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && !$this->ccauywsgwsesgmua())) { goto ucuoeymyqeokgsya; } add_settings_error("{$this->cisyiemkeykgkomc()}\x2d\156\x6f\x74\x69\x63\x65\x73", '', __("\x53\145\x74\164\x69\156\x67\x73\40\125\160\x64\x61\x74\145\144", PR__CMN__FOUNDATION), "\165\160\x64\141\164\145\144"); settings_errors("{$this->cisyiemkeykgkomc()}\55\x6e\157\x74\151\143\x65\163"); $this->once = true; ucuoeymyqeokgsya: } public function uaasoaieuoymsgsi() : ?string { return $this->cyeuiyggkcqmoecc($this->kusoyyuwiukiokww(), ["\x63\154\141\163\x73" => "\142\165\x74\164\x6f\x6e\x2d\160\x72\151\x6d\x61\x72\x79", Constants::NAME => "\163\x75\142\155\x69\x74\x2d\143\155\142", Constants::squoamkioomemiyi => "\x73\x75\142\x6d\x69\164"], true); } public function omeeeegkauuouaka() : string { return $this->cyeuiyggkcqmoecc($this->occsuagsiuuimcoy(), ["\143\x6c\x61\x73\163" => "\x62\x75\x74\x74\x6f\156\x2d\163\x65\143\157\x6e\144\x61\162\x79", Constants::NAME => "\162\x65\x73\145\164\55\143\155\x62", Constants::squoamkioomemiyi => "\x62\165\x74\164\x6f\x6e"]); } public function cyeuiyggkcqmoecc(?string $pkyyagewkiyckmwy = null, array $wwgucssaecqekuek = [], $omiygkiiauwgkegg = false) : string { $wwgucssaecqekuek = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($wwgucssaecqekuek, ["\143\154\x61\163\163" => "\x62\165\164\164\157\156", Constants::ciyoccqkiamemcmm => $pkyyagewkiyckmwy]); $nsmgceoqaqogqmuw = ''; if (!$pkyyagewkiyckmwy) { goto sguskaeaaqcagqgc; } if (!$omiygkiiauwgkegg) { goto yuuyikiacmmueosu; } $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\x73", "\160\157\163\151\x74\x69\x6f\156\55\x72\145\154\x61\164\151\166\145"); $pkyyagewkiyckmwy .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->kqmkicmuscsgqeoi([Constants::waguuiqqgsysuukq => "\61\x78"]); yuuyikiacmmueosu: $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq("\142\165\164\x74\x6f\x6e", $wwgucssaecqekuek, $pkyyagewkiyckmwy); sguskaeaaqcagqgc: return $nsmgceoqaqogqmuw; } public function ewskkwuwkkkaqwgk($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\157\x70\x74\55\150\151\x64\x64\145\x6e"; return $cmkqisoeyioisqaw; } public function yiemusgqmoymsgeg($cmkqisoeyioisqaw) { $cmkqisoeyioisqaw[] = "\143\x6c\157\x73\145\x64"; return $cmkqisoeyioisqaw; } public function ogkiiewscemaqkwg() { $this->cqscqicucmeamkyq("\x61\144\x64\137\x6d\x65\x74\x61\x5f\x62\x6f\x78\x65\x73\137{$this->mmsykuomogaqoaye()}", null)->cqscqicucmeamkyq("\x61\x64\144\x5f\155\x65\x74\x61\137\x62\157\170\145\163", $this->mmsykuomogaqoaye(), null); } public function ausymmgsksoqwuqk($post, $qkweikswegyciaie) { $scegeeyqweaksmki = cmb2_get_metabox($qkweikswegyciaie[Constants::gouqcwikiiygyasc], $this->cisyiemkeykgkomc()); if (!$scegeeyqweaksmki) { goto qkcsykuocwuyaice; } $icwicymcioeyeyek = $_POST; if ($this->negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki)) { goto syuaummumssgwwee; } if (!$this->ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki)) { goto agkmiayuawacakau; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete($this->cisyiemkeykgkomc()); agkmiayuawacakau: goto oocuemosmeeekgas; syuaummumssgwwee: $scegeeyqweaksmki->save_fields($this->cisyiemkeykgkomc(), $scegeeyqweaksmki->mb_object_type(), $icwicymcioeyeyek); oocuemosmeeekgas: $scegeeyqweaksmki->show_form(); qkcsykuocwuyaice: } private function ucoiweskiccaeimu($icwicymcioeyeyek, $scegeeyqweaksmki) : bool { $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki); $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $gaqymcswicmikcuu); $ooewkimkcskcwsso = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\x72\x65\163\x65\x74\x2d\143\x6d\142"); $kqokimuosyuyyucg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\157\142\x6a\145\143\164\137\151\x64"); return $ooewkimkcskcwsso && $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && $kqokimuosyuyyucg === $this->cisyiemkeykgkomc() && wp_verify_nonce($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq($gaqymcswicmikcuu), $gaqymcswicmikcuu); } private function negookkegaewksqk($icwicymcioeyeyek, $scegeeyqweaksmki) : bool { $gaqymcswicmikcuu = $this->qiswuqmeyaysqcis($scegeeyqweaksmki); $gwgqcsmomamyqsmy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, $gaqymcswicmikcuu); $kqokimuosyuyyucg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\157\142\152\x65\x63\x74\137\151\144"); return $this->oqmggeywwyoaocca($scegeeyqweaksmki, "\163\141\166\145\137\146\x69\145\x6c\x64\163") && $this->imyagkswqcsocsoi($icwicymcioeyeyek) && $kqokimuosyuyyucg && $this->cisyiemkeykgkomc() === $kqokimuosyuyyucg && $gwgqcsmomamyqsmy && wp_verify_nonce($gwgqcsmomamyqsmy, $gaqymcswicmikcuu); } public function imyagkswqcsocsoi($icwicymcioeyeyek = []) : bool { if ($icwicymcioeyeyek) { goto uoeasoimegouymka; } $icwicymcioeyeyek = $_POST; uoeasoimegouymka: return (bool) $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\163\x75\x62\155\151\x74\55\143\x6d\x62", false); } public function oaqemuumyowmigwo(array $yygmoeguaqyumuui = []) : array { $saouceauqqiwcwas = []; if (!($yygmoeguaqyumuui && is_array($yygmoeguaqyumuui))) { goto osuscoaaomwcqkew; } foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw => $qkweikswegyciaie) { if (is_object($qkweikswegyciaie)) { goto aoquoewagkseayug; } $saouceauqqiwcwas[$uusmaiomayssaecw] = CMB2_Boxes::get($qkweikswegyciaie); aoquoewagkseayug: qiaimmucomukkeka: } egsycocugqyyswsi: osuscoaaomwcqkew: return empty($saouceauqqiwcwas) ? CMB2_Boxes::get_all() : $saouceauqqiwcwas; } public function csaueuycewaiuaay() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ggcoyemwouwsqouy($this->cisyiemkeykgkomc()); } public function __toString() { return self::uqggkiomyiceyooa(); } }
