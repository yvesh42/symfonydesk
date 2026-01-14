
## Prérequis

- Docker & Docker Compose installés
- OpenSSL pour générer les certificats locaux

## Setup local (dev)

1. Générer les certificats SSL pour Traefik :
sh docker/traefik/generate-certs.sh

2. les droits
sudo setfacl -R -m u:$(whoami):rwx,u:www-data:rwx site && sudo setfacl -d -R -m u:$(whoami):rwx,u:www-data:rwx site

3. l'env
mv site/.env{.dev,}

4. Lancer Docker :
docker compose up -d

5. Accéder au projet :
https://symfonydesk.docker.localhost

⚠️ Certificat auto-signé, ignorez l’avertissement du navigateur.