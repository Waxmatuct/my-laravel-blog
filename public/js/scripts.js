/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/scripts.js":
/*!*********************************!*\
  !*** ./resources/js/scripts.js ***!
  \*********************************/
/***/ (() => {

eval("document.getElementById('switchTheme').addEventListener('click', function () {\n  var htmlClasses = document.querySelector('html').classList;\n\n  if (localStorage.theme == 'dark') {\n    htmlClasses.remove('dark');\n    localStorage.removeItem('theme');\n    this.checked = false;\n  } else {\n    htmlClasses.add('dark');\n    localStorage.theme = 'dark';\n    this.checked = true;\n  }\n});\ndocument.getElementById('showNav').addEventListener('click', function () {\n  var menu = document.getElementById('menu').classList;\n\n  if (menu.contains('hidden')) {\n    menu.remove('hidden');\n  } else {\n    menu.add('hidden');\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcz9iOGQ4Il0sIm5hbWVzIjpbImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJhZGRFdmVudExpc3RlbmVyIiwiaHRtbENsYXNzZXMiLCJxdWVyeVNlbGVjdG9yIiwiY2xhc3NMaXN0IiwibG9jYWxTdG9yYWdlIiwidGhlbWUiLCJyZW1vdmUiLCJyZW1vdmVJdGVtIiwiY2hlY2tlZCIsImFkZCIsIm1lbnUiLCJjb250YWlucyJdLCJtYXBwaW5ncyI6IkFBQUFBLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixhQUF4QixFQUF1Q0MsZ0JBQXZDLENBQXdELE9BQXhELEVBQWlFLFlBQVc7QUFFM0UsTUFBSUMsV0FBVyxHQUFHSCxRQUFRLENBQUNJLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQWpEOztBQUVBLE1BQUlDLFlBQVksQ0FBQ0MsS0FBYixJQUFzQixNQUExQixFQUFrQztBQUVqQ0osSUFBQUEsV0FBVyxDQUFDSyxNQUFaLENBQW1CLE1BQW5CO0FBRUFGLElBQUFBLFlBQVksQ0FBQ0csVUFBYixDQUF3QixPQUF4QjtBQUVBLFNBQUtDLE9BQUwsR0FBZSxLQUFmO0FBRUEsR0FSRCxNQVFPO0FBRU5QLElBQUFBLFdBQVcsQ0FBQ1EsR0FBWixDQUFnQixNQUFoQjtBQUVBTCxJQUFBQSxZQUFZLENBQUNDLEtBQWIsR0FBcUIsTUFBckI7QUFFQSxTQUFLRyxPQUFMLEdBQWUsSUFBZjtBQUVBO0FBRUQsQ0F0QkQ7QUF3QkFWLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixTQUF4QixFQUFtQ0MsZ0JBQW5DLENBQW9ELE9BQXBELEVBQTZELFlBQVc7QUFFdkUsTUFBSVUsSUFBSSxHQUFHWixRQUFRLENBQUNDLGNBQVQsQ0FBd0IsTUFBeEIsRUFBZ0NJLFNBQTNDOztBQUVBLE1BQUlPLElBQUksQ0FBQ0MsUUFBTCxDQUFjLFFBQWQsQ0FBSixFQUE2QjtBQUU1QkQsSUFBQUEsSUFBSSxDQUFDSixNQUFMLENBQVksUUFBWjtBQUVBLEdBSkQsTUFJTztBQUVOSSxJQUFBQSxJQUFJLENBQUNELEdBQUwsQ0FBUyxRQUFUO0FBRUE7QUFFRCxDQWREIiwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3N3aXRjaFRoZW1lJykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcblx0XHRcblx0bGV0IGh0bWxDbGFzc2VzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignaHRtbCcpLmNsYXNzTGlzdDtcblxuXHRpZiAobG9jYWxTdG9yYWdlLnRoZW1lID09ICdkYXJrJykge1xuXG5cdFx0aHRtbENsYXNzZXMucmVtb3ZlKCdkYXJrJyk7XG5cblx0XHRsb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgndGhlbWUnKVxuXHRcdFxuXHRcdHRoaXMuY2hlY2tlZCA9IGZhbHNlXG5cblx0fSBlbHNlIHtcblxuXHRcdGh0bWxDbGFzc2VzLmFkZCgnZGFyaycpO1xuXG5cdFx0bG9jYWxTdG9yYWdlLnRoZW1lID0gJ2RhcmsnXG5cblx0XHR0aGlzLmNoZWNrZWQgPSB0cnVlXG5cblx0fVxuXG59KTtcblxuZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3Nob3dOYXYnKS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuXHRcdFxuXHR2YXIgbWVudSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdtZW51JykuY2xhc3NMaXN0O1xuXG5cdGlmIChtZW51LmNvbnRhaW5zKCdoaWRkZW4nKSkge1xuXG5cdFx0bWVudS5yZW1vdmUoJ2hpZGRlbicpO1xuXG5cdH0gZWxzZSB7XG5cblx0XHRtZW51LmFkZCgnaGlkZGVuJyk7XG5cblx0fVxuXG59KTsiXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3NjcmlwdHMuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/scripts.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/scripts.js"]();
/******/ 	
/******/ })()
;