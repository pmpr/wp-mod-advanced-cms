<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027c84179e             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating\Model; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Model as BaseClass; abstract class Model extends BaseClass { public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::mswoacegomcucaik: $post = ManipulatePost::get($eqgoocgaqwqcimie); if (!$post) { goto gqmewagyagamokok; } $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post); if ($this->wmwguecgowcscues()) { goto oyiuemaaykgkqqam; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(DecoratorPost::yyykkcyiksewsoqy($post), $eqgoocgaqwqcimie); oyiuemaaykgkqqam: gqmewagyagamokok: goto mkomygccqkmkumsi; case self::iockmgiyoygcswog: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie); if (!$mkucggyaiaukqoce) { goto sqmoqymckwsogsqg; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce)); sqmoqymckwsogsqg: } ussceseaimqywuiy: mkomygccqkmkumsi: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { $post = ManipulatePost::get(ManipulateArray::get($igqsaukqcqscimok, self::mswoacegomcucaik), self::ckmqoekmugkggeym, true); if (!$post) { goto uycesqqkoeamocgm; } $ccowyogiqwikkkie["\x73\150\x6f\x77\137\160\x6f\x73\x74"] = ManipulateHTML::uuccukgasskgimsq("\141", ["\150\162\145\146" => ManipulatePost::ycqquoiyyuesegsy($post)], __("\123\150\x6f\x77\40\x50\157\x73\164", PR__PKG__ADVANCED_CMS)); uycesqqkoeamocgm: return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); } }
