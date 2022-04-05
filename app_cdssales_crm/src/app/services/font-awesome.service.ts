import { Injectable } from '@angular/core';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { faDoorOpen } from '@fortawesome/free-solid-svg-icons';

@Injectable({
  providedIn: 'root'
})
export class FontAwesomeService {

  faDoorOpen: any;

  constructor() { 
    this.faDoorOpen = faDoorOpen;
  }

}
