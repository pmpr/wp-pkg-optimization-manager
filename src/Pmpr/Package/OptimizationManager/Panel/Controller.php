<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c032485d0af             |
    |_______________________________________|
*/
 namespace Pmpr\Package\OptimizationManager\Panel; use Exception; use Pmpr\Package\DomainManager\Model\Domain as BaseDomain; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Package\DomainManager\Model\Ownership; use Pmpr\Package\OptimizationManager\Model\Budget; use Pmpr\Package\OptimizationManager\Model\Domain; use Pmpr\Package\OptimizationManager\Model\Page; use Pmpr\Package\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\157\x70\x74\151\155\151\x7a\141\x74\x69\157\156\x2d\x6d\141\156\x61\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\x74\55\144\x6f\155\141\151\156\163", ["\x61\x72\147\x73" => [], "\x6d\x65\x74\150\x6f\x64\163" => self::uigoseacoukemwqc, "\x63\141\154\154\142\141\143\153" => [$this, "\167\151\x71\165\155\153\155\161\x6b\161\x6f\171\x63\161\x79\x69"]]); $this->register("\x2f\147\x65\x74\55\x62\x75\x64\x67\x65\164\163", ["\x61\x72\x67\x73" => [], "\x6d\145\164\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\154\154\142\141\143\153" => [$this, "\153\x77\141\165\x6f\153\x61\157\141\x73\157\155\x73\151\x6d\x6b"]]); $this->register("\x2f\147\x65\x74\55\160\x61\x67\x65\163", ["\141\x72\x67\163" => [], "\155\145\164\150\x6f\144\163" => self::uigoseacoukemwqc, "\x63\x61\154\x6c\x62\x61\x63\x6b" => [$this, "\151\153\145\x67\151\x77\141\x67\155\161\x6d\161\x67\171\x75\171"]]); } public function koomwsoyuucccawk($aqmwamyiwgeeymqa, $meywaqqsugaoeyys) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto emmsycooskoqmgeg; } $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\155\141\x69\x6e"); if ($mokawwccycoiqeka) { goto mqicocmqegwukkwg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\155\x61\151\x6e\40\x6e\x6f\164\x20\x70\x61\x73\163\x65\144", PR__PKG__OPTIMIZATION_MANAGER), 400); goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $meywaqqsugaoeyys, [$meywaqqsugaoeyys::DOMAIN_ID => $mokawwccycoiqeka]); qgeugwymkkiacwoc: emmsycooskoqmgeg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ikegiwagmqmqgyuy(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Page::symcgieuakksimmu()); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto samwkqgwouggsguc; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $ciokmysiiuwmigum = BaseDomain::symcgieuakksimmu(); $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); try { $siykeiywomwwuoiw = $ueomouiqmosykioc->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ucmueuwwcmocgmig => [Ownership::CAP_OWNER, Ownership::CAP_RESTRICT], $swgwkyqkakceqeia->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::DOMAIN_ID), $swgwkyqkakceqeia->myywwqkyiwawwquy($swgwkyqkakceqeia::DOMAIN_ID)]], $ciokmysiiuwmigum->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::DOMAIN_ID), $ciokmysiiuwmigum->kumuygiiqswoyasy(true)]]]); if ($siykeiywomwwuoiw) { goto acsqgiuageaasiyy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\145\162\166\151\x63\x65\x20\165\x6e\141\166\141\x69\154\141\142\x6c\145\40\162\x69\147\150\x74\x20\156\157\167\x2e", PR__PKG__OPTIMIZATION_MANAGER), 503); goto oomguqikqokqwgku; acsqgiuageaasiyy: $kugmgyukuauikwke = $ueomouiqmosykioc->iiqauwkoiguyeawu($siykeiywomwwuoiw, [$swgwkyqkakceqeia->kumuygiiqswoyasy(true), self::NAME, self::ciyoccqkiamemcmm, self::ciywsqoeiymemsys, self::ucmueuwwcmocgmig, $ciokmysiiuwmigum::API_KEY]); if ($kugmgyukuauikwke) { goto ouamogymawucwswu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x54\150\145\x72\145\40\x69\163\x20\x6e\x6f\40\x6f\x77\x6e\145\162\163\150\151\x70\40\x66\157\x72\40\x79\x6f\x75\40\x6f\156\40\x61\156\171\x20\x64\x6f\155\x61\151\x6e", PR__PKG__OPTIMIZATION_MANAGER)); goto mugqyyeayeyggqqk; ouamogymawucwswu: $keccaugmemegoimu = $kugmgyukuauikwke; mugqyyeayeyggqqk: oomguqikqokqwgku: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($wgaoewqkwgomoaai->sagusgigmkeysock(), 500); } samwkqgwouggsguc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kwauokaoasomsimk(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Budget::symcgieuakksimmu()); } }
