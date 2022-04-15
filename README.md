# README - Simple CRUD App.

**<u>Implementation of features Server / Client / HTML / CSS</u>**

**Server** -> PHP v8.1; mysqli server technology integrated. 

**Client** -> MySQL database technology implemented. MySQL dump implemented for backups.

**HTML** -> 13 Web pages created in HTML. 

**CSS** -> Bootstrap used for all CSS with some inline CSS modification

**Bash** -> 6 bash executable files created to build the project, deploy the PHP server and database manipulation (backup, config, create and restore).

**<u>Software Documentation (installing, testing and developing the application)</u>**

**Requirements:**

1. MySQL installed and daemon running.

2. Apache web server install and daemon running (httpd).

3. PHP installed.

4. MySQL credentials in ~/bin/db/config.sh. MySQL user with the following credentials should be created for usage (if you are not comfortable with modifying the script):

   ```txt
   username: crud
   password: password
   ```

![main_functionality](https://user-images.githubusercontent.com/97912443/161666278-1e40d971-4eb5-466a-b68c-ae2dac0ced13.gif)

a) I want to install and run it

1. Download the source code.

   ```bash
   git clone https://github.com/professor-forward/project-bobrix_project
   ```

   or download the zip file.

2. Open terminal, locate the project and extract it (if zip file) and cd into the project directory.

   ```bash
   cd project-bobrix_project/
   ```

3. Run database script.

   ```bash
   cd /bin/db/ && ./create.sh
   ```

4. Run server.

   ```bash
   cd /bin && deploy.sh
   ```

5. Open Browser. Enter your server location in the URL bar. For ex. https://localhost:4000/index.html.

6. The CRUD is in the service records page.

b) I want to test that it works (automated and manual)

1. For **manual** testing, the crud is in the service records page. Data can be created, read, updated and deleted in the straightforward interface.
2. Started working with PHP unit. Didn't manage to complete the automation testing. 

c) I want to develop features against it.

1. Developing features against the application can be done by migrating through the backup and restore scripts.

   ```bash
   cd /bin/db && ./backup.sh
   ```

   ```bash
   cd /bin/db && ./restore.sh
   ```

**<u>Adherence to UI Design System</u>**

| ![alert](https://user-images.githubusercontent.com/97912443/157057030-851e32eb-4707-4682-be24-63d4f57e5c21.png) |
| ------------------------------------------------------------ |
| ![textbox1](https://user-images.githubusercontent.com/97912443/157057026-906987d8-d5d2-4030-9d32-55595ae1a675.png) |
| ![text](https://user-images.githubusercontent.com/97912443/153522240-b8486d74-df6b-471d-a045-96bd5c61cb95.png) |
| ![button](https://user-images.githubusercontent.com/97912443/157057023-2f3d90e4-9fc2-4d79-90a6-818515652850.png) |
| ![greennavbar](https://user-images.githubusercontent.com/97912443/157057025-4e7f27ee-a253-496a-ba7c-0b9f12ecb0f1.png) |

Icons and glyphs remain font-awesome.

Ubuntu Fonts used.

**<u>Seeding application with sample data</u>**

Seeding sample data can be done using the restore script which seeds from a sample backup in ~/db/backups.

```bash
cd /bin/db && restore.sh
```

**<u>Screenshots of available features.</u>**

![Screenshot_2022-04-04-10-21-28_1920x1080](https://user-images.githubusercontent.com/97912443/161666601-5172c946-10c8-44b4-84fa-d56fc1fe32ec.png)
![Screenshot_2022-04-04-10-21-51_1920x1080](https://user-images.githubusercontent.com/97912443/161666603-fba53f09-f7b2-4e9e-91d6-ef574c9ad1e9.png)
![Screenshot_2022-04-04-10-22-05_1920x1080](https://user-images.githubusercontent.com/97912443/161666606-1b3abc40-1bba-4317-babd-35185ae8c557.png)
![Screenshot_2022-04-04-10-22-44_1920x1080](https://user-images.githubusercontent.com/97912443/161666607-4a09c172-266e-4073-bff6-7958d4858e2b.png)

![Screenshot_2022-04-04-10-23-50_1920x1080](https://user-images.githubusercontent.com/97912443/161666782-d2145269-65b5-444e-9686-08bbc9d4f2cf.png)
![Screenshot_2022-04-04-10-24-11_1920x1080](https://user-images.githubusercontent.com/97912443/161666788-5dc14d31-39d0-49d4-b1d7-19a6e14413ad.png)
![Screenshot_2022-04-04-10-24-25_1920x1080](https://user-images.githubusercontent.com/97912443/161666790-017f6195-45dd-4a4c-8c5d-e88ae9fa4f09.png)
![Screenshot_2022-04-04-10-24-31_1920x1080](https://user-images.githubusercontent.com/97912443/161666791-da4a0afe-8ca3-43c1-8f60-2bab1837fb9b.png)


