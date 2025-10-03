# Sae5_Jardin_de_Cocagne



- creation du projet git ✅
- Mise en place d'un symfony ✅
- mise en place de docker ✅
- creation d'un docker compose ✅
- intitialisation de la bdd dans le .env ✅
- creation d'un fichier nginx .conf ✅
- remplissage BDD avec schema.sql ( probleme avec make migration )✅
    ```bash 
    Get-Content .\schema.sql | docker exec -i symfony_db mysql -usymfony -psymfony jardins
    ```
    test: 
    ```bash 
    docker exec -it symfony_db mysql -usymfony -psymfony jardins -e "SHOW TABLES;"

    docker exec -it symfony_db mysql -usymfony -psymfony jardins -e "SELECT COUNT(*) FROM depot;"

    ```

- creation d'une page d'acceuil  ✅
- creation d'une page depot pour voir la BDD 