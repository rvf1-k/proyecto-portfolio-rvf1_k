# proyecto-portfolio-rvf1_k
Proyecto portfolio en PHP

Practica (Entrega trabajo 2 servicios en AWS) del modulo optativo 2CFSDAWLFP

## Servicios AWS creados

- Elastic Beanstalk
- Amazon S3

## Cómo recrear en un entorno de AWS

### Elastic Beanstalk

Crea una app en Elastic Beanstalk, añade de nombre a la app `portfolio-rvf1k`.

Plataforma a utilizar PHP.

En código de aplicación cargar el archivo de release [portfolio.zip
](https://github.com/rvf1-k/proyecto-portfolio-rvf1_k/releases/download/v3.0.0/portfolio.zip).


> [!IMPORTANT]
> Añade una etiqueta, ej: `v1`.

Pudes seleccionar los roles por defecto si no tienes configurados.

La siguientes configuraciones de redes, conf. escalado, monitoreo es opcional, por lo que podemos ir a revisión directamente.

Creamos la aplicación 👍

***
### Amazon S3

Buscamos el servicio de S3, creamos un bucket.

Le ponemos de nombre `portfolio-img-rvf1k`.

> [!CAUTION]
> Los buckets tienen nombre globales, por lo tanto deben ser unicos, si alguien ha creado un bucket activo de nombre `portfolio-img-rvf1k` no podrás crearlo, deberás poner otro, para reconfigurar los enlaces en html  [revisa aquí](#advertencia-bucket).

La configuración de bloqueo de acceso público, la desmarcamos y marcamos en el aviso para aceptarlo.

> [!NOTE]
> Esto es para hacer las imagenes que vamos a importar publicas.

Creamos el bucket, entramos en los detalles de este y añadimos el siguiente permiso a S3:

```{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Sid": "PublicRead",
      "Effect": "Allow",
      "Principal": "*",
      "Action": "s3:GetObject",
      "Resource": "arn:aws:s3:::portfolio-img-rvf1k/*"
    }
  ]
}
```
> [!WARNING]
> Si no has configurado el nombre al bucket como `portfolio-img-rvf1k` 
>
> `"Resource": "arn:aws:s3:::NOMBRE_DEL_BUCKET/*"`
> 
> Cambia esa linea con el nombre de tu bucket.

Tras crear el bucket seleccionalo, en la sección **objetos** cargamos la carpeta de release [img-upload.zip
](https://github.com/rvf1-k/proyecto-portfolio-rvf1_k/releases/download/v3.0.0/img-upload.zip) a S3.

> [!IMPORTANT]
> Descomprime el .zip primero y carga la carpeta `/img`

> [!WARNING]
> ###### Advertencia bucket
> Si no has configurado el nombre al bucket como `portfolio-img-rvf1k` y estás en la misma región `us-east-1` no funcionarán las imagenes, ya que no se generará el mimso enlace.
>
> Los buckets tienen nombre globales, por lo tanto deben ser unicos, si alguien ha creado un bucket activo de nombre `portfolio-img-rvf1k` no podrás crearlo.
> 
> Tendrás que cambiar los enlaces a estos en el html, con los que se han generado para ti.
> 
> Al cargar las img si pulsas sobre estas, tendrás un enlace para acceder a ellas, en mi caso un ejemplo el siguiente: 
> 
> `https://portfolio-img-rvf1k.s3.us-east-1.amazonaws.com/img/logo.png`
> 
> Dentro del html, se encuentran de esta forma:
> 
> `<img src="https://portfolio-img-rvf1k.s3.us-east-1.amazonaws.com/img/logo.png" alt="Logo Portfolio" class="img-fluid" style="max-width:450px;">`
>

***

### Elastic Compute Cloud (EC2)

Para ver la pagina, dirigimos a `EC2 > instancia > selecciona la instancia > detalles`, y copiamos el enlace de DNS público.

Que será algo parecido al siguiente: `https://ec2-184-72-241-133.compute-1.amazonaws.com`

Ya podremos acceder a la web 👍

> [!IMPORTANT]
> No olvides quitar `s` de `https`, ya que al no tener certificado se debe utilizar el protocolo `http`.
> 
> El enlace debe quedar tal que así: `http://ec2-184-72-241-133.compute-1.amazonaws.com`
