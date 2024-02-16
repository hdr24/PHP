"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var _index_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./index.css */ "./assets/index.css");
/* harmony import */ var _index__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./index */ "./assets/index.js");




var root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.getElementById('root'));
root.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0___default().createElement((react__WEBPACK_IMPORTED_MODULE_0___default().StrictMode), null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0___default().createElement(_index__WEBPACK_IMPORTED_MODULE_3__["default"], null)));

/***/ }),

/***/ "./assets/components/Boton.js":
/*!************************************!*\
  !*** ./assets/components/Boton.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _stylesheets_Boton_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../stylesheets/Boton.css */ "./assets/stylesheets/Boton.css");


function Boton(_ref) {
  var texto = _ref.texto,
    esBotonDeClic = _ref.esBotonDeClic,
    manejarClic = _ref.manejarClic;
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0___default().createElement("button", {
    className: esBotonDeClic ? 'boton-clic' : 'boton-reiniciar',
    onClick: manejarClic
  }, texto);
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Boton);

/***/ }),

/***/ "./assets/components/Contador.js":
/*!***************************************!*\
  !*** ./assets/components/Contador.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _stylesheets_Contador_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../stylesheets/Contador.css */ "./assets/stylesheets/Contador.css");


function Contador(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0___default().createElement("div", {
    className: "contador"
  }, props.numClics);
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Contador);

/***/ }),

/***/ "./assets/index.js":
/*!*************************!*\
  !*** ./assets/index.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.error.cause.js */ "./node_modules/core-js/modules/es.error.cause.js");
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.error.to-string.js */ "./node_modules/core-js/modules/es.error.to-string.js");
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.push.js */ "./node_modules/core-js/modules/es.array.push.js");
/* harmony import */ var core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_regexp_test_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.regexp.test.js */ "./node_modules/core-js/modules/es.regexp.test.js");
/* harmony import */ var core_js_modules_es_regexp_test_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_test_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var _App_css__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./App.css */ "./assets/App.css");
/* harmony import */ var _imagenes_logo_png__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./imagenes/logo.png */ "./assets/imagenes/logo.png");
/* harmony import */ var _components_Boton__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./components/Boton */ "./assets/components/Boton.js");
/* harmony import */ var _components_Contador__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./components/Contador */ "./assets/components/Contador.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_22__);


















function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }
function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function _iterableToArrayLimit(r, l) { var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (null != t) { var e, n, i, u, a = [], f = !0, o = !1; try { if (i = (t = t.call(r)).next, 0 === l) { if (Object(t) !== t) return; f = !1; } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0); } catch (r) { o = !0, n = r; } finally { try { if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return; } finally { if (o) throw n; } } return a; } }
function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }






