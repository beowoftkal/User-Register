/*!
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md.
 */(()=>{var t={704:(t,e,o)=>{t.exports=o(79)("./src/core.js")},492:(t,e,o)=>{t.exports=o(79)("./src/engine.js")},273:(t,e,o)=>{t.exports=o(79)("./src/ui.js")},209:(t,e,o)=>{t.exports=o(79)("./src/utils.js")},79:t=>{"use strict";t.exports=CKEditor5.dll}},e={};function o(r){var i=e[r];if(void 0!==i)return i.exports;var n=e[r]={exports:{}};return t[r](n,n.exports,o),n.exports}o.d=(t,e)=>{for(var r in e)o.o(e,r)&&!o.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:e[r]})},o.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),o.r=t=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})};var r={};(()=>{"use strict";o.r(r),o.d(r,{DecoupledEditor:()=>P});var t=o(704),e=o(209);const i=function(t){return null!=t&&"object"==typeof t};const n="object"==typeof global&&global&&global.Object===Object&&global;var s="object"==typeof self&&self&&self.Object===Object&&self;const l=(n||s||Function("return this")()).Symbol;var a=Object.prototype,c=a.hasOwnProperty,d=a.toString,u=l?l.toStringTag:void 0;const h=function(t){var e=c.call(t,u),o=t[u];try{t[u]=void 0;var r=!0}catch(t){}var i=d.call(t);return r&&(e?t[u]=o:delete t[u]),i};var b=Object.prototype.toString;const p=function(t){return b.call(t)};var g=l?l.toStringTag:void 0;const f=function(t){return null==t?void 0===t?"[object Undefined]":"[object Null]":g&&g in Object(t)?h(t):p(t)};const m=function(t,e){return function(o){return t(e(o))}}(Object.getPrototypeOf,Object);var v=Function.prototype,y=Object.prototype,w=v.toString,E=y.hasOwnProperty,j=w.call(Object);const O=function(t){if(!i(t)||"[object Object]"!=f(t))return!1;var e=m(t);if(null===e)return!0;var o=E.call(e,"constructor")&&e.constructor;return"function"==typeof o&&o instanceof o&&w.call(o)==j};const x=function(t){return i(t)&&1===t.nodeType&&!O(t)};var T=o(273),D=o(492);class F extends t.EditorUI{constructor(t,e){super(t),this.view=e}init(){const t=this.editor,e=this.view,o=t.editing.view,r=e.editable,i=o.document.getRoot();e.editable.name=i.rootName,e.render();const n=r.element;this.setEditableElement(r.name,n),this.focusTracker.add(n),e.editable.bind("isFocused").to(this.focusTracker),o.attachDomRoot(n),this._initPlaceholder(),this._initToolbar(),this.fire("ready")}destroy(){const t=this.view;this.editor.editing.view.detachDomRoot(t.editable.name),t.destroy(),super.destroy()}_initToolbar(){const t=this.editor,e=this.view.toolbar;e.fillFromConfig(t.config.get("toolbar"),this.componentFactory),(0,T.enableToolbarKeyboardFocus)({origin:t.editing.view,originFocusTracker:this.focusTracker,originKeystrokeHandler:t.keystrokes,toolbar:e})}_initPlaceholder(){const t=this.editor,e=t.editing.view,o=e.document.getRoot(),r=t.sourceElement,i=t.config.get("placeholder")||r&&"textarea"===r.tagName.toLowerCase()&&r.getAttribute("placeholder");i&&(0,D.enablePlaceholder)({view:e,element:o,text:i,isDirectHost:!1,keepOnFocus:!0})}}class S extends T.EditorUIView{constructor(t,e,o={}){super(t);const r=t.t;this.toolbar=new T.ToolbarView(t,{shouldGroupWhenFull:o.shouldToolbarGroupWhenFull}),this.editable=new T.InlineEditableUIView(t,e,o.editableElement,{label:t=>r("Rich Text Editor. Editing area: %0",t.name)}),this.toolbar.extendTemplate({attributes:{class:["ck-reset_all","ck-rounded-corners"],dir:t.uiLanguageDirection}})}render(){super.render(),this.registerChild([this.toolbar,this.editable])}}class P extends t.Editor{constructor(o,r={}){if(!x(o)&&void 0!==r.initialData)throw new e.CKEditorError("editor-create-initial-data",null);super(r),void 0===this.config.get("initialData")&&this.config.set("initialData",function(t){return x(t)?(0,e.getDataFromElement)(t):t}(o)),x(o)&&(this.sourceElement=o,(0,t.secureSourceElement)(this)),this.model.document.createRoot();const i=!this.config.get("toolbar.shouldNotGroupWhenFull"),n=new S(this.locale,this.editing.view,{editableElement:this.sourceElement,shouldToolbarGroupWhenFull:i});this.ui=new F(this,n)}destroy(){const t=this.getData();return this.ui.destroy(),super.destroy().then((()=>{this.sourceElement&&this.updateSourceElement(t)}))}static create(t,o={}){return new Promise((r=>{if(x(t)&&"TEXTAREA"===t.tagName)throw new e.CKEditorError("editor-wrong-element",null);const i=new this(t,o);r(i.initPlugins().then((()=>i.ui.init())).then((()=>i.data.init(i.config.get("initialData")))).then((()=>i.fire("ready"))).then((()=>i)))}))}}(0,e.mix)(P,t.ElementApiMixin),(0,e.mix)(P,t.DataApiMixin)})(),(window.CKEditor5=window.CKEditor5||{}).editorDecoupled=r})();