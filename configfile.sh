# Create file named $CONFIGFILE in project directory and insert MySQL Connection Credentials
CONFIGFILE=config.json # Filename of config file
echo "Creating $CONFIGFILE file"
printf "{\n" > $CONFIGFILE
printf "Hostname: "
read HNINPUT
printf "\t\"host\": \"$HNINPUT\"\n" >> $CONFIGFILE
printf "Username: "
read UNINPUT
printf "\t\"user\": \"$UNINPUT\"\n"  >> $CONFIGFILE
printf "Password: "
read -s PWINPUT
printf "\t\"password\": \"$PWINPUT\"\n" >> $CONFIGFILE
printf "\n"
printf "Database: "
read DBINPUT
printf "\t\"database\": \"$DBINPUT\"\n" >> $CONFIGFILE
printf "}\n" >> $CONFIGFILE
