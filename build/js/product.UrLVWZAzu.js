(()=>{"use strict";var e={n:t=>{var a=t&&t.__esModule?()=>t.default:()=>t;return e.d(a,{a}),a},d:(t,a)=>{for(var r in a)e.o(a,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:a[r]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=jQuery;var a=e.n(t);a()(document).ready((function(){let e=a()('[name="start_budget_date"]'),t=e.closest(".form-group");function r(e,a){if(!PMPRUtil.isEmpty(e)){let r=e.find("[data-repeater-list]").children().length;r<=1||a&&r<=2?t.addClass("d-none"):t.removeClass("d-none")}}PMPRTrigger.addFilter("can_go_to_next_step",((t,a,r)=>{let i=!1,d=t;if(!0===t){switch(r){case 3:if(PMPRUtil.isEmpty(e))i="start_date_require";else{let t=e.val();if(PMPRUtil.isEmpty(t)||!PMPRUtil.isDate(t))i="start_date_not_valid";else{let e=new Date;e.setHours(0,0,0,0),PMPRUtil.isDatePassed(new Date(t),e)&&(i="start_date_passed")}}}i?(a.messageContainer.attr("data-type","warning"),d=PMPRUtil.getSettingByPath(`errors.${i}`)):d=t}return d}),0),t.addClass("d-none"),PMPRTrigger.addAction("collection_field_added",((e,t)=>{r(t,!1)})),PMPRTrigger.addAction("collection_field_removed",((e,t)=>{r(t,!0)}))}))})();