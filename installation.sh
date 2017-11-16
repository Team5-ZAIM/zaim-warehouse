# Script to automatically install Zaim onto a server

# Install Node.js and NPM
sudo apt-get install -y python-software-properties
curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
sudo apt-get install -y nodejs
sudo apt-get install -y npm

# Install Express from console
npm install express --save

# Install MySQL
npm install mysql --save

# Install cors
npm install cors

# Install body-parser
npm install body-parser

# Install ejs
npm install ejs

# Install serve-favicon'
npm install serve-favicon

# Install morgan
npm install morgan

# Install cookie-parser
npm install cookie-parser

# Create file named config.json in project directory and insert MySQL Connection Credentials
bash configfile.sh # Calls an external bash script to create config.sh (using user input)

# Command to start application
npm start
