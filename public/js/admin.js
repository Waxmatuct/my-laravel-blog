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

/***/ "./resources/js/admin.js":
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
/***/ (() => {

eval("tinymce.init({\n  selector: '#tiny',\n  menubar: false,\n  language: 'ru',\n  file_picker_callback: elFinderBrowser,\n  plugins: ['advlist autolink lists link image charmap print preview anchor', 'searchreplace visualblocks code fullscreen', 'insertdatetime media table paste help wordcount codesample'],\n  toolbar: 'undo redo preview code | styleselect | ' + 'bold italic backcolor | alignleft aligncenter ' + 'alignright alignjustify | bullist numlist outdent indent | link media codesample image table | ' + 'removeformat | help'\n});\n\nfunction elFinderBrowser(callback, value, meta) {\n  tinymce.activeEditor.windowManager.openUrl({\n    title: 'File Manager',\n    url: '/elfinder/tinymce5',\n\n    /**\n     * On message will be triggered by the child window\n     * \n     * @param dialogApi\n     * @param details\n     * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions\n     */\n    onMessage: function onMessage(dialogApi, details) {\n      if (details.mceAction === 'fileSelected') {\n        var file = details.data.file; // Make file info\n\n        var info = file.name; // Provide file and text for the link dialog\n\n        if (meta.filetype === 'file') {\n          callback(file.url, {\n            text: info,\n            title: info\n          });\n        } // Provide image and alt text for the image dialog\n\n\n        if (meta.filetype === 'image') {\n          callback(file.url, {\n            alt: info\n          });\n        } // Provide alternative source and posted for the media dialog\n\n\n        if (meta.filetype === 'media') {\n          callback(file.url);\n        }\n\n        dialogApi.close();\n      }\n    }\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW4uanM/MDcyMiJdLCJuYW1lcyI6WyJ0aW55bWNlIiwiaW5pdCIsInNlbGVjdG9yIiwibWVudWJhciIsImxhbmd1YWdlIiwiZmlsZV9waWNrZXJfY2FsbGJhY2siLCJlbEZpbmRlckJyb3dzZXIiLCJwbHVnaW5zIiwidG9vbGJhciIsImNhbGxiYWNrIiwidmFsdWUiLCJtZXRhIiwiYWN0aXZlRWRpdG9yIiwid2luZG93TWFuYWdlciIsIm9wZW5VcmwiLCJ0aXRsZSIsInVybCIsIm9uTWVzc2FnZSIsImRpYWxvZ0FwaSIsImRldGFpbHMiLCJtY2VBY3Rpb24iLCJmaWxlIiwiZGF0YSIsImluZm8iLCJuYW1lIiwiZmlsZXR5cGUiLCJ0ZXh0IiwiYWx0IiwiY2xvc2UiXSwibWFwcGluZ3MiOiJBQUFBQSxPQUFPLENBQUNDLElBQVIsQ0FBYTtBQUNUQyxFQUFBQSxRQUFRLEVBQUUsT0FERDtBQUVUQyxFQUFBQSxPQUFPLEVBQUUsS0FGQTtBQUdUQyxFQUFBQSxRQUFRLEVBQUUsSUFIRDtBQUlUQyxFQUFBQSxvQkFBb0IsRUFBR0MsZUFKZDtBQU1UQyxFQUFBQSxPQUFPLEVBQUUsQ0FDUCxnRUFETyxFQUVQLDRDQUZPLEVBR1AsNERBSE8sQ0FOQTtBQVlUQyxFQUFBQSxPQUFPLEVBQUUsNENBQ1AsZ0RBRE8sR0FFUCxpR0FGTyxHQUdQO0FBZk8sQ0FBYjs7QUFrQkEsU0FBU0YsZUFBVCxDQUEwQkcsUUFBMUIsRUFBb0NDLEtBQXBDLEVBQTJDQyxJQUEzQyxFQUFpRDtBQUM3Q1gsRUFBQUEsT0FBTyxDQUFDWSxZQUFSLENBQXFCQyxhQUFyQixDQUFtQ0MsT0FBbkMsQ0FBMkM7QUFDdkNDLElBQUFBLEtBQUssRUFBRSxjQURnQztBQUV2Q0MsSUFBQUEsR0FBRyxFQUFFLG9CQUZrQzs7QUFHdkM7QUFDUjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDUUMsSUFBQUEsU0FBUyxFQUFFLG1CQUFVQyxTQUFWLEVBQXFCQyxPQUFyQixFQUE4QjtBQUNyQyxVQUFJQSxPQUFPLENBQUNDLFNBQVIsS0FBc0IsY0FBMUIsRUFBMEM7QUFDdEMsWUFBTUMsSUFBSSxHQUFHRixPQUFPLENBQUNHLElBQVIsQ0FBYUQsSUFBMUIsQ0FEc0MsQ0FHdEM7O0FBQ0EsWUFBTUUsSUFBSSxHQUFHRixJQUFJLENBQUNHLElBQWxCLENBSnNDLENBTXRDOztBQUNBLFlBQUliLElBQUksQ0FBQ2MsUUFBTCxLQUFrQixNQUF0QixFQUE4QjtBQUMxQmhCLFVBQUFBLFFBQVEsQ0FBQ1ksSUFBSSxDQUFDTCxHQUFOLEVBQVc7QUFBQ1UsWUFBQUEsSUFBSSxFQUFFSCxJQUFQO0FBQWFSLFlBQUFBLEtBQUssRUFBRVE7QUFBcEIsV0FBWCxDQUFSO0FBQ0gsU0FUcUMsQ0FXdEM7OztBQUNBLFlBQUlaLElBQUksQ0FBQ2MsUUFBTCxLQUFrQixPQUF0QixFQUErQjtBQUMzQmhCLFVBQUFBLFFBQVEsQ0FBQ1ksSUFBSSxDQUFDTCxHQUFOLEVBQVc7QUFBQ1csWUFBQUEsR0FBRyxFQUFFSjtBQUFOLFdBQVgsQ0FBUjtBQUNILFNBZHFDLENBZ0J0Qzs7O0FBQ0EsWUFBSVosSUFBSSxDQUFDYyxRQUFMLEtBQWtCLE9BQXRCLEVBQStCO0FBQzNCaEIsVUFBQUEsUUFBUSxDQUFDWSxJQUFJLENBQUNMLEdBQU4sQ0FBUjtBQUNIOztBQUVERSxRQUFBQSxTQUFTLENBQUNVLEtBQVY7QUFDSDtBQUNKO0FBbENzQyxHQUEzQztBQW9DSCIsInNvdXJjZXNDb250ZW50IjpbInRpbnltY2UuaW5pdCh7XG4gICAgc2VsZWN0b3I6ICcjdGlueScsXG4gICAgbWVudWJhcjogZmFsc2UsXG4gICAgbGFuZ3VhZ2U6ICdydScsXG4gICAgZmlsZV9waWNrZXJfY2FsbGJhY2sgOiBlbEZpbmRlckJyb3dzZXIsXG5cbiAgICBwbHVnaW5zOiBbXG4gICAgICAnYWR2bGlzdCBhdXRvbGluayBsaXN0cyBsaW5rIGltYWdlIGNoYXJtYXAgcHJpbnQgcHJldmlldyBhbmNob3InLFxuICAgICAgJ3NlYXJjaHJlcGxhY2UgdmlzdWFsYmxvY2tzIGNvZGUgZnVsbHNjcmVlbicsXG4gICAgICAnaW5zZXJ0ZGF0ZXRpbWUgbWVkaWEgdGFibGUgcGFzdGUgaGVscCB3b3JkY291bnQgY29kZXNhbXBsZSdcbiAgICAgIF0sXG4gICAgXG4gICAgdG9vbGJhcjogJ3VuZG8gcmVkbyBwcmV2aWV3IGNvZGUgfCBzdHlsZXNlbGVjdCB8ICcgK1xuICAgICAgJ2JvbGQgaXRhbGljIGJhY2tjb2xvciB8IGFsaWdubGVmdCBhbGlnbmNlbnRlciAnICtcbiAgICAgICdhbGlnbnJpZ2h0IGFsaWduanVzdGlmeSB8IGJ1bGxpc3QgbnVtbGlzdCBvdXRkZW50IGluZGVudCB8IGxpbmsgbWVkaWEgY29kZXNhbXBsZSBpbWFnZSB0YWJsZSB8ICcgK1xuICAgICAgJ3JlbW92ZWZvcm1hdCB8IGhlbHAnXG4gfSk7XG5cbmZ1bmN0aW9uIGVsRmluZGVyQnJvd3NlciAoY2FsbGJhY2ssIHZhbHVlLCBtZXRhKSB7XG4gICAgdGlueW1jZS5hY3RpdmVFZGl0b3Iud2luZG93TWFuYWdlci5vcGVuVXJsKHtcbiAgICAgICAgdGl0bGU6ICdGaWxlIE1hbmFnZXInLFxuICAgICAgICB1cmw6ICcvZWxmaW5kZXIvdGlueW1jZTUnLFxuICAgICAgICAvKipcbiAgICAgICAgICogT24gbWVzc2FnZSB3aWxsIGJlIHRyaWdnZXJlZCBieSB0aGUgY2hpbGQgd2luZG93XG4gICAgICAgICAqIFxuICAgICAgICAgKiBAcGFyYW0gZGlhbG9nQXBpXG4gICAgICAgICAqIEBwYXJhbSBkZXRhaWxzXG4gICAgICAgICAqIEBzZWUgaHR0cHM6Ly93d3cudGlueS5jbG91ZC9kb2NzL3VpLWNvbXBvbmVudHMvdXJsZGlhbG9nLyNjb25maWd1cmF0aW9ub3B0aW9uc1xuICAgICAgICAgKi9cbiAgICAgICAgb25NZXNzYWdlOiBmdW5jdGlvbiAoZGlhbG9nQXBpLCBkZXRhaWxzKSB7XG4gICAgICAgICAgICBpZiAoZGV0YWlscy5tY2VBY3Rpb24gPT09ICdmaWxlU2VsZWN0ZWQnKSB7XG4gICAgICAgICAgICAgICAgY29uc3QgZmlsZSA9IGRldGFpbHMuZGF0YS5maWxlO1xuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIC8vIE1ha2UgZmlsZSBpbmZvXG4gICAgICAgICAgICAgICAgY29uc3QgaW5mbyA9IGZpbGUubmFtZTtcbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAvLyBQcm92aWRlIGZpbGUgYW5kIHRleHQgZm9yIHRoZSBsaW5rIGRpYWxvZ1xuICAgICAgICAgICAgICAgIGlmIChtZXRhLmZpbGV0eXBlID09PSAnZmlsZScpIHtcbiAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2soZmlsZS51cmwsIHt0ZXh0OiBpbmZvLCB0aXRsZTogaW5mb30pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAvLyBQcm92aWRlIGltYWdlIGFuZCBhbHQgdGV4dCBmb3IgdGhlIGltYWdlIGRpYWxvZ1xuICAgICAgICAgICAgICAgIGlmIChtZXRhLmZpbGV0eXBlID09PSAnaW1hZ2UnKSB7XG4gICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrKGZpbGUudXJsLCB7YWx0OiBpbmZvfSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIC8vIFByb3ZpZGUgYWx0ZXJuYXRpdmUgc291cmNlIGFuZCBwb3N0ZWQgZm9yIHRoZSBtZWRpYSBkaWFsb2dcbiAgICAgICAgICAgICAgICBpZiAobWV0YS5maWxldHlwZSA9PT0gJ21lZGlhJykge1xuICAgICAgICAgICAgICAgICAgICBjYWxsYmFjayhmaWxlLnVybCk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIGRpYWxvZ0FwaS5jbG9zZSgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfSk7XG59Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hZG1pbi5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admin.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/admin.js"]();
/******/ 	
/******/ })()
;