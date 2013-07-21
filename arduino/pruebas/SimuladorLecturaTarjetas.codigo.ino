#define LED_GREED	11
#define LED_RED     12
#define LED_WHITE   10

#define BUTTON		2

int changeColor = 0;

void setup() {
  pinMode(LED_GREED,OUTPUT);
  pinMode(LED_RED,OUTPUT);
  pinMode(LED_WHITE,OUTPUT);
  pinMode(BUTTON,INPUT);

  digitalWrite(BUTTON,HIGH);

  Serial.begin(9600);
  delay(1);
}

int stateButton(){
	int buttonPressed = !digitalRead(BUTTON); 

	if(buttonPressed == HIGH){
		changeColor++;	
	}
	return changeColor;
}

void stateLed(int green, int red, int white){
	digitalWrite(LED_GREED,green);
	digitalWrite(LED_RED,red);
	digitalWrite(LED_WHITE,white);

	delay(5000);
}

void loop() {
  
  int selectedLed = stateButton();

  switch (selectedLed) {
    case 0:
    	stateLed(HIGH,LOW,LOW);
    	break;
    case 1:
      	stateLed(LOW,HIGH,LOW);
    	break;
    case 2:
    	stateLed(LOW,LOW,HIGH);
    	break;
    default:
      stateLed(LOW,LOW,LOW); 
      changeColor = 0;
  }
}