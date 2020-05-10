#!/usr/bin/env python
# coding: utf-8

# In[ ]:


from nltk.corpus import stopwords
from nltk.stem import PorterStemmer
import nltk
import string
import re

word_net = nltk.WordNetLemmatizer()

stopword = set(stopwords.words('english'))

string.punctuation

ps = PorterStemmer()

def clean_text(text):
    #Special Character Removal
    text_lc = "".join([word.lower() for word in text if word not in string.punctuation]) 
    text_rc = re.sub('[0-9]+', '', text_lc)
    
    #Tokenization
    tokens = re.split('\W+', text_rc)   
    
    #Stop words removal and Stemming
    text = [ps.stem(word) for word in tokens if word not in stopword]
    
    #Text Lemmatization
    final_text = [word_net.lemmatize(word) for word in text]
    return final_text