function Index() {
  var _useState = (0,react__WEBPACK_IMPORTED_MODULE_22__.useState)(0),
    _useState2 = _slicedToArray(_useState, 2),
    numClics = _useState2[0],
    setNumClics = _useState2[1];
  var manejarClic = function manejarClic() {
    setNumClics(numClics + 1);
  };
  var reiniciarContador = function reiniciarContador() {
    setNumClics(0);
  };
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22___default().createElement("div", {
    className: "App"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22___default().createElement("div", {
    className: "freecodecamp-logo-contenedor"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22___default().createElement("img", {
    className: "freecodecamp-logo",
    src: _imagenes_logo_png__WEBPACK_IMPORTED_MODULE_19__,
    alt: "Logo de freecodecamp"
  })), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22___default().createElement("div", {
    className: "contenedor-principal"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22___default().createElement(_components_Contador__WEBPACK_IMPORTED_MODULE_21__["default"], {
    numClics: numClics
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22___default().createElement(_components_Boton__WEBPACK_IMPORTED_MODULE_20__["default"], {
    texto: "Clic",
    esBotonDeClic: true,
    manejarClic: manejarClic
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22___default().createElement(_components_Boton__WEBPACK_IMPORTED_MODULE_20__["default"], {
    texto: "Reiniciar",
    esBotonDeClic: false,
    manejarClic: reiniciarContador
  })));
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Index);

/***/ }),

/***/ "./assets/App.css":
/*!************************!*\
  !*** ./assets/App.css ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/index.css":
/*!**************************!*\
  !*** ./assets/index.css ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/stylesheets/Boton.css":
/*!**************************************!*\
  !*** ./assets/stylesheets/Boton.css ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/stylesheets/Contador.css":
/*!*****************************************!*\
  !*** ./assets/stylesheets/Contador.css ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/imagenes/logo.png":
/*!**********************************!*\
  !*** ./assets/imagenes/logo.png ***!
  \**********************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__.p + "images/logo.5486935b.png";

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_react-dom_client_js-node_modules_core-js_modules_es_array_from_js-node_m-902d2d"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7OztBQUEwQjtBQUNjO0FBQ25CO0FBQ087QUFFNUIsSUFBTUcsSUFBSSxHQUFHRix3REFBbUIsQ0FBQ0ksUUFBUSxDQUFDQyxjQUFjLENBQUMsTUFBTSxDQUFDLENBQUM7QUFDakVILElBQUksQ0FBQ0ksTUFBTSxlQUNUUCwwREFBQSxDQUFDQSx5REFBZ0IscUJBQ2ZBLDBEQUFBLENBQUNFLDhDQUFLLE1BQUUsQ0FDUSxDQUNwQixDQUFDOzs7Ozs7Ozs7Ozs7Ozs7OztBQ1Z5QjtBQUNRO0FBRWxDLFNBQVNRLEtBQUtBLENBQUFDLElBQUEsRUFBdUM7RUFBQSxJQUFwQ0MsS0FBSyxHQUFBRCxJQUFBLENBQUxDLEtBQUs7SUFBRUMsYUFBYSxHQUFBRixJQUFBLENBQWJFLGFBQWE7SUFBRUMsV0FBVyxHQUFBSCxJQUFBLENBQVhHLFdBQVc7RUFDOUMsb0JBQ0lkLDBEQUFBO0lBQVFlLFNBQVMsRUFBRUYsYUFBYSxHQUFHLFlBQVksR0FBRyxpQkFBa0I7SUFBQ0csT0FBTyxFQUFFRjtFQUFZLEdBQ3JGRixLQUNHLENBQUM7QUFFakI7QUFFQSxpRUFBZUYsS0FBSzs7Ozs7Ozs7Ozs7Ozs7Ozs7QUNYTTtBQUNVO0FBRXBDLFNBQVNPLFFBQVFBLENBQUNDLEtBQUssRUFBRTtFQUNyQixvQkFDSWxCLDBEQUFBO0lBQUtlLFNBQVMsRUFBQztFQUFVLEdBQ3BCRyxLQUFLLENBQUNDLFFBQ04sQ0FBQztBQUVkO0FBRUEsaUVBQWVGLFFBQVE7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FDWEo7QUFDb0I7QUFDRDtBQUNNO0FBQ2xCO0FBQ087QUFHakMsU0FBU2YsS0FBS0EsQ0FBQSxFQUFHO0VBRWYsSUFBQW9CLFNBQUEsR0FBZ0NELGdEQUFRLENBQUMsQ0FBQyxDQUFDO0lBQUFFLFVBQUEsR0FBQUMsY0FBQSxDQUFBRixTQUFBO0lBQXBDSCxRQUFRLEdBQUFJLFVBQUE7SUFBRUUsV0FBVyxHQUFBRixVQUFBO0VBRTVCLElBQU1ULFdBQVcsR0FBRyxTQUFkQSxXQUFXQSxDQUFBLEVBQVM7SUFDeEJXLFdBQVcsQ0FBQ04sUUFBUSxHQUFHLENBQUMsQ0FBQztFQUMzQixDQUFDO0VBRUQsSUFBTU8saUJBQWlCLEdBQUcsU0FBcEJBLGlCQUFpQkEsQ0FBQSxFQUFTO0lBQzlCRCxXQUFXLENBQUMsQ0FBQyxDQUFDO0VBQ2hCLENBQUM7RUFFRCxvQkFDRXpCLDJEQUFBO0lBQUtlLFNBQVMsRUFBQztFQUFLLGdCQUNsQmYsMkRBQUE7SUFBS2UsU0FBUyxFQUFDO0VBQThCLGdCQUMzQ2YsMkRBQUE7SUFBS2UsU0FBUyxFQUFDLG1CQUFtQjtJQUNoQ1ksR0FBRyxFQUFFUCxnREFBSztJQUNWUSxHQUFHLEVBQUM7RUFBc0IsQ0FBQyxDQUMxQixDQUFDLGVBQ041QiwyREFBQTtJQUFLZSxTQUFTLEVBQUM7RUFBc0IsZ0JBQ25DZiwyREFBQSxDQUFDaUIsNkRBQVE7SUFBQ0UsUUFBUSxFQUFFQTtFQUFTLENBQUUsQ0FBQyxlQUNoQ25CLDJEQUFBLENBQUNVLDBEQUFLO0lBQ0pFLEtBQUssRUFBQyxNQUFNO0lBQ1pDLGFBQWEsRUFBRSxJQUFLO0lBQ3BCQyxXQUFXLEVBQUVBO0VBQVksQ0FBRSxDQUFDLGVBQzlCZCwyREFBQSxDQUFDVSwwREFBSztJQUNKRSxLQUFLLEVBQUMsV0FBVztJQUNqQkMsYUFBYSxFQUFFLEtBQU07SUFDckJDLFdBQVcsRUFBRVk7RUFBa0IsQ0FBRSxDQUNoQyxDQUNGLENBQUM7QUFFVjtBQUVBLGlFQUFleEIsS0FBSzs7Ozs7Ozs7Ozs7QUMxQ3BCOzs7Ozs7Ozs7Ozs7QUNBQTs7Ozs7Ozs7Ozs7O0FDQUE7Ozs7Ozs7Ozs7OztBQ0FBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29tcG9uZW50cy9Cb3Rvbi5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29tcG9uZW50cy9Db250YWRvci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW5kZXguanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL0FwcC5jc3M/NmVjZSIsIndlYnBhY2s6Ly8vLi9hc3NldHMvaW5kZXguY3NzPzI5OTIiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlc2hlZXRzL0JvdG9uLmNzcz82YTUyIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXNoZWV0cy9Db250YWRvci5jc3M/NDE5NyJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgUmVhY3QgZnJvbSAncmVhY3QnO1xuaW1wb3J0IFJlYWN0RE9NIGZyb20gJ3JlYWN0LWRvbS9jbGllbnQnO1xuaW1wb3J0ICcuL2luZGV4LmNzcyc7XG5pbXBvcnQgSW5kZXggZnJvbSAnLi9pbmRleCc7XG5cbmNvbnN0IHJvb3QgPSBSZWFjdERPTS5jcmVhdGVSb290KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdyb290JykpO1xucm9vdC5yZW5kZXIoXG4gIDxSZWFjdC5TdHJpY3RNb2RlPlxuICAgIDxJbmRleCAvPlxuICA8L1JlYWN0LlN0cmljdE1vZGU+XG4pO1xuIiwiaW1wb3J0IFJlYWN0IGZyb20gJ3JlYWN0JztcclxuaW1wb3J0ICcuLi9zdHlsZXNoZWV0cy9Cb3Rvbi5jc3MnO1xyXG5cclxuZnVuY3Rpb24gQm90b24oeyB0ZXh0bywgZXNCb3RvbkRlQ2xpYywgbWFuZWphckNsaWN9KSB7XHJcbiAgICByZXR1cm4gKFxyXG4gICAgICAgIDxidXR0b24gY2xhc3NOYW1lPXtlc0JvdG9uRGVDbGljID8gJ2JvdG9uLWNsaWMnIDogJ2JvdG9uLXJlaW5pY2lhcid9IG9uQ2xpY2s9e21hbmVqYXJDbGljfT5cclxuICAgICAgICAgICAge3RleHRvfVxyXG4gICAgICAgIDwvYnV0dG9uPlxyXG4gICAgKVxyXG59XHJcblxyXG5leHBvcnQgZGVmYXVsdCBCb3RvbjsiLCJpbXBvcnQgUmVhY3QgZnJvbSAncmVhY3QnO1xuaW1wb3J0ICcuLi9zdHlsZXNoZWV0cy9Db250YWRvci5jc3MnXG5cbmZ1bmN0aW9uIENvbnRhZG9yKHByb3BzKSB7XG4gICAgcmV0dXJuIChcbiAgICAgICAgPGRpdiBjbGFzc05hbWU9J2NvbnRhZG9yJz5cbiAgICAgICAgICAgIHtwcm9wcy5udW1DbGljc31cbiAgICAgICAgPC9kaXY+XG4gICAgKTtcbn1cblxuZXhwb3J0IGRlZmF1bHQgQ29udGFkb3I7IiwiaW1wb3J0ICcuL0FwcC5jc3MnO1xuaW1wb3J0IGxvZ28gZnJvbSBcIi4vaW1hZ2VuZXMvbG9nby5wbmdcIjtcbmltcG9ydCBCb3RvbiBmcm9tICcuL2NvbXBvbmVudHMvQm90b24nXG5pbXBvcnQgQ29udGFkb3IgZnJvbSAnLi9jb21wb25lbnRzL0NvbnRhZG9yJ1xuaW1wb3J0IFJlYWN0IGZyb20gJ3JlYWN0JztcbmltcG9ydCB7IHVzZVN0YXRlIH0gZnJvbSAncmVhY3QnO1xuXG5cbmZ1bmN0aW9uIEluZGV4KCkge1xuXG4gIGNvbnN0IFtudW1DbGljcywgc2V0TnVtQ2xpY3NdID0gdXNlU3RhdGUoMCk7XG5cbiAgY29uc3QgbWFuZWphckNsaWMgPSAoKSA9PiB7XG4gICAgc2V0TnVtQ2xpY3MobnVtQ2xpY3MgKyAxKTtcbiAgfVxuXG4gIGNvbnN0IHJlaW5pY2lhckNvbnRhZG9yID0gKCkgPT4ge1xuICAgIHNldE51bUNsaWNzKDApXG4gIH1cblxuICByZXR1cm4gKFxuICAgIDxkaXYgY2xhc3NOYW1lPVwiQXBwXCI+XG4gICAgICA8ZGl2IGNsYXNzTmFtZT0nZnJlZWNvZGVjYW1wLWxvZ28tY29udGVuZWRvcic+XG4gICAgICAgIDxpbWcgY2xhc3NOYW1lPSdmcmVlY29kZWNhbXAtbG9nbydcbiAgICAgICAgICBzcmM9e2xvZ299XG4gICAgICAgICAgYWx0PSdMb2dvIGRlIGZyZWVjb2RlY2FtcCcvPlxuICAgICAgPC9kaXY+XG4gICAgICA8ZGl2IGNsYXNzTmFtZT0nY29udGVuZWRvci1wcmluY2lwYWwnPlxuICAgICAgICA8Q29udGFkb3IgbnVtQ2xpY3M9e251bUNsaWNzfSAvPlxuICAgICAgICA8Qm90b25cbiAgICAgICAgICB0ZXh0bz0nQ2xpYydcbiAgICAgICAgICBlc0JvdG9uRGVDbGljPXt0cnVlfVxuICAgICAgICAgIG1hbmVqYXJDbGljPXttYW5lamFyQ2xpY30gLz5cbiAgICAgICAgPEJvdG9uXG4gICAgICAgICAgdGV4dG89J1JlaW5pY2lhcidcbiAgICAgICAgICBlc0JvdG9uRGVDbGljPXtmYWxzZX1cbiAgICAgICAgICBtYW5lamFyQ2xpYz17cmVpbmljaWFyQ29udGFkb3J9IC8+XG4gICAgICA8L2Rpdj5cbiAgICA8L2Rpdj5cbiAgKTtcbn1cblxuZXhwb3J0IGRlZmF1bHQgSW5kZXg7XG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsiUmVhY3QiLCJSZWFjdERPTSIsIkluZGV4Iiwicm9vdCIsImNyZWF0ZVJvb3QiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwicmVuZGVyIiwiY3JlYXRlRWxlbWVudCIsIlN0cmljdE1vZGUiLCJCb3RvbiIsIl9yZWYiLCJ0ZXh0byIsImVzQm90b25EZUNsaWMiLCJtYW5lamFyQ2xpYyIsImNsYXNzTmFtZSIsIm9uQ2xpY2siLCJDb250YWRvciIsInByb3BzIiwibnVtQ2xpY3MiLCJsb2dvIiwidXNlU3RhdGUiLCJfdXNlU3RhdGUiLCJfdXNlU3RhdGUyIiwiX3NsaWNlZFRvQXJyYXkiLCJzZXROdW1DbGljcyIsInJlaW5pY2lhckNvbnRhZG9yIiwic3JjIiwiYWx0Il0sInNvdXJjZVJvb3QiOiIifQ==