Faculty information portal is a web application created using PHP, MySQL, HTML5, CSS3, Vanilla JS and Bootstrap. 
For local setup and running on your PC, follow following steps-
1.	Install latest version of xampp on your PC.
2.	Run apache and mysql from its control panel. If there is any port clash issue, resolve it so that its runs without errors.
3.	Paste this folder under your xampp/htdocs folder
4.	Open localhost/phpMyAdmin, create a new database with the name rpunitpoly. Check user for the database- on localhost, username root and no password.
5.	Now import the given .sql file in the database. Make sure its imported without errors.
6.	Open localhost/facultyinformationportal, the homepage should be visible. Use admin login details- rafat and password-rafat1 and check the admin panel. Use the example teacher login details- username-17143 and password-12345 to check the teacher panel.
7.	For testing the send email feature for change password in this you need to have your environment SMTP setup. Use this to configure that- https://meetanshi.com/blog/send-mail-from-localhost-xampp-using-gmail/  If it doesn’t work, try changing the gmail hostname to its IP. If you are using gmail, you will have to turn on access to less secure apps to your gmail id.
8.	If you have any issues, please contact me.
User guide-
Teachers’ Data Application Guide

Enter your employee id and password. Default password is 12345. It is highly desirable to change your password after logging in.
 
After logging in, you will be able to see your data present in the Application. You need to verify and rectify the information at every step. 
 
If you have made any changes, make sure to press the submit button at the end of the page so that your data is saved. You may also submit at the last step after filling all the information till Step 7. 
 
To go to the next step you need to press the Next button. To Logout, press the Logout button. And once your data is verified you may go to the home page.

At Step 2, you can enter all your publication details. To add another paper, please click on Add papers button. To delete any existing papers, please click on the dustbin icon at the right most of that record. Please make sure the month and year are entered correct and only numbers else it would not be updated. Also make sure to spell National/International and Conference/Journal correctly while making the entry. Similarly you can enter Monograph details.
 
 
At Step 3, please enter any book details if present.
 
Similarly steps 4, 5, 6 and 7 need to be filled out.
 
 
 
 
Once all steps are reviewed and latest data is fed, please click on submit. If all data is fine and no changes made, then you may logout or Go to home page.
At the home page, you will find all your data fed and you can view and verify it. To update it, please press the update button.
To change password, you can click the Change password button on the home page.
 
To change your password you need to click on send OTP button. An OTP will be sent to your email. In case email is wrong or blank, please update it first in the system.
Once the OTP is received, kindly enter it in the input box. Also enter your current and new password, and click on reset password button to reset your password. You will be logged out and need to login using your new password now.
 

These are the features of the project available with this code. 
Further features which I have added for use for my University are mentioned below to give you an idea for your improvements-
1.	Current subjects of the teachers and students enrolled in them can be checked and updated.
2.	Class/subject teacher can access information of student of his/her class, access marks of student of all subject, mark attendance of his/her class and Class/subject teacher can feed remark for report card
3.	Add Chapter to each subject with deadline. Teacher entry on completion of chapter and Syllabus completion analysis
4.	Teacher daily activity entry and register.
5.	Security issues fixed-
•	Viewlogs displays all the logs. You might not want to display this information to general public.
•	Takebackup.php file downloads your entire database and possible confidential information by simply calling it via browser. Delete it if you don’t want this.
•	Password is stored as text in database. This makes it vulnerable to SQL injections. Use better ways or OpenSSL or consider this- https://medium.com/@longtermsec/how-to-handle-passwords-securely-in-your-apps-e8f182e189a
•	Sending Email- uses the old mail() function instead of a full-fledged mail library that supports SMTP-AUTH (and possibly encryption) for security. 
•	OTP expiry time is not set. Set it for better security.
Frontend test cases-
1.	Localhost/facultyinformationportal should open the homepage with two login boxes as shown in the user guide.
2.	Without putting in any credentials or only one credential, an error message is displayed.
3.	After putting in correct credential for the teacher login, it logs in to the smartwizard form display with fields pre populated.
4.	On clicking next, the next step appears everytime.
5.	 On clicking previous, the previous step appears everytime.
6.	On clicking logout here, the login window is loaded and session expires.
7.	On clicking go to homepage, a webpage with all the details exactly as in the submitted form displays as shown in the user guide.
8.	On this page, there are three buttons- Logout, update and change password.
9.	On click of logout, it logs out and displays the login box page
10.	On click of update, it goes back into the form update page.
11.	On click of change password, it loads the page for changing password.
12.	On this page, first the send otp button is displayed and then there are textboxes to input the otp, old and new password.
13.	On click of send otp button, an otp goes to the email of the user which is feeded in the system. It is important for all users to have an email in the system. Email will be sent to the first email only if multiple emails are entered comma separated.
14.	Once the correct otp, old and new passwords are entered, the system changes the password to the new one in the database and logs out the user.
15.	If the otp or old password is incorrect, an appropriate message is displayed.
Backend test cases- I have written down sample test cases which were used during building this project in plane list. You can use PHPUnit to cover most of the code with testcases and check yourself if you want to be using Test Driven Development.
16.	Everytime a teachers updates/deletes any data, a log regarding that is created in the mylogs table of the database.
17.	With url localhost/Facultyinformationportal/viewlogs, a list of all the logs is displayed.

Please suggest any bugs or improvements. With your help we can make this a better project.

