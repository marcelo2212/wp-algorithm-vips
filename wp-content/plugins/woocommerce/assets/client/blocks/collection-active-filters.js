(()=>{var e,t={5893:(e,t,l)=>{"use strict";l.r(t);var o=l(9196);const r=window.wp.blocks;var i=l(2911),c=l(444);const n=(0,o.createElement)(c.SVG,{xmlns:"http://www.w3.org/2000/SVG",viewBox:"0 0 24 24"},(0,o.createElement)("path",{fill:"none",d:"M0 0h24v24H0z"}),(0,o.createElement)("path",{d:"M17 6H7c-3.31 0-6 2.69-6 6s2.69 6 6 6h10c3.31 0 6-2.69 6-6s-2.69-6-6-6zm0 10H7c-2.21 0-4-1.79-4-4s1.79-4 4-4h10c2.21 0 4 1.79 4 4s-1.79 4-4 4zm0-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"})),s=window.wc.wcSettings;var a,m,p,d,u,w,v,b,_,y;const g=(0,s.getSetting)("wcBlocksConfig",{buildPhase:1,pluginUrl:"",productCount:0,defaultAvatar:"",restApiRoutes:{},wordCountType:"words"}),E=(g.pluginUrl,g.pluginUrl,g.buildPhase),S=(null===(a=s.STORE_PAGES.shop)||void 0===a||a.permalink,null===(m=s.STORE_PAGES.checkout)||void 0===m||m.id,null===(p=s.STORE_PAGES.checkout)||void 0===p||p.permalink,null===(d=s.STORE_PAGES.privacy)||void 0===d||d.permalink,null===(u=s.STORE_PAGES.privacy)||void 0===u||u.title,null===(w=s.STORE_PAGES.terms)||void 0===w||w.permalink,null===(v=s.STORE_PAGES.terms)||void 0===v||v.title,null===(b=s.STORE_PAGES.cart)||void 0===b||b.id,null===(_=s.STORE_PAGES.cart)||void 0===_||_.permalink,null!==(y=s.STORE_PAGES.myaccount)&&void 0!==y&&y.permalink?s.STORE_PAGES.myaccount.permalink:(0,s.getSetting)("wpLoginUrl","/wp-login.php"),(0,s.getSetting)("localPickupEnabled",!1),(0,s.getSetting)("countries",{})),f=(0,s.getSetting)("countryData",{}),k=(Object.fromEntries(Object.keys(f).filter((e=>!0===f[e].allowBilling)).map((e=>[e,S[e]||""]))),Object.fromEntries(Object.keys(f).filter((e=>!0===f[e].allowBilling)).map((e=>[e,f[e].states||[]]))),Object.fromEntries(Object.keys(f).filter((e=>!0===f[e].allowShipping)).map((e=>[e,S[e]||""]))),Object.fromEntries(Object.keys(f).filter((e=>!0===f[e].allowShipping)).map((e=>[e,f[e].states||[]]))),Object.fromEntries(Object.keys(f).map((e=>[e,f[e].locale||[]]))),{address:["first_name","last_name","company","address_1","address_2","city","postcode","country","state","phone"],contact:["email"],additional:[]}),h=((0,s.getSetting)("addressFieldsLocations",k).address,(0,s.getSetting)("addressFieldsLocations",k).contact,(0,s.getSetting)("addressFieldsLocations",k).additional,JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","name":"woocommerce/collection-active-filters","version":"1.0.0","title":"Collection Active Filters","description":"Display the currently active filters.","category":"woocommerce","keywords":["WooCommerce"],"textdomain":"woocommerce","apiVersion":2,"ancestor":["woocommerce/collection-filters"],"supports":{"interactivity":true},"usesContext":["queryId"],"attributes":{"displayStyle":{"type":"string","default":"list"}}}')),O=window.wp.blockEditor;var P=l(5736),C=l(3849),j=l.n(C);const x=window.wp.components,T=({attributes:e,setAttributes:t})=>{const{displayStyle:l}=e;return(0,o.createElement)(O.InspectorControls,null,(0,o.createElement)(x.PanelBody,{title:(0,P.__)("Display Settings","woocommerce")},(0,o.createElement)(x.__experimentalToggleGroupControl,{label:(0,P.__)("Display Style","woocommerce"),value:l,onChange:e=>t({displayStyle:e}),className:"wc-block-active-filter__style-toggle"},(0,o.createElement)(x.__experimentalToggleGroupControlOption,{value:"list",label:(0,P.__)("List","woocommerce")}),(0,o.createElement)(x.__experimentalToggleGroupControlOption,{value:"chips",label:(0,P.__)("Chips","woocommerce")}))))},R=window.wc.blocksComponents;var G=l(6860);const A=({type:e,name:t,prefix:l="",removeCallback:r=(()=>null),showLabel:c=!0,displayStyle:n})=>{const s=l?(0,o.createElement)(o.Fragment,null,l," ",t):t,a=(0,P.sprintf)(/* translators: %s attribute value used in the filter. For example: yellow, green, small, large. */ /* translators: %s attribute value used in the filter. For example: yellow, green, small, large. */
(0,P.__)("Remove %s filter","woocommerce"),t);return(0,o.createElement)("li",{className:"wc-block-active-filters__list-item",key:`${e}: ${t}`},c&&(0,o.createElement)("span",{className:"wc-block-active-filters__list-item-type"},`${e}: `),"chips"===n?(0,o.createElement)(R.RemovableChip,{element:"span",text:s,onRemove:r,radius:"large",ariaLabel:a}):(0,o.createElement)("span",{className:"wc-block-active-filters__list-item-name"},(0,o.createElement)("button",{className:"wc-block-active-filters__list-item-remove",onClick:r},(0,o.createElement)(i.Z,{className:"wc-block-components-chip__remove-icon",icon:G.Z,size:16}),(0,o.createElement)(R.Label,{screenReaderLabel:a})),s))};l(5176),E>2&&(0,r.registerBlockType)(h,{icon:{src:(0,o.createElement)(i.Z,{icon:n,className:"wc-block-editor-components-block-icon"})},edit:e=>{const{displayStyle:t}=e.attributes,l=(0,O.useBlockProps)({className:"wc-block-active-filters"});return(0,o.createElement)("div",{...l},(0,o.createElement)(T,{...e}),(0,o.createElement)(x.Disabled,null,(0,o.createElement)("ul",{className:j()("wc-block-active-filters__list",{"wc-block-active-filters__list--chips":"chips"===t})},(0,o.createElement)(A,{type:(0,P.__)("Size","woocommerce"),name:(0,P.__)("Small","woocommerce"),displayStyle:t}),(0,o.createElement)(A,{type:(0,P.__)("Color","woocommerce"),name:(0,P.__)("Blue","woocommerce"),displayStyle:t}))))}})},5176:()=>{},9196:e=>{"use strict";e.exports=window.React},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n},444:e=>{"use strict";e.exports=window.wp.primitives}},l={};function o(e){var r=l[e];if(void 0!==r)return r.exports;var i=l[e]={exports:{}};return t[e].call(i.exports,i,i.exports,o),i.exports}o.m=t,e=[],o.O=(t,l,r,i)=>{if(!l){var c=1/0;for(m=0;m<e.length;m++){for(var[l,r,i]=e[m],n=!0,s=0;s<l.length;s++)(!1&i||c>=i)&&Object.keys(o.O).every((e=>o.O[e](l[s])))?l.splice(s--,1):(n=!1,i<c&&(c=i));if(n){e.splice(m--,1);var a=r();void 0!==a&&(t=a)}}return t}i=i||0;for(var m=e.length;m>0&&e[m-1][2]>i;m--)e[m]=e[m-1];e[m]=[l,r,i]},o.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return o.d(t,{a:t}),t},o.d=(e,t)=>{for(var l in t)o.o(t,l)&&!o.o(e,l)&&Object.defineProperty(e,l,{enumerable:!0,get:t[l]})},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),o.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.j=4367,(()=>{var e={4367:0};o.O.j=t=>0===e[t];var t=(t,l)=>{var r,i,[c,n,s]=l,a=0;if(c.some((t=>0!==e[t]))){for(r in n)o.o(n,r)&&(o.m[r]=n[r]);if(s)var m=s(o)}for(t&&t(l);a<c.length;a++)i=c[a],o.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return o.O(m)},l=self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[];l.forEach(t.bind(null,0)),l.push=t.bind(null,l.push.bind(l))})();var r=o.O(void 0,[2869],(()=>o(5893)));r=o.O(r),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["collection-active-filters"]=r})();