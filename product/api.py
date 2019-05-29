# Product Service - proste API ktore bedzie zawieralo liste czegostam...

# Import framework
from flask import Flask
from flask_restful import Resource, Api

# Instantiate the app - lista w api
app = Flask(__name__)
api = Api(app)

class Product(Resource):
    def get(self):
        return {
            'products': ['Bulbulator 1', 'Bulbulator 2', 'Bulbulator 3', 'Bulbulator 4']
        }

# Create routes
api.add_resource(Product, '/')

# Run the application - odpala, ustawia porty itp
if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)