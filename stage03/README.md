# README

- Student Name: Peter Rakov
- Student Mail: prako013@uottawa.ca
- Student ID: 300302308

**Deliverable 03**

| **Mark** | Description                                                  |
| -------- | ------------------------------------------------------------ |
| 2.0      | Server Technology integrated (e.g. PHP, Elixir, Go) including library and frameworks |
| 2.0      | Database Technology integrated (e.g. MySQL, Postgres, Redis, etc) |
| 1.0      | Automated test framework in place                            |
| 2.0      | Deployment / Upgrade Scripts working                         |
| 1.0      | Refined HTML/CSS + UI Design System                          |
| 1.0      | Front-end (mock) interactivity using JavaScript              |
| 1.0      | README.md updated with installation / deployment instructions |
| /10      |                                                              |

**Server Technology integrated (e.g. PHP, Elixir, Go) including library and frameworks**

PHP v8.1; mysqli server technology integrated. 

**Database Technology integrated (e.g. MySQL, Postgres, Redis, etc)**

MySQL database technology implemented.

**Automated test framework in place**

Started working with PHP unit. Didn't manage to complete the automation testing. **-1**

**Deployment / Upgrade Scripts working**

*Deployment completed* - tarball of the entire project available for deployment.

*Upgrade Scripts* - Was not able to fully integrate with SQL data base at the time; planning to integrate feature in subsequent releases. **-1**

**Refined HTML/CSS + UI Design System**

Color pallet changed to light mode.

