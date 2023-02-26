# crud php y mysql en docker

## cloname

```
git clone https://github.com/AlanCienega/crud_php.git
```

## crear archivo de variables de entorno

```
cp .env.example .env
```

## levanta el ambiente de trabajo

```
docker compose up
```

por alguna razon, tienes que entrar al contenedor y hacer ping a db, pero eso se arreglara en el siguiente commit. Primero entras a el contenedor web.

```
docker exec -it crud_php-web-1 /bin/bash
```

luego haces ping, lo detienes con ctrl+c y abres localhost en tu navegador.

```
ping db
```
