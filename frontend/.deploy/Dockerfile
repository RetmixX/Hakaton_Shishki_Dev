FROM node:19-alpine

WORKDIR /app

COPY ../../frontend/hakaton-front/package*.json ./
RUN npm install

COPY ../../frontend/hakaton-front /app

EXPOSE 3000