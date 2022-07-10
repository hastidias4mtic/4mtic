import{n as s}from"./vueComponentNormalizer.87056a83.js";import{C as _}from"./Blur.8490ecd2.js";import{C as p}from"./SettingsRow.eb71f07b.js";import{S as m}from"./External.8868c638.js";import{C as d}from"./Index.c7d3532f.js";import{C as v}from"./Card.77d72357.js";import{C as f}from"./ProBadge.7c0de2f7.js";import{C as g}from"./Index.17df93e8.js";import{A as S}from"./ToolsSettings.cc636f56.js";import"./index.01898232.js";import"./Row.13b6f3f1.js";import"./index.460e1b4b.js";import"./client.93f15631.js";import"./Tooltip.674a9fb4.js";import"./QuestionMark.83ebd18e.js";import"./Slide.f5d21606.js";const c={data(){return{strings:{news:"News Sitemap",setPublicationName:"Set Publication Name",exclude:"Exclude Pages/Posts",description:"Our Google News Sitemap lets you control which content you submit to Google News and only contains articles that were published in the last 48 hours. In order to submit a News Sitemap to Google, you must have added your site to Google\u2019s Publisher Center and had it approved.",enableSitemap:"Enable Sitemap",openSitemap:"Open News Sitemap",noIndexDisplayed:"Noindexed content will not be displayed in your sitemap.",doYou404:"Do you get a blank sitemap or 404 error?",ctaButtonText:"Upgrade to Pro and Unlock News Sitemaps",ctaHeader:this.$t.sprintf("News Sitemaps are only available for licensed %1$s %2$s users.","AIOSEO","Pro"),thisFeatureRequires:"This feature requires one of the following plans:"}}}};var $=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div")},w=[];const h={},r={};var y=s(h,$,w,!1,x,null,null,null);function x(e){for(let n in r)this[n]=r[n]}var b=function(){return y.exports}(),C=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("core-blur",[t("div",{staticClass:"aioseo-settings-row aioseo-section-description"},[e._v(" "+e._s(e.strings.description)+" "),t("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"newsSitemaps",!0))}})]),t("core-settings-row",{attrs:{name:e.strings.enableSitemap},scopedSlots:e._u([{key:"content",fn:function(){return[t("base-toggle",{attrs:{value:!0}})]},proxy:!0}])}),t("core-settings-row",{attrs:{name:e.$constants.GLOBAL_STRINGS.preview},scopedSlots:e._u([{key:"content",fn:function(){return[t("div",{staticClass:"aioseo-sitemap-preview"},[t("base-button",{attrs:{size:"medium",type:"blue"}},[t("svg-external"),e._v(" "+e._s(e.strings.openSitemap)+" ")],1)],1),t("div",{staticClass:"aioseo-description"},[e._v(" "+e._s(e.strings.noIndexDisplayed)+" "),t("br"),e._v(" "+e._s(e.strings.doYou404)+" "),t("span",{domProps:{innerHTML:e._s(e.$links.getDocLink(e.$constants.GLOBAL_STRINGS.learnMore,"blankSitemap",!0))}})])]},proxy:!0}])})],1)},N=[];const k={components:{CoreBlur:_,CoreSettingsRow:p,SvgExternal:m},mixins:[c]},o={};var P=s(k,C,N,!1,L,null,null,null);function L(e){for(let n in o)this[n]=o[n]}var A=function(){return P.exports}(),R=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{staticClass:"aioseo-news-sitemap-lite"},[t("core-card",{attrs:{slug:"newsSitemap",noSlide:!0},scopedSlots:e._u([{key:"header",fn:function(){return[e._v(" "+e._s(e.strings.news)+" "),t("core-pro-badge")]},proxy:!0}])},[t("blur"),t("cta",{attrs:{"feature-list":[e.strings.setPublicationName,e.strings.exclude],"cta-link":e.$links.getPricingUrl("news-sitemap","news-sitemap-upsell"),"button-text":e.strings.ctaButtonText,"learn-more-link":e.$links.getUpsellUrl("news-sitemap",null,"home")},scopedSlots:e._u([{key:"header-text",fn:function(){return[e._v(" "+e._s(e.strings.ctaHeader)+" ")]},proxy:!0},{key:"description",fn:function(){return[e.$isPro&&e.$addons.requiresUpgrade("aioseo-news-sitemap")&&e.$addons.currentPlans("aioseo-news-sitemap")?t("core-alert",{attrs:{type:"red"}},[e._v(" "+e._s(e.strings.thisFeatureRequires)+" "),t("strong",[e._v(e._s(e.$addons.currentPlans("aioseo-news-sitemap")))])]):e._e(),e._v(" "+e._s(e.strings.description)+" ")]},proxy:!0}])})],1)],1)},G=[];const M={components:{Blur:A,CoreAlert:d,CoreCard:v,CoreProBadge:f,Cta:g},mixins:[c]},i={};var E=s(M,R,G,!1,U,null,null,null);function U(e){for(let n in i)this[n]=i[n]}var a=function(){return E.exports}(),B=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div")},T=[];const F={},l={};var I=s(F,B,T,!1,O,null,null,null);function O(e){for(let n in l)this[n]=l[n]}var j=function(){return I.exports}(),D=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{staticClass:"aioseo-news-sitemap"},[e.shouldShowMain?t("news-sitemap"):e._e(),e.shouldShowActivate?t("activate"):e._e(),e.shouldShowUpdate?t("update"):e._e(),e.shouldShowLite?t("lite"):e._e()],1)},q=[];const H={mixins:[S],components:{Activate:b,Lite:a,NewsSitemap:a,Update:j},data(){return{addonSlug:"aioseo-news-sitemap"}}},u={};var z=s(H,D,q,!1,Y,null,null,null);function Y(e){for(let n in u)this[n]=u[n]}var ue=function(){return z.exports}();export{ue as default};
