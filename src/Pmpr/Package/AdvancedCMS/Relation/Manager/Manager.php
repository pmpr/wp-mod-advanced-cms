<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236561abfe21             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Manager; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Manager implements ConstantInterface { const qocqgyaswyskyuwy = "\151\x73\137\x6f\162\151\x67\151\156"; public static function persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { return self::update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); } public static function update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if (is_array($icwicymcioeyeyek) && is_array($soqqyqgmmuigoqiy)) { goto agkmiayuawacakau; } if (!(is_array($soqqyqgmmuigoqiy) && array_search($icwicymcioeyeyek, array_column($soqqyqgmmuigoqiy, self::gouqcwikiiygyasc)) !== false)) { goto ucuoeymyqeokgsya; } return $soqqyqgmmuigoqiy[$icwicymcioeyeyek]; ucuoeymyqeokgsya: if (!is_array($soqqyqgmmuigoqiy)) { goto yuuyikiacmmueosu; } $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys, $soqqyqgmmuigoqiy); return self::update($icwicymcioeyeyek, $gwiwsycaaqgwmewg, static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy), 0); goto sguskaeaaqcagqgc; yuuyikiacmmueosu: return self::_persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); sguskaeaaqcagqgc: goto syuaummumssgwwee; agkmiayuawacakau: foreach ($icwicymcioeyeyek as $sqqewmoeaekuyyas => $igqsaukqcqscimok) { if (!(isset($soqqyqgmmuigoqiy[$igqsaukqcqscimok]) && isset($soqqyqgmmuigoqiy[$igqsaukqcqscimok][self::iuqumwggccmcuyem]))) { goto egmayaiikwsskgmy; } $soqqyqgmmuigoqiy[$igqsaukqcqscimok][self::iuqumwggccmcuyem] = $sqqewmoeaekuyyas; egmayaiikwsskgmy: mysueeoswqgccmui: } aueaceeyommgkicu: return static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); syuaummumssgwwee: } public static function remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { return self::_remove(self::_remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek), $gwiwsycaaqgwmewg, $mcaisukqqyosuasi); } protected static function _persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys); static::_addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); return self::persist($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, 0); } protected static function _remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if ($soqqyqgmmuigoqiy && array_key_exists($icwicymcioeyeyek, $soqqyqgmmuigoqiy)) { goto oocuemosmeeekgas; } $icwicymcioeyeyek = null; goto qkcsykuocwuyaice; oocuemosmeeekgas: unset($soqqyqgmmuigoqiy[$icwicymcioeyeyek]); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); qkcsykuocwuyaice: return $icwicymcioeyeyek; } protected static function _generateData($icwicymcioeyeyek, $ugceeuygogcwwoys = 1, $soqqyqgmmuigoqiy = []) { return [self::gouqcwikiiygyasc => $icwicymcioeyeyek, self::iuqumwggccmcuyem => self::_getNextPriority($soqqyqgmmuigoqiy), self::qocqgyaswyskyuwy => $ugceeuygogcwwoys]; } protected static function _getNextPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = self::_getSortedPriority($soqqyqgmmuigoqiy); if (!$soqqyqgmmuigoqiy) { goto egsycocugqyyswsi; } sort($icwicymcioeyeyek); $wmegquyumsyykcka = end($icwicymcioeyeyek); if (!$wmegquyumsyykcka) { goto uoeasoimegouymka; } return $wmegquyumsyykcka + 1; uoeasoimegouymka: egsycocugqyyswsi: return 1; } protected static function _getSortedPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = []; if (!is_array($soqqyqgmmuigoqiy)) { goto qiaimmucomukkeka; } $icwicymcioeyeyek = array_map(function ($igqsaukqcqscimok) { return $igqsaukqcqscimok[self::iuqumwggccmcuyem]; }, $soqqyqgmmuigoqiy); qiaimmucomukkeka: return $icwicymcioeyeyek; } protected static function _filter($soqqyqgmmuigoqiy, $tsuauommsquiesmk) { if (!($tsuauommsquiesmk && $soqqyqgmmuigoqiy)) { goto mkomygccqkmkumsi; } $eqgoocgaqwqcimie = 1; if (!($tsuauommsquiesmk != self::qocqgyaswyskyuwy)) { goto aoquoewagkseayug; } $eqgoocgaqwqcimie = 0; aoquoewagkseayug: foreach ($soqqyqgmmuigoqiy as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::qocqgyaswyskyuwy]) && $igqsaukqcqscimok[self::qocqgyaswyskyuwy] !== $eqgoocgaqwqcimie)) { goto cgmgqucewwssmicq; } unset($soqqyqgmmuigoqiy[$uusmaiomayssaecw]); cgmgqucewwssmicq: ciucewqgyoiouesq: } osuscoaaomwcqkew: mkomygccqkmkumsi: return $soqqyqgmmuigoqiy; } public static function omaawkkwwyesqwcc($ywmkwiwkosakssii = []) { $ggauoeuaesiymgee = ["\146\151\x6c\164\145\162" => false, "\x6f\165\164\x70\x75\164" => OBJECT, "\154\151\155\151\164" => -1]; return wp_parse_args($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public static abstract function awiyyawscoigiuae($gwiwsycaaqgwmewg); public static abstract function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); protected static abstract function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); protected static abstract function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); protected static abstract function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); }
