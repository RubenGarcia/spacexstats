import {Component, OnInit} from '@angular/core';
import {HTTP_PROVIDERS} from '@angular/http';

import {CountdownComponent} from './countdown.component';
import {StreamsComponent, StatusComponent, UpdatesComponent} from './live/core';
import {LiveHttpService} from '../services/LiveHttpService';

@Component({
    selector: 'live',
    templateUrl: 'js/angular2/templates/live.component.html',
    directives: [CountdownComponent, StreamsComponent, StatusComponent, UpdatesComponent],
    providers: [HTTP_PROVIDERS, LiveHttpService]
})

/**
 * The encapsulating component of SpaceX Stats Live
 * @class
 */
export class LiveComponent implements OnInit {
    private isLive : boolean;

    constructor(private liveHttpService: LiveHttpService) {
    }

    ngOnInit() {
        // Fetch
        this.liveHttpService.fetch().subscribe(data => {
            this.isLive = false;
        });
    }
}