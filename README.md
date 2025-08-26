# README - Sistema de Gestión para Alquiler de Bicicletas

![Banner Alquiler de Bicicletas](https://via.placeholder.com/800x200?text=Sistema+de+Alquiler+de+Bicicletas)

## 📌 Descripción del Proyecto
Sistema de gestión integral desarrollado para el **SENA** que permite:
- **Alquiler de bicicletas**
- **Gestión de usuarios** con roles diferenciados
- **Control de inventario**
- **Módulo de pagos**
- **Notificaciones en tiempo real**
- **Accesibilidad y diseño responsivo**

## 📂 Documentación y Recursos
| Documento | Enlace |
|-----------|--------|
| 📝 **Plan de Trabajo** | [Abrir](https://drive.google.com/drive/folders/1r88Ki3ZCiloMSj70lhl4lW20CkdDvYoA) |
| 📘 **Manual Técnico** | [Abrir](https://drive.google.com/drive/folders/1z-9G14F-J2mcMsdBcXHzIaZjcj1jMNM5) |
| 🔄 **Control de Cambios** | [Abrir](https://drive.google.com/drive/folders/1c5h5dHLrsuBJt0yMaf-49K5BMy7gpw_d) |
| 🎤 **Presentación de Apoyo** | [Abrir](https://drive.google.com/drive/folders/1n38yAdKIQWj0IgIrIa-c4mmLOQw-mVPy) |
| 🗄️ **Modelo de Base de Datos** | [Abrir](https://drive.google.com/drive/folders/1ojStVqisLEchZyj6zTqIacGAQKc7IJOW) |
| 👥 **Historias de Usuario** | [Abrir](https://drive.google.com/drive/folders/1Y3z0w2VTopov9UTWEqHJciXNofUYsNbv) |
| 📋 **IEEE830 (Requisitos)** | [Abrir](https://drive.google.com/drive/folders/1wvDvoPD93tObOofxuAMnU5nH6ni3FTmZ) |
| 🗺️ **Mapa de Navegación** | [Abrir](https://drive.google.com/drive/folders/1kQN5nHkViHyujU5t03lwMp12uW3gYaAN) |

---

## 🖥️ Estructura del Proyecto (Laravel)
```

sistema-bicicletas/
├── app/                  # Lógica de aplicación
│   ├── Models/           # Modelos Eloquent
│   ├── Http/             # Controladores
│   └── Providers/        # Service Providers
├── config/               # Configuraciones
├── database/             # Migraciones y Seeds
├── public/               # Assets públicos
├── resources/
│   ├── views/            # Vistas Blade + Tailwind
│   └── css/              # Estilos compilados
├── routes/               # Definición de rutas
└── tests/                # Pruebas automatizadas

````

## 👨‍💻 Roles y Permisos
| Rol | Acceso | Dispositivos |
|-----|--------|--------------|
| **Administrador** | Configuración, reportes, gestión de usuarios y productos | PC/Tablet |
| **Cliente** | Registro, alquiler, pagos, notificaciones | Tablet/Móvil |

## 🛠️ Instalación con XAMPP

1. **Requisitos previos**:
   - XAMPP con PHP ≥ 8.0
   - Composer instalado
   - Node.js (para Tailwind)

2. **Configuración inicial**:
```bash
git clone [repo-url]
cd sistema-bicicletas
composer install
npm install
cp .env.example .env
php artisan key:generate
````

3. **Base de datos**:

   * Crear DB en phpMyAdmin
   * Configurar `.env`:

     ```ini
     DB_DATABASE=bicicletas_sena
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Ejecución**:

```bash
php artisan migrate --seed
php artisan serve
npm run dev
```

## 📅 Próximos Hitos

* [ ] Finalizar módulo de alquileres
* [ ] Integración completa con inventario
* [ ] Implementar facturación electrónica
* [ ] Optimizar panel de administración

## 📜 Licencia

MIT License © 2025 - Proyecto SENA

```

---

¿Quieres que te lo prepare también en **formato con iconos/badges extra (por ejemplo: estado del proyecto, licencia, contribuciones)** para que se vea aún más profesional en GitHub?
```
