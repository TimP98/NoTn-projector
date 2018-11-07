import ftplib
import time
from ftplib import FTP

#Creates the file and grabs user input
#Barcode scanner has to be set up as keyboard
#Manual http://attachments.content4us.com/datasheets/MANUAL_CMP-BARSCAN10_PROGRAMMING.PDF

while True:
    filename = "barcode.txt"
    input_character = raw_input("Scan een item: ")

    #Writes user input to file and closes after
    with open (filename, "w") as f:
        f.write (input_character)
        f.close()

    if input_character == "00001" or input_character == "00002":
    # Function that connects to the FTP server and sends a file.
        def sendFile():
            with open("cred.txt") as f:
                first_line = f.readline()
            username = "i344854"
            password = first_line
            
            try:
                session = ftplib.FTP('hera.fhict.nl', username, password)     # Connect to FTP
                file = open('barcode.txt','rb')                              # File to send
                session.storbinary('STOR '+'barcode.txt', file)              # Send the file
                print('File has been uploaded')                           # Close file and FTP
                file.close()                                                 
                time.sleep(3)
                session.quit()
            except Exception as e:    
                print(e) 
    else:
        exit()   

    sendFile()

