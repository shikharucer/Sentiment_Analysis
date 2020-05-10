#!/usr/bin/env python
# coding: utf-8

#importing necessary modules 

import sys
import pickle
import numpy as np
import pandas as pd
from nltk.corpus import stopwords
from cleanDocument import clean_text
from sklearn.feature_extraction.text import CountVectorizer, TfidfVectorizer
from sklearn.naive_bayes import MultinomialNB

#reading the data

df = pd.read_csv("Amazon_Unlocked_Mobile.csv")

#creating training and test data-sets

df_5 = df[df["Rating"]==5]
df_5 = df_5[:24000]

df_4 = df[df["Rating"]==4]
df_4 = df_4[:24000]


df_3 = df[df["Rating"]==3]
df_3 = df_3[:24000]

df_2 = df[df["Rating"]==2]
df_2 = df_2[:24000]


df_1 = df[df["Rating"]==1]
df_1 = df_1[:24000]

frames = [df_1,df_2,df_3,df_4,df_5]
test = pd.concat(frames)
test = test.sample(frac = 1)

reviews = test['Reviews'].apply(str)
rating = np.array(test['Rating'])

train_x = reviews[:60000]
train_y = rating[:60000]

test_x = reviews[60000:120000]
test_y = rating[60000:120000]



#feature extraction 
#clean_text is module for text preprocessing

tv = TfidfVectorizer(use_idf=True, min_df=0.0, max_df=1.0, ngram_range=(1,2),sublinear_tf=True, analyzer = clean_text)   
tv_train_features = tv.fit_transform(train_x)
tv_test_features = tv.transform(test_x)



#applying algorithm

clf = MultinomialNB() 
classify = clf.fit(tv_train_features,train_y)



df_doc = pd.read_csv("Review.csv")
doc = df_doc["Review_Text"]
new_doc = tv.transform(doc)

predict = classify.predict(new_doc)

print(round(np.mean(predict)))
print(predict)
frame = list(zip(doc,list(predict)))
d_frame = pd.DataFrame(frame,columns = ["Review","Rating"])
print(d_frame)





