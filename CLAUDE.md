# del-web — Context per a Claude Code

## Organització
Web de **Docents en Lluita del País Valencià** (`docentsenlluitapv.org`).
Llengua principal: **català**. Futura: castellà.

## Stack tècnic
- **Laravel 13** + **Inertia.js** + **Vue 3** + **Tailwind CSS**
- **SQLite** (base de dades — decisió conscient per 20 usuaris màxim, elimina la necessitat de MySQL)
- **Spatie Laravel Permission** per a rols
- **Vite** per a assets

## Rols d'usuari
`admin`, `sindicatos`, `colaboradores`, `user`, `guest`

## Pàgines públiques
- Inici, Qui som, Notícies, Mobilitzacions, Contacte

## Estructura de fitxers clau
- `resources/js/Pages/` — components Vue de cada pàgina
- `resources/js/Layouts/` — PublicLayout, DashboardLayout
- `routes/web.php` — totes les rutes
- `app/Http/Controllers/` — Public/, Auth/, Dashboard/, Admin/
- `docker/start.sh` — arrenca PHP-FPM + Nginx, executa migracions automàticament
- `docker/nginx.conf` — configuració Nginx

## Infraestructura de producció
- **Easypanel** al servidor, autodeploy des de GitHub
- Repo: `https://github.com/joanmacs-efede/del-web`
- Branca de producció: `master`
- Volum persistent a Easypanel: `/var/www/database` (preserva la BD SQLite entre deploys)
- Domini: `https://web.docentsenlluitapv.org`

## Entorn local
- **Laravel Herd** (Windows) — preview a `http://del-web-laravel.test`
- Ruta local del projecte: `E:/DeL/VSCode/del-web/`
- El `.env` local usa SQLite i `APP_URL=http://del-web-laravel.test`

## Flux de treball acordat
1. Modificar fitxers localment
2. Previsualitzar a Herd
3. **Només fer `git push` quan l'usuari digui explícitament "ara fem deploy"**
4. El push dispara el deploy automàtic a Easypanel

## Decisions tècniques importants
- **SQLite en lloc de MySQL**: servidor de 1GB RAM, MySQL consumia ~400MB i no era viable. SQLite és suficient per a 20 usuaris.
- **Node 22** al Dockerfile: necessari per compatibilitat amb el `package-lock.json`
- **`mlocati/docker-php-extension-installer`** al Dockerfile: builds molt més ràpids que compilar extensions des de font
- Les migracions s'executen automàticament a `docker/start.sh` en cada deploy
- `NODE_OPTIONS=--use-system-ca` necessari en Windows amb Avast per a npm
