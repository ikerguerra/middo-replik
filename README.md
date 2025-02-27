# Middo Replik

Aplicación para prácticas de aprendizaje donde pruebo tecnologías y funcionalidades que desconozco.

## Workflows con GitHub Actions

Creación del fichero deploy.yml\
Para este código habría que configurar las variables en Settings/Secrets and Variables/Actions\
Automatización de un Despliegue Continuo en el servidor Infinity Free

### `deploy.yml`

````yaml
name: Deploy to InfinityFree

on:
  push:
    branches:
      - main  # Cambia esto si usas otra rama

jobs:
  web-deploy:
    name: 🎉 Deploy
    runs-on: ubuntu-latest
    steps:
    
    - name: 🚚 Get latest code
      uses: actions/checkout@v4
      
    - name: 📂 Sync files
      uses: SamKirkland/FTP-Deploy-Action@v4.3.5
      with:
        server: ${{ secrets.FTP_HOST }}
        username: ${{ secrets.FTP_USERNAME }}
        password: ${{ secrets.FTP_PASSWORD }}
        protocol: ftps
        server-dir: htdocs/
````
