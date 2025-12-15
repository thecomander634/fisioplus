# 🩺 FisioPlus — Web SPA (Bootstrap 5 + jQuery)

Sitio web estático de temática **fisioterapia y salud**, construido con **Bootstrap 5** y convertido en una **Single Page Application (SPA)** mediante jQuery.

Incluye **6 secciones** gestionadas dinámicamente dentro de un único `index.html`: Inicio, Tratamientos, Contacto y 2 Accesos, para profesionales y para pacientes.
Además, exixte un dashboard.php como "panel de control".

---

## 🔐 Credenciales de Acceso

Para acceder a la zona privada o probar el formulario de login, se debe utilizar el **único usuario habilitado** en el sistema:

| Usuario | Contraseña |
| :--- | :--- |
| 📧 **drtenma@fisioplus.com** | 🔑 **1234abcd** |

---

## 📂 Estructura del Proyecto
```text
/ (raíz)
├─ index.html       # Página única con todas las secciones (SPA)
├─ styles/
│  └─ styles.css    # Estilos personalizados (tema médico/salud)
├─ assets/
│  └─ images/       # Imágenes locales de la clínica
├─ SPA.js           # Script principal de navegación, login y buscador
└─ README.md
```
---

## ⚙️ Tecnologías

- 🧱 **HTML5 + CSS3**
- 🎨 **Bootstrap 5.3 (CDN)**
- ⚡ **jQuery 3.7.1**
- ✍️ **Google Fonts:** Open Sans / Roboto

---

## 🧱 Estructura de la SPA

Cada parte del sitio está dentro de `index.html` y se muestra dinámicamente según la navegación:

| Sección | ID / Data-target | Descripción |
| :--- | :--- | :--- |
| 🏥 **Inicio** | `home-section` | Portada con hero image y bienvenida. |
| 💆 **Tratamientos** | `events-section` | Catálogo de servicios (Fisioterapia, Osteopatía...). |
| 📍 **Contacto** | `contact-section` | Ubicación, horarios y formulario de citas. |
| 🔐 **Acceso** | `login-section` | Formulario de login para el Dr. Tenma. |

---

## 🧠 Funcionamiento del `SPA.js`

El script controla la experiencia de usuario sin recargas de página:

- **Navegación:** Usa atributos `data-target` y `data-section` para mostrar una sola sección a la vez.
- **Estado Inicial:** Oculta todas las secciones excepto `#home-section`.
- **Lógica de Login:** Verifica estrictamente que el usuario sea `drtenma@fisioplus.com` y la contraseña `1234abcd`.
- **Visibilidad del Buscador:**
---

## 🔍 Buscador Dinámico

El buscador del navbar filtra los tratamientos dentro de la sección `#events-section`.

### Funcionamiento:
1. El usuario escribe un término (ej. "Masaje", "Rehabilitación") y pulsa **Buscar**.
2. La SPA recorre las tarjetas (`.card`) visibles en la sección.
3. Se comparan los textos de los títulos `<h5>` de las tarjetas.
4. Solo se muestran las cards que **contienen el texto buscado** (sin importar mayúsculas/minúsculas).
5. Si el campo está vacío, se vuelven a mostrar todas las tarjetas.

### Detalles técnicos:
- Se filtran las columnas completas (`.col-*`) para mantener la estructura del grid de Bootstrap.
- La comparación usa `toUpperCase()` para hacer la búsqueda "case-insensitive".

---

## 🎨 Estilo

- 🎨 **Color Primario:** `--bs-primary` configurado en tonos clínicos (verdes/azules) para transmitir calma y profesionalidad.
- 💡 **Diseño:** Cards con sombra suave, botones personalizados y espaciado limpio.
- 🖋️ **Tipografía:** Base **Open Sans** (Google Fonts) para máxima legibilidad.
![fisioplus-preview](https://github.com/user-attachments/assets/placeholder-image)
# 🎨 PALETA
- https://coolors.co/ffffff-0ea5e9-2e8b57-333333-f8f9fa

---

## 🧩 Personalización rápida

| Elemento | Dónde cambiar |
| :--- | :--- |
| 🎨 Color corporativo | Variable `--bs-primary` en `<style>` o CSS |
| 🖼️ Imágenes | Carpeta `/assets/images/` |
| 🔐 Credenciales | Variables de validación en `SPA.js` |

---

## ♿ Accesibilidad

- Todas las imágenes incluyen atributo `alt`.
- Formularios con etiquetas `label` asociadas.
- Contraste adecuado en botones y encabezados para lectura fácil.

---

## 🚀 Navegación del sitio

| Opción del menú | Acción |
| :--- | :--- |
| 🏥 **Inicio** | Muestra `#home-section` |
| 💆 **Tratamientos** | Muestra `#events-section` |
| 📍 **Contacto** | Muestra `#contact-section` |
| 🔐 **Área Dr.** | Muestra `#login-section` |

---

© **FisioPlus — Clínica de Fisioterapia**
Diseño y desarrollo web usando **Bootstrap + jQuery**
