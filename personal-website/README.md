## 📝 README: My Professional Portfolio Website

### 🚀 Overview

This repository contains the source code for my personal professional website, which serves as a central hub for showcasing my **projects**, **articles**, and **contact information**.

This initial version is built entirely with **semantic HTML5** and **CSS** to demonstrate fundamental structuring skills, focusing on **accessibility (A11y)** and **future scalability**.

---

### ✨ Goals of the Project

1.  **Semantic Structure:** Use appropriate HTML5 tags (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`) to create a clear, meaningful document outline.
2.  **Multi-Page Architecture:** Establish a consistent navigation structure that effectively links together four primary pages.
3.  **Basic SEO & Metadata:** Include essential `<meta>` tags (keywords, description, author) for search engine visibility.
4.  **Style Foundation:** Create a single, external CSS file for a cohesive look and maintain separation of concerns.

---

### 📂 File Structure

The project is organized into a clean and intuitive directory structure:


portfolio-website/
|── .htaccess # Restrictions
|── .404.php # 404 NOT FOUND
├── index.php # The Homepage 
├── projects.php # List of professional projects 
├── articles.php # Blog/Article content page 
├── contact.php # Contact form and information page 
└── style.css # Central stylesheet for all pages


---

### 🌐 Key Features

The website currently contains the following navigable pages and semantic components:

| Page Name | Purpose | Key HTML Elements Used |
| :--- | :--- | :--- |
| **Homepage** (`index.html`) | Introduction and general overview. | `<section id="hero">`, `<section id="about">` |
| **Projects** (`projects.html`) | Lists individual portfolio pieces. | Multiple `<article class="project-card">` elements. |
| **Articles** (`articles.html`) | Displays technical writings/blog posts. | Multiple `<article class="post-summary">` elements, `<time>` tag. |
| **Contact** (`contact.html`) | Enables visitor communication. | `<form>`, `<fieldset>`, `<legend>`, `<label>` and `<button type="submit">`. |

### 🛠️ Setup and Local Viewing

Since this is a static website, you do not need any backend setup or build tools.

1.  **Clone the Repository:**
    ```bash
    git clone https://github.com/Ravendam0/personal-website-sh.git
    ```
2.  **Navigate to the Directory:**
    ```bash
    cd my-portfolio-website
    ```
3.  **View Locally:**
    Simply open the `index.html` file in your web browser (e.g., right-click the file and select "Open with" -> "Google Chrome").

### ✍️ Next Steps & Future Development

* **JavaScript Interactivity:** Add features like form validation, a dynamic navigation highlighter, and potentially a light/dark mode toggle.
* **Accessibility Audit:** Conduct a full audit to ensure compliance with WCAG standards.
* **Deployment:** Deploy the website to a hosting service (e.g., GitHub Pages, Netlify) for live viewing.
* **Modular CSS:** Refactor `style.css` using Sass or a CSS methodology (like BEM) f