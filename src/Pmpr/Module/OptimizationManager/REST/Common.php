<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d5627a0c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Exception; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\OptimizationManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Domain as OriginDomain; use WP_REST_Request; abstract class Common extends RESTController { public function __construct() { parent::__construct(); $this->namespace .= "\57\157\x70\x74\x69\155\151\x7a\x61\164\151\157\x6e\55\155\x61\156\141\147\x65\x72"; } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq = null) { if ($gwgucoaaqcwwciqq) { goto cecuyayqoioasumi; } $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); cecuyayqoioasumi: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); $immcykkykeqgkgwg = Domain::symcgieuakksimmu(); $yqimoiiocigqiski = OriginDomain::symcgieuakksimmu(); try { if ($gwgucoaaqcwwciqq && strlen($esuksqieigiqcaie) === 32) { goto qgoiooayqmqqsiok; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\131\157\x75\x72\x20\162\145\161\165\145\x73\x74\40\151\x73\x20\156\x6f\x74\x20\x76\141\x6c\151\x64", PR__MDL__OPTIMIZATION_MANAGER), 400); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $siykeiywomwwuoiw = $yqimoiiocigqiski->kqewyqqqiyiouaou([self::ciyoccqkiamemcmm => $gwgucoaaqcwwciqq, $yqimoiiocigqiski::igswcauwsgmeougs => $esuksqieigiqcaie, $immcykkykeqgkgwg->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$yqimoiiocigqiski->kumuygiiqswoyasy(true), $immcykkykeqgkgwg->myywwqkyiwawwquy($immcykkykeqgkgwg::qkmqmaeuyokqgemg)]]]); if ($siykeiywomwwuoiw) { goto qiaqsassksqiuyae; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x53\145\x72\x76\151\143\145\40\165\156\141\166\x61\151\x6c\x61\142\154\x65\40\x72\x69\x67\x68\x74\40\156\157\x77\56", PR__MDL__OPTIMIZATION_MANAGER)); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $sogksuscggsicmac = $yqimoiiocigqiski->awkaaqmauiuwwsca($siykeiywomwwuoiw, [self::NAME, self::ciyoccqkiamemcmm, $immcykkykeqgkgwg::qkmqmaeuyokqgemg, $immcykkykeqgkgwg->kumuygiiqswoyasy(true)]); qogqewiwmwiwskgm: qwigomakwmyiwkgo: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk($wgaoewqkwgomoaai->sagusgigmkeysock(), 500); } if ($sogksuscggsicmac) { goto myoicgcuugciueis; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x44\157\155\x61\x69\156\40\x6e\157\164\40\x76\141\154\x69\x64", PR__MDL__OPTIMIZATION_MANAGER), 400); myoicgcuugciueis: return $sogksuscggsicmac; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->wwawisckiqeueoua($aqmwamyiwgeeymqa)); } }