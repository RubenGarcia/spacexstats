import {Component, Input} from '@angular/core';
import {LaunchSpecificity} from "../enums/LaunchSpecificity";

@Component({
    selector: 'countdown',
    templateUrl: '/angular2/templates/countdown.component.html'
})
export class CountdownComponent {
    @Input() countdown: Date;
    @Input() specificity: LaunchSpecificity;
    @Input() type: string;
    @Input() isPaused: boolean;
    @Input() isVisibleWhenPaused: boolean;
    @Input() callback: Function;
}