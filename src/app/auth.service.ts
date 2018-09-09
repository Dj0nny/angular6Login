import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'

interface Data {
    success: boolean,
    message: string
}

@Injectable({
  providedIn: 'root'
})
export class AuthService {

    //private loggedInStatus = JSON.parse(localStorage.getItem('loggedIn') || 'false');

    private loggedInStatus = false;

    constructor(private http: HttpClient) { }

    setLoggedIn(value: boolean) {
        this.loggedInStatus = value;
        this.loggedInStatus = value;
    }

    get isLoggedIn() {
        return this.loggedInStatus;
    }

    getUserDetails(username, password) {
     return this.http.post<Data>('/api/auth.php', {
          username,
          password
      });
    }

}
