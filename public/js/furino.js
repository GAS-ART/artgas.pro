/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@babel/runtime/regenerator/index.js":
/*!**********************************************************!*\
  !*** ./node_modules/@babel/runtime/regenerator/index.js ***!
  \**********************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

module.exports = __webpack_require__(/*! regenerator-runtime */ "./node_modules/regenerator-runtime/runtime.js");


/***/ }),

/***/ "./node_modules/regenerator-runtime/runtime.js":
/*!*****************************************************!*\
  !*** ./node_modules/regenerator-runtime/runtime.js ***!
  \*****************************************************/
/***/ ((module) => {

/**
 * Copyright (c) 2014-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

var runtime = (function (exports) {
  "use strict";

  var Op = Object.prototype;
  var hasOwn = Op.hasOwnProperty;
  var undefined; // More compressible than void 0.
  var $Symbol = typeof Symbol === "function" ? Symbol : {};
  var iteratorSymbol = $Symbol.iterator || "@@iterator";
  var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
  var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

  function define(obj, key, value) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
    return obj[key];
  }
  try {
    // IE 8 has a broken Object.defineProperty that only works on DOM objects.
    define({}, "");
  } catch (err) {
    define = function(obj, key, value) {
      return obj[key] = value;
    };
  }

  function wrap(innerFn, outerFn, self, tryLocsList) {
    // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
    var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
    var generator = Object.create(protoGenerator.prototype);
    var context = new Context(tryLocsList || []);

    // The ._invoke method unifies the implementations of the .next,
    // .throw, and .return methods.
    generator._invoke = makeInvokeMethod(innerFn, self, context);

    return generator;
  }
  exports.wrap = wrap;

  // Try/catch helper to minimize deoptimizations. Returns a completion
  // record like context.tryEntries[i].completion. This interface could
  // have been (and was previously) designed to take a closure to be
  // invoked without arguments, but in all the cases we care about we
  // already have an existing method we want to call, so there's no need
  // to create a new function object. We can even get away with assuming
  // the method takes exactly one argument, since that happens to be true
  // in every case, so we don't have to touch the arguments object. The
  // only additional allocation required is the completion record, which
  // has a stable shape and so hopefully should be cheap to allocate.
  function tryCatch(fn, obj, arg) {
    try {
      return { type: "normal", arg: fn.call(obj, arg) };
    } catch (err) {
      return { type: "throw", arg: err };
    }
  }

  var GenStateSuspendedStart = "suspendedStart";
  var GenStateSuspendedYield = "suspendedYield";
  var GenStateExecuting = "executing";
  var GenStateCompleted = "completed";

  // Returning this object from the innerFn has the same effect as
  // breaking out of the dispatch switch statement.
  var ContinueSentinel = {};

  // Dummy constructor functions that we use as the .constructor and
  // .constructor.prototype properties for functions that return Generator
  // objects. For full spec compliance, you may wish to configure your
  // minifier not to mangle the names of these two functions.
  function Generator() {}
  function GeneratorFunction() {}
  function GeneratorFunctionPrototype() {}

  // This is a polyfill for %IteratorPrototype% for environments that
  // don't natively support it.
  var IteratorPrototype = {};
  define(IteratorPrototype, iteratorSymbol, function () {
    return this;
  });

  var getProto = Object.getPrototypeOf;
  var NativeIteratorPrototype = getProto && getProto(getProto(values([])));
  if (NativeIteratorPrototype &&
      NativeIteratorPrototype !== Op &&
      hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
    // This environment has a native %IteratorPrototype%; use it instead
    // of the polyfill.
    IteratorPrototype = NativeIteratorPrototype;
  }

  var Gp = GeneratorFunctionPrototype.prototype =
    Generator.prototype = Object.create(IteratorPrototype);
  GeneratorFunction.prototype = GeneratorFunctionPrototype;
  define(Gp, "constructor", GeneratorFunctionPrototype);
  define(GeneratorFunctionPrototype, "constructor", GeneratorFunction);
  GeneratorFunction.displayName = define(
    GeneratorFunctionPrototype,
    toStringTagSymbol,
    "GeneratorFunction"
  );

  // Helper for defining the .next, .throw, and .return methods of the
  // Iterator interface in terms of a single ._invoke method.
  function defineIteratorMethods(prototype) {
    ["next", "throw", "return"].forEach(function(method) {
      define(prototype, method, function(arg) {
        return this._invoke(method, arg);
      });
    });
  }

  exports.isGeneratorFunction = function(genFun) {
    var ctor = typeof genFun === "function" && genFun.constructor;
    return ctor
      ? ctor === GeneratorFunction ||
        // For the native GeneratorFunction constructor, the best we can
        // do is to check its .name property.
        (ctor.displayName || ctor.name) === "GeneratorFunction"
      : false;
  };

  exports.mark = function(genFun) {
    if (Object.setPrototypeOf) {
      Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
    } else {
      genFun.__proto__ = GeneratorFunctionPrototype;
      define(genFun, toStringTagSymbol, "GeneratorFunction");
    }
    genFun.prototype = Object.create(Gp);
    return genFun;
  };

  // Within the body of any async function, `await x` is transformed to
  // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
  // `hasOwn.call(value, "__await")` to determine if the yielded value is
  // meant to be awaited.
  exports.awrap = function(arg) {
    return { __await: arg };
  };

  function AsyncIterator(generator, PromiseImpl) {
    function invoke(method, arg, resolve, reject) {
      var record = tryCatch(generator[method], generator, arg);
      if (record.type === "throw") {
        reject(record.arg);
      } else {
        var result = record.arg;
        var value = result.value;
        if (value &&
            typeof value === "object" &&
            hasOwn.call(value, "__await")) {
          return PromiseImpl.resolve(value.__await).then(function(value) {
            invoke("next", value, resolve, reject);
          }, function(err) {
            invoke("throw", err, resolve, reject);
          });
        }

        return PromiseImpl.resolve(value).then(function(unwrapped) {
          // When a yielded Promise is resolved, its final value becomes
          // the .value of the Promise<{value,done}> result for the
          // current iteration.
          result.value = unwrapped;
          resolve(result);
        }, function(error) {
          // If a rejected Promise was yielded, throw the rejection back
          // into the async generator function so it can be handled there.
          return invoke("throw", error, resolve, reject);
        });
      }
    }

    var previousPromise;

    function enqueue(method, arg) {
      function callInvokeWithMethodAndArg() {
        return new PromiseImpl(function(resolve, reject) {
          invoke(method, arg, resolve, reject);
        });
      }

      return previousPromise =
        // If enqueue has been called before, then we want to wait until
        // all previous Promises have been resolved before calling invoke,
        // so that results are always delivered in the correct order. If
        // enqueue has not been called before, then it is important to
        // call invoke immediately, without waiting on a callback to fire,
        // so that the async generator function has the opportunity to do
        // any necessary setup in a predictable way. This predictability
        // is why the Promise constructor synchronously invokes its
        // executor callback, and why async functions synchronously
        // execute code before the first await. Since we implement simple
        // async functions in terms of async generators, it is especially
        // important to get this right, even though it requires care.
        previousPromise ? previousPromise.then(
          callInvokeWithMethodAndArg,
          // Avoid propagating failures to Promises returned by later
          // invocations of the iterator.
          callInvokeWithMethodAndArg
        ) : callInvokeWithMethodAndArg();
    }

    // Define the unified helper method that is used to implement .next,
    // .throw, and .return (see defineIteratorMethods).
    this._invoke = enqueue;
  }

  defineIteratorMethods(AsyncIterator.prototype);
  define(AsyncIterator.prototype, asyncIteratorSymbol, function () {
    return this;
  });
  exports.AsyncIterator = AsyncIterator;

  // Note that simple async functions are implemented on top of
  // AsyncIterator objects; they just return a Promise for the value of
  // the final result produced by the iterator.
  exports.async = function(innerFn, outerFn, self, tryLocsList, PromiseImpl) {
    if (PromiseImpl === void 0) PromiseImpl = Promise;

    var iter = new AsyncIterator(
      wrap(innerFn, outerFn, self, tryLocsList),
      PromiseImpl
    );

    return exports.isGeneratorFunction(outerFn)
      ? iter // If outerFn is a generator, return the full iterator.
      : iter.next().then(function(result) {
          return result.done ? result.value : iter.next();
        });
  };

  function makeInvokeMethod(innerFn, self, context) {
    var state = GenStateSuspendedStart;

    return function invoke(method, arg) {
      if (state === GenStateExecuting) {
        throw new Error("Generator is already running");
      }

      if (state === GenStateCompleted) {
        if (method === "throw") {
          throw arg;
        }

        // Be forgiving, per 25.3.3.3.3 of the spec:
        // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume
        return doneResult();
      }

      context.method = method;
      context.arg = arg;

      while (true) {
        var delegate = context.delegate;
        if (delegate) {
          var delegateResult = maybeInvokeDelegate(delegate, context);
          if (delegateResult) {
            if (delegateResult === ContinueSentinel) continue;
            return delegateResult;
          }
        }

        if (context.method === "next") {
          // Setting context._sent for legacy support of Babel's
          // function.sent implementation.
          context.sent = context._sent = context.arg;

        } else if (context.method === "throw") {
          if (state === GenStateSuspendedStart) {
            state = GenStateCompleted;
            throw context.arg;
          }

          context.dispatchException(context.arg);

        } else if (context.method === "return") {
          context.abrupt("return", context.arg);
        }

        state = GenStateExecuting;

        var record = tryCatch(innerFn, self, context);
        if (record.type === "normal") {
          // If an exception is thrown from innerFn, we leave state ===
          // GenStateExecuting and loop back for another invocation.
          state = context.done
            ? GenStateCompleted
            : GenStateSuspendedYield;

          if (record.arg === ContinueSentinel) {
            continue;
          }

          return {
            value: record.arg,
            done: context.done
          };

        } else if (record.type === "throw") {
          state = GenStateCompleted;
          // Dispatch the exception by looping back around to the
          // context.dispatchException(context.arg) call above.
          context.method = "throw";
          context.arg = record.arg;
        }
      }
    };
  }

  // Call delegate.iterator[context.method](context.arg) and handle the
  // result, either by returning a { value, done } result from the
  // delegate iterator, or by modifying context.method and context.arg,
  // setting context.delegate to null, and returning the ContinueSentinel.
  function maybeInvokeDelegate(delegate, context) {
    var method = delegate.iterator[context.method];
    if (method === undefined) {
      // A .throw or .return when the delegate iterator has no .throw
      // method always terminates the yield* loop.
      context.delegate = null;

      if (context.method === "throw") {
        // Note: ["return"] must be used for ES3 parsing compatibility.
        if (delegate.iterator["return"]) {
          // If the delegate iterator has a return method, give it a
          // chance to clean up.
          context.method = "return";
          context.arg = undefined;
          maybeInvokeDelegate(delegate, context);

          if (context.method === "throw") {
            // If maybeInvokeDelegate(context) changed context.method from
            // "return" to "throw", let that override the TypeError below.
            return ContinueSentinel;
          }
        }

        context.method = "throw";
        context.arg = new TypeError(
          "The iterator does not provide a 'throw' method");
      }

      return ContinueSentinel;
    }

    var record = tryCatch(method, delegate.iterator, context.arg);

    if (record.type === "throw") {
      context.method = "throw";
      context.arg = record.arg;
      context.delegate = null;
      return ContinueSentinel;
    }

    var info = record.arg;

    if (! info) {
      context.method = "throw";
      context.arg = new TypeError("iterator result is not an object");
      context.delegate = null;
      return ContinueSentinel;
    }

    if (info.done) {
      // Assign the result of the finished delegate to the temporary
      // variable specified by delegate.resultName (see delegateYield).
      context[delegate.resultName] = info.value;

      // Resume execution at the desired location (see delegateYield).
      context.next = delegate.nextLoc;

      // If context.method was "throw" but the delegate handled the
      // exception, let the outer generator proceed normally. If
      // context.method was "next", forget context.arg since it has been
      // "consumed" by the delegate iterator. If context.method was
      // "return", allow the original .return call to continue in the
      // outer generator.
      if (context.method !== "return") {
        context.method = "next";
        context.arg = undefined;
      }

    } else {
      // Re-yield the result returned by the delegate method.
      return info;
    }

    // The delegate iterator is finished, so forget it and continue with
    // the outer generator.
    context.delegate = null;
    return ContinueSentinel;
  }

  // Define Generator.prototype.{next,throw,return} in terms of the
  // unified ._invoke helper method.
  defineIteratorMethods(Gp);

  define(Gp, toStringTagSymbol, "Generator");

  // A Generator should always return itself as the iterator object when the
  // @@iterator function is called on it. Some browsers' implementations of the
  // iterator prototype chain incorrectly implement this, causing the Generator
  // object to not be returned from this call. This ensures that doesn't happen.
  // See https://github.com/facebook/regenerator/issues/274 for more details.
  define(Gp, iteratorSymbol, function() {
    return this;
  });

  define(Gp, "toString", function() {
    return "[object Generator]";
  });

  function pushTryEntry(locs) {
    var entry = { tryLoc: locs[0] };

    if (1 in locs) {
      entry.catchLoc = locs[1];
    }

    if (2 in locs) {
      entry.finallyLoc = locs[2];
      entry.afterLoc = locs[3];
    }

    this.tryEntries.push(entry);
  }

  function resetTryEntry(entry) {
    var record = entry.completion || {};
    record.type = "normal";
    delete record.arg;
    entry.completion = record;
  }

  function Context(tryLocsList) {
    // The root entry object (effectively a try statement without a catch
    // or a finally block) gives us a place to store values thrown from
    // locations where there is no enclosing try statement.
    this.tryEntries = [{ tryLoc: "root" }];
    tryLocsList.forEach(pushTryEntry, this);
    this.reset(true);
  }

  exports.keys = function(object) {
    var keys = [];
    for (var key in object) {
      keys.push(key);
    }
    keys.reverse();

    // Rather than returning an object with a next method, we keep
    // things simple and return the next function itself.
    return function next() {
      while (keys.length) {
        var key = keys.pop();
        if (key in object) {
          next.value = key;
          next.done = false;
          return next;
        }
      }

      // To avoid creating an additional object, we just hang the .value
      // and .done properties off the next function object itself. This
      // also ensures that the minifier will not anonymize the function.
      next.done = true;
      return next;
    };
  };

  function values(iterable) {
    if (iterable) {
      var iteratorMethod = iterable[iteratorSymbol];
      if (iteratorMethod) {
        return iteratorMethod.call(iterable);
      }

      if (typeof iterable.next === "function") {
        return iterable;
      }

      if (!isNaN(iterable.length)) {
        var i = -1, next = function next() {
          while (++i < iterable.length) {
            if (hasOwn.call(iterable, i)) {
              next.value = iterable[i];
              next.done = false;
              return next;
            }
          }

          next.value = undefined;
          next.done = true;

          return next;
        };

        return next.next = next;
      }
    }

    // Return an iterator with no values.
    return { next: doneResult };
  }
  exports.values = values;

  function doneResult() {
    return { value: undefined, done: true };
  }

  Context.prototype = {
    constructor: Context,

    reset: function(skipTempReset) {
      this.prev = 0;
      this.next = 0;
      // Resetting context._sent for legacy support of Babel's
      // function.sent implementation.
      this.sent = this._sent = undefined;
      this.done = false;
      this.delegate = null;

      this.method = "next";
      this.arg = undefined;

      this.tryEntries.forEach(resetTryEntry);

      if (!skipTempReset) {
        for (var name in this) {
          // Not sure about the optimal order of these conditions:
          if (name.charAt(0) === "t" &&
              hasOwn.call(this, name) &&
              !isNaN(+name.slice(1))) {
            this[name] = undefined;
          }
        }
      }
    },

    stop: function() {
      this.done = true;

      var rootEntry = this.tryEntries[0];
      var rootRecord = rootEntry.completion;
      if (rootRecord.type === "throw") {
        throw rootRecord.arg;
      }

      return this.rval;
    },

    dispatchException: function(exception) {
      if (this.done) {
        throw exception;
      }

      var context = this;
      function handle(loc, caught) {
        record.type = "throw";
        record.arg = exception;
        context.next = loc;

        if (caught) {
          // If the dispatched exception was caught by a catch block,
          // then let that catch block handle the exception normally.
          context.method = "next";
          context.arg = undefined;
        }

        return !! caught;
      }

      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        var record = entry.completion;

        if (entry.tryLoc === "root") {
          // Exception thrown outside of any try block that could handle
          // it, so set the completion value of the entire function to
          // throw the exception.
          return handle("end");
        }

        if (entry.tryLoc <= this.prev) {
          var hasCatch = hasOwn.call(entry, "catchLoc");
          var hasFinally = hasOwn.call(entry, "finallyLoc");

          if (hasCatch && hasFinally) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            } else if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else if (hasCatch) {
            if (this.prev < entry.catchLoc) {
              return handle(entry.catchLoc, true);
            }

          } else if (hasFinally) {
            if (this.prev < entry.finallyLoc) {
              return handle(entry.finallyLoc);
            }

          } else {
            throw new Error("try statement without catch or finally");
          }
        }
      }
    },

    abrupt: function(type, arg) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc <= this.prev &&
            hasOwn.call(entry, "finallyLoc") &&
            this.prev < entry.finallyLoc) {
          var finallyEntry = entry;
          break;
        }
      }

      if (finallyEntry &&
          (type === "break" ||
           type === "continue") &&
          finallyEntry.tryLoc <= arg &&
          arg <= finallyEntry.finallyLoc) {
        // Ignore the finally entry if control is not jumping to a
        // location outside the try/catch block.
        finallyEntry = null;
      }

      var record = finallyEntry ? finallyEntry.completion : {};
      record.type = type;
      record.arg = arg;

      if (finallyEntry) {
        this.method = "next";
        this.next = finallyEntry.finallyLoc;
        return ContinueSentinel;
      }

      return this.complete(record);
    },

    complete: function(record, afterLoc) {
      if (record.type === "throw") {
        throw record.arg;
      }

      if (record.type === "break" ||
          record.type === "continue") {
        this.next = record.arg;
      } else if (record.type === "return") {
        this.rval = this.arg = record.arg;
        this.method = "return";
        this.next = "end";
      } else if (record.type === "normal" && afterLoc) {
        this.next = afterLoc;
      }

      return ContinueSentinel;
    },

    finish: function(finallyLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.finallyLoc === finallyLoc) {
          this.complete(entry.completion, entry.afterLoc);
          resetTryEntry(entry);
          return ContinueSentinel;
        }
      }
    },

    "catch": function(tryLoc) {
      for (var i = this.tryEntries.length - 1; i >= 0; --i) {
        var entry = this.tryEntries[i];
        if (entry.tryLoc === tryLoc) {
          var record = entry.completion;
          if (record.type === "throw") {
            var thrown = record.arg;
            resetTryEntry(entry);
          }
          return thrown;
        }
      }

      // The context.catch method must only be called with a location
      // argument that corresponds to a known catch block.
      throw new Error("illegal catch attempt");
    },

    delegateYield: function(iterable, resultName, nextLoc) {
      this.delegate = {
        iterator: values(iterable),
        resultName: resultName,
        nextLoc: nextLoc
      };

      if (this.method === "next") {
        // Deliberately forget the last sent value so that we don't
        // accidentally pass it on to the delegate.
        this.arg = undefined;
      }

      return ContinueSentinel;
    }
  };

  // Regardless of whether this script is executing as a CommonJS module
  // or not, return the runtime object so that we can declare the variable
  // regeneratorRuntime in the outer scope, which allows this module to be
  // injected easily by `bin/regenerator --include-runtime script.js`.
  return exports;

}(
  // If this script is executing as a CommonJS module, use module.exports
  // as the regeneratorRuntime namespace. Otherwise create a new empty
  // object. Either way, the resulting object will be used to initialize
  // the regeneratorRuntime variable at the top of this file.
   true ? module.exports : 0
));

try {
  regeneratorRuntime = runtime;
} catch (accidentalStrictMode) {
  // This module should not be running in strict mode, so the above
  // assignment should always work unless something is misconfigured. Just
  // in case runtime.js accidentally runs in strict mode, in modern engines
  // we can explicitly access globalThis. In older engines we can escape
  // strict mode using a global Function call. This could conceivably fail
  // if a Content Security Policy forbids using Function, but in that case
  // the proper solution is to fix the accidental strict mode problem. If
  // you've misconfigured your bundler to force strict mode and applied a
  // CSP to forbid Function, and you're not willing to fix either of those
  // problems, please detail your unique predicament in a GitHub issue.
  if (typeof globalThis === "object") {
    globalThis.regeneratorRuntime = runtime;
  } else {
    Function("r", "regeneratorRuntime = r")(runtime);
  }
}


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!********************************!*\
  !*** ./resources/js/furino.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

/******/
(function () {
  // webpackBootstrap

  /******/
  "use strict";

  var __webpack_exports__ = {};
  ; // CONCATENATED MODULE: ./src/js/modules/functions.js

  function isWebp() {
    // Проверка поддержки webp
    function testWebP(callback) {
      var webP = new Image();

      webP.onload = webP.onerror = function () {
        callback(webP.height == 2);
      };

      webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
    } // Добавление класса _webp или _no-webp для HTML


    testWebP(function (support) {
      var className = support === true ? 'webp' : 'no-webp';
      document.documentElement.classList.add(className);
    });
  }

  function ibg() {
    var ibg = document.querySelectorAll(".ibg");

    for (var i = 0; i < ibg.length; i++) {
      if (ibg[i].querySelector('img')) {
        ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')';
      }
    }
  }

  ; // CONCATENATED MODULE: ./src/js/modules/popup.js

  function popUp(popupId) {
    var popUp = document.getElementById(popupId);
    var bodyLock = document.getElementById('body');
    var popupCloseIcon = popUp.querySelector('.close-popup');
    var popupBtn = popUp.querySelector('.popup__button');
    popUp.classList.add('open');
    bodyLock.classList.add('lock');
    popupCloseIcon.addEventListener('click', function (e) {
      popupClose(popUp);
      e.preventDefault();
    });
    popupBtn.addEventListener('click', function () {
      popupClose(popUp);
    });

    function popupClose(popupActive) {
      popupActive.classList.remove('open');
      bodyLock.classList.remove("lock");
    }

    popUp.addEventListener('click', function (e) {
      if (!e.target.closest('.popup__content')) {
        popupClose(popUp);
      }
    });
  }

  ;
  ; // CONCATENATED MODULE: ./src/js/modules/formValidate.js
  //"use strict"

  /*-------------------FORM-VALIDATE-JS----------------------------*/

  function validate(form) {
    if (form == document.forms.emailSubmit) {
      var fail = validateEmail(form.email.value);

      if (fail == false) {
        //   formSend(form);
        popUp(form.querySelector('.popup-link').dataset.popupId);
        return false;
      } else {
        return false;
      }
    }
  }
  /*async function formSend(form) {
     let formData = new FormData(form)
     let response = await fetch('/fpg/Skip/sendmail.php', {
        method: 'POST',
        body: formData
     });
     if (response.ok) {
        document.querySelector('.popup').classList.add("open");
        document.querySelector('.confirm').classList.add("send");
        document.querySelector('.popup__title').classList.add("send");
        document.querySelector('.popup__text').classList.add("send");
        form.reset();
     } else {
        alert("Ошибка HTTP: " + response.status);
     }
  }*/


  function validateEmail(field) {
    var space = field.replace(/\s+/g, '');

    if (space == "") {
      document.querySelector('.error-input').classList.add("active"); // text-field-name -> visibility: hidden; / .error -> visibility: visible;

      document.querySelector('.error-input.active').innerHTML = "Это поле не должно быть пусты!";
      return;
    } else if (!(space.indexOf(".") > 0 && space.indexOf("@") > 0) || /[^a-zA-Z0-9.@_-]/.test(space) || space.length < 6) {
      document.querySelector('.error-input').classList.add("active");
      document.querySelector('.error-input.active').innerHTML = "Не корректный Email адрес!";
    } else {
      document.querySelector('.error-input').classList.remove("active");
      return false;
    }
  }
  /*-------------------FORM-VALIDATE-JS----------------------------*/


  ; // CONCATENATED MODULE: ./src/js/modules/sliders.js
  //import Swiper from "swiper"; // npm i swiper

  function initSliders() {
    new Swiper('.slider-main__slider', {
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 32,
      loop: true,
      loopAdditionalSlides: 5,
      speed: 800,
      parallax: true,
      pagination: {
        el: '.slider-main .controls__dots',
        clickable: true
      },
      // Arrows
      navigation: {
        nextEl: '.slider-main .controls__right-btn',
        prevEl: '.slider-main .controls__left-btn '
      }
    });
    new Swiper('.rooms__slider', {
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      watchOverflow: true,
      loopAdditionalSlides: 5,
      preloadImages: false,
      speed: 800,
      parallax: true,
      pagination: {
        el: '.rooms-slider .controls__dots',
        clickable: true
      },
      // Arrows
      navigation: {
        nextEl: '.rooms__slider-body .controls__right-btn',
        prevEl: '.rooms__slider-body .controls__left-btn '
      },
      breakpoints: {
        479: {
          slidesPerView: 'auto'
        }
      }
    });
    new Swiper('.slider-tips__swiper', {
      observer: true,
      observeParents: true,
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      watchOverflow: true,
      loopAdditionalSlides: 3,
      preloadImages: false,
      speed: 800,
      parallax: false,
      pagination: {
        el: '.slider-tips__body .controls__dots',
        clickable: true
      },
      // Arrows
      navigation: {
        nextEl: '.tips__slider .controls__right-btn',
        prevEl: '.tips__slider .controls__left-btn '
      },
      breakpoints: {
        479: {
          slidesPerView: 2,
          spaceBetween: 16
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 32
        }
      }
    });
  }

  window.addEventListener("load", function (e) {
    // Запуск инициализации слайдеров
    initSliders(); // Запуск инициализации скролла на базе слайдера (по классу swiper_scroll)
    //initSlidersScroll();
  });
  ; // CONCATENATED MODULE: ./src/js/modules/lightgallery/lightgallery.es5.js

  var _assign = function __assign() {
    return (_assign = Object.assign || function (t) {
      for (var e, i = 1, s = arguments.length; i < s; i++) {
        for (var n in e = arguments[i]) {
          Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
        }
      }

      return t;
    }).apply(this, arguments);
  };

  function __spreadArrays() {
    for (var t = 0, e = 0, i = arguments.length; e < i; e++) {
      t += arguments[e].length;
    }

    for (var s = Array(t), n = 0, e = 0; e < i; e++) {
      for (var o = arguments[e], r = 0, l = o.length; r < l; r++, n++) {
        s[n] = o[r];
      }
    }

    return s;
  }

  var lGEvents = {
    afterAppendSlide: "lgAfterAppendSlide",
    init: "lgInit",
    hasVideo: "lgHasVideo",
    containerResize: "lgContainerResize",
    updateSlides: "lgUpdateSlides",
    afterAppendSubHtml: "lgAfterAppendSubHtml",
    beforeOpen: "lgBeforeOpen",
    afterOpen: "lgAfterOpen",
    slideItemLoad: "lgSlideItemLoad",
    beforeSlide: "lgBeforeSlide",
    afterSlide: "lgAfterSlide",
    posterClick: "lgPosterClick",
    dragStart: "lgDragStart",
    dragMove: "lgDragMove",
    dragEnd: "lgDragEnd",
    beforeNextSlide: "lgBeforeNextSlide",
    beforePrevSlide: "lgBeforePrevSlide",
    beforeClose: "lgBeforeClose",
    afterClose: "lgAfterClose",
    rotateLeft: "lgRotateLeft",
    rotateRight: "lgRotateRight",
    flipHorizontal: "lgFlipHorizontal",
    flipVertical: "lgFlipVertical",
    autoplay: "lgAutoplay",
    autoplayStart: "lgAutoplayStart",
    autoplayStop: "lgAutoplayStop"
  },
      lightGalleryCoreSettings = {
    mode: "lg-slide",
    easing: "ease",
    speed: 400,
    licenseKey: "0000-0000-000-0000",
    height: "100%",
    width: "100%",
    addClass: "",
    startClass: "lg-start-zoom",
    backdropDuration: 300,
    container: "",
    startAnimationDuration: 400,
    zoomFromOrigin: !0,
    hideBarsDelay: 0,
    showBarsAfter: 1e4,
    slideDelay: 0,
    supportLegacyBrowser: !0,
    allowMediaOverlap: !1,
    videoMaxSize: "1280-720",
    loadYouTubePoster: !0,
    defaultCaptionHeight: 0,
    ariaLabelledby: "",
    ariaDescribedby: "",
    closable: !0,
    swipeToClose: !0,
    closeOnTap: !0,
    showCloseIcon: !0,
    showMaximizeIcon: !1,
    loop: !0,
    escKey: !0,
    keyPress: !0,
    trapFocus: !0,
    controls: !0,
    slideEndAnimation: !0,
    hideControlOnEnd: !1,
    mousewheel: !1,
    getCaptionFromTitleOrAlt: !0,
    appendSubHtmlTo: ".lg-sub-html",
    subHtmlSelectorRelative: !1,
    preload: 2,
    numberOfSlideItemsInDom: 10,
    selector: "",
    selectWithin: "",
    nextHtml: "",
    prevHtml: "",
    index: 0,
    iframeWidth: "100%",
    iframeHeight: "100%",
    iframeMaxWidth: "100%",
    iframeMaxHeight: "100%",
    download: !0,
    counter: !0,
    appendCounterTo: ".lg-toolbar",
    swipeThreshold: 50,
    enableSwipe: !0,
    enableDrag: !0,
    dynamic: !1,
    dynamicEl: [],
    extraProps: [],
    exThumbImage: "",
    isMobile: void 0,
    mobileSettings: {
      controls: !1,
      showCloseIcon: !1,
      download: !1
    },
    plugins: [],
    strings: {
      closeGallery: "Close gallery",
      toggleMaximize: "Toggle maximize",
      previousSlide: "Previous slide",
      nextSlide: "Next slide",
      download: "Download",
      playVideo: "Play video"
    }
  };

  function initLgPolyfills() {
    "function" != typeof window.CustomEvent && (window.CustomEvent = function (t, e) {
      e = e || {
        bubbles: !1,
        cancelable: !1,
        detail: null
      };
      var i = document.createEvent("CustomEvent");
      return i.initCustomEvent(t, e.bubbles, e.cancelable, e.detail), i;
    }), Element.prototype.matches || (Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector);
  }

  var lgQuery = function () {
    function s(t) {
      return this.cssVenderPrefixes = ["TransitionDuration", "TransitionTimingFunction", "Transform", "Transition"], this.selector = this._getSelector(t), this.firstElement = this._getFirstEl(), this;
    }

    return s.generateUUID = function () {
      return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function (t) {
        var e = 16 * Math.random() | 0;
        return ("x" == t ? e : 3 & e | 8).toString(16);
      });
    }, s.prototype._getSelector = function (t, e) {
      return void 0 === e && (e = document), "string" != typeof t ? t : (e = e || document, "#" === t.substring(0, 1) ? e.querySelector(t) : e.querySelectorAll(t));
    }, s.prototype._each = function (t) {
      return this.selector && (void 0 !== this.selector.length ? [].forEach.call(this.selector, t) : t(this.selector, 0)), this;
    }, s.prototype._setCssVendorPrefix = function (t, e, i) {
      e = e.replace(/-([a-z])/gi, function (t, e) {
        return e.toUpperCase();
      });
      -1 !== this.cssVenderPrefixes.indexOf(e) ? (t.style[e.charAt(0).toLowerCase() + e.slice(1)] = i, t.style["webkit" + e] = i, t.style["moz" + e] = i, t.style["ms" + e] = i, t.style["o" + e] = i) : t.style[e] = i;
    }, s.prototype._getFirstEl = function () {
      return this.selector && void 0 !== this.selector.length ? this.selector[0] : this.selector;
    }, s.prototype.isEventMatched = function (t, e) {
      var i = e.split(".");
      return t.split(".").filter(function (t) {
        return t;
      }).every(function (t) {
        return -1 !== i.indexOf(t);
      });
    }, s.prototype.attr = function (e, i) {
      return void 0 === i ? this.firstElement ? this.firstElement.getAttribute(e) : "" : (this._each(function (t) {
        t.setAttribute(e, i);
      }), this);
    }, s.prototype.find = function (t) {
      return $LG(this._getSelector(t, this.selector));
    }, s.prototype.first = function () {
      return this.selector && void 0 !== this.selector.length ? $LG(this.selector[0]) : $LG(this.selector);
    }, s.prototype.eq = function (t) {
      return $LG(this.selector[t]);
    }, s.prototype.parent = function () {
      return $LG(this.selector.parentElement);
    }, s.prototype.get = function () {
      return this._getFirstEl();
    }, s.prototype.removeAttr = function (t) {
      var i = t.split(" ");
      return this._each(function (e) {
        i.forEach(function (t) {
          return e.removeAttribute(t);
        });
      }), this;
    }, s.prototype.wrap = function (t) {
      if (!this.firstElement) return this;
      var e = document.createElement("div");
      return e.className = t, this.firstElement.parentNode.insertBefore(e, this.firstElement), this.firstElement.parentNode.removeChild(this.firstElement), e.appendChild(this.firstElement), this;
    }, s.prototype.addClass = function (t) {
      return void 0 === t && (t = ""), this._each(function (e) {
        t.split(" ").forEach(function (t) {
          t && e.classList.add(t);
        });
      }), this;
    }, s.prototype.removeClass = function (t) {
      return this._each(function (e) {
        t.split(" ").forEach(function (t) {
          t && e.classList.remove(t);
        });
      }), this;
    }, s.prototype.hasClass = function (t) {
      return !!this.firstElement && this.firstElement.classList.contains(t);
    }, s.prototype.hasAttribute = function (t) {
      return !!this.firstElement && this.firstElement.hasAttribute(t);
    }, s.prototype.toggleClass = function (t) {
      return this.firstElement && (this.hasClass(t) ? this.removeClass(t) : this.addClass(t)), this;
    }, s.prototype.css = function (e, i) {
      var s = this;
      return this._each(function (t) {
        s._setCssVendorPrefix(t, e, i);
      }), this;
    }, s.prototype.on = function (t, e) {
      var i = this;
      return this.selector && t.split(" ").forEach(function (t) {
        Array.isArray(s.eventListeners[t]) || (s.eventListeners[t] = []), s.eventListeners[t].push(e), i.selector.addEventListener(t.split(".")[0], e);
      }), this;
    }, s.prototype.once = function (t, e) {
      var i = this;
      return this.on(t, function () {
        i.off(t), e(t);
      }), this;
    }, s.prototype.off = function (t) {
      var i = this;
      return this.selector && Object.keys(s.eventListeners).forEach(function (e) {
        i.isEventMatched(t, e) && (s.eventListeners[e].forEach(function (t) {
          i.selector.removeEventListener(e.split(".")[0], t);
        }), s.eventListeners[e] = []);
      }), this;
    }, s.prototype.trigger = function (t, e) {
      if (!this.firstElement) return this;
      t = new CustomEvent(t.split(".")[0], {
        detail: e || null
      });
      return this.firstElement.dispatchEvent(t), this;
    }, s.prototype.load = function (t) {
      var e = this;
      return fetch(t).then(function (t) {
        return t.text();
      }).then(function (t) {
        e.selector.innerHTML = t;
      }), this;
    }, s.prototype.html = function (e) {
      return void 0 === e ? this.firstElement ? this.firstElement.innerHTML : "" : (this._each(function (t) {
        t.innerHTML = e;
      }), this);
    }, s.prototype.append = function (e) {
      return this._each(function (t) {
        "string" == typeof e ? t.insertAdjacentHTML("beforeend", e) : t.appendChild(e);
      }), this;
    }, s.prototype.prepend = function (e) {
      return this._each(function (t) {
        t.insertAdjacentHTML("afterbegin", e);
      }), this;
    }, s.prototype.remove = function () {
      return this._each(function (t) {
        t.parentNode.removeChild(t);
      }), this;
    }, s.prototype.empty = function () {
      return this._each(function (t) {
        t.innerHTML = "";
      }), this;
    }, s.prototype.scrollTop = function (t) {
      return void 0 !== t ? (document.body.scrollTop = t, document.documentElement.scrollTop = t, this) : window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
    }, s.prototype.scrollLeft = function (t) {
      return void 0 !== t ? (document.body.scrollLeft = t, document.documentElement.scrollLeft = t, this) : window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft || 0;
    }, s.prototype.offset = function () {
      if (!this.firstElement) return {
        left: 0,
        top: 0
      };
      var t = this.firstElement.getBoundingClientRect(),
          e = $LG("body").style().marginLeft;
      return {
        left: t.left - parseFloat(e) + this.scrollLeft(),
        top: t.top + this.scrollTop()
      };
    }, s.prototype.style = function () {
      return this.firstElement ? this.firstElement.currentStyle || window.getComputedStyle(this.firstElement) : {};
    }, s.prototype.width = function () {
      var t = this.style();
      return this.firstElement.clientWidth - parseFloat(t.paddingLeft) - parseFloat(t.paddingRight);
    }, s.prototype.height = function () {
      var t = this.style();
      return this.firstElement.clientHeight - parseFloat(t.paddingTop) - parseFloat(t.paddingBottom);
    }, s.eventListeners = {}, s;
  }();

  function $LG(t) {
    return initLgPolyfills(), new lgQuery(t);
  }

  var defaultDynamicOptions = ["src", "sources", "subHtml", "subHtmlUrl", "html", "video", "poster", "slideName", "responsive", "srcset", "sizes", "iframe", "downloadUrl", "download", "width", "facebookShareUrl", "tweetText", "iframeTitle", "twitterShareUrl", "pinterestShareUrl", "pinterestText", "fbHtml", "disqusIdentifier", "disqusUrl"];

  function convertToData(t) {
    return "href" === t ? "src" : (t = (t = t.replace("data-", "")).charAt(0).toLowerCase() + t.slice(1)).replace(/-([a-z])/g, function (t) {
      return t[1].toUpperCase();
    });
  }

  var utils = {
    getSize: function getSize(t, e, i, s) {
      void 0 === i && (i = 0);
      var n = $LG(t).attr("data-lg-size") || s;

      if (n) {
        var o = n.split(",");
        if (o[1]) for (var r = window.innerWidth, l = 0; l < o.length; l++) {
          var a = o[l];

          if (r < parseInt(a.split("-")[2], 10)) {
            n = a;
            break;
          }

          l === o.length - 1 && (n = a);
        }
        var t = n.split("-"),
            s = parseInt(t[0], 10),
            t = parseInt(t[1], 10),
            g = e.width(),
            e = e.height() - i,
            i = Math.min(g, s),
            g = Math.min(e, t),
            e = Math.min(i / s, g / t);
        return {
          width: s * e,
          height: t * e
        };
      }
    },
    getTransform: function getTransform(t, e, i, s, n) {
      if (n) {
        var o,
            r,
            l,
            a,
            t = $LG(t).find("img").first();
        if (t.get()) return l = (a = e.get().getBoundingClientRect()).width, e = e.height() - (i + s), s = t.width(), o = t.height(), r = t.style(), l = (l - s) / 2 - t.offset().left + (parseFloat(r.paddingLeft) || 0) + (parseFloat(r.borderLeft) || 0) + $LG(window).scrollLeft() + a.left, a = (e - o) / 2 - t.offset().top + (parseFloat(r.paddingTop) || 0) + (parseFloat(r.borderTop) || 0) + $LG(window).scrollTop() + i, "translate3d(" + (l *= -1) + "px, " + (a *= -1) + "px, 0) scale3d(" + s / n.width + ", " + o / n.height + ", 1)";
      }
    },
    getIframeMarkup: function getIframeMarkup(t, e, i, s, n, o) {
      return '<div class="lg-video-cont lg-has-iframe" style="width:' + t + "; max-width:" + i + "; height: " + e + "; max-height:" + s + '">\n                    <iframe class="lg-object" frameborder="0" ' + (o ? 'title="' + o + '"' : "") + ' src="' + n + '"  allowfullscreen="true"></iframe>\n                </div>';
    },
    getImgMarkup: function getImgMarkup(t, e, i, s, n, o) {
      i = "<img " + i + " " + (s ? 'srcset="' + s + '"' : "") + "  " + (n ? 'sizes="' + n + '"' : "") + ' class="lg-object lg-image" data-index="' + t + '" src="' + e + '" />', s = "";
      return (s = o ? ("string" == typeof o ? JSON.parse(o) : o).map(function (e) {
        var i = "";
        return Object.keys(e).forEach(function (t) {
          i += " " + t + '="' + e[t] + '"';
        }), "<source " + i + "></source>";
      }) : s) + i;
    },
    getResponsiveSrc: function getResponsiveSrc(t) {
      for (var e = [], i = [], s = "", n = 0; n < t.length; n++) {
        var o = t[n].split(" ");
        "" === o[0] && o.splice(0, 1), i.push(o[0]), e.push(o[1]);
      }

      for (var r = window.innerWidth, l = 0; l < e.length; l++) {
        if (parseInt(e[l], 10) > r) {
          s = i[l];
          break;
        }
      }

      return s;
    },
    isImageLoaded: function isImageLoaded(t) {
      return !!t && !!t.complete && 0 !== t.naturalWidth;
    },
    getVideoPosterMarkup: function getVideoPosterMarkup(t, e, i, s, n) {
      return '<div class="lg-video-cont ' + (n && n.youtube ? "lg-has-youtube" : n && n.vimeo ? "lg-has-vimeo" : "lg-has-html5") + '" style="' + i + '">\n                <div class="lg-video-play-button">\n                <svg\n                    viewBox="0 0 20 20"\n                    preserveAspectRatio="xMidYMid"\n                    focusable="false"\n                    aria-labelledby="' + s + '"\n                    role="img"\n                    class="lg-video-play-icon"\n                >\n                    <title>' + s + '</title>\n                    <polygon class="lg-video-play-icon-inner" points="1,0 20,10 1,20"></polygon>\n                </svg>\n                <svg class="lg-video-play-icon-bg" viewBox="0 0 50 50" focusable="false">\n                    <circle cx="50%" cy="50%" r="20"></circle></svg>\n                <svg class="lg-video-play-icon-circle" viewBox="0 0 50 50" focusable="false">\n                    <circle cx="50%" cy="50%" r="20"></circle>\n                </svg>\n            </div>\n            ' + (e || "") + '\n            <img class="lg-object lg-video-poster" src="' + t + '" />\n        </div>';
    },
    getFocusableElements: function getFocusableElements(t) {
      t = t.querySelectorAll('a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input[type="text"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled])');
      return [].filter.call(t, function (t) {
        t = window.getComputedStyle(t);
        return "none" !== t.display && "hidden" !== t.visibility;
      });
    },
    getDynamicOptions: function getDynamicOptions(t, e, g, d) {
      var h = [],
          u = __spreadArrays(defaultDynamicOptions, e);

      return [].forEach.call(t, function (t) {
        for (var e = {}, i = 0; i < t.attributes.length; i++) {
          var s,
              n,
              o = t.attributes[i];
          o.specified && (s = convertToData(o.name), n = "", (n = -1 < u.indexOf(s) ? s : n) && (e[n] = o.value));
        }

        var r = $LG(t),
            l = r.find("img").first().attr("alt"),
            a = r.attr("title"),
            r = d ? r.attr(d) : r.find("img").first().attr("src");
        e.thumb = r, g && !e.subHtml && (e.subHtml = a || l || ""), e.alt = l || a || "", h.push(e);
      }), h;
    },
    isMobile: function isMobile() {
      return /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    },
    isVideo: function isVideo(t, e, i) {
      if (!t) return e ? {
        html5: !0
      } : void console.error("lightGallery :- data-src is not provided on slide item " + (i + 1) + ". Please make sure the selector property is properly configured. More info - https://www.lightgalleryjs.com/demos/html-markup/");
      e = t.match(/\/\/(?:www\.)?youtu(?:\.be|be\.com|be-nocookie\.com)\/(?:watch\?v=|embed\/)?([a-z0-9\-\_\%]+)([\&|?][\S]*)*/i), i = t.match(/\/\/(?:www\.)?(?:player\.)?vimeo.com\/(?:video\/)?([0-9a-z\-_]+)(.*)?/i), t = t.match(/https?:\/\/(.+)?(wistia\.com|wi\.st)\/(medias|embed)\/([0-9a-z\-_]+)(.*)/);
      return e ? {
        youtube: e
      } : i ? {
        vimeo: i
      } : t ? {
        wistia: t
      } : void 0;
    }
  },
      lgId = 0,
      LightGallery = function () {
    function t(t, e) {
      if (this.lgOpened = !1, this.index = 0, this.plugins = [], this.lGalleryOn = !1, this.lgBusy = !1, this.currentItemsInDom = [], this.prevScrollTop = 0, this.isDummyImageRemoved = !1, this.dragOrSwipeEnabled = !1, this.mediaContainerPosition = {
        top: 0,
        bottom: 0
      }, !t) return this;
      if (lgId++, this.lgId = lgId, this.el = t, this.LGel = $LG(t), this.generateSettings(e), this.buildModules(), this.settings.dynamic && void 0 !== this.settings.dynamicEl && !Array.isArray(this.settings.dynamicEl)) throw "When using dynamic mode, you must also define dynamicEl as an Array.";
      return this.galleryItems = this.getItems(), this.normalizeSettings(), this.init(), this.validateLicense(), this;
    }

    return t.prototype.generateSettings = function (t) {
      this.settings = _assign(_assign({}, lightGalleryCoreSettings), t), (this.settings.isMobile && "function" == typeof this.settings.isMobile ? this.settings : utils).isMobile() && (t = _assign(_assign({}, this.settings.mobileSettings), this.settings.mobileSettings), this.settings = _assign(_assign({}, this.settings), t));
    }, t.prototype.normalizeSettings = function () {
      this.settings.slideEndAnimation && (this.settings.hideControlOnEnd = !1), this.settings.closable || (this.settings.swipeToClose = !1), this.zoomFromOrigin = this.settings.zoomFromOrigin, this.settings.dynamic && (this.zoomFromOrigin = !1), this.settings.container || (this.settings.container = document.body), this.settings.preload = Math.min(this.settings.preload, this.galleryItems.length);
    }, t.prototype.init = function () {
      var t = this;
      this.addSlideVideoInfo(this.galleryItems), this.buildStructure(), this.LGel.trigger(lGEvents.init, {
        instance: this
      }), this.settings.keyPress && this.keyPress(), setTimeout(function () {
        t.enableDrag(), t.enableSwipe(), t.triggerPosterClick();
      }, 50), this.arrow(), this.settings.mousewheel && this.mousewheel(), this.settings.dynamic || this.openGalleryOnItemClick();
    }, t.prototype.openGalleryOnItemClick = function () {
      for (var n = this, o = this, t = 0; t < this.items.length; t++) {
        !function (e) {
          var i = o.items[e],
              t = $LG(i),
              s = lgQuery.generateUUID();
          t.attr("data-lg-id", s).on("click.lgcustom-item-" + s, function (t) {
            t.preventDefault();
            t = n.settings.index || e;
            n.openGallery(t, i);
          });
        }(t);
      }
    }, t.prototype.buildModules = function () {
      var e = this;
      this.settings.plugins.forEach(function (t) {
        e.plugins.push(new t(e, $LG));
      });
    }, t.prototype.validateLicense = function () {
      this.settings.licenseKey ? "0000-0000-000-0000" === this.settings.licenseKey && console.warn("lightGallery: " + this.settings.licenseKey + " license key is not valid for production use") : console.error("Please provide a valid license key");
    }, t.prototype.getSlideItem = function (t) {
      return $LG(this.getSlideItemId(t));
    }, t.prototype.getSlideItemId = function (t) {
      return "#lg-item-" + this.lgId + "-" + t;
    }, t.prototype.getIdName = function (t) {
      return t + "-" + this.lgId;
    }, t.prototype.getElementById = function (t) {
      return $LG("#" + this.getIdName(t));
    }, t.prototype.manageSingleSlideClassName = function () {
      this.galleryItems.length < 2 ? this.outer.addClass("lg-single-item") : this.outer.removeClass("lg-single-item");
    }, t.prototype.buildStructure = function () {
      var t,
          e,
          i,
          s,
          n,
          o,
          r,
          l,
          a = this;
      this.$container && this.$container.get() || (e = t = "", this.settings.controls && (t = '<button type="button" id="' + this.getIdName("lg-prev") + '" aria-label="' + this.settings.strings.previousSlide + '" class="lg-prev lg-icon"> ' + this.settings.prevHtml + ' </button>\n                <button type="button" id="' + this.getIdName("lg-next") + '" aria-label="' + this.settings.strings.nextSlide + '" class="lg-next lg-icon"> ' + this.settings.nextHtml + " </button>"), ".lg-item" !== this.settings.appendSubHtmlTo && (e = '<div class="lg-sub-html" role="status" aria-live="polite"></div>'), i = "", this.settings.allowMediaOverlap && (i += "lg-media-overlap "), l = this.settings.ariaLabelledby ? 'aria-labelledby="' + this.settings.ariaLabelledby + '"' : "", s = this.settings.ariaDescribedby ? 'aria-describedby="' + this.settings.ariaDescribedby + '"' : "", r = "lg-container " + this.settings.addClass + " " + (document.body !== this.settings.container ? "lg-inline" : ""), n = this.settings.closable && this.settings.showCloseIcon ? '<button type="button" aria-label="' + this.settings.strings.closeGallery + '" id="' + this.getIdName("lg-close") + '" class="lg-close lg-icon"></button>' : "", o = this.settings.showMaximizeIcon ? '<button type="button" aria-label="' + this.settings.strings.toggleMaximize + '" id="' + this.getIdName("lg-maximize") + '" class="lg-maximize lg-icon"></button>' : "", r = '\n        <div class="' + r + '" id="' + this.getIdName("lg-container") + '" tabindex="-1" aria-modal="true" ' + l + " " + s + ' role="dialog"\n        >\n            <div id="' + this.getIdName("lg-backdrop") + '" class="lg-backdrop"></div>\n\n            <div id="' + this.getIdName("lg-outer") + '" class="lg-outer lg-use-css3 lg-css3 lg-hide-items ' + i + ' ">\n\n              <div id="' + this.getIdName("lg-content") + '" class="lg-content">\n                <div id="' + this.getIdName("lg-inner") + '" class="lg-inner">\n                </div>\n                ' + t + '\n              </div>\n                <div id="' + this.getIdName("lg-toolbar") + '" class="lg-toolbar lg-group">\n                    ' + o + "\n                    " + n + "\n                    </div>\n                    " + (".lg-outer" === this.settings.appendSubHtmlTo ? e : "") + '\n                <div id="' + this.getIdName("lg-components") + '" class="lg-components">\n                    ' + (".lg-sub-html" === this.settings.appendSubHtmlTo ? e : "") + "\n                </div>\n            </div>\n        </div>\n        ", $LG(this.settings.container).append(r), document.body !== this.settings.container && $LG(this.settings.container).css("position", "relative"), this.outer = this.getElementById("lg-outer"), this.$lgComponents = this.getElementById("lg-components"), this.$backdrop = this.getElementById("lg-backdrop"), this.$container = this.getElementById("lg-container"), this.$inner = this.getElementById("lg-inner"), this.$content = this.getElementById("lg-content"), this.$toolbar = this.getElementById("lg-toolbar"), this.$backdrop.css("transition-duration", this.settings.backdropDuration + "ms"), l = this.settings.mode + " ", this.manageSingleSlideClassName(), this.settings.enableDrag && (l += "lg-grab "), this.outer.addClass(l), this.$inner.css("transition-timing-function", this.settings.easing), this.$inner.css("transition-duration", this.settings.speed + "ms"), this.settings.download && this.$toolbar.append('<a id="' + this.getIdName("lg-download") + '" target="_blank" rel="noopener" aria-label="' + this.settings.strings.download + '" download class="lg-download lg-icon"></a>'), this.counter(), $LG(window).on("resize.lg.global" + this.lgId + " orientationchange.lg.global" + this.lgId, function () {
        a.refreshOnResize();
      }), this.hideBars(), this.manageCloseGallery(), this.toggleMaximize(), this.initModules());
    }, t.prototype.refreshOnResize = function () {
      var t, e, i;
      this.lgOpened && (t = this.galleryItems[this.index].__slideVideoInfo, this.mediaContainerPosition = this.getMediaContainerPosition(), i = (e = this.mediaContainerPosition).top, e = e.bottom, this.currentImageSize = utils.getSize(this.items[this.index], this.outer, i + e, t && this.settings.videoMaxSize), t && this.resizeVideoSlide(this.index, this.currentImageSize), this.zoomFromOrigin && !this.isDummyImageRemoved && (i = this.getDummyImgStyles(this.currentImageSize), this.outer.find(".lg-current .lg-dummy-img").first().attr("style", i)), this.LGel.trigger(lGEvents.containerResize));
    }, t.prototype.resizeVideoSlide = function (t, e) {
      e = this.getVideoContStyle(e);
      this.getSlideItem(t).find(".lg-video-cont").attr("style", e);
    }, t.prototype.updateSlides = function (t, e) {
      var i, s;
      this.index > t.length - 1 && (this.index = t.length - 1), 1 === t.length && (this.index = 0), t.length ? (i = this.galleryItems[e].src, this.galleryItems = t, this.updateControls(), this.$inner.empty(), this.currentItemsInDom = [], s = 0, this.galleryItems.some(function (t, e) {
        return t.src === i && (s = e, !0);
      }), this.currentItemsInDom = this.organizeSlideItems(s, -1), this.loadContent(s, !0), this.getSlideItem(s).addClass("lg-current"), this.index = s, this.updateCurrentCounter(s), this.LGel.trigger(lGEvents.updateSlides)) : this.closeGallery();
    }, t.prototype.getItems = function () {
      var t;
      return this.items = [], this.settings.dynamic ? this.settings.dynamicEl || [] : ("this" === this.settings.selector ? this.items.push(this.el) : this.settings.selector ? "string" == typeof this.settings.selector ? this.settings.selectWithin ? (t = $LG(this.settings.selectWithin), this.items = t.find(this.settings.selector).get()) : this.items = this.el.querySelectorAll(this.settings.selector) : this.items = this.settings.selector : this.items = this.el.children, utils.getDynamicOptions(this.items, this.settings.extraProps, this.settings.getCaptionFromTitleOrAlt, this.settings.exThumbImage));
    }, t.prototype.openGallery = function (e, t) {
      var i,
          s,
          n,
          o,
          r,
          l = this;
      void 0 === e && (e = this.settings.index), this.lgOpened || (this.lgOpened = !0, this.outer.removeClass("lg-hide-items"), this.$container.addClass("lg-show"), o = this.getItemsToBeInsertedToDom(e, e), this.currentItemsInDom = o, i = "", o.forEach(function (t) {
        i = i + '<div id="' + t + '" class="lg-item"></div>';
      }), this.$inner.append(i), this.addHtml(e), s = "", this.mediaContainerPosition = this.getMediaContainerPosition(), n = (o = this.mediaContainerPosition).top, o = o.bottom, this.settings.allowMediaOverlap || this.setMediaContainerPosition(n, o), r = this.galleryItems[e].__slideVideoInfo, this.zoomFromOrigin && t && (this.currentImageSize = utils.getSize(t, this.outer, n + o, r && this.settings.videoMaxSize), s = utils.getTransform(t, this.outer, n, o, this.currentImageSize)), this.zoomFromOrigin && s || (this.outer.addClass(this.settings.startClass), this.getSlideItem(e).removeClass("lg-complete")), r = this.settings.zoomFromOrigin ? 100 : this.settings.backdropDuration, setTimeout(function () {
        l.outer.addClass("lg-components-open");
      }, r), this.index = e, this.LGel.trigger(lGEvents.beforeOpen), this.getSlideItem(e).addClass("lg-current"), this.lGalleryOn = !1, this.prevScrollTop = $LG(window).scrollTop(), setTimeout(function () {
        var t;
        l.zoomFromOrigin && s && ((t = l.getSlideItem(e)).css("transform", s), setTimeout(function () {
          t.addClass("lg-start-progress lg-start-end-progress").css("transition-duration", l.settings.startAnimationDuration + "ms"), l.outer.addClass("lg-zoom-from-image");
        }), setTimeout(function () {
          t.css("transform", "translate3d(0, 0, 0)");
        }, 100)), setTimeout(function () {
          l.$backdrop.addClass("in"), l.$container.addClass("lg-show-in");
        }, 10), setTimeout(function () {
          l.settings.trapFocus && document.body === l.settings.container && l.trapFocus();
        }, l.settings.backdropDuration + 50), l.zoomFromOrigin && s || setTimeout(function () {
          l.outer.addClass("lg-visible");
        }, l.settings.backdropDuration), l.slide(e, !1, !1, !1), l.LGel.trigger(lGEvents.afterOpen);
      }), document.body === this.settings.container && $LG("html").addClass("lg-on"));
    }, t.prototype.getMediaContainerPosition = function () {
      if (this.settings.allowMediaOverlap) return {
        top: 0,
        bottom: 0
      };
      var t = this.$toolbar.get().clientHeight || 0,
          e = this.outer.find(".lg-components .lg-sub-html").get(),
          e = this.settings.defaultCaptionHeight || e && e.clientHeight || 0,
          i = this.outer.find(".lg-thumb-outer").get();
      return {
        top: t,
        bottom: (i ? i.clientHeight : 0) + e
      };
    }, t.prototype.setMediaContainerPosition = function (t, e) {
      void 0 === e && (e = 0), this.$content.css("top", (t = void 0 === t ? 0 : t) + "px").css("bottom", e + "px");
    }, t.prototype.hideBars = function () {
      var t = this;
      setTimeout(function () {
        t.outer.removeClass("lg-hide-items"), 0 < t.settings.hideBarsDelay && (t.outer.on("mousemove.lg click.lg touchstart.lg", function () {
          t.outer.removeClass("lg-hide-items"), clearTimeout(t.hideBarTimeout), t.hideBarTimeout = setTimeout(function () {
            t.outer.addClass("lg-hide-items");
          }, t.settings.hideBarsDelay);
        }), t.outer.trigger("mousemove.lg"));
      }, this.settings.showBarsAfter);
    }, t.prototype.initPictureFill = function (t) {
      if (this.settings.supportLegacyBrowser) try {
        picturefill({
          elements: [t.get()]
        });
      } catch (t) {
        console.warn("lightGallery :- If you want srcset or picture tag to be supported for older browser please include picturefil javascript library in your document.");
      }
    }, t.prototype.counter = function () {
      var t;
      this.settings.counter && (t = '<div class="lg-counter" role="status" aria-live="polite">\n                <span id="' + this.getIdName("lg-counter-current") + '" class="lg-counter-current">' + (this.index + 1) + ' </span> /\n                <span id="' + this.getIdName("lg-counter-all") + '" class="lg-counter-all">' + this.galleryItems.length + " </span></div>", this.outer.find(this.settings.appendCounterTo).append(t));
    }, t.prototype.addHtml = function (t) {
      var e, i, s;
      this.galleryItems[t].subHtmlUrl ? i = this.galleryItems[t].subHtmlUrl : e = this.galleryItems[t].subHtml, i || (e ? "." !== (s = e.substring(0, 1)) && "#" !== s || (e = (this.settings.subHtmlSelectorRelative && !this.settings.dynamic ? $LG(this.items).eq(t).find(e) : $LG(e)).first().html()) : e = ""), ".lg-item" !== this.settings.appendSubHtmlTo ? i ? this.outer.find(".lg-sub-html").load(i) : this.outer.find(".lg-sub-html").html(e) : (s = $LG(this.getSlideItemId(t)), i ? s.load(i) : s.append('<div class="lg-sub-html">' + e + "</div>")), null != e && ("" === e ? this.outer.find(this.settings.appendSubHtmlTo).addClass("lg-empty-html") : this.outer.find(this.settings.appendSubHtmlTo).removeClass("lg-empty-html")), this.LGel.trigger(lGEvents.afterAppendSubHtml, {
        index: t
      });
    }, t.prototype.preload = function (t) {
      for (var e = 1; e <= this.settings.preload && !(e >= this.galleryItems.length - t); e++) {
        this.loadContent(t + e, !1);
      }

      for (var i = 1; i <= this.settings.preload && !(t - i < 0); i++) {
        this.loadContent(t - i, !1);
      }
    }, t.prototype.getDummyImgStyles = function (t) {
      return t ? "width:" + t.width + "px;\n                margin-left: -" + t.width / 2 + "px;\n                margin-top: -" + t.height / 2 + "px;\n                height:" + t.height + "px" : "";
    }, t.prototype.getVideoContStyle = function (t) {
      return t ? "width:" + t.width + "px;\n                height:" + t.height + "px" : "";
    }, t.prototype.getDummyImageContent = function (t, e, i) {
      if (s = this.settings.dynamic ? s : $LG(this.items).eq(e)) {
        e = void 0;
        if (!(e = this.settings.exThumbImage ? s.attr(this.settings.exThumbImage) : s.find("img").first().attr("src"))) return "";
        var s = "<img " + i + ' style="' + this.getDummyImgStyles(this.currentImageSize) + '" class="lg-dummy-img" src="' + e + '" />';
        return t.addClass("lg-first-slide"), this.outer.addClass("lg-first-slide-loading"), s;
      }

      return "";
    }, t.prototype.setImgMarkup = function (t, e, i) {
      var s = this.galleryItems[i],
          n = s.alt,
          o = s.srcset,
          r = s.sizes,
          s = s.sources,
          l = "",
          n = n ? 'alt="' + n + '"' : "",
          l = this.isFirstSlideWithZoomAnimation() ? this.getDummyImageContent(e, i, n) : utils.getImgMarkup(i, t, n, o, r, s);
      e.prepend('<picture class="lg-img-wrap"> ' + l + "</picture>");
    }, t.prototype.onSlideObjectLoad = function (t, e, i, s) {
      t = t.find(".lg-object").first();
      utils.isImageLoaded(t.get()) || e ? i() : (t.on("load.lg error.lg", function () {
        i && i();
      }), t.on("error.lg", function () {
        s && s();
      }));
    }, t.prototype.onLgObjectLoad = function (t, e, i, s, n, o) {
      var r = this;
      this.onSlideObjectLoad(t, o, function () {
        r.triggerSlideItemLoad(t, e, i, s, n);
      }, function () {
        t.addClass("lg-complete lg-complete_"), t.html('<span class="lg-error-msg">Oops... Failed to load content...</span>');
      });
    }, t.prototype.triggerSlideItemLoad = function (t, e, i, s, n) {
      var o = this,
          r = this.galleryItems[e],
          r = n && "video" === this.getSlideType(r) && !r.poster ? s : 0;
      setTimeout(function () {
        t.addClass("lg-complete lg-complete_"), o.LGel.trigger(lGEvents.slideItemLoad, {
          index: e,
          delay: i || 0,
          isFirstSlide: n
        });
      }, r);
    }, t.prototype.isFirstSlideWithZoomAnimation = function () {
      return !(this.lGalleryOn || !this.zoomFromOrigin || !this.currentImageSize);
    }, t.prototype.addSlideVideoInfo = function (t) {
      var i = this;
      t.forEach(function (t, e) {
        t.__slideVideoInfo = utils.isVideo(t.src, !!t.video, e), t.__slideVideoInfo && i.settings.loadYouTubePoster && !t.poster && t.__slideVideoInfo.youtube && (t.poster = "//img.youtube.com/vi/" + t.__slideVideoInfo.youtube[1] + "/maxresdefault.jpg");
      });
    }, t.prototype.loadContent = function (e, t) {
      var i,
          s,
          n,
          o = this,
          r = this.galleryItems[e],
          l = $LG(this.getSlideItemId(e)),
          a = r.poster,
          g = r.srcset,
          d = r.sizes,
          h = r.sources,
          u = r.src,
          c = r.video,
          c = c && "string" == typeof c ? JSON.parse(c) : c,
          m = (r.responsive && (p = r.responsive.split(","), u = utils.getResponsiveSrc(p) || u), r.__slideVideoInfo),
          p = "",
          f = !!r.iframe,
          y = !this.lGalleryOn,
          v = 0,
          b = (y && (v = this.zoomFromOrigin && this.currentImageSize ? this.settings.startAnimationDuration + 10 : this.settings.backdropDuration + 10), l.hasClass("lg-loaded") || (m && (n = (i = this.mediaContainerPosition).top, i = i.bottom, n = utils.getSize(this.items[e], this.outer, n + i, m && this.settings.videoMaxSize), p = this.getVideoContStyle(n)), f ? (s = utils.getIframeMarkup(this.settings.iframeWidth, this.settings.iframeHeight, this.settings.iframeMaxWidth, this.settings.iframeMaxHeight, u, r.iframeTitle), l.prepend(s)) : a ? (i = "", y && this.zoomFromOrigin && this.currentImageSize && (i = this.getDummyImageContent(l, e, "")), s = utils.getVideoPosterMarkup(a, i || "", p, this.settings.strings.playVideo, m), l.prepend(s)) : m ? l.prepend(s = '<div class="lg-video-cont " style="' + p + '"></div>') : (this.setImgMarkup(u, l, e), (g || h) && (n = l.find(".lg-object"), this.initPictureFill(n))), (a || m) && this.LGel.trigger(lGEvents.hasVideo, {
        index: e,
        src: u,
        html5Video: c,
        hasPoster: !!a
      }), this.LGel.trigger(lGEvents.afterAppendSlide, {
        index: e
      }), this.lGalleryOn && ".lg-item" === this.settings.appendSubHtmlTo && this.addHtml(e)), 0);
      v && !$LG(document.body).hasClass("lg-from-hash") && (b = v), this.isFirstSlideWithZoomAnimation() && (setTimeout(function () {
        l.removeClass("lg-start-end-progress lg-start-progress").removeAttr("style");
      }, this.settings.startAnimationDuration + 100), l.hasClass("lg-loaded") || setTimeout(function () {
        var t;
        "image" === o.getSlideType(r) && (l.find(".lg-img-wrap").append(utils.getImgMarkup(e, u, "", g, d, r.sources)), (g || h) && (t = l.find(".lg-object"), o.initPictureFill(t))), ("image" === o.getSlideType(r) || "video" === o.getSlideType(r) && a) && (o.onLgObjectLoad(l, e, v, b, !0, !1), o.onSlideObjectLoad(l, !(!m || !m.html5 || a), function () {
          o.loadContentOnFirstSlideLoad(e, l, b);
        }, function () {
          o.loadContentOnFirstSlideLoad(e, l, b);
        }));
      }, this.settings.startAnimationDuration + 100)), l.addClass("lg-loaded"), this.isFirstSlideWithZoomAnimation() && ("video" !== this.getSlideType(r) || a) || this.onLgObjectLoad(l, e, v, b, y, !(!m || !m.html5 || a)), this.zoomFromOrigin && this.currentImageSize || !l.hasClass("lg-complete_") || this.lGalleryOn || setTimeout(function () {
        l.addClass("lg-complete");
      }, this.settings.backdropDuration), (this.lGalleryOn = !0) === t && (l.hasClass("lg-complete_") ? this.preload(e) : l.find(".lg-object").first().on("load.lg error.lg", function () {
        o.preload(e);
      }));
    }, t.prototype.loadContentOnFirstSlideLoad = function (t, e, i) {
      var s = this;
      setTimeout(function () {
        e.find(".lg-dummy-img").remove(), e.removeClass("lg-first-slide"), s.outer.removeClass("lg-first-slide-loading"), s.isDummyImageRemoved = !0, s.preload(t);
      }, i + 300);
    }, t.prototype.getItemsToBeInsertedToDom = function (t, e, i) {
      var s = this,
          n = (void 0 === i && (i = 0), []),
          o = Math.max(i, 3),
          o = Math.min(o, this.galleryItems.length),
          i = "lg-item-" + this.lgId + "-" + e;
      if (this.galleryItems.length <= 3) return this.galleryItems.forEach(function (t, e) {
        n.push("lg-item-" + s.lgId + "-" + e);
      }), n;

      if (t < (this.galleryItems.length - 1) / 2) {
        for (var r = t; t - o / 2 < r && 0 <= r; r--) {
          n.push("lg-item-" + this.lgId + "-" + r);
        }

        for (var l = n.length, r = 0; r < o - l; r++) {
          n.push("lg-item-" + this.lgId + "-" + (t + r + 1));
        }
      } else {
        for (r = t; r <= this.galleryItems.length - 1 && r < t + o / 2; r++) {
          n.push("lg-item-" + this.lgId + "-" + r);
        }

        for (l = n.length, r = 0; r < o - l; r++) {
          n.push("lg-item-" + this.lgId + "-" + (t - r - 1));
        }
      }

      return this.settings.loop && (t === this.galleryItems.length - 1 ? n.push("lg-item-" + this.lgId + "-0") : 0 === t && n.push("lg-item-" + this.lgId + "-" + (this.galleryItems.length - 1))), -1 === n.indexOf(i) && n.push("lg-item-" + this.lgId + "-" + e), n;
    }, t.prototype.organizeSlideItems = function (t, e) {
      var i = this,
          s = this.getItemsToBeInsertedToDom(t, e, this.settings.numberOfSlideItemsInDom);
      return s.forEach(function (t) {
        -1 === i.currentItemsInDom.indexOf(t) && i.$inner.append('<div id="' + t + '" class="lg-item"></div>');
      }), this.currentItemsInDom.forEach(function (t) {
        -1 === s.indexOf(t) && $LG("#" + t).remove();
      }), s;
    }, t.prototype.getPreviousSlideIndex = function () {
      var e = 0;

      try {
        var t = this.outer.find(".lg-current").first().attr("id"),
            e = parseInt(t.split("-")[3]) || 0;
      } catch (t) {
        e = 0;
      }

      return e;
    }, t.prototype.setDownloadValue = function (t) {
      var e;
      this.settings.download && (!1 === (t = this.galleryItems[t]).downloadUrl || "false" === t.downloadUrl ? this.outer.addClass("lg-hide-download") : (e = this.getElementById("lg-download"), this.outer.removeClass("lg-hide-download"), e.attr("href", t.downloadUrl || t.src), t.download && e.attr("download", t.download)));
    }, t.prototype.makeSlideAnimation = function (t, e, i) {
      var s = this;
      this.lGalleryOn && i.addClass("lg-slide-progress"), setTimeout(function () {
        s.outer.addClass("lg-no-trans"), s.outer.find(".lg-item").removeClass("lg-prev-slide lg-next-slide"), "prev" === t ? (e.addClass("lg-prev-slide"), i.addClass("lg-next-slide")) : (e.addClass("lg-next-slide"), i.addClass("lg-prev-slide")), setTimeout(function () {
          s.outer.find(".lg-item").removeClass("lg-current"), e.addClass("lg-current"), s.outer.removeClass("lg-no-trans");
        }, 50);
      }, this.lGalleryOn ? this.settings.slideDelay : 0);
    }, t.prototype.slide = function (t, e, i, s) {
      var n,
          o,
          r,
          l,
          a,
          g,
          d = this,
          h = this.getPreviousSlideIndex();
      this.currentItemsInDom = this.organizeSlideItems(t, h), this.lGalleryOn && h === t || (n = this.galleryItems.length, this.lgBusy || (this.settings.counter && this.updateCurrentCounter(t), o = this.getSlideItem(t), r = this.getSlideItem(h), g = (a = this.galleryItems[t]).__slideVideoInfo, this.outer.attr("data-lg-slide-type", this.getSlideType(a)), this.setDownloadValue(t), g && (l = (a = this.mediaContainerPosition).top, a = a.bottom, l = utils.getSize(this.items[t], this.outer, l + a, g && this.settings.videoMaxSize), this.resizeVideoSlide(t, l)), this.LGel.trigger(lGEvents.beforeSlide, {
        prevIndex: h,
        index: t,
        fromTouch: !!e,
        fromThumb: !!i
      }), this.lgBusy = !0, clearTimeout(this.hideBarTimeout), this.arrowDisable(t), s || (t < h ? s = "prev" : h < t && (s = "next")), e ? (this.outer.find(".lg-item").removeClass("lg-prev-slide lg-current lg-next-slide"), g = a = void 0, 2 < n ? (a = t - 1, g = t + 1, (0 === t && h === n - 1 || t === n - 1 && 0 === h) && (g = 0, a = n - 1)) : (a = 0, g = 1), "prev" === s ? this.getSlideItem(g).addClass("lg-next-slide") : this.getSlideItem(a).addClass("lg-prev-slide"), o.addClass("lg-current")) : this.makeSlideAnimation(s, o, r), this.lGalleryOn ? setTimeout(function () {
        d.loadContent(t, !0), ".lg-item" !== d.settings.appendSubHtmlTo && d.addHtml(t);
      }, this.settings.speed + 50 + (e ? 0 : this.settings.slideDelay)) : this.loadContent(t, !0), setTimeout(function () {
        d.lgBusy = !1, r.removeClass("lg-slide-progress"), d.LGel.trigger(lGEvents.afterSlide, {
          prevIndex: h,
          index: t,
          fromTouch: e,
          fromThumb: i
        });
      }, (this.lGalleryOn ? this.settings.speed + 100 : 100) + (e ? 0 : this.settings.slideDelay))), this.index = t);
    }, t.prototype.updateCurrentCounter = function (t) {
      this.getElementById("lg-counter-current").html(t + 1 + "");
    }, t.prototype.updateCounterTotal = function () {
      this.getElementById("lg-counter-all").html(this.galleryItems.length + "");
    }, t.prototype.getSlideType = function (t) {
      return t.__slideVideoInfo ? "video" : t.iframe ? "iframe" : "image";
    }, t.prototype.touchMove = function (t, e, i) {
      var s,
          n,
          o = e.pageX - t.pageX,
          e = e.pageY - t.pageY,
          t = !1;
      this.swipeDirection ? t = !0 : 15 < Math.abs(o) ? (this.swipeDirection = "horizontal", t = !0) : 15 < Math.abs(e) && (this.swipeDirection = "vertical", t = !0), t && (t = this.getSlideItem(this.index), "horizontal" === this.swipeDirection ? (null != i && i.preventDefault(), this.outer.addClass("lg-dragging"), this.setTranslate(t, o, 0), s = 15 * (n = t.get().offsetWidth) / 100 - Math.abs(10 * o / 100), this.setTranslate(this.outer.find(".lg-prev-slide").first(), o - n - s, 0), this.setTranslate(this.outer.find(".lg-next-slide").first(), n + o + s, 0)) : "vertical" === this.swipeDirection && this.settings.swipeToClose && (null != i && i.preventDefault(), this.$container.addClass("lg-dragging-vertical"), n = 1 - Math.abs(e) / window.innerHeight, this.$backdrop.css("opacity", n), o = 1 - Math.abs(e) / (2 * window.innerWidth), this.setTranslate(t, 0, e, o, o), 100 < Math.abs(e) && this.outer.addClass("lg-hide-items").removeClass("lg-components-open")));
    }, t.prototype.touchEnd = function (i, s, n) {
      var o,
          r = this;
      "lg-slide" !== this.settings.mode && this.outer.addClass("lg-slide"), setTimeout(function () {
        r.$container.removeClass("lg-dragging-vertical"), r.outer.removeClass("lg-dragging lg-hide-items").addClass("lg-components-open");
        var t = !0;

        if ("horizontal" === r.swipeDirection) {
          o = i.pageX - s.pageX;
          var e = Math.abs(i.pageX - s.pageX);
          o < 0 && e > r.settings.swipeThreshold ? (r.goToNextSlide(!0), t = !1) : 0 < o && e > r.settings.swipeThreshold && (r.goToPrevSlide(!0), t = !1);
        } else if ("vertical" === r.swipeDirection) {
          if (o = Math.abs(i.pageY - s.pageY), r.settings.closable && r.settings.swipeToClose && 100 < o) return void r.closeGallery();
          r.$backdrop.css("opacity", 1);
        }

        r.outer.find(".lg-item").removeAttr("style"), t && Math.abs(i.pageX - s.pageX) < 5 && (e = $LG(n.target), r.isPosterElement(e) && r.LGel.trigger(lGEvents.posterClick)), r.swipeDirection = void 0;
      }), setTimeout(function () {
        r.outer.hasClass("lg-dragging") || "lg-slide" === r.settings.mode || r.outer.removeClass("lg-slide");
      }, this.settings.speed + 100);
    }, t.prototype.enableSwipe = function () {
      var i = this,
          s = {},
          e = {},
          n = !1,
          o = !1;
      this.settings.enableSwipe && (this.$inner.on("touchstart.lg", function (t) {
        i.dragOrSwipeEnabled = !0;
        var e = i.getSlideItem(i.index);
        !$LG(t.target).hasClass("lg-item") && !e.get().contains(t.target) || i.outer.hasClass("lg-zoomed") || i.lgBusy || 1 !== t.targetTouches.length || (o = !0, i.touchAction = "swipe", i.manageSwipeClass(), s = {
          pageX: t.targetTouches[0].pageX,
          pageY: t.targetTouches[0].pageY
        });
      }), this.$inner.on("touchmove.lg", function (t) {
        o && "swipe" === i.touchAction && 1 === t.targetTouches.length && (e = {
          pageX: t.targetTouches[0].pageX,
          pageY: t.targetTouches[0].pageY
        }, i.touchMove(s, e, t), n = !0);
      }), this.$inner.on("touchend.lg", function (t) {
        "swipe" === i.touchAction && (n ? (n = !1, i.touchEnd(e, s, t)) : o && (t = $LG(t.target), i.isPosterElement(t) && i.LGel.trigger(lGEvents.posterClick)), i.touchAction = void 0, o = !1);
      }));
    }, t.prototype.enableDrag = function () {
      var i = this,
          s = {},
          n = {},
          o = !1,
          r = !1;
      this.settings.enableDrag && (this.outer.on("mousedown.lg", function (t) {
        i.dragOrSwipeEnabled = !0;
        var e = i.getSlideItem(i.index);
        !$LG(t.target).hasClass("lg-item") && !e.get().contains(t.target) || i.outer.hasClass("lg-zoomed") || i.lgBusy || (t.preventDefault(), i.lgBusy || (i.manageSwipeClass(), s = {
          pageX: t.pageX,
          pageY: t.pageY
        }, o = !0, i.outer.get().scrollLeft += 1, --i.outer.get().scrollLeft, i.outer.removeClass("lg-grab").addClass("lg-grabbing"), i.LGel.trigger(lGEvents.dragStart)));
      }), $LG(window).on("mousemove.lg.global" + this.lgId, function (t) {
        o && i.lgOpened && (r = !0, n = {
          pageX: t.pageX,
          pageY: t.pageY
        }, i.touchMove(s, n), i.LGel.trigger(lGEvents.dragMove));
      }), $LG(window).on("mouseup.lg.global" + this.lgId, function (t) {
        var e;
        i.lgOpened && (e = $LG(t.target), r ? (r = !1, i.touchEnd(n, s, t), i.LGel.trigger(lGEvents.dragEnd)) : i.isPosterElement(e) && i.LGel.trigger(lGEvents.posterClick), o && (o = !1, i.outer.removeClass("lg-grabbing").addClass("lg-grab")));
      }));
    }, t.prototype.triggerPosterClick = function () {
      var e = this;
      this.$inner.on("click.lg", function (t) {
        !e.dragOrSwipeEnabled && e.isPosterElement($LG(t.target)) && e.LGel.trigger(lGEvents.posterClick);
      });
    }, t.prototype.manageSwipeClass = function () {
      var t = this.index + 1,
          e = this.index - 1;
      this.settings.loop && 2 < this.galleryItems.length && (0 === this.index ? e = this.galleryItems.length - 1 : this.index === this.galleryItems.length - 1 && (t = 0)), this.outer.find(".lg-item").removeClass("lg-next-slide lg-prev-slide"), -1 < e && this.getSlideItem(e).addClass("lg-prev-slide"), this.getSlideItem(t).addClass("lg-next-slide");
    }, t.prototype.goToNextSlide = function (t) {
      var e = this,
          i = this.settings.loop;
      t && this.galleryItems.length < 3 && (i = !1), this.lgBusy || (this.index + 1 < this.galleryItems.length ? (this.index++, this.LGel.trigger(lGEvents.beforeNextSlide, {
        index: this.index
      }), this.slide(this.index, !!t, !1, "next")) : i ? (this.index = 0, this.LGel.trigger(lGEvents.beforeNextSlide, {
        index: this.index
      }), this.slide(this.index, !!t, !1, "next")) : this.settings.slideEndAnimation && !t && (this.outer.addClass("lg-right-end"), setTimeout(function () {
        e.outer.removeClass("lg-right-end");
      }, 400)));
    }, t.prototype.goToPrevSlide = function (t) {
      var e = this,
          i = this.settings.loop;
      t && this.galleryItems.length < 3 && (i = !1), this.lgBusy || (0 < this.index ? (this.index--, this.LGel.trigger(lGEvents.beforePrevSlide, {
        index: this.index,
        fromTouch: t
      }), this.slide(this.index, !!t, !1, "prev")) : i ? (this.index = this.galleryItems.length - 1, this.LGel.trigger(lGEvents.beforePrevSlide, {
        index: this.index,
        fromTouch: t
      }), this.slide(this.index, !!t, !1, "prev")) : this.settings.slideEndAnimation && !t && (this.outer.addClass("lg-left-end"), setTimeout(function () {
        e.outer.removeClass("lg-left-end");
      }, 400)));
    }, t.prototype.keyPress = function () {
      var e = this;
      $LG(window).on("keydown.lg.global" + this.lgId, function (t) {
        e.lgOpened && !0 === e.settings.escKey && 27 === t.keyCode && (t.preventDefault(), e.settings.allowMediaOverlap && e.outer.hasClass("lg-can-toggle") && e.outer.hasClass("lg-components-open") ? e.outer.removeClass("lg-components-open") : e.closeGallery()), e.lgOpened && 1 < e.galleryItems.length && (37 === t.keyCode && (t.preventDefault(), e.goToPrevSlide()), 39 === t.keyCode && (t.preventDefault(), e.goToNextSlide()));
      });
    }, t.prototype.arrow = function () {
      var t = this;
      this.getElementById("lg-prev").on("click.lg", function () {
        t.goToPrevSlide();
      }), this.getElementById("lg-next").on("click.lg", function () {
        t.goToNextSlide();
      });
    }, t.prototype.arrowDisable = function (t) {
      var e, i;
      !this.settings.loop && this.settings.hideControlOnEnd && (e = this.getElementById("lg-prev"), i = this.getElementById("lg-next"), t + 1 === this.galleryItems.length ? i.attr("disabled", "disabled").addClass("disabled") : i.removeAttr("disabled").removeClass("disabled"), 0 === t ? e.attr("disabled", "disabled").addClass("disabled") : e.removeAttr("disabled").removeClass("disabled"));
    }, t.prototype.setTranslate = function (t, e, i, s, n) {
      t.css("transform", "translate3d(" + e + "px, " + i + "px, 0px) scale3d(" + (s = void 0 === s ? 1 : s) + ", " + (n = void 0 === n ? 1 : n) + ", 1)");
    }, t.prototype.mousewheel = function () {
      var i = this,
          s = 0;
      this.outer.on("wheel.lg", function (t) {
        var e;
        !t.deltaY || i.galleryItems.length < 2 || (t.preventDefault(), (e = new Date().getTime()) - s < 1e3 || (s = e, 0 < t.deltaY ? i.goToNextSlide() : t.deltaY < 0 && i.goToPrevSlide()));
      });
    }, t.prototype.isSlideElement = function (t) {
      return t.hasClass("lg-outer") || t.hasClass("lg-item") || t.hasClass("lg-img-wrap");
    }, t.prototype.isPosterElement = function (t) {
      var e = this.getSlideItem(this.index).find(".lg-video-play-button").get();
      return t.hasClass("lg-video-poster") || t.hasClass("lg-video-play-button") || e && e.contains(t.get());
    }, t.prototype.toggleMaximize = function () {
      var t = this;
      this.getElementById("lg-maximize").on("click.lg", function () {
        t.$container.toggleClass("lg-inline"), t.refreshOnResize();
      });
    }, t.prototype.invalidateItems = function () {
      for (var t = 0; t < this.items.length; t++) {
        var e = $LG(this.items[t]);
        e.off("click.lgcustom-item-" + e.attr("data-lg-id"));
      }
    }, t.prototype.trapFocus = function () {
      var s = this;
      this.$container.get().focus(), $LG(window).on("keydown.lg.global" + this.lgId, function (t) {
        var e, i;
        !s.lgOpened || "Tab" !== t.key && 9 !== t.keyCode || (e = (i = utils.getFocusableElements(s.$container.get()))[0], i = i[i.length - 1], t.shiftKey ? document.activeElement === e && (i.focus(), t.preventDefault()) : document.activeElement === i && (e.focus(), t.preventDefault()));
      });
    }, t.prototype.manageCloseGallery = function () {
      var e,
          i = this;
      this.settings.closable && (e = !1, this.getElementById("lg-close").on("click.lg", function () {
        i.closeGallery();
      }), this.settings.closeOnTap && (this.outer.on("mousedown.lg", function (t) {
        t = $LG(t.target);
        e = !!i.isSlideElement(t);
      }), this.outer.on("mousemove.lg", function () {
        e = !1;
      }), this.outer.on("mouseup.lg", function (t) {
        t = $LG(t.target);
        i.isSlideElement(t) && e && (i.outer.hasClass("lg-dragging") || i.closeGallery());
      })));
    }, t.prototype.closeGallery = function (t) {
      var e = this;
      if (!this.lgOpened || !this.settings.closable && !t) return 0;
      this.LGel.trigger(lGEvents.beforeClose), $LG(window).scrollTop(this.prevScrollTop);
      var i,
          s,
          n,
          o,
          t = this.items[this.index],
          r = (this.zoomFromOrigin && t && (i = (s = this.mediaContainerPosition).top, s = s.bottom, n = (r = this.galleryItems[this.index]).__slideVideoInfo, r = r.poster, n = utils.getSize(t, this.outer, i + s, n && r && this.settings.videoMaxSize), o = utils.getTransform(t, this.outer, i, s, n)), this.zoomFromOrigin && o ? (this.outer.addClass("lg-closing lg-zoom-from-image"), this.getSlideItem(this.index).addClass("lg-start-end-progress").css("transition-duration", this.settings.startAnimationDuration + "ms").css("transform", o)) : (this.outer.addClass("lg-hide-items"), this.outer.removeClass("lg-zoom-from-image")), this.destroyModules(), this.lGalleryOn = !1, this.isDummyImageRemoved = !1, this.zoomFromOrigin = this.settings.zoomFromOrigin, clearTimeout(this.hideBarTimeout), this.hideBarTimeout = !1, $LG("html").removeClass("lg-on"), this.outer.removeClass("lg-visible lg-components-open"), this.$backdrop.removeClass("in").css("opacity", 0), this.zoomFromOrigin && o ? Math.max(this.settings.startAnimationDuration, this.settings.backdropDuration) : this.settings.backdropDuration);
      return this.$container.removeClass("lg-show-in"), setTimeout(function () {
        e.zoomFromOrigin && o && e.outer.removeClass("lg-zoom-from-image"), e.$container.removeClass("lg-show"), e.$backdrop.removeAttr("style").css("transition-duration", e.settings.backdropDuration + "ms"), e.outer.removeClass("lg-closing " + e.settings.startClass), e.getSlideItem(e.index).removeClass("lg-start-end-progress"), e.$inner.empty(), e.lgOpened && e.LGel.trigger(lGEvents.afterClose, {
          instance: e
        }), e.$container.get() && e.$container.get().blur(), e.lgOpened = !1;
      }, r + 100), r + 100;
    }, t.prototype.initModules = function () {
      this.plugins.forEach(function (t) {
        try {
          t.init();
        } catch (t) {
          console.warn("lightGallery:- make sure lightGallery module is properly initiated");
        }
      });
    }, t.prototype.destroyModules = function (e) {
      this.plugins.forEach(function (t) {
        try {
          e ? t.destroy() : t.closeGallery && t.closeGallery();
        } catch (t) {
          console.warn("lightGallery:- make sure lightGallery module is properly destroyed");
        }
      });
    }, t.prototype.refresh = function (t) {
      this.settings.dynamic || this.invalidateItems(), this.galleryItems = t || this.getItems(), this.updateControls(), this.openGalleryOnItemClick(), this.LGel.trigger(lGEvents.updateSlides);
    }, t.prototype.updateControls = function () {
      this.addSlideVideoInfo(this.galleryItems), this.updateCounterTotal(), this.manageSingleSlideClassName();
    }, t.prototype.destroy = function () {
      var t = this,
          e = this.closeGallery(!0);
      return setTimeout(function () {
        t.destroyModules(!0), t.settings.dynamic || t.invalidateItems(), $LG(window).off(".lg.global" + t.lgId), t.LGel.off(".lg"), t.$container.remove();
      }, e), e;
    }, t;
  }();

  function lightGallery(t, e) {
    return new LightGallery(t, e);
  }
  /* harmony default export */


  var lightgallery_es5 = lightGallery;
  ; // CONCATENATED MODULE: ./src/js/app.js
  //import * as gasArt from './modules/functions.js';
  // console.log(gasArt.block());

  isWebp();

  window.onload = function () {
    document.addEventListener('click', documentActions);
    var menuBody = document.querySelector('.menu__body');
    var menuButton = document.querySelectorAll('.menu__item-button');
    var searchForm = document.querySelector('.search-form__form');
    var searchButton = document.querySelector('.search-form__button');
    var burger = document.querySelector('.icon-menu');
    var emailSubmitForm = document.getElementById('form'); //Popup-links

    var linksPopup = document.querySelectorAll('.link-on-popup');

    function popupLinkClick() {
      linksPopup.forEach(function (link) {
        link.addEventListener('click', function (e) {
          var popupId = this.dataset.popupId;
          popUp(popupId);
          e.preventDefault();
        });
      });
    }

    popupLinkClick(); //verify email

    emailSubmitForm.addEventListener('submit', formSend);

    function formSend(e) {
      validate(emailSubmitForm);
      e.preventDefault();
    }

    burger.addEventListener('click', function (e) {
      burger.classList.toggle('open');
      menuBody.classList.toggle('active');
      e.preventDefault;
    }); //Active для выпадающего меню на тачскринах

    menuButton.forEach(function (item) {
      item.addEventListener('click', function (e) {
        var currentBtn = e.target; //Удаляем лишний active

        menuButton.forEach(function (subItem) {
          if (currentBtn != subItem) {
            subItem.classList.remove('active');
            subItem.closest('.menu__item').classList.remove('active');
          }
        }); //

        if (window.matchMedia && window.matchMedia("(pointer: coarse)").matches) {
          // Устройства без мыши
          e.target.classList.toggle('active');
          e.target.closest('.menu__item').classList.toggle('active');
        }
      });
    }); //Active для поиска

    searchButton.addEventListener('click', function () {
      searchForm.classList.toggle('active');
    });
    searchForm.addEventListener('submit', stopSearch);

    function stopSearch(e) {
      popUp(e.target.dataset.popupId);
      e.target.reset();
      e.preventDefault();
      return false;
    } //Убираем active при клике


    function documentActions(e) {
      //Убираем active у формы поиска
      if (!e.target.closest('.search-form')) {
        searchForm.classList.remove('active');
      } //Убираем active у меню


      if (!e.target.closest('.menu__item')) {
        menuButton.forEach(function (item) {
          item.classList.remove('active');
          item.closest('.menu__item').classList.remove('active');
        });
      } //Кнопка добавлениятовара в корзину


      if (e.target.classList.contains('hover-product__btn')) {
        var productId = e.target.closest('.item-product').dataset.id;
        var productBtn = e.target;
        addToCart(productBtn, productId);
        e.preventDefault();
      } //Кнопка + в корзине


      if (e.target.classList.contains('cart-list__btn-plus')) {
        var _productId = e.target.closest('.cart-list__item').dataset.cartId;
        var _productBtn = e.target;
        updateCart(_productBtn, _productId); // e.preventDefault();
      } //Кнопка - в корзине


      if (e.target.classList.contains('cart-list__btn-minus')) {
        var _productId2 = e.target.closest('.cart-list__item').dataset.cartId;
        var _productBtn2 = e.target;
        updateCart(_productBtn2, _productId2, false); // e.preventDefault();
      } //Кнопка удаления товара из корзины


      if (e.target.classList.contains('cart-list__delete')) {
        var _productId3 = e.target.closest('.cart-list__item').dataset.cartId;
        var _productBtn3 = e.target;
        deleteFromCart(_productBtn3, _productId3);
        e.preventDefault();
      } //Кнопка заказа товара


      if (e.target.classList.contains('cart-list__make-order-btn')) {
        var _productBtn4 = e.target;
        makeOrder(_productBtn4);
      }
    } //Акардеон для футера


    function windowSize() {
      if ($(window).width() > '768') {
        $('.toggle-block').siblings('.body-item-footer__content').slideDown();
        $('.toggle-block').removeClass('active');
      } else {
        $('.toggle-block').siblings('.body-item-footer__content').slideUp();
      }
    }

    $('.toggle-block').click(function (event) {
      if ($(window).width() <= '768') {
        $('.toggle-block').not($(event.target)).removeClass('active');
        $('.toggle-block').not($(event.target)).next().slideUp(300);
        $(event.target).toggleClass('active').next().slideToggle(300);
      }
    });
    $(window).on('load resize', windowSize);
    windowSize(); //Прокрутка header

    var headerElement = document.querySelector('.header');

    function watchHeader(entries) {
      if (entries[0].isIntersecting) {
        entries[0].target.classList.remove('_scroll');
      } else {
        entries[0].target.classList.add('_scroll');
      }
    }

    var headerObserver = new IntersectionObserver(watchHeader);
    headerObserver.observe(headerElement); //Подгрузка товаров

    var productsBlock = document.querySelector('.products__items');
    var loadMoreBtn = document.querySelector('.products__footer--link');
    loadMoreBtn.addEventListener('click', function (e) {
      getProducts(e.target);
      e.preventDefault();
    });

    function getProducts(_x) {
      return _getProducts.apply(this, arguments);
    }

    function _getProducts() {
      _getProducts = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee(btn) {
        var file, responce, result;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                if (!btn.classList.contains('_hold')) {
                  btn.classList.add('_hold');
                }

                file = "https://artgas.pro/json/furino/products.json";
                _context.next = 4;
                return fetch(file, {
                  method: 'GET'
                });

              case 4:
                responce = _context.sent;

                if (!responce.ok) {
                  _context.next = 13;
                  break;
                }

                _context.next = 8;
                return responce.json();

              case 8:
                result = _context.sent;
                loadProducts(result);
                btn.classList.remove('_hold');
                _context.next = 14;
                break;

              case 13:
                alert('Ошибка при загрузке товаров');

              case 14:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }));
      return _getProducts.apply(this, arguments);
    }

    function loadProducts(data) {
      var currentLastProductBlockId = productsBlock.lastElementChild.dataset.id;
      data.products.forEach(function (product) {
        if (product.id > +currentLastProductBlockId && product.id < +currentLastProductBlockId + 5) {
          var productCard = "<div data-id=\"".concat(product.id, "\" class=\"products__item item-product\">\n               <a href=\"").concat(product.linkUrl, "\" class=\"item-product__img\">\n               <picture><source srcset=\"img/products/").concat(product.image, ".webp\" type=\"image/webp\"><img src=\"img/products/").concat(product.image, ".jpg\" alt=\"").concat(product.name, "\"></picture>\n               </a>\n               <div class=\"item-product__description description-product\">\n               <h5 class=\"description-product__tittle\">").concat(product.name, "</h5>\n               <div class=\"description-product__text\">").concat(product.description, "</div>\n               <div class=\"description-product__price price-product\">\n               <div class=\"price-product__current\">").concat(product.price, "</div>\n               <div class=\"price-product__old\">").concat(product.oldPrice, "</div>\n               </div>\n               </div>");

          if (product.label) {
            productCard += "<div class=\"item-product__label label-product\">";
            product.label.forEach(function (item) {
              productCard += "<div class=\"label-product__".concat(item.type, " active\">").concat(item.value, "</div>");
            });
            productCard += '</div>';
          }

          productCard += "<div class=\"item-product__hover hover-product\">\n            <div class=\"hover-product__actions\">\n               <div class=\"hover-product__btn\">Add to cart</div>\n               <div class=\"hover-product__social\">\n                  <a data-popup-id=\"linkPopup\" href=\"".concat(product.shareUrl, "\" class=\"hover-product__share link-on-popup _icon-share\">Share</a>\n                  <a data-popup-id=\"linkPopup\" href=\"").concat(product.likeUrl, "\" class=\"hover-product__like link-on-popup _icon-favorite\">Like</a>\n               </div>\n            </div>\n            <a data-popup-id=\"linkPopup\" href=\"").concat(product.linkUrl, "\" class=\"hover-product__look link-on-popup\">\n               <p>Learn more</p>\n               <div class=\"_icon-arrow-link\"></div>\n            </a>\n         </div>\n      </div>");
          productsBlock.insertAdjacentHTML('beforeend', productCard);

          if (data.products.length == product.id) {
            loadMoreBtn.remove();
          }
        }
      });
      linksPopup = document.querySelectorAll('.link-on-popup');
      popupLinkClick();
    }
    /*===================================================КОРЗИНА===================================================*/


    var cart = document.querySelector('.cart-header');
    var cartBtn = document.querySelector('.cart-header__icon');
    var cartList = document.querySelector('.cart-list'); //Открытие корзины

    cartBtn.addEventListener('click', function (e) {
      if (cartList.querySelectorAll('.cart-list__item').length > 0) {
        cartList.classList.toggle('active');
      }

      e.preventDefault();
    }); // Добавление товара в корзину

    function addToCart(productBtn, productId) {
      if (!productBtn.classList.contains('_hold')) {
        productBtn.classList.add('_hold');
      }

      var product = document.querySelector(".item-product[data-id=\"".concat(productId, "\"]"));
      var productImg = product.querySelector('.item-product__img');
      var productImgFly = productImg.cloneNode(true);
      productImgFly.classList.add('_fly');
      var productImgHieght = productImg.offsetHeight;
      var productImgWidth = productImg.offsetWidth;
      var productImgTop = productImg.getBoundingClientRect().top;
      var productImgLeft = productImg.getBoundingClientRect().left;
      productImgFly.style.cssText = "\n      left: ".concat(productImgLeft, "px;\n      top: ").concat(productImgTop, "px;\n      width: ").concat(productImgWidth, "px;\n      height: ").concat(productImgHieght, "px;\n      ");
      document.body.append(productImgFly);
      var cartFlyLeft = cart.getBoundingClientRect().left;
      var cartFlyTop = cart.getBoundingClientRect().top;
      productImgFly.style.cssText = "\n      left: ".concat(cartFlyLeft, "px;\n      top: ").concat(cartFlyTop, "px;\n      width: 0px;\n      height: 0px;\n      opacity: 0;");
      setTimeout(function () {
        productImgFly.remove();
        updateCart(productBtn, productId);
      }, 500);
    }

    function updateCart(productBtn, productId) {
      var productAdd = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
      var cartIcon = document.querySelector('.cart-header__icon');
      var cartQuantity = cartIcon.querySelector('span');
      var cartProduct = document.querySelector("[data-cart-id=\"".concat(productId, "\"]"));

      if (productAdd) {
        if (cartQuantity) {
          cartQuantity.innerHTML = ++cartQuantity.innerHTML;
        } else {
          cartIcon.insertAdjacentHTML('beforeend', "<span>1</span>");
        }

        getPrice(cartProduct, productId, productBtn);
      } else {
        if (!(cartQuantity.innerHTML == 1 || 0)) {
          cartQuantity.innerHTML = --cartQuantity.innerHTML;
        } else {
          cartQuantity.remove();
        }

        getPrice(cartProduct, productId, productBtn, false);
      }
    }

    function makeOrder(productBtn) {
      if (document.querySelectorAll('.ordered-table-popup__item').length > 0) {
        document.querySelectorAll('.ordered-table-popup__item').forEach(function (item) {
          item.remove();
        });
        document.querySelector('.ordered-table-popup__total').remove();
        ;
      }

      var cartProducts = cartList.querySelectorAll('.cart-list__item');
      var cartPopup = document.getElementById('cartPopup');
      var popupTable = cartPopup.querySelector('.popup__table');
      var productsId = [];
      cartProducts.forEach(function (item) {
        productsId.push(item.dataset.cartId);
      });
      var totalPrice = 0;
      var prices = getPrice(cartProducts, productsId, productBtn, true, true);
      prices.then(function (data) {
        for (var i = 0; i < data.length; i++) {
          var price = +data[i];
          var cartProductImg = cartProducts[i].querySelector('.cart-list__img picture').innerHTML;
          var productName = cartProducts[i].querySelector('.cart-list__name').innerHTML;
          var productQuantity = cartProducts[i].querySelector('.cart-list__quantity span').innerHTML;
          var totalProductPrice = price * productQuantity;
          totalPrice += +totalProductPrice;
          popupTable.insertAdjacentHTML('beforeend', "<div class=\"ordered-table-popup__item\">\n            <div class=\"ordered-table-popup__img\"><div class=\"ordered-table-popup__name\">".concat(productName, "</div>").concat(cartProductImg, "</div>\n            <div class=\"ordered-table-popup__price\">").concat(price.toLocaleString('de-DE', {
            style: 'currency',
            currency: 'EUR',
            maximumFractionDigits: 0
          }), "</div>\n            <div class=\"ordered-table-popup__quantity\">").concat(productQuantity, "</div>\n            <div class=\"ordered-table-popup__total-product-price\">").concat(totalProductPrice, "</div>\n         </div>"));

          if (i == data.length - 1) {
            popupTable.insertAdjacentHTML('beforeend', "<div class=\"ordered-table-popup__total\">Total: ".concat(totalPrice.toLocaleString('de-DE', {
              style: 'currency',
              currency: 'EUR',
              currencyDisplay: 'name',
              maximumFractionDigits: 0
            }), "</div>"));
          }

          cartProducts[i].remove();
        }
      });
      removeCart();
      popUp(productBtn.dataset.popupId);
    }

    function getPrice(_x2, _x3, _x4) {
      return _getPrice.apply(this, arguments);
    }

    function _getPrice() {
      _getPrice = _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2(cartProduct, productId, productBtn) {
        var productAdd,
            makeOrder,
            file,
            responce,
            result,
            prices,
            cartProductPrice,
            productsInCart,
            currentPrices,
            _args2 = arguments;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                productAdd = _args2.length > 3 && _args2[3] !== undefined ? _args2[3] : true;
                makeOrder = _args2.length > 4 && _args2[4] !== undefined ? _args2[4] : false;
                file = "https://artgas.pro/json/furino/products.json";
                _context2.next = 5;
                return fetch(file, {
                  method: 'GET'
                });

              case 5:
                responce = _context2.sent;

                if (!responce.ok) {
                  _context2.next = 23;
                  break;
                }

                _context2.next = 9;
                return responce.json();

              case 9:
                result = _context2.sent;

                if (!makeOrder) {
                  _context2.next = 14;
                  break;
                }

                prices = [];
                productId.forEach(function (item) {
                  var price = result.products.find(function (product) {
                    return product.id == item;
                  }).price;
                  prices.push(price.slice(3).replace('.', '').trim());
                });
                return _context2.abrupt("return", prices);

              case 14:
                //Отправка данных о цене при добавлении / удалении товара в корзину
                cartProductPrice = result.products.find(function (item) {
                  return item.id == productId;
                }).price;
                cartProductPrice = cartProductPrice.slice(3).replace('.', ''); // const cartList = document.querySelector('.cart-header__header-list');

                if (productAdd) {
                  addPriceToCart(+cartProductPrice, cartProduct, productId, productBtn, cartList);
                } else {
                  removePriceFromCart(+cartProductPrice, cartProduct, productBtn, cartList);
                }

                productsInCart = cartList.querySelectorAll('.cart-list__item');
                currentPrices = [];
                productsInCart.forEach(function (item) {
                  var price = result.products.find(function (product) {
                    return product.id == item.dataset.cartId;
                  }).price;
                  price = price.slice(3).replace('.', '').trim();
                  currentPrices.push(price);
                });
                makeTotalPrice(cartList, currentPrices);
                _context2.next = 24;
                break;

              case 23:
                alert('Ошибка загрузки цени товара');

              case 24:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2);
      }));
      return _getPrice.apply(this, arguments);
    }

    function addPriceToCart(cartProductPrice, cartProduct, productId, productBtn, cartList) {
      var product = document.querySelector("[data-id=\"".concat(productId, "\"]"));
      var cartProductImg = product.querySelector('.item-product__img').innerHTML;
      var cartPproductName = product.querySelector('.description-product__tittle').innerHTML;

      if (!cartProduct) {
        var cartProductContent = "\n\n<a data-popup-id=\"linkPopup\" href=\"#\" class=\"cart-list__img link-on-popup\">".concat(cartProductImg, "<div class=\"cart-list__price-item\">").concat(cartProductPrice.toLocaleString('de-DE', {
          style: 'currency',
          currency: 'EUR',
          maximumFractionDigits: 0
        }), "</div></a>\n\n\n<div class=\"cart-list__body\">\n   <a data-popup-id=\"linkPopup\" href=\"#\" class=\"cart-list__name link-on-popup\">").concat(cartPproductName, "</a>\n   <div class=\"cart-list__quantity\"><div class=\"cart-list__price\">").concat(cartProductPrice.toLocaleString('de-DE', {
          style: 'currency',
          currency: 'EUR',
          maximumFractionDigits: 0
        }), "</div><button class=\"cart-list__btn-plus\">+</button><span> 1 </span><button class=\"cart-list__btn-minus\">-</button></div>\n   <a href=\"#\" class=\"cart-list__delete\">Delete</a>\n</div>");
        cartList.insertAdjacentHTML('beforeend', "<li data-cart-id=\"".concat(productId, "\" class=\"cart-list__item\" \">").concat(cartProductContent, "</li>"));
      } else {
        cartProduct.querySelector('.cart-list__quantity span').innerHTML++;
        var sum = +cartProductPrice * +cartProduct.querySelector('.cart-list__quantity span').innerHTML;
        cartProduct.querySelector('.cart-list__price').innerHTML = sum.toLocaleString('de-DE', {
          style: 'currency',
          currency: 'EUR',
          maximumFractionDigits: 0
        });
      }

      productBtn.classList.remove('_hold');
      linksPopup = document.querySelectorAll('.link-on-popup');
      popupLinkClick();
    }

    function removePriceFromCart(cartProductPrice, cartProduct, productBtn, cartList) {
      cartProduct.querySelector('.cart-list__quantity span').innerHTML--;
      var sum = +cartProductPrice * +cartProduct.querySelector('.cart-list__quantity span').innerHTML;
      cartProduct.querySelector('.cart-list__price').innerHTML = sum.toLocaleString('de-DE', {
        style: 'currency',
        currency: 'EUR',
        maximumFractionDigits: 0
      });

      if (cartProduct.querySelector('.cart-list__quantity span').innerHTML == 0) {
        cartList.removeChild(cartProduct);
      }

      productBtn.classList.remove('_hold');
    }

    function deleteFromCart(productBtn, productId) {
      var currentProduct = productBtn.closest('.cart-list__item');
      var currentProductQuantityBlock = currentProduct.querySelector('.cart-list__quantity span');
      var allProductsQuantityBlock = document.querySelector('.cart-header__icon span');
      var currentProductQuantity = currentProductQuantityBlock.innerHTML;
      var allProductsQuantity = allProductsQuantityBlock.innerHTML;
      var сalculationQuantityProducts = allProductsQuantity - currentProductQuantity;
      currentProductQuantityBlock.innerHTML = 1;
      allProductsQuantityBlock.innerHTML = сalculationQuantityProducts + 1;
      updateCart(productBtn, productId, false);
    }

    function makeTotalPrice(cartList, currentPrices) {
      var totalPrice = 0;

      for (var i = 0; i < currentPrices.length; i++) {
        var totalPriceItem = +currentPrices[i] * +cartList.querySelectorAll('.cart-list__quantity span')[i].innerHTML;
        totalPrice += totalPriceItem;
      }

      if (!totalPrice) {
        if (document.querySelector('.cart-list__total-price')) {
          document.querySelector('.cart-list__total-price').remove();
          document.querySelector('.cart-list__make-order').remove();
        }

        cartList.insertAdjacentHTML('beforeend', "<div class=\"cart-list__total-price\">Total: <span>".concat(totalPrice.toLocaleString('de-DE', {
          style: 'currency',
          currency: 'EUR',
          currencyDisplay: "name",
          maximumFractionDigits: 0
        }), "</span></div><div class=\"cart-list__make-order\"><button data-popup-id=\"cartPopup\" class=\"cart-list__make-order-btn\">Make order</button></div>"));

        if (cartList.querySelectorAll('.cart-list__item').length == 0) {
          removeCart();
        }
      } else {
        if (document.querySelector('.cart-list__total-price')) {
          document.querySelector('.cart-list__total-price').remove();
          document.querySelector('.cart-list__make-order').remove();
        }

        cartList.insertAdjacentHTML('beforeend', "<div class=\"cart-list__total-price\">Total: <span>".concat(totalPrice.toLocaleString('de-DE', {
          style: 'currency',
          currency: 'EUR',
          currencyDisplay: "name",
          maximumFractionDigits: 0
        }), "</span></div><div class=\"cart-list__make-order\"><button data-popup-id=\"cartPopup\" class=\"cart-list__make-order-btn\">Make order</button></div>"));
      }
    }

    function removeCart() {
      document.querySelector('.cart-list__total-price').remove();
      document.querySelector('.cart-list__make-order').remove();
      cartList.classList.remove('active');

      if (cartList.previousElementSibling.querySelector('span')) {
        cartList.previousElementSibling.querySelector('span').remove();
      }
    }
    /*===================================================КОРЗИНА===================================================*/
    //Gallery furniture


    var gallery = document.querySelector('.gallery-furniture');

    if (gallery) {
      lightgallery_es5(gallery, {
        selector: '.gallery-furniture__img'
      });
    }

    if (gallery && window.matchMedia && window.matchMedia("(pointer: fine)").matches) {
      var setMouseGalleryStyle = function setMouseGalleryStyle() {
        var galleryRowsWidth = 0;
        galeryRows.forEach(function (row) {
          galleryRowsWidth += row.offsetWidth;
        });
        var galleryDifferent = galleryRowsWidth - galeryBody.offsetWidth;
        var distX = Math.floor(coordXprocent - positionX);
        positionX = positionX + distX * speed;
        var position = galleryDifferent / 200 * positionX;
        galeryBody.style.cssText = "transform: translate3d(".concat(-position, "px, 0, 0);");

        if (Math.abs(distX) > 0) {
          requestAnimationFrame(setMouseGalleryStyle);
        } else {
          galeryBody.classList.remove('_init');
        }
      };

      var galeryBody = gallery.querySelector('.gallery-furniture__body');
      var galeryRows = gallery.querySelectorAll('.gallery-furniture__row'); //Скорость

      var speed = galeryBody.dataset.speed; //Переменные

      var positionX = 0;
      var coordXprocent = 0;
      galeryBody.addEventListener('mousemove', function (e) {
        //Получение ширины
        var galeryBodyWidth = galeryBody.offsetWidth; //Ноль по середине

        var coordX = e.pageX - galeryBodyWidth / 2; //Получаем проценты

        coordXprocent = coordX / galeryBodyWidth * 200;

        if (!galeryBody.classList.contains('_init')) {
          requestAnimationFrame(setMouseGalleryStyle);
          galeryBody.classList.add('_init');
        }
      });
      galeryBody.addEventListener('mouseleave', function (e) {
        //Получение ширины
        var galeryBodyWidth = galeryBody.offsetWidth; //Ноль по середине

        var coordX = galeryBodyWidth / 2; //Получаем проценты

        coordXprocent = -(coordX / galeryBodyWidth);
        requestAnimationFrame(setMouseGalleryStyle);
        galeryBody.classList.remove('_init');
      });
    }
  };
  /******/

})();
})();

/******/ })()
;