import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http/';

interface Data {
    message: string,
    success: boolean
}

@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(private http: HttpClient) { }

  getData() {
      return this.http.get<Data>('/api/database.php');
  }
}
