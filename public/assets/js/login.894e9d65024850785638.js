!function(e){function t(t){for(var a,c,i=t[0],s=t[1],l=t[2],p=0,d=[];p<i.length;p++)c=i[p],Object.prototype.hasOwnProperty.call(r,c)&&r[c]&&d.push(r[c][0]),r[c]=0;for(a in s)Object.prototype.hasOwnProperty.call(s,a)&&(e[a]=s[a]);for(u&&u(t);d.length;)d.shift()();return o.push.apply(o,l||[]),n()}function n(){for(var e,t=0;t<o.length;t++){for(var n=o[t],a=!0,i=1;i<n.length;i++){var s=n[i];0!==r[s]&&(a=!1)}a&&(o.splice(t--,1),e=c(c.s=n[0]))}return e}var a={},r={6:0},o=[];function c(t){if(a[t])return a[t].exports;var n=a[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,c),n.l=!0,n.exports}c.m=e,c.c=a,c.d=function(e,t,n){c.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},c.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(e,t){if(1&t&&(e=c(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(c.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)c.d(n,a,function(t){return e[t]}.bind(null,a));return n},c.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return c.d(t,"a",t),t},c.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},c.p="";var i=window.webpackJsonp=window.webpackJsonp||[],s=i.push.bind(i);i.push=t,i=i.slice();for(var l=0;l<i.length;l++)t(i[l]);var u=s;o.push([303,0]),n()}({11:function(e,t,n){"use strict";n.d(t,"c",(function(){return o})),n.d(t,"b",(function(){return c}));var a=n(9),r=Object(a.b)({name:"navigation",initialState:{currentPage:""},reducers:{setCurrentPage:function(e,t){e.currentPage=t.payload}}}),o=r.actions.setCurrentPage,c=function(e){return{currentPage:e.navigation.currentPage}};t.a=r.reducer},12:function(e,t,n){"use strict";n.d(t,"c",(function(){return o})),n.d(t,"b",(function(){return c}));var a=n(9),r=Object(a.b)({name:"spinner",initialState:{isActive:!1},reducers:{setSpinnerIsActive:function(e,t){e.isActive=t.payload}}}),o=r.actions.setSpinnerIsActive,c=function(e){return{isActive:e.spinner.isActive}};t.a=r.reducer},14:function(e,t,n){"use strict";n.d(t,"k",(function(){return c})),n.d(t,"l",(function(){return i})),n.d(t,"i",(function(){return s})),n.d(t,"j",(function(){return l})),n.d(t,"h",(function(){return u})),n.d(t,"g",(function(){return p})),n.d(t,"d",(function(){return d})),n.d(t,"c",(function(){return f})),n.d(t,"f",(function(){return m})),n.d(t,"e",(function(){return y})),n.d(t,"b",(function(){return g}));var a=n(9),r=Object(a.b)({name:"logsForwardTA",initialState:{windowLeftWidth:50,windowRightWidth:50,minWidth:20,borderMoverWidtnPx:22,selectedAll:"main",selectedServerForReport:"main",processedListOfLogsMain:[],processedListOfLogsBackup:[],logFileDateMain:null,logFileDateBackup:null,logFileDurationMain:null,logFileDurationBackup:null},reducers:{setWindowLeftWidth:function(e,t){e.windowLeftWidth=t.payload},setWindowRightWidth:function(e,t){e.windowRightWidth=t.payload},setMinWidth:function(e,t){e.minWidth=t.payload},setBorderMoverWidtnPx:function(e,t){e.borderMoverWidtnPx=t.payload},setSelectedAll:function(e,t){e.selectedAll=t.payload},setSelectedServerForReport:function(e,t){e.selectedServerForReport=t.payload},setProcessedListOfLogsMain:function(e,t){e.processedListOfLogsMain=t.payload},setProcessedListOfLogsBackup:function(e,t){e.processedListOfLogsBackup=t.payload},setLogFileDateMain:function(e,t){e.logFileDateMain=t.payload},setLogFileDateBackup:function(e,t){e.logFileDateBackup=t.payload},setLogFileDurationMain:function(e,t){e.logFileDurationMain=t.payload},setLogFileDurationBackup:function(e,t){e.logFileDurationBackup=t.payload}}}),o=r.actions,c=o.setWindowLeftWidth,i=o.setWindowRightWidth,s=(o.setMinWidth,o.setBorderMoverWidtnPx,o.setSelectedAll),l=o.setSelectedServerForReport,u=o.setProcessedListOfLogsMain,p=o.setProcessedListOfLogsBackup,d=o.setLogFileDateMain,f=o.setLogFileDateBackup,m=o.setLogFileDurationMain,y=o.setLogFileDurationBackup,g=function(e){return{windowLeftWidth:e.logsForwardTA.windowLeftWidth,windowRightWidth:e.logsForwardTA.windowRightWidth,minWidth:e.logsForwardTA.minWidth,borderMoverWidtnPx:e.logsForwardTA.borderMoverWidtnPx,selectedAll:e.logsForwardTA.selectedAll,selectedServerForReport:e.logsForwardTA.selectedServerForReport,processedListOfLogsMain:e.logsForwardTA.processedListOfLogsMain,processedListOfLogsBackup:e.logsForwardTA.processedListOfLogsBackup,logFileDateMain:e.logsForwardTA.logFileDateMain,logFileDateBackup:e.logsForwardTA.logFileDateBackup,logFileDurationMain:e.logsForwardTA.logFileDurationMain,logFileDurationBackup:e.logsForwardTA.logFileDurationBackup}};t.a=r.reducer},16:function(e,t,n){"use strict";n.d(t,"a",(function(){return O}));var a=n(13),r=n.n(a),o=n(3),c=function(e){return null!=e},i=function(e){return e.href},s=function(e){return c(e.data)?e.data:{}},l=function(e){return c(e.successCallback)?e.successCallback:function(){}},u=function(e){return c(e.errorCallback)?e.errorCallback:function(){}},p=function(){var e=document.querySelector('meta[name="csrf-token"]');return c(e)?e.content:""},d=function(e,t){return c(e.method)?e.method:t},f=n(21),m=n.n(f),y=n(17),g=n.n(y);function h(e){return v.apply(this,arguments)}function v(){return(v=m()(g.a.mark((function e(t){var n,a,r,o,c,i,s,l;return g.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=t.token,a=t.href,r=t.method,o=t.data,c=t.successCallback,i=t.errorCallback,e.prev=6,e.next=9,fetch(a,{method:r,headers:{"Content-Type":"application/json; charset=UTF-8"},body:JSON.stringify({_token:n,data:o})});case 9:if(!(s=e.sent).ok){e.next=17;break}return e.next=13,s.json();case 13:l=e.sent,c(l),e.next=18;break;case 17:i(s);case 18:e.next=26;break;case 21:e.prev=21,e.t0=e.catch(6),console.error("Ошибка: ".concat(e.t0,". При попытке вызвать fetch")),console.error({_token:n,href:a,data:o}),console.log("");case 26:case 27:case"end":return e.stop()}}),e,null,[[6,21]])})))).apply(this,arguments)}function b(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);t&&(a=a.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,a)}return n}var O=function(e){var t=e.route,n=e.data,a=void 0===n?{}:n,c=e.callback,f=e.errorCallback,m=void 0===f?function(){}:f,y=o.a.getState(),g=y.navigation,v=y.company,O=g.currentPage,E=v.currentCompanyAlias,P=function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?b(Object(n),!0).forEach((function(t){r()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):b(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({},a);P.page=O,P.companyAlias=E;!function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:void 0,t=i(e),n=p(),a=s(e),o=d(e,"POST"),c=l(e),f=u(e);h(r()(r()(r()({href:t,token:n,data:a,method:o,successCallback:c},"href",t),"href",t),"errorCallback",f))}({href:"".concat("http://rmh","/").concat(t),data:P,successCallback:c,errorCallback:m})}},18:function(e,t,n){"use strict";n.d(t,"a",(function(){return U}));var a=n(0),r=n.n(a),o=(n(24),n(26),function(e){var t=e.children;return r.a.createElement("div",{className:"siteBackground",style:{backgroundImage:"url( /public/assets/img/fonwall_ru-sundown-sea-backdrop.jpeg )"}},t)});function c(e){return r.a.createElement(o,e)}n(28);var i=function(e){var t=e.children;return r.a.createElement("div",{className:"bodyContainer"},t)};function s(e){return r.a.createElement(i,e)}var l=n(2),u=n.n(l),p=n(10),d=n.n(p),f=n(1),m=n(11),y=function(e){var t=e.children,n=e.setCurrentPage,o=Object(a.useState)(!1),c=d()(o,2),i=c[0],s=c[1];return Object(a.useEffect)((function(){var e=document.querySelector('meta[name="page"]').content;n(e),s(!0)}),[]),r.a.createElement(r.a.Fragment,null,i?t:"")};function g(e){var t=Object(f.c)(m.b),n=Object(f.b)();return r.a.createElement(y,u()({},e,{currentPage:t.currentPage,setCurrentPage:function(e){n(Object(m.c)(e))}}))}var h=n(8),v=function(e){var t=e.children,n=e.setCurrentCompanyAlias,o=e.setCurrentCompanyName,c=e.setCurrentCompanyType,i=Object(a.useState)(!1),s=d()(i,2),l=s[0],u=s[1];return Object(a.useEffect)((function(){var e=document.querySelector('meta[name="company-alias"]').content,t=document.querySelector('meta[name="company-name"]').content,a=document.querySelector('meta[name="company-type"]').content;n(e),o(t),c(a),u(!0)}),[]),r.a.createElement(r.a.Fragment,null,l?t:"")};function b(e){var t=Object(f.b)();return r.a.createElement(v,u()({},e,{setCurrentCompanyName:function(e){t(Object(h.f)(e))},setCurrentCompanyAlias:function(e){t(Object(h.e)(e))},setCurrentCompanyType:function(e){t(Object(h.g)(e))}}))}var O=n(12),E=(n(30),function(e){var t=e.runAtStart,n=void 0!==t&&t,o=e.setSpinnerIsActive,c=e.isActive;return Object(a.useEffect)((function(){o(n)}),[]),r.a.createElement(r.a.Fragment,null,c?r.a.createElement("div",{className:"spinner"},r.a.createElement("div",{className:"loader"},r.a.createElement("div",{className:"inner one"}),r.a.createElement("div",{className:"inner two"}),r.a.createElement("div",{className:"inner three"})),r.a.createElement("div",{className:"loading"},r.a.createElement("div",{className:"loading-text"},r.a.createElement("span",{className:"loading-text-words"},"L"),r.a.createElement("span",{className:"loading-text-words"},"O"),r.a.createElement("span",{className:"loading-text-words"},"A"),r.a.createElement("span",{className:"loading-text-words"},"D"),r.a.createElement("span",{className:"loading-text-words"},"I"),r.a.createElement("span",{className:"loading-text-words"},"N"),r.a.createElement("span",{className:"loading-text-words"},"G")))):"")});function P(e){var t=Object(f.c)(O.b),n=Object(f.b)();return r.a.createElement(E,u()({},e,{isActive:t.isActive,setSpinnerIsActive:function(e){n(Object(O.c)(e))}}))}var _=n(5),L=(n(32),n(4)),S=(n(34),function(e){var t=e.title,n=e.page,a=e.currentPage,o=e.currentCompanyAlias;return r.a.createElement("a",{className:"".concat(n===a?"isActive":""," menuItemLeft"),href:"".concat("http://rmh","/").concat(o,"/").concat(n)},r.a.createElement("span",{className:"TMIL_icon"}),r.a.createElement("span",{className:"TMIL_title"},t))});function C(e){var t=Object(f.c)(m.b),n=Object(f.c)(h.b);return r.a.createElement(S,u()({},e,{currentPage:t.currentPage,currentCompanyAlias:n.currentCompanyAlias}))}n(36);var A=function(e){var t=e.currentCompanyName,n=e.currentCompanyType;return r.a.createElement("div",{className:"siteLogo"},r.a.createElement("span",null,t),r.a.createElement("span",{className:"logoCompanyType"},n))};function j(e){var t=Object(f.c)(h.b);return r.a.createElement(A,u()({},e,{currentCompanyName:t.currentCompanyName,currentCompanyType:t.currentCompanyType}))}var w=n(15),M=n.n(w),k=(n(38),function(e){return M()(e),r.a.createElement("a",{className:"BtnLogout",href:"".concat("http://rmh","/").concat(L.a.LOGOUT)},r.a.createElement("span",{className:"TMIR_icon"}),r.a.createElement("span",{className:"TMIR_title"},"Выйти"))});function D(e){return r.a.createElement(k,e)}var N=function(e){var t=e.currentPage,n=e.user_position,o=Object(a.useState)(!1),c=d()(o,2),i=c[0],s=c[1];return Object(a.useEffect)((function(){var e=!0;switch(t){case L.a.PAGE.LOGIN:case L.a.PAGE.HOME:case L.a.PAGE.PAGE_NOT_FOUND:case L.a.PAGE.ACCESS_IS_CLOSED:e=!1}s(e)}),[t]),r.a.createElement(r.a.Fragment,null,i?r.a.createElement("div",{className:"topMenu"},r.a.createElement("div",{className:"TM_left"},"admin"===n?r.a.createElement("a",{className:"TM_home_link",href:"".concat("http://rmh")},"Home"):"",r.a.createElement(j,null),r.a.createElement(C,{title:"Главная",page:L.a.PAGE.MAIN}),r.a.createElement(C,{title:"Расписание",page:L.a.PAGE.SCHEDULE}),r.a.createElement(C,{title:"Макет",page:L.a.PAGE.LAYOUT}),r.a.createElement(C,{title:"Эф. отчёт",page:L.a.PAGE.PLAY_REPORT}),r.a.createElement(C,{title:"Logs",page:L.a.PAGE.LOGS})),r.a.createElement("div",{className:"TM_right"},r.a.createElement(D,null))):"")};function F(e){var t=Object(f.c)(m.b),n=Object(f.c)(_.b);return r.a.createElement(N,u()({},e,{currentPage:t.currentPage,user_position:n.user_position}))}var x=n(3),R=n(6),T=function(e,t){switch(e){case L.a.PAGE.HOME:!function(e){var t=e.companyList,n=e.userData;x.a.dispatch(Object(h.c)(t)),x.a.dispatch(Object(_.c)(n))}(t);break;case L.a.PAGE.MAIN:!function(e){var t=e.userData;x.a.dispatch(Object(_.c)(t))}(t);break;case L.a.PAGE.ACCESS_IS_CLOSED:!function(e){var t=e.userData;x.a.dispatch(Object(_.c)(t))}(t);break;case L.a.PAGE.SCHEDULE:!function(e){var t=e.userData;x.a.dispatch(Object(_.c)(t))}(t);break;case L.a.PAGE.PLAY_REPORT:!function(e){for(var t=e.userData,n=e.files,a={},r=0,o=0,c=0;c<n.length;c++){var i=n[c].split("/"),s=i[i.length-1].split(".")[0];a[s]=!0;var l=s.split("-"),u=Number(l[0]),p=Number(l[1]);(0===r||r>u||r===u&&o>p)&&(r=u,o=p)}x.a.dispatch(Object(_.c)(t)),x.a.dispatch(Object(R.p)(a)),x.a.dispatch(Object(R.l)(r)),x.a.dispatch(Object(R.m)(o))}(t);break;case L.a.PAGE.LOGS:!function(e){var t=e.userData,n=e.companyProgramSystem;x.a.dispatch(Object(_.c)(t)),x.a.dispatch(Object(h.d)(n))}(t);break;case L.a.PAGE.LAYOUT:!function(e){var t=e.userData;x.a.dispatch(Object(_.c)(t))}(t)}},I=n(16),W=function(e){var t=e.children,n=e.setSpinnerIsActive,o=e.currentPage,c=Object(a.useState)(!1),i=d()(c,2),s=i[0],l=i[1];return Object(a.useEffect)((function(){console.dir(o);var e=!0;switch(o){case L.a.PAGE.PAGE_NOT_FOUND:e=!1}e?Object(I.a)({route:"get-starting-data/".concat(o),data:{},callback:function(e){console.dir("get-starting-data/".concat(o)),console.dir(e),e.ok&&T(o,e),l(!0),n(!1)}}):(l(!0),n(!1))}),[]),r.a.createElement(r.a.Fragment,null,s?t:"")};function G(e){var t=Object(f.c)(m.b),n=Object(f.b)();return r.a.createElement(W,u()({},e,{currentPage:t.currentPage,setSpinnerIsActive:function(e){n(Object(O.c)(e))}}))}var B=function(e){var t=e.children,n=e.className,a=void 0===n?"":n;return r.a.createElement("div",{className:"pageContainer"},r.a.createElement(c,null,r.a.createElement(s,null,r.a.createElement(P,{runAtStart:!0}),r.a.createElement(g,null,r.a.createElement(b,null,r.a.createElement(G,null,r.a.createElement(F,null),r.a.createElement("div",{className:a},t)))))))};function U(e){return r.a.createElement(B,e)}},180:function(e,t,n){var a=n(7),r=n(181);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},181:function(e,t,n){},182:function(e,t,n){var a=n(7),r=n(183);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},183:function(e,t,n){},24:function(e,t,n){var a=n(7),r=n(25);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},25:function(e,t,n){},26:function(e,t,n){var a=n(7),r=n(27);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},27:function(e,t,n){},28:function(e,t,n){var a=n(7),r=n(29);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},29:function(e,t,n){},3:function(e,t,n){"use strict";var a=n(9),r=n(5),o=n(12),c=n(11),i=n(8),s=n(14),l=n(6);t.a=Object(a.a)({reducer:{userInfo:r.a,spinner:o.a,navigation:c.a,company:i.a,logsForwardTA:s.a,playReport:l.b}})},30:function(e,t,n){var a=n(7),r=n(31);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},303:function(e,t,n){"use strict";n.r(t);var a=n(0),r=n.n(a),o=n(20),c=n(40),i=n(1),s=(n(180),n(3)),l=n(10),u=n.n(l),p=n(15),d=n.n(p),f=(n(182),n(18)),m=n(16),y=n(4),g=function(e){d()(e);var t=Object(a.useState)(""),n=u()(t,2),o=n[0],c=n[1],i=Object(a.useState)(""),s=u()(i,2),l=s[0],p=s[1];return r.a.createElement(f.a,{className:"loginPage"},r.a.createElement("div",{className:"loginPage_wrap"},r.a.createElement("div",{className:"loginPage_item"},r.a.createElement("h2",null,"Логин:"),r.a.createElement("input",{type:"email",className:"",value:o,onChange:function(e){var t=e.target.value;c(t)}})),r.a.createElement("div",{className:"loginPage_item"},r.a.createElement("h2",null,"Пароль:"),r.a.createElement("input",{type:"password",className:"",value:l,autoComplete:"current-password",minLength:6,maxLength:20,onChange:function(e){var t=e.target.value;p(t)}}),r.a.createElement("div",{className:"btn"},r.a.createElement("span",{onClick:function(){var e=o.trim(),t=l.trim();(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(e)||(alert("Логин должен быть действующим е-мейл адресом"),0))&&function(e){var t=[];if(e.length<8&&t.push("Ваш пароль должен содержать не менее 8 символов"),t.length>0)return alert(t.join("\n")),!1;var n=/^\w+$/.test(e);return!1===n&&alert("Не правильные логин или пароль"),n}(t)&&Object(m.a)({route:"login-by-post",data:{email:e,password:t},callback:function(e){if(e.ok)if("admin"===e.userData.position)window.location.href="http://rmh";else{var t=e.userData.company[0];window.location.href="".concat("http://rmh","/").concat(t,"/").concat(y.a.PAGE.MAIN)}else alert(e.message)}})}},"Отправить")))))};function h(e){return r.a.createElement(g,e)}console.dir("login"),console.log("HOST_TO_API_SERVER","http://rmh");var v=document.getElementById("app");Object(o.createRoot)(v).render(r.a.createElement(i.a,{store:s.a},r.a.createElement(c.a,null,r.a.createElement(h,null))))},31:function(e,t,n){},32:function(e,t,n){var a=n(7),r=n(33);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},33:function(e,t,n){},34:function(e,t,n){var a=n(7),r=n(35);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},35:function(e,t,n){},36:function(e,t,n){var a=n(7),r=n(37);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},37:function(e,t,n){},38:function(e,t,n){var a=n(7),r=n(39);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var o={insert:"head",singleton:!1};a(r,o);e.exports=r.locals||{}},39:function(e,t,n){},4:function(e,t,n){"use strict";n.d(t,"a",(function(){return a}));var a={PAGE:{HOME:"home",MAIN:"main",SCHEDULE:"schedule",PLAY_REPORT:"play-report",LOGS:"logs",LOGIN:"login",LAYOUT:"layout",ACCESS_IS_CLOSED:"access-is-closed",PAGE_NOT_FOUND:"page-not-found"},LOGOUT:"logout"}},5:function(e,t,n){"use strict";n.d(t,"c",(function(){return o})),n.d(t,"b",(function(){return c}));var a=n(9),r=Object(a.b)({name:"userInfo",initialState:{user_id:"",user_name:"",user_email:"",user_position:"",user_company:"",user_accessRights:[]},reducers:{setUserData:function(e,t){if(null!==t.payload){var n=t.payload,a=n.email,r=n.id,o=n.name,c=n.position,i=n.company,s=n.accessRights;e.user_id=r,e.user_name=o,e.user_email=a,e.user_position=c,e.user_company=i,e.user_accessRights=s}}}}),o=r.actions.setUserData,c=function(e){return{user_id:e.userInfo.user_id,user_name:e.userInfo.user_name,user_email:e.userInfo.user_email,user_position:e.userInfo.user_position,user_company:e.userInfo.user_company,user_accessRights:e.userInfo.user_accessRights}};t.a=r.reducer},6:function(e,t,n){"use strict";n.d(t,"r",(function(){return l})),n.d(t,"t",(function(){return u})),n.d(t,"e",(function(){return p})),n.d(t,"p",(function(){return d})),n.d(t,"m",(function(){return f})),n.d(t,"o",(function(){return m})),n.d(t,"u",(function(){return y})),n.d(t,"n",(function(){return g})),n.d(t,"l",(function(){return h})),n.d(t,"k",(function(){return v})),n.d(t,"j",(function(){return b})),n.d(t,"s",(function(){return O})),n.d(t,"h",(function(){return E})),n.d(t,"i",(function(){return P})),n.d(t,"f",(function(){return _})),n.d(t,"a",(function(){return L})),n.d(t,"d",(function(){return S})),n.d(t,"g",(function(){return C})),n.d(t,"q",(function(){return A})),n.d(t,"c",(function(){return j}));var a=n(13),r=n.n(a),o=n(9);function c(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);t&&(a=a.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,a)}return n}var i=Object(o.b)({name:"playReport",initialState:{searchFocus:!1,searchValue:"",searchDate:"",searchPeriod:null,calendarIsOpen:!1,playReportList:{},month:0,monthTitle:"",year:0,monthCalendar:[],min_year:0,min_month:0,max_year:0,max_month:0,entireList:[],filteredList:[],dateListSelected:null,backligthPrefixList:{},detailDataWindow_isOpen:!1,resultPointsSec:[]},reducers:{setSearchFocus:function(e,t){e.searchFocus=t.payload},setSearchValue:function(e,t){e.searchValue=t.payload},setSearchDate:function(e,t){e.searchDate=t.payload},setCalendarIsOpen:function(e,t){e.calendarIsOpen=t.payload},setPlayReportList:function(e,t){e.playReportList=t.payload},setMonth:function(e,t){e.month=t.payload},setMonthTitle:function(e,t){e.monthTitle=t.payload},setYear:function(e,t){e.year=t.payload},setMonthCalendar:function(e,t){e.monthCalendar=t.payload},setMinYear:function(e,t){e.min_year=t.payload},setMaxYear:function(e,t){e.max_year=t.payload},setMaxMonth:function(e,t){e.max_month=t.payload},setMinMonth:function(e,t){e.min_month=t.payload},setSearchPeriod:function(e,t){e.searchPeriod=t.payload},setEntireList:function(e,t){e.entireList=t.payload},setFilteredList:function(e,t){e.filteredList=t.payload},setDateListSelected:function(e,t){e.dateListSelected=t.payload},setBackligthPrefixList:function(e,t){e.backligthPrefixList=t.payload},addBackligthPrefix:function(e,t){var n=function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?c(Object(n),!0).forEach((function(t){r()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):c(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({},e.backligthPrefixList);n[t.payload]=!1,e.backligthPrefixList=n},setDetailDataWindowIsOpen:function(e,t){e.detailDataWindow_isOpen=t.payload},setResultPointsSec:function(e,t){e.resultPointsSec=t.payload}}}),s=i.actions,l=s.setSearchFocus,u=s.setSearchValue,p=(s.setSearchDate,s.setCalendarIsOpen),d=s.setPlayReportList,f=s.setMonth,m=s.setMonthTitle,y=s.setYear,g=s.setMonthCalendar,h=s.setMinYear,v=s.setMaxYear,b=s.setMaxMonth,O=(s.setMinMonth,s.setSearchPeriod),E=s.setEntireList,P=s.setFilteredList,_=s.setDateListSelected,L=s.addBackligthPrefix,S=s.setBackligthPrefixList,C=s.setDetailDataWindowIsOpen,A=s.setResultPointsSec,j=function(e){return{searchFocus:e.playReport.searchFocus,searchValue:e.playReport.searchValue,searchDate:e.playReport.searchDate,searchPeriod:e.playReport.searchPeriod,calendarIsOpen:e.playReport.calendarIsOpen,playReportList:e.playReport.playReportList,month:e.playReport.month,monthTitle:e.playReport.monthTitle,year:e.playReport.year,monthCalendar:e.playReport.monthCalendar,min_year:e.playReport.min_year,max_year:e.playReport.max_year,max_month:e.playReport.max_month,min_month:e.playReport.min_month,entireList:e.playReport.entireList,filteredList:e.playReport.filteredList,dateListSelected:e.playReport.dateListSelected,backligthPrefixList:e.playReport.backligthPrefixList,detailDataWindow_isOpen:e.playReport.detailDataWindow_isOpen,resultPointsSec:e.playReport.resultPointsSec}};t.b=i.reducer},8:function(e,t,n){"use strict";n.d(t,"e",(function(){return c})),n.d(t,"f",(function(){return i})),n.d(t,"c",(function(){return s})),n.d(t,"g",(function(){return l})),n.d(t,"d",(function(){return u})),n.d(t,"b",(function(){return p}));var a=n(9),r=Object(a.b)({name:"company",initialState:{currentCompanyAlias:"1-resp",currentCompanyName:"Первый республиканский",currentCompanyType:"tv",companyProgramSystem:null,companyList:[]},reducers:{setCurrentCompanyAlias:function(e,t){e.currentCompanyAlias=t.payload},setCurrentCompanyName:function(e,t){e.currentCompanyName=t.payload},setCompanyList:function(e,t){e.companyList=t.payload},setCurrentCompanyType:function(e,t){e.currentCompanyType=t.payload},setCompanyProgramSystem:function(e,t){e.companyProgramSystem=t.payload}}}),o=r.actions,c=o.setCurrentCompanyAlias,i=o.setCurrentCompanyName,s=o.setCompanyList,l=o.setCurrentCompanyType,u=o.setCompanyProgramSystem,p=function(e){return{currentCompanyAlias:e.company.currentCompanyAlias,currentCompanyName:e.company.currentCompanyName,companyList:e.company.companyList,currentCompanyType:e.company.currentCompanyType,companyProgramSystem:e.company.companyProgramSystem}};t.a=r.reducer}});