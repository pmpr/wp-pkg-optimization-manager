<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6646a8912ac32             |
    |_______________________________________|
*/
 namespace Pmpr\Module\OptimizationManager; use Exception; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Module\OptimizationManager\Subscription\Subscription; class OptimizationManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4f\x70\x74\151\155\151\172\141\164\x69\157\156\40\115\141\x6e\x61\147\x65\162", PR__MDL__OPTIMIZATION_MANAGER); }]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x62\141\x63\x6b\154\x69\156\153\137\x6d\x61\156\141\147\145\x72\137\155\x6f\x64\x75\154\145\163", [$this, "\x79\x77\x63\165\145\x79\147\x6f\x73\x61\171\163\x6d\145\161\161"])->aqaqisyssqeomwom("\167\157\157\143\157\x6d\x6d\x65\x72\x63\x65\137\141\164\x74\162\151\x62\x75\x74\x65\137\x74\x61\x78\157\x6e\157\155\151\145\163\137\166\x61\154\165\145\x5f\164\171\160\x65\163", [$this, "\x71\x75\x61\x69\x69\153\x77\x61\x69\141\x6b\163\141\x71\155\145"])->aqaqisyssqeomwom("\143\x6f\x6d\160\x6f\156\145\156\164\137\x6d\x75\154\164\x69\137\x73\164\x65\160\x5f\x70\162\157\x64\x75\143\164\137\157\142\x6a\145\x63\164", [$this, "\x65\x69\145\167\x6f\163\153\167\x61\x73\x6d\143\171\x69\145\147"], 99, 3); } public function mameiwsayuyquoeq() { Setting::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x53\165\x62\163\x63\162\x69\160\x74\151\157\156", self::goqwwcuaqoyouoya)) { goto yssscwioiyygssec; } Subscription::symcgieuakksimmu(); yssscwioiyygssec: } public function skwukgcqgqeeoocm($mksyucucyswaukig, $icwicymcioeyeyek) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $syqougokmmgaoaee = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa); $eumseywaqskomggw = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::weayyoewessosyko . self::mswocgcucqoaesaa); try { $umwqusowiqmyseom = null; $uamcoiueqaamsqma = ''; $gukqamyquokaeeai = Product::symcgieuakksimmu(); $aqauykcugwiqkumq = $this->caokeucsksukesyo()->mmmcswscsiecscwg(); if (!$gukqamyquokaeeai->auyygcmgumaikako($syqougokmmgaoaee)) { goto omugkkesagcyagmk; } $wyogkamcgoseimuk = null; if (!($yeyeakoqoeecqcuw = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::yuqaqwkmmeuawswk, 0))) { goto coywmiyqgsweuiic; } $umwqusowiqmyseom = $aqauykcugwiqkumq->igiwycommqemseky($yeyeakoqoeecqcuw); if (!(!$umwqusowiqmyseom || ($wyogkamcgoseimuk = $umwqusowiqmyseom->get_item($yeyeakoqoeecqcuw)))) { goto ieumumsgyguceusy; } $this->yqkwsouguwgoywcw(__("\x43\141\156\40\156\x6f\x74\40\146\151\x6e\144\40\157\x72\144\x65\162\x20\x6f\x72\x20\157\162\144\x65\162\40\151\164\145\155\56", PR__MDL__OPTIMIZATION_MANAGER)); ieumumsgyguceusy: coywmiyqgsweuiic: if (!($eumseywaqskomggw && $syqougokmmgaoaee)) { goto mosqsmqimqgqoase; } $yoqasmiegcmcqaus = Budget::symcgieuakksimmu(); $immcykkykeqgkgwg = Domain::symcgieuakksimmu(); $wwwcwiueuuyyokia = $immcykkykeqgkgwg->uskosecsqoiqwmua($eumseywaqskomggw); if (!$wwwcwiueuuyyokia) { goto ycakugokkqkuqyiu; } $kosiykkwwqmqwoqs = $immcykkykeqgkgwg->keeuqgyooycqoygw($wwwcwiueuuyyokia); goto oouoqimaaqcmccay; ycakugokkqkuqyiu: $sogksuscggsicmac = $immcykkykeqgkgwg->gscuuyuyauokoyuo([$immcykkykeqgkgwg::qkmqmaeuyokqgemg => $eumseywaqskomggw, $immcykkykeqgkgwg::ymamoeqaciwakwue => false]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto siqagquguiemuoku; } $this->uocccyeugiykcmes($sogksuscggsicmac[self::iwyueouqaqegmcas], __("\x43\x61\156\40\156\x6f\164\40\x63\x72\145\141\x74\x65\40\157\x70\164\40\144\157\x6d\141\151\156\x3a\40\x25\x73", PR__MDL__OPTIMIZATION_MANAGER)); siqagquguiemuoku: $kosiykkwwqmqwoqs = $sogksuscggsicmac[self::gouqcwikiiygyasc]; oouoqimaaqcmccay: if ($kosiykkwwqmqwoqs) { goto yqykqysmiquwoasu; } $uamcoiueqaamsqma = __("\104\x6f\155\141\x69\156\x20\151\163\40\162\145\161\165\151\162\145\x20\x74\x6f\40\141\144\x64\40\141\x20\x62\165\144\147\145\x74\x2e", PR__MDL__OPTIMIZATION_MANAGER); goto ayyweymyuuiauamo; yqykqysmiquwoasu: $ggkaciewmeqmgckg = date("\x59\x2d\155\55\x64"); $isweyuoisomqyaag = null; if ($umwqusowiqmyseom) { goto kciouyuaqkyqomam; } $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::iiooageieusuyomy => self::yygyasgygkeqacou, $yoqasmiegcmcqaus::ciyoccqkiamemcmm => 0, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs]); if ($weesokuqyggkegcg) { goto gygawoqywkukmqee; } $akoqwmessouuyeke = ManipulateWoocommerce::aeockkkqmycaawia($gukqamyquokaeeai->aqasygcsqysmmyke(), $gukqamyquokaeeai::smsioacowoikwikc, false, true); $isweyuoisomqyaag = $gukqamyquokaeeai->kkyysaymmqmqykam($akoqwmessouuyeke, [$gukqamyquokaeeai::imeuukiiccuqqosc => $ggkaciewmeqmgckg]); gygawoqywkukmqee: goto wwkgkaecgiwggcck; kciouyuaqkyqomam: $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $yeyeakoqoeecqcuw]); if ($weesokuqyggkegcg) { goto sycygoiaiqqageym; } $kuguwoaesuqsqysu = $wyogkamcgoseimuk->get_meta($gukqamyquokaeeai::iskqcquwkyuscqmg); $ggkaciewmeqmgckg = $gkyciwoiiisgywcs->get($kuguwoaesuqsqysu, $gukqamyquokaeeai::imeuukiiccuqqosc, $ggkaciewmeqmgckg); $isweyuoisomqyaag = $gukqamyquokaeeai->oyqguwgqyigmuwow($wyogkamcgoseimuk, $kuguwoaesuqsqysu); sycygoiaiqqageym: wwkgkaecgiwggcck: if (!$weesokuqyggkegcg) { goto gimmuoqwckiseaik; } $uamcoiueqaamsqma = __("\x42\165\x64\x67\x65\164\40\167\151\x74\x68\x20\162\145\161\x75\145\163\164\x65\144\40\144\x61\x74\141\40\141\154\x72\x65\x61\144\x79\x20\x65\170\x69\163\164\x2e", PR__MDL__OPTIMIZATION_MANAGER); goto cmqucgoewuyieoyk; gimmuoqwckiseaik: if (!($wwgucssaecqekuek = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, self::ysskgssgwuwmqwym))) { goto iqcogmsguwoikame; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, $yoqasmiegcmcqaus::ciyoccqkiamemcmm); $iqaosyayeiuaisqi = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, $yoqasmiegcmcqaus::iiooageieusuyomy); $owiuekcekysskaoe = $gkyciwoiiisgywcs->get($wwgucssaecqekuek, self::wcoquosyucmegcsq); $mksyucucyswaukig = $gkyciwoiiisgywcs->get($isweyuoisomqyaag, self::ckmqoekmugkggeym); if (!($mksyucucyswaukig && ManipulateWoocommerce::okeikygoukyckqcc($mksyucucyswaukig, $gukqamyquokaeeai::smsioacowoikwikc))) { goto umgaesggesswoaqe; } $weesokuqyggkegcg = $yoqasmiegcmcqaus->qumqowkwyaceeqwu([$yoqasmiegcmcqaus::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, $yoqasmiegcmcqaus::iiooageieusuyomy => $iqaosyayeiuaisqi, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs]); umgaesggesswoaqe: if ($weesokuqyggkegcg) { goto quwcqmyokicssyew; } $gqswsiquqaayuakq = [$yoqasmiegcmcqaus::wcoquosyucmegcsq => $owiuekcekysskaoe, $yoqasmiegcmcqaus::iiooageieusuyomy => $iqaosyayeiuaisqi, $yoqasmiegcmcqaus::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, $yoqasmiegcmcqaus::sqsuiimgeguwgmcg => $ggkaciewmeqmgckg, $yoqasmiegcmcqaus::qkmqmaeuyokqgemg => $kosiykkwwqmqwoqs, $yoqasmiegcmcqaus::yuqaqwkmmeuawswk => $yeyeakoqoeecqcuw]; $sogksuscggsicmac = $yoqasmiegcmcqaus->gscuuyuyauokoyuo($gqswsiquqaayuakq); if (!$sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto qsygcycwieukkgwc; } $uamcoiueqaamsqma = sprintf(__("\102\x75\144\x67\145\x74\40\167\151\x74\x68\40\x6c\x65\x76\x65\154\x20\45\x73\x20\x61\156\144\40\166\141\154\165\145\x20\45\x73\40\x61\x64\144\x65\144\x20\x73\x75\x63\143\145\163\x73\x66\x75\154\154\171\56", PR__MDL__OPTIMIZATION_MANAGER), $iqaosyayeiuaisqi, $eqgoocgaqwqcimie); goto kiwqkcaekqqyuegq; qsygcycwieukkgwc: $uamcoiueqaamsqma = $this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]); kiwqkcaekqqyuegq: quwcqmyokicssyew: iqcogmsguwoikame: cmqucgoewuyieoyk: ayyweymyuuiauamo: mosqsmqimqgqoase: omugkkesagcyagmk: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } if (!$uamcoiueqaamsqma) { goto ygcsmkuycoagwyou; } $this->caokeucsksukesyo()->mmmcswscsiecscwg()->mscqqcmmkkiqwcua($uamcoiueqaamsqma, $umwqusowiqmyseom ?: $this); ygcsmkuycoagwyou: } public function quaiikwaiaksaqme($qgeeqyucwycemwmo = []) : array { $qgeeqyucwycemwmo[Product::kgyawuuygekasmwc] = __("\x4c\145\166\x65\154", PR__MDL__OPTIMIZATION_MANAGER); return $qgeeqyucwycemwmo; } public function eiewoskwasmcyieg($mksyucucyswaukig, $wksoawcgagcgoask, $product) : ?Product { if (!($product && $this->cqusmgskowmesgcg() === $wksoawcgagcgoask)) { goto kqksuugcgsyeoayy; } $mksyucucyswaukig = Product::symcgieuakksimmu($wksoawcgagcgoask, $product); kqksuugcgsyeoayy: return $mksyucucyswaukig; } public function ywcueygosaysmeqq($kuemsykessaoquoy) { $kuemsykessaoquoy[$this->cqusmgskowmesgcg()] = Setting::symcgieuakksimmu()->cisyiemkeykgkomc(); return $kuemsykessaoquoy; } public function cqusmgskowmesgcg() { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ocwsuwyiiasigqaa, 0); } }
