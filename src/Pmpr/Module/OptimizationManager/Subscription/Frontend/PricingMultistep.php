<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7d63a82ae5             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager\Subscription\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Frontend\PurchaseMultistep; use Pmpr\Module\OptimizationManager\Setting; use Pmpr\Module\OptimizationManager\Subscription\Traits\EngineTrait; class PricingMultistep extends PurchaseMultistep { use EngineTrait; const qqiyaykqumkcwgqo = self::oksogsuoasasycco . "\143\150\157\x69\x63\145\x5f\157\162\x64\145\x72"; const swcaqkogoecouaki = self::oksogsuoasasycco . "\143\x68\157\x69\143\x65\x5f\157\x72\144\x65\162\x5f\x74\x79\x70\x65"; public function __construct() { $this->swqsasqieqqgusew(Pricing::symcgieuakksimmu()); $this->componentID = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::ocwsuwyiiasigqaa, 0); parent::__construct(); } public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk($qqscaoyqikuyeoaw); switch ($qqscaoyqikuyeoaw) { case self::swcaqkogoecouaki: $qookweymeqawmcwo["\x6f\162\144\145\162\x5f\x74\171\160\x65\x73"] = [Constants::uswkskaqiieoyacg => [Constants::qescuiwgsyuikume => __("\102\x75\171\x20\x61\x20\163\165\x62\163\x63\x72\151\160\x74\x69\x6f\x6e", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mmosseaieyykmacg], Constants::mayesweykoooyugy => [Constants::qescuiwgsyuikume => __("\102\x75\171\x20\145\170\x74\x72\x61\x20\x63\x6f\x69\x6e\163", PR__MDL__OPTIMIZATION_MANAGER), Constants::qgqyauaqwqmqseim => IconInterface::mwayoguieimqyksk]]; goto ikqqskkqqwmwssoo; case self::qqiyaykqumkcwgqo: $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\x70\x6c\x61\x6e\x73" => $this->uykissogmuaaocsg()->aackauiyyagmeqso(true), "\x65\x78\164\x72\x61\163" => $this->uykissogmuaaocsg()->ycmmosmyyiycyeug(true), "\143\x6f\x69\x6e\137\155\141\163\153" => __("\x25\163\x20\x63\157\151\x6e", PR__MDL__OPTIMIZATION_MANAGER), "\x64\151\163\x63\x6f\165\x6e\x74\137\155\141\x73\x6b" => __("\x25\163\x20\117\x46\106", PR__MDL__OPTIMIZATION_MANAGER), "\x73\x65\x72\166\151\x63\x65\163\x5f\143\157\163\x74" => __("\123\x65\162\x76\151\x63\x65\x73\x20\x43\157\163\164", PR__MDL__OPTIMIZATION_MANAGER)]); goto ikqqskkqqwmwssoo; } aomysykcgikegiau: ikqqskkqqwmwssoo: return $qookweymeqawmcwo; } public function oqcaaiewkewqgoww() : array { $asuggasaseaacmqu = parent::oqcaaiewkewqgoww(); $asuggasaseaacmqu[self::swcaqkogoecouaki] = ["\x63\154\141\163\x73" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::goqyyukkiquugaca, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\x43\150\x6f\x69\143\x65\40\x4f\x72\x64\x65\x72\40\x54\171\x70\145", PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __("\x55\x73\145\x72\x20\163\150\157\165\x6c\x64\x20\144\145\x74\145\x72\x6d\x69\x6e\145\40\167\150\141\164\x20\x6b\x69\x6e\x64\40\157\x66\x20\x70\162\x6f\x64\x75\143\164\x20\150\x65\x2f\163\150\x65\x20\x6e\x65\x65\144\x73\x2e", PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 2]; $asuggasaseaacmqu[self::qqiyaykqumkcwgqo] = ["\143\x6c\x61\x73\163" => self::class, Constants::qgqyauaqwqmqseim => IconInterface::imoykkmkkkaqgouo, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __("\x43\150\x6f\151\143\145\x20\x4f\162\144\x65\x72", PR__MDL__OPTIMIZATION_MANAGER), Constants::eqkeooqcsscoggia => __("\125\163\145\x72\x20\163\150\157\165\x6c\x64\x20\144\145\164\145\x72\x6d\151\x6e\145\40\167\150\x61\164\x20\x70\x72\x6f\144\165\143\x74\x20\150\145\57\x73\x68\145\40\x6e\145\x65\x64\163\56", PR__MDL__OPTIMIZATION_MANAGER)], Constants::kekcgssiyagioocg => 3]; $asuggasaseaacmqu[self::ycgyyciaayaaocwu][Constants::kekcgssiyagioocg] = 4; return $asuggasaseaacmqu; } }
