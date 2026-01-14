
## Prérequis

- Docker & Docker Compose installés
- OpenSSL pour générer les certificats locaux

## Setup local (dev)

1. Générer les certificats SSL pour Traefik :
sh docker/traefik/generate-certs.sh

2. Lancer Docker :
docker compose up -d

3. Accéder au projet :
https://symfonydesk.docker.localhost

⚠️ Certificat auto-signé, ignorez l’avertissement du navigateur.