<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62b88628a4c6b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Model\Budget; use WP_Error; use Pmpr\Module\OptimizationManager\Model\Page as Model; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Page extends Common { public function __construct() { $this->rest_base = "\x70\141\147\145"; parent::__construct(); } public function register_routes() { $this->register("\x2f\141\144\x64", ["\155\x65\x74\150\x6f\x64\163" => self::qucyckeykeuuaquw, "\143\141\x6c\x6c\142\141\143\153" => [$this, "\x61\x64\x64"]]); $this->register("\x2f\162\145\x6d\x6f\x76\145", ["\x6d\x65\164\150\x6f\x64\163" => self::kqqquayqkucokyqi, "\143\141\154\154\142\x61\x63\153" => [$this, "\162\x65\x6d\x6f\166\x65"]]); $this->register("\57\143\x68\x61\x6e\147\145\x2d\x73\164\141\164\165\163", ["\x6d\145\x74\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\143\141\x6c\154\142\141\x63\153" => [$this, "\141\x79\x61\153\x6f\151\153\145\167\165\163\x73\153\141\171\143"]]); } public function add(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto usqgaogkqgemuima; } $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if ($wqykqusigegasqeg && $gwgucoaaqcwwciqq) { goto meawswgwagoqgkye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x44\x6f\155\x61\x69\x6e\x20\151\163\x20\156\x6f\x74\x20\166\141\154\x69\144\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto wcesymwqykqoyuqk; meawswgwagoqgkye: if ($iuekmkswcsacoawq = Model::symcgieuakksimmu()) { goto yiwiqaqmwiogawym; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $icwicymcioeyeyek = [$iuekmkswcsacoawq::auqoykcmsiauccao => $suaemuyiacqyugsm, $iuekmkswcsacoawq::iiooageieusuyomy => ManipulateArray::get($suaemuyiacqyugsm, self::iiooageieusuyomy, $iuekmkswcsacoawq::cwoackywkgsameww), $iuekmkswcsacoawq::ciywsqoeiymemsys => ManipulateArray::get($suaemuyiacqyugsm, self::ciywsqoeiymemsys, self::eqewsqmqmsiocaeg), $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg]; $myagqecycsaiyqsk = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::auqoykcmsiauccao => $suaemuyiacqyugsm, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg]); $suckquwcuiuyiogc = false; if (!$myagqecycsaiyqsk) { goto eequksumcoogyoem; } $suckquwcuiuyiogc = true; $icwicymcioeyeyek[$iuekmkswcsacoawq->kumuygiiqswoyasy()] = $iuekmkswcsacoawq->keeuqgyooycqoygw($myagqecycsaiyqsk); eequksumcoogyoem: $keccaugmemegoimu = $this->uyksiewkykwokysc($wqykqusigegasqeg); if (!($suckquwcuiuyiogc || $keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto ocokwuuquaokmasc; } $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto uukumskkeggaowck; } $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::iwyueouqaqegmcas], true), 400); goto cggowoquuiwqkyew; uukumskkeggaowck: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x50\141\x67\x65\x20\x61\144\144\x65\144\40\x73\x75\143\143\x65\x73\x73\x66\x75\x6c\154\171\56", PR__MDL__OPTIMIZATION_MANAGER)); cggowoquuiwqkyew: ocokwuuquaokmasc: goacqqsgaaigyuaw: wcesymwqykqoyuqk: usqgaogkqgemuima: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function remove(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ickcmqoiosquugwe; } $aokagokqyuysuksm = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); if (!($aokagokqyuysuksm && $gwgucoaaqcwwciqq)) { goto eiawsoasmscmqswa; } if ($iuekmkswcsacoawq = Model::symcgieuakksimmu()) { goto qmiwsequckckoaei; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto goeoymmqqqeeoime; qmiwsequckckoaei: $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk), $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $aokagokqyuysuksm]); if ($suaemuyiacqyugsm) { goto kecwuwwcwokuksyq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\x71\165\x65\163\x74\x65\144\40\160\141\x67\x65\x20\x6e\x6f\164\x20\145\170\x69\164\x73\56", PR__MDL__OPTIMIZATION_MANAGER), 400); goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: if ($iuekmkswcsacoawq->sgcuwcowgwimgsgk($iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm), true)) { goto mswsoaimesegiiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\x61\x6e\x20\x6e\x6f\164\x20\x64\x65\154\x65\164\145\x2e", PR__MDL__OPTIMIZATION_MANAGER), 500); goto egasokooagakisiy; mswsoaimesegiiic: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\141\x67\x65\40\162\145\x6d\x6f\166\145\144\40\163\165\143\x63\145\163\163\146\165\154\154\171\56", PR__MDL__OPTIMIZATION_MANAGER)); egasokooagakisiy: qgegkeomwscwwiuw: goeoymmqqqeeoime: eiawsoasmscmqswa: ickcmqoiosquugwe: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ayakoikewusskayc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->ckeqsmmgoowoiosq($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ieumumsgyguceusy; } $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if (!($wqykqusigegasqeg && $gwgucoaaqcwwciqq)) { goto yssscwioiyygssec; } $eeamcawaiqocomwy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $iueymcwwscwqkiyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ciywsqoeiymemsys); if ($eeamcawaiqocomwy && in_array($iueymcwwscwqkiyq, [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc, self::wiewguakgwmoqaea], true)) { goto qwcegcuowwgiccos; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x50\141\x72\x61\155\x65\164\145\x72\x73\40\x69\x73\x20\156\x6f\164\40\166\141\154\151\144\56", PR__MDL__OPTIMIZATION_MANAGER), 400); goto qcessicwuikwqsis; qwcegcuowwgiccos: if ($iuekmkswcsacoawq = Model::symcgieuakksimmu()) { goto twkmiuomimomscew; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto kooskuwkuayiuose; twkmiuomimomscew: $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $eeamcawaiqocomwy, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg]); if ($suaemuyiacqyugsm) { goto mqccmesakuemceqi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\165\x65\x73\x74\145\144\x20\160\x61\x67\x65\x20\x6e\x6f\x74\40\145\x78\151\x74\163\x2e", PR__MDL__OPTIMIZATION_MANAGER), 404); goto eyiamcekkgkiawqy; mqccmesakuemceqi: $swwmymiaiosiyqis = ManipulateArray::get($suaemuyiacqyugsm, self::ciywsqoeiymemsys); $acyqismwwkkaamus = $iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm); $kigowwqauiumummw = false; if ($swwmymiaiosiyqis === $iueymcwwscwqkiyq) { goto cgewcsueoyaeikgm; } $keccaugmemegoimu = $this->uyksiewkykwokysc($wqykqusigegasqeg, $iueymcwwscwqkiyq === self::eqewsqmqmsiocaeg); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto cuoqqgaygogsmmic; } $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo([$iuekmkswcsacoawq->kumuygiiqswoyasy() => $acyqismwwkkaamus, self::ciywsqoeiymemsys => $iueymcwwscwqkiyq], true); $kigowwqauiumummw = $sogksuscggsicmac[self::ckcawaoawwioqecq]; if ($kigowwqauiumummw) { goto qmeoaqmsuseueqiy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::iwyueouqaqegmcas], true), 500); goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $iuekmkswcsacoawq->scueyoccsmqoiuce($acyqismwwkkaamus, $swwmymiaiosiyqis, $iueymcwwscwqkiyq); ygkcacsyyckescqs: cuoqqgaygogsmmic: goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $kigowwqauiumummw = true; sukskmcwsoysiuqu: if (!$kigowwqauiumummw) { goto igymseewwyiocoug; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x61\147\145\40\x73\x74\141\164\165\163\x20\143\150\x61\156\x67\145\144\40\x73\x75\x63\143\145\x73\163\x66\165\154\154\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER)); igymseewwyiocoug: eyiamcekkgkiawqy: kooskuwkuayiuose: qcessicwuikwqsis: yssscwioiyygssec: ieumumsgyguceusy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyksiewkykwokysc($mokawwccycoiqeka, $syukqkeqkkwuiiii = true) { $mkecsaoyggsmwmau = Budget::symcgieuakksimmu()->oewseeiwmgwckyuk($mokawwccycoiqeka); $keccaugmemegoimu = true; if ($mkecsaoyggsmwmau > 0) { goto ycakugokkqkuqyiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\40\x63\x61\156\47\x74\40\x64\x6f\x20\x74\150\151\x73\x2c\x20\x62\x65\x63\141\x75\x73\x65\x20\x79\x6f\x75\x20\x64\157\156\47\x74\x20\150\141\x76\145\x20\141\156\171\x20\x62\x75\x64\x67\145\x74\x2e", PR__MDL__OPTIMIZATION_MANAGER), 401); goto oouoqimaaqcmccay; ycakugokkqkuqyiu: if (!$syukqkeqkkwuiiii) { goto siqagquguiemuoku; } $ocqawgquwsqioses = Model::symcgieuakksimmu()->cwkywyqksyucoyia([Model::qkmqmaeuyokqgemg => $mokawwccycoiqeka, self::ciywsqoeiymemsys => [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc]]); if (!(count($ocqawgquwsqioses) >= $mkecsaoyggsmwmau)) { goto coywmiyqgsweuiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\131\157\x75\x72\40\x62\165\144\x67\145\164\x20\x69\x73\x20\156\157\x74\x20\x65\x6e\157\165\x67\x68\40\164\157\x20\144\157\x20\164\x68\x69\163\x2e", PR__MDL__OPTIMIZATION_MANAGER)); coywmiyqgsweuiic: siqagquguiemuoku: oouoqimaaqcmccay: return $keccaugmemegoimu; } }