| ![alert](https://user-images.githubusercontent.com/97912443/157057030-851e32eb-4707-4682-be24-63d4f57e5c21.png) |
| ------------------------------------------------------------ |
| ![textbox1](https://user-images.githubusercontent.com/97912443/157057026-906987d8-d5d2-4030-9d32-55595ae1a675.png) |
| ![text](https://user-images.githubusercontent.com/97912443/153522240-b8486d74-df6b-471d-a045-96bd5c61cb95.png) |
| ![button](https://user-images.githubusercontent.com/97912443/157057023-2f3d90e4-9fc2-4d79-90a6-818515652850.png) |
| ![greennavbar](https://user-images.githubusercontent.com/97912443/157057025-4e7f27ee-a253-496a-ba7c-0b9f12ecb0f1.png) |

Icons and glyphs remain font-awesome.

Ubuntu Fonts used.

**Front-end (mock) interactivity using JavaScript**

Front-end interactivity using JavaScript widely implemented inline in HTML and PHP files. JavaScript used mainly in the CRUD part of the web application for various display purposes.

**README.md updated with installation / deployment instructions**

Demonstration of deployment and usage of database (MariaDB - aka. MySQL for Linux), server (PHP, Apache) and the usage of the Web Interface for the Manipulation of the database running locally.

![Peek 2022-03-03 09-42](https://user-images.githubusercontent.com/97912443/156588580-b1e2b93c-df63-4d9e-83f7-67e70211b307.gif)

**Requirements:**

1. MySQL installed and daemon running.
2. Apache web server install and daemon running (httpd).
3. PHP installed.

**Instructions for usage:**

1. MySQL credentials in config.php. Credentials used:

   ```txt
   username: crud
   password: password
   ```

2. Login into MySQL.

   ```bash
   mysql -u crud -p
   ```

3. Create database.

   ```sql
   CREATE DATABASE demo;
   ```

4. Switch to the newly created database.

   ```sql
   USE demo;
   ```

5. Create table.

   ```sql
   CREATE TABLE employees (
       id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
       name VARCHAR(100) NOT NULL,
       address VARCHAR(255) NOT NULL,
       salary INT(10) NOT NULL
   );
   ```

6. Open new terminal. Locate the project tarball, extract it and cd into it.

   ```bash
    cd project-bobrix_project/
   ```

7. Run PHP server.

   ```bash
   php -S localhost:4000 
   #or any other open port you wish (NOT RESERVED BY THE KERNEL).
   ```

8. Open Browser. Enter your server location in the URL bar. For ex. https://localhost:4000/index.html.

9. The CRUD is in the service records page.

**Updates and Modifications**

1. The color scheme was updated to a light version.
2. Addition of a PHP server & MySQL backend.
3. Addition of JavaScript front end to render and modify choices in the CRUD application.
4. 100% conversion to Bootstrap V.4 for CSS.

**Git Log**

```html
commit b02dd24e913ff735fd0a4f2cb8aa288f63aa9251
Author: PeterRakov <prako013@uottawa.ca>
Date:   Thu Mar 3 10:08:59 2022 -0500

    Working on the README

commit 8c7cf64b1683aef7d7ca4f70863e0d11464282a6
Author: PeterRakov <prako013@uottawa.ca>
Date:   Thu Mar 3 09:05:12 2022 -0500

    Added tar file for deployment

commit 82bacb0662eed2bfe83428059d44fc7861a6d5bf
Author: PeterRakov <prako013@uottawa.ca>
Date:   Thu Mar 3 09:01:54 2022 -0500

    php server updated

commit 943eb92c50d6a0f09f325b47d0d35167175678d2
Author: PeterRakov <prako013@uottawa.ca>
Date:   Tue Mar 1 16:31:14 2022 -0500

    php server integration

commit bd9711aef74577b13c30837a3cbeb5b707ce2f2d
Author: PeterRakov <prako013@uottawa.ca>
Date:   Tue Mar 1 16:20:30 2022 -0500

    Updating contacts page -> bootstrap 4

commit e58ca8d1657355af331585f389afb8b5a7d96918
Author: PeterRakov <prako013@uottawa.ca>
Date:   Tue Mar 1 15:48:07 2022 -0500

    Updating git page -> bootstrap 4

commit 6af51ff1c83d795a5de681c3baa0c1c522adba74
Author: PeterRakov <prako013@uottawa.ca>
Date:   Tue Mar 1 15:37:21 2022 -0500

    Updating Aglm page -> bootstrap 4

commit 31ab9f435922a0fb9d7811b58297ba95c12492e6
Author: PeterRakov <prako013@uottawa.ca>
Date:   Tue Mar 1 14:59:45 2022 -0500

    Converting to bootstrap

commit 9653262f6d06a4d4055d21c916a800e7f0b1844b
Author: PeterRakov <prako013@uottawa.ca>
Date:   Tue Mar 1 13:59:50 2022 -0500

    Working on SQL integration

commit 2b67c8e018e1b456a635ec0a8de75ec128d64774
Author: PeterRakov <97912443+PeterRakov@users.noreply.github.com>
Date:   Thu Feb 10 20:28:19 2022 -0500

    Merge pull request #1 from professor-forward/deliverabl01
    
    Deliverabl02

```

**Deliverable 02** - All source code can be found in stage02 directory.

| **Mark** | Description                                        |
| -------- | -------------------------------------------------- |
| 3.0      | Mock-Ups in HTML / CSS                             |
| 1.0      | Color Pallet                                       |
| 1.0      | Fonts and Type Scale                               |
| 1.0      | Icons (and other images)                           |
| 1.0      | Buttons and Form Elements                          |
| 1.0      | UI components (e.g. popups)                        |
| 2.0      | Updated README.md to document UI Design System     |
| 1.0      | Git usage (commit messages, all students involves) |
| /10      |                                                    |

**Mock-Ups in HTML / CSS**

![forms](https://user-images.githubusercontent.com/97912443/153520654-c19b1929-a160-48b7-8058-2a9183fcd096.png)
![index](https://user-images.githubusercontent.com/97912443/153520659-feff6e02-1cca-4256-aa9c-ae887f0ed89a.png)
![menu](https://user-images.githubusercontent.com/97912443/153520664-6f74663f-7d65-4e4e-a608-eae57d7eac2d.png)
![contact](https://user-images.githubusercontent.com/97912443/153520668-b76232bf-81a4-467c-a91b-f686be960333.png)



**Colour Palette**

| ![dark grey](https://user-images.githubusercontent.com/97912443/153522237-040f7e97-fd97-49b8-a9c0-4ce6b08f57e9.png) |
| ------------------------------------------------------------ |
| ![grey](https://user-images.githubusercontent.com/97912443/153522239-8c2d6142-565f-4bf0-8641-71016ebdbfdb.png) |
| ![text](https://user-images.githubusercontent.com/97912443/153522240-b8486d74-df6b-471d-a045-96bd5c61cb95.png) |
| ![green](https://user-images.githubusercontent.com/97912443/153522238-8ef5f99e-7c3b-43ad-8638-95ccf03c62dc.png) |

**Fonts and Type Scale**

Font being Rendered **globally**: [Ubuntu](moz-extension://3051589e-7a68-47fc-b094-0f2073553710/data/window/index.html?mode=window#) 100.0% (remote)

| Area of Usage | Font Size |
| ------------- | --------- |
| Navbar        | 16.8px    |
| Header #2     | 32px      |
| Header #3     | 18.72px   |
| Body/Footer   | 14px      |

**Icons (and other images)**

Font-awesome icons (hamburger menu's and navigation).

Custom images from the internet. All sources in the acknowledgments tab of the web application.

![404](https://user-images.githubusercontent.com/97912443/153523282-04a95efe-333b-44ed-b0ff-5f2c77114baa.png)


**Buttons and Form Elements**

Buttons, popups and indexing implemented in the info tab as well as in the documentation tab.

<img src="https://user-images.githubusercontent.com/97912443/153520664-6f74663f-7d65-4e4e-a608-eae57d7eac2d.png" alt="menu" style="zoom:80%;" />

**UI components**

Widely implemented. 

Navbars. Page indexing. Buttons. Sidebar. HTML. External CSS stylesheet.

**Updated README.md to document UI Design System**

You are reading the README :)

**Git usage (commit messages, all students involves)**

```css
commit 94a46cb9e3daff320a8e0ec8828f880f72405118 (HEAD -> deliverabl01)
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:22:23 2022 -0500

    Consolidated work on Design System

commit d412b69df43a320b142175be2cea2e8db3431447
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:11:36 2022 -0500

    Consolidated work on Fonts

commit 65cb94c9783843b8916807e04283b29150dd0d6d
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:09:09 2022 -0500

    Playing with font scaling

commit b3689e787010176bc8b8e661951c915a5a71a1cc
Author: Peter Rakov <prako013@uottawa.ca>
:...skipping...
commit 94a46cb9e3daff320a8e0ec8828f880f72405118 (HEAD -> deliverabl01)
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:22:23 2022 -0500

    Consolidated work on Design System

commit d412b69df43a320b142175be2cea2e8db3431447
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:11:36 2022 -0500

    Consolidated work on Fonts

commit 65cb94c9783843b8916807e04283b29150dd0d6d
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:09:09 2022 -0500
commit 94a46cb9e3daff320a8e0ec8828f880f72405118 (HEAD -> deliverabl01)
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:22:23 2022 -0500

    Consolidated work on Design System

commit d412b69df43a320b142175be2cea2e8db3431447
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:11:36 2022 -0500

    Consolidated work on Fonts

commit 65cb94c9783843b8916807e04283b29150dd0d6d
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:09:09 2022 -0500

    Playing with font scaling

commit b3689e787010176bc8b8e661951c915a5a71a1cc
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 20:03:57 2022 -0500

    Finding out the right color scheme

commit 88ab9e76cc29addb32392b00b3e9926f1328a1fb
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 19:29:30 2022 -0500

    Playing around with footers, forms, borders and updating README

commit 93a2aead987e3cabe5c076ccdc26e8bd9100503b
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 19:09:53 2022 -0500

    Playing around with articl blog round borders

commit ad074d0c20aee2f8518cf4696997e1416ce8235e
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 19:01:17 2022 -0500

    Substantial work done offline - commiting changes

commit 685e707760540c5d1e20ea3af45a835fca269fbd
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 18:53:33 2022 -0500

    Working with initial css documents

commit 9e80c10270167b24946d413eeaa8246c2329964f
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Thu Feb 10 18:53:06 2022 -0500

    Working with initial html documents

commit 228f1c03439c40c532efdadeef22a7eb76a3608a (origin/main)
Author: PeterRakov <prako013@uottawa.ca>
Date:   Sun Feb 6 13:36:58 2022 -0500

    Creating repo

commit 4a972d9fdd607fd71f27c6d3ab6bb6bc430673aa (main)
Author: Peter Rakov <prako013@uottawa.ca>
Date:   Mon Jan 31 09:50:39 2022 -0500

    README update
```
