<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6296530e85361             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Relation\Manager\PostManager; use Pmpr\Module\AdvancedCMS\Relation\Manager\TaxonomyManager; use WP_Post; use WP_Term; class Ajax extends Common { const smgiwwgsiyweasmc = "\x61\144\x64\x5f\156\145\167\137\155\x65\164\141\137\x74\157\137\x72\x65\154\141\164\151\x6f\x6e"; const amccaiqeuogmuceu = "\163\x65\x61\162\x63\150\x5f\146\157\x72\x5f\162\145\154\x61\164\151\x6f\156"; const iyasaywiokaugmoo = "\x75\160\144\141\164\145\x5f\155\x65\x74\141\137\x69\156\137\162\x65\x6c\x61\x74\151\x6f\156"; const mqguesggycecgcqe = "\162\145\155\x6f\x76\145\137\x6d\x65\x74\141\137\146\162\x6f\x6d\137\x72\145\154\x61\164\x69\157\156"; const myikkigscysoykgy = ["\x61\144\144" => self::smgiwwgsiyweasmc, "\x73\x65\141\162\143\150" => self::amccaiqeuogmuceu, "\x75\x70\x64\x61\164\145" => self::iyasaywiokaugmoo, "\x72\x65\155\x6f\166\x65" => self::mqguesggycecgcqe]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::smgiwwgsiyweasmc, [$this, "\x61\x64\x64"])->koaegcswmcqsiykq(self::amccaiqeuogmuceu, [$this, "\161\167\143\x6d\x75\x65\141\165\163\161\147\151\167\151\147\x79"])->koaegcswmcqsiykq(self::iyasaywiokaugmoo, [$this, "\165\160\144\141\164\x65"])->koaegcswmcqsiykq(self::mqguesggycecgcqe, [$this, "\162\x65\x6d\x6f\x76\x65"]); } public function add() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::smgiwwgsiyweasmc)) { goto oomguqikqokqwgku; } $oikmcqwkmsyiicqs = $icwicymcioeyeyek["\x65\x6e\x74\151\x74\x79"]; $icwicymcioeyeyek = $this->ksicesygeskkewug("\x70\145\x72\163\151\163\164", $oikmcqwkmsyiicqs, $icwicymcioeyeyek["\x6f\167\156\145\162"], $icwicymcioeyeyek["\155\145\x74\141\113\145\x79"], $icwicymcioeyeyek["\x76\x61\154\x75\x65"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, $this->sgmeusiqkacigqqq($oikmcqwkmsyiicqs, $icwicymcioeyeyek), __("\101\154\162\145\141\x64\x79\x20\x61\x64\144\145\x64", PR__MDL__ADVANCED_CMS)); oomguqikqokqwgku: } public function qwcmueausqgiwigy() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!ManipulateArray::uuegkqwagymmusiy($icwicymcioeyeyek, ["\141\143\x74\151\157\x6e", "\x76\141\154\x75\x65", "\x6f\167\x6e\145\162", "\164\x61\162\x67\145\164", "\x65\156\x74\x69\x74\x79"]) && $icwicymcioeyeyek["\141\x63\x74\x69\157\156"] == self::amccaiqeuogmuceu) { goto guykyqecgswcsmws; } $this->uaggqsoeugksgooc(true, ManipulateHTML::oockkqiqsssakuug(__("\x54\162\171\40\x6d\x6f\x72\145\40\x77\x6f\x72\x64", PR__MDL__ADVANCED_CMS), "\x73\x75\x63\143\x65\x73\x73")); goto kkumywowcoycymeo; guykyqecgswcsmws: $eqgoocgaqwqcimie = $icwicymcioeyeyek["\166\141\x6c\165\145"]; $miowmmgaiagcuyoo = $icwicymcioeyeyek["\157\167\156\x65\x72"]; $ccamueccusigaaio = $icwicymcioeyeyek["\164\141\x72\147\x65\x74"]; $oikmcqwkmsyiicqs = $icwicymcioeyeyek["\145\x6e\164\151\164\171"]; $yemgmmgogcwccuky = ManipulateArray::get($icwicymcioeyeyek, self::ccyeycyyykwuymsy, []); $yemgmmgogcwccuky[] = $miowmmgaiagcuyoo; if ($oikmcqwkmsyiicqs == self::mswoacegomcucaik) { goto samwkqgwouggsguc; } $oammesyieqmwuwyi = ManipulateTerm::igkcwemyysqkwuuy($eqgoocgaqwqcimie, $ccamueccusigaaio, $yemgmmgogcwccuky); goto wyuemgggaqogsmsq; samwkqgwouggsguc: $oammesyieqmwuwyi = ManipulatePost::igkcwemyysqkwuuy($eqgoocgaqwqcimie, $ccamueccusigaaio, [self::kcaoouwiygwwmiok => $yemgmmgogcwccuky, "\x70\x6f\x73\164\x5f\163\164\x61\164\165\163" => ["\x70\x75\142\x6c\x69\x73\x68"]]); wyuemgggaqogsmsq: $this->uaggqsoeugksgooc(true, $this->wgciqaauaiemimqq($oammesyieqmwuwyi)); kkumywowcoycymeo: } public function update() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::iyasaywiokaugmoo)) { goto miweggwqeiaeweia; } $icwicymcioeyeyek = $this->ksicesygeskkewug("\x75\160\144\141\x74\x65", $icwicymcioeyeyek["\145\x6e\164\151\x74\171"], $icwicymcioeyeyek["\157\x77\156\145\162"], $icwicymcioeyeyek["\155\145\164\x61\x4b\145\x79"], $icwicymcioeyeyek["\166\x61\154\165\x65"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, ManipulateHTML::oockkqiqsssakuug(__("\x53\165\143\x63\145\x73\x73\146\165\154\154\x79\x20\165\160\x64\x61\x74\x65\56", PR__MDL__ADVANCED_CMS), "\163\165\143\x63\145\x73\163"), ManipulateHTML::oockkqiqsssakuug(__("\123\157\155\145\x74\x68\151\x6e\x67\x20\x69\x73\x20\x77\162\157\x6e\147\x20\151\156\40\165\x70\x64\x61\164\145\40\x70\x72\x6f\x63\x65\x73\163\54\x20\x70\154\145\141\x73\145\40\x74\162\x79\x20\154\x61\x74\x65\162\x2e", PR__MDL__ADVANCED_CMS), "\x77\x61\x72\x6e\151\156\x67")); miweggwqeiaeweia: } public function remove() { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); if (!$this->woaqsosmiukqsuoy($icwicymcioeyeyek, self::mqguesggycecgcqe)) { goto kqqiegkuqagcqsya; } $icwicymcioeyeyek = $this->ksicesygeskkewug("\x72\x65\x6d\157\166\x65", $icwicymcioeyeyek["\x65\156\x74\x69\164\x79"], $icwicymcioeyeyek["\x6f\x77\x6e\x65\162"], $icwicymcioeyeyek["\x6d\145\164\141\113\x65\x79"], $icwicymcioeyeyek["\x76\x61\154\x75\145"]); $this->kycqsyyakyocmeso($icwicymcioeyeyek, ManipulateHTML::oockkqiqsssakuug(__("\x53\165\143\x63\145\x73\163\146\x75\154\x6c\x79\x20\x64\x65\x6c\x65\x74\145\144\x2e", PR__MDL__ADVANCED_CMS), "\x73\x75\x63\x63\x65\x73\163"), ManipulateHTML::oockkqiqsssakuug(__("\123\x6f\155\145\x74\150\151\x6e\147\x20\x69\x73\40\x77\x72\x6f\156\x67\x20\151\x6e\40\x64\x65\x6c\145\164\x65\40\160\162\x6f\143\145\163\163\x2c\40\x70\154\145\x61\x73\145\40\164\162\x79\40\154\141\x74\x65\x72\x2e", PR__MDL__ADVANCED_CMS), "\x77\x61\162\156\151\156\147")); kqqiegkuqagcqsya: } public function seyyiqmgwymyumoq() { return ManipulateServer::ayueggmoqeeukqmq(); } public function woaqsosmiukqsuoy($icwicymcioeyeyek, $aiamqeawckcsuaou) : bool { return isset($icwicymcioeyeyek["\x61\143\x74\x69\157\156"], $icwicymcioeyeyek["\x6f\x77\156\145\162"], $icwicymcioeyeyek["\155\x65\164\x61\113\145\x79"], $icwicymcioeyeyek["\166\141\x6c\x75\x65"], $icwicymcioeyeyek["\x65\156\164\151\164\x79"]) && $icwicymcioeyeyek["\x61\143\164\151\157\x6e"] == $aiamqeawckcsuaou; } public function wgciqaauaiemimqq($oammesyieqmwuwyi) : array { $aqykuigiuwmmcieu = []; if (!$oammesyieqmwuwyi) { goto cwwmimggaaecmucw; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($igqsaukqcqscimok instanceof WP_Post) { goto ikqqskkqqwmwssoo; } if (!$igqsaukqcqscimok instanceof WP_Term) { goto iwekmyyccgiyuecc; } $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($oammesyieqmwuwyi); $aqykuigiuwmmcieu[$igqsaukqcqscimok->term_id] = ["\x6c\141\x62\145\x6c" => ManipulateTerm::qcgakseyaikigqco($aokagokqyuysuksm), "\166\x61\154\x75\x65" => $aokagokqyuysuksm]; iwekmyyccgiyuecc: goto aomysykcgikegiau; ikqqskkqqwmwssoo: $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); $aqykuigiuwmmcieu[$aokagokqyuysuksm] = ["\x6c\141\142\x65\x6c" => ManipulatePost::qcgakseyaikigqco($igqsaukqcqscimok), "\166\x61\154\165\x65" => $aokagokqyuysuksm]; aomysykcgikegiau: ogsaaqsaogcqiouy: } ousiuuwgwkiyikyq: cwwmimggaaecmucw: return $aqykuigiuwmmcieu; } public function sgmeusiqkacigqqq($oikmcqwkmsyiicqs, $icwicymcioeyeyek) : ?string { $aokagokqyuysuksm = $icwicymcioeyeyek["\x69\x64"]; if ($oikmcqwkmsyiicqs == "\x70\157\163\164") { goto awoaooyoeoyeeqee; } $igqsaukqcqscimok = ManipulateTerm::get($aokagokqyuysuksm); goto ogqmesokykywseys; awoaooyoeoyeeqee: $igqsaukqcqscimok = ManipulatePost::get($aokagokqyuysuksm); ogqmesokykywseys: return $this->iuygowkemiiwqmiw("\145\156\164\x69\164\171\57\155\145\164\x61\137\142\x6f\170\x5f\151\164\145\x6d", ["\x64\141\164\x61" => $igqsaukqcqscimok, "\x70\x72\x69\x6f\162\x69\x74\171" => $icwicymcioeyeyek["\160\x72\x69\x6f\x72\151\x74\171"], "\x6d\157\x76\x65\137\x68\141\x6e\x64\154\145" => $this->cmeuowkiswiuocqa(), "\162\145\x6d\157\x76\x65\x5f\155\157\144\x61\154" => $this->amsaeiymyieqksqy()]); } public function kycqsyyakyocmeso($icwicymcioeyeyek, $iwgcmyqkkmukqoyg, $ykwokmkkyoykccgk) { if ($icwicymcioeyeyek) { goto ykomgumacooyomsk; } $this->uaggqsoeugksgooc(false, $ykwokmkkyoykccgk); goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $this->uaggqsoeugksgooc(true, $iwgcmyqkkmukqoyg); mqkmcysgoiaouiwm: } private function ksicesygeskkewug($aiamqeawckcsuaou, $oikmcqwkmsyiicqs, $miowmmgaiagcuyoo, $gwiwsycaaqgwmewg, $eqgoocgaqwqcimie) { $icwicymcioeyeyek = null; try { $egkyssmuqcwaciya = PostManager::class; if (!($oikmcqwkmsyiicqs == self::gmmygyiecgmggaam)) { goto kosaqwikueyksqmw; } $egkyssmuqcwaciya = TaxonomyManager::class; kosaqwikueyksqmw: $icwicymcioeyeyek = call_user_func_array([$egkyssmuqcwaciya, $aiamqeawckcsuaou], [$miowmmgaiagcuyoo, $gwiwsycaaqgwmewg, $eqgoocgaqwqcimie]); } catch (Exception $wgaoewqkwgomoaai) { $this->uaggqsoeugksgooc(false, ManipulateHTML::oockkqiqsssakuug($wgaoewqkwgomoaai->sagusgigmkeysock(), "\x65\x72\162\x6f\162")); } return $icwicymcioeyeyek; } }
