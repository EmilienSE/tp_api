#  DOC DE L'API DE EMILIEN ET LOUIS

## Categories

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /categories   | GET |  | 200: ``` [ { "id": 1, "nom": "action"}, {..} ] ``` |
| /categories   | POST      |   *required* body ``` {"nom": "Titre"} ``` | 201: ``` { "id": 1, "nom": "action"}``` |
| /categories/{id}   | GET      |     | 200: ``` { "id": 1, "nom": "action"}``` |
| /categories/{id}   | DELETE      |     | 200 ``` {} ``` |
| /categories/{id}   | PUT      |  *required* body ``` {"nom": "Titre"} ```   | 200: ``` { "id": 1, "nom": "action"}``` |

## Films

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /films   | GET |  | 200: ``` [ { "id": 1, "titre": "oss 117", "annee": "2006", "poster": "18/01/2019", "synopsis": "un truc"}, {..} ] ``` |
| /films   | POST      |   *required* body ``` {"titre": "titre", "annee": "annee", "poster": "18/01/2019", "synopsis": "synopsis" } ``` | 201: ``` { "id": 1, "titre": "oss 117","annee": "2006", "poster": "18/01/2019", "synopsis": "un truc", "categories": [ {"id": 1, "titre": "Titre de la categorie"}]} ``` |
| /films/{id}   | GET      |     | 200: ``` { "id": 1, "titre": "oss 117", "annee": "2006", "poster": "18/01/2019", "synopsis": "un truc" , "categories": [ {"id": 1, "titre": "Titre de la categorie"}], , "acteurs": [ {"id": 1, "nom": "Nom", , "prenom": "Prenom"}] } ``` |
| /films/{id}   | DELETE      |     | 200 ``` {} ``` |
| /films/{id}   | PUT      |  *required* body ``` {"titre": "oss 117", "annee": "2006", "poster": "18/01/2019", "synopsis": "un truc"} ```   | 200: ``` { "id": 1, "titre": "titre changer", "annee": "14/02/1993", "synopsis": "testest"}``` |

## Acteurs

| URI        | Method           | Params  | Response |
| ---------- |:-------------:| -----:| --- |
| /acteurs   | GET |  | 200: ``` [ { "id": 1, "nom": "Nom", "prenom": "Prenom", film: { "id": 1, "name": "oss 117",  "annee": "2006", "poster": "18/01/2019", "synopsis": "un truc"}, {..} ] ``` |
| /acteurs   | POST      |   *required* body ``` {"nom": "Nom", "prenom": "Prenom", "film": 1, "categorie": 1  } ``` | 201: ``` { "id": 1, "nom": "Nom", "prenom": " Prenom", film: { "id": 1, "name": "oss 117",  "annee": "2006", "poster": "18/01/2019", "synopsis": "un truc"} }``` | 200: ``` { "id": 1, "nom": "Nom", "prenom": "Prenom", film: { "id": 1, "name": "oss 117",  "annee": "2006", "poster": "18/01/2019", "synopsis": "un truc"} }``` |
| /acteurs/{id}   | GET      |     | 200: ``` { "id": 1, "nom": "Nom", "prenom": "Prenom", film: { "id": 1, "name": "oss 117",  "annee": "2006", "poster": "18/01/2019", "synopsis": "un truc"} }``` |
| /acteurs/{id}   | DELETE      |     | 200 ``` {} ``` |
| /acteurs/{id}   | PUT      |  *required* body ``` {"nom": "Nom", "prenom": "Prenom", "film": 1, "categorie": 1  } ```   | 200: ``` { "id": 1, "nom": "Nom", "prenom": "Prenom", "film": 1}``` |


