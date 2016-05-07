import {Component} from '@angular/core';
import {CountdownComponent} from './countdown.component';
import {StreamsComponent, StatusComponent, UpdatesComponent} from './live/core';

@Component({
    selector: 'live',
    templateUrl: 'js/angular2/templates/live.component.html',
    directives: [CountdownComponent, StreamsComponent, StatusComponent, UpdatesComponent]
})
export class LiveComponent {

}