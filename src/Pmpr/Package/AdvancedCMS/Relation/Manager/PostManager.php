<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed0dae8e05             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Manager; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Relation\Entity\Post; use Pmpr\Package\AdvancedCMS\Relation\Relation; use Pmpr\Package\AdvancedCMS\Relation\Setting; use WP_Post; class PostManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; $igqsaukqcqscimok = Relation::symcgieuakksimmu()->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($igqsaukqcqscimok && isset($igqsaukqcqscimok->{self::igecewwoemccgwsq}))) { goto ooysmgyeqoiesgqm; } $iakkeikwceeomgyq = $igqsaukqcqscimok->{self::igecewwoemccgwsq}; $oammesyieqmwuwyi = [$iakkeikwceeomgyq, ManipulatePost::qgisekcaywsmigga($iakkeikwceeomgyq, $gwiwsycaaqgwmewg, null, $ywmkwiwkosakssii)]; ooysmgyeqoiesgqm: return $oammesyieqmwuwyi; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto aaogeemgkogagkai; } $soqqyqgmmuigoqiy = ManipulateArray::sagscekukkacqaaw($soqqyqgmmuigoqiy, self::iuqumwggccmcuyem, $ywmkwiwkosakssii["\154\151\x6d\151\164"]); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!($ywmkwiwkosakssii["\157\165\x74\160\165\164"] == OBJECT)) { goto kwoyiysciqumswcy; } $icwicymcioeyeyek = ManipulatePost::ciugwooasaqcywas($ccamueccusigaaio, [self::gqiasegggowomgie => self::eqomgewoayseioos, self::eqomgewoayseioos => $icwicymcioeyeyek, "\x73\x75\160\x70\x72\x65\x73\x73\137\146\x69\x6c\x74\145\162\x73" => true]); kwoyiysciqumswcy: aaogeemgkogagkai: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { ManipulatePost::giwmekimakcaawsq($gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy, $mcaisukqqyosuasi); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { ManipulatePost::ksmqawcowkmegigw($gwiwsycaaqgwmewg, $icwicymcioeyeyek, $mcaisukqqyosuasi); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return ManipulatePost::igawqaomowicuayw($gwiwsycaaqgwmewg, $mcaisukqqyosuasi, true); } }
