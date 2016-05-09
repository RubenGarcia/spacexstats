import {Component} from '@angular/core';
import {Mission} from '../../classes/Mission';

@Component({
    selector: 'streams',
    templateUrl: 'js/angular2/templates/streams.component.html'
})
export class StreamsComponent {

}

@Component({
    selector: 'status',
    templateUrl: 'js/angular2/templates/status.component.html'
})
export class StatusComponent {

}

@Component({
    selector: 'updates',
    templateUrl: 'js/angular2/templates/updates.component.html'
})
export class UpdatesComponent {
    private nextMission : Mission;
}

@Component({
    selector: 'resource',
    templateUrl: 'js/angular2/templates/resource.component.html'
})
export class ResourceComponent {

}

@Component({
    selector: 'update',
    templateUrl: 'js/angular2/templates/update.component.html'
})
export class UpdateComponent {

}