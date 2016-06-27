///<reference path="../../../typings/index.d.ts" />
import {bootstrap} from '@angular/platform-browser-dynamic';
import 'rxjs/Rx';
import {enableProdMode} from '@angular/core';
import {HTTP_PROVIDERS} from '@angular/http';
import {LiveComponent} from './components/live.component';

//enableProdMode();
bootstrap(LiveComponent, [HTTP_PROVIDERS]);