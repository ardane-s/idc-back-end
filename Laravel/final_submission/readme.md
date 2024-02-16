# API Documentation
## 💁‍♀️ Allowed HTTP request
- GET : To GET data from the API
- POST    : To send POST request to the API (Create data)
- PUT     : To send PUT request to the API (Update data)
- DELETE  : To delete data on the API 
## 📝 Description Of Usual Server Responses
- 200 `OK` - Request was successful
- 404 `Not Found` - Requested data was not found
- 405 `Method Not Allowed` - 
## 📚 Drugs Attributes
- id `BIGINT` : Unique identifier (Primary Key)
- name `varchar` : Drug name
- description `varchar` : Drug description
- supplier_id `BIGINT` : Supplier id (Foreign Key)
## ✍ Suppliers Attributes
- id `BIGINT` : Unique identifier ( Primary Key )
- name `varchar` : Supplier name
- address `varchar` : Supplier address
## ✍ Sales Attributes
- id `BIGINT` : Unique identifier ( Primary Key )
- drug_id `BIGINT` : Drug id
- quantity `int` : Drag quantity
- total_price `decimal` Drug total price
## 🔖 GET Method Example
### Getting all data
#### Drug URL : 
```
http://localhost:8000/api/drugs
```
#### Result Examples :
```json
[
    {
        "drug": {
            "id": 101,
            "name": "commodi",
            "description": "Aut quis dolorem id et.",
            "supplier_id": 451,
            "created_at": "2024-02-16T03:33:42.000000Z",
            "updated_at": "2024-02-16T03:33:42.000000Z"
        }
    },
    {
    "drug": {
            "id": 102,
            "name": "labore",
            "description": "Quia dolores aut et quod tempora fugiat ut.",
            "supplier_id": 217,
            "created_at": "2024-02-16T03:33:42.000000Z",
            "updated_at": "2024-02-16T03:33:42.000000Z"
        }
    },
    {
    "drug": {
            "id": 103,
            "name": "asperiores",
            "description": "Pariatur vero quis dolor consequuntur.",
            "supplier_id": 245,
            "created_at": "2024-02-16T03:33:42.000000Z",
            "updated_at": "2024-02-16T03:33:42.000000Z"
        }
    }
]
```
#### Supplier URL : 
```
http://localhost:8000/api/suppliers
```
#### Result Examples :
```json
[
    {
        "supplier": {
            "id": 101,
            "name": "Veum-Senger",
            "address": "98259 Mohr Brooks\nGutkowskifurt, RI 75542",
            "created_at": "2024-02-16T03:33:39.000000Z",
            "updated_at": "2024-02-16T03:33:39.000000Z"
        }
    },
    {
    "supplier": {
            "id": 102,
            "name": "Sporer, Kertzmann and Okuneva",
            "address": "73427 Gulgowski Motorway Apt. 977\nSouth Sidney, HI 17170",
            "created_at": "2024-02-16T03:33:39.000000Z",
            "updated_at": "2024-02-16T03:33:39.000000Z"
        }
    },
    {
    "supplier": {
            "id": 103,
            "name": "Quigley, Kub and Beatty",
            "address": "794 Warren Pike\nMaybelleview, WI 10060-8963",
            "created_at": "2024-02-16T03:33:39.000000Z",
            "updated_at": "2024-02-16T03:33:39.000000Z"
        }
    }
]
```
#### Sales URL : 
```
http://localhost:8000/api/sales
```
#### Result Examples :
```json
[
    {
        "sales": {
            "id": 101,
            "drug_id": 375,
            "quantity": 83,
            "total_price": "333.94",
            "created_at": "2024-02-16T03:33:49.000000Z",
            "updated_at": "2024-02-16T03:33:49.000000Z"
        }
    },
    {
    "sales": {
            "id": 102,
            "drug_id": 212,
            "quantity": 71,
            "total_price": "77.67",
            "created_at": "2024-02-16T03:33:49.000000Z",
            "updated_at": "2024-02-16T03:33:49.000000Z"
        }
    },
    {
    "sales": {
            "id": 103,
            "drug_id": 135,
            "quantity": 62,
            "total_price": "384.76",
            "created_at": "2024-02-16T03:33:49.000000Z",
            "updated_at": "2024-02-16T03:33:49.000000Z"
        }
    }
]
```
### Getting a specific book data based on ID
#### Drug URL : 
```
http://localhost:8000/api/drugs/{id}
```
#### Result Examples :
```json
{
    "id": 1,
    "name": "exercitationem",
    "description": "Velit optio quam doloremque corporis tenetur voluptas.",
    "supplier_id": 288,
    "created_at": "2024-02-16T03:33:42.000000Z",
    "updated_at": "2024-02-16T03:33:42.000000Z"
}
```
#### Supplier URL : 
```
http://localhost:8000/api/suppliers/{id}
```
#### Result Examples :
```json
{
    "id": 1,
    "name": "Anderson PLC",
    "address": "60561 Hyatt Field Suite 892\nAlexanderbury, WY 85932",
    "created_at": "2024-02-16T03:33:39.000000Z",
    "updated_at": "2024-02-16T03:33:39.000000Z"
}
```
#### Sales URL : 
```
http://localhost:8000/api/sales/{id}
```
#### Result Examples :
```json
{
    "id": 1,
    "drug_id": 484,
    "quantity": 19,
    "total_price": "361.76",
    "created_at": "2024-02-16T03:33:49.000000Z",
    "updated_at": "2024-02-16T03:33:49.000000Z"
}
```
## 🧾 POST Method Example
### Drug Example
#### URL :
```
http://localhost:8000/api/drugs
```
#### Body :
```json
{
    "name": "Deena",
    "description": "Morphine.",
    "supplier_id": 100
}
```
### Supplier Example
#### URL :
```
http://localhost:8000/api/suppliers
```
#### Body :
```json
{
    "name": "Saveera Corporation",
    "address": "Wellington Okhlahoma"
}
```
### Sales Example
#### URL :
```
http://localhost:8000/api/sales
```
#### Body :
```json
{
    "drug_id": 501,
    "quantity": 20,
    "total_price": "500,00"
}
```
## ✍ PUT Method Example
### Drug Example
#### URL :
```
http://localhost:8000/api/drugs/{id}
```
#### Body :
```json
{
    "name": "Deena",
    "description": "Morphine.",
    "supplier_id": 100
}
```
### Suppliers Example
#### URL :
```
http://localhost:8000/api/suppiers/{id}
```
#### Body :
```json
{
    "name": "Saveera Corporation",
    "address": "Wellington Okhlahoma"
}
```
### Sales Example
#### URL :
```
http://localhost:8000/api/sales/{id}
```
#### Body :
```json
{
    "drug_id": 501,
    "quantity": 20,
    "total_price": "500,00"
}
```
## ❌ DELETE Method Example
### Drug
#### URL :
```
http://localhost:8000/api/drugs/{id}
```
### Suppliers
#### URL :
```
http://localhost:8000/api/suppliers/{id}
```
### Sales
#### URL :
```
http://localhost:8000/api/sales/{id}
```
## 🤯 Entity Relational Diagram ( ERD )
![image](https://github.com/urfavteddybear/Final-Submission-IDC/assets/97431620/0aa2de4c-7850-4ba9-8295-a64bd821a837)