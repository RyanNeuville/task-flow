### Plan de Réalisation du Projet "TaskFlow"

---

| Phase | Étape | Description & Objectifs | Livrables / Outils |
| :--- | :--- | :--- | :--- |
| **1. Analyse & Cadrage** | **Besoins Fonctionnels ** | Définir les features de base : Authentification, création d'espaces/projets, gestion CRUD des tâches, assignation de statuts (À faire, En cours, Terminé) et dates limites. | Document de spécificités, Backlog (User Stories). |
| | **Exigences Techniques** | Figer les technos (PHP 8.2, MySQL/PostgreSQL, Vanilla JS, CSS/SASS). | Définition précise de la stack. |
| **2. Conception (Design & BDD)** | **Modélisation de la BDD** | Schématiser les relations entre les tables : `users`, `projects`, `tasks`, et potentiellement `tags` ou `comments`. | Modèle Conceptuel de Données (MCD), Script SQL initial. |
| | **UX/UI & Maquettage** | Créer avec Figma une interface moderne, aérée et premium (effet Glassmorphism, belles typographies, contrastes soignés) qui "WOW" l'utilisateur. | Wireframes, Maquettes HD Figma, UI Kit. |
| **3. Architecture & Setup** | **Socle de l'Application** | Organiser le pattern MVC dans le repo. Configurer le système de Routing (pour avoir des URLs propres orientées SEO/API), l'Autoloading des classes, et la gestion des variables `.env`. | Dossiers `App/Controllers`, `App/Models`, `App/Views`, Fichier `Router.php`. |
| | **Utilitaires de Base** | Coder la connexion PDO (Singleton), les Helpers de sécurité (CSRF, XSS), de validation de requêtes et de gestion d'erreurs. | Classes DB, Fichiers `auth.php`, `csrf.php`. |
| **4. Développement Backend** | **Authentification** | Inscription, connexion sécurisée, hashage `password_hash()`, gestion intelligente de la session et déconnexion. Middlewares d'accès. | Système d'Auth fonctionnel et sécurisé. |
| | **Logique Métier** | Développement des entités (Models) et des actions (Controllers) pour gérer les Projets et les Tâches du point de vue serveur. | API / Logique de traitement CRUD en PHP. |
| **5. Développement Frontend** | **Intégration Design Système** | Découpage des composants visuels (Sidebar, Navbar, Modales, Cartes de Tâches). Intégration en HTML sémantique et CSS fluide, rapide et Responsive. | Vues structurées et stylisées. |
| | **Interactivité JS** | Ajout de comportements asynchrones (AJAX) pour que l'app paraisse instantanée (création de tâche sans rechargement de page, vue Kanban en Drag & Drop). | Fichiers Vanilla JS, Expérience utilisateur dynamique. |
| **6. Tests & Recette** | **Tests Unitaires** | Rédiger des tests de base pour vos classes cruciales (ex: Models, Utilities) en utilisant *PHPUnit* (déjà présent dans vos deps). | Suite de tests passant au vert. |
| | **Assurance Qualité (QA)** | Traque des bugs (Bug tracking). Vérification de l'accessibilité, de l'affichage sur mobile, et des failles d'injection. | Code stabilisé et propre. |
| **7. Déploiement & Vente** | **Mise en Production** | Préparation de l'environnement serveur (VPS Debian/Ubuntu ou hébergement mutualisé type O2Switch), setup Apache/Nginx, migration de la BDD et SSL (HTTPS). | App accessible sur le web via un Nom de domaine. |
| | **Documentation (Portfolio)** | Peaufiner le `README.md` (screenshots, badges, instructions d'installation), commenter le code. Idéal pour que les développeurs/clients voient votre rigueur. | `README` professionnel, structure de code documentée. |

---