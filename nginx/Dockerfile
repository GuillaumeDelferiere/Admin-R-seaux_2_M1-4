FROM nginx:latest
# Remplacer le latest 

# Installe les dépendances nécessaires (pour Debian-based nginx image)
RUN apt-get update && \
    apt-get install -y certbot python3-certbot-nginx && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Supprime la configuration par défaut de Nginx
RUN rm -f /etc/nginx/conf.d/default.conf

# Copie la configuration principale
COPY nginx.conf /etc/nginx/nginx.conf

# Copie les fichiers de configuration des virtual hosts
COPY conf/ /etc/nginx/conf.d/

# Copie les fichiers des sites
COPY www/ /var/www/www/
COPY blog/ /var/www/blog/

