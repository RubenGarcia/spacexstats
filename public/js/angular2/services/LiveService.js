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
var LiveService = (function () {
    function LiveService(http) {
        this.http = http;
        this.liveUrl = 'live/';
    }
    LiveService.prototype.fetch = function () {
        return this.http.get(this.liveUrl + 'fetch')
            .map(function (response) { return response.json().data; });
    };
    LiveService.prototype.postUpdate = function () {
    };
    LiveService.prototype.startEditingUpdate = function () {
    };
    LiveService.prototype.finishEditingUpdate = function () {
    };
    LiveService.prototype.editUpdate = function () {
    };
    LiveService.prototype.deleteUpdate = function () {
    };
    LiveService.prototype.pauseCountdown = function () {
    };
    LiveService.prototype.resumeCountdown = function () {
    };
    LiveService.prototype.editCountdown = function () {
    };
    LiveService.prototype.updateDetails = function () {
    };
    LiveService.prototype.updateResources = function () {
    };
    LiveService.prototype.updateTemplates = function () {
    };
    LiveService.prototype.updateWeather = function () {
    };
    LiveService.prototype.startLive = function () {
    };
    LiveService.prototype.finishLive = function () {
    };
    LiveService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], LiveService);
    return LiveService;
}());
exports.LiveService = LiveService;
