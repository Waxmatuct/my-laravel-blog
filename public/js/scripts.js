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

eval("// $(document).ready(function(){\n// \t$(\".menu_link\").click(function() {\n// \t\t$(\".menu_link\").toggleClass(\"menu_link_active\");\n// \t\t$(\".site-nav-content ul\").toggleClass(\"menu_active\");\n// \t});\n//     $(function() {\n//     $(window).on(\"scroll resize\", function() {\n//         var o = $(window).scrollTop() / ($(document).height() - $(window).height());\n//         $(\".progress-bar\").css({\n//             \"width\": (100 * o | 0) + \"%\"\n//         \t});\n//         $('progress')[0].value = o;\n//     \t})\n//     });\n// });\ndocument.getElementById('switchTheme').addEventListener('click', function () {\n  var htmlClasses = document.querySelector('html').classList;\n\n  if (localStorage.theme == 'dark') {\n    htmlClasses.remove('dark');\n    localStorage.removeItem('theme');\n  } else {\n    htmlClasses.add('dark');\n    localStorage.theme = 'dark';\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcz9iOGQ4Il0sIm5hbWVzIjpbImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJhZGRFdmVudExpc3RlbmVyIiwiaHRtbENsYXNzZXMiLCJxdWVyeVNlbGVjdG9yIiwiY2xhc3NMaXN0IiwibG9jYWxTdG9yYWdlIiwidGhlbWUiLCJyZW1vdmUiLCJyZW1vdmVJdGVtIiwiYWRkIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQUEsUUFBUSxDQUFDQyxjQUFULENBQXdCLGFBQXhCLEVBQXVDQyxnQkFBdkMsQ0FBd0QsT0FBeEQsRUFBaUUsWUFBVztBQUUzRSxNQUFJQyxXQUFXLEdBQUdILFFBQVEsQ0FBQ0ksYUFBVCxDQUF1QixNQUF2QixFQUErQkMsU0FBakQ7O0FBRUEsTUFBR0MsWUFBWSxDQUFDQyxLQUFiLElBQXNCLE1BQXpCLEVBQWlDO0FBRWhDSixJQUFBQSxXQUFXLENBQUNLLE1BQVosQ0FBbUIsTUFBbkI7QUFFQUYsSUFBQUEsWUFBWSxDQUFDRyxVQUFiLENBQXdCLE9BQXhCO0FBRUEsR0FORCxNQU1PO0FBRU5OLElBQUFBLFdBQVcsQ0FBQ08sR0FBWixDQUFnQixNQUFoQjtBQUVBSixJQUFBQSxZQUFZLENBQUNDLEtBQWIsR0FBcUIsTUFBckI7QUFFQTtBQUVELENBbEJEIiwic291cmNlc0NvbnRlbnQiOlsiLy8gJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcbi8vIFx0JChcIi5tZW51X2xpbmtcIikuY2xpY2soZnVuY3Rpb24oKSB7XG4vLyBcdFx0JChcIi5tZW51X2xpbmtcIikudG9nZ2xlQ2xhc3MoXCJtZW51X2xpbmtfYWN0aXZlXCIpO1xuLy8gXHRcdCQoXCIuc2l0ZS1uYXYtY29udGVudCB1bFwiKS50b2dnbGVDbGFzcyhcIm1lbnVfYWN0aXZlXCIpO1xuLy8gXHR9KTtcblxuLy8gICAgICQoZnVuY3Rpb24oKSB7XG4vLyAgICAgJCh3aW5kb3cpLm9uKFwic2Nyb2xsIHJlc2l6ZVwiLCBmdW5jdGlvbigpIHtcbi8vICAgICAgICAgdmFyIG8gPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCkgLyAoJChkb2N1bWVudCkuaGVpZ2h0KCkgLSAkKHdpbmRvdykuaGVpZ2h0KCkpO1xuLy8gICAgICAgICAkKFwiLnByb2dyZXNzLWJhclwiKS5jc3Moe1xuLy8gICAgICAgICAgICAgXCJ3aWR0aFwiOiAoMTAwICogbyB8IDApICsgXCIlXCJcbi8vICAgICAgICAgXHR9KTtcbi8vICAgICAgICAgJCgncHJvZ3Jlc3MnKVswXS52YWx1ZSA9IG87XG4vLyAgICAgXHR9KVxuLy8gICAgIH0pO1xuLy8gfSk7XG5cbmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzd2l0Y2hUaGVtZScpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG5cdFx0XG5cdGxldCBodG1sQ2xhc3NlcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2h0bWwnKS5jbGFzc0xpc3Q7XG5cblx0aWYobG9jYWxTdG9yYWdlLnRoZW1lID09ICdkYXJrJykge1xuXG5cdFx0aHRtbENsYXNzZXMucmVtb3ZlKCdkYXJrJyk7XG5cblx0XHRsb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgndGhlbWUnKVxuXG5cdH0gZWxzZSB7XG5cblx0XHRodG1sQ2xhc3Nlcy5hZGQoJ2RhcmsnKTtcblxuXHRcdGxvY2FsU3RvcmFnZS50aGVtZSA9ICdkYXJrJztcblxuXHR9XG5cbn0pOyJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/scripts.js\n");

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