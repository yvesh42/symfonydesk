
## Prérequis

- Docker & Docker Compose installés
- OpenSSL pour générer les certificats locaux

## Setup local (dev)

1. Générer les certificats SSL pour Traefik :
sh generate-certs.sh

2. les droits
sudo setfacl -R -m u:$(whoami):rwx,u:www-data:rwx site && sudo setfacl -d -R -m u:$(whoami):rwx,u:www-data:rwx site

3. l'env
cp site/.env{.dev,} && cp .env{.dev,}

4. les dependances
docker run --rm -v $(pwd)/site:/app -w /app composer install

5. Lancer Docker :
docker compose up -d


6. les assets
docker compose exec apache php bin/console importmap:install
# pour la prod docker compose exec apache php bin/console asset-map:compile
# pour le dev docker compose exec apache php bin/console sass:build --watch


7. Accéder au projet :
https://symfonydesk.docker.localhost

⚠️ Certificat auto-signé, ignorez l’avertissement du navigateur.