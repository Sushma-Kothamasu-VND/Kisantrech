import pandas as pd
from sklearn.model_selection import train_test_split, GridSearchCV
from sklearn.impute import SimpleImputer
from sklearn.ensemble import RandomForestRegressor
from sklearn.metrics import mean_squared_error, r2_score
import joblib

# Load datasets
crops = [
   'ML/crop_price_prediction/Maize.csv',
    'ML/crop_price_prediction/Paddy.csv',
  'ML/crop_price_prediction/Soyabean.csv',
    'ML/crop_price_prediction/Wheat.csv',
    'ML/crop_price_prediction/Jute.csv'
]  # Replace with your actual file names
crop_names = ['Maize', 'Paddy', 'Soyabean', 'Wheat', 'Jute']  # Corresponding crop names

# Combine datasets
data_list = []
for crop, name in zip(crops, crop_names):
    df = pd.read_csv(crop)
    df['Crop'] = name  # Add a column for crop name
    data_list.append(df)

# Concatenate all dataframes into a single dataframe
data = pd.concat(data_list, ignore_index=True)

# Preprocess the data
data['Date'] = pd.to_datetime(data['Year'].astype(str) + '-' + data['Month'].astype(str) + '-01')
data.set_index('Date', inplace=True)

# Select features and target variable
features = data[['Year', 'Month', 'Rainfall', 'Crop']]
target = data['WPI']

# Handle missing values
imputer = SimpleImputer(strategy='mean')
features[['Year', 'Month', 'Rainfall']] = imputer.fit_transform(features[['Year', 'Month', 'Rainfall']])

# Encode categorical variable 'Crop'
features = pd.get_dummies(features, columns=['Crop'], drop_first=True)

# Split the dataset into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(features, target, test_size=0.2, random_state=42)

# Define the parameter grid for GridSearchCV
param_grid = {
    'n_estimators': [100, 200, 300],
    'max_depth': [None, 10, 20],
    'min_samples_split': [2, 5, 10],
    'min_samples_leaf': [1, 2, 4]
}

# Initialize the Random Forest model
model_rf = RandomForestRegressor(random_state=42)

# Perform GridSearchCV to find the best combination of parameters
grid_search = GridSearchCV(estimator=model_rf, param_grid=param_grid,
                           scoring='neg_mean_squared_error', cv=5, verbose=1)
grid_search.fit(X_train, y_train)

# Get the best model from GridSearchCV
best_model_rf = grid_search.best_estimator_

# Save the trained model and features
joblib.dump(best_model_rf, 'ML/crop_price_prediction/crop_price_model_rf_best.pkl') 
joblib.dump(features.columns, 'ML/crop_price_prediction/model_features_rf_best.pkl')

# Make predictions
y_pred_rf_best = best_model_rf.predict(X_test)

# Evaluate the model
mse_rf_best = mean_squared_error(y_test, y_pred_rf_best)
r2_rf_best = r2_score(y_test, y_pred_rf_best)

