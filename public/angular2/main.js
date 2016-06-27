"use strict";
///<reference path="../../../typings/index.d.ts" />
var platform_browser_dynamic_1 = require('@angular/platform-browser-dynamic');
require('rxjs/Rx');
var http_1 = require('@angular/http');
var live_component_1 = require('./components/live.component');
//enableProdMode();
platform_browser_dynamic_1.bootstrap(live_component_1.LiveComponent, [http_1.HTTP_PROVIDERS]);
