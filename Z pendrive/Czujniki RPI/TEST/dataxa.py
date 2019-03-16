import datetime
import smbus
import time
#today = datetime.date.today()
#print today
# Define some constants from the datasheet
 
DEVICE     = 0x23 # Default device I2C address
 
POWER_DOWN = 0x00 # No active state
POWER_ON   = 0x01 # Power on
RESET      = 0x07 # Reset data register value
 
# Start measurement at 4lx resolution. Time typically 16ms.
CONTINUOUS_LOW_RES_MODE = 0x13
# Start measurement at 1lx resolution. Time typically 120ms
CONTINUOUS_HIGH_RES_MODE_1 = 0x10
# Start measurement at 0.5lx resolution. Time typically 120ms
CONTINUOUS_HIGH_RES_MODE_2 = 0x11
# Start measurement at 1lx resolution. Time typically 120ms
# Device is automatically set to Power Down after measurement.
ONE_TIME_HIGH_RES_MODE_1 = 0x20
# Start measurement at 0.5lx resolution. Time typically 120ms
# Device is automatically set to Power Down after measurement.
ONE_TIME_HIGH_RES_MODE_2 = 0x21
# Start measurement at 1lx resolution. Time typically 120ms
# Device is automatically set to Power Down after measurement.
ONE_TIME_LOW_RES_MODE = 0x23
 
#bus = smbus.SMBus(0) # Rev 1 Pi uses 0
bus = smbus.SMBus(1)  # Rev 2 Pi uses 1

mm = 0
#day = 0
#month = 0
#year = 0
#hour = 0
#minute = 0
#second = 0

y=0
x=0
def convertToNumber(data):
  # Simple function to convert 2 bytes of data
  # into a decimal number
  return ((data[1] + (256 * data[0])) / 1.2)
 
def readLight(addr=DEVICE):
  data = bus.read_i2c_block_data(addr,ONE_TIME_HIGH_RES_MODE_1)
  return convertToNumber(data)

tday=datetime.date.today()
ttime=datetime.datetime.now()
day=(tday.day)
month=(tday.month)
year=(tday.year)
hour=(ttime.hour)
minute=(ttime.minute)
second=(ttime.second)

txt='.txt'
while True:

        logfile = open('/home/pi/Desktop/TEST/info/'+str(year)+'-'+str(month)+'-'+str(day)+'-'+str(hour)+'-'+str(minute)+str(txt),'a')
        print "Light Level : " + str(readLight()) + " lx"
        logfile.write(str(readLight()))
        logfile.write('\n')
        ttime=datetime.datetime.now()
        logfile.write(str(ttime.second))
        logfile.write('\n')
        logfile.close()
        time.sleep(0.5)

    
if __name__=="__main__":
   main()
