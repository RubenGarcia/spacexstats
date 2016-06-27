import {Component, OnInit} from '@angular/core';

import {CountdownComponent} from './countdown.component';
import {StreamsComponent, StatusComponent, UpdatesComponent} from './live/core';
import {LiveHttpService} from '../services/LiveHttpService';
import {Mission} from '../classes/Mission';

@Component({
    selector: 'live',
    templateUrl: '/angular2/templates/live.component.html',
    directives: [CountdownComponent, StreamsComponent, StatusComponent, UpdatesComponent],
    providers: [LiveHttpService]
})

/**
 * The encapsulating component of SpaceX Stats Live
 * @class
 */
export class LiveComponent implements OnInit {
    private isLive : boolean;
    private isAuthenticated: boolean;
    private nextMission: Mission;

    constructor(private liveHttpService: LiveHttpService) {
    }

    ngOnInit() {
        // Fetch
        this.liveHttpService.fetch().subscribe(data => {
            this.isLive = data.isLive;
            this.isAuthenticated = data.isAuthenticated;
        });
    }
}