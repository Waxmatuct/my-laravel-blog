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

eval("// $(document).ready(function(){\n// \t$(\".menu_link\").click(function() {\n// \t\t$(\".menu_link\").toggleClass(\"menu_link_active\");\n// \t\t$(\".site-nav-content ul\").toggleClass(\"menu_active\");\n// \t});\n//     $(function() {\n//     $(window).on(\"scroll resize\", function() {\n//         var o = $(window).scrollTop() / ($(document).height() - $(window).height());\n//         $(\".progress-bar\").css({\n//             \"width\": (100 * o | 0) + \"%\"\n//         \t});\n//         $('progress')[0].value = o;\n//     \t})\n//     });\n// });\ndocument.getElementById('switchTheme').addEventListener('click', function () {\n  var htmlClasses = document.querySelector('html').classList;\n\n  if (localStorage.theme == 'dark') {\n    htmlClasses.remove('dark');\n    localStorage.removeItem('theme');\n    this.checked = false;\n  } else {\n    htmlClasses.add('dark');\n    localStorage.theme = 'dark';\n    this.checked = true;\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcz9iOGQ4Il0sIm5hbWVzIjpbImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJhZGRFdmVudExpc3RlbmVyIiwiaHRtbENsYXNzZXMiLCJxdWVyeVNlbGVjdG9yIiwiY2xhc3NMaXN0IiwibG9jYWxTdG9yYWdlIiwidGhlbWUiLCJyZW1vdmUiLCJyZW1vdmVJdGVtIiwiY2hlY2tlZCIsImFkZCJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUFBLFFBQVEsQ0FBQ0MsY0FBVCxDQUF3QixhQUF4QixFQUF1Q0MsZ0JBQXZDLENBQXdELE9BQXhELEVBQWlFLFlBQVc7QUFFM0UsTUFBSUMsV0FBVyxHQUFHSCxRQUFRLENBQUNJLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQWpEOztBQUVBLE1BQUlDLFlBQVksQ0FBQ0MsS0FBYixJQUFzQixNQUExQixFQUFrQztBQUVqQ0osSUFBQUEsV0FBVyxDQUFDSyxNQUFaLENBQW1CLE1BQW5CO0FBRUFGLElBQUFBLFlBQVksQ0FBQ0csVUFBYixDQUF3QixPQUF4QjtBQUVBLFNBQUtDLE9BQUwsR0FBZSxLQUFmO0FBRUEsR0FSRCxNQVFPO0FBRU5QLElBQUFBLFdBQVcsQ0FBQ1EsR0FBWixDQUFnQixNQUFoQjtBQUVBTCxJQUFBQSxZQUFZLENBQUNDLEtBQWIsR0FBcUIsTUFBckI7QUFFQSxTQUFLRyxPQUFMLEdBQWUsSUFBZjtBQUVBO0FBRUQsQ0F0QkQiLCJzb3VyY2VzQ29udGVudCI6WyIvLyAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xuLy8gXHQkKFwiLm1lbnVfbGlua1wiKS5jbGljayhmdW5jdGlvbigpIHtcbi8vIFx0XHQkKFwiLm1lbnVfbGlua1wiKS50b2dnbGVDbGFzcyhcIm1lbnVfbGlua19hY3RpdmVcIik7XG4vLyBcdFx0JChcIi5zaXRlLW5hdi1jb250ZW50IHVsXCIpLnRvZ2dsZUNsYXNzKFwibWVudV9hY3RpdmVcIik7XG4vLyBcdH0pO1xuXG4vLyAgICAgJChmdW5jdGlvbigpIHtcbi8vICAgICAkKHdpbmRvdykub24oXCJzY3JvbGwgcmVzaXplXCIsIGZ1bmN0aW9uKCkge1xuLy8gICAgICAgICB2YXIgbyA9ICQod2luZG93KS5zY3JvbGxUb3AoKSAvICgkKGRvY3VtZW50KS5oZWlnaHQoKSAtICQod2luZG93KS5oZWlnaHQoKSk7XG4vLyAgICAgICAgICQoXCIucHJvZ3Jlc3MtYmFyXCIpLmNzcyh7XG4vLyAgICAgICAgICAgICBcIndpZHRoXCI6ICgxMDAgKiBvIHwgMCkgKyBcIiVcIlxuLy8gICAgICAgICBcdH0pO1xuLy8gICAgICAgICAkKCdwcm9ncmVzcycpWzBdLnZhbHVlID0gbztcbi8vICAgICBcdH0pXG4vLyAgICAgfSk7XG4vLyB9KTtcblxuZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ3N3aXRjaFRoZW1lJykuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpIHtcblx0XHRcblx0bGV0IGh0bWxDbGFzc2VzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignaHRtbCcpLmNsYXNzTGlzdDtcblxuXHRpZiAobG9jYWxTdG9yYWdlLnRoZW1lID09ICdkYXJrJykge1xuXG5cdFx0aHRtbENsYXNzZXMucmVtb3ZlKCdkYXJrJyk7XG5cblx0XHRsb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgndGhlbWUnKVxuXHRcdFxuXHRcdHRoaXMuY2hlY2tlZCA9IGZhbHNlXG5cblx0fSBlbHNlIHtcblxuXHRcdGh0bWxDbGFzc2VzLmFkZCgnZGFyaycpO1xuXG5cdFx0bG9jYWxTdG9yYWdlLnRoZW1lID0gJ2RhcmsnXG5cblx0XHR0aGlzLmNoZWNrZWQgPSB0cnVlXG5cblx0fVxuXG59KTsiXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3NjcmlwdHMuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/scripts.js\n");

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