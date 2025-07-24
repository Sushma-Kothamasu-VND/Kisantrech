import joblib
import pandas as pd
import sys

# Load the trained model and feature names
model = joblib.load('ML/crop_price_prediction/crop_price_model_rf_best.pkl') 

feature_columns = joblib.load('ML/crop_price_prediction/model_features_rf_best.pkl') 

# Get the input parameters as command line arguments
crop = sys.argv[1]
year = int(sys.argv[2])
month = int(sys.argv[3])
rainfall = float(sys.argv[4])

# Create a DataFrame with the input data
data = pd.DataFrame({
    'Crop': [crop],
    'Year': [year],
    'Month': [month],
    'Rainfall': [rainfall]
})

# One-hot encode 'Crop' variable
data = pd.get_dummies(data, columns=['Crop'], drop_first=True)

# Reorder columns to match the model's feature order
data = data.reindex(columns=feature_columns, fill_value=0)

# Predict the crop price
predicted_price = model.predict(data)

# Return the prediction as a string
print(f'Predicted Crop Price: ${predicted_price[0]:.2f}')
