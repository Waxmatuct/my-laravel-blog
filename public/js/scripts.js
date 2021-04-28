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

eval("$(document).ready(function () {\n  $(\".menu_link\").click(function () {\n    $(\".menu_link\").toggleClass(\"menu_link_active\");\n    $(\".site-nav-content ul\").toggleClass(\"menu_active\");\n  });\n  $(function () {\n    $(window).on(\"scroll resize\", function () {\n      var o = $(window).scrollTop() / ($(document).height() - $(window).height());\n      $(\".progress-bar\").css({\n        \"width\": (100 * o | 0) + \"%\"\n      });\n      $('progress')[0].value = o;\n    });\n  });\n});\ndocument.getElementById('switchTheme').addEventListener('click', function () {\n  var htmlClasses = document.querySelector('html').classList;\n\n  if (localStorage.theme == 'dark') {\n    htmlClasses.remove('dark');\n    localStorage.removeItem('theme');\n  } else {\n    htmlClasses.add('dark');\n    localStorage.theme = 'dark';\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcz9iOGQ4Il0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiY2xpY2siLCJ0b2dnbGVDbGFzcyIsIndpbmRvdyIsIm9uIiwibyIsInNjcm9sbFRvcCIsImhlaWdodCIsImNzcyIsInZhbHVlIiwiZ2V0RWxlbWVudEJ5SWQiLCJhZGRFdmVudExpc3RlbmVyIiwiaHRtbENsYXNzZXMiLCJxdWVyeVNlbGVjdG9yIiwiY2xhc3NMaXN0IiwibG9jYWxTdG9yYWdlIiwidGhlbWUiLCJyZW1vdmUiLCJyZW1vdmVJdGVtIiwiYWRkIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFVO0FBQzNCRixFQUFBQSxDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCRyxLQUFoQixDQUFzQixZQUFXO0FBQ2hDSCxJQUFBQSxDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCSSxXQUFoQixDQUE0QixrQkFBNUI7QUFDQUosSUFBQUEsQ0FBQyxDQUFDLHNCQUFELENBQUQsQ0FBMEJJLFdBQTFCLENBQXNDLGFBQXRDO0FBQ0EsR0FIRDtBQUtHSixFQUFBQSxDQUFDLENBQUMsWUFBVztBQUNiQSxJQUFBQSxDQUFDLENBQUNLLE1BQUQsQ0FBRCxDQUFVQyxFQUFWLENBQWEsZUFBYixFQUE4QixZQUFXO0FBQ3JDLFVBQUlDLENBQUMsR0FBR1AsQ0FBQyxDQUFDSyxNQUFELENBQUQsQ0FBVUcsU0FBVixNQUF5QlIsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWVEsTUFBWixLQUF1QlQsQ0FBQyxDQUFDSyxNQUFELENBQUQsQ0FBVUksTUFBVixFQUFoRCxDQUFSO0FBQ0FULE1BQUFBLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJVLEdBQW5CLENBQXVCO0FBQ25CLGlCQUFTLENBQUMsTUFBTUgsQ0FBTixHQUFVLENBQVgsSUFBZ0I7QUFETixPQUF2QjtBQUdBUCxNQUFBQSxDQUFDLENBQUMsVUFBRCxDQUFELENBQWMsQ0FBZCxFQUFpQlcsS0FBakIsR0FBeUJKLENBQXpCO0FBQ0YsS0FORjtBQU9DLEdBUkEsQ0FBRDtBQVNILENBZkQ7QUFpQkFOLFFBQVEsQ0FBQ1csY0FBVCxDQUF3QixhQUF4QixFQUF1Q0MsZ0JBQXZDLENBQXdELE9BQXhELEVBQWlFLFlBQVc7QUFFM0UsTUFBSUMsV0FBVyxHQUFHYixRQUFRLENBQUNjLGFBQVQsQ0FBdUIsTUFBdkIsRUFBK0JDLFNBQWpEOztBQUVBLE1BQUdDLFlBQVksQ0FBQ0MsS0FBYixJQUFzQixNQUF6QixFQUFpQztBQUVoQ0osSUFBQUEsV0FBVyxDQUFDSyxNQUFaLENBQW1CLE1BQW5CO0FBRUFGLElBQUFBLFlBQVksQ0FBQ0csVUFBYixDQUF3QixPQUF4QjtBQUVBLEdBTkQsTUFNTztBQUVOTixJQUFBQSxXQUFXLENBQUNPLEdBQVosQ0FBZ0IsTUFBaEI7QUFFQUosSUFBQUEsWUFBWSxDQUFDQyxLQUFiLEdBQXFCLE1BQXJCO0FBRUE7QUFFRCxDQWxCRCIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XG5cdCQoXCIubWVudV9saW5rXCIpLmNsaWNrKGZ1bmN0aW9uKCkge1xuXHRcdCQoXCIubWVudV9saW5rXCIpLnRvZ2dsZUNsYXNzKFwibWVudV9saW5rX2FjdGl2ZVwiKTtcblx0XHQkKFwiLnNpdGUtbmF2LWNvbnRlbnQgdWxcIikudG9nZ2xlQ2xhc3MoXCJtZW51X2FjdGl2ZVwiKTtcblx0fSk7XG5cbiAgICAkKGZ1bmN0aW9uKCkge1xuICAgICQod2luZG93KS5vbihcInNjcm9sbCByZXNpemVcIiwgZnVuY3Rpb24oKSB7XG4gICAgICAgIHZhciBvID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpIC8gKCQoZG9jdW1lbnQpLmhlaWdodCgpIC0gJCh3aW5kb3cpLmhlaWdodCgpKTtcbiAgICAgICAgJChcIi5wcm9ncmVzcy1iYXJcIikuY3NzKHtcbiAgICAgICAgICAgIFwid2lkdGhcIjogKDEwMCAqIG8gfCAwKSArIFwiJVwiXG4gICAgICAgIFx0fSk7XG4gICAgICAgICQoJ3Byb2dyZXNzJylbMF0udmFsdWUgPSBvO1xuICAgIFx0fSlcbiAgICB9KTtcbn0pO1xuXG5kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnc3dpdGNoVGhlbWUnKS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uKCkge1xuXHRcdFxuXHRsZXQgaHRtbENsYXNzZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdodG1sJykuY2xhc3NMaXN0O1xuXG5cdGlmKGxvY2FsU3RvcmFnZS50aGVtZSA9PSAnZGFyaycpIHtcblxuXHRcdGh0bWxDbGFzc2VzLnJlbW92ZSgnZGFyaycpO1xuXG5cdFx0bG9jYWxTdG9yYWdlLnJlbW92ZUl0ZW0oJ3RoZW1lJylcblxuXHR9IGVsc2Uge1xuXG5cdFx0aHRtbENsYXNzZXMuYWRkKCdkYXJrJyk7XG5cblx0XHRsb2NhbFN0b3JhZ2UudGhlbWUgPSAnZGFyayc7XG5cblx0fVxuXG59KTsiXSwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3NjcmlwdHMuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/scripts.js\n");

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