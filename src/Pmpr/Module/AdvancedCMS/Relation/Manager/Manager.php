<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6299308b147b9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Manager; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Manager implements ConstantInterface { const qocqgyaswyskyuwy = "\151\x73\137\157\162\151\147\151\x6e"; public static function persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { return self::update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); } public static function update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if (is_array($icwicymcioeyeyek) && is_array($soqqyqgmmuigoqiy)) { goto miyqyeiwquwsacsm; } if (!(is_array($soqqyqgmmuigoqiy) && array_search($icwicymcioeyeyek, array_column($soqqyqgmmuigoqiy, self::gouqcwikiiygyasc)) !== false)) { goto qqewoyookaskiuek; } return $soqqyqgmmuigoqiy[$icwicymcioeyeyek]; qqewoyookaskiuek: if (!is_array($soqqyqgmmuigoqiy)) { goto ssoucoucsgccekwe; } $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys, $soqqyqgmmuigoqiy); return self::update($icwicymcioeyeyek, $gwiwsycaaqgwmewg, static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy), 0); goto qkcyqocqqwmqgqww; ssoucoucsgccekwe: return self::_persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); qkcyqocqqwmqgqww: goto eegqyykygiccaoeo; miyqyeiwquwsacsm: foreach ($icwicymcioeyeyek as $sqqewmoeaekuyyas => $igqsaukqcqscimok) { if (!(isset($soqqyqgmmuigoqiy[$igqsaukqcqscimok]) && isset($soqqyqgmmuigoqiy[$igqsaukqcqscimok][self::iuqumwggccmcuyem]))) { goto iggyqogweyosuikc; } $soqqyqgmmuigoqiy[$igqsaukqcqscimok][self::iuqumwggccmcuyem] = $sqqewmoeaekuyyas; iggyqogweyosuikc: kqksuugcgsyeoayy: } ygcsmkuycoagwyou: return static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); eegqyykygiccaoeo: } public static function remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { return self::_remove(self::_remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek), $gwiwsycaaqgwmewg, $mcaisukqqyosuasi); } protected static function _persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys); static::_addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); return self::persist($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, 0); } protected static function _remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if ($soqqyqgmmuigoqiy && array_key_exists($icwicymcioeyeyek, $soqqyqgmmuigoqiy)) { goto ywqgcegomwaiuquc; } $icwicymcioeyeyek = null; goto wmmggowmigekyoso; ywqgcegomwaiuquc: unset($soqqyqgmmuigoqiy[$icwicymcioeyeyek]); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); wmmggowmigekyoso: return $icwicymcioeyeyek; } protected static function _generateData($icwicymcioeyeyek, $ugceeuygogcwwoys = 1, $soqqyqgmmuigoqiy = []) { return [self::gouqcwikiiygyasc => $icwicymcioeyeyek, self::iuqumwggccmcuyem => self::_getNextPriority($soqqyqgmmuigoqiy), self::qocqgyaswyskyuwy => $ugceeuygogcwwoys]; } protected static function _getNextPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = self::_getSortedPriority($soqqyqgmmuigoqiy); if (!$soqqyqgmmuigoqiy) { goto acaqummmoyiemqss; } sort($icwicymcioeyeyek); $wmegquyumsyykcka = end($icwicymcioeyeyek); if (!$wmegquyumsyykcka) { goto soqqemyioggmoakg; } return $wmegquyumsyykcka + 1; soqqemyioggmoakg: acaqummmoyiemqss: return 1; } protected static function _getSortedPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = []; if (!is_array($soqqyqgmmuigoqiy)) { goto suswcqoyyqkkquuo; } $icwicymcioeyeyek = array_map(function ($igqsaukqcqscimok) { return $igqsaukqcqscimok[self::iuqumwggccmcuyem]; }, $soqqyqgmmuigoqiy); suswcqoyyqkkquuo: return $icwicymcioeyeyek; } protected static function _filter($soqqyqgmmuigoqiy, $tsuauommsquiesmk) { if (!($tsuauommsquiesmk && $soqqyqgmmuigoqiy)) { goto hoeeyiowekaeemko; } $eqgoocgaqwqcimie = 1; if (!($tsuauommsquiesmk != self::qocqgyaswyskyuwy)) { goto eeqesooyqagwawae; } $eqgoocgaqwqcimie = 0; eeqesooyqagwawae: foreach ($soqqyqgmmuigoqiy as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::qocqgyaswyskyuwy]) && $igqsaukqcqscimok[self::qocqgyaswyskyuwy] !== $eqgoocgaqwqcimie)) { goto iekumemscwieugqw; } unset($soqqyqgmmuigoqiy[$uusmaiomayssaecw]); iekumemscwieugqw: foeeqckqsyockkak: } oqugqwcyomiaaoqu: hoeeyiowekaeemko: return $soqqyqgmmuigoqiy; } public static function omaawkkwwyesqwcc($ywmkwiwkosakssii = []) { $ggauoeuaesiymgee = ["\x66\x69\154\x74\x65\162" => false, "\x6f\x75\164\x70\165\x74" => OBJECT, "\154\x69\x6d\x69\164" => -1]; return wp_parse_args($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public static abstract function awiyyawscoigiuae($gwiwsycaaqgwmewg); public static abstract function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); protected static abstract function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); protected static abstract function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); protected static abstract function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); }
