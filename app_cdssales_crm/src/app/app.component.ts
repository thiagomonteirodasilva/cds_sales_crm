import { Component } from '@angular/core';
import { NgForm } from '@angular/forms';
import { ApiUrlService } from './services/api-url.service';
import { FontAwesomeService } from './services/font-awesome.service';


//import 'rxjs/add/operator/toPromise';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'TMS, the CDs Stock CRM';
  objectJSON = {

  }

  constructor(private apiService: ApiUrlService,
    public fontAwesome: FontAwesomeService){
    
  }

  login(form: NgForm){
    if(!form.value.email){
      return window.alert('Please insert an e-mail!');
    } else if(!form.value.password){
      return window.alert('Please insert a password')
    } else {
      return this.apiService.apiPost('login', form.value);
    }
  }
}
