<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6256c1a44c458             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Manager; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Manager implements ConstantInterface { const qocqgyaswyskyuwy = "\151\x73\x5f\x6f\162\151\147\151\x6e"; public static function persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { return self::update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); } public static function update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if (is_array($icwicymcioeyeyek) && is_array($soqqyqgmmuigoqiy)) { goto uwaimsisescsgyqk; } if (!(is_array($soqqyqgmmuigoqiy) && array_search($icwicymcioeyeyek, array_column($soqqyqgmmuigoqiy, self::gouqcwikiiygyasc)) !== false)) { goto cuommomwmsackoqc; } return $soqqyqgmmuigoqiy[$icwicymcioeyeyek]; cuommomwmsackoqc: if (!is_array($soqqyqgmmuigoqiy)) { goto ggeoqeowscwkeumy; } $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys, $soqqyqgmmuigoqiy); return self::update($icwicymcioeyeyek, $gwiwsycaaqgwmewg, static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy), 0); goto qyeswawykmasuqye; ggeoqeowscwkeumy: return self::_persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); qyeswawykmasuqye: goto uqcsksaywyqeumig; uwaimsisescsgyqk: foreach ($icwicymcioeyeyek as $sqqewmoeaekuyyas => $igqsaukqcqscimok) { if (!(isset($soqqyqgmmuigoqiy[$igqsaukqcqscimok]) && isset($soqqyqgmmuigoqiy[$igqsaukqcqscimok][self::iuqumwggccmcuyem]))) { goto awaqksikyomsuaeo; } $soqqyqgmmuigoqiy[$igqsaukqcqscimok][self::iuqumwggccmcuyem] = $sqqewmoeaekuyyas; awaqksikyomsuaeo: iqsgossweywksoia: } igwkcikeyoowosoi: return static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); uqcsksaywyqeumig: } public static function remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { return self::_remove(self::_remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek), $gwiwsycaaqgwmewg, $mcaisukqqyosuasi); } protected static function _persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys); static::_addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); return self::persist($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, 0); } protected static function _remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if ($soqqyqgmmuigoqiy && array_key_exists($icwicymcioeyeyek, $soqqyqgmmuigoqiy)) { goto yggmaskeguaqkusc; } $icwicymcioeyeyek = null; goto ukwoswyyogmsygqg; yggmaskeguaqkusc: unset($soqqyqgmmuigoqiy[$icwicymcioeyeyek]); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); ukwoswyyogmsygqg: return $icwicymcioeyeyek; } protected static function _generateData($icwicymcioeyeyek, $ugceeuygogcwwoys = 1, $soqqyqgmmuigoqiy = []) { return [self::gouqcwikiiygyasc => $icwicymcioeyeyek, self::iuqumwggccmcuyem => self::_getNextPriority($soqqyqgmmuigoqiy), self::qocqgyaswyskyuwy => $ugceeuygogcwwoys]; } protected static function _getNextPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = self::_getSortedPriority($soqqyqgmmuigoqiy); if (!$soqqyqgmmuigoqiy) { goto kwmiwaecqcgiaqye; } sort($icwicymcioeyeyek); $wmegquyumsyykcka = end($icwicymcioeyeyek); if (!$wmegquyumsyykcka) { goto jsmisuccwyukksgc; } return $wmegquyumsyykcka + 1; jsmisuccwyukksgc: kwmiwaecqcgiaqye: return 1; } protected static function _getSortedPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = []; if (!is_array($soqqyqgmmuigoqiy)) { goto yqicwmekwuoywyus; } $icwicymcioeyeyek = array_map(function ($igqsaukqcqscimok) { return $igqsaukqcqscimok[self::iuqumwggccmcuyem]; }, $soqqyqgmmuigoqiy); yqicwmekwuoywyus: return $icwicymcioeyeyek; } protected static function _filter($soqqyqgmmuigoqiy, $tsuauommsquiesmk) { if (!($tsuauommsquiesmk && $soqqyqgmmuigoqiy)) { goto mwieyyqamgwicgco; } $eqgoocgaqwqcimie = 1; if (!($tsuauommsquiesmk != self::qocqgyaswyskyuwy)) { goto gkoaeuekqockuoiq; } $eqgoocgaqwqcimie = 0; gkoaeuekqockuoiq: foreach ($soqqyqgmmuigoqiy as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::qocqgyaswyskyuwy]) && $igqsaukqcqscimok[self::qocqgyaswyskyuwy] !== $eqgoocgaqwqcimie)) { goto uyeyscsaigimsqwq; } unset($soqqyqgmmuigoqiy[$uusmaiomayssaecw]); uyeyscsaigimsqwq: kceuusiekagyeoys: } eekaiaeqewiqkkgm: mwieyyqamgwicgco: return $soqqyqgmmuigoqiy; } public static function omaawkkwwyesqwcc($ywmkwiwkosakssii = []) { $ggauoeuaesiymgee = ["\x66\x69\x6c\164\145\162" => false, "\157\x75\164\160\165\x74" => OBJECT, "\x6c\x69\155\151\x74" => -1]; return wp_parse_args($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public static abstract function awiyyawscoigiuae($gwiwsycaaqgwmewg); public static abstract function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); protected static abstract function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); protected static abstract function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); protected static abstract function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); }
