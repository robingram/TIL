# Node

## Generating a server

A feature of the Swagger Editor (http://editor.swagger.io/) is that it can generate client and server applications in a variety of languages, including node.js.

Once you have pasted the yaml file contents ino the editor select **Generate Server** > **Node.js** and you will be asked to download a zip file containing the server application. Start it by running:

    npm install
    node .

By default the server runs on `http://localhost:8080/` and the documentation can be accessed at `http://localhost:8080/docs/`.

### Return data

The file in the sever named `controllers/DefaultService.js` contains methods to respond to each of the endpoints. Each method defines an array called `examples` that will be used as the return data for the HTTP call. By default the array is populated with simple values but you can extend it to make the data more realistic.

There is a down side to extending this too much though. If you make big changes to the definition file and have to re-generate the server then you will lose all the changes you made.
