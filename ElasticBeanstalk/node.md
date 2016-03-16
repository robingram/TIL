# Node.js on Elastic Beanstalk

## Running a server on a specific port

Elastic Beanstalk uses an environment variable to configure the port that the node application should use so it should be set in the code like this:

    var serverPort = process.env.PORT || 8080
