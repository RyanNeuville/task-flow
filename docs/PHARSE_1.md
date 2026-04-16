# Phase 1 : Analyse & Spécifications (MVP Focus)

## La Proposition de Valeur Unique 
Pour se démarquer des milliers de gestionnaires de tâches classiques (*To-Do list basique*), ce Projet intègre **3 fonctionnalités différenciantes** orientées "Productivité Absolue" :

1. **Jauge d'Énergie (Energy-Based Tasks) :** Au lieu de la classique "Priorité", on assigne un niveau d'énergie (Faible, Moyen, Intense). L'app suggère des tâches selon l'humeur.
2. **Mode "Deep Work" (Focus Timer) :** Un bouton *Start* sur une tâche qui masque tout le reste de l'interface et lance un minuteur Pomodoro.
3. **Capture Éclair ("Keyboard-first") :** Un raccourci clavier global (ex: `Ctrl + K`) qui ouvre une modale flottante pour ajouter une tâche instantanément sans recharger la page.

---

## User Stories (Classées par ordre de priorité)

### 1. Authentification & Espace Utilisateur (Indispensable)
* **US 1.1 :** En tant qu'utilisateur, je veux pouvoir m'inscrire et me connecter de manière sécurisée afin de retrouver mon espace de travail personnel.
* **US 1.2 :** En tant qu'utilisateur, je veux pouvoir déconnecter ma session de manière sécurisée.

### 2. Gestion des Projets / Dossiers (Structure)
* **US 2.1 :** En tant qu'utilisateur, je veux créer un nouveau projet (Titre, Couleur associée) afin d'organiser mes tâches par contexte.
* **US 2.2 :** En tant qu'utilisateur, je veux voir la liste de mes projets dans un menu latéral (Sidebar) pour naviguer rapidement.
* **US 2.3 :** En tant qu'utilisateur, je peux modifier ou supprimer un projet existant (ce qui supprime les tâches associées).

### 3. Gestion des Tâches (Le Coeur - CRUD)
* **US 3.1 :** En tant qu'utilisateur, je peux créer une tâche dans un projet avec un Titre, une Description, et une *Date limite*.
* **US 3.2 :** En tant qu'utilisateur, je peux marquer une tâche comme "Terminée" en un simple clic (Checkbox animée).
* **US 3.3 :** En tant qu'utilisateur, je peux déplacer une tâche d'un statut à l'autre (À faire, En cours, Fait) via des colonnes type Kanban.
* **US 3.4 :** En tant qu'utilisateur, je peux éditer ou supprimer une tâche existante.

### 4. Les Fonctionnalités "Différenciantes"
* **US 4.1 (Capture Éclair) :** En tant qu'utilisateur, je peux appuyer sur `Ctrl + K` de n'importe où pour ouvrir la barre de création rapide de tâche (saisie en 1 touche).
* **US 4.2 (Énergie requise) :** Lors de la création d'une tâche, je peux lui assigner une pastille d'énergie (⚡ Faible, ⚡⚡ Normale, ⚡⚡⚡ Intense). Une vue spécifique "Que faire ?" me filtre les tâches selon l'énergie et le temps que j'ai.
* **US 4.3 (Deep Work Mode) :** En tant qu'utilisateur, je peux cliquer sur "Focus" sur une tâche. L'interface s'assombrit (Focus UI), un minuteur démarre (ex: 25min) et empêche toute distraction.

---

## Exigences Techniques liées au MVP
* **Backend :** Modèle MVC pur, PHP 8.2 orienté objet, requêtes préparées PDO (sécurité SQLi).
* **Frontend :** Vanilla CSS avec Variables CSS pour changement de thème (Dark/Light mode très demandé). Fetch API (Vanilla JS) pour l'ajout/modification de statut sans rechargement de page.
* **Sécurité :** Token CSRF pour form, validation de données backend systématique.