<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec394cea5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Modal; use Pmpr\Module\AdvancedCMS\Form\Element; use Pmpr\Module\AdvancedCMS\Form\Tab; use Pmpr\Module\AdvancedCMS\Form\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Segment extends Element { protected array $tabs = []; protected array $fields = []; protected array $buttons = []; protected ?string $icon = null; protected ?string $prefix = null; protected ?string $parent = null; public function __construct() { if ($this->aakmagwggmkoiiyu()) { goto qcessicwuikwqsis; } $this->name = strtolower($this->ugwmakayykcmcmqa()); qcessicwuikwqsis: parent::__construct(); } public function ogqgmqymcwsqikme() : ?string { return $this->prefix; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : void { $this->icon = $wkaqekwwgqsqwcoi; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto coywmiyqgsweuiic; } $this->mkksewyosgeumwsa($aiowsaccomcoikus); coywmiyqgsweuiic: ieumumsgyguceusy: } yssscwioiyygssec: return $this; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(?Tab $cciauwuwuqaywgce = null) : self { if (!$cciauwuwuqaywgce) { goto siqagquguiemuoku; } $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; siqagquguiemuoku: return $this; } public function imswwiyicyksouus() : array { return $this->buttons; } public function ycewecmqyuksugoi() : bool { return !empty($this->imswwiyicyksouus()); } public function igmamuiesywmkgeu($meqocwsecsywiiqs, $wwgucssaecqekuek) : self { $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\x61\163\x73", "\x62\x75\x74\164\157\x6e\40\142\x75\164\x74\x6f\x6e\x2d\x6c\x61\x72\x67\145"); $this->buttons[] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::ysskgssgwuwmqwym => $wwgucssaecqekuek]; return $this; } public function ugmceccgwaaaigiy() : array { $ywoucyskcquysiwc = $this->equiyaoamqmaeckc(); $ikgwqyuyckaewsow = $this->fields; if (!$ywoucyskcquysiwc) { goto umgaesggesswoaqe; } foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto wwkgkaecgiwggcck; } foreach ($cciauwuwuqaywgce->ugmceccgwaaaigiy() as $uusmaiomayssaecw => $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto kciouyuaqkyqomam; } $aiowsaccomcoikus->ggiaseqygioygumq("{$this->cisyiemkeykgkomc()}\137{$aiowsaccomcoikus->mwikyscisascoeea()}")->yoimakcqmoqokkcu()->usoqcyyugsuyiewc("\x70\x74\x2d\x33"); $ikgwqyuyckaewsow[$uusmaiomayssaecw] = $aiowsaccomcoikus; kciouyuaqkyqomam: gygawoqywkukmqee: } sycygoiaiqqageym: wwkgkaecgiwggcck: oouoqimaaqcmccay: } ycakugokkqkuqyiu: umgaesggesswoaqe: return $ikgwqyuyckaewsow; } public function ygqycmmkoiuocoia() : ?string { return $this->parent; } public function cisyiemkeykgkomc() : ?string { $uusmaiomayssaecw = parent::cisyiemkeykgkomc(); if (!($yuwymayicwwqiske = $this->ogqgmqymcwsqikme())) { goto qsygcycwieukkgwc; } $uusmaiomayssaecw = "{$yuwymayicwwqiske}\137{$uusmaiomayssaecw}"; qsygcycwieukkgwc: return $uusmaiomayssaecw; } public function render() { $this->ecwgiiuacoaokqkw(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!$ikgwqyuyckaewsow) { goto quwcqmyokicssyew; } $uiewakwqscemywuo = ["\150\x6f\x6f\x6b\165\x70" => false, Constants::gouqcwikiiygyasc => $this->cisyiemkeykgkomc(), Constants::qaacaqioeyiuakeu => true]; if (!$this->equiyaoamqmaeckc()) { goto kiwqkcaekqqyuegq; } $uiewakwqscemywuo["\x74\141\142\x73"] = $this->equiyaoamqmaeckc(); kiwqkcaekqqyuegq: self::iuaucuookgoqiiio($ikgwqyuyckaewsow, $uiewakwqscemywuo); quwcqmyokicssyew: } }
