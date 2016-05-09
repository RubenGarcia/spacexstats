"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var http_1 = require('@angular/http');
var countdown_component_1 = require('./countdown.component');
var core_2 = require('./live/core');
var LiveHttpService_1 = require('../services/LiveHttpService');
var LiveComponent = (function () {
    function LiveComponent(liveHttpService) {
        this.liveHttpService = liveHttpService;
    }
    LiveComponent.prototype.ngOnInit = function () {
        var _this = this;
        // Fetch
        this.liveHttpService.fetch().subscribe(function (data) {
            _this.isLive = false;
        });
    };
    LiveComponent = __decorate([
        core_1.Component({
            selector: 'live',
            templateUrl: 'js/angular2/templates/live.component.html',
            directives: [countdown_component_1.CountdownComponent, core_2.StreamsComponent, core_2.StatusComponent, core_2.UpdatesComponent],
            providers: [http_1.HTTP_PROVIDERS, LiveHttpService_1.LiveHttpService]
        }), 
        __metadata('design:paramtypes', [LiveHttpService_1.LiveHttpService])
    ], LiveComponent);
    return LiveComponent;
}());
exports.LiveComponent = LiveComponent;
