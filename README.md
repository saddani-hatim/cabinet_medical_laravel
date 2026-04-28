# 🏥 Système de Gestion de Cabinet - Cabinet Médical

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-13-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.3-blue.svg)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.1-38B2AC.svg)
![Alpine.js](https://img.shields.io/badge/Alpine.js-3.4-8CC84B.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

*Un système moderne et complet de gestion de soins de santé*

</div>

---

## 📋 Table des Matières

- [✨ Fonctionnalités](#-fonctionnalités)
- [🚀 Démarrage Rapide](#-démarrage-rapide)
- [📦 Installation](#-installation)
- [⚙️ Configuration](#️-configuration)
- [🎯 Utilisation](#-utilisation)
- [🗄️ Schéma de Base de Données](#️-schéma-de-base-de-données)
- [🔧 Technologies](#-technologies)
- [🤝 Contribution](#-contribution)
- [📄 Licence](#-licence)
- [👥 Auteurs](#-auteurs)

---

## ✨ Fonctionnalités

### 🏥 Gestion de Santé Core
- **Gestion des Patients** : Dossiers complets des patients avec informations de contact
- **Planification des Rendez-vous** : Système de réservation facile avec assignation de médecins
- **Catalogue de Services** : Gestion des services médicaux avec tarification et durée
- **Profils de Médecins** : Gestion des professionnels de santé

### 🔐 Authentification et Sécurité
- **Authentification Multi-rôles** : Support pour patients, médecins et administrateurs
- **Système de Connexion Sécurisé** : Authentification alimentée par Laravel Sanctum
- **Gestion de Profil** : Édition de profil utilisateur et gestion des mots de passe

### 🌐 Internationalisation
- **Support Bilingue** : Localisation complète en français et anglais
- **Changement de Langue Dynamique** : Changement de langue en temps réel sans rechargement de page

### 📊 Tableau de Bord et Analytiques
- **Statistiques en Temps Réel** : Vue d'ensemble des rendez-vous, patients et services
- **Activité Récente** : Derniers rendez-vous et mises à jour système
- **Représentation Visuelle des Données** : Design de tableau de bord propre et professionnel

### 📧 Communication
- **Intégration Email** : Envoi d'emails aux patients et au personnel
- **Notifications de Rendez-vous** : Rappels et confirmations automatisés

### 🎨 UI/UX Moderne
- **Design Réactif** : Approche mobile-first avec Tailwind CSS
- **Style Premium** : Thème dégradé bleu-violet personnalisé
- **Éléments Interactifs** : Composants dynamiques alimentés par Alpine.js
- **Accessibilité** : Motifs de design conformes WCAG

---

## 🚀 Démarrage Rapide

### Prérequis
- **PHP 8.3+**
- **Composer**
- **Node.js & NPM**
- **MySQL/PostgreSQL**

### Configuration en Une Commande
```bash
composer run setup
```

Cette commande va :
- Installer les dépendances PHP
- Générer la clé d'application
- Exécuter les migrations de base de données
- Installer les dépendances Node
- Construire les ressources frontend

### Démarrer le Serveur de Développement
```bash
composer run dev
```

Cela démarre :
- Serveur Laravel sur `http://localhost:8000`
- Serveur de développement Vite pour le rechargement à chaud
- Worker de file d'attente pour les tâches en arrière-plan
- Surveillance des logs

---

## 📦 Installation

### 1. Cloner le Dépôt
```bash
git clone https://github.com/saddani-hatim/systeme-gestion-cabinet.git
cd systeme-gestion-cabinet
```

### 2. Installer les Dépendances
```bash
# Dépendances PHP
composer install

# Dépendances Node
npm install
```

### 3. Configuration de l'Environnement
```bash
# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate
```

### 4. Configuration de la Base de Données
```bash
# Configurer votre base de données dans le fichier .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=systeme_gestion_cabinet
DB_USERNAME=votre_username
DB_PASSWORD=votre_password

# Exécuter les migrations
php artisan migrate

# (Optionnel) Alimenter avec des données d'exemple
php artisan db:seed
```

### 5. Construire les Ressources
```bash
# Pour le développement
npm run dev

# Pour la production
npm run build
```

### 6. Démarrer l'Application
```bash
php artisan serve
```

Visitez `http://localhost:8000` pour accéder à l'application.

---

## ⚙️ Configuration

### Variables d'Environnement
```env
# Application
APP_NAME="Système de Gestion de Cabinet"
APP_ENV=local
APP_KEY=base64:votre-cle-generee
APP_DEBUG=true
APP_URL=http://localhost

# Base de Données
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=systeme_gestion_cabinet
DB_USERNAME=user
DB_PASSWORD=password

# Configuration Mail
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

# File d'Attente (pour les tâches en arrière-plan)
QUEUE_CONNECTION=database
```

### Configuration de Langue
L'application supporte le français et l'anglais. Les fichiers de langue sont situés dans :
- `lang/fr/`
- `lang/en/`

---

## 🎯 Utilisation

### Pour les Patients
1. **S'inscrire** : Créer un compte avec informations personnelles
2. **Réserver des Rendez-vous** : Sélectionner des services et médecins préférés
3. **Voir l'Historique** : Accéder aux rendez-vous passés et dossiers
4. **Gérer le Profil** : Mettre à jour les informations personnelles

### Pour les Médecins
1. **Accès au Tableau de Bord** : Voir les rendez-vous assignés
2. **Gestion des Patients** : Accéder aux dossiers patients
3. **Gestion d'Horaire** : Voir et mettre à jour la disponibilité

### Pour les Administrateurs
1. **Gestion des Utilisateurs** : Créer et gérer les comptes utilisateur
2. **Configuration des Services** : Ajouter/modifier les services médicaux
3. **Surveillance Système** : Voir les analytiques et rapports
4. **Communication Email** : Envoyer des notifications aux utilisateurs

### Workflows Clés

#### Réserver un Rendez-vous
```
Inscription Patient → Sélection Service → Assignation Médecin → Sélection Date/Heure → Confirmation
```

#### Gérer les Services
```
Connexion Admin → Panneau Services → Ajouter/Modifier Service → Définir Tarif & Durée → Sauvegarder
```

---

## 🗄️ Schéma de Base de Données

### Table Users
```sql
- id (Clé Primaire)
- name (String)
- email (String Unique)
- email_verified_at (Timestamp)
- password (String Hashé)
- role (Enum: patient, doctor, admin)
- phone (String, Optionnel)
- created_at, updated_at (Timestamps)
```

### Table Services
```sql
- id (Clé Primaire)
- name (String)
- description (Text)
- price (Decimal)
- duration (Integer, minutes)
- created_at, updated_at (Timestamps)
```

### Table Appointments
```sql
- id (Clé Primaire)
- patient_id (Clé Étrangère → users)
- doctor_id (Clé Étrangère → users)
- service_id (Clé Étrangère → services)
- appointment_date (Datetime)
- status (Enum: pending, confirmed, completed, cancelled)
- notes (Text, Optionnel)
- created_at, updated_at (Timestamps)
```

### Relations
- **User** a plusieurs **Appointments** (en tant que patient ou médecin)
- **Service** a plusieurs **Appointments**
- **Appointment** appartient à **User** (patient), **User** (médecin), et **Service**

---

## 🔧 Technologies

### Backend
- **[Laravel 13](https://laravel.com/)** - Framework web PHP
- **[Laravel Sanctum](https://laravel.com/docs/sanctum)** - Authentification API
- **[Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze)** - Structure d'authentification

### Frontend
- **[Tailwind CSS](https://tailwindcss.com/)** - Framework CSS utility-first
- **[Alpine.js](https://alpinejs.dev/)** - Framework JavaScript léger
- **[Vite](https://vitejs.dev/)** - Outil de build rapide et serveur de développement

### Base de Données
- **MySQL/PostgreSQL** - Support base de données primaire
- **SQLite** - Pour environnements de test

### Outils de Développement
- **[Composer](https://getcomposer.org/)** - Gestion des dépendances PHP
- **[NPM](https://www.npmjs.com/)** - Gestion des paquets Node.js
- **[Pint](https://laravel.com/docs/pint)** - Correcteur de style de code PHP
- **[Pail](https://laravel.com/docs/pail)** - Lecteur de fichiers de log

### Bibliothèques Supplémentaires
- **Carbon** - Manipulation date/heure
- **Faker** - Génération de données de test
- **Mockery** - Framework de mocking pour tests

---

## 🧪 Tests

```bash
# Exécuter tous les tests
php artisan test

# Exécuter un fichier de test spécifique
php artisan test tests/Feature/AuthTest.php

# Exécuter avec couverture
php artisan test --coverage
```

### Structure des Tests
```
tests/
├── Feature/
│   ├── AuthTest.php
│   └── ProfileTest.php
└── Unit/
    └── ExampleTest.php
```

---

## 🤝 Contribution

Nous accueillons les contributions ! Veuillez suivre ces étapes :

1. **Fork** le dépôt
2. **Créer** une branche de fonctionnalité (`git checkout -b feature/fonctionnalite-incroyable`)
3. **Commiter** vos changements (`git commit -m 'Ajouter fonctionnalite incroyable'`)
4. **Pousser** vers la branche (`git push origin feature/fonctionnalite-incroyable`)
5. **Ouvrir** une Pull Request

### Directives de Développement
- Suivre les standards de codage PSR-12
- Écrire des tests pour les nouvelles fonctionnalités
- Mettre à jour la documentation si nécessaire
- Utiliser des messages de commit significatifs

---

## 📄 Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.

---

## 👥 Auteurs

- **Saddani Hatim** - *Travail initial* - [GitHub](https://github.com/saddani-hatim)

Voir aussi la liste des [contributeurs](https://github.com/saddani-hatim/systeme-gestion-cabinet/contributors) qui ont participé à ce projet.

---

## 🙏 Remerciements

- [Laravel](https://laravel.com/) - Le framework PHP qui rend le développement agréable
- [Tailwind CSS](https://tailwindcss.com/) - Un framework CSS utility-first
- [Alpine.js](https://alpinejs.dev/) - Un framework robuste et minimal pour composer le comportement JavaScript
- [Heroicons](https://heroicons.com/) - De belles icônes SVG faites à la main

---

## 📞 Support

Si vous avez des questions ou besoin d'aide :

- 📧 **Email** : support@systeme-gestion-cabinet.com
- 🐛 **Issues** : [GitHub Issues](https://github.com/saddani-hatim/systeme-gestion-cabinet/issues)
- 📖 **Documentation** : [Wiki](https://github.com/saddani-hatim/systeme-gestion-cabinet/wiki)

---

<div align="center">

**Fait avec ❤️ pour une meilleure gestion des soins de santé**

⭐ Mettez une étoile à ce dépôt si vous le trouvez utile !

</div>

