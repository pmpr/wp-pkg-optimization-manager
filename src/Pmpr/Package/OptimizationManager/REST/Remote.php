<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6226724b3e0a7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\OptimizationManager\Setting; use Pmpr\Package\OptimizationManager\Model\Page; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Remote extends Common { public function __construct() { $this->rest_base = "\x72\x65\155\x6f\164\145"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\x74\55\x61\160\x70\163", ["\x63\x61\154\x6c\142\x61\143\x6b" => [$this, "\153\171\153\x77\141\x65\155\x6d\x73\x73\x71\163\x67\165\161\167"]]); $this->register("\57\143\x68\x65\x63\x6b\55\165\162\154\163", ["\x6d\145\x74\150\x6f\x64\163" => self::qucyckeykeuuaquw, "\x63\x61\x6c\154\142\141\x63\153" => [$this, "\x61\143\x65\x77\x65\x67\151\x61\x79\x77\147\x77\x73\141\x71\x6b"]]); } public function acewegiaywgwsaqk(WP_REST_Request $aqmwamyiwgeeymqa) { $auwuoyyagaiegwae = array_filter((array) $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\165\x72\x6c\163", [])); $migiiksoiymissge = ManipulateArray::get(array_values($auwuoyyagaiegwae), 0); $gwgucoaaqcwwciqq = ManipulateFormat::gooqqcmsyseiaikc($migiiksoiymissge, PHP_URL_HOST); $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, $gwgucoaaqcwwciqq); if (!is_wp_error($keccaugmemegoimu) && $auwuoyyagaiegwae) { goto sqiciiuwmykocycc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\161\165\151\x72\x65\40\x70\141\162\x61\155\x65\164\145\x72\163\x20\151\163\x20\155\151\163\x73\151\156\x67\40\157\x72\40\x75\x6e\143\x6f\x72\x72\x65\x63\x74\145\144", PR__PKG__OPTIMIZATION_MANAGER), 400); goto eequksumcoogyoem; sqiciiuwmykocycc: $akyiigeggqowmqqq = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); $iuekmkswcsacoawq = Page::symcgieuakksimmu(); $ocqawgquwsqioses = $iuekmkswcsacoawq->ssiyoimagsskwsoi([$iuekmkswcsacoawq::auqoykcmsiauccao => $auwuoyyagaiegwae, $iuekmkswcsacoawq::ciywsqoeiymemsys => $iuekmkswcsacoawq::eqewsqmqmsiocaeg, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $akyiigeggqowmqqq], self::auqoykcmsiauccao); if ($ocqawgquwsqioses) { goto kiqogmwcgcamwiig; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\165\162\x20\x72\145\x71\165\x65\x73\164\40\x70\x65\162\155\141\x6c\x69\156\x6b\163\40\151\163\x20\x6e\x6f\x74\40\166\x61\x6c\x69\x64\x2e", PR__PKG__OPTIMIZATION_MANAGER)); goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\x71\165\145\x73\164\x20\x69\163\x20\166\x61\154\151\x64", PR__PKG__OPTIMIZATION_MANAGER), ["\x75\162\154\x73" => $ocqawgquwsqioses]); iomcaiwewsawiamu: eequksumcoogyoem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kykwaemmssqsguqw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ocokwuuquaokmasc; } $usmiuwiumyygmucg = Setting::kykwaemmssqsguqw(); if ($usmiuwiumyygmucg && is_array($usmiuwiumyygmucg)) { goto uukumskkeggaowck; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\141\160\x70\x73\x20\x69\x73\x20\x65\x6d\160\x74\171\54\40\x70\154\145\141\163\x65\40\143\157\x6e\164\141\143\164\40\167\151\x74\x68\x20\x61\144\x6d\151\x6e", PR__PKG__OPTIMIZATION_MANAGER)); goto cggowoquuiwqkyew; uukumskkeggaowck: $keccaugmemegoimu = $this->qasywwyamoesisyi('', $usmiuwiumyygmucg); cggowoquuiwqkyew: ocokwuuquaokmasc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { return true; } }
