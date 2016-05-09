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
var LiveHttpService = (function () {
    function LiveHttpService(http) {
        this.http = http;
        this.liveUrl = 'live/';
    }
    LiveHttpService.prototype.fetch = function () {
        return this.http.get(this.liveUrl + 'fetch')
            .map(function (response) { return response.json().data; });
    };
    LiveHttpService.prototype.postUpdate = function () {
    };
    LiveHttpService.prototype.startEditingUpdate = function () {
    };
    LiveHttpService.prototype.finishEditingUpdate = function () {
    };
    LiveHttpService.prototype.editUpdate = function () {
    };
    LiveHttpService.prototype.deleteUpdate = function () {
    };
    LiveHttpService.prototype.pauseCountdown = function () {
    };
    LiveHttpService.prototype.resumeCountdown = function () {
    };
    LiveHttpService.prototype.editCountdown = function () {
    };
    LiveHttpService.prototype.updateDetails = function () {
    };
    LiveHttpService.prototype.updateResources = function () {
    };
    LiveHttpService.prototype.updateTemplates = function () {
    };
    LiveHttpService.prototype.updateWeather = function () {
    };
    LiveHttpService.prototype.startLive = function () {
    };
    LiveHttpService.prototype.finishLive = function () {
    };
    LiveHttpService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], LiveHttpService);
    return LiveHttpService;
}());
exports.LiveHttpService = LiveHttpService;
