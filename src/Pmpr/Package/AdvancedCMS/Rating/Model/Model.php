<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c04d5b17017             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating\Model; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Model as BaseClass; abstract class Model extends BaseClass { public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::mswoacegomcucaik: $post = ManipulatePost::get($eqgoocgaqwqcimie); if (!$post) { goto gqmewagyagamokok; } $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post); if ($this->wmwguecgowcscues()) { goto oyiuemaaykgkqqam; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(DecoratorPost::yyykkcyiksewsoqy($post), $eqgoocgaqwqcimie); oyiuemaaykgkqqam: gqmewagyagamokok: goto mkomygccqkmkumsi; case self::iockmgiyoygcswog: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie); if (!$mkucggyaiaukqoce) { goto sqmoqymckwsogsqg; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce)); sqmoqymckwsogsqg: } ussceseaimqywuiy: mkomygccqkmkumsi: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { $post = ManipulatePost::get(ManipulateArray::get($igqsaukqcqscimok, self::mswoacegomcucaik), self::ckmqoekmugkggeym, true); if (!$post) { goto uycesqqkoeamocgm; } $ccowyogiqwikkkie["\163\x68\x6f\167\x5f\160\157\163\164"] = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\145\x66" => ManipulatePost::ycqquoiyyuesegsy($post)], __("\123\x68\x6f\167\40\120\x6f\163\164", PR__PKG__ADVANCED_CMS)); uycesqqkoeamocgm: return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); } }
