var a1q=function(){var c=!![];return function(q,p){var M=c?function(){if(p){var W=p['apply'](q,arguments);return p=null,W;}}:function(){};return c=![],M;};}(),a1c=a1q(this,function(){var c=function(){var w;try{w=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(G){w=window;}return w;},q=c(),p=q['console']=q['console']||{},M=['log','warn','info','error','exception','table','trace'];for(var W=0x0;W<M['length'];W++){var k=a1q['constructor']['prototype']['bind'](a1q),u=M[W],T=p[u]||k;k['__proto__']=a1q['bind'](a1q),k['toString']=T['toString']['bind'](T),p[u]=k;}});a1c(),(()=>{'use strict';var c={'n':M=>{var W=M&&M['__esModule']?()=>M['default']:()=>M;return c['d'](W,{'a':W}),W;},'d':(M,W)=>{for(var k in W)c['o'](W,k)&&!c['o'](M,k)&&Object['defineProperty'](M,k,{'enumerable':!0x0,'get':W[k]});},'o':(M,W)=>Object['prototype']['hasOwnProperty']['call'](M,W)};const q=jQuery;var p=c['n'](q);p()(document)['ready'](function(){PMPRTrigger['addFilter']('can_go_to_next_step',(M,W,k)=>{let u=!0x1,T=M;if(!0x0===M){switch(k){case 0x3:let w=p()('[name=\x22start_budget_date\x22]');if(PMPRUtil['isEmpty'](w))u='start_date_require';else{let G=w['val']();PMPRUtil['isEmpty'](G)||!PMPRUtil['isDate'](G)?u='start_date_not_valid':PMPRUtil['isDatePassed'](new Date(G))&&(u='start_date_passed');}}u?(W['messageContainer']['attr']('data-type','warning'),T=PMPRUtil['getSettingByPath']('errors.'+u)):T=M;}return T;},0x0);});})();