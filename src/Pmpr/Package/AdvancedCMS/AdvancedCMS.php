<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f6492a91625             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\AdvancedCMS\Breadcrumb\Breadcrumb; use Pmpr\Package\AdvancedCMS\Comment\Comment; use Pmpr\Package\AdvancedCMS\Metadata\Metadata; use Pmpr\Package\AdvancedCMS\Rating\Rating; use Pmpr\Package\AdvancedCMS\Relation\Relation; use Pmpr\Package\AdvancedCMS\Shortcode\Shortcode; use Pmpr\Package\AdvancedCMS\TableOfContent\TableOfContent; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu; use Pmpr\Package\AdvancedCMS\Widget\Widget; class AdvancedCMS extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto quyogmwugsyoaaiu; } parent::__construct(); quyogmwugsyoaaiu: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\167\x70", [$this, "\163\x61\157\171\143\x6b\x65\x6b\147\x75\x77\x71\167\147\x63\x71"])->qcsmikeggeemccuu("\x61\144\x6d\151\x6e\x5f\x6d\145\156\165", [$this, "\x65\165\x71\147\167\x69\163\x63\167\147\161\x6b\161\153\x65\x63"]); parent::wigskegsqequoeks(); } public function soaaswucwaeokauk() { Widget::symcgieuakksimmu(); Rating::symcgieuakksimmu(); Comment::symcgieuakksimmu(); Relation::symcgieuakksimmu(); Metadata::symcgieuakksimmu(); Shortcode::symcgieuakksimmu(); Breadcrumb::symcgieuakksimmu(); TableOfContent::symcgieuakksimmu(); } public function saoyckekguwqwgcq() { if (!DecoratorQuery::kccakwkaqugygwmq()) { goto mmgmqogugasaqkgg; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ieayqiyiuuguowyq("\x70\157\x73\x74", ManipulatePost::mwikyscisascoeea())->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\151\156\154\151\156\145", false)->awagieqcmmwkgwgs($eygsasmqycagyayw->souwykwwmyygqyqi("\x69\156\154\151\x6e\145\x2e\x6a\x73"))); mmgmqogugasaqkgg: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\x61\147\145\x5f\164\151\164\154\145" => __("\101\x64\166\141\156\143\x65\x64\40\x43\x4d\123", PR__PKG__ADVANCED_CMS), "\155\x65\156\x75\137\163\x6c\x75\x67" => $this->akuociswqmoigkas(), "\x70\x6f\x73\x69\x74\x69\157\x6e" => 1]); } }
