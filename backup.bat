...JANGAN DITUTUP SEDANG BACKUP DATA KHANZA...
cd C:\xampp\mysql\bin
mysqldump -uroot -h192.168.1.189 sik>D:\BACKUPSIK\sik_%date:~-4,4%%date:~-10,2%%date:~-7,2%_%time:~0,2%%time:~3,2%%time:~6,2%.sql