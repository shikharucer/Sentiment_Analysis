
import pickle
from sklearn.feature_extraction.text import TfidfVectorizer
import numpy as np
import pandas as pd
from cleanDocument import clean_text

clf_new = open("classify.pickle","rb")
classify = pickle.load(clf_new)


tv = TfidfVectorizer(use_idf=True, min_df=0.0, max_df=1.0, ngram_range=(1,2),sublinear_tf=True, analyzer = clean_text)

doc = np.array(["This procuct is worst","Nice product","Not going to purchase it, waste of money","Satisfactory","Excellent"])

predict = classify.predict(tv.fit_transform(doc))

print(round(np.mean(predict)))
print(predict)
frame = list(zip(doc,list(predict)))
d_frame = pd.DataFrame(frame,columns = ["Review","Rating"])
print(d_frame)

clf_new.close()