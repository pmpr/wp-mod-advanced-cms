<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec394cea5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Shortcode; use Pmpr\Module\AdvancedCMS\Form\Modal\Segment as BaseClass; use Pmpr\Module\AdvancedCMS\Form\Field\BSSelect; use Pmpr\Module\AdvancedCMS\Form\Field\Field; use Pmpr\Module\AdvancedCMS\Form\Field\Group; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Segment extends BaseClass { protected $target = Constants::ALL; protected bool $enableInAmp = true; public function squsacgomqgkakaw() { return $this->target; } public function kqeoeeayumeoyaoa() : ?bool { return $this->enableInAmp; } public function mwikyscisascoeea() : ?string { $aokagokqyuysuksm = parent::mwikyscisascoeea(); if ($aokagokqyuysuksm) { goto aquqkiggamaoegoo; } $aokagokqyuysuksm = $this->aakmagwggmkoiiyu(); aquqkiggamaoegoo: return $aokagokqyuysuksm; } public function gosmqcmmomkqwmis() { parent::gosmqcmmomkqwmis(); if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { goto cquecqekuucwoumw; } if (!($post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get())) { goto agemwookwseyycqo; } $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post); if (!(has_shortcode($ewgwqamkygiqaawc, $this->cisyiemkeykgkomc()) || has_shortcode($ewgwqamkygiqaawc, "\x70\x6d\x70\162\137{$this->aakmagwggmkoiiyu()}"))) { goto mykiyqcqiegkiqys; } $this->enqueue(); mykiyqcqiegkiqys: agemwookwseyycqo: cquecqekuucwoumw: } public function init() { parent::init(); $this->gkoiuyagqcoecigk(); } public function enqueue() { } public function gkoiuyagqcoecigk() { add_shortcode($this->cisyiemkeykgkomc(), [$this, "\157\163\145\141\143\161\151\x6d\x65\x63\167\147\x67\141\x6b\167"]); add_shortcode("\160\155\x70\x72\x5f{$this->aakmagwggmkoiiyu()}", [$this, "\157\163\x65\141\143\161\151\x6d\145\143\x77\x67\x67\x61\x6b\x77"]); } public function isqsicqgwyyasyke() : array { return $this->sscegwueamckwmcy("\x73\x68\x6f\162\164\x63\157\x64\145\x5f\143\157\x6c\x75\155\156\x73", []); } public function oseacqimecwggakw($wwgucssaecqekuek) : string { $nsmgceoqaqogqmuw = ''; if (!($this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu() && !$this->kqeoeeayumeoyaoa())) { goto koiscokkkaimiecq; } return $nsmgceoqaqogqmuw; koiscokkkaimiecq: if (is_array($wwgucssaecqekuek)) { goto owuuuiekkaeoeacq; } $wwgucssaecqekuek = []; goto saauykgakaeiyoua; owuuuiekkaeoeacq: $ggauoeuaesiymgee = $this->gwquaaaaikcwcges(); $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek); saauykgakaeiyoua: $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, Constants::sqomuccqsqwsckyw, $this->aakmagwggmkoiiyu()); if ($iqyiekoceqqsqoow) { goto qwemkcoaseywkuuc; } wp_die(__("\x63\x61\156\156\157\x74\x20\146\157\165\x6e\x64\40\x74\x65\155\160\x6c\x61\x74\145\40\146\157\162\x20\x63\162\x65\x61\164\145\x20\155\141\162\153\x75\160\40\x69\x6e\x20\x73\150\157\x72\x74\x63\x6f\x64\x65\x20\x6f\146\x3a\x20" . $this->uqggkiomyiceyooa(), PR__CMN__FOUNDATION)); goto mqimkwickkgqqeoi; qwemkcoaseywkuuc: $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek); $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\x5f\x73\150\157\x72\x74\x63\157\x64\145\x5f\141\164\164\162\163"), $wwgucssaecqekuek, $this); $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek)); $qookweymeqawmcwo["\163\x68\157\x72\x74\143\x6f\144\x65\137\156\x61\x6d\145"] = $this->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\144\x65\146\141\x75\x6c\164" => "\151\156\144\x65\x78\x2e\x68\x74\155\x6c\56\x74\167\151\x67"]); mqimkwickkgqqeoi: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x68\157\162\x74\x63\157\144\145\x5f\x68\x74\x6d\154"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this); } public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array { $this->ecwgiiuacoaokqkw(); if ($ikgwqyuyckaewsow) { goto kwyimqumkuuyaiku; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); kwyimqumkuuyaiku: foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ceiuqsiqgiuiekem; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, $aokagokqyuysuksm); $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus); ceiuqsiqgiuiekem: mceucsaeouuwyumm: } gkqiqaqecmoogmaa: return $wwgucssaecqekuek; } public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null) { if (!$aiowsaccomcoikus instanceof Field) { goto eouwacqiommmeaqc; } if ($aiowsaccomcoikus instanceof Group) { goto isewysikysqewkis; } if ($aiowsaccomcoikus instanceof BSSelect) { goto wiwoiyoakywqyaiy; } if (is_string($eqgoocgaqwqcimie)) { goto igmmqwyawcuuckkq; } goto ugykmcouiwiscoqu; isewysikysqewkis: $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus); goto ugykmcouiwiscoqu; wiwoiyoakywqyaiy: if (!$aiowsaccomcoikus->zosqeeykkcqmmkqs()) { goto gsymkkskwsgggoic; } $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie); gsymkkskwsgggoic: goto ugykmcouiwiscoqu; igmmqwyawcuuckkq: $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie); ugykmcouiwiscoqu: eouwacqiommmeaqc: return $eqgoocgaqwqcimie; } public function ocwoiywammqiuggq() : string { return "\x70\162\x2d\163\x68\x6f\162\x74\x63\157\x64\145"; } public function ccmewsuaqiaegqso($eqgoocgaqwqcimie) { preg_match("\x2f\x7b\x28\x2e\52\x3f\51\175\57", $eqgoocgaqwqcimie, $uammqaqiwgcmeska); if (!isset($uammqaqiwgcmeska[1])) { goto sqwuqegeiisoiiuq; } $shortcode = do_shortcode("\133" . $uammqaqiwgcmeska[1] . "\x5d"); $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $shortcode, $eqgoocgaqwqcimie); sqwuqegeiisoiiuq: return $eqgoocgaqwqcimie; } public function squkoowcgeokaywq($somsiuiquigiqsmk) : array { $oammesyieqmwuwyi = []; foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) { $oammesyieqmwuwyi[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\151\155\x67", ["\x73\162\143" => $mcqieaigyeeyaksm]); ykqsuiyyosyeyscc: } uscokkmquayiukag: return $oammesyieqmwuwyi; } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { return $wwgucssaecqekuek; } public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array { $aqykuigiuwmmcieu = []; preg_match_all("\x2f\x5c\50\50\x2e\52\77\51\134\51\x2f", $icwicymcioeyeyek, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = explode("\54", $uammqaqiwgcmeska); foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) { preg_match("\57\x28\x5b\136\75\135\x2b\x29\x2f", $igqsaukqcqscimok, $uusmaiomayssaecw); preg_match("\x2f\47\x28\133\x5e\47\x5d\52\x29\47\57", $igqsaukqcqscimok, $eqgoocgaqwqcimie); $uusmaiomayssaecw = $uusmaiomayssaecw[1]; if (!isset($eqgoocgaqwqcimie[1])) { goto eweaaismksecwagy; } $uskwgmsuqowaosow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw); $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow); eweaaismksecwagy: mcqucouuiuoagqwc: } syusgosewwkoagoq: egesuwkqkmaigaoe: } ugogoekeckgcmuaw: return $aqykuigiuwmmcieu; } public function acgiiomwuewkmgei($eqgoocgaqwqcimie) { if (!is_string($eqgoocgaqwqcimie)) { goto owgsameoayaogsma; } $aqykuigiuwmmcieu = explode("\x2c", $eqgoocgaqwqcimie); if (count($aqykuigiuwmmcieu) <= 1) { goto icumkkykaoqycqqu; } $eqgoocgaqwqcimie = $aqykuigiuwmmcieu; goto oeamoqweiueaueay; icumkkykaoqycqqu: $eqgoocgaqwqcimie = explode("\174", $eqgoocgaqwqcimie); oeamoqweiueaueay: owgsameoayaogsma: return $eqgoocgaqwqcimie; } public abstract function gwquaaaaikcwcges() : array; }
