# Flowshop

This is a configuration-driven WooCommerce demo. 
I set up products, shipping, checkout, menus, and pages directly 
in wp-admin and did not add custom theme/plugin code.
To review the site exactly as configured, import the included 
All-in-One WP Migration export (.wpress).
The child theme folder exists but has no custom code beyond defaults.


**Shipping note:** Free shipping is set to **200 €** (chosen intentionally to match a furniture store’s typical order values).







## What’s implemented

- **Products**
  - Simple products
  - One variable product with attributes & variations
  - Mix of regular and sale prices
- **Shipping**
  - Free shipping when cart total ≥ **200 €**
  - Flat rate under 200 €
- **Checkout**
  - Guest checkout enabled
  - Direct Bank Transfer (BACS) enabled
  - Terms & Conditions page + checkbox wired to checkout
- **UX**
  - Top menu: **Home, Shop, Cart, Checkout, My account**
  - “Collections” mega menu by product categories

---

## Requirements

- PHP 8.x
- MySQL 5.7+ / MariaDB 10.3+
- WordPress 6.x
- WooCommerce 8.x+
- Node.js / npm 

---

## Repo layout

- `wp-content/themes/flowshop-child/`
- `wp-content/mu-plugins/`
- `backup/flowshop-local-20251105-214300-ub0acycfnbty.wpress` – full site export for 1-click restore
- WordPress core, uploads, and the **Storefront** parent theme are **not** tracked.

---

## Local setup
Restore the site from the .wpress file in this repo so you get the exact 
catalog, settings, menus, and all product images.

1. Create a local WordPress site
2. In WP Admin -> Plugins -> Add New, install and activate All-in-One WP Migration
3. Go to All-in-One WP Migration → Import
4. Click Import From → File and select: backup/flowshop-local-20251105-214300-ub0acycfnbty.wpress
5. Confirm the prompts and wait for the import to complete, then click Finish
6. Visit the site front end—Shop, product pages, Cart, and Checkout should all work with images.

## Demo
https://github.com/user-attachments/assets/276413df-5d15-4c78-8632-76cca4d21d9b

