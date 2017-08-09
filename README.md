# [FOS:RASP-PHP] Injecting RASP (Runtime Application Self Protection) Security into Demo PHP Vuln App
 PHP Demo Vulnerable Application to test SQL injection vulnerability and patch it using RASP (Runtime Application Self-Protection) 

``
Before  going further please know few thing about RASP or watch my previous video about RASP (Runtime Application Self Protection) Security in python. refer the link mentioned below. This  is about RASP Model for php application.
``

## Requirement:

```
Vulnerable application: I have developed a Vulnerable PHP Application to demonstrate SQL Injection Vulnerability.
(Available in my Github repository)

RASP Model supported on PHP 5.6.x to 7.x 

RASP(Written for PHP Application): It just begining model to show how RASP works to  prevent SQL injection in PHP Application.
In upcoming future video, i will demonstrate RASP With other OWASP Top 10 Vulnerabilities.

Database:
Vulnerable php Application (Mysql):vuln-app (database name)
RASP Rule(Redis): Key:Value Concept (for better preformance)
```

## How it works?

```
#Monkey patching:
Whenever user enter input to the application which is actually interacting with database to fetch data, RASP Will get hooked and 
monkey patch the Class Mysqli  to extract the query statement.

#Lexer Analysis and Token Generation:
Once the Query is extracted and processed into lexer analysis, it generate a token structure for the query.

#Redis:
Generated token structure are insert into redis as SQL Rule. 

whenever user enter some input into application which is actually interacting with database to fetch data, at that 
it will be check the user input structure with the SQL rule in redis to decide whether to block the user or 
allow the query to execute:)

#Running demo vuln app with out RASP:
 SQL injection is possible.

#Running demo vuln app with RASP :

#Learning mode
First, Run RASP in learning mode to make it understand the user input structure for the application to works.

In my RASP model i have threshold limit for SQL rule as 2 for demo. so only 2 rule are allowed into redis.
Threshold limit for sql rule depend up on the application.

Once RASP  learned all possible input structure from user and when it reached its limit. 
RASP will automatically run in Defending mode Now When have rules ready to block SQL injection attack :)

```
 
## Demo Video
  
   [![Alt text](https://img.youtube.com/vi/41IVmaXmOz0/0.jpg)](https://www.youtube.com/watch?v=41IVmaXmOz0)

## Credits:
* FOS Team : [Fools of Security](https://www.youtube.com/channel/UCEBHO0kD1WFvIhf9wBCU-VQ)

## Support !
 Email address: umarfarookmech712@gmail.com | foolsofsecur1ty@gmail.com for more details. <br>
 Youtube: [Fool of Security](https://www.youtube.com/channel/UCEBHO0kD1WFvIhf9wBCU-VQ) <br>
 Blog: [Fools of security](https://fosecurity.blogspot.com) 

## Useful links:
1. [[FOS] RASP (Runtime Application Self Protection) Security](https://www.youtube.com/watch?v=5yKH3nFZ9lY)
2. [Kali](https://www.kali.org/)
3. [Demo Vulnerable App](https://github.com/umarfarook882/Tornado_Demo_Vuln_App)
4. [Sqreen](https://blog.sqreen.io/)

