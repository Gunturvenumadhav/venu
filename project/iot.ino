
#include <SoftwareSerial.h>
#include <dht.h>
#define dht_apin 8
#define DHTTYPE DHT11
int flame_sensor_pin = 7 ;                                  
int flame_pin = HIGH ; 
int buzzer = 4;
int led = 6;
int smoke = A1;

SoftwareSerial SIM900(9,10); //Sim900 ports (Rx,Tx)
dht DHT;

double t;
double f;
double g;
double h;

void setup()
{
  pinMode(buzzer, OUTPUT);
  pinMode(led, OUTPUT);
   pinMode(smoke, INPUT);
  Serial.begin(9600);
  SIM900.begin(9600);
  delay(1000);
  
  Serial.println("DHT11 Data Display and Transmit");
  delay(3000);
  
  SIM900.println("AT");
  printSIM900Data();
  
  SIM900.println("AT+CGATT=1");
  delay(1000);
  printSIM900Data();
  
  SIM900.println("AT+SAPBR=3,1,\"CONTYPE\",\"GPRS\"");
  delay(1000);
  printSIM900Data();
  
  SIM900.println("AT+SAPBR=3,1,\"APN\",\"airtelgprs.com\"");
  delay(2000);
  printSIM900Data();
  
  
  SIM900.println("AT+SAPBR=1,1");
  delay(2000);
  printSIM900Data();
  
  SIM900.println("AT+HTTPINIT");  //activating the http connection
  delay(2000);
  printSIM900Data();
  
  SIM900.println("AT+HTTPPARA=\"CID\",1"); 
  delay(2000);
  printSIM900Data();
  delay(1000);
}

void loop()
{
  tempdata();
  delay(1000);

  
  SIM900.print("AT+HTTPPARA=\"URL\",\"http://projectd4.000webhostapp.com/?");
  SIM900.print("temp=");
  SIM900.print(t);
  SIM900.print("&humidity="); 
  SIM900.print(h);
  SIM900.print("&fire="); 
  SIM900.print(f);
  SIM900.print("&gas="); 
  SIM900.print(g);
  SIM900.println("\"");
  printSIM900Data();
  
  delay(15000);
   
  SIM900.println("AT+HTTPACTION=0");

  
  
}

void printSIM900Data()
{
    if(SIM900.available())
    Serial.println(SIM900.readString());
    
}

void tempdata()
{
   DHT.read11(dht_apin);
   h = DHT.humidity;
   t = DHT.temperature;
   int analogSensor = analogRead(smoke);
   g = analogSensor;
   
     if (g>170)
     {
       
      digitalWrite( buzzer,HIGH ) ;
     digitalWrite( led,HIGH ) ;
     }
     else
     {
      
         digitalWrite( buzzer,LOW ) ;
         digitalWrite( led,LOW ) ;
      }




 
   flame_pin = digitalRead ( flame_sensor_pin ) ;
   
     if (flame_pin == LOW )
     {
       
         f = LOW;
         
      digitalWrite( buzzer,HIGH ) ;
     digitalWrite( led,HIGH ) ;
     
     }
     else
     {
      
         f = HIGH;
         
      }

}
 

