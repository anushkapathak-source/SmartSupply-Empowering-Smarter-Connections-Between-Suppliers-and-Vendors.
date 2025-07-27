from flask import Flask, request, jsonify
from flask_cors import CORS
app = Flask(__name__)
CORS(app)  # 👈 Enable CORS

import pandas as pd
import joblib
from datetime import datetime



# Load model and encoders
model = joblib.load('price_forecasting_model.pkl')
product_encoder = joblib.load('product_encoder.pkl')
category_encoder = joblib.load('category_encoder.pkl')

@app.route('/predict-price', methods=['POST'])
def predict_price():
    try:
        data = request.get_json()

        # Extract input values
        product = data['product']
        category = data['category']
        demand_index = int(data['demand_index'])
        supply_index = int(data['supply_index'])
        date_str = data['date']  # expected format: 'YYYY-MM-DD'

        # Parse date
        date = datetime.strptime(date_str, '%Y-%m-%d')
        year = date.year
        month = date.month
        day = date.day

        # Encode product and category
        product_encoded = product_encoder.transform([product])[0]
        category_encoded = category_encoder.transform([category])[0]

        # Create input for model
        input_df = pd.DataFrame([[
            product_encoded,
            category_encoded,
            demand_index,
            supply_index,
            year,
            month,
            day
        ]], columns=['product_encoded', 'category_encoded', 'demand_index', 'supply_index', 'year', 'month', 'day'])

        # Make prediction
        predicted_price = model.predict(input_df)[0]
        return jsonify({'predicted_price': round(predicted_price, 2)})

    except Exception as e:
        return jsonify({'error': str(e)}), 400

if __name__ == '__main__':
    app.run(debug=True)
