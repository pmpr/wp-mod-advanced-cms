<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c04d5b17017             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Rating\Model\Feedback; use Pmpr\Package\AdvancedCMS\Rating\Model\Rate; class Ajax extends Common { const RATING_GET_HTML = "\x72\x61\x74\x69\156\147\x5f\x67\145\164\137\150\164\155\x6c"; const RARING_FEEDBACK_ACTION = "\x72\141\x74\151\156\x67\137\146\145\x65\x64\142\141\143\153\x5f\141\143\x74\151\157\156"; const RATING_SUBMISSION_ACTION = "\162\141\164\151\x6e\147\137\163\x75\142\x6d\x69\163\163\151\x6f\x6e\x5f\141\x63\164\151\x6f\156"; const myikkigscysoykgy = ["\147\x65\x74\x5f\x68\x74\155\154" => self::RATING_GET_HTML, "\x73\x75\142\155\151\164\x5f\162\x61\164\145" => self::RATING_SUBMISSION_ACTION, "\x73\x75\142\155\x69\x74\137\x66\145\145\x64\142\141\143\x6b" => self::RARING_FEEDBACK_ACTION]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::RATING_GET_HTML, [$this, "\163\161\x6b\x63\165\167\x65\x77\x77\x65\x63\157\163\151\163\x65"])->iqkqummseggmikgo(self::RATING_SUBMISSION_ACTION, [$this, "\157\143\x6d\x69\143\x73\157\x75\157\x63\153\157\x79\141\x77\x77"])->iqkqummseggmikgo(self::RARING_FEEDBACK_ACTION, [$this, "\147\141\171\157\x67\x6d\163\167\x71\x67\157\x69\x73\x63\x73\x61"]); parent::wigskegsqequoeks(); } public function sqkcuwewwecosise() { $post = ManipulateServer::ayueggmoqeeukqmq("\160\x6f\163\x74", 0); if (!$post) { goto sgiwoiscywusgmmm; } $nsmgceoqaqogqmuw = Theme::symcgieuakksimmu()->sqkcuwewwecosise($post, true); $this->uaggqsoeugksgooc(true, $nsmgceoqaqogqmuw); sgiwoiscywusgmmm: } public function gayogmswqgoiscsa() { $this->aeaqgysgaeowagug(self::RARING_FEEDBACK_ACTION); } public function ocmicsouockoyaww() { $this->aeaqgysgaeowagug(self::RATING_SUBMISSION_ACTION); } public function aeaqgysgaeowagug($ccamueccusigaaio = self::RATING_SUBMISSION_ACTION) { $icwicymcioeyeyek = $this->seyyiqmgwymyumoq(); $occymigcemkqucuw = false; if ($this->miueaekaaugaccmg($keccaugmemegoimu)) { goto sckioayasmkcoeoo; } $keccaugmemegoimu = __("\122\145\x71\165\x69\162\145\144\x20\144\x61\x74\141\40\x6e\x6f\164\x20\160\x72\157\166\x69\x64\x65\x64\x20\157\162\x20\x6e\x6f\164\40\166\141\x6c\151\x64\x2e", PR__PKG__ADVANCED_CMS); goto yssqmyoaokkksukc; sckioayasmkcoeoo: $kucumcusyyckayas = ManipulateUser::meymqemgekqiawec(); $post = ManipulateArray::get($icwicymcioeyeyek, "\160\x6f\163\x74"); $miowmmgaiagcuyoo = ManipulateUser::kuswmimkgmyuymiu(ManipulateArray::get($icwicymcioeyeyek, "\x6f\x77\156\145\162")); $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, "\166\x61\154\165\x65"); try { $icwicymcioeyeyek = ["\x69\160" => esc_sql($kucumcusyyckayas), "\160\x6f\163\x74" => esc_sql($post), "\x6f\167\x6e\x65\162" => esc_sql($miowmmgaiagcuyoo)]; $occymigcemkqucuw = true; switch ($ccamueccusigaaio) { case self::RARING_FEEDBACK_ACTION: $icwicymcioeyeyek["\x74\x65\170\164"] = $eqgoocgaqwqcimie; $sogksuscggsicmac = Feedback::symcgieuakksimmu()->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac["\163\x75\x63\143\x65\x73\163"]) { goto mmgmqogugasaqkgg; } $keccaugmemegoimu = __("\x53\x6f\x6d\x65\x74\x68\151\x6e\x67\x20\x77\x72\x6f\156\x67\40\x6f\156\x20\x73\141\x76\x65\40\171\157\x75\162\x20\155\x65\163\163\141\x67\145\56", PR__PKG__ADVANCED_CMS); goto wmumywgyyeagqoeq; mmgmqogugasaqkgg: $occymigcemkqucuw = true; $keccaugmemegoimu = $this->weysguygiseoukqw(Setting::FEEDBACK_MESSAGE); wmumywgyyeagqoeq: goto skuqigsokaguscas; case self::RATING_SUBMISSION_ACTION: default: if (is_numeric($eqgoocgaqwqcimie) && ($eqgoocgaqwqcimie > 0 && $eqgoocgaqwqcimie < 6) && is_numeric($post) && is_numeric($miowmmgaiagcuyoo)) { goto yuoeumyiuqkuouey; } $keccaugmemegoimu = __("\122\145\161\165\145\163\x74\40\151\163\x20\156\x6f\x74\40\x76\141\x6c\x69\144\x2c\40\160\x6c\145\141\x73\145\x20\164\162\x79\40\x61\x67\141\151\x6e\56", PR__PKG__ADVANCED_CMS); goto eyiwqgqcsqakwqss; yuoeumyiuqkuouey: $icwicymcioeyeyek["\166\141\x6c\165\145"] = $eqgoocgaqwqcimie; $mcieuoqmagekmouk = Rate::symcgieuakksimmu(); $ceiwsaacewygcsqg = $mcieuoqmagekmouk->kumuygiiqswoyasy(); $wiwomgcsgmawegaw = $mcieuoqmagekmouk->jwskisguugiiqwsq($post, $miowmmgaiagcuyoo, $kucumcusyyckayas); if (!$wiwomgcsgmawegaw) { goto smcguieygyqcaqgs; } $icwicymcioeyeyek[$ceiwsaacewygcsqg] = $wiwomgcsgmawegaw->{$ceiwsaacewygcsqg}; smcguieygyqcaqgs: $sogksuscggsicmac = Rate::symcgieuakksimmu()->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac["\163\165\x63\x63\x65\x73\x73"]) { goto mgcuiguaomoqwwwm; } $keccaugmemegoimu = __("\x53\x6f\x6d\145\x74\x68\151\x6e\x67\x20\x77\x72\157\x6e\x67\40\157\x6e\40\x73\x61\166\145\40\171\x6f\x75\x72\x20\162\141\164\x65\56", PR__PKG__ADVANCED_CMS); goto eoyiumycaigawmmc; mgcuiguaomoqwwwm: $occymigcemkqucuw = true; $keccaugmemegoimu = $this->weysguygiseoukqw(Setting::THANKS_MESSAGE); eoyiumycaigawmmc: eyiwqgqcsqakwqss: goto skuqigsokaguscas; } quyogmwugsyoaaiu: skuqigsokaguscas: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = __("\x43\141\x6e\40\x6e\157\x74\40\x73\141\166\x65\x20\x79\x6f\x75\x72\x20\x70\157\x73\x74\145\144\x20\144\141\x74\x61\56\40\164\162\171\x20\x6c\x61\x74\x74\x65\162\40\160\154\x65\x61\163\145\x2e", PR__PKG__ADVANCED_CMS); } yssqmyoaokkksukc: if (!$keccaugmemegoimu) { goto wgiygcmqaokywuqa; } if ($occymigcemkqucuw) { goto ooqksueucyagyuoe; } $keccaugmemegoimu = ManipulateBootstrap::oockkqiqsssakuug($keccaugmemegoimu, self::ecioqysekgaasegg); goto osmmoyqkqoucsgow; ooqksueucyagyuoe: $keccaugmemegoimu = ManipulateBootstrap::oockkqiqsssakuug($keccaugmemegoimu, self::ckcawaoawwioqecq); osmmoyqkqoucsgow: wgiygcmqaokywuqa: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function seyyiqmgwymyumoq() { $post = ManipulateServer::ayueggmoqeeukqmq(); return ManipulateFormat::omaawkkwwyesqwcc($post, ["\x70\157\163\164" => '', "\x6f\x77\x6e\x65\162" => '', "\x76\141\154\165\x65" => '', "\x61\143\164\151\x6f\156" => '']); } }
