!function(e){function t(t){for(var a,o,u=t[0],s=t[1],i=t[2],m=0,p=[];m<u.length;m++)o=u[m],Object.prototype.hasOwnProperty.call(r,o)&&r[o]&&p.push(r[o][0]),r[o]=0;for(a in s)Object.prototype.hasOwnProperty.call(s,a)&&(e[a]=s[a]);for(l&&l(t);p.length;)p.shift()();return c.push.apply(c,i||[]),n()}function n(){for(var e,t=0;t<c.length;t++){for(var n=c[t],a=!0,u=1;u<n.length;u++){var s=n[u];0!==r[s]&&(a=!1)}a&&(c.splice(t--,1),e=o(o.s=n[0]))}return e}var a={},r={11:0},c=[];function o(t){if(a[t])return a[t].exports;var n=a[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=a,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)o.d(n,a,function(t){return e[t]}.bind(null,a));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="";var u=window.webpackJsonp=window.webpackJsonp||[],s=u.push.bind(u);u.push=t,u=u.slice();for(var i=0;i<u.length;i++)t(u[i]);var l=s;c.push([110,0]),n()}([,function(e,t,n){"use strict";n.d(t,"a",(function(){return a}));var a={PAGE:{HOME:"home",MAIN:"main",SCHEDULE:"schedule",PLAY_REPORT:"play-report",LOGS:"logs",LOGIN:"login",ACCESS_IS_CLOSED:"access-is-closed",PAGE_NOT_FOUND:"page-not-found"},LOGOUT:"logout"}},,function(e,t,n){"use strict";n.d(t,"c",(function(){return c})),n.d(t,"b",(function(){return o}));var a=n(9),r=Object(a.b)({name:"userInfo",initialState:{user_id:"",user_name:"",user_email:"",user_position:"",user_company:""},reducers:{setUserData:function(e,t){if(null!==t.payload){var n=t.payload,a=n.email,r=n.id,c=n.name,o=n.position,u=n.company;e.user_id=r,e.user_name=c,e.user_email=a,e.user_position=o,e.user_company=u}}}}),c=r.actions.setUserData,o=function(e){return{user_id:e.userInfo.user_id,user_name:e.userInfo.user_name,user_email:e.userInfo.user_email,user_position:e.userInfo.user_position,user_company:e.userInfo.user_company}};t.a=r.reducer},function(e,t,n){"use strict";var a=n(9),r=n(3),c=n(11),o=n(7),u=n(6);t.a=Object(a.a)({reducer:{userInfo:r.a,spinner:c.a,navigation:o.a,company:u.a}})},,function(e,t,n){"use strict";n.d(t,"d",(function(){return o})),n.d(t,"e",(function(){return u})),n.d(t,"c",(function(){return s})),n.d(t,"f",(function(){return i})),n.d(t,"b",(function(){return l}));var a=n(9),r=Object(a.b)({name:"company",initialState:{currentCompanyAlias:"1-resp",currentCompanyName:"Первый республиканский",currentCompanyType:"tv",companyList:[]},reducers:{setCurrentCompanyAlias:function(e,t){e.currentCompanyAlias=t.payload},setCurrentCompanyName:function(e,t){e.currentCompanyName=t.payload},setCompanyList:function(e,t){e.companyList=t.payload},setCurrentCompanyType:function(e,t){e.currentCompanyType=t.payload}}}),c=r.actions,o=c.setCurrentCompanyAlias,u=c.setCurrentCompanyName,s=c.setCompanyList,i=c.setCurrentCompanyType,l=function(e){return{currentCompanyAlias:e.company.currentCompanyAlias,currentCompanyName:e.company.currentCompanyName,companyList:e.company.companyList,currentCompanyType:e.company.currentCompanyType}};t.a=r.reducer},function(e,t,n){"use strict";n.d(t,"c",(function(){return c})),n.d(t,"b",(function(){return o}));var a=n(9),r=Object(a.b)({name:"navigation",initialState:{currentPage:""},reducers:{setCurrentPage:function(e,t){e.currentPage=t.payload}}}),c=r.actions.setCurrentPage,o=function(e){return{currentPage:e.navigation.currentPage}};t.a=r.reducer},,,,function(e,t,n){"use strict";n.d(t,"c",(function(){return c})),n.d(t,"b",(function(){return o}));var a=n(9),r=Object(a.b)({name:"spinner",initialState:{isActive:!1},reducers:{setSpinnerIsActive:function(e,t){e.isActive=t.payload}}}),c=r.actions.setSpinnerIsActive,o=function(e){return{isActive:e.spinner.isActive}};t.a=r.reducer},,,function(e,t,n){"use strict";n.d(t,"a",(function(){return O}));var a=n(12),r=n.n(a),c=n(4),o=function(e){return null!=e},u=function(e){return e.href},s=function(e){return o(e.data)?e.data:{}},i=function(e){return o(e.successCallback)?e.successCallback:function(){}},l=function(e){return o(e.errorCallback)?e.errorCallback:function(){}},m=function(){var e=document.querySelector('meta[name="csrf-token"]');return o(e)?e.content:""},p=function(e,t){return o(e.method)?e.method:t},f=n(19),d=n.n(f),v=n(15),y=n.n(v);function b(e){return E.apply(this,arguments)}function E(){return(E=d()(y.a.mark((function e(t){var n,a,r,c,o,u,s,i;return y.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=t.token,a=t.href,r=t.method,c=t.data,o=t.successCallback,u=t.errorCallback,e.prev=6,e.next=9,fetch(a,{method:r,headers:{"Content-Type":"application/json; charset=UTF-8"},body:JSON.stringify({_token:n,data:c})});case 9:if(!(s=e.sent).ok){e.next=17;break}return e.next=13,s.json();case 13:i=e.sent,o(i),e.next=18;break;case 17:u(s);case 18:e.next=26;break;case 21:e.prev=21,e.t0=e.catch(6),console.error("Ошибка: ".concat(e.t0,". При попытке вызвать fetch")),console.error({_token:n,href:a,data:c}),console.log("");case 26:case 27:case"end":return e.stop()}}),e,null,[[6,21]])})))).apply(this,arguments)}function g(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);t&&(a=a.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,a)}return n}var O=function(e){var t=e.route,n=e.data,a=void 0===n?{}:n,o=e.callback,f=e.errorCallback,d=void 0===f?function(){}:f,v=c.a.getState(),y=v.navigation,E=v.company,O=y.currentPage,h=E.currentCompanyAlias,C=function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?g(Object(n),!0).forEach((function(t){r()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):g(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}({},a);C.page=O,C.companyAlias=h;!function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:void 0,t=u(e),n=m(),a=s(e),c=p(e,"POST"),o=i(e),f=l(e);b(r()(r()(r()({href:t,token:n,data:a,method:c,successCallback:o},"href",t),"href",t),"errorCallback",f))}({href:"".concat("http://rmh","/").concat(t),data:C,successCallback:o,errorCallback:d})}},,function(e,t,n){"use strict";n.d(t,"a",(function(){return H}));var a=n(0),r=n.n(a),c=(n(20),n(22),function(e){var t=e.children;return r.a.createElement("div",{className:"siteBackground",style:{backgroundImage:"url( /public/assets/img/fonwall_ru-sundown-sea-backdrop.jpeg )"}},t)});function o(e){return r.a.createElement(c,e)}n(24);var u=function(e){var t=e.children;return r.a.createElement("div",{className:"bodyContainer"},t)};function s(e){return r.a.createElement(u,e)}var i=n(5),l=n.n(i),m=n(10),p=n.n(m),f=n(2),d=n(7),v=function(e){var t=e.children,n=e.setCurrentPage,c=Object(a.useState)(!1),o=p()(c,2),u=o[0],s=o[1];return Object(a.useEffect)((function(){var e=document.querySelector('meta[name="page"]').content;n(e),s(!0)}),[]),r.a.createElement(r.a.Fragment,null,u?t:"")};function y(e){var t=Object(f.c)(d.b),n=Object(f.b)();return r.a.createElement(v,l()({},e,{currentPage:t.currentPage,setCurrentPage:function(e){n(Object(d.c)(e))}}))}var b=n(6),E=function(e){var t=e.children,n=e.setCurrentCompanyAlias,c=e.setCurrentCompanyName,o=e.setCurrentCompanyType,u=Object(a.useState)(!1),s=p()(u,2),i=s[0],l=s[1];return Object(a.useEffect)((function(){var e=document.querySelector('meta[name="company-alias"]').content,t=document.querySelector('meta[name="company-name"]').content,a=document.querySelector('meta[name="company-type"]').content;n(e),c(t),o(a),l(!0)}),[]),r.a.createElement(r.a.Fragment,null,i?t:"")};function g(e){var t=Object(f.b)();return r.a.createElement(E,l()({},e,{setCurrentCompanyName:function(e){t(Object(b.e)(e))},setCurrentCompanyAlias:function(e){t(Object(b.d)(e))},setCurrentCompanyType:function(e){t(Object(b.f)(e))}}))}var O=n(11),h=(n(26),function(e){var t=e.runAtStart,n=void 0!==t&&t,c=e.setSpinnerIsActive,o=e.isActive;return Object(a.useEffect)((function(){c(n)}),[]),r.a.createElement(r.a.Fragment,null,o?r.a.createElement("div",{className:"spinner"},r.a.createElement("div",{className:"loader"},r.a.createElement("div",{className:"inner one"}),r.a.createElement("div",{className:"inner two"}),r.a.createElement("div",{className:"inner three"})),r.a.createElement("div",{className:"loading"},r.a.createElement("div",{className:"loading-text"},r.a.createElement("span",{className:"loading-text-words"},"L"),r.a.createElement("span",{className:"loading-text-words"},"O"),r.a.createElement("span",{className:"loading-text-words"},"A"),r.a.createElement("span",{className:"loading-text-words"},"D"),r.a.createElement("span",{className:"loading-text-words"},"I"),r.a.createElement("span",{className:"loading-text-words"},"N"),r.a.createElement("span",{className:"loading-text-words"},"G")))):"")});function C(e){var t=Object(f.c)(O.b),n=Object(f.b)();return r.a.createElement(h,l()({},e,{isActive:t.isActive,setSpinnerIsActive:function(e){n(Object(O.c)(e))}}))}var _=n(3),P=(n(28),n(1)),j=(n(30),function(e){var t=e.title,n=e.page,a=e.currentPage,c=e.currentCompanyAlias;return r.a.createElement("a",{className:"".concat(n===a?"isActive":""," menuItemLeft"),href:"".concat("http://rmh","/").concat(c,"/").concat(n)},r.a.createElement("span",{className:"TMIL_icon"}),r.a.createElement("span",{className:"TMIL_title"},t))});function A(e){var t=Object(f.c)(d.b),n=Object(f.c)(b.b);return r.a.createElement(j,l()({},e,{currentPage:t.currentPage,currentCompanyAlias:n.currentCompanyAlias}))}n(32);var N=function(e){var t=e.currentCompanyName,n=e.currentCompanyType;return r.a.createElement("div",{className:"siteLogo"},r.a.createElement("span",null,t),r.a.createElement("span",{className:"logoCompanyType"},n))};function S(e){var t=Object(f.c)(b.b);return r.a.createElement(N,l()({},e,{currentCompanyName:t.currentCompanyName,currentCompanyType:t.currentCompanyType}))}var k=n(13),T=n.n(k),L=(n(34),function(e){return T()(e),r.a.createElement("a",{className:"BtnLogout",href:"".concat("http://rmh","/").concat(P.a.LOGOUT)},r.a.createElement("span",{className:"TMIR_icon"}),r.a.createElement("span",{className:"TMIR_title"},"Выйти"))});function w(e){return r.a.createElement(L,e)}var I=function(e){var t=e.currentPage,n=e.user_position,c=Object(a.useState)(!1),o=p()(c,2),u=o[0],s=o[1];return Object(a.useEffect)((function(){var e=!0;switch(t){case P.a.PAGE.LOGIN:case P.a.PAGE.HOME:case P.a.PAGE.PAGE_NOT_FOUND:case P.a.PAGE.ACCESS_IS_CLOSED:e=!1}s(e)}),[t]),r.a.createElement(r.a.Fragment,null,u?r.a.createElement("div",{className:"topMenu"},r.a.createElement("div",{className:"TM_left"},"admin"===n?r.a.createElement("a",{className:"TM_home_link",href:"".concat("http://rmh")},"Home"):"",r.a.createElement(S,null),r.a.createElement(A,{title:"Главная",page:P.a.PAGE.MAIN}),r.a.createElement(A,{title:"Расписание",page:P.a.PAGE.SCHEDULE}),r.a.createElement(A,{title:"Эф. отчёт",page:P.a.PAGE.PLAY_REPORT}),r.a.createElement(A,{title:"Logs",page:P.a.PAGE.LOGS})),r.a.createElement("div",{className:"TM_right"},r.a.createElement(w,null))):"")};function x(e){var t=Object(f.c)(d.b),n=Object(f.c)(_.b);return r.a.createElement(I,l()({},e,{currentPage:t.currentPage,user_position:n.user_position}))}var G=n(4),M=function(e,t){switch(e){case P.a.PAGE.HOME:!function(e){var t=e.companyList,n=e.userData;G.a.dispatch(Object(b.c)(t)),G.a.dispatch(Object(_.c)(n))}(t);break;case P.a.PAGE.MAIN:!function(e){var t=e.userData;G.a.dispatch(Object(_.c)(t))}(t);break;case P.a.PAGE.ACCESS_IS_CLOSED:!function(e){var t=e.userData;G.a.dispatch(Object(_.c)(t))}(t);break;case P.a.PAGE.SCHEDULE:!function(e){var t=e.userData;G.a.dispatch(Object(_.c)(t))}(t);break;case P.a.PAGE.PLAY_REPORT:!function(e){var t=e.userData;G.a.dispatch(Object(_.c)(t))}(t);break;case P.a.PAGE.LOGS:!function(e){var t=e.userData;G.a.dispatch(Object(_.c)(t))}(t)}},D=n(14),U=function(e){var t=e.children,n=e.setSpinnerIsActive,c=e.currentPage,o=Object(a.useState)(!1),u=p()(o,2),s=u[0],i=u[1];return Object(a.useEffect)((function(){console.dir(c);var e=!0;switch(c){case P.a.PAGE.PAGE_NOT_FOUND:e=!1}e?Object(D.a)({route:"get-starting-data/".concat(c),data:{},callback:function(e){console.dir("get-starting-data/".concat(c)),console.dir(e),e.ok&&M(c,e),i(!0),n(!1)}}):(i(!0),n(!1))}),[]),r.a.createElement(r.a.Fragment,null,s?t:"")};function R(e){var t=Object(f.c)(d.b),n=Object(f.b)();return r.a.createElement(U,l()({},e,{currentPage:t.currentPage,setSpinnerIsActive:function(e){n(Object(O.c)(e))}}))}var F=function(e){var t=e.children,n=e.className,a=void 0===n?"":n;return r.a.createElement("div",{className:"pageContainer"},r.a.createElement(o,null,r.a.createElement(s,null,r.a.createElement(C,{runAtStart:!0}),r.a.createElement(y,null,r.a.createElement(g,null,r.a.createElement(R,null,r.a.createElement(x,null),r.a.createElement("div",{className:a},t)))))))};function H(e){return r.a.createElement(F,e)}},,,,function(e,t,n){var a=n(8),r=n(21);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},function(e,t,n){var a=n(8),r=n(23);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},function(e,t,n){var a=n(8),r=n(25);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},function(e,t,n){var a=n(8),r=n(27);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},function(e,t,n){var a=n(8),r=n(29);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},function(e,t,n){var a=n(8),r=n(31);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},function(e,t,n){var a=n(8),r=n(33);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},function(e,t,n){var a=n(8),r=n(35);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,function(e,t,n){var a=n(8),r=n(93);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},function(e,t,n){var a=n(8),r=n(95);"string"==typeof(r=r.__esModule?r.default:r)&&(r=[[e.i,r,""]]);var c={insert:"head",singleton:!1};a(r,c);e.exports=r.locals||{}},function(e,t,n){},,,,,,,,,,,,,,,function(e,t,n){"use strict";n.r(t);var a=n(0),r=n.n(a),c=n(18),o=n(36),u=n(2),s=(n(92),n(4)),i=n(13),l=n.n(i),m=(n(3),n(94),n(16)),p=n(1),f=function(e){return l()(e),r.a.createElement(m.a,{className:"schedulePlanApp",page:p.a.PAGE.SCHEDULE_PLAN})};function d(e){return r.a.createElement(f,e)}console.dir("schedule"),console.log("HOST_TO_API_SERVER","http://rmh");var v=document.getElementById("app");Object(c.createRoot)(v).render(r.a.createElement(u.a,{store:s.a},r.a.createElement(o.a,null,r.a.createElement(d,null))))}]);