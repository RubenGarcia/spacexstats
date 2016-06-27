import {Injectable} from '@angular/core';
import {Http, Response} from '@angular/http';
import {Observable} from 'rxjs/Observable';

@Injectable()
export class LiveHttpService {

    constructor(private http: Http) {}

    private liveUrl = 'live/';

    fetch() : Observable<any> {
        return this.http.get(this.liveUrl + 'fetch')
            .map((response: Response) => response.json().data);
    }

    postUpdate() {

    }

    startEditingUpdate() {

    }

    finishEditingUpdate() {

    }

    editUpdate() {

    }

    deleteUpdate() {

    }

    pauseCountdown() {

    }

    resumeCountdown() {

    }

    editCountdown() {

    }

    updateDetails() {

    }

    updateResources() {

    }

    updateTemplates() {

    }

    updateWeather() {

    }

    startLive() {

    }

    finishLive() {

    }
}