<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62400eebcbf69             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\ComponentManager\Product as BaseClass; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\OptimizationManager\Interfaces\CommonInterface; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain as OptDomain; use Pmpr\Module\OptimizationManager\Traits\CommonTrait; use WC_Order_Item_Product; class Product extends BaseClass implements CommonInterface { const kgyawuuygekasmwc = "\x6c\x65\166\145\x6c"; const imeuukiiccuqqosc = "\163\164\141\x72\164\x5f\x62\x75\x64\147\x65\164\x5f\144\141\x74\x65"; use CommonTrait; public function __construct($wksoawcgagcgoask = null, $product = null) { $this->backlinkable = true; parent::__construct($wksoawcgagcgoask, $product); } protected ?string $expire = null; public function oycgwasemqgaskiu() : ?string { return $this->expire; } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\165\x6c\164\x69\137\x73\164\145\160\137\x63\x68\145\143\x6b\137\x76\x61\x72\x69\141\x74\x69\x6f\x6e\163"), [$this, "\x6f\x67\161\x6b\155\155\x6b\x61\157\x63\x61\x61\155\x71\x73\x6d"], 10, 4)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\155\x75\154\164\x69\137\163\164\x65\160\137\166\x61\x72\151\141\164\151\x6f\x6e\x73\137\142\x65\146\157\162\x65\x5f\x61\144\x64\137\x74\157\x5f\143\141\162\164"), [$this, "\x6f\x63\143\x67\145\x75\x77\143\161\163\153\x73\171\171\171\171"], 10, 3); parent::kgquecmsgcouyaya(); } public function occgeuwcqsksyyyy($qecuekqmeaiykeek, $product, $mokawwccycoiqeka) { if (!(ManipulateWoocommerce::omwkqcuwceweymcc($product) == $this->aqasygcsqysmmyke())) { goto scisgsyemmsekgos; } if (!$this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia)) { goto egyyiccaeeiooaua; } ManipulateArray::unset($qecuekqmeaiykeek, 0); egyyiccaeeiooaua: scisgsyemmsekgos: return $qecuekqmeaiykeek; } public function ogqkmmkaocaamqsm($uamcoiueqaamsqma, $product, $mokawwccycoiqeka, $qecuekqmeaiykeek) { if (!(ManipulateWoocommerce::omwkqcuwceweymcc($product) == $this->aqasygcsqysmmyke())) { goto wgewmqieuamsoayy; } if ($qecuekqmeaiykeek && is_array($qecuekqmeaiykeek)) { goto omqiayeucoioqoao; } $uamcoiueqaamsqma = __("\x4e\157\40\x76\141\x72\151\x61\164\151\157\156\x73\x20\x73\x65\x6c\145\x63\x74\145\x64", PR__MOD__OPTIMIZATION_MANAGER); goto ugqaaewwmkocwwgy; omqiayeucoioqoao: if (!(count($qecuekqmeaiykeek) < 2)) { goto igooksugieceoege; } if (!$this->gaiasoueuycmiwcm($mokawwccycoiqeka, $wiiucqsygckgwcia)) { goto cewmoqyysgsmuiya; } $uamcoiueqaamsqma = sprintf(__("\x64\157\x6d\141\151\x6e\40\x25\163\x2c\40\141\x6c\x72\145\141\144\x79\x20\150\141\x73\x20\x66\162\145\145\40\x76\x65\x72\163\x69\x6f\156\x2c\x20\x70\x6c\145\x61\x73\145\x20\141\144\144\40\x6d\157\162\x65\40\166\141\x72\151\x61\164\151\x6f\x6e\40\164\x6f\x20\x63\157\x6e\164\151\156\165\x65", PR__MOD__OPTIMIZATION_MANAGER), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($wiiucqsygckgwcia, self::ciyoccqkiamemcmm))); cewmoqyysgsmuiya: igooksugieceoege: ugqaaewwmkocwwgy: wgewmqieuamsoayy: return $uamcoiueqaamsqma; } public function gaiasoueuycmiwcm($mokawwccycoiqeka, &$wiiucqsygckgwcia) : bool { $myagqecycsaiyqsk = false; $wiiucqsygckgwcia = $this->gugmsucsyeywucoe($mokawwccycoiqeka); if (!$wiiucqsygckgwcia) { goto wkeuuycukmuqiaom; } $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); if (!$immcykkykeqgkgwg) { goto sggawugoykqcmsug; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto ueigkucgaucgeimc; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); if (!$yoqasmiegcmcqaus) { goto kqgcyoscsusgoaqi; } $myagqecycsaiyqsk = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([self::iiooageieusuyomy => self::yygyasgygkeqacou, self::ciyoccqkiamemcmm => "\60", Budget::qkmqmaeuyokqgemg => $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia)]); kqgcyoscsusgoaqi: ueigkucgaucgeimc: sggawugoykqcmsug: wkeuuycukmuqiaom: return $myagqecycsaiyqsk; } public function umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, WC_Order_Item_Product $cawesmkieccckaae, bool $wmgiiumwscoyqkqa) { $umwqusowiqmyseom = $cawesmkieccckaae->get_order(); if (!($umwqusowiqmyseom && $this->qaueesycysuwggmc())) { goto ouamogymawucwswu; } try { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = OptDomain::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $yoqasmiegcmcqaus && $immcykkykeqgkgwg)) { goto qgeugwymkkiacwoc; } $wwwcwiueuuyyokia = null; $fooqqkeicsiaascw = null; if (!($wiiucqsygckgwcia && !$wmgiiumwscoyqkqa)) { goto wakmayaoqoskekqy; } $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($wiiucqsygckgwcia); wakmayaoqoskekqy: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($wiiucqsygckgwcia); if (!$wwwcwiueuuyyokia) { goto mwsmsguqqkcwiiuk; } $fooqqkeicsiaascw = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $akyiigeggqowmqqq, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto qmuwoecuacmkwgem; } $fooqqkeicsiaascw = $swgwkyqkakceqeia->keeuqgyooycqoygw($sogksuscggsicmac); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\103\141\156\x20\x6e\x6f\164\40\x63\x72\145\x61\164\145\40\157\160\164\x20\x64\157\155\141\151\x6e\72\40\45\x73", PR__MOD__OPTIMIZATION_MANAGER)); owmuceyswmgueasi: eeauyscekuckoues: if (!$fooqqkeicsiaascw) { goto mqicocmqegwukkwg; } if ($yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()])) { goto ciykoyeioqgyaeqo; } $isweyuoisomqyaag = $this->oyqguwgqyigmuwow($cawesmkieccckaae, $icwicymcioeyeyek); if (!$isweyuoisomqyaag) { goto asiqwuoswmigcaki; } $wwgucssaecqekuek = ManipulateArray::get($isweyuoisomqyaag, self::ysskgssgwuwmqwym); $mksyucucyswaukig = ManipulateArray::get($isweyuoisomqyaag, self::ckmqoekmugkggeym); $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\131\55\x6d\x2d\144")); if (!$wwgucssaecqekuek) { goto wcugqegqsuuuwqao; } if (!ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, self::smsioacowoikwikc)) { goto msemumccgceyugmg; } $uoomaookgsyciacm = [$yoqasmiegcmcqaus::ciyoccqkiamemcmm => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm), $yoqasmiegcmcqaus::iiooageieusuyomy => ManipulateArray::get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy), $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw]; if (!$yoqasmiegcmcqaus->qumqowkwyaceeqwu($uoomaookgsyciacm)) { goto eogwckcymuugikuy; } $this->yqkwsouguwgoywcw(''); eogwckcymuugikuy: msemumccgceyugmg: $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $fooqqkeicsiaascw, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $cawesmkieccckaae->get_id()]; $gqswsiquqaayuakq = array_merge($wwgucssaecqekuek, $gqswsiquqaayuakq); if (count($gqswsiquqaayuakq) === 6) { goto qoqskyuuwueqkquk; } $this->yqkwsouguwgoywcw(__("\102\165\x64\147\x65\x74\40\x63\x61\156\47\x74\40\142\x65\40\141\x64\x64\x2c\x20\163\157\x6d\145\x20\x72\145\161\x75\151\162\145\40\146\x69\x65\x6c\x64\163\40\x6e\157\x74\x20\x73\x65\164\x2e", PR__MOD__OPTIMIZATION_MANAGER)); goto iwsuawwqomaowuii; qoqskyuuwueqkquk: $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto wagqgeqymeqoeuyi; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas]); wagqgeqymeqoeuyi: iwsuawwqomaowuii: wcugqegqsuuuwqao: asiqwuoswmigcaki: ciykoyeioqgyaeqo: mqicocmqegwukkwg: qgeugwymkkiacwoc: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); if (!$uamcoiueqaamsqma) { goto emmsycooskoqmgeg; } $umwqusowiqmyseom->add_order_note($uamcoiueqaamsqma); emmsycooskoqmgeg: } ouamogymawucwswu: parent::umeweaskauicgikc($icwicymcioeyeyek, $wiiucqsygckgwcia, $cawesmkieccckaae, $wmgiiumwscoyqkqa); } public function micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek) { switch ($sqeykgyoooqysmca) { case self::kumuoysauoagaiiy: $ucicuwcaawugkseg = ManipulateArray::get($ymkomoccmymcoiea, self::gouqcwikiiygyasc); $euceoqscgmweosya = ManipulateTerm::igawqaomowicuayw($ucicuwcaawugkseg, "\x64\x61\164\x65\137\164\x79\160\x65", true); if ($euceoqscgmweosya) { goto oomguqikqokqwgku; } $euceoqscgmweosya = self::qummiiakyucoycws; oomguqikqokqwgku: $qmeuaeiseuacgiqc = $this->oycgwasemqgaskiu(); if ($qmeuaeiseuacgiqc) { goto wyuemgggaqogsmsq; } $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\131\55\155\x2d\x64")); $qmeuaeiseuacgiqc = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); if (!(is_string($qmeuaeiseuacgiqc) && !ManipulateWoocommerce::okeikygoukyckqcc($isweyuoisomqyaag, self::smsioacowoikwikc))) { goto samwkqgwouggsguc; } $this->expire = $qmeuaeiseuacgiqc; samwkqgwouggsguc: wyuemgggaqogsmsq: $ggkaciewmeqmgckg = ManipulateArray::get($icwicymcioeyeyek, self::imeuukiiccuqqosc, date("\x59\55\x6d\55\144")); $uomewyckeuqoqocu[self::wcoquosyucmegcsq] = $this->myaugesymggoiooy($ggkaciewmeqmgckg, $eqgoocgaqwqcimie, $euceoqscgmweosya); goto mugqyyeayeyggqqk; case self::eymwucuaaiiciymc: $uomewyckeuqoqocu[self::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; goto mugqyyeayeyggqqk; case self::kgyawuuygekasmwc: $uomewyckeuqoqocu[self::iiooageieusuyomy] = $eqgoocgaqwqcimie == 1 ? self::yygyasgygkeqacou : self::cwoackywkgsameww; goto mugqyyeayeyggqqk; default: } acsqgiuageaasiyy: mugqyyeayeyggqqk: return parent::micmaeaccooaeuim($uomewyckeuqoqocu, $isweyuoisomqyaag, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $sqeykgyoooqysmca, $icwicymcioeyeyek); } public function enqueue() { if (!($eygsasmqycagyayw = $this->miocmcoykayoyyau())) { goto guykyqecgswcsmws; } $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis("\x70\x72\x6f\144\165\x63\x74", $eygsasmqycagyayw->get("\x70\x72\x6f\x64\x75\143\x74\56\x6a\163"))->simswskycwagoeqy()); $eygsasmqycagyayw->ieayqiyiuuguowyq(self::iwyueouqaqegmcas, ["\163\x74\141\x72\x74\137\x64\x61\164\x65\137\x6e\157\x74\137\x76\x61\x6c\x69\144" => __("\123\x74\141\162\164\40\104\x61\164\x65\40\151\163\40\156\x6f\x74\40\141\40\166\141\x6c\151\144\x20\144\141\164\x65\x2e", PR__MOD__OPTIMIZATION_MANAGER), "\163\164\141\162\164\x5f\144\x61\164\x65\137\162\x65\161\165\151\162\145" => __("\120\154\x65\x61\x73\x65\x20\146\151\154\154\x20\163\164\141\162\164\40\144\x61\164\x65\56", PR__MOD__OPTIMIZATION_MANAGER), "\x73\x74\141\x72\164\137\x64\x61\x74\145\137\160\x61\163\163\x65\144" => __("\x59\157\x75\40\x43\141\156\x20\156\157\x74\x20\x75\163\x65\40\160\x61\x73\163\x65\x64\40\x64\x61\x74\x65\40\146\157\162\40\x73\164\x61\x72\164\x20\144\x61\164\145\x2e", PR__MOD__OPTIMIZATION_MANAGER)]); guykyqecgswcsmws: parent::enqueue(); } public function iqomsiuaqegycowu($ewgwqamkygiqaawc, $product) : string { $mykomoygwwmoksge = Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []); if (!$mykomoygwwmoksge) { goto kkumywowcoycymeo; } $xwwgygqkqwuaqwsa = $this->qqmwsmimiiiqkooo(); $ewgwqamkygiqaawc = $this->iuygowkemiiwqmiw("\163\x74\x61\x74\151\163\x74\151\143\163", ["\154\145\166\x65\x6c\x73" => $xwwgygqkqwuaqwsa, "\164\151\x74\x6c\x65" => Setting::eiwcuqigayigimak(Setting::csascsakmmskewuy, ''), "\x69\164\145\155\163" => Setting::eiwcuqigayigimak(Setting::ueagcuikcyyoyymi, []), "\143\x6f\x6c\165\x6d\156\163" => [self::qescuiwgsyuikume => ''] + $xwwgygqkqwuaqwsa, "\144\145\x73\x63\162\151\x70\164\x69\157\156" => Setting::eiwcuqigayigimak(Setting::wimciyacmqeewiqk, '')]); kkumywowcoycymeo: return $ewgwqamkygiqaawc; } public function ewweaossowcqywaw(array $qookweymeqawmcwo, array $ikgwqyuyckaewsow, ?string $qqscaoyqikuyeoaw = null) : array { if (!($qqscaoyqikuyeoaw === self::cwgqacsqwyukoeiy)) { goto kqqiegkuqagcqsya; } $cmwygeyygwqaemaq = Setting::eiwcuqigayigimak(Setting::yuwgaqcmuqeeyqmi); if (!$cmwygeyygwqaemaq) { goto miweggwqeiaeweia; } $eosogusikmqwywgs = ManipulateBootstrap::oockkqiqsssakuug($cmwygeyygwqaemaq, self::ckcawaoawwioqecq, [], false); $ikgwqyuyckaewsow[] = Form::wowyaacgaccyeici($eosogusikmqwywgs)->jyumyyugiwwiqomk(0); miweggwqeiaeweia: $ikgwqyuyckaewsow[] = Form::cmmsoiggwwuyqqks(self::imeuukiiccuqqosc, __("\x53\x74\x61\x72\x74\x20\x42\165\144\147\145\x74\40\104\141\164\145", PR__MOD__OPTIMIZATION_MANAGER))->cgeiiwakumywwowu()->jyumyyugiwwiqomk(100)->qqoqoqmusaueoyca()->uuagoowwgcuosuuu()->cyuyuseegoqgwmas(); kqqiegkuqagcqsya: return parent::ewweaossowcqywaw($qookweymeqawmcwo, $ikgwqyuyckaewsow, $qqscaoyqikuyeoaw); } }
