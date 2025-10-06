# Sae5_Jardin_de_Cocagne


-Première esquisse:

- creation du projet git ✅ fait le 22 septembre
- Mise en place d'un symfony ✅ fait le 30 septembre 2025
- mise en place de docker ✅ fait le 3 octobre 2025 
- creation d'un docker compose ✅ fait le 3 octobre 2025 
- intitialisation de la bdd dans le .env ✅ fait le 3 octobre 2025 
- creation d'un fichier nginx .conf ✅ fait le 3 octobre 2025 
- remplissage BDD avec schema.sql ( probleme avec make migration )✅ fait le 3 octobre 2025 
    ```bash 
    Get-Content .\schema.sql | docker exec -i symfony_db mysql -usymfony -psymfony jardins
    ```
    test: 
    ```bash 
    docker exec -it symfony_db mysql -usymfony -psymfony jardins -e "SHOW TABLES;"

    docker exec -it symfony_db mysql -usymfony -psymfony jardins -e "SELECT COUNT(*) FROM depot;"

    ```

- creation d'une page d'acceuil  ✅ fait le 3 octobre 2025 
- creation d'une page depot pour voir la BDD/ en cours d'execution le 06/10/25

Après Brainstorm d'équipe :

-Ajout d'un calendrier
-Ajout d'une Carte interactive
-Ajout des abonnements
-Ajout de différents rôles selon tarifs de souscription
