# Create file named config.json in project directory and insert MySQL Connection Credentials
echo "Creating package.json file"
printf "{\n" > package.json
printf "Hostname: "
read HNINPUT
printf "\t\"host\": \"$HNINPUT\"\n" >> config.json
printf "Username: "
read UNINPUT
printf "\t\"user\": \"$UNINPUT\"\n"  >> config.json
printf "Password: "
read -s PWINPUT
printf "\t\"password\": \"$PWINPUT\"\n" >> config.json
printf "\n"
printf "Database: "
read DBINPUT
printf "\t\"database\": \"$DBINPUT\"\n" >> config.json
printf "}\n" >> config.json
