<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62214181322df             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\REST; use Exception; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\OptimizationManager\Model\Domain; use Pmpr\Package\DomainManager\Model\Domain as OriginDomain; use WP_REST_Request; abstract class Common extends RESTController { public function __construct() { parent::__construct(); $this->namespace .= "\57\157\160\164\x69\155\x69\x7a\141\164\x69\x6f\156\x2d\x6d\141\156\x61\x67\145\x72"; } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq = null) { if ($gwgucoaaqcwwciqq) { goto cecuyayqoioasumi; } $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); cecuyayqoioasumi: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::aciemiuuwgysykom); $immcykkykeqgkgwg = Domain::symcgieuakksimmu(); $yqimoiiocigqiski = OriginDomain::symcgieuakksimmu(); try { if ($gwgucoaaqcwwciqq && strlen($esuksqieigiqcaie) === 32) { goto qgoiooayqmqqsiok; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\131\x6f\x75\x72\x20\x72\145\x71\x75\x65\x73\164\40\x69\163\x20\x6e\157\x74\40\166\x61\154\151\x64", PR__PKG__OPTIMIZATION_MANAGER), 400); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $siykeiywomwwuoiw = $yqimoiiocigqiski->kqewyqqqiyiouaou([self::ciyoccqkiamemcmm => $gwgucoaaqcwwciqq, $yqimoiiocigqiski::igswcauwsgmeougs => $esuksqieigiqcaie, $immcykkykeqgkgwg->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$yqimoiiocigqiski->kumuygiiqswoyasy(true), $immcykkykeqgkgwg->myywwqkyiwawwquy($immcykkykeqgkgwg::qkmqmaeuyokqgemg)]]]); if ($siykeiywomwwuoiw) { goto qiaqsassksqiuyae; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x53\x65\x72\x76\151\x63\x65\x20\165\156\x61\x76\x61\151\154\141\x62\x6c\x65\40\162\x69\147\150\x74\40\x6e\x6f\x77\56", PR__PKG__OPTIMIZATION_MANAGER)); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $sogksuscggsicmac = $yqimoiiocigqiski->awkaaqmauiuwwsca($siykeiywomwwuoiw, [self::NAME, self::ciyoccqkiamemcmm, $immcykkykeqgkgwg::qkmqmaeuyokqgemg, $immcykkykeqgkgwg->kumuygiiqswoyasy(true)]); qogqewiwmwiwskgm: qwigomakwmyiwkgo: } catch (Exception $wgaoewqkwgomoaai) { $sogksuscggsicmac = $this->oemauiimmycumcsk($wgaoewqkwgomoaai->sagusgigmkeysock(), 500); } if ($sogksuscggsicmac) { goto myoicgcuugciueis; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x44\x6f\155\141\x69\x6e\40\156\157\164\x20\166\x61\x6c\x69\x64", PR__PKG__OPTIMIZATION_MANAGER), 400); myoicgcuugciueis: return $sogksuscggsicmac; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($this->wwawisckiqeueoua($aqmwamyiwgeeymqa)); } }
