FROM php:8.0-alpine
ARG GITHUB_TOKEN

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer config --global github-oauth.github.com ${GITHUB_TOKEN}
RUN composer self-update

ENTRYPOINT ["composer"]
