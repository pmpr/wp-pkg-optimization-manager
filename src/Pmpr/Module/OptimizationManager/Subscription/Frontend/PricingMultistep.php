<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce11a36a4e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Frontend\PurchaseMultistep; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class PricingMultistep extends PurchaseMultistep { use EngineTrait; const qqiyaykqumkcwgqo = self::oksogsuoasasycco . "\x63\150\157\151\x63\145\x5f\157\x72\144\x65\x72"; const swcaqkogoecouaki = self::oksogsuoasasycco . "\x63\150\157\x69\143\145\137\x6f\162\x64\x65\162\137\164\x79\x70\x65"; public function __construct() { $this->swqsasqieqqgusew(Pricing::symcgieuakksimmu()); $this->componentID = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::ocwsuwyiiasigqaa, 0); parent::__construct(); } public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk($qqscaoyqikuyeoaw); switch ($qqscaoyqikuyeoaw) { case self::swcaqkogoecouaki: $qookweymeqawmcwo["\x6f\162\x64\x65\x72\137\164\171\160\x65\163"] = [Constants::uswkskaqiieoyacg => [Constants::qescuiwgsyuikume => __("\102\165\171\x20\x61\40\x73\x75\x62\x73\x63\162\151\x70\x74\151\x6f\x6e", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mmosseaieyykmacg], Constants::mayesweykoooyugy => [Constants::qescuiwgsyuikume => __("\102\x75\171\40\x65\170\164\162\141\x20\x63\x6f\x69\x6e\x73", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mwayoguieimqyksk]]; goto sqiciiuwmykocycc; case self::qqiyaykqumkcwgqo: $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\x70\x6c\x61\156\x73" => $this->uykissogmuaaocsg()->aackauiyyagmeqso(true), "\x65\170\x74\x72\141\x73" => $this->uykissogmuaaocsg()->ycmmosmyyiycyeug(true), "\x63\x6f\151\x6e\x5f\155\x61\x73\153" => __("\45\x73\x20\x63\157\151\156", PR__MDL__OPTIMIZATION_MANAGER), "\144\151\x73\x63\x6f\x75\156\x74\137\x6d\x61\163\153" => __("\45\163\40\x4f\x46\x46", PR__MDL__OPTIMIZATION_MANAGER), "\163\x65\x72\x76\x69\143\145\163\137\143\x6f\163\x74" => __("\x53\x65\x72\x76\151\x63\145\163\40\103\x6f\x73\x74", PR__MDL__OPTIMIZATION_MANAGER)]); goto sqiciiuwmykocycc; } eequksumcoogyoem: sqiciiuwmykocycc: return $qookweymeqawmcwo; } public function oqcaaiewkewqgoww() : array { $asuggasaseaacmqu = parent::oqcaaiewkewqgoww(); $asuggasaseaacmqu[self::swcaqkogoecouaki] = ["\143\x6c\141\163\x73" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::goqyyukkiquugaca, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\103\x68\157\x69\x63\x65\40\117\x72\144\x65\x72\40\124\171\160\x65", PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __("\x55\163\x65\162\40\163\x68\x6f\x75\x6c\x64\x20\x64\145\164\145\162\x6d\x69\x6e\x65\x20\167\x68\141\164\x20\x6b\151\156\x64\x20\x6f\146\40\160\x72\x6f\144\165\143\164\40\x68\145\x2f\163\x68\x65\x20\156\145\x65\144\163\56", PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 2]; $asuggasaseaacmqu[self::qqiyaykqumkcwgqo] = ["\x63\x6c\141\163\x73" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::imoykkmkkkaqgouo, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\x43\150\x6f\151\143\x65\x20\x4f\x72\144\145\x72", PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __("\x55\163\145\162\40\x73\150\157\x75\x6c\144\40\x64\x65\x74\x65\162\155\151\156\x65\x20\167\150\141\x74\40\x70\x72\x6f\144\x75\143\x74\40\150\x65\57\x73\150\x65\40\x6e\145\x65\x64\163\x2e", PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 3]; $asuggasaseaacmqu[self::ycgyyciaayaaocwu][Constants::kekcgssiyagioocg] = 4; return $asuggasaseaacmqu; } }
