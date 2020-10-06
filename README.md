## Codeigniter User Panel Management / BSEU

TESTED ON => XAMPP v3.2.4 (Web Server with Apache/2.4.41, PHP/7.1.33, MySQL/mysqlnd 5.0.12-dev)

## What is the project about?

BSEU is a management panel with role based application, using CodeIgniter(PHP MVC Framework).
There are tasks in the BSEU user management system. These tasks can only be create by System Admin and Manager. Employees can only complete tasks. All of these operations can be done according to the roles of the users. A user can not perform an action without a role.

![1.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519641377/iejzll6jjdyw5hlxcd9x.png)

As an example, a Employee can not add tasks, but the Manager can add tasks. However, the Manager can not view logs, but Admin can view logs.

I've made 3 roles (Admin, Manager, Employee ) and I've created a controller for all of them (Admin, Manager, User) , so you can edit as you like and you can add or reduce fewer roles in more places.

I added a detailed log system to the system. You can import and delete backups of these logs, as well as restore an old backup to the system for control.

![3.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519641542/fhxbgjxwpsdtxom6be7m.png)

The log page contains an entry showing the size of the table. If this size exceeds 1 GB (1000 MB), automatic backup and deletion  will be done.

### Technology Stack
* [CodeIgniter](https://codeigniter.com) (PHP MVC Framework)
* XAMPP v3.2.4 (Web Server with Apache/2.4.41, PHP/7.1.33, MySQL/mysqlnd 5.0.12-dev )

### Roadmap
We can use this panel in all CodeIgniter projects. It can adapt to any kind of project by changing its roles and functions. This will save us from the start of a project management panel. With your contributions, we can create a management panel for our projects.

### Features
* Login (All roles)

![4.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519642591/hkzknmouyqnt7ravh9bs.png)

* Logout (All roles)

![5.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519642703/ztb6tolajpcqtbusxwgd.png)

* Admin Panel (Admin)

![8.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643143/u6f6gym4agss35khgkoi.png)

* Change Password (All roles)

![6.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519642862/v1g1iarvu011mdt0sknq.png)

* Last login date and time (All roles)

![7.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519642968/is4gogl6jjnqsl9zwtcn.png)

* Dashboard (All roles) (Number of tasks,finished tasks,users,logs)

![8.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643143/u6f6gym4agss35khgkoi.png)

* Access Denied Page (Manager/Employee)

![9.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643437/jciy5jug7hpghqfpalb0.png)

* Tasks / Add Task / Edit Task / Delete Task / Task Completion (Admin or Manager)

![10.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643657/i8xwgkhxcu6gwyfwqxqj.png)

* Users / Add User / Edit User / Delete User / User Logs (Admin)

![11.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643818/py9sjzobuf07qlak6a2l.png)

* Log History  / Log History  Export (backup) and Delete (Admin)

![12.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519643985/ym2rqrka79eyydscfgcu.png)

* Log History  Import / Log History Control  (Admin)

![13.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519644138/z76grflkxe4y2rp7cgpg.png)

* Manager Panel (Manager)

![14.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519644277/msi4pjyrbvbrzpphobou.png)

* Employee Panel (Employee)

![15.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519644421/c4dwvjbrnv9ac7vrkfaf.png)

* Employee Tasks (Only task completion)

![16.png](https://res.cloudinary.com/hpiynhbhq/image/upload/v1519644627/qcdxneltovxmy6ltajas.png)

### Install

Download [BSEU via github](https://github.com/pars11/Codeigniter-User-Panel-Management) or clone your computer.

Clone:

``` language
cd projectfolder

git clone https://github.com/pars11/Codeigniter-User-Panel-Management
```

Open phpmyadmin and create a database with name "cias" and import the file "cias.sql" in that database.

Copy BSEU into your root directory.  

Example : 
``` language

C:\xampp\htdocs\Codeigniter-User-Panel-Management
```

The login screen will appear.

To login, I am going to provide the user email and password below.

Admin : admin@ornek.com / 123456

Manager: yonetici@ornek.com / 123456

Employee : calisan@ornek.com / 123456

### How to contribute?
You can reach me send message on the discord (pars11) or email (sametay153@gmail.com).If you want to make this application better, you can make a Pull Request.

[Github](https://github.com/pars11/Codeigniter-User-Panel-Management)

[Thanks to kishor10d for first commit](https://github.com/kishor10d/Admin-Panel-User-Management-using-CodeIgniter)
