<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6241d5627a0c1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\REST; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\OptimizationManager\Model\Budget; use WP_Error; use Pmpr\Module\OptimizationManager\Model\Page as Model; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Page extends Common { public function __construct() { $this->rest_base = "\160\x61\147\145"; parent::__construct(); } public function register_routes() { $this->register("\57\x61\x64\144", ["\x6d\145\x74\x68\x6f\144\163" => self::qucyckeykeuuaquw, "\x63\141\154\154\x62\141\x63\153" => [$this, "\141\144\x64"]]); $this->register("\57\162\x65\x6d\157\x76\145", ["\155\x65\164\150\x6f\x64\x73" => self::kqqquayqkucokyqi, "\143\141\x6c\154\142\x61\x63\153" => [$this, "\x72\x65\x6d\x6f\x76\145"]]); $this->register("\57\x63\150\x61\156\147\x65\x2d\163\x74\x61\164\x75\163", ["\x6d\x65\164\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\143\x61\154\x6c\x62\141\x63\153" => [$this, "\x61\x79\141\153\157\x69\153\145\x77\x75\163\x73\x6b\141\171\x63"]]); } public function add(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto egasokooagakisiy; } $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $akyiigeggqowmqqq = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if ($akyiigeggqowmqqq && $gwgucoaaqcwwciqq) { goto usqgaogkqgemuima; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\x6d\141\151\156\x20\x69\163\40\156\157\164\40\166\141\154\151\144\56", PR__MDL__OPTIMIZATION_MANAGER), 400); goto mswsoaimesegiiic; usqgaogkqgemuima: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $iuekmkswcsacoawq = Model::symcgieuakksimmu(); $icwicymcioeyeyek = [$iuekmkswcsacoawq::auqoykcmsiauccao => $suaemuyiacqyugsm, $iuekmkswcsacoawq::iiooageieusuyomy => ManipulateArray::get($suaemuyiacqyugsm, self::iiooageieusuyomy, $iuekmkswcsacoawq::cwoackywkgsameww), $iuekmkswcsacoawq::ciywsqoeiymemsys => ManipulateArray::get($suaemuyiacqyugsm, self::ciywsqoeiymemsys, self::eqewsqmqmsiocaeg), $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]; $myagqecycsaiyqsk = $iuekmkswcsacoawq->cwkywyqksyucoyia([$iuekmkswcsacoawq::auqoykcmsiauccao => $suaemuyiacqyugsm, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); $suckquwcuiuyiogc = false; if (!$myagqecycsaiyqsk) { goto yiwiqaqmwiogawym; } $suckquwcuiuyiogc = true; $icwicymcioeyeyek[$iuekmkswcsacoawq->kumuygiiqswoyasy()] = $iuekmkswcsacoawq->keeuqgyooycqoygw($myagqecycsaiyqsk); yiwiqaqmwiogawym: $keccaugmemegoimu = $this->uyksiewkykwokysc($akyiigeggqowmqqq); if (!($suckquwcuiuyiogc || $keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto wcesymwqykqoyuqk; } $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto goacqqsgaaigyuaw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::iwyueouqaqegmcas], true), 400); goto meawswgwagoqgkye; goacqqsgaaigyuaw: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x61\147\145\x20\x61\x64\144\x65\x64\x20\x73\165\x63\143\x65\x73\x73\146\x75\154\x6c\x79\x2e", PR__MDL__OPTIMIZATION_MANAGER)); meawswgwagoqgkye: wcesymwqykqoyuqk: mswsoaimesegiiic: egasokooagakisiy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function remove(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ickcmqoiosquugwe; } $aokagokqyuysuksm = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); if (!($aokagokqyuysuksm && $gwgucoaaqcwwciqq)) { goto eiawsoasmscmqswa; } $iuekmkswcsacoawq = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk), $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $aokagokqyuysuksm]); if ($suaemuyiacqyugsm) { goto qmiwsequckckoaei; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\165\145\x73\164\145\144\x20\x70\141\147\145\x20\156\x6f\x74\x20\x65\x78\151\164\x73\56", PR__MDL__OPTIMIZATION_MANAGER), 400); goto goeoymmqqqeeoime; qmiwsequckckoaei: if ($iuekmkswcsacoawq->sgcuwcowgwimgsgk($iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm), true)) { goto kecwuwwcwokuksyq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\103\x61\x6e\x20\x6e\x6f\164\40\144\x65\154\x65\x74\x65\56", PR__MDL__OPTIMIZATION_MANAGER), 500); goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x50\x61\x67\x65\40\x72\x65\x6d\157\x76\x65\144\x20\163\165\x63\143\x65\x73\x73\x66\165\x6c\154\x79\56", PR__MDL__OPTIMIZATION_MANAGER)); qgegkeomwscwwiuw: goeoymmqqqeeoime: eiawsoasmscmqswa: ickcmqoiosquugwe: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ayakoikewusskayc(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qcessicwuikwqsis; } $gwgucoaaqcwwciqq = ManipulateArray::get($keccaugmemegoimu, self::ciyoccqkiamemcmm); $wqykqusigegasqeg = ManipulateArray::get($keccaugmemegoimu, self::gouqcwikiiygyasc); if (!($wqykqusigegasqeg && $gwgucoaaqcwwciqq)) { goto qwcegcuowwgiccos; } $eeamcawaiqocomwy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $iueymcwwscwqkiyq = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ciywsqoeiymemsys); if ($eeamcawaiqocomwy && in_array($iueymcwwscwqkiyq, [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc, self::wiewguakgwmoqaea])) { goto twkmiuomimomscew; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\120\141\162\x61\x6d\x65\164\x65\x72\163\x20\151\163\x20\156\x6f\164\40\166\x61\154\x69\x64\x2e", PR__MDL__OPTIMIZATION_MANAGER), 400); goto kooskuwkuayiuose; twkmiuomimomscew: $iuekmkswcsacoawq = Model::symcgieuakksimmu(); $suaemuyiacqyugsm = $iuekmkswcsacoawq->oqomcmyuuakigusk([$iuekmkswcsacoawq::auqoykcmsiauccao => $eeamcawaiqocomwy, $iuekmkswcsacoawq::qkmqmaeuyokqgemg => $wqykqusigegasqeg]); if ($suaemuyiacqyugsm) { goto mqccmesakuemceqi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\x75\x65\x73\x74\x65\x64\x20\x70\x61\147\145\40\x6e\157\x74\40\145\170\x69\x74\163\x2e", PR__MDL__OPTIMIZATION_MANAGER), 404); goto eyiamcekkgkiawqy; mqccmesakuemceqi: $swwmymiaiosiyqis = ManipulateArray::get($suaemuyiacqyugsm, self::ciywsqoeiymemsys); $acyqismwwkkaamus = $iuekmkswcsacoawq->keeuqgyooycqoygw($suaemuyiacqyugsm); $kigowwqauiumummw = false; if ($swwmymiaiosiyqis === $iueymcwwscwqkiyq) { goto cgewcsueoyaeikgm; } $keccaugmemegoimu = $this->uyksiewkykwokysc($wqykqusigegasqeg, $iueymcwwscwqkiyq === self::eqewsqmqmsiocaeg); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto cuoqqgaygogsmmic; } $sogksuscggsicmac = $iuekmkswcsacoawq->gscuuyuyauokoyuo([$iuekmkswcsacoawq->kumuygiiqswoyasy() => $acyqismwwkkaamus, self::ciywsqoeiymemsys => $iueymcwwscwqkiyq], true); $kigowwqauiumummw = $sogksuscggsicmac[self::ckcawaoawwioqecq]; if ($kigowwqauiumummw) { goto qmeoaqmsuseueqiy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(print_r($sogksuscggsicmac[self::iwyueouqaqegmcas], true), 500); goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $iuekmkswcsacoawq->scueyoccsmqoiuce($acyqismwwkkaamus, $swwmymiaiosiyqis, $iueymcwwscwqkiyq); ygkcacsyyckescqs: cuoqqgaygogsmmic: goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $kigowwqauiumummw = true; sukskmcwsoysiuqu: if (!$kigowwqauiumummw) { goto igymseewwyiocoug; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\120\x61\147\145\40\163\x74\x61\x74\165\x73\40\143\150\141\x6e\147\x65\x64\x20\x73\x75\x63\143\145\x73\163\146\x75\154\x6c\x79\56", PR__MDL__OPTIMIZATION_MANAGER)); igymseewwyiocoug: eyiamcekkgkiawqy: kooskuwkuayiuose: qwcegcuowwgiccos: qcessicwuikwqsis: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function uyksiewkykwokysc($mokawwccycoiqeka, $syukqkeqkkwuiiii = true) { $mkecsaoyggsmwmau = Budget::symcgieuakksimmu()->oewseeiwmgwckyuk($mokawwccycoiqeka); $keccaugmemegoimu = true; if ($mkecsaoyggsmwmau > 0) { goto coywmiyqgsweuiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\157\x75\40\x63\x61\156\47\x74\40\x64\157\x20\164\150\151\163\x2c\40\142\x65\143\x61\165\163\x65\x20\171\157\165\x20\x64\157\156\47\164\40\150\x61\166\145\40\x61\156\171\x20\142\165\x64\147\145\164\x2e", PR__MDL__OPTIMIZATION_MANAGER), 401); goto siqagquguiemuoku; coywmiyqgsweuiic: if (!$syukqkeqkkwuiiii) { goto ieumumsgyguceusy; } $ocqawgquwsqioses = Model::symcgieuakksimmu()->cwkywyqksyucoyia([Model::qkmqmaeuyokqgemg => $mokawwccycoiqeka, self::ciywsqoeiymemsys => [self::eqewsqmqmsiocaeg, self::uucoeqmmykkwsmqc]]); if (!(count($ocqawgquwsqioses) >= $mkecsaoyggsmwmau)) { goto yssscwioiyygssec; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x59\x6f\x75\x72\40\142\165\144\147\x65\164\40\151\x73\40\x6e\x6f\x74\x20\x65\156\x6f\165\147\x68\40\164\157\x20\x64\157\x20\164\150\x69\x73\56", PR__MDL__OPTIMIZATION_MANAGER)); yssscwioiyygssec: ieumumsgyguceusy: siqagquguiemuoku: return $keccaugmemegoimu; } }