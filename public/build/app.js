"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
/* harmony import */ var react_dom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js");
/* harmony import */ var _component_App__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./component/App */ "./assets/component/App.jsx");
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
// import './styles/app.css';



var reactRoot = document.getElementById('root'); // Est-ce qu'il y'a une balise avec id root pour démarrer React ?
// if(reactRoot != undefined)

react_dom__WEBPACK_IMPORTED_MODULE_1__.render( /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__.createElement(_component_App__WEBPACK_IMPORTED_MODULE_2__.App, null), reactRoot);

/***/ }),

/***/ "./assets/component/App.jsx":
/*!**********************************!*\
  !*** ./assets/component/App.jsx ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "App": () => (/* binding */ App)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.array.join.js */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! react */ "./node_modules/react/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }
























function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }


var App = /*#__PURE__*/function (_React$Component) {
  _inherits(App, _React$Component);

  var _super = _createSuper(App);

  function App() {
    var _this;

    _classCallCheck(this, App);

    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }

    _this = _super.call.apply(_super, [this].concat(args));

    _defineProperty(_assertThisInitialized(_this), "state", // Le state est l'état de notre composant (données surveillées par React)
    {
      cities: [],
      // liste des villes (vient de la BDD, du back)
      city: '',
      suggestion: ''
    });

    _defineProperty(_assertThisInitialized(_this), "onChangeInput", function (event) {
      var suggestions = [];

      if (event.target.value == '') {
        _this.setState({
          city: event.target.value,
          suggestion: ''
        });

        return;
      } // Parcours de toutes les villes à la recherche de la saisie


      var _iterator = _createForOfIteratorHelper(_this.state.cities),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var city = _step.value;

          // Est-ce que la ville contient la saisie?
          if (city.includes(event.target.value.toLowerCase()) == true) // if (city.includes(event.target.value.toLowerCase()) == true)
            //startsWith() permete de rechercher les villes qui COMMENCENT par la saisie
            {
              // Oui, enregistrement de la ville dans les suggestions
              suggestions.push(city);
            }
        } // Ca réinjecte la saisie dans city

      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }

      _this.setState({
        city: event.target.value,
        suggestion: suggestions.join()
      });
    });

    return _this;
  }

  _createClass(App, [{
    key: "componentDidMount",
    value: // Méthode appelé automatiquement par React après le premier render()
    function componentDidMount() {
      var _this2 = this;

      window.fetch('/api_data').then(function (response) {
        return response.json();
      }).then(function (villes) {
        _this2.setState({
          cities: villes
        });
      });
    }
  }, {
    key: "render",
    value: function render() {
      return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22__.createElement("div", {
        className: "App"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22__.createElement("header", {
        className: "App-header"
      }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22__.createElement("label", {
        htmlFor: "city"
      }, "?"), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22__.createElement("input", {
        type: "text",
        id: "city",
        value: this.state.city,
        onChange: this.onChangeInput
      }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_22__.createElement("p", null, this.state.suggestion)));
    }
  }]);

  return App;
}(react__WEBPACK_IMPORTED_MODULE_22__.Component);

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-e0a77f"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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dHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb21wb25lbnQvQXBwLmpzeCJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXHJcbi8vIGltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XHJcbmltcG9ydCBSZWFjdCBmcm9tICdyZWFjdCc7XHJcbmltcG9ydCBSZWFjdERPTSBmcm9tICdyZWFjdC1kb20nO1xyXG5pbXBvcnQgeyBBcHAgfSBmcm9tICcuL2NvbXBvbmVudC9BcHAnO1xyXG5cclxubGV0IHJlYWN0Um9vdCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdyb290Jyk7XHJcblxyXG4vLyBFc3QtY2UgcXUnaWwgeSdhIHVuZSBiYWxpc2UgYXZlYyBpZCByb290IHBvdXIgZMOpbWFycmVyIFJlYWN0ID9cclxuXHJcbi8vIGlmKHJlYWN0Um9vdCAhPSB1bmRlZmluZWQpXHJcbiAgICBSZWFjdERPTS5yZW5kZXIoPEFwcCAvPiwgcmVhY3RSb290KTtcclxuXHJcbiAgICAgXHJcbiIsImltcG9ydCBSZWFjdCBmcm9tIFwicmVhY3RcIjtcclxuXHJcbmV4cG9ydCBjbGFzcyBBcHAgZXh0ZW5kcyBSZWFjdC5Db21wb25lbnQge1xyXG5cclxuICAgIC8vIENyw6lhdGlvbiBkdSBzdGF0ZVxyXG4gICAgc3RhdGUgPSAvLyBMZSBzdGF0ZSBlc3QgbCfDqXRhdCBkZSBub3RyZSBjb21wb3NhbnQgKGRvbm7DqWVzIHN1cnZlaWxsw6llcyBwYXIgUmVhY3QpXHJcbiAgICB7XHJcbiAgICAgIGNpdGllczogW10sIC8vIGxpc3RlIGRlcyB2aWxsZXMgKHZpZW50IGRlIGxhIEJERCwgZHUgYmFjaylcclxuICAgICAgY2l0eTogJycsXHJcbiAgICAgIHN1Z2dlc3Rpb246ICcnIFxyXG4gICAgfTtcclxuXHJcbiAgICAvLyBNw6l0aG9kZSBhcHBlbMOpIGF1dG9tYXRpcXVlbWVudCBwYXIgUmVhY3QgYXByw6hzIGxlIHByZW1pZXIgcmVuZGVyKClcclxuICAgIGNvbXBvbmVudERpZE1vdW50KCkgXHJcbiAgICB7XHJcbiAgICB3aW5kb3cuZmV0Y2goJy9hcGlfZGF0YScpXHJcbiAgICAgICAgLnRoZW4oZnVuY3Rpb24ocmVzcG9uc2UpXHJcbiAgICAgICAge1xyXG4gICAgICAgICAgICByZXR1cm4gcmVzcG9uc2UuanNvbigpO1xyXG4gICAgICAgIH0pXHJcbiAgICAgICAgLnRoZW4oKHZpbGxlcykgPT5cclxuICAgICAgICB7XHJcbiAgICAgICAgICAgIHRoaXMuc2V0U3RhdGUoe2NpdGllczogdmlsbGVzfSk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG5cclxuICAgIG9uQ2hhbmdlSW5wdXQgPSAoZXZlbnQpID0+IHtcclxuXHJcbiAgICAgIGxldCBzdWdnZXN0aW9ucyA9IFtdO1xyXG5cclxuICAgICAgaWYoZXZlbnQudGFyZ2V0LnZhbHVlID09ICcnKVxyXG4gICAgICB7XHJcbiAgICAgICAgdGhpcy5zZXRTdGF0ZSh7IGNpdHk6IGV2ZW50LnRhcmdldC52YWx1ZSwgc3VnZ2VzdGlvbjogJycgfSk7XHJcbiAgICAgICAgcmV0dXJuO1xyXG4gICAgICB9XHJcblxyXG4gICAgICAvLyBQYXJjb3VycyBkZSB0b3V0ZXMgbGVzIHZpbGxlcyDDoCBsYSByZWNoZXJjaGUgZGUgbGEgc2Fpc2llXHJcbiAgICAgIGZvciAobGV0IGNpdHkgb2YgdGhpcy5zdGF0ZS5jaXRpZXMpXHJcbiAgICAgIHtcclxuICAgICAgICAvLyBFc3QtY2UgcXVlIGxhIHZpbGxlIGNvbnRpZW50IGxhIHNhaXNpZT9cclxuICAgICAgICBpZiAoY2l0eS5pbmNsdWRlcyhldmVudC50YXJnZXQudmFsdWUudG9Mb3dlckNhc2UoKSkgPT0gdHJ1ZSlcclxuICAgICAgICAvLyBpZiAoY2l0eS5pbmNsdWRlcyhldmVudC50YXJnZXQudmFsdWUudG9Mb3dlckNhc2UoKSkgPT0gdHJ1ZSlcclxuICAgICAgICAvL3N0YXJ0c1dpdGgoKSBwZXJtZXRlIGRlIHJlY2hlcmNoZXIgbGVzIHZpbGxlcyBxdWkgQ09NTUVOQ0VOVCBwYXIgbGEgc2Fpc2llXHJcbiAgICAgICAge1xyXG4gICAgICAgICAgLy8gT3VpLCBlbnJlZ2lzdHJlbWVudCBkZSBsYSB2aWxsZSBkYW5zIGxlcyBzdWdnZXN0aW9uc1xyXG4gICAgICAgICAgc3VnZ2VzdGlvbnMucHVzaChjaXR5KTtcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuXHJcblxyXG4gICAgICAvLyBDYSByw6lpbmplY3RlIGxhIHNhaXNpZSBkYW5zIGNpdHlcclxuICAgICAgdGhpcy5zZXRTdGF0ZSh7IFxyXG4gICAgICAgIGNpdHk6IGV2ZW50LnRhcmdldC52YWx1ZSxcclxuICAgICAgICBzdWdnZXN0aW9uOiBzdWdnZXN0aW9ucy5qb2luKCkgXHJcbiAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuXHJcbiAgICByZW5kZXIoKSB7XHJcblxyXG4gICAgICByZXR1cm4gKFxyXG4gICAgICAgIDxkaXYgY2xhc3NOYW1lPVwiQXBwXCI+XHJcbiAgICAgICAgICA8aGVhZGVyIGNsYXNzTmFtZT1cIkFwcC1oZWFkZXJcIj5cclxuICAgICAgICAgICAgPGxhYmVsIGh0bWxGb3I9XCJjaXR5XCI+PzwvbGFiZWw+XHJcbiAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwidGV4dFwiIGlkPVwiY2l0eVwiIHZhbHVlPXsgdGhpcy5zdGF0ZS5jaXR5IH0gb25DaGFuZ2U9eyB0aGlzLm9uQ2hhbmdlSW5wdXQgfSAvPlxyXG4gICAgICAgICAgICA8cD57IHRoaXMuc3RhdGUuc3VnZ2VzdGlvbiB9PC9wPlxyXG4gICAgICAgICAgPC9oZWFkZXI+XHJcbiAgICAgICAgPC9kaXY+XHJcbiAgICAgICk7XHJcbiAgICB9XHJcblxyXG4gIH1cclxuIl0sIm5hbWVzIjpbIlJlYWN0IiwiUmVhY3RET00iLCJBcHAiLCJyZWFjdFJvb3QiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwicmVuZGVyIiwiY2l0aWVzIiwiY2l0eSIsInN1Z2dlc3Rpb24iLCJldmVudCIsInN1Z2dlc3Rpb25zIiwidGFyZ2V0IiwidmFsdWUiLCJzZXRTdGF0ZSIsInN0YXRlIiwiaW5jbHVkZXMiLCJ0b0xvd2VyQ2FzZSIsInB1c2giLCJqb2luIiwid2luZG93IiwiZmV0Y2giLCJ0aGVuIiwicmVzcG9uc2UiLCJqc29uIiwidmlsbGVzIiwib25DaGFuZ2VJbnB1dCIsIkNvbXBvbmVudCJdLCJzb3VyY2VSb290IjoiIn0=