# Explora Mundo - CRUD de Reservas de Viajes

Un CRUD que he realizado como un trabajo de clase. Se trata de una web que funciona de forma síncrona (la cual no es la forma correcta de crear este tipo de aplicaciones) y desde la cual se pueden realizar tanto altas de reservas como ver un listado con todas las reservas realizadas. Este listado cuenta con un filtro de ordenación, otro en el que solo se muestran los viajeros de una determinada clase y por último una consulta por DNI para localizar a un viajero concreto. Además de todo esto, cuenta con un botón desde el que se puede realizar borrados de reservas.

> 🇬🇧 [Read this README in English](README.md)

---

## 🚀 Demo
🔗 [Explora Mundo](https://juanvalentin.alwaysdata.net/05/)

---

## 📸 Imágenes

| 1. Página principal | 2. Formulario | 3. Listado |
| :---: | :---: | :---: |
| <img src="screenshots/desktop.png" width="300"> | <img src="screenshots/reserva.png" width="300"> | <img src="screenshots/listado.png" width="300">

<div align="center">
<p><b>Experiencia para móvil</b></p>
  <img src="screenshots/mobile.png" width="250" alt="Vista movil"> 
  </div>

---

## 🛠️ Tecnologías Utilizadas

| Capa | Tecnología |
|------|-----------|
| Frontend | HTML5, CSS3 |
| Backend | PHP 8 |
| Base de datos | MySQL (vía AlwaysData) |
| Hosting | [AlwaysData](https://www.alwaysdata.com) |

---

## ⚠️ Nota de Arquitectura: Sincronismo vs Asincronismo
**Reflexión Técnica:** Actualmente, esta aplicación está desarrollada de forma síncrona. Aunque se utilizan iframes para que solo se recargue una parte de la página y no esta al completo, soy consciente de que esta no es la forma adecuada de realizar una aplicación de este tipo. Ha sido realizada así ya que se trata de un proyecto de clase para el cual hasta este momento no contaba con los conocimientos para hacerlo de otra forma, pero la forma correcta sería la forma asíncrona.
La diferencia radica en que de forma síncrona (la mía), cuando el servidor está realizando una tarea la web se paraliza completamente hasta que esta tarea termina de ser realizada, mientras que de forma asíncrona la página web puede seguir funcionando mientras el servidor procesa esta tarea.

---

## 🧠 Aprendizajes

- Conectar PHP a una **base de datos**
- Construir **consultas SQL dinámicas** con filtros
- Estructurar un proyecto PHP con varias páginas
- Desplegar una aplicación PHP + MySQL en un **proveedor de hosting remoto**
- Como eliminar un registro del listado **sin recargar la página**

---

## 📂 Estructura del Proyecto

```bash
CRUD/
│
├── alta/                        # Módulo de alta / registro
│   ├── ficheros/                # Recursos de esta sección
│   ├── imagenes/                # Imágenes
│   ├── alta.html                # Formulario de reserva (frontend)
│   └── PHP_Alta_Usuario.php     # Gestiona SUBMIT en la BD
│
├── listado/                     # Módulo de listado
│   ├── ficheros/                # Recursos de esta sección
│   ├── imagenes/                # Imágenes
│   ├── listado.php              # Página del listado de viajes
│   └── PHP-Baja_Usuario.php     # Eliminar desde la vista de listado
│
├── ficheros/                    # Recursos de la página principal
├── imagenes/                    # Imágenes de la página principal
├── screenshots/                 # Capturas de pantalla para utilizar en README.md
│
├── .gitignore
├── basedatos_01.sql             # Esquema SQL y datos iniciales
└── index.html                   # Punto de entrada / Página de inicio
```

---

## 🛠️ Instalación Local

1. Clona el repositorio: `git clone https://github.com/jvmarcos-dev/travel-agency-crud.git`
2. Configura un servidor local (XAMPP, WAMP o Docker).
3. Importa el archivo `basedatos_01.sql` en tu PHPMyAdmin.
4. Renombra `ficheros/conexion.example.php` a `conexion.php` y configura tus credenciales.
5. Accede a `localhost` en tu navegador.

---

## 👤 Autor

**Juan Valentín Marcos Argandoña**

- LinkedIn: [Juan Valentín Marcos Argandoña](https://www.linkedin.com/in/juan-valent%C3%ADn-marcos-argando%C3%B1a-2864663b3/)
- GitHub: [@jvmarcos-dev](https://github.com/jvmarcos-dev)

---