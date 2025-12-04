# proyecto-portfolio-rvf1_k
Proyecto portfolio en PHP

Practica (Entrega trabajo 2 servicios en AWS) del modulo optativo 2CFSDAWLFP

## Servicios AWS utilizados

- Elastic Beanstalk
- S3

### Cómo recrear en un entorno de AWS

#### Elastic Beanstalk

Crea una app en Elastic Beanstalk, añade de nombre a la app `portfolio-rvf1k`.

Plataforma a utilizar PHP.

En código de aplicación cargar el archivo de release xxxx.


> [!IMPORTANT]
> Añade una etiqueta, ej: `v1`.

Pudes seleccionar los roles por defecto si no tienes configurados.

La siguientes configuraciones de redes, conf escalado, monitoreo es opcional, por lo que podemos ir a revisión directamente.

Creamos la aplicación 👍

#### S3

Vamos a la sección de S3, creamos un bucket.

La configuración de bloqueo de acceso público, la desmarcamos y marcamos en el aviso que aceptamos.

> [!NOTE]
> Esto es para hacer las imagenes que vamos a importar publicas

Creamos el bucket, entramos en los detalles de este y añadimos el siguiente permiso a S3:

```{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Sid": "PublicRead",
      "Effect": "Allow",
      "Principal": "*",
      "Action": "s3:GetObject",
      "Resource": "arn:aws:s3:::NOMBRE_DEL_BUCKET/*"
    }
  ]
}
```

Tras esto, en la sección **objetos** cargamos la carpeta de release xxxx a S3.

> [!IMPORTANT]
> Descomprime el .zip primero y carga la carpeta `/img`

Al cargar las img si pulsas sobre estas, tendrás un enlace para acceder a ellas, en mi caso es el siguiente: 

##### EC2

Para ver la pagina, dirigimos a EC2 > instancia > selecciona la instancia > detalles, y copiamos el enlace de DNS público.

Que será algo parecido al siguiente: https://ec2-184-72-241-133.compute-1.amazonaws.com/

Y ya podremos acceder a la web.

> [!WARNING]
> No olvides quitar `s` de `https`, ya que no tiene certificado y debe utilizar el protocolo `http`.
> 
> El enlace debe quedar tal que así: http://ec2-184-72-241-133.compute-1.amazonaws.com/