(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-ef48788c"],{"0235":function(t,n,e){},"2a43":function(t,n,e){"use strict";e("2ea8")},"2ea8":function(t,n,e){},"39fa":function(t,n,e){t.exports=e.p+"img/language.svg"},6573:function(t,n,e){"use strict";e("9478")},"6aed":function(t,n,e){t.exports=e.p+"img/scan-history.svg"},"6c87":function(t,n,e){"use strict";e("b3ba")},"727a":function(t,n,e){"use strict";e("de21")},"7dcd":function(t,n,e){},"919d":function(t,n,e){"use strict";var s=function(){var t=this,n=t.$createElement,e=t._self._c||n;return t.showConnectSuccess?e("div",{staticClass:"cky-connect-success",attrs:{id:"cky-connect-success"}},[t.syncing?e("div",{staticClass:"cky-connect-loader"},[e("cky-spinner"),e("h4",[t._v(" "+t._s(t.$i18n.__("Please wait while we connect your site to app.cookieyes.com","cookie-law-info"))+" ")])],1):e("div",{staticClass:"cky-connect-success-container"},[e("div",{staticClass:"cky-connect-success-icon"}),e("div",{staticClass:"cky-connect-success-message"},[t._t("message",(function(){return[e("h2",[t._v(" "+t._s(t.$i18n.__("Your website is connected to app.cookieyes.com","cookie-law-info"))+" ")]),e("p",[t._v(" "+t._s(t.$i18n.__("You can now continue to manage all your existing settings and access all free CookieYes features from your web app account","cookie-law-info"))+" ")])]}))],2),e("div",{staticClass:"cky-connect-success-actions"},[t._t("action",(function(){return[e("button",{staticClass:"cky-button cky-button-medium cky-external-link",on:{click:function(n){return t.redirectToApp()}}},[t._v(" "+t._s(t.$i18n.__("Go to CookieYes Web App","cookie-law-info"))+" ")])]}))],2)])]):t._e()},c=[],o=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("span",{staticClass:"cky-spinner-loader"})},i=[],a={name:"CkySpinner",components:{}},r=a,l=(e("6c87"),e("2877")),u=Object(l["a"])(r,o,i,!1,null,null,null),d=u.exports,y={name:"CkyConnectSuccess",components:{CkySpinner:d},props:{timeout:{type:Number,default:6e3}},data(){return{showConnectSuccess:!1,syncing:!1}},methods:{showMessage(){this.showConnectSuccess=!0},redirectToApp(){this.$router.redirectToApp(),this.showConnectSuccess=!1,this.$router.redirectToDashboard(this.$route.name)}},created(){this.$root.$on("afterConnection",()=>{this.syncing=!0,this.showMessage()}),this.$root.$on("afterSyncing",async()=>{this.syncing=!1})}},k=y,g=(e("a209"),Object(l["a"])(k,s,c,!1,null,null,null));n["a"]=g.exports},"91db":function(t,n,e){t.exports=e.p+"img/regulation.svg"},9478:function(t,n,e){},"947c":function(t,n,e){t.exports=e.p+"img/banner-status.svg"},9573:function(t,n,e){"use strict";e.r(n);var s=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div",{staticClass:"cky-section cky-section-dashboard cky-zero--padding cky-zero--margin"},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("cky-connect-success"),e("cky-connect-notice")],1)]),t.loading?t._e():e("div",{staticClass:"cky-section-content"},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("cky-dashboard-overview")],1)]),t.account.connected&&!t.syncing?e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-7"},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("cky-scan-summary")],1)])]),e("div",{staticClass:"cky-col-5"},[e("cky-consent-chart")],1)]):t._e()])])},c=[],o=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("cky-card",{attrs:{title:t.$i18n.__("Cookie Summary","cookie-law-info"),loading:t.cardLoader},scopedSlots:t._u([{key:"body",fn:function(){return[e("div",{staticClass:"cky-stats-section"},t._l(t.statistics,(function(t){return e("cky-stats-card",{key:t.slug,attrs:{statistics:t}})})),1)]},proxy:!0}])})},i=[],a=e("f9c4"),r=e("9610"),l=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div",{staticClass:"cky-stats-col"},[t.statistics.icon?e("div",{staticClass:"cky-stats-icon"},[e("cky-icon",{attrs:{icon:t.statistics.icon,width:t.iconWidth,color:t.iconColor}})],1):t._e(),e("div",{staticClass:"cky-stats-title"},[t._v(t._s(t.statistics.title))]),e("div",{staticClass:"cky-stats-count"},[t._v(t._s(t.statistics.count))])])},u=[],d=e("1f3d"),y={components:{CkyIcon:d["a"]},name:"CkyStatsCard",props:{statistics:Object,iconWidth:{type:String,default:"30"},iconColor:{type:String,default:"#000000"}},computed:{getLoadingClass(){return{"cky-loading":this.loading}}}},k=y,g=(e("c5a6"),e("2877")),p=Object(g["a"])(k,l,u,!1,null,null,null),f=p.exports,_={components:{CkyCard:r["a"],CkyStatsCard:f},data(){return{loading:!0,stats:[{slug:"cookies",icon:!1,title:this.$i18n.__("Total Cookies","cookie-law-info"),count:0},{slug:"categories",icon:!1,title:this.$i18n.__("Total Categories","cookie-law-info"),count:0},{slug:"pages",icon:!1,title:this.$i18n.__("Pages Scanned","cookie-law-info"),count:0}]}},methods:{async getstats(){this.loading=!0;try{const t=await a["a"].get({path:"dashboard/summary"});t&&this.stats.forEach((function(n){const e=t[n.slug]?t[n.slug]:0;n.count=e})),this.loading=!1}catch(t){console.error(t)}}},computed:{statistics(){return this.stats},cardLoader(){return!this.$store.state.settings.info||this.loading}},created(){this.getstats()}},C=_,h=Object(g["a"])(C,o,i,!1,null,null,null),w=h.exports,v=e("919d"),m=function(){var t=this,n=t.$createElement,e=t._self._c||n;return t.account.connected&&!t.syncing?e("cky-notice",{staticClass:"cky-connect-notice",attrs:{type:"default"}},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("h4",{staticClass:"cky-admin-notice-header"},[e("cky-icon",{attrs:{icon:"successCircle",color:"#00aa63",width:"16px"}}),t._v(" "+t._s(t.$i18n.__("Your website is connected to CookieYes","cookie-law-info"))+" ")],1),e("div",{staticClass:"cky-connect-notice-message"},[e("p",[t._v(" "+t._s(t.$i18n.__("You can access all the plugin settings (Cookie Banner, Cookie Manager, Languages & Policy Generators) on the web app and unlock new features like Cookie Scan and Consent Log.","cookie-law-info"))+" ")])]),e("button",{staticClass:"cky-button cky-external-link",on:{click:function(n){return n.preventDefault(),t.$router.redirectToApp()}}},[t._v(" "+t._s(t.$i18n.__("Go to Web App","cookie-law-info"))+" ")])])])]):t.showNotice&&!t.tablesMissing?e("cky-notice",{staticClass:"cky-connect-notice cky-connect-notice-disabled",attrs:{type:"default",isDismissable:!0},on:{onDismiss:function(n){return t.removeNotice()}}},[e("div",{staticClass:"cky-row cky-align-center"},[e("div",{staticClass:"cky-col-8"},[e("h3",{staticClass:"cky-admin-notice-header"},[e("cky-icon",{attrs:{icon:"connect",width:"44px"}}),t._v(" "+t._s(t.$i18n.__("Connect your website to CookieYes","cookie-law-info"))+" ")],1),e("p",{staticStyle:{"margin-top":"10px"},domProps:{innerHTML:t._s(t.contents.connect)}}),e("div",{staticClass:"cky-connect-features"},[e("p",{staticClass:"cky-align-center"},[e("span",[t._v("✓")]),t._v(t._s(t.$i18n.__("Cookie Scanner - Discover cookies on your site and auto-block them prior to user consent (Legally required)","cookie-law-info"))+" ")]),e("p",[e("span",[t._v("✓")]),t._v(t._s(t.$i18n.__("Consent Log - Record user consents to demonstrate proof of compliance (Legally required)","cookie-law-info"))+" ")])])]),e("div",{staticClass:"cky-col-4 cky-justify-end"},[e("div",{staticClass:"cky-connect-button-container"},[e("cky-button",{ref:"ckyButtonConnectNew",staticClass:"cky-button-connect cky-button-medium",nativeOn:{click:function(n){return t.connectToApp()}}},[t._v(" "+t._s(t.$i18n.__("New? Create a Free Account","cookie-law-info"))+" "),e("template",{slot:"loader"},[t._v(t._s(t.$i18n.__("Connecting...","cookie-law-info")))])],2),e("cky-button",{ref:"ckyButtonConnectExisting",staticClass:"cky-button-connect cky-button-medium cky-button-outline",nativeOn:{click:function(n){return t.connectToApp(!0)}}},[t._v(" "+t._s(t.$i18n.__("Connect Your Existing Account","cookie-law-info"))+" "),e("template",{slot:"loader"},[t._v(t._s(t.$i18n.__("Connecting...","cookie-law-info")))])],2)],1)])])]):t._e()},b=[],$=e("462b"),S=e("c068"),x=e("2f62"),L={name:"CkyConnectNotice",mixins:[S["a"]],components:{CkyNotice:$["a"],CkyIcon:d["a"]},data(){return{syncing:!1,contents:{connect:this.$i18n.sprintf(this.$i18n.__("Create a free account to connect with %sCookieYes web app%s. After connecting, you can manage all your settings from the web app and access advanced features:","cookie-law-info"),"<b>","</b>")}}},methods:{async removeNotice(){await a["a"].post({path:"/settings/notices/connect_notice",data:{}})}},computed:{...Object(x["d"])("settings",["info"]),account(){return this.getOption("account")},showNotice(){return!!window.ckyAppNotices.connect_notice},tablesMissing(){return!!this.info.tables_missing}},mounted(){this.account.connected||(this.$root.$on("beforeConnection",()=>{this.syncing=!0}),this.$root.$on("afterConnection",()=>{}),this.$root.$on("afterSyncing",()=>{this.syncing=!1}))}},A=L,O=(e("2a43"),Object(g["a"])(A,m,b,!1,null,null,null)),B=O.exports,j=function(){var t=this,n=t.$createElement,s=t._self._c||n;return t.pluginStatus&&!t.tablesMissing?s("div",{class:["cky-dashboard-overview",{connected:!!t.account.connected}]},[s("div",{staticClass:"cky-row"},[s("div",{staticClass:"cky-col-12"},[s("div",{staticClass:"cky-card-header"},[s("h5",{staticClass:"cky-card-title"},[t._v(" "+t._s(t.$i18n.__("Overview","cookie-law-info"))+" ")])])]),s("div",{staticClass:"cky-col-6"},[s("cky-card",{attrs:{loading:t.cardLoader},scopedSlots:t._u([{key:"body",fn:function(){return[s("div",{staticClass:"cky-card-row"},[s("div",{staticClass:"cky-info-widget-container"},[s("div",{staticClass:"cky-info-widget"},[s("div",{staticClass:"cky-info-widget-icon"},[s("img",{attrs:{src:e("947c"),alt:"layout"}})]),s("div",{staticClass:"cky-info-widget-content"},[s("span",{staticClass:"cky-info-widget-title"},[t._v(t._s(t.$i18n.__("Banner status","cookie-law-info")))]),s("span",{staticClass:"cky-info-widget-text",staticStyle:{color:"#00aa62"}},[t._v(" "+t._s(t.$i18n.__("Active","cookie-law-info"))+" ")])])]),s("div",{staticClass:"cky-info-widget"},[s("div",{staticClass:"cky-info-widget-icon"},[s("img",{attrs:{src:e("91db"),alt:"layout"}})]),s("div",{staticClass:"cky-info-widget-content"},[s("span",{staticClass:"cky-info-widget-title"},[t._v(t._s(t.$i18n.__("Regulation","cookie-law-info")))]),s("span",{staticClass:"cky-info-widget-text",staticStyle:{"text-transform":"uppercase"}},[t._v(" "+t._s(t.applicableLaws)+" ")])])])])]),s("div",{staticClass:"cky-card-row"},[s("div",{staticClass:"cky-info-widget-container"},[s("div",{staticClass:"cky-info-widget"},[s("div",{staticClass:"cky-info-widget-icon"},[s("img",{attrs:{src:e("6aed"),alt:"layout"}})]),s("div",{staticClass:"cky-info-widget-content"},[s("span",{staticClass:"cky-info-widget-title"},[t._v(t._s(t.$i18n.__("Last cookie scan","cookie-law-info")))]),s("span",{staticClass:"cky-info-widget-text"},[t.scans.date&&t.account.connected?s("span",{staticStyle:{"font-size":"14px"}},[t._v(" "+t._s(t.scans.date.date||t.$i18n.__("Not available","cookie-law-info"))+" "),s("span",{staticStyle:{"font-weight":"400"}},[t._v(t._s(t.scans.date.time||""))])]):s("span",[t._v(t._s(t.$i18n.__("Not available","cookie-law-info")))])])])]),s("div",{staticClass:"cky-info-widget"},[s("div",{staticClass:"cky-info-widget-icon"},[s("img",{attrs:{src:e("39fa"),alt:"layout"}})]),s("div",{staticClass:"cky-info-widget-content"},[s("span",{staticClass:"cky-info-widget-title"},[t._v(t._s(t.$i18n.__("Language","cookie-law-info")))]),s("span",{staticClass:"cky-info-widget-text"},[t._v(" "+t._s(t.defaultLanguage.name)+" ")])])])])]),t.account.connected?s("div",{staticClass:"cky-card-row"},[s("div",{staticClass:"cky-card-row-actions"},[s("a",{staticClass:"\n\t\t\t\t\t\t\t\t\tcky-button\n\t\t\t\t\t\t\t\t\tcky-button-outline\n\t\t\t\t\t\t\t\t\tcky-external-link\n\t\t\t\t\t\t\t\t\tcky-button-medium\n\t\t\t\t\t\t\t\t",on:{click:function(n){return t.$router.redirectToApp("customize")}}},[t._v(t._s(t.$i18n.__("Customize Banner","cookie-law-info"))+" ")]),s("a",{staticClass:"\n\t\t\t\t\t\t\t\t\tcky-link cky-actions-link cky-button-icon cky-external-link\n\t\t\t\t\t\t\t\t",attrs:{href:t.getSiteURL(),target:"_blank"}},[t._v(t._s(t.$i18n.__("Preview Banner","cookie-law-info"))+" ")])])]):s("div",{staticClass:"cky-card-row"},[s("div",{staticClass:"cky-card-row-actions"},[s("router-link",{attrs:{to:{name:"customize"},custom:""},scopedSlots:t._u([{key:"default",fn:function(n){var e=n.navigate;return[s("a",{staticClass:"cky-button cky-button-outline cky-button-medium",on:{click:e}},[t._v(t._s(t.$i18n.__("Customize Banner","cookie-law-info"))+" ")])]}}],null,!1,1347445872)}),s("a",{staticClass:"\n\t\t\t\t\t\t\t\t\tcky-link cky-actions-link cky-button-icon cky-external-link\n\t\t\t\t\t\t\t\t",attrs:{href:t.getSiteURL(),target:"_blank"}},[t._v(t._s(t.$i18n.__("Preview Banner","cookie-law-info"))+" ")])],1)])]},proxy:!0}],null,!1,3414214022)})],1),s("div",{staticClass:"cky-col-6"},[t.connected?s("upgrade-widget"):s("tutorial-video")],1)])]):t._e()},I=[],T=e("c4aa"),N=function(){var t=this,n=t.$createElement,e=t._self._c||n;return t.account.connected?e("cky-card",{staticClass:"cky-upgrade-widget",scopedSlots:t._u([{key:"body",fn:function(){return[e("div",{staticClass:"cky-row cky-align-center"},[e("div",{staticClass:"cky-col-10"},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("h3",{staticClass:"cky-admin-notice-header"},[t._v(" "+t._s(t.content.title)+" ")]),e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("p",{staticClass:"cky-py-2"},[t._v(" "+t._s(t.content.description)+" ")])])])])]),e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-8"},[e("div",{staticClass:"cky-premium-features-list"},[e("ul",t._l(t.content.features,(function(n,s){return e("li",{key:s},[t._v(" "+t._s(n)+" ")])})),0)])])]),e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("div",{staticClass:"cky-align-center cky-py-2"},[e("a",{staticClass:"\n\t\t\t\t\t\t\t\t\tcky-button cky-button-medium cky-button-icon cky-center\n\t\t\t\t\t\t\t\t",attrs:{href:t.getURL(),target:"_blank"}},["ultimate"!==t.plan.toLowerCase()?e("cky-icon",{attrs:{icon:"crown",width:"20"}}):t._e(),t._v(" "+t._s(t.content.cta)+" ")],1)])])])])])]},proxy:!0}],null,!1,2990724177)}):t._e()},E=[],U=e("3840");const G={default:{title:U["a"].__("Keep pace with compliance as your business grows","cookie-law-info"),description:U["a"].__("Access advanced features and future-proof your business against legal risks. Get 2 months free on annual plans!","cookie-law-info"),features:[U["a"].__("Get unlimited pageviews/month","cookie-law-info"),U["a"].__("Schedule monthly cookie scan","cookie-law-info"),U["a"].__("Geo-target cookie banner","cookie-law-info"),U["a"].__("Remove CookieYes branding","cookie-law-info")],cta:U["a"].__("Upgrade Now","cookie-law-info")},custom:{title:U["a"].__("Automate your compliance at scale with our enterprise plan","cookie-law-info"),description:U["a"].__("Your growing website needs scalable compliance. Get access to custom features tailored to meet your unique requirements.","cookie-law-info"),features:[U["a"].__("Get unlimited pageviews/month","cookie-law-info"),U["a"].__("Unlimited pages scanned/month","cookie-law-info"),U["a"].__("Advanced CSS customization","cookie-law-info"),U["a"].__("Dedicated customer support","cookie-law-info")],cta:U["a"].__("Get Custom Plan","cookie-law-info")}};var Y={name:"UpgradeWidget",mixins:[S["a"]],components:{CkyCard:r["a"],CkyIcon:d["a"]},props:{},data(){return{}},methods:{getURL(){let t=`${window.ckyGlobals.webApp.url}/settings?upgrade_id=${this.account.website_id}&openUpgrade=true&upgrade_source=cypluginupgrade`;return"ultimate"===this.plan.toLowerCase()&&(t="https://www.cookieyes.com/support/?query=enterprise&ref=cypluginupgrade#enterprise"),t}},computed:{account(){return this.getOption("account")},plan(){return!!this.getInfo("plan")&&this.getInfo("plan").name||"free"},content(){return"ultimate"===this.plan.toLowerCase()?G.custom:G.default}},async created(){}},D=Y,R=(e("727a"),Object(g["a"])(D,N,E,!1,null,null,null)),M=R.exports,P=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("cky-card",{staticClass:"cky-tutorial-widget",scopedSlots:t._u([{key:"body",fn:function(){return[e("iframe",{staticClass:"youtube-player",staticStyle:{width:"100%",height:"100%"},attrs:{src:"https://www.youtube.com/embed/g20giM91rs4?rel=0",allowfullscreen:"true",sandbox:"allow-scripts allow-same-origin allow-popups allow-presentation"}})]},proxy:!0}])})},z=[],W={name:"TutorialVideo",components:{CkyCard:r["a"]},props:{},methods:{},computed:{}},q=W,F=Object(g["a"])(q,P,z,!1,null,null,null),J=F.exports,V={name:"CkyDashboardOverview",components:{CkyCard:r["a"],UpgradeWidget:M,TutorialVideo:J},props:{},data(){return{loading:!0}},methods:{loadBanner:async function(){await T["a"].getActiveBanner()},getSiteURL(){const t=new URL(window.ckyGlobals.site.url);return t.searchParams.append("cky_preview",!0),t.toString()}},computed:{cardLoader(){return!this.$store.state.settings.info||this.loading},banner(){return this.$store.state.banners.current},consentLogs(){return this.getInfo("consent_logs")&&this.getInfo("consent_logs").status||!1},account(){return this.getOption("account")},connected(){return!!this.account.connected},scans(){return this.getInfo("scans")&&this.getInfo("scans")||{}},applicableLaws(){if(this.account.connected){const t=this.getInfo("banners");return t.laws&&t.laws||"gdpr"}return this.banner.properties.settings.applicableLaw},pluginStatus(){return this.$store.state.settings.status},tablesMissing(){return!!this.info.tables_missing},...Object(x["c"])("languages",{defaultLanguage:"getDefault"}),...Object(x["d"])("settings",["info"])},async created(){this.loading=!0,await this.loadBanner(),this.loading=!1}},H=V,K=(e("acb2"),Object(g["a"])(H,j,I,!1,null,null,null)),Q=K.exports,X={name:"Dashboard",mixins:[S["a"]],components:{CkyScanSummary:w,CkyConnectSuccess:v["a"],CkyConnectNotice:B,CkyDashboardOverview:Q,CkyConsentChart:()=>e.e("chunk-55c96061").then(e.bind(null,"03b4"))},props:{},data(){return{scanStatus:!0,loading:!0,syncing:!1}},methods:{loadBanner:async function(){await T["a"].getActiveBanner()},connectScan(){this.connectToApp(),this.$root.$on("afterConnection",()=>{this.$refs.ckyButtonConnectScan.startLoading()})},connectLog(){this.connectToApp(),this.$root.$on("afterConnection",()=>{this.$refs.ckyButtonConnectLog.startLoading()})},getSiteURL(){const t=new URL(window.ckyGlobals.site.url);return t.searchParams.append("cky_preview",!0),t.toString()}},computed:{banner(){return this.$store.state.banners.current},consentLogs(){return this.getInfo("consent_logs")&&this.getInfo("consent_logs").status||!1},account(){return this.getOption("account")},bannerStatus(){return this.getInfo("banners")&&this.getInfo("banners").status||!1},scans(){return this.getInfo("scans")&&this.getInfo("scans")||{}},...Object(x["c"])("languages",{defaultLanguage:"getDefault"})},async created(){this.loading=!0;try{await this.loadBanner(),this.loading=!1,this.$root.$on("beforeConnection",()=>{this.syncing=!0}),this.$root.$on("afterSyncing",()=>{this.syncing=!1})}catch(t){console.error(t)}}},Z=X,tt=(e("6573"),Object(g["a"])(Z,s,c,!1,null,"2710f015",null));n["default"]=tt.exports},9610:function(t,n,e){"use strict";var s=function(){var t=this,n=t.$createElement,e=t._self._c||n;return t.pluginStatus?e("div",{staticClass:"cky-card",class:t.getLoadingClass},[t.title?e("div",{staticClass:"cky-card-header"},[e("h5",{staticClass:"cky-card-title"},[t._v(" "+t._s(t.title)+" ")]),t.hasActions?e("div",{staticClass:"cky-card-actions"},[t._t("headerAction")],2):t._e()]):t._e(),t.hasBodySlot?e("div",{class:t.getBodyClass},[t.loading?e("cky-card-loader"):t._t("body")],2):t._e(),t._t("outside"),t.hasFooterSlot?e("div",{staticClass:"cky-card-footer"},[t._t("footer")],2):t._e()],2):t._e()},c=[],o=e("17aa"),i={components:{CkyCardLoader:o["a"]},name:"CkyCard",props:{title:{type:String,required:!1},bodyClass:{type:String,default:""},loading:{type:Boolean,default:!1},fullWidth:{type:Boolean,default:!1}},computed:{hasActions(){return!!this.$slots.headerAction},hasBodySlot(){return!!this.$slots.body},hasFooterSlot(){return!!this.$slots.footer},getLoadingClass(){return{"cky-loading":this.loading}},getBodyClass(){return{"cky-card-body":!0,"cky-card-body--full":this.fullWidth,[this.bodyClass]:this.bodyClass}},pluginStatus(){return this.$store.state.settings.status}}},a=i,r=e("2877"),l=Object(r["a"])(a,s,c,!1,null,null,null);n["a"]=l.exports},a209:function(t,n,e){"use strict";e("d6c6")},acb2:function(t,n,e){"use strict";e("7dcd")},b3ba:function(t,n,e){},c5a6:function(t,n,e){"use strict";e("0235")},d6c6:function(t,n,e){},de21:function(t,n,e){}}]);