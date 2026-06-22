# 🚀 Martfury Custom

> **Version:** 1.0.18 | **License:** GPLv2+ | **Requires PHP:** 5.6+

Plugin WordPress que extiende el tema **Martfury** con un sistema de modificaciones estilo **tema hijo**, permitiendo sobrescribir templates y agregar CSS sin tocar el tema padre.

---

## ✨ Funcionalidades

| Característica | Descripción |
|---|---|
| 🎨 **CSS personalizado** | Encola automáticamente `src/modifications/style.css` |
| 🛒 **WooCommerce** | Sobrescribe templates WooCommerce desde `src/modifications/woocommerce/` |
| 📄 **Templates del tema** | Reemplaza cualquier template PHP de Martfury desde `src/modifications/` |
| 🔌 **Sin modificar el tema** | Todo vive dentro del plugin, seguro ante actualizaciones |

---

## 📁 Estructura

```
martfury-custom/
├── index.php                     ← Plugin header (NO editar)
├── src/
│   ├── _.php                     ← MACU_CORE: loader principal
│   └── modifications/            ← Tus modificaciones (como tema hijo)
│       ├── style.css             ← CSS frontal
│       └── woocommerce/          ← Templates WooCommerce override
│           └── cart/cart.php     └ Ej: cart override
├── libs/                         ← Vendor Composer (NO editar)
├── AGENTS.md                     ← Reglas para IAs
└── README.md                     ← Este archivo
```

---

## 🛠️ Cómo usar

1. **CSS:** Agrega tus estilos en `src/modifications/style.css`. Se encola automáticamente en el frontend.
2. **WooCommerce:** Copia el template de WooCommerce que quieras modificar a `src/modifications/woocommerce/`, manteniendo la misma estructura de subdirectorios (ej: `cart/cart.php`, `checkout/form-checkout.php`).
3. **Templates de Martfury:** Copia cualquier template del tema Martfury a `src/modifications/` con la misma ruta relativa. Ej: `page.php` → `src/modifications/page.php`.

---

## ⚙️ Requisitos

- WordPress 5.0+
- PHP 5.6+
- Tema [Martfury](https://themeforest.net/item/martfury-highpowered-woocommerce-wordpress-theme/21629271) activo
- WooCommerce 3.0+ (opcional, solo si usas templates WooCommerce)

---

## 👤 Developer

- **Francisco Blanco** — [Website](https://franciscoblanco.vercel.app/) — blancofrancisco34@gmail.com

---

## 📄 Licencia

GPLv2+ — Ver [LICENSE](https://www.gnu.org/licenses/gpl-2.0.html).
