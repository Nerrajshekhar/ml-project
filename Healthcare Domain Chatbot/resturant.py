# -*- coding: utf-8 -*-
"""
Created on Wed Jul 24 16:29:44 2019

@author: nssingh
"""

import numpy as np
import matplotlib.pyplot as plt
import pandas as pd
import re
import nltk
nltk.download('stopwords')
from nltk.corpus import stopwords
from nltk.stem.porter import PorterStemmer
ps=PorterStemmer()

 

dataset=pd.read_csv('Restaurant_Reviews.tsv',delimiter='\t')


dataset['Review'][0]
clean_Review=[]
for i in range(1000):
    Review=re.sub('![\w]*',' ',dataset['Review'][i])
    Review=re.sub('[^a-zA-Z]',' ',Review)
    
    Review=Review.lower()
    Review=Review.split()
    
    Review=[ps.stem(token) for token in Review if not Review in stopwords.words('english')]
    Review=' '.join(Review)
    clean_Review.append(Review)

from sklearn.feature_extraction.text import CountVectorizer
cv= CountVectorizer(max_features=3000)
X= cv.fit_transform(clean_Review)

def check():
    clean_new=[]
    X_new=re.sub('![\w]*',' ',X_new)
    X_new=re.sub('[^a-zA-Z]',' ',X_new)
    
    X_new=X_new.lower()
    X_new=X_new.split()
    
    X_new=[ps.stem(token) for token in X_new if not X_new in stopwords.words('english')]
    X_new=' '.join(X_new)
    clean_new.append(X_new)
    from sklearn.feature_extraction.text import CountVectorizer
    cv= CountVectorizer(max_features=3000)
    X_new=cv.fit_transform(clean_new)
    X_new=X_new.toarray()
#x2=cv.fit_transform(clean_Review[990])
X=X.toarray()

print(cv.get_feature_names())

y=dataset['Liked'].values

from sklearn.model_selection import train_test_split
X_train,X_test,y_train,y_test=train_test_split(X,y)

from sklearn.svm import SVC
svm=SVC()
svm.fit(X,y)
svm.score(X,y)
svm.score(X_train,y_train)
svm.score(X_test,y_test)

#y2=svm.predict(dataset['Review'][0])
X_new='food is very delicious!!!'
y_new=svm.predict(X_new)


from sklearn.neighbors import KNeighborsClassifier
knn=KNeighborsClassifier()
knn.fit(X_train,y_train)
knn.score(X_train,y_train)
knn.score(X_test,y_test)

from sklearn.linear_model import LogisticRegression
lr=LogisticRegression()
lr.fit(X_train,y_train)
lr.fit(X,y)
lr.score(X_train,y_train)
lr.score(X_test,y_test)
y_new=lr.predict(X_new)


















