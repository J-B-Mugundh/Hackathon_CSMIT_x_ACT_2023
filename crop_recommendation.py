import pyttsx3                                                           
import pandas as pd                                                       
from sklearn import preprocessing                                         # Scikit-learn is probably the most useful library for machine learning in Python. The sklearn library contains a lot of efficient tools for machine learning and statistical modeling including classification, regression, clustering and dimensionality reduction.
from sklearn.neighbors import KNeighborsClassifier                        
import numpy as np                                                        # Importing numpy to do stuffs related to arrays
import PySimpleGUI as sg                                                  # Importing pysimplegui for GUI.

excel = pd.read_excel('Crop.xlsx', header = 0)                            
print(excel)                                                             
print(excel.shape)                                                        # Checking out the shape of our data.

engine = pyttsx3.init('sapi5')                                            # Defining the speech rate, type of voice etc.
voices = engine.getProperty('voices')
rate = engine.getProperty('rate')
engine.setProperty('rate', rate-20)
engine.setProperty('voice',voices[0].id)


def speak(audio):                                                         # Defining a speak function. 
	engine.say(audio) 
	engine.runAndWait()


le = preprocessing.LabelEncoder()                                         # Various machine learning algorithms require numerical input data, so you need to represent categorical columns in a numerical column. In order to encode this data, you could map each value to a number. This process is known as label encoding, and sklearn conveniently will do this for you using Label Encoder.
crop = le.fit_transform(list(excel["CROP"]))                              # Mapping the values in weather into numerical form.

                                                    
NITROGEN = list(excel["NITROGEN"])                                         
PHOSPHORUS = list(excel["PHOSPHORUS"])                                    
POTASSIUM = list(excel["POTASSIUM"])                                       
TEMPERATURE = list(excel["TEMPERATURE"])                                  
HUMIDITY = list(excel["HUMIDITY"])                                        
PH = list(excel["PH"])                                                    
RAINFALL = list(excel["RAINFALL"])                                        


features = list(zip(NITROGEN, PHOSPHORUS, POTASSIUM, TEMPERATURE, HUMIDITY, PH, RAINFALL))                      
features = np.array([NITROGEN, PHOSPHORUS, POTASSIUM, TEMPERATURE, HUMIDITY, PH, RAINFALL])                        

features = features.transpose()                                                                                
print(features.shape)                                                                                          
print(crop.shape)                                                                                              

model = KNeighborsClassifier(n_neighbors=3)                                                                    
model.fit(features, crop)
sg.theme("darkred")
