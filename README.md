Absolutely, Ghansham! Here's your full, polished `README.md` file you can copy-paste directly into your GitHub repo:

---

### ✅ `README.md`

```md
# 📦 Novel Custom WordPress Theme

This is a custom WordPress theme developed for the **Novel Office - Software Assessment** assignment by **Ghansham Gavande**.

---

## 📁 Folder Structure

```

novel-custom-theme/
├── style.css
├── functions.php
├── index.php
├── header.php
├── footer.php
├── page-home.php
├── screenshot.png
├── assets/
│   ├── css/main.css
│   ├── js/main.js
│   └── images/
│       ├── testimonial-1.jpg
│       └── testimonial-2.jpg
├── template-parts/
│   └── testimonials.php
├── inc/
│   └── custom-post-types.php

````

---

## ⚙️ Installation Steps

1. Download this repository as a ZIP file or clone it:
   ```bash
   git clone https://github.com/YOUR_USERNAME/novel-custom-theme.git
````

2. Copy the folder to `wp-content/themes/` of your local WordPress installation.
3. Log in to your WordPress dashboard.
4. Go to **Appearance > Themes** and activate the **Novel Custom Theme**.
5. Create a new page titled **Home** and assign the **Homepage** template from the Page Attributes.
6. Set the new page as the homepage in **Settings > Reading**.

---

## 🧩 Custom Post Type: Testimonials

* **Post Type**: `testimonial`
* Located in: `inc/custom-post-types.php`
* Supports:

  * Title
  * Editor content
  * Featured image (used with `loading="lazy"`)
* Access in Dashboard: **Testimonials**

Usage in template:

```php
get_template_part('template-parts/testimonials');
```

---

## 🚀 Performance Features

* ✅ Lazy loading on all testimonial images using `loading="lazy"`
* ✅ CSS & JS properly enqueued via `functions.php`
* ✅ Minimal file size and optimized layout
* ✅ Mobile responsive layout with basic flexbox
* ✅ No external dependencies or page builders
* ✅ Fast load time + no render-blocking assets

---

## 💡 Best Practices Followed

* ✅ WordPress theme standards (template files, functions.php, text domain)
* ✅ No direct links to CSS/JS in HTML
* ✅ Modular file structure
* ✅ Clear and readable code with comments

---

## 🧪 Tools Used

* WordPress
* PHP
* HTML/CSS/JS
* Figma (for reference)
* Google Lighthouse (for performance check)

---

## 👤 Author

**Ghansham Gavande**
📧 [ghanshamgavande49@gmail.com](mailto:ghanshamgavande49@gmail.com)
📞 7020601321
🌐 [LinkedIn Profile](https://linkedin.com/in/ghansham-gavande)

---

## 📌 Note

This theme was built **without** using any page builders (like Elementor or WPBakery) as per the assignment guidelines.

---

## 📄 License

GPL v2 or later – Free to use and modify.

```

---

Let me know when your GitHub repo is ready and I’ll help you add this directly too.  
✅ This `README.md` covers **everything** mentioned in the assignment and looks clean + professional.
```
