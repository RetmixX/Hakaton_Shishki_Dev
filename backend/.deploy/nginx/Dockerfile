FROM nginx:1.23-alpine

COPY ./backend/.deploy/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY ./backend/laravel /app

CMD ["nginx", "-g", "daemon off;"]