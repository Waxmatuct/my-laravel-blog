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

eval("$(document).ready(function () {\n  $(\".menu_link\").click(function () {\n    $(\".menu_link\").toggleClass(\"menu_link_active\");\n    $(\".site-nav-content ul\").toggleClass(\"menu_active\");\n  }); // $(\".kg-gallery-row\").slick({\n  //   dots: true,\n  //   infinite: true,\n  //   speed: 1000,\n  //   fade: true,\n  //   cssEase: 'ease',\n  //   autoplay: 'true'\n  // });\n\n  $(function () {\n    $(window).on(\"scroll resize\", function () {\n      var o = $(window).scrollTop() / ($(document).height() - $(window).height());\n      $(\".progress-bar\").css({\n        \"width\": (100 * o | 0) + \"%\"\n      });\n      $('progress')[0].value = o;\n    });\n  });\n});\ndocument.getElementById('switchTheme').addEventListener('click', function () {\n  var htmlClasses = document.querySelector('html').classList;\n\n  if (localStorage.theme == 'dark') {\n    htmlClasses.remove('dark');\n    localStorage.removeItem('theme');\n  } else {\n    htmlClasses.add('dark');\n    localStorage.theme = 'dark';\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcz9iOGQ4Il0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiY2xpY2siLCJ0b2dnbGVDbGFzcyIsIndpbmRvdyIsIm9uIiwibyIsInNjcm9sbFRvcCIsImhlaWdodCIsImNzcyIsInZhbHVlIiwiZ2V0RWxlbWVudEJ5SWQiLCJhZGRFdmVudExpc3RlbmVyIiwiaHRtbENsYXNzZXMiLCJxdWVyeVNlbGVjdG9yIiwiY2xhc3NMaXN0IiwibG9jYWxTdG9yYWdlIiwidGhlbWUiLCJyZW1vdmUiLCJyZW1vdmVJdGVtIiwiYWRkIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFVO0FBQzNCRixFQUFBQSxDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCRyxLQUFoQixDQUFzQixZQUFXO0FBQ2hDSCxJQUFBQSxDQUFDLENBQUMsWUFBRCxDQUFELENBQWdCSSxXQUFoQixDQUE0QixrQkFBNUI7QUFDQUosSUFBQUEsQ0FBQyxDQUFDLHNCQUFELENBQUQsQ0FBMEJJLFdBQTFCLENBQXNDLGFBQXRDO0FBQ0EsR0FIRCxFQUQyQixDQU0zQjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVHSixFQUFBQSxDQUFDLENBQUMsWUFBVztBQUNiQSxJQUFBQSxDQUFDLENBQUNLLE1BQUQsQ0FBRCxDQUFVQyxFQUFWLENBQWEsZUFBYixFQUE4QixZQUFXO0FBQ3JDLFVBQUlDLENBQUMsR0FBR1AsQ0FBQyxDQUFDSyxNQUFELENBQUQsQ0FBVUcsU0FBVixNQUF5QlIsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWVEsTUFBWixLQUF1QlQsQ0FBQyxDQUFDSyxNQUFELENBQUQsQ0FBVUksTUFBVixFQUFoRCxDQUFSO0FBQ0FULE1BQUFBLENBQUMsQ0FBQyxlQUFELENBQUQsQ0FBbUJVLEdBQW5CLENBQXVCO0FBQ25CLGlCQUFTLENBQUMsTUFBTUgsQ0FBTixHQUFVLENBQVgsSUFBZ0I7QUFETixPQUF2QjtBQUdBUCxNQUFBQSxDQUFDLENBQUMsVUFBRCxDQUFELENBQWMsQ0FBZCxFQUFpQlcsS0FBakIsR0FBeUJKLENBQXpCO0FBQ0YsS0FORjtBQU9DLEdBUkEsQ0FBRDtBQVNILENBeEJEO0FBMEJBTixRQUFRLENBQUNXLGNBQVQsQ0FBd0IsYUFBeEIsRUFBdUNDLGdCQUF2QyxDQUF3RCxPQUF4RCxFQUFpRSxZQUFXO0FBRTNFLE1BQUlDLFdBQVcsR0FBR2IsUUFBUSxDQUFDYyxhQUFULENBQXVCLE1BQXZCLEVBQStCQyxTQUFqRDs7QUFFQSxNQUFHQyxZQUFZLENBQUNDLEtBQWIsSUFBc0IsTUFBekIsRUFBaUM7QUFFaENKLElBQUFBLFdBQVcsQ0FBQ0ssTUFBWixDQUFtQixNQUFuQjtBQUVBRixJQUFBQSxZQUFZLENBQUNHLFVBQWIsQ0FBd0IsT0FBeEI7QUFFQSxHQU5ELE1BTU87QUFFTk4sSUFBQUEsV0FBVyxDQUFDTyxHQUFaLENBQWdCLE1BQWhCO0FBRUFKLElBQUFBLFlBQVksQ0FBQ0MsS0FBYixHQUFxQixNQUFyQjtBQUVBO0FBRUQsQ0FsQkQiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xuXHQkKFwiLm1lbnVfbGlua1wiKS5jbGljayhmdW5jdGlvbigpIHtcblx0XHQkKFwiLm1lbnVfbGlua1wiKS50b2dnbGVDbGFzcyhcIm1lbnVfbGlua19hY3RpdmVcIik7XG5cdFx0JChcIi5zaXRlLW5hdi1jb250ZW50IHVsXCIpLnRvZ2dsZUNsYXNzKFwibWVudV9hY3RpdmVcIik7XG5cdH0pO1xuXG5cdC8vICQoXCIua2ctZ2FsbGVyeS1yb3dcIikuc2xpY2soe1xuXHQvLyAgIGRvdHM6IHRydWUsXG5cdC8vICAgaW5maW5pdGU6IHRydWUsXG5cdC8vICAgc3BlZWQ6IDEwMDAsXG5cdC8vICAgZmFkZTogdHJ1ZSxcblx0Ly8gICBjc3NFYXNlOiAnZWFzZScsXG5cdC8vICAgYXV0b3BsYXk6ICd0cnVlJ1xuXHQvLyB9KTtcblxuICAgICQoZnVuY3Rpb24oKSB7XG4gICAgJCh3aW5kb3cpLm9uKFwic2Nyb2xsIHJlc2l6ZVwiLCBmdW5jdGlvbigpIHtcbiAgICAgICAgdmFyIG8gPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCkgLyAoJChkb2N1bWVudCkuaGVpZ2h0KCkgLSAkKHdpbmRvdykuaGVpZ2h0KCkpO1xuICAgICAgICAkKFwiLnByb2dyZXNzLWJhclwiKS5jc3Moe1xuICAgICAgICAgICAgXCJ3aWR0aFwiOiAoMTAwICogbyB8IDApICsgXCIlXCJcbiAgICAgICAgXHR9KTtcbiAgICAgICAgJCgncHJvZ3Jlc3MnKVswXS52YWx1ZSA9IG87XG4gICAgXHR9KVxuICAgIH0pO1xufSk7XG5cbmRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdzd2l0Y2hUaGVtZScpLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKSB7XG5cdFx0XG5cdGxldCBodG1sQ2xhc3NlcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2h0bWwnKS5jbGFzc0xpc3Q7XG5cblx0aWYobG9jYWxTdG9yYWdlLnRoZW1lID09ICdkYXJrJykge1xuXG5cdFx0aHRtbENsYXNzZXMucmVtb3ZlKCdkYXJrJyk7XG5cblx0XHRsb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgndGhlbWUnKVxuXG5cdH0gZWxzZSB7XG5cblx0XHRodG1sQ2xhc3Nlcy5hZGQoJ2RhcmsnKTtcblxuXHRcdGxvY2FsU3RvcmFnZS50aGVtZSA9ICdkYXJrJztcblxuXHR9XG5cbn0pOyJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2NyaXB0cy5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/scripts.js\n");

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