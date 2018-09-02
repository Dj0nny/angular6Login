import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';


interface Data {
    message: string,
    success: boolean
}

interface isLoggedIn {
    status: boolean
}

@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(private http: HttpClient) { }

  getData() {
      return this.http.get<Data>('/api/database.php');
  }

  isLoggedIn(): Observable<isLoggedIn> {
      return this.http.get<isLoggedIn>('/api/isLoggedIn.php');
  }
}
