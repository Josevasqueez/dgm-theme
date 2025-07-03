# DGM Theme - WordPress Theme

Un theme personalizado de WordPress para DGM Uruguay, distribuidor exclusivo de repuestos originales Chevrolet.

## 🚀 Características

- **Diseño Responsivo**: Optimizado para dispositivos móviles, tablets y desktop
- **Accesibilidad**: Cumple con estándares WCAG 2.1
- **SEO Optimizado**: Estructura semántica y meta tags apropiados
- **Rendimiento**: CSS y JavaScript optimizados
- **Seguridad**: Implementación de nonces y escape de datos
- **Internacionalización**: Preparado para traducciones

## 📋 Requisitos

- WordPress 5.0 o superior
- PHP 7.4 o superior
- Node.js 16.0 o superior (para desarrollo)

## 🛠️ Instalación

### Instalación Básica

1. Descarga el theme
2. Sube la carpeta `dgm-theme` a `/wp-content/themes/`
3. Activa el theme desde el panel de administración

### Desarrollo

```bash
# Instalar dependencias
npm install

# Desarrollo con watch mode
npm run dev

# Build para producción
npm run build

# Linting y formateo
npm run lint:css
npm run lint:js
npm run lint:php
```

## 🏗️ Estructura del Proyecto

```
dgm-theme/
├── assets/                 # Recursos estáticos
│   ├── icons/             # Iconos SVG
│   ├── images/            # Imágenes
│   └── repuestos/         # Iconos de repuestos
├── components/            # Componentes reutilizables
│   ├── button.php
│   ├── menu.php
│   ├── slider.php
│   └── ...
├── pages/                 # Plantillas de páginas
│   ├── inicio.php
│   ├── contacto.php
│   └── ...
├── functions.php          # Funciones del theme
├── header.php             # Cabecera
├── footer.php             # Pie de página
├── index.php              # Plantilla principal
├── style.css              # Estilos principales
├── script.js              # JavaScript principal
├── package.json           # Dependencias y scripts
└── README.md              # Documentación
```

## 🎨 Personalización

### Colores del Theme

```css
:root {
  --color-primary: #000000;
  --color-secondary: #CEA459;
  --color-secondary-dark: #B18434;
}
```

### Tailwind CSS

El theme utiliza Tailwind CSS vía CDN con configuración personalizada:
- Colores personalizados (primary, secondary, secondaryDark)
- Configuración extendida para el diseño del theme

## 🔧 Funcionalidades

### Custom Post Types

- **Slider**: Para gestionar sliders del sitio
- **Productos**: Para catálogo de repuestos (futuro)

### Componentes

- **Menú Responsivo**: Con submenús y animaciones
- **Slider**: Integrado con Swiper.js
- **Galería**: Con Fancybox
- **Formularios**: Estilos personalizados para Contact Form 7

### Características Técnicas

- **Lazy Loading**: Para imágenes
- **Smooth Scrolling**: Con Lenis
- **Animaciones**: Fade in up con Intersection Observer
- **Cache**: Optimización de consultas
- **Seguridad**: Nonces y escape de datos

## 🚨 Correcciones Implementadas

### Seguridad
- ✅ Escape de datos con `esc_html()`, `esc_attr()`, `esc_url()`
- ✅ Implementación de nonces para AJAX
- ✅ Sanitización de entradas de usuario
- ✅ Prevención de acceso directo a archivos

### Rendimiento
- ✅ Eliminación de duplicaciones en `functions.php`
- ✅ JavaScript modular y optimizado
- ✅ CSS organizado y minificado
- ✅ Optimización de carga de librerías externas

### Accesibilidad
- ✅ Atributos ARIA en menús
- ✅ Skip links
- ✅ Focus styles
- ✅ Textos alternativos en imágenes

### Código Limpio
- ✅ Documentación PHPDoc
- ✅ Internacionalización con `__()` y `_e()`
- ✅ Separación de responsabilidades
- ✅ Manejo de errores mejorado

## 📱 Responsive Design

El theme está optimizado para:
- **Mobile**: 320px - 768px
- **Tablet**: 768px - 1024px
- **Desktop**: 1024px+

## 🌐 Compatibilidad

- **Navegadores**: Chrome, Firefox, Safari, Edge (últimas 2 versiones)
- **Dispositivos**: iOS Safari, Chrome Mobile
- **WordPress**: 5.0+

## 🔍 SEO

- Meta tags optimizados
- Estructura semántica HTML5
- Schema markup (preparado)
- Open Graph tags
- Twitter Cards

## 📞 Soporte

Para soporte técnico o consultas:
- Email: info@dgm.uy
- Documentación: Este README

## 📄 Licencia

Este theme está bajo la licencia GPL v2 o posterior.

## 🆕 Changelog

### v1.0.0
- ✅ Corrección de duplicaciones en functions.php
- ✅ Implementación de seguridad mejorada
- ✅ Optimización de rendimiento
- ✅ Mejoras de accesibilidad
- ✅ Código limpio y documentado
- ✅ JavaScript modular
- ✅ CSS organizado
- ✅ Tailwind CSS vía CDN con configuración personalizada

---

**Desarrollado por Alejandro Vásquez para DGM Uruguay** 