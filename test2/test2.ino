/*THIS TUTORIAL USED GSM SIM900A MINI V3.9.2
 
  Connect 5VT to D9 and 5VR to D10
  Feed GSM SIM900A with Arduino's 5V

  Code by IDAYU SABRI - MYBOTIC
*/

#include <SoftwareSerial.h>
SoftwareSerial mySerial(9, 10);
char msg;
char call;
char nodeNumber[] = "Node352";
int height = 2;
int floorRate = 3;

void setup()
{
  mySerial.begin(9600);   // Setting the baud rate of GSM Module  
  Serial.begin(9600);    // Setting the baud rate of Serial Monitor (Arduino)
  Serial.println("GSM SIM900A BEGIN");
  Serial.println("Enter character for control option:");
  Serial.println("h : start");
  
  delay(100);
}

void loop()
{  
  if (Serial.available()>0)
   switch(Serial.read())
  {
    case 'h':
      gsm_connect_gprs();
	  delay(2000);
	  gsm_send_data();
      break;
    
  }
 if (mySerial.available()>0)
 Serial.write(mySerial.read());
}

void gsm_connect_gprs(void)
{
	mySerial.println("AT+CREG?\r\n");
	delay(2000);
	mySerial.println("AT+CGATT=1\r\n");       // Attach to gprs
    delay(2000);
    mySerial.println("AT+SAPBR=1,1\r\n");     // Open a GPRS context
    delay(2000);
    mySerial.println("AT+SAPBR=2,1\r\n");
}

void gsm_send_data(void)
{
	mySerial.println("AT+HTTPINIT\r\n");                  // Initialize HTTP
    delay(1000);
    mySerial.println("AT+HTTPPARA=\"URL\",\"http://INSERT_YOUR_SERVERE_HERE/add_temp.php?nodeNumber=+"); // Send PARA command
    delay(50);
    mySerial.println(nodeNumber);   // Add temp to the url
    delay(50);
    mySerial.println("+&height=+");  
    delay(50);
    mySerial.println(height);   // Add humidity to url 
    delay(50);
	mySerial.println("+&floorRate=+");  
    delay(50);
    mySerial.println(floorRate);   // Add humidity to url floorRate
    delay(50);
    mySerial.println("\"\r\n");   // close url
    delay(2000);
    mySerial.println("AT+HTTPPARA=\"CID\",1\r\n");    // End the PARA
    delay(2000); 
    mySerial.println("AT+HTTPACTION=0\r\n");
    delay(3000);    
    mySerial.println("AT+HTTPTERM\r\n");
    delay(3000);   
	
}
