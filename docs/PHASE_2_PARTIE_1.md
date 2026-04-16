# Phase 2 - Partie 1 : Modélisation de la Base de Données

Puisque nous sommes focalisés sur un MVP performant et avec les fonctionnalités uniques définies en Phase 1 (Énergie, Focus), voici la proposition de la structure relationnelle.

## Détail des Tables et Colonnes

### Table `users`

_Objectif : Gérer l'authentification et isoler les données de chaque personne._

- `id` : TEXT ( Primary Key)
- `username` : VARCHAR(50) (Unique)
- `email` : VARCHAR(255) (Unique)
- `password_hash` : VARCHAR(255) (Sécurisé via BCRYPT)
- `role` : ENUM ('ADMIN', 'USER') (Défaut: 'USER')
- `created_at` : DATETIME / TIMESTAMP (Default CURRENT_TIMESTAMP)
- `updated_at` : DATETIME NULL (Mis à jour automatiquement via trigger ou code)
- `deleted_at` : DATETIME NULL (Soft Delete)

### Table `projects`

_Objectif : Regrouper les tâches par contexte ou dossier._

- `id` : TEXT (Primary Key)
- `title` : VARCHAR(100)
- `color_hex` : VARCHAR(7) (Pour l'interface, ex: `#3B82F6`)
- `user_id` : TEXT (Foreign Key -> `users.id` ON DELETE CASCADE)
- `created_at` : DATETIME
- `updated_at` : DATETIME NULL (Mis à jour automatiquement via trigger ou code)
- `deleted_at` : DATETIME NULL (Soft Delete)

### Table `tasks`

_Objectif : Le coeur de l'app de productivité._

- `id` : TEXT (Primary Key)
- `title` : VARCHAR(255)
- `description` : TEXT (Optionnel)
- `status` : ENUM ('TODO', 'IN_PROGRESS', 'DONE') (Défaut: 'TODO')
- `energy_level` : ENUM ('LOW', 'MEDIUM', 'HIGH') (La fonctionnalité unique ⚡)
- `focus_sessions` : INT (Défaut: 0. S'incrémente après chaque "Deep Work")
- `deadline` : DATETIME (Optionnel)
- `position` : INT (Pour l'ordre du Drag & Drop)
- `project_id` : TEXT (Foreign Key -> `projects.id` ON DELETE CASCADE)
- `created_at` : DATETIME
- `updated_at` : DATETIME (Mis à jour automatiquement via trigger ou code)
- `deleted_at` : DATETIME NULL (Soft Delete)

---

_Note de conception : Le "ON DELETE CASCADE" permet de supprimer automatiquement toutes les tâches si le projet est supprimé, et tous les projets si l'utilisateur supprime son compte. C'est propre et évite les données orphelines._
