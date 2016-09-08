/**
 * Criado por Márcio Lucas on 12/08/2016.
 * - marciioluucas@gmail.com
 */
import {Injectable} from '@angular/core';
import {Http, Response} from '@angular/http';
import 'rxjs/add/operator/map';


@Injectable()
export class HttpService {

  constructor(private http: Http) {
  }

  getJSON(url:string) {
    try {
      return this.http.get(url)
        .map((res: Response) => res.json())


    } catch (Erro){
      alert('Erro na requisição HTTP ' + Erro.message)
    }
  }

  postJSON() {

  }

}
