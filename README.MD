# AlbuAves v0.2

**AlbuAves** es un pequeño *pet-project* diseñado como ejercicio educativo para introducir al alumnado en todos los componentes implicados en una solución software basada en la arquitectura **Cliente–Servidor**.

El proyecto combina:

- Una **base de datos SQLite** con información de 10 especies de aves.
- Un **servidor PHP** que expone una API REST sencilla.
- Dos **clientes Java**, uno para obtener la lista de aves y otro para buscar aves mediante la API.
- Un conjunto de **imágenes** asociadas a cada ave.

Su objetivo es ofrecer una práctica realista y completa sobre acceso a datos, desarrollo de APIs, consumo de servicios web y organización de un proyecto multiplataforma.

---

## 🗃️ Arquitectura del Proyecto

### 🖧 Servidor (PHP + SQLite)

El servidor utiliza una base de datos **SQLite**, editable mediante herramientas como `sqlitebrowser`.  
Desde esta base de datos se exponen dos endpoints REST en PHP:

### Funciones de la API

1. **Listar todas las aves**  
   Devuelve toda la información de las aves en formato JSON.

2. **Listar un ave concreta a partir de un `id_ave`**  
   Retorna la información de una sola especie según su identificador.

---

## 🖥️ Cliente Java

El proyecto incluye dos ficheros Java principales:

- **`albuaves_api_rest.java`**  
  Cliente simple que realiza una petición a la API y obtiene todas las aves en formato JSON.

- **`SearchBirdsAPI.java`**  
  Cliente que busca aves mediante la API y muestra todos los datos obtenidos.

Ambos utilizan las librerías:

- `json-20250517.jar` para parsear JSON.
- `sqlite-jdbc` cuando es necesario interactuar con bases de datos desde Java.

---

## 📦 Software Requerido

Para ejecutar el servidor:

- `sqlitebrowser`
- `php-sqlite3`

### Instalación en sistemas Ubuntu/Debian

```bash
sudo apt update
sudo apt install sqlitebrowser php-sqlite3

### comandos de puesta en marcha el servidor

./run-api-server.sh ./php/api.sh (o api1.php)

### Comandos para la ejecucion del servidor y la obtencion de la api en java


javac -cp .:sqlite-jdbc-3.51.0.0.jar albuaves_api_rest.java
java -cp .:sqlite-jdbc-3.51.0.0.jar albuaves_api_rest.java


javac -cp .:json-20250517.jar SearchBirdsAPI.java
java -cp .:json-20250517.jar SearchBirdsAPI.java


🔗 Enlaces de Interés
JSON.org

Más información sobre el manejo de JSON en Java:

https://github.com/stleary/JSON-java


📄 Autor

Mohammad Shahin
2º DAM


