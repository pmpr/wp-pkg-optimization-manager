<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6226724b3e0a7             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\ComponentManager\Product as BaseClass; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\OptimizationManager\Interfaces\CommonInterface; use Pmpr\Package\OptimizationManager\Model\Budget; use Pmpr\Package\OptimizationManager\Model\Domain as OptDomain; use Pmpr\Package\OptimizationManager\Traits\CommonTrait; use WC_Order_Item_Product; class Product extends BaseClass implements CommonInterface { const kgyawuuygekasmwc = "\154\x65\166\145\x6c"; const imeuukiiccuqqosc = "\163\x74\x61\x72\x74\137\x62\165\144\147\x65\x74\x5f\x64\141\x74\145"; use CommonTrait; public function __construct($wksoawcgagcgoask = null, $product = null) { $this->backlinkable = true; parent::__construct($wksoawcgagcgoask, $product); } protected ?string $expire = null; public function oycgwasemqgaskiu() : ?string { return $this->expire; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6d\165\x6c\164\x69\x5f\x73\x74\x65\x70\x5f\x63\x68\x65\143\x6b\x5f\x76\141\162\x69\141\164\x69\x6f\x6e\x73"), [$this, "\157\147\x71\x6b\155\x6d\x6b\x61\157\143\x61\x61\x6d\x71\x73\155"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x75\154\164\x69\137\163\164\x65\x70\x5f\x76\x61\x72\151\x61\x74\x69\157\156\x73\137\x62\x65\146\x6f\x72\145\x5f\141\144\x64\137\x74\x6f\x5f\x63\x61\162\164"), [$this, "\x6f\x63\143\x67\145\165\167\x63\161\163\x6b\163\x79\171\171\x79"], 10, 3); parent::kgquecmsgcouyaya(); } public function occgeuwcqsksyyyy($qecuekqmeaiykeek, $product, $mokawwccycoiqeka) { if (!(ManipulateWoocommerce::omwkqcuwceweymcc($product) == $this->aqasygcsqysmmyke())) { goto egyyiccaeeiooaua; } if (!$this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia)) { goto ooeausyowguqicuo; } ManipulateArray::unset($qecuekqmeaiykeek, 0); ooeausyowguqicuo: egyyiccaeeiooaua: return $qecuekqmeaiykeek; } public function ogqkmmkaocaamqsm($uamcoiueqaamsqma, $product, $mokawwccycoiqeka, $qecuekqmeaiykeek) { if (!(ManipulateWoocommerce::omwkqcuwceweymcc($product) == $this->aqasygcsqysmmyke())) { goto ugqaaewwmkocwwgy; } if ($qecuekqmeaiykeek && is_array($qecuekqmeaiykeek)) { goto igooksugieceoege; } $uamcoiueqaamsqma = __("\x4e\157\x20\166\x61\x72\x69\141\164\x69\x6f\156\x73\x20\163\145\x6c\x65\x63\x74\x65\x64", PR__PKG__OPTIMIZATION_MANAGER); goto omqiayeucoioqoao; igooksugieceoege: if (!(count($qecuekqmeaiykeek) < 2)) { goto cewmoqyysgsmuiya; } if (!$this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia)) { goto scisgsyemmsekgos; } $uamcoiueqaamsqma = sprintf(__("\x64\157\x6d\x61\x69\156\40\x25\163\54\40\141\154\162\x65\141\x64\171\40\x68\x61\x73\40\146\162\x65\145\40\x76\145\162\163\151\157\x6e\54\40\x70\x6c\145\141\163\145\x20\x61\x64\x64\40\155\x6f\162\145\40\x76\x61\162\151\141\164\151\157\x6e\x20\x74\x6f\40\x63\157\156\164\151\156\x75\x65", PR__PKG__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($wiiucqsygckgwcia, self::ciyoccqkiamemcmm))); scisgsyemmsekgos: cewmoqyysgsmuiya: omqiayeucoioqoao: ugqaaewwmkocwwgy: return $uamcoiueqaamsqma; } public function gaiasoueuycmiwcm($mokawwccycoiqeka, &$wiiucqsygckgwcia) : bool { $myagqecycsaiyqsk = false; $wiiucqsygckgwcia = $this->gugmsucsyeywucoe($mokawwccycoiqeka); if (!$wiiucqsygckgwcia) { goto kqgcyoscsusgoaqi; } $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto wgewmqieuamsoayy; } $myagqecycsaiyqsk = Budget::symcgieuakksimmu()->qumqowkwyaceeqwu([Budget::iiooageieusuyomy => Budget::yygyasgygkeqacou, Budget::ciyoccqkiamemcmm => "\60", Budget::qkmqmaeuyokqgemg => $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia)]); wgewmqieuamsoayy: kqgcyoscsusgoaqi: return $myagqecycsaiyqsk; } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order_Item_Product $cawesmkieccckaae, bool $wmgiiumwscoyqkqa) { $umwqusowiqmyseom = $cawesmkieccckaae->get_order(); if (!($umwqusowiqmyseom && $this->qaueesycysuwggmc())) { goto ciykoyeioqgyaeqo; } try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto ueigkucgaucgeimc; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); ueigkucgaucgeimc: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto wakmayaoqoskekqy; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $akyiigeggqowmqqq, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto sggawugoykqcmsug; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto wkeuuycukmuqiaom; sggawugoykqcmsug: $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\103\x61\x6e\40\x6e\x6f\164\x20\143\x72\145\141\x74\145\40\x6f\x70\164\x20\x64\x6f\x6d\141\151\156\x3a\x20\x25\163", PR__PKG__OPTIMIZATION_MANAGER)); wkeuuycukmuqiaom: qmuwoecuacmkwgem: if (!$fooqqkeicsiaascw) { goto wcugqegqsuuuwqao; } if ($yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()])) { goto iwsuawwqomaowuii; } $isweyuoisomqyaag = $this->oyqguwgqyigmuwow($cawesmkieccckaae, $icwicymcioeyeyek); if (!$isweyuoisomqyaag) { goto qoqskyuuwueqkquk; } $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ysskgssgwuwmqwym); $mksyucucyswaukig = ManipulateArray::get($isweyuoisomqyaag, self::ckmqoekmugkggeym); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\x59\55\155\x2d\x64")); if (!$wwgucssaecqekuek) { goto wagqgeqymeqoeuyi; } if (!ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, self::smsioacowoikwikc)) { goto mwsmsguqqkcwiiuk; } $uoomaookgsyciacm = [$yoqasmiegcmcqaus::ciyoccqkiamemcmm => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm), $yoqasmiegcmcqaus::iiooageieusuyomy => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy), $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw]; if (!$yoqasmiegcmcqaus->qumqowkwyaceeqwu($uoomaookgsyciacm)) { goto owmuceyswmgueasi; } $this->yqkwsouguwgoywcw(''); owmuceyswmgueasi: mwsmsguqqkcwiiuk: $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()]; $gqswsiquqaayuakq = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($gqswsiquqaayuakq) === 6) { goto eogwckcymuugikuy; } $this->yqkwsouguwgoywcw(__("\102\x75\x64\147\145\x74\x20\x63\141\x6e\47\164\x20\142\145\x20\141\144\144\54\40\x73\157\155\x65\x20\x72\145\x71\165\x69\162\x65\40\146\151\145\x6c\144\x73\x20\x6e\157\164\40\163\x65\164\56", PR__PKG__OPTIMIZATION_MANAGER)); goto msemumccgceyugmg; eogwckcymuugikuy: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto eeauyscekuckoues; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas]); eeauyscekuckoues: msemumccgceyugmg: wagqgeqymeqoeuyi: qoqskyuuwueqkquk: iwsuawwqomaowuii: wcugqegqsuuuwqao: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); if (!$uamcoiueqaamsqma) { goto asiqwuoswmigcaki; } $umwqusowiqmyseom->add_order_note($uamcoiueqaamsqma); asiqwuoswmigcaki: } ciykoyeioqgyaeqo: parent::umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, $cawesmkieccckaae, $wmgiiumwscoyqkqa); } public function micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::kumuoysauoagaiiy: $ucicuwcaawugkseg = ManipulateArray::get($ymkomoccmymcoiea, self::gouqcwikiiygyasc); $euceoqscgmweosya = ManipulateTerm::igawqaomowicuayw($ucicuwcaawugkseg, "\x64\x61\x74\x65\x5f\x74\x79\160\x65", true); if ($euceoqscgmweosya) { goto emmsycooskoqmgeg; } $euceoqscgmweosya = self::qummiiakyucoycws; emmsycooskoqmgeg: $qmeuaeiseuacgiqc = $this->oycgwasemqgaskiu(); if ($qmeuaeiseuacgiqc) { goto acsqgiuageaasiyy; } $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\131\x2d\155\x2d\x64")); $qmeuaeiseuacgiqc = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); if (ManipulateWoocommerce::okeikygoukyckqcc($isweyuoisomqyaag, self::smsioacowoikwikc)) { goto mugqyyeayeyggqqk; } if (!is_string($qmeuaeiseuacgiqc)) { goto ouamogymawucwswu; } $this->expire = $qmeuaeiseuacgiqc; ouamogymawucwswu: mugqyyeayeyggqqk: acsqgiuageaasiyy: $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\x59\x2d\x6d\x2d\144")); $uomewyckeuqoqocu[Budget::wcoquosyucmegcsq] = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); goto mqicocmqegwukkwg; case self::eymwucuaaiiciymc: $uomewyckeuqoqocu[Budget::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; goto mqicocmqegwukkwg; case self::kgyawuuygekasmwc: $uomewyckeuqoqocu[Budget::iiooageieusuyomy] = $eqgoocgaqwqcimie == 1 ? Budget::yygyasgygkeqacou : Budget::cwoackywkgsameww; goto mqicocmqegwukkwg; default: } qgeugwymkkiacwoc: mqicocmqegwukkwg: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\160\x72\157\x64\x75\x63\164", $eygsasmqycagyayw->get("\x70\x72\x6f\144\x75\143\164\x2e\152\x73"))->simswskycwagoeqy()); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::iwyueouqaqegmcas, ["\163\x74\x61\x72\x74\137\x64\x61\164\x65\137\x6e\157\164\137\x76\141\x6c\x69\144" => __("\x53\164\141\162\x74\40\104\141\164\x65\40\151\163\40\x6e\x6f\x74\40\x61\x20\166\141\x6c\x69\x64\40\144\141\164\145\x2e", PR__PKG__OPTIMIZATION_MANAGER), "\163\164\141\162\164\x5f\x64\141\164\145\x5f\162\x65\x71\165\151\x72\x65" => __("\x50\x6c\x65\x61\163\x65\x20\x66\x69\x6c\x6c\x20\x73\x74\x61\162\164\40\144\x61\x74\145\x2e", PR__PKG__OPTIMIZATION_MANAGER), "\x73\x74\x61\162\x74\x5f\x64\141\x74\145\137\160\141\163\163\145\x64" => __("\x59\157\x75\x20\x43\141\156\40\x6e\x6f\164\x20\165\x73\145\x20\x70\141\163\x73\x65\x64\40\144\x61\164\145\40\146\x6f\162\40\x73\x74\141\x72\x74\x20\x64\141\164\x65\x2e", PR__PKG__OPTIMIZATION_MANAGER)]); parent::enqueue(); } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $mykomoygwwmoksge = Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []); if (!$mykomoygwwmoksge) { goto oomguqikqokqwgku; } $xwwgygqkqwuaqwsa = $this->qqmwsmimiiiqkooo(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\163\x74\141\164\151\163\x74\151\x63\x73", ["\x6c\x65\x76\x65\x6c\x73" => $xwwgygqkqwuaqwsa, "\x74\151\164\154\145" => Setting::eiwcuqigayigimak(Setting::csascsakmmskewuy, ''), "\x69\164\x65\x6d\x73" => Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []), "\143\x6f\x6c\x75\155\x6e\x73" => [self::qescuiwgsyuikume => ''] + $xwwgygqkqwuaqwsa, "\144\x65\x73\x63\x72\151\160\x74\151\157\156" => Setting::eiwcuqigayigimak(Setting::wimciyacmqeewiqk, '')]); oomguqikqokqwgku: return $ewgwqamkygiqaawc; } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::cwgqacsqwyukoeiy)) { goto wyuemgggaqogsmsq; } $cmwygeyygwqaemaq = Setting::eiwcuqigayigimak(Setting::yuwgaqcmuqeeyqmi); if (!$cmwygeyygwqaemaq) { goto samwkqgwouggsguc; } $eosogusikmqwywgs = ManipulateBootstrap::oockkqiqsssakuug($cmwygeyygwqaemaq, self::ckcawaoawwioqecq, [], false); $ikgwqyuyckaewsow[] = Form::wowyaacgaccyeici($eosogusikmqwywgs)->jyumyyugiwwiqomk(0); samwkqgwouggsguc: $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::imeuukiiccuqqosc, __("\123\164\x61\162\x74\40\x42\165\x64\x67\145\x74\40\x44\x61\164\145", PR__PKG__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu()->cyuyuseegoqgwmas(); wyuemgggaqogsmsq: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }
