<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281a6020990             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Model\Budget; use WP_Error; use Pmpr\Module\OptimizationManager\Model\Page as Model; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Page extends Common { public function __construct() { $this->rest_base = "\x70\x61\x67\145"; parent::__construct(); } public function register_routes() { $this->register("\57\141\144\x64", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\167\171\x67\157\161\157\x71\163\x71\153\143\x67\157\157\143\161"]]); $this->register("\x2f\x6d\x75\x6c\164\x69\55\x61\144\144", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\143\x67\145\x63\x69\157\x75\167\157\x67\x71\x73\143\143\x65\163"]]); $this->register("\x2f\162\145\155\x6f\x76\x65", [self::oaggieeykyaoiiyw => self::kqqquayqkucokyqi, self::wwgusigoaksqmwsm => [$this, "\162\145\x6d\157\166\145"]]); $this->register("\x2f\x63\150\x61\x6e\x67\x65\x2d\163\164\x61\164\165\x73", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\171\141\153\x6f\x69\x6b\x65\x77\165\x73\163\153\141\171\143"]]); } private function add($suaemuyiacqyugsm, $wqykqusigegasqeg) { if ($iuekmkswcsacoawq = Model::symcgieuakksimmu()) { goto ygkcacsyyckescqs; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $migiiksoiymissge = ManipulateArray::get($suaemuyiacqyugsm, self::sauwwsocmukoaayu); if ($migiiksoiymissge) { goto ickcmqoiosquugwe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\160\145\162\x6d\141\x6c\151\x6e\153\40\143\141\x6e\40\156\157\164\40\142\x65\x20\x65\155\x70\x74\171\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $icwicymcioeyeyek = [$iuekmkswcsacoawq::auqoykcmsiauccao => $migiiksoiymissge, $iuekmkswcsacoawq::iiooageieusuyomy => ManipulateArray::get($suaemuyiacqyugsm, self::iiooageieusuyomy, $iuekmkswcsacoawq::cwoackywkgsameww), $iuekmkswcsacoawq::ciywsqoeiymemsys => ManipulateArray::get($suaemuyiacqyugsm, self::ciywsqoeiymemsys, self::eqewsqmqmsiocaeg), $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg]; if (!($myagqecycsaiyqsk = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $migiiksoiymissge, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg]))) { goto eiawsoasmscmqswa; } $icwicymcioeyeyek = ManipulateArray::mamuckeoceekuqsk($myagqecycsaiyqsk, $icwicymcioeyeyek); eiawsoasmscmqswa: $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo($icwicymcioeyeyek); $keccaugmemegoimu = $sogksuscggsicmac[self::ckcawaoawwioqecq] ?: $this->oemauiimmycumcsk($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]), 400); qmeoaqmsuseueqiy: cuoqqgaygogsmmic: return $keccaugmemegoimu; } public function wygoqoqsqkcgoocq(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { goto eyiamcekkgkiawqy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\x6f\x6d\x61\x69\156\x20\151\x73\x20\156\157\164\40\x76\x61\154\x69\x64\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto twkmiuomimomscew; eyiamcekkgkiawqy: $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if ($wqykqusigegasqeg && $gwgucoaaqcwwciqq) { goto igymseewwyiocoug; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto mqccmesakuemceqi; igymseewwyiocoug: $keccaugmemegoimu = $this->uyksiewkykwokysc($wqykqusigegasqeg); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto sukskmcwsoysiuqu; } $keccaugmemegoimu = $this->add($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk), $wqykqusigegasqeg); if (is_wp_error($keccaugmemegoimu)) { goto cgewcsueoyaeikgm; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x61\147\x65\x20\x61\x64\x64\x65\144\40\163\165\x63\143\145\163\163\146\x75\x6c\154\171\56", PR__MDL__OPTIMIZATION_MANAGER)); cgewcsueoyaeikgm: sukskmcwsoysiuqu: mqccmesakuemceqi: twkmiuomimomscew: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function cgeciouwogqscces(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ycakugokkqkuqyiu; } $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if ($wqykqusigegasqeg && $gwgucoaaqcwwciqq) { goto coywmiyqgsweuiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\x6f\155\x61\151\156\40\x69\x73\40\x6e\157\164\x20\166\141\154\x69\144\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto siqagquguiemuoku; coywmiyqgsweuiic: $ocqawgquwsqioses = (array) $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yusuiaeueqwieqqq, []); $bsgyawiqyuquqmyy = $this->ewcikckouwmuqkms($wqykqusigegasqeg); if (count($ocqawgquwsqioses) <= $bsgyawiqyuquqmyy) { goto yssscwioiyygssec; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\x75\162\x20\142\x75\144\x67\x65\x74\x20\156\157\x74\40\145\x6e\157\165\x67\x68\56", PR__MDL__OPTIMIZATION_MANAGER)); goto ieumumsgyguceusy; yssscwioiyygssec: $kigowwqauiumummw = []; foreach ($ocqawgquwsqioses as $uusmaiomayssaecw => $suaemuyiacqyugsm) { $sogksuscggsicmac = $this->add($suaemuyiacqyugsm, $wqykqusigegasqeg); if (is_wp_error($sogksuscggsicmac)) { goto qcessicwuikwqsis; } $kigowwqauiumummw[$uusmaiomayssaecw] = ManipulateArray::get($suaemuyiacqyugsm, self::sauwwsocmukoaayu); qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\141\147\x65\x73\40\x61\144\x64\x65\144\x20\x73\165\x63\143\145\x73\x73\146\x75\154\154\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER), [self::yusuiaeueqwieqqq => $kigowwqauiumummw]); ieumumsgyguceusy: siqagquguiemuoku: ycakugokkqkuqyiu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function remove(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kiwqkcaekqqyuegq; } $aokagokqyuysuksm = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); if (!($aokagokqyuysuksm && $gwgucoaaqcwwciqq)) { goto qsygcycwieukkgwc; } if ($iuekmkswcsacoawq = Model::symcgieuakksimmu()) { goto wwkgkaecgiwggcck; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto umgaesggesswoaqe; wwkgkaecgiwggcck: $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk), $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $aokagokqyuysuksm]); if ($suaemuyiacqyugsm) { goto gygawoqywkukmqee; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\165\145\163\x74\x65\144\x20\x70\141\147\x65\40\156\157\164\x20\x65\170\x69\164\x73\56", PR__MDL__OPTIMIZATION_MANAGER), 400); goto kciouyuaqkyqomam; gygawoqywkukmqee: if ($iuekmkswcsacoawq->sgcuwcowgwimgsgk($iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm), true)) { goto oouoqimaaqcmccay; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\141\x6e\40\156\x6f\x74\40\144\x65\x6c\x65\164\x65\56", PR__MDL__OPTIMIZATION_MANAGER), 500); goto sycygoiaiqqageym; oouoqimaaqcmccay: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\141\x67\145\40\162\x65\155\x6f\x76\x65\144\40\163\165\x63\x63\145\x73\163\x66\165\x6c\x6c\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER)); sycygoiaiqqageym: kciouyuaqkyqomam: umgaesggesswoaqe: qsygcycwieukkgwc: kiwqkcaekqqyuegq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ayakoikewusskayc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qkcyqocqqwmqgqww; } $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if (!($wqykqusigegasqeg && $gwgucoaaqcwwciqq)) { goto ssoucoucsgccekwe; } $eeamcawaiqocomwy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $iueymcwwscwqkiyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ciywsqoeiymemsys); if ($eeamcawaiqocomwy && in_array($iueymcwwscwqkiyq, [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc, self::wiewguakgwmoqaea], true)) { goto iggyqogweyosuikc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\141\162\x61\155\x65\x74\x65\x72\x73\40\x69\x73\x20\x6e\x6f\164\40\x76\141\154\x69\x64\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto qqewoyookaskiuek; iggyqogweyosuikc: if ($iuekmkswcsacoawq = Model::symcgieuakksimmu()) { goto ygcsmkuycoagwyou; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $eeamcawaiqocomwy, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg]); if ($suaemuyiacqyugsm) { goto mosqsmqimqgqoase; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\165\145\x73\x74\x65\144\x20\160\141\147\145\40\x6e\x6f\x74\40\x65\170\x69\x74\163\56", PR__MDL__OPTIMIZATION_MANAGER), 404); goto omugkkesagcyagmk; mosqsmqimqgqoase: $swwmymiaiosiyqis = ManipulateArray::get($suaemuyiacqyugsm, self::ciywsqoeiymemsys); $acyqismwwkkaamus = $iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm); $kigowwqauiumummw = false; if ($swwmymiaiosiyqis === $iueymcwwscwqkiyq) { goto cmqucgoewuyieoyk; } $keccaugmemegoimu = $this->uyksiewkykwokysc($wqykqusigegasqeg, $iueymcwwscwqkiyq === self::eqewsqmqmsiocaeg); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto gimmuoqwckiseaik; } $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo([$iuekmkswcsacoawq->kumuygiiqswoyasy() => $acyqismwwkkaamus, self::ciywsqoeiymemsys => $iueymcwwscwqkiyq], true); $kigowwqauiumummw = $sogksuscggsicmac[self::ckcawaoawwioqecq]; if ($kigowwqauiumummw) { goto quwcqmyokicssyew; } $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::iwyueouqaqegmcas], true), 500); goto iqcogmsguwoikame; quwcqmyokicssyew: $iuekmkswcsacoawq->scueyoccsmqoiuce($acyqismwwkkaamus, $swwmymiaiosiyqis, $iueymcwwscwqkiyq); iqcogmsguwoikame: gimmuoqwckiseaik: goto yqykqysmiquwoasu; cmqucgoewuyieoyk: $kigowwqauiumummw = true; yqykqysmiquwoasu: if (!$kigowwqauiumummw) { goto ayyweymyuuiauamo; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x61\147\x65\x20\163\x74\x61\x74\165\x73\x20\x63\150\x61\x6e\x67\145\x64\40\x73\x75\143\143\145\163\163\x66\x75\154\x6c\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER)); ayyweymyuuiauamo: omugkkesagcyagmk: kqksuugcgsyeoayy: qqewoyookaskiuek: ssoucoucsgccekwe: qkcyqocqqwmqgqww: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ewcikckouwmuqkms($mokawwccycoiqeka) { $bsgyawiqyuquqmyy = 0; $iuekmkswcsacoawq = Model::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); if (!($iuekmkswcsacoawq && $yoqasmiegcmcqaus)) { goto miyqyeiwquwsacsm; } $mkecsaoyggsmwmau = $yoqasmiegcmcqaus->oewseeiwmgwckyuk($mokawwccycoiqeka); $ocqawgquwsqioses = $iuekmkswcsacoawq->cwkywyqksyucoyia([Model::qkmqmaeuyokqgemg => $mokawwccycoiqeka, self::ciywsqoeiymemsys => [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc]]); $bsgyawiqyuquqmyy = max($bsgyawiqyuquqmyy, $mkecsaoyggsmwmau - count($ocqawgquwsqioses)); miyqyeiwquwsacsm: return $bsgyawiqyuquqmyy; } public function uyksiewkykwokysc($mokawwccycoiqeka, bool $syukqkeqkkwuiiii = true) { $mkecsaoyggsmwmau = Budget::symcgieuakksimmu()->oewseeiwmgwckyuk($mokawwccycoiqeka); $keccaugmemegoimu = true; if ($mkecsaoyggsmwmau > 0) { goto wmmggowmigekyoso; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\x6f\165\x20\x63\141\156\47\164\x20\144\157\40\164\150\151\163\x2c\40\x62\145\143\x61\165\x73\145\40\171\x6f\165\40\144\157\x6e\x27\x74\40\150\141\x76\x65\40\141\156\x79\x20\x62\165\x64\x67\145\164\x2e", PR__MDL__OPTIMIZATION_MANAGER), 401); goto soqqemyioggmoakg; wmmggowmigekyoso: if (!$syukqkeqkkwuiiii) { goto ywqgcegomwaiuquc; } $ocqawgquwsqioses = Model::symcgieuakksimmu()->cwkywyqksyucoyia([Model::qkmqmaeuyokqgemg => $mokawwccycoiqeka, self::ciywsqoeiymemsys => [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc]]); if (!(count($ocqawgquwsqioses) >= $mkecsaoyggsmwmau)) { goto eegqyykygiccaoeo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\x75\162\x20\142\x75\144\147\x65\x74\x20\x69\163\x20\156\157\164\x20\x65\x6e\x6f\x75\147\x68\40\x74\x6f\40\x64\157\40\x74\150\151\163\56", PR__MDL__OPTIMIZATION_MANAGER)); eegqyykygiccaoeo: ywqgcegomwaiuquc: soqqemyioggmoakg: return $keccaugmemegoimu; } }
