<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eb1356fa95             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Panel; use Exception; use Pmpr\Module\DomainManager\Model\Domain as BaseDomain; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\OptimizationManager\Model\Budget; use Pmpr\Module\OptimizationManager\Model\Domain; use Pmpr\Module\OptimizationManager\Model\Page; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x6f\160\x74\x69\x6d\x69\x7a\x61\x74\151\157\156\55\x6d\141\x6e\141\x67\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\145\x74\55\x64\x6f\155\141\x69\156\163", ["\x61\162\147\163" => [], "\155\145\x74\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\x63\x61\x6c\154\x62\x61\x63\x6b" => [$this, "\167\x69\x71\165\x6d\153\155\x71\x6b\161\x6f\171\x63\161\x79\x69"]]); $this->register("\57\x67\x65\x74\55\142\165\144\x67\x65\x74\163", ["\x61\162\147\163" => [], "\x6d\x65\x74\x68\x6f\x64\163" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\142\141\x63\153" => [$this, "\153\167\141\165\x6f\153\141\x6f\x61\x73\x6f\x6d\163\151\155\x6b"]]); $this->register("\x2f\147\x65\x74\55\160\141\147\145\163", ["\x61\162\147\163" => [], "\x6d\145\164\150\157\x64\x73" => self::uigoseacoukemwqc, "\143\141\x6c\x6c\x62\x61\143\153" => [$this, "\151\x6b\x65\x67\x69\x77\x61\x67\155\161\155\x71\147\171\165\x79"]]); } public function koomwsoyuucccawk($aqmwamyiwgeeymqa, $meywaqqsugaoeyys) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto oomguqikqokqwgku; } $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\155\141\151\156"); if ($mokawwccycoiqeka) { goto mugqyyeayeyggqqk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\x6f\x6d\x61\x69\x6e\40\x6e\157\164\x20\160\141\x73\x73\145\144", PR__MDL__OPTIMIZATION_MANAGER), 400); goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, $meywaqqsugaoeyys, [$meywaqqsugaoeyys::qkmqmaeuyokqgemg => $mokawwccycoiqeka]); acsqgiuageaasiyy: oomguqikqokqwgku: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ikegiwagmqmqgyuy(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Page::symcgieuakksimmu()); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kqqiegkuqagcqsya; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $ciokmysiiuwmigum = BaseDomain::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $ueomouiqmosykioc && $ciokmysiiuwmigum)) { goto miweggwqeiaeweia; } $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); try { $siykeiywomwwuoiw = $ueomouiqmosykioc->kqewyqqqiyiouaou([self::meksegaoamowuwoq => $ycoeoaakqyskgykq, self::ucmueuwwcmocgmig => [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg], $swgwkyqkakceqeia->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $swgwkyqkakceqeia->myywwqkyiwawwquy($swgwkyqkakceqeia::qkmqmaeuyokqgemg)]], $ciokmysiiuwmigum->cokoiaeeomgssqgy() => [self::euoaaiqkqcqcgeco => self::ycasqqegycucigcy, self::ciyoccqkiamemcmm => [$ueomouiqmosykioc->myywwqkyiwawwquy($ueomouiqmosykioc::qkmqmaeuyokqgemg), $ciokmysiiuwmigum->kumuygiiqswoyasy(true)]]]); if ($siykeiywomwwuoiw) { goto guykyqecgswcsmws; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\145\x72\166\x69\x63\x65\x20\x75\156\x61\166\x61\x69\x6c\141\x62\x6c\145\x20\x72\x69\147\x68\164\x20\156\x6f\167\56", PR__MDL__OPTIMIZATION_MANAGER), 503); goto kkumywowcoycymeo; guykyqecgswcsmws: $kugmgyukuauikwke = $ueomouiqmosykioc->iiqauwkoiguyeawu($siykeiywomwwuoiw, [$swgwkyqkakceqeia->kumuygiiqswoyasy(true), self::NAME, self::ciyoccqkiamemcmm, self::ciywsqoeiymemsys, self::ucmueuwwcmocgmig, $ciokmysiiuwmigum::igswcauwsgmeougs]); if ($kugmgyukuauikwke) { goto samwkqgwouggsguc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\x65\162\145\x20\x69\x73\x20\156\157\40\157\167\156\x65\x72\163\150\151\160\40\146\x6f\162\x20\x79\157\x75\40\x6f\156\x20\141\156\x79\40\x64\x6f\155\141\x69\x6e", PR__MDL__OPTIMIZATION_MANAGER)); goto wyuemgggaqogsmsq; samwkqgwouggsguc: $keccaugmemegoimu = $kugmgyukuauikwke; wyuemgggaqogsmsq: kkumywowcoycymeo: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $this->oemauiimmycumcsk($wgaoewqkwgomoaai->sagusgigmkeysock(), 500); } miweggwqeiaeweia: kqqiegkuqagcqsya: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kwauokaoasomsimk(WP_REST_Request $aqmwamyiwgeeymqa) { return $this->koomwsoyuucccawk($aqmwamyiwgeeymqa, Budget::symcgieuakksimmu()); } }
