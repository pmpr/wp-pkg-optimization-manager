<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148bb57d5d82             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\Model; use DateTime; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateDatetime; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\DomainManager\Model\RelatedModel; use Pmpr\Package\OptimizationManager\Setting; use WC_Product_Variable; class Domain extends RelatedModel { const BUDGETS = "\142\165\x64\x67\x65\164\x73"; const EXPIRE_DATE = "\x65\x78\x70\x69\162\x65\137\x64\x61\164\145"; const VALID_BUDGETS = "\x76\x61\x6c\151\x64\137" . self::BUDGETS; public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return array_merge(parent::eucukwckumgiyyww($oyuikeusicgqgwak), [$this->ggiieomioscuigco(self::BUDGETS)->uwmyqckcyamwaiww(Budget::class)->ckgquisaimmgwuyu()->acokiqqgsmoqaeyu()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\102\165\x64\147\145\x74\x73", PR__PKG__OPTIMIZATION_MANAGER)), $this->ggiieomioscuigco(self::PAGES)->uwmyqckcyamwaiww(Page::class)->ckgquisaimmgwuyu()->acokiqqgsmoqaeyu()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\x50\141\147\x65\163", PR__PKG__OPTIMIZATION_MANAGER))]); } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { $ywoucyskcquysiwc = $this->oewoakqisgcmuukc($ywoucyskcquysiwc, $mksyucucyswaukig); return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function oewoakqisgcmuukc($ywoucyskcquysiwc, $mksyucucyswaukig) : array { $mkecsaoyggsmwmau = $this->iscemaoqqckmkago(self::BUDGETS, $mksyucucyswaukig); if (!$mkecsaoyggsmwmau) { goto wiysogeqqwgioyka; } $kswooiskywsugoyw = []; $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $umkkkaqkwugkemce = Setting::aqasygcsqysmmyke(); $product = ManipulateWoocommerce::aqasygcsqysmmyke($umkkkaqkwugkemce); if (!$product instanceof WC_Product_Variable) { goto usquiuuyiyqaeyiu; } $oksqskmgoqiqciis = $product->get_children(); usquiuuyiyqaeyiu: $oksqskmgoqiqciis[] = $umkkkaqkwugkemce; foreach ($mkecsaoyggsmwmau as $gqswsiquqaayuakq) { $umwqusowiqmyseom = ManipulateWoocommerce::mmmcswscsiecscwg(ManipulateArray::get($gqswsiquqaayuakq, self::ORDER)); if (!$umwqusowiqmyseom) { goto suqkuqygkkgwyaie; } foreach ($umwqusowiqmyseom->get_items() as $cawesmkieccckaae) { if (!$cawesmkieccckaae) { goto aegysmeecgcgayyw; } $swycooiesccmusas = ManipulateArray::get($cawesmkieccckaae->get_data(), "\160\x72\157\x64\165\x63\x74\x5f\x69\144"); if (!in_array($swycooiesccmusas, $oksqskmgoqiqciis)) { goto gaomwagkcciesyqy; } $kswooiskywsugoyw[] = [self::DATETIME => $this->eciukqcoqmyacwow($umwqusowiqmyseom->get_date_paid(), ManipulateSetting::yoaaussmackoisuw()), self::TOTAL => ManipulateWoocommerce::mcgaskyiamgqmqgu($cawesmkieccckaae->get_total()), self::STATUS => ManipulateWoocommerce::wcqicmcuiewessgy($umwqusowiqmyseom), self::TYPE => "\x74\x68\x69\163\40\146\165\156\x63\164\151\157\156\141\154\x69\164\171\40\156\x6f\x74\40\167\x6f\x72\x6b\x20\171\145\164", self::PAGES => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::VALUE, ManipulateArray::get($gqswsiquqaayuakq, self::VALUE), $gqswsiquqaayuakq), self::START => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::START, ManipulateArray::get($gqswsiquqaayuakq, self::START), $gqswsiquqaayuakq), self::END => $yoqasmiegcmcqaus->kamyqikiiuwqiiuw(self::END, ManipulateArray::get($gqswsiquqaayuakq, self::END), $gqswsiquqaayuakq), "\x74\162\137\141\164\x74\162\x73" => ["\144\141\164\x61\55\150\162\x65\146" => $umwqusowiqmyseom->get_edit_order_url()]]; gaomwagkcciesyqy: aegysmeecgcgayyw: esuiysskoweawsue: } uqqaiagaeqgqgaiy: suqkuqygkkgwyaie: uguigkcmukuouway: } qicwaskssogcokgm: if (!$kswooiskywsugoyw) { goto soaccwqimeksgwiw; } $ywoucyskcquysiwc["\x6f\x72\x64\x65\x72\x73"] = [self::ICON => IconFontawesomeInterface::ICON_BAG_SHOPPING, self::TITLE => __("\x4f\162\144\x65\x72\x73", PR__PKG__OPTIMIZATION_MANAGER), self::CONTENT => ManipulateHTML::kuumcaywkqiasisk($kswooiskywsugoyw, [self::DATETIME => __("\x4f\x72\144\145\162\x20\x44\141\x74\145\164\x69\x6d\145", PR__PKG__OPTIMIZATION_MANAGER), self::TOTAL => __("\x4f\162\x64\x65\162\40\124\157\164\x61\x6c", PR__PKG__OPTIMIZATION_MANAGER), self::STATUS => __("\117\162\x64\x65\x72\40\x53\164\x61\164\x75\163", PR__PKG__OPTIMIZATION_MANAGER), self::TYPE => __("\117\x72\144\x65\x72\40\x54\171\x70\x65", PR__PKG__OPTIMIZATION_MANAGER), self::PAGES => __("\x4e\x75\155\142\145\162\40\x6f\x66\40\120\141\x67\x65\163", PR__PKG__OPTIMIZATION_MANAGER), self::START => __("\x53\164\x61\x72\x74\40\x44\x61\164\145", PR__PKG__OPTIMIZATION_MANAGER), self::END => __("\105\156\144\40\x44\x61\164\145", PR__PKG__OPTIMIZATION_MANAGER)], ["\143\154\x61\x73\x73" => "\x74\x61\x62\x6c\145\x2d\x73\x74\162\151\160\145\x64\40\164\141\x62\154\145\55\142\x6f\162\x64\145\x72\x6c\145\x73\163"])]; soaccwqimeksgwiw: wiysogeqqwgioyka: return $ywoucyskcquysiwc; } public function giiqwciomksuiymm($yygmoeguaqyumuui = []) : array { $yygmoeguaqyumuui[self::VALID_BUDGETS] = __("\x56\x61\154\151\x64\40\102\x75\144\147\145\x74\163", PR__PKG__OPTIMIZATION_MANAGER); $yygmoeguaqyumuui[self::EXPIRE_DATE] = __("\114\141\x73\x74\x20\x45\170\160\x69\x72\145\40\x44\141\164\x65", PR__PKG__OPTIMIZATION_MANAGER); return parent::giiqwciomksuiymm($yygmoeguaqyumuui); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::EXPIRE_DATE: $eeyksyiaqguqogak = Budget::symcgieuakksimmu()->oqomcmyuuakigusk([self::DOMAIN_ID => $this->keeuqgyooycqoygw($mksyucucyswaukig), self::END => [self::OPERATOR => self::GE_SYMBOL, self::VALUE => new DateTime()]]); if (!$eeyksyiaqguqogak) { goto syiqkaasoueowwui; } $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu(self::END, ManipulateArray::get($eeyksyiaqguqogak, self::END)); syiqkaasoueowwui: goto skkamseieeusycye; case self::VALID_BUDGETS: $eqgoocgaqwqcimie = 0; $mkecsaoyggsmwmau = $this->iscemaoqqckmkago(self::BUDGETS, $mksyucucyswaukig); if (!$mkecsaoyggsmwmau) { goto wmywuusgukmmaams; } foreach ($mkecsaoyggsmwmau as $gqswsiquqaayuakq) { $qmeuaeiseuacgiqc = ManipulateArray::get($gqswsiquqaayuakq, self::END); $ggkaciewmeqmgckg = ManipulateArray::get($gqswsiquqaayuakq, self::START); if (!ManipulateDatetime::awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc)) { goto cmegwsegsosyqcai; } $eqgoocgaqwqcimie += ManipulateArray::get($gqswsiquqaayuakq, self::VALUE, 0); cmegwsegsosyqcai: ewymsmkkiksgwysk: } giaacoqqqsekcayy: wmywuusgukmmaams: goto skkamseieeusycye; } cgiscsqwwgqqaeqi: skkamseieeusycye: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
